<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class TestMailerCommand extends Command
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function configure()
    {
        $this
            ->setName('app:test-mailer')
            ->setDescription('Test the mailer configuration');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $email = (new Email())
                ->from('kacem.benbrahim07@gmail.com')
                ->to('kacem.benbrahim07@gmail.com') // Send to your actual email
                ->subject('Test Email from OncoKidsCare')
                ->text('This is a test email to verify the mailer configuration.')
                ->html('<p>This is a test email to verify the mailer configuration.</p>');

            $this->mailer->send($email);
            $output->writeln('Test email sent successfully!');
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $output->writeln('Error sending email: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
