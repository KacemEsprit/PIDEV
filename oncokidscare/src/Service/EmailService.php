<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Rendezvous;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendAppointmentConfirmation(Rendezvous $rendezvous): void
    {
        try {
            // Validate email address
            if (!filter_var($rendezvous->getPatient()->getEmail(), FILTER_VALIDATE_EMAIL)) {
                throw new \InvalidArgumentException('Invalid email address for patient');
            }

            // Validate appointment date
            if ($rendezvous->getDateTime() < new \DateTime()) {
                throw new \InvalidArgumentException('Appointment date cannot be in the past');
            }

            error_log('Starting email send process...');
            error_log('Patient email: ' . $rendezvous->getPatient()->getEmail());
            error_log('Doctor name: ' . $rendezvous->getDoctor()->getPrenom() . ' ' . $rendezvous->getDoctor()->getNom());
            error_log('Appointment date: ' . $rendezvous->getDateTime()->format('Y-m-d H:i:s'));
            
            $email = (new Email())
                ->from('dakohgamer2002@gmail.com')
                ->to($rendezvous->getPatient()->getEmail())
                ->subject('Rendez-vous Confirmé - OncoKidsCare')
                ->html($this->getAppointmentEmailTemplate($rendezvous))
                ->priority(Email::PRIORITY_HIGH);

            error_log('Email object created, attempting to send...');
            
            $this->mailer->send($email);
            
            error_log('Email sent successfully!');
        } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
            error_log('Transport error while sending email: ' . $e->getMessage());
            error_log('Debug info: ' . $e->getDebug());
            throw new \RuntimeException('Failed to send email: ' . $e->getMessage(), 0, $e);
        } catch (\Exception $e) {
            error_log('General error while sending email: ' . $e->getMessage());
            error_log('Stack trace: ' . $e->getTraceAsString());
            throw new \RuntimeException('Failed to send email: ' . $e->getMessage(), 0, $e);
        }
    }

    private function getAppointmentEmailTemplate(Rendezvous $rendezvous): string
    {
        $doctor = $rendezvous->getDoctor();
        $patient = $rendezvous->getPatient();
        $dateTime = $rendezvous->getDateTime();
        
        // Format the date in French
        setlocale(LC_TIME, 'fr_FR.UTF-8');
        $formattedDate = strftime('%A %d %B %Y', $dateTime->getTimestamp());
        
        return "
            <html>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            </head>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0;'>
                <div style='max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff;'>
                    <div style='text-align: center; margin-bottom: 30px;'>
                        <h1 style='color: #2c3e50; margin-bottom: 10px;'>OncoKidsCare</h1>
                        <h2 style='color: #27ae60;'>Confirmation de Rendez-vous</h2>
                    </div>
                    
                    <p style='font-size: 16px;'>Cher(e) {$patient->getPrenom()},</p>
                    
                    <p style='font-size: 16px;'>Nous confirmons votre rendez-vous avec Dr. {$doctor->getPrenom()} {$doctor->getNom()}.</p>
                    
                    <div style='background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                        <h3 style='color: #2c3e50; margin-top: 0;'>Détails du Rendez-vous:</h3>
                        <ul style='list-style: none; padding-left: 0; margin: 0;'>
                            <li style='margin-bottom: 10px;'>📅 <strong>Date:</strong> {$formattedDate}</li>
                            <li style='margin-bottom: 10px;'>⏰ <strong>Heure:</strong> {$dateTime->format('H:i')}</li>
                            <li style='margin-bottom: 10px;'>👨‍⚕️ <strong>Médecin:</strong> Dr. {$doctor->getPrenom()} {$doctor->getNom()}</li>
                        </ul>
                    </div>
                    
                    <div style='margin: 30px 0; padding: 15px; border-left: 4px solid #3498db; background-color: #f7f9fc;'>
                        <p style='margin: 0; color: #2c3e50;'><strong>Rappel Important:</strong></p>
                        <p style='margin: 10px 0 0 0;'>Si vous devez reprogrammer ou annuler votre rendez-vous, veuillez nous contacter dès que possible.</p>
                    </div>
                    
                    <div style='margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;'>
                        <p style='margin: 0;'>Cordialement,</p>
                        <p style='margin: 5px 0;'><strong>L'équipe OncoKidsCare</strong></p>
                    </div>
                </div>
            </body>
            </html>
        ";
    }
}
