<?php

namespace App\Controller;

use App\Entity\DoctorAvailability;
use App\Entity\User;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/medecin2')]
#[IsGranted('ROLE_MEDECIN')]
class DoctorAvailabilityController extends AbstractController
{
    private $csrfTokenManager;

    public function __construct(CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/availability', name: 'app_doctor_availability', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $debug = [];
        /** @var User $user */
        $user = $this->getUser();
        $debug['user_id'] = $user ? $user->getId() : 'null';
        $debug['user_role'] = $user ? $user->getRole() : 'null';
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($user->getRole() !== 'ROLE_MEDECIN') {
            $debug['error'] = 'User role check failed: ' . $user->getRole();
            return $this->render('medecin2/DoctorAvailability.html.twig', ['debug' => $debug]);
        }

        // Get hours from 9 AM to 9 PM
        $hours = range(9, 21);
        $debug['hours'] = $hours;

        // Get the next 10 weekdays
        $dates = [];
        
        // Add the first Friday (14th)
        $firstFriday = new \DateTime('2025-02-14', new \DateTimeZone('Europe/Paris'));
        $dates[] = clone $firstFriday;
        
        // Add Monday 17th through Thursday 20th
        $date = new \DateTime('2025-02-17', new \DateTimeZone('Europe/Paris'));
        for ($i = 0; $i < 4; $i++) {
            $dates[] = clone $date;
            $date->modify('+1 day');
        }
        
        // Add the second Friday (21st)
        $secondFriday = new \DateTime('2025-02-21', new \DateTimeZone('Europe/Paris'));
        $dates[] = clone $secondFriday;
        
        // Add the remaining days (24th through 27th)
        $date = new \DateTime('2025-02-24', new \DateTimeZone('Europe/Paris'));
        for ($i = 0; $i < 4; $i++) {
            $dates[] = clone $date;
            $date->modify('+1 day');
        }

        // Sort dates to ensure they're in chronological order
        usort($dates, function($a, $b) {
            return $a->getTimestamp() - $b->getTimestamp();
        });

        $debug['num_dates'] = count($dates);

        // Get existing availabilities
        $availabilities = $entityManager->getRepository(DoctorAvailability::class)
            ->findBy(['doctor' => $user]);
        $debug['num_availabilities'] = count($availabilities);

        // If no availabilities exist, create default ones
        if (empty($availabilities)) {
            foreach ($dates as $d) {
                foreach ($hours as $hour) {
                    $availability = new DoctorAvailability();
                    $availability->setDoctor($user);
                    $availability->setDate($d);
                    $availability->setHour($hour);
                    $availability->setAvailable(true);
                    $entityManager->persist($availability);
                }
            }
            $entityManager->flush();
            
            // Reload availabilities after creating them
            $availabilities = $entityManager->getRepository(DoctorAvailability::class)
                ->findBy(['doctor' => $user]);
            $debug['num_availabilities_after_create'] = count($availabilities);
        }

        // Create availability map
        $availabilityMap = [];
        foreach ($dates as $d) {
            $dateKey = $d->format('Y-m-d');
            $availabilityMap[$dateKey] = [];
            foreach ($hours as $hour) {
                $availabilityMap[$dateKey][$hour] = false; // Default to unavailable
            }
        }
        $debug['num_dates_in_map'] = count($availabilityMap);
        
        // Debug first few availabilities
        if (!empty($availabilities)) {
            $debug['first_availability'] = [
                'id' => $availabilities[0]->getId(),
                'doctor_id' => $availabilities[0]->getDoctor()->getId(),
                'date' => $availabilities[0]->getDate()->format('Y-m-d'), // Changed format to exclude time
                'hour' => $availabilities[0]->getHour(),
                'is_available' => $availabilities[0]->isAvailable()
            ];
        }

        // Override defaults with actual settings
        foreach ($availabilities as $availability) {
            $dateKey = $availability->getDate()->format('Y-m-d');
            if (isset($availabilityMap[$dateKey])) {
                $availabilityMap[$dateKey][$availability->getHour()] = $availability->isAvailable();
            }
        }

        $debug['first_date_in_map'] = array_key_first($availabilityMap);
        $debug['map_has_hours'] = !empty(reset($availabilityMap));

        return $this->render('medecin2/DoctorAvailability.html.twig', [
            'dates' => $dates,
            'hours' => $hours,
            'availabilityMap' => $availabilityMap,
            'user' => $user,
            'debug' => $debug
        ]);
    }

    #[Route('/availability/update', name: 'app_doctor_availability_update', methods: ['POST'])]
    public function update(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $debug = [];
        /** @var User $user */
        $user = $this->getUser();
        $debug['user_id'] = $user ? $user->getId() : 'null';
        $debug['user_role'] = $user ? $user->getRole() : 'null';
        
        if (!$user || $user->getRole() !== 'ROLE_MEDECIN') {
            return new JsonResponse([
                'message' => 'Unauthorized',
                'success' => false,
                'debug' => $debug
            ], Response::HTTP_UNAUTHORIZED);
        }

        // Validate CSRF token
        $token = $request->headers->get('X-CSRF-TOKEN');
        if (!$this->csrfTokenManager->isTokenValid(new \Symfony\Component\Security\Csrf\CsrfToken('availability_token', $token))) {
            return new JsonResponse([
                'message' => 'Invalid CSRF token',
                'success' => false,
                'debug' => $debug
            ], Response::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);
        $debug['request_data'] = $data;
        if (!isset($data['date']) || !isset($data['hour']) || !isset($data['isAvailable'])) {
            return new JsonResponse([
                'message' => 'Missing required data',
                'success' => false,
                'debug' => $debug
            ], Response::HTTP_BAD_REQUEST);
        }

        try {
            $date = new \DateTime($data['date'], new \DateTimeZone('Europe/Paris'));
            $debug['parsed_date'] = $date->format('Y-m-d'); // Changed format to exclude time
            $hour = (int)$data['hour'];
            $debug['parsed_hour'] = $hour;
            $isAvailable = (bool)$data['isAvailable'];
            $debug['parsed_is_available'] = $isAvailable;

            // Find or create availability
            $availability = $entityManager->getRepository(DoctorAvailability::class)
                ->findOneBy([
                    'doctor' => $user,
                    'date' => $date,
                    'hour' => $hour
                ]);
            $debug['availability_found'] = $availability ? 'yes' : 'no';

            if (!$availability) {
                $availability = new DoctorAvailability();
                $availability->setDoctor($user);
                $availability->setDate($date);
                $availability->setHour($hour);
            }

            $availability->setAvailable($isAvailable);
            $entityManager->persist($availability);
            $entityManager->flush();

            return new JsonResponse([
                'message' => 'Availability updated successfully',
                'success' => true,
                'data' => [
                    'date' => $date->format('Y-m-d'),
                    'hour' => $hour,
                    'isAvailable' => $isAvailable
                ],
                'debug' => $debug
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => 'Error updating availability: ' . $e->getMessage(),
                'success' => false,
                'debug' => array_merge($debug, ['error' => $e->getMessage()])
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/availability/{doctorId}', name: 'app_patient_doctor_availability', methods: ['GET'])]
    public function doctorAvailability(int $doctorId, EntityManagerInterface $entityManager): Response
    {
        $doctor = $entityManager->getRepository(User::class)->find($doctorId);
        if (!$doctor || $doctor->getRole() !== 'ROLE_MEDECIN') {
            throw $this->createNotFoundException('Doctor not found');
        }

        // Get hours from 9 AM to 9 PM
        $hours = range(9, 21);

        // Get the next 10 weekdays
        $dates = [];
        
        // Add the first Friday (14th)
        $firstFriday = new \DateTime('2025-02-14', new \DateTimeZone('Europe/Paris'));
        $dates[] = clone $firstFriday;
        
        // Add Monday 17th through Thursday 20th
        $date = new \DateTime('2025-02-17', new \DateTimeZone('Europe/Paris'));
        for ($i = 0; $i < 4; $i++) {
            $dates[] = clone $date;
            $date->modify('+1 day');
        }
        
        // Add the second Friday (21st)
        $secondFriday = new \DateTime('2025-02-21', new \DateTimeZone('Europe/Paris'));
        $dates[] = clone $secondFriday;
        
        // Add the remaining days (24th through 27th)
        $date = new \DateTime('2025-02-24', new \DateTimeZone('Europe/Paris'));
        for ($i = 0; $i < 4; $i++) {
            $dates[] = clone $date;
            $date->modify('+1 day');
        }

        // Sort dates to ensure they're in chronological order
        usort($dates, function($a, $b) {
            return $a->getTimestamp() - $b->getTimestamp();
        });

        // Get existing availabilities
        $availabilities = $entityManager->getRepository(DoctorAvailability::class)
            ->findBy(['doctor' => $doctor]);

        // Create availability map
        $availabilityMap = [];
        foreach ($dates as $d) {
            $dateKey = $d->format('Y-m-d');
            $availabilityMap[$dateKey] = [];
            foreach ($hours as $hour) {
                $availabilityMap[$dateKey][$hour] = false; // Default to unavailable
            }
        }

        // Override defaults with actual settings
        foreach ($availabilities as $availability) {
            $dateKey = $availability->getDate()->format('Y-m-d');
            if (isset($availabilityMap[$dateKey])) {
                $availabilityMap[$dateKey][$availability->getHour()] = $availability->isAvailable();
            }
        }

        return $this->render('patient2/doctor_availability.html.twig', [
            'doctor' => $doctor,
            'dates' => $dates,
            'hours' => $hours,
            'availabilityMap' => $availabilityMap
        ]);
    }
}