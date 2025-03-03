<?php

namespace App\Controller;

use App\Entity\DoctorAvailability;
use App\Entity\Rendezvous;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/medecin2')]
#[IsGranted('ROLE_MEDECIN')]
class DoctorAppointmentsController extends AbstractController
{
    #[Route('/appointments', name: 'app_doctor_appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        $appointments = $entityManager->getRepository(Rendezvous::class)
            ->findBy(['doctor' => $user], ['dateTime' => 'ASC']);

        return $this->render('medecin2/appointments.html.twig', [
            'appointments' => $appointments
        ]);
    }

    #[Route('/cancel-appointment', name: 'app_doctor_cancel_appointment', methods: ['POST'])]
    public function cancelAppointment(
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        /** @var User $user */
        $user = $this->getUser();

        if (!$this->isCsrfTokenValid('cancel_appointment', $request->headers->get('X-CSRF-TOKEN'))) {
            return $this->json(['message' => 'Token CSRF invalide'], Response::HTTP_BAD_REQUEST);
        }

        $data = json_decode($request->getContent(), true);
        $appointmentId = $data['appointmentId'] ?? null;
        if (!$appointmentId) {
            return $this->json(['message' => 'ID de rendez-vous manquant'], Response::HTTP_BAD_REQUEST);
        }

        $appointment = $entityManager->getRepository(Rendezvous::class)->find($appointmentId);
        if (!$appointment) {
            return $this->json(['message' => 'Rendez-vous non trouvé'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->getDoctor() !== $user) {
            return $this->json(['message' => 'Accès refusé à ce rendez-vous'], Response::HTTP_FORBIDDEN);
        }

        // Cancel the appointment
        $appointment->setStatus('cancelled');
        
        // Make the time slot available again
        $date = $appointment->getDateTime();
        $hour = (int)$date->format('H');
        
        // Check if there's an existing availability record
        $availability = $entityManager->getRepository(DoctorAvailability::class)
            ->findOneBy([
                'doctor' => $user,
                'date' => $date->format('Y-m-d'),
                'hour' => $hour
            ]);
            
        if ($availability) {
            $availability->setIsAvailable(true);
        } else {
            // Create a new availability record
            $availability = new DoctorAvailability();
            $availability->setDoctor($user);
            $availability->setDate(\DateTime::createFromFormat('Y-m-d', $date->format('Y-m-d')));
            $availability->setHour($hour);
            $availability->setIsAvailable(true);
            $entityManager->persist($availability);
        }

        $entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Le rendez-vous a été annulé avec succès'
        ]);
    }
}
