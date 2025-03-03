<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

class ResetPasswordController extends AbstractController
{
    private $logger;
    private $entityManager;
    private $mailer;
    private $tokenGenerator;

    public function __construct(
        LoggerInterface $logger,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        TokenGeneratorInterface $tokenGenerator
    ) {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->tokenGenerator = $tokenGenerator;
    }

    #[Route('/reset-password', name: 'app_reset_password_request', methods: ['GET', 'POST'])]
    public function request(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            
            $this->logger->info('Starting password reset process for email: ' . $email);
            
            try {
                // Always generate a token and send email for security (prevents email enumeration)
                $token = $this->tokenGenerator->generateToken();
                $resetUrl = $this->generateUrl('app_reset_password_confirm', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                
                $this->logger->debug('Generated reset URL: ' . $resetUrl);

                // Find the user
                $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
                
                if ($user) {
                    $this->logger->info('User found, setting reset token');
                    $user->setResetToken($token);
                    $this->entityManager->persist($user);
                    $this->entityManager->flush();
                    $this->logger->info('Reset token saved for user');
                }

                // Prepare the email
                $this->logger->debug('Preparing email');
                $emailMessage = (new Email())
                    ->from('kacem.benbrahim07@gmail.com')
                    ->to($email) // Send to the actual user's email
                    ->subject('Password Reset Request - OncoKidsCare')
                    ->html($this->renderView('reset_password/email.html.twig', [
                        'resetUrl' => $resetUrl,
                        'user' => $user ?? null
                    ]));

                // Send the email
                $this->logger->debug('Attempting to send email');
                $this->mailer->send($emailMessage);
                $this->logger->info('Reset password email sent successfully');
                
                // Add success message
                $this->addFlash('success', 'If an account exists with this email, a password reset link has been sent.');
                    
            } catch (\Exception $e) {
                $this->logger->error('Error in reset password process: ' . $e->getMessage(), [
                    'exception' => $e,
                    'trace' => $e->getTraceAsString(),
                    'email' => $email
                ]);
                $this->addFlash('error', 'An error occurred while processing your request. Please try again.');
            }

            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/request.html.twig');
    }

    #[Route('/reset-password/confirm/{token}', name: 'app_reset_password_confirm', methods: ['GET', 'POST'])]
    public function reset(
        Request $request,
        string $token,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $this->logger->info('Password reset confirmation requested for token: ' . $token);
        
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['resetToken' => $token]);

        if (!$user) {
            $this->logger->warning('Invalid reset token used: ' . $token);
            $this->addFlash('danger', 'Invalid or expired reset password token.');
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');

            if ($password !== $confirmPassword) {
                $this->addFlash('danger', 'The passwords do not match.');
                return $this->render('reset_password/reset.html.twig', ['token' => $token]);
            }

            try {
                $this->logger->info('Resetting password for user: ' . $user->getEmail());
                
                // Hash the new password
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
                
                // Clear the reset token
                $user->setResetToken(null);
                
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $this->logger->info('Password successfully reset for user: ' . $user->getEmail());
                $this->addFlash('success', 'Your password has been successfully reset. You can now log in with your new password.');
                
                return $this->redirectToRoute('app_login');
            } catch (\Exception $e) {
                $this->logger->error('Error resetting password: ' . $e->getMessage(), [
                    'exception' => $e,
                    'user_id' => $user->getId()
                ]);
                $this->addFlash('danger', 'An error occurred while resetting your password. Please try again.');
            }
        }

        return $this->render('reset_password/reset.html.twig', ['token' => $token]);
    }
}
