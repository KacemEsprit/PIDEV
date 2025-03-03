<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\LigneCommandeRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class MailingController extends AbstractController
{
    #[Route('/mail/send/{id}/{emailType}', name: 'app_mail_send', methods: ['GET'])]
    public function sendMail(
        Commande $commande,
        MailerInterface $mailer,
        LoggerInterface $logger,
        LigneCommandeRepository $ligneCommandeRepository,
        string $emailType = 'default'
    ): Response {
        $user = $commande->getPatient();
        $ligneCommandes = $ligneCommandeRepository->findBy(['commande' => $commande]);

        $htmlContent = "
        <div style='font-family: Arial, sans-serif; color: #333; padding: 20px;'>
            <div style='max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);'>
                <header style='background-color:rgb(11, 203, 206); padding: 10px; color: white; text-align: center;'>
                    <h1 style='margin: 0; font-size: 24px;'>Oncokidscare - Facture de Commande</h1>
                </header>
                <section style='padding: 20px; background-color: #f9f9f9;'>
                    <p>Bonjour <strong>{$user->getPrenom()} {$user->getNom()}</strong>,</p>
                    <p>Votre commande est en attente de traitement.</p>
                    <h2 style='font-size: 20px; color: #0bcbce;'>Facture - Commande #{$commande->getId()}</h2>
                    <p><strong>Status :</strong> {$commande->getStatus()}</p>
                    <p><strong>Date :</strong> {$commande->getDateCommande()->format('Y-m-d H:i:s')}</p>
                    <table style='width: 100%; border-collapse: collapse; margin: 20px 0;'>
                        <thead>
                            <tr style='background-color:#13f0f4; color: white;'>
                                <th style='padding: 10px; border: 1px solid #ddd;'>Médicament</th>
                                <th style='padding: 10px; border: 1px solid #ddd;'>Quantité</th>
                                <th style='padding: 10px; border: 1px solid #ddd;'>Prix</th>
                            </tr>
                        </thead>
                        <tbody>";

        foreach ($ligneCommandes as $ligneCommande) {
            $medicament = $ligneCommande->getMedicament();
            $htmlContent .= "<tr>
                <td style='padding: 10px; border: 1px solid #ddd;'>{$medicament->getNom()}</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>{$ligneCommande->getQuantite()}</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>{$medicament->getPrix()} dt</td>
            </tr>";
        }

        $htmlContent .= "
                        </tbody>
                    </table>
                    <p style='text-align: center;'>
                        <strong>Merci pour votre confiance !</strong>
                    </p>
                </section>
                <footer style='background-color: #0bcbce; padding: 10px; color: white; text-align: center;'>
                    <p style='margin: 0;'>Oncokidscare</p>
                </footer>
            </div>
        </div>";

        $pdfApiKey = $_ENV['PDF_API_KEY'];
        $pdfApiEndpoint = $_ENV['PDF_API_ENDPOINT'];
        $pdfFileName = 'facture_' . $commande->getId() . '.pdf';

        $httpClient = HttpClient::create();
        $pdfResponse = $httpClient->request('POST', $pdfApiEndpoint, [
            'headers' => [
                'x-api-key' => $pdfApiKey,
                'Content-Type' => 'application/json'
            ],
            'json' => [
                'html' => $htmlContent,
                'name' => $pdfFileName,
            ]
        ]);

        if ($pdfResponse->getStatusCode() !== 200) {
            $logger->error('Échec de la génération du PDF : ' . $pdfResponse->getContent(false));
            $this->addFlash('error', 'Échec de la génération du PDF.');
            return $this->redirectToRoute('app_commande_index');
        }

        $pdfUrl = $pdfResponse->toArray()['url'];
        $logger->info('PDF généré avec succès : ' . $pdfUrl);

        $qrApiEndpoint = $_ENV['QR_API_ENDPOINT'];
        $qrCodeUrl = $qrApiEndpoint . urlencode($pdfUrl);
        $logger->info('QR Code généré : ' . $qrCodeUrl);

        $subject = match ($emailType) {
            'order_edited' => 'Votre commande a été mise à jour',
            'order_confirmed' => 'Votre commande a été confirmée',
            default => 'Confirmation de votre commande',
        };

        $email = (new Email())
            ->from('oncokidscare <oncokidscare@gmail.com>')
            ->to($user->getEmail())
            ->subject($subject)
            ->html("
                <div style='font-family: Arial, sans-serif;'>
                    <h1 style='color:#0bcbce;'>{$subject}</h1>
                    <p>Bonjour <strong>{$user->getPrenom()} {$user->getNom()}</strong>,</p>
                    <p>Vous trouverez ci-dessous un QR code pour consulter votre facture :</p>
                    <p style='text-align: center;'>
                        <img src='{$qrCodeUrl}' alt='QR Code' style='max-width: 150px;'>
                    </p>
                    <p>Merci de votre confiance !</p>
                </div>
            ")
            ->attachFromPath($pdfUrl, $pdfFileName, 'application/pdf');

            try {
                $logger->info('Attempting to send email to ' . $user->getEmail());
                $mailer->send($email);
                $logger->info('Email successfully sent to ' . $user->getEmail());
                $this->addFlash('success', 'E-mail envoyé avec succès.');
            } catch (\Exception $e) {
                $logger->error('Failed to send email: ' . $e->getMessage());
                $this->addFlash('error', 'Échec de l\'envoi de l\'e-mail.');
            }
    
            $logger->info('Email sending process completed.');
            return $this->redirectToRoute('app_commande_index');
        }
}
