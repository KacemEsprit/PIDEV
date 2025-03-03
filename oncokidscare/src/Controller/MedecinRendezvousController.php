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
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/medecin2')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinRendezvousController extends AbstractController
{
    private $csrfTokenManager;

    public function __construct(CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/appointments', name: 'app_doctor_appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        $appointments = $entityManager->getRepository(Rendezvous::class)
            ->findBy(['doctor' => $user], ['dateTime' => 'ASC']);

        return $this->render('medecin2/appointments.html.twig', [
            'appointments' => $appointments,
            'csrf_token' => $this->csrfTokenManager->getToken('cancel_appointment')->getValue()
        ]);
    }

    #[Route('/cancel-appointment', name: 'app_doctor_cancel_appointment', methods: ['POST'])]
    public function cancelAppointment(
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        try {
            /** @var User $user */
            $user = $this->getUser();

            if (!$this->isCsrfTokenValid('cancel_appointment', $request->headers->get('X-CSRF-TOKEN'))) {
                return new JsonResponse(['message' => 'Token CSRF invalide'], Response::HTTP_BAD_REQUEST);
            }

            $data = json_decode($request->getContent(), true);
            if (!$data || !isset($data['appointmentId'])) {
                return new JsonResponse(['message' => 'ID de rendez-vous manquant'], Response::HTTP_BAD_REQUEST);
            }

            $appointment = $entityManager->getRepository(Rendezvous::class)->find($data['appointmentId']);
            if (!$appointment) {
                return new JsonResponse(['message' => 'Rendez-vous non trouvé'], Response::HTTP_NOT_FOUND);
            }

            if ($appointment->getDoctor() !== $user) {
                return new JsonResponse(['message' => 'Accès refusé à ce rendez-vous'], Response::HTTP_FORBIDDEN);
            }

            // Cancel the appointment
            $appointment->setStatus('cancelled');
            
            // Make the time slot available again
            $dateTime = $appointment->getDateTime();
            
            // Create a date object for DoctorAvailability (date only, no time)
            $date = new \DateTime($dateTime->format('Y-m-d'));
            $hour = (int)$dateTime->format('H');
            
            // Check if there's an existing availability record
            $availability = $entityManager->getRepository(DoctorAvailability::class)
                ->findOneBy([
                    'doctor' => $user,
                    'date' => $date,
                    'hour' => $hour
                ]);
                
            if ($availability) {
                $availability->setAvailable(true);
            } else {
                // Create a new availability record
                $availability = new DoctorAvailability();
                $availability->setDoctor($user);
                $availability->setDate($date);
                $availability->setHour($hour);
                $availability->setAvailable(true);
                $entityManager->persist($availability);
            }

            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Le rendez-vous a été annulé avec succès'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Une erreur est survenue: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
