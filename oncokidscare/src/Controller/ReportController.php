<?php

namespace App\Controller;

use App\Entity\Report;
use App\Entity\Rendezvous;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/medecin2')]
#[IsGranted('ROLE_MEDECIN')]
class ReportController extends AbstractController
{
    #[Route('/reports', name: 'app_doctor_reports')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $doctor = $this->getUser();
        
        // Get all appointments for the doctor that don't have reports yet
        $appointments = $entityManager->getRepository(Rendezvous::class)
            ->createQueryBuilder('rv')
            ->leftJoin('App\Entity\Report', 'r', 'WITH', 'r.rendezvous = rv')
            ->where('rv.doctor = :doctor')
            ->andWhere('r.id IS NULL')
            ->setParameter('doctor', $doctor)
            ->orderBy('rv.dateTime', 'DESC')
            ->getQuery()
            ->getResult();

        // Get all reports by the doctor
        $reports = $entityManager->getRepository(Report::class)
            ->findByDoctor($doctor);

        return $this->render('medecin2/reports.html.twig', [
            'appointments' => $appointments,
            'reports' => $reports
        ]);
    }

    #[Route('/report/new/{id}', name: 'app_doctor_report_new')]
    public function new(Rendezvous $rendezvous, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check if report already exists
        $existingReport = $entityManager->getRepository(Report::class)
            ->findOneBy(['rendezvous' => $rendezvous]);
            
        if ($existingReport) {
            $this->addFlash('error', 'Un rapport existe déjà pour ce rendez-vous.');
            return $this->redirectToRoute('app_doctor_reports');
        }

        if ($request->isMethod('POST')) {
            $content = $request->request->get('content');
            
            if (empty($content)) {
                $this->addFlash('error', 'Le contenu du rapport ne peut pas être vide.');
                return $this->render('medecin2/report_new.html.twig', [
                    'rendezvous' => $rendezvous
                ]);
            }

            $report = new Report();
            $report->setRendezvous($rendezvous);
            $report->setContent($content);
            $report->setDoctor($this->getUser());
            
            $entityManager->persist($report);
            $entityManager->flush();

            $this->addFlash('success', 'Le rapport a été créé avec succès.');
            return $this->redirectToRoute('app_doctor_reports');
        }

        return $this->render('medecin2/report_new.html.twig', [
            'rendezvous' => $rendezvous
        ]);
    }

    #[Route('/report/edit/{id}', name: 'app_doctor_report_edit')]
    public function edit(Report $report, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($report->getDoctor() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier ce rapport.');
        }

        if ($request->isMethod('POST')) {
            $content = $request->request->get('content');
            
            if (empty($content)) {
                $this->addFlash('error', 'Le contenu du rapport ne peut pas être vide.');
                return $this->render('medecin2/report_edit.html.twig', [
                    'report' => $report
                ]);
            }

            $report->setContent($content);
            $report->setUpdatedAt(new \DateTime());
            
            $entityManager->flush();

            $this->addFlash('success', 'Le rapport a été modifié avec succès.');
            return $this->redirectToRoute('app_doctor_reports');
        }

        return $this->render('medecin2/report_edit.html.twig', [
            'report' => $report
        ]);
    }
}