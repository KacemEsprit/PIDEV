<?php

namespace App\Controller;

use App\Entity\DoctorAvailability;
use App\Entity\Rendezvous;
use App\Entity\User;
use App\Repository\DoctorAvailabilityRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/patient2')]
#[IsGranted('ROLE_PATIENT')]
class RendezvousController extends AbstractController
{
    private $csrfTokenManager;

    public function __construct(CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/rendezvous', name: 'app_patient_rendezvous', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user || !$user->isPatient()) {
            return $this->redirectToRoute('app_login');
        }

        // Get all doctors
        $doctors = $userRepository->findBy(['role' => 'ROLE_MEDECIN']);

        return $this->render('patient2/rendezvous.html.twig', [
            'doctors' => $doctors
        ]);
    }

    #[Route('/rendezvous/doctor/{id}', name: 'app_patient_rendezvous_doctor', methods: ['GET'])]
    public function doctorAvailability(
        User $doctor,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user || !$user->isPatient()) {
            return $this->redirectToRoute('app_login');
        }

        if ($doctor->getRole() !== 'ROLE_MEDECIN') {
            throw $this->createNotFoundException('Doctor not found');
        }

        // Get hours from 9 AM to 9 PM
        $hours = range(9, 21);

        // Get the next 10 weekdays (2 weeks)
        $dates = [];
        $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $date->setTime(0, 0);

        // If current day is weekend, move to next Monday
        $currentDayOfWeek = (int)$date->format('N');
        if ($currentDayOfWeek >= 6) { // 6 = Saturday, 7 = Sunday
            $daysUntilMonday = 8 - $currentDayOfWeek; // 2 for Saturday, 1 for Sunday
            $date->modify("+{$daysUntilMonday} days");
        }

        while (count($dates) < 10) {
            $dayOfWeek = (int)$date->format('N');
            if ($dayOfWeek >= 1 && $dayOfWeek <= 5) { // 1 (Monday) through 5 (Friday)
                $dates[] = clone $date;
            }
            $date->modify('+1 day');
        }

        // Get doctor's availabilities
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

        // Fill in available slots
        foreach ($availabilities as $availability) {
            $dateKey = $availability->getDate()->format('Y-m-d');
            if (isset($availabilityMap[$dateKey])) {
                $availabilityMap[$dateKey][$availability->getHour()] = $availability->isAvailable();
            }
        }

        // Get existing appointments to block those slots
        $existingAppointments = $entityManager->getRepository(Rendezvous::class)
            ->findBy(['doctor' => $doctor, 'status' => 'confirmed']);

        // Block slots that are already booked
        foreach ($existingAppointments as $appointment) {
            $dateKey = $appointment->getDateTime()->format('Y-m-d');
            $hour = (int)$appointment->getDateTime()->format('H');
            if (isset($availabilityMap[$dateKey][$hour])) {
                $availabilityMap[$dateKey][$hour] = false;
            }
        }

        return $this->render('patient2/doctor_availability.html.twig', [
            'doctor' => $doctor,
            'dates' => $dates,
            'hours' => $hours,
            'availabilityMap' => $availabilityMap
        ]);
    }

    #[Route('/rendezvous/book', name: 'app_patient_rendezvous_book', methods: ['POST'])]
    public function bookAppointment(
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user || !$user->isPatient()) {
            return new JsonResponse([
                'message' => 'Unauthorized',
                'success' => false
            ], Response::HTTP_UNAUTHORIZED);
        }

        // Validate CSRF token
        $token = $request->headers->get('X-CSRF-TOKEN');
        if (!$this->csrfTokenManager->isTokenValid(new \Symfony\Component\Security\Csrf\CsrfToken('rendezvous_token', $token))) {
            return new JsonResponse([
                'message' => 'Invalid CSRF token',
                'success' => false
            ], Response::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);
        if (!isset($data['doctorId']) || !isset($data['date']) || !isset($data['hour'])) {
            return new JsonResponse([
                'message' => 'Missing required data',
                'success' => false
            ], Response::HTTP_BAD_REQUEST);
        }

        try {
            $doctor = $entityManager->getRepository(User::class)->find($data['doctorId']);
            if (!$doctor || $doctor->getRole() !== 'ROLE_MEDECIN') {
                throw new \Exception('Doctor not found');
            }

            $date = new \DateTime($data['date'], new \DateTimeZone('Europe/Paris'));
            $hour = (int)$data['hour'];

            // Check if slot is available
            $availability = $entityManager->getRepository(DoctorAvailability::class)
                ->findOneBy([
                    'doctor' => $doctor,
                    'date' => $date,
                    'hour' => $hour
                ]);

            if (!$availability || !$availability->isAvailable()) {
                throw new \Exception('This slot is not available');
            }

            // Check if slot is already booked
            $existingAppointment = $entityManager->getRepository(Rendezvous::class)
                ->findOneBy([
                    'doctor' => $doctor,
                    'dateTime' => $date->setTime($hour, 0),
                    'status' => 'confirmed'
                ]);

            if ($existingAppointment) {
                throw new \Exception('This slot is already booked');
            }

            // Create new appointment
            $appointment = new Rendezvous();
            $appointment->setDoctor($doctor);
            $appointment->setPatient($user);
            $appointment->setDateTime($date->setTime($hour, 0));
            $appointment->setStatus('confirmed');

            $entityManager->persist($appointment);
            $entityManager->flush();

            return new JsonResponse([
                'message' => 'Rendez-vous réservé avec succès',
                'success' => true
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => $e->getMessage(),
                'success' => false
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}