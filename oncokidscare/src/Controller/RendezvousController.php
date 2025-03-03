<?php

namespace App\Controller;

use App\Entity\DoctorAvailability;
use App\Entity\Rendezvous;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Csrf\CsrfToken;
use App\Service\EmailService;

class RendezvousController extends AbstractController
{
    #[Route('/patient2/rendezvous', name: 'app_rendezvous')]
    #[IsGranted('ROLE_PATIENT')]
    public function index(UserRepository $userRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user || !$user->isPatient()) {
            return $this->redirectToRoute('app_login');
        }

        $doctors = $userRepository->findBy(['role' => 'ROLE_MEDECIN']);

        return $this->render('patient2/rendezvous.html.twig', [
            'doctors' => $doctors
        ]);
    }

    #[Route('/patient2/rendezvous/doctor/{id}', name: 'app_patient_rendezvous_doctor', methods: ['GET'])]
    #[IsGranted('ROLE_PATIENT')]
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

        // Get existing appointments
        $rendezvous = $entityManager->getRepository(Rendezvous::class)
            ->findBy(['doctor' => $doctor, 'status' => 'confirmed']);

        // Get doctor availability
        $doctorAvailability = $entityManager->getRepository(DoctorAvailability::class)
            ->findBy(['doctor' => $doctor]);

        // Get exactly Monday through Friday of the current week
        $dates = [];
        $currentDate = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $currentDate->setTime(0, 0);
        
        // Move to Monday of current week
        $dayOfWeek = (int)$currentDate->format('N');
        if ($dayOfWeek > 1) { // If not Monday
            $currentDate->modify('last monday');
        }
        
        // Add exactly Monday through Friday
        for ($i = 0; $i < 5; $i++) {
            $dates[] = clone $currentDate;
            $currentDate->modify('+1 day');
        }

        $hours = range(9, 21); // Define the hours range from 9 to 21

        return $this->render('patient2/doctor_availability.html.twig', [
            'doctor' => $doctor,
            'dates' => $dates,
            'hours' => $hours, // Pass the hours variable to the template
            'rendezvous' => $rendezvous,
            'doctorAvailability' => $doctorAvailability
        ]);
    }

    #[Route('/patient2/rendezvous/book', name: 'app_patient_rendezvous_book', methods: ['POST'])]
    #[IsGranted('ROLE_PATIENT')]
    public function bookAppointment(
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): JsonResponse {
        try {
            // Verify CSRF token
            $submittedToken = $request->headers->get('X-CSRF-TOKEN');
            if (!$this->isCsrfTokenValid('rendezvous_token', $submittedToken)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Token CSRF invalide'
                ], 400);
            }

            if (!$request->getContent()) {
                return $this->json([
                    'success' => false,
                    'message' => 'No data received'
                ], 400);
            }

            $data = json_decode($request->getContent(), true);
            if (!$data) {
                return $this->json([
                    'success' => false,
                    'message' => 'Invalid JSON data'
                ], 400);
            }

            /** @var User $user */
            $user = $this->getUser();
            if (!$user || !$user->isPatient()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Unauthorized'
                ], 401);
            }

            if (!isset($data['doctorId'], $data['date'], $data['hour'])) {
                return $this->json([
                    'success' => false,
                    'message' => 'Missing required fields'
                ], 400);
            }

            $doctor = $entityManager->getRepository(User::class)->find($data['doctorId']);
            if (!$doctor || $doctor->getRole() !== 'ROLE_MEDECIN') {
                return $this->json([
                    'success' => false,
                    'message' => 'Doctor not found'
                ], 404);
            }

            // Validate the date format and create DateTime object
            try {
                $date = new \DateTime($data['date']);
                $date->setTime((int)$data['hour'], 0);

                // Validate that the appointment is not in the past
                $now = new \DateTime();
                if ($date < $now) {
                    return $this->json([
                        'success' => false,
                        'message' => 'La date du rendez-vous ne peut pas être dans le passé'
                    ], 400);
                }

                // Validate that the hour is between 9 and 21
                $hour = (int)$data['hour'];
                if ($hour < 9 || $hour >= 21) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Les rendez-vous sont disponibles entre 9h et 21h'
                    ], 400);
                }

                // Validate that the day is a weekday
                $dayOfWeek = (int)$date->format('N');
                if ($dayOfWeek > 5) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Les rendez-vous sont uniquement disponibles en semaine'
                    ], 400);
                }
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Format de date invalide'
                ], 400);
            }

            // Check for existing appointments
            $existingAppointment = $entityManager->getRepository(Rendezvous::class)->findOneBy([
                'doctor' => $doctor,
                'dateTime' => $date,
                'status' => 'confirmed'
            ]);

            if ($existingAppointment) {
                return $this->json([
                    'success' => false,
                    'message' => 'Ce créneau est déjà réservé'
                ], 409);
            }

            // Start transaction
            $entityManager->beginTransaction();
            try {
                $appointment = new Rendezvous();
                $appointment->setDoctor($doctor);
                $appointment->setPatient($user);
                $appointment->setDateTime($date);
                $appointment->setStatus('confirmed');
                
                $entityManager->persist($appointment);
                $entityManager->flush();

                // Send confirmation email
                try {
                    $emailService->sendAppointmentConfirmation($appointment);
                    $emailSent = true;
                } catch (\Exception $e) {
                    error_log('Email error: ' . $e->getMessage());
                    $emailSent = false;
                }

                $entityManager->commit();

                return $this->json([
                    'success' => true,
                    'message' => $emailSent 
                        ? 'Rendez-vous confirmé avec succès. Un email de confirmation vous a été envoyé.'
                        : 'Rendez-vous confirmé avec succès. L\'email de confirmation n\'a pas pu être envoyé.',
                    'emailSent' => $emailSent
                ], 200);

            } catch (\Exception $e) {
                $entityManager->rollback();
                error_log('Transaction error: ' . $e->getMessage());
                return $this->json([
                    'success' => false,
                    'message' => 'Une erreur est survenue lors de la réservation'
                ], 500);
            }

        } catch (\Exception $e) {
            error_log('Booking error: ' . $e->getMessage());
            return $this->json([
                'success' => false,
                'message' => 'Une erreur est survenue'
            ], 500);
        }
    }
}