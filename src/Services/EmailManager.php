<?php

namespace App\Services;

use App\Repository\NewsletterRepository;
use Twig\Environment;

class EmailManager
{

    private $tokenGenerator;
    private $newsletterRepository;
    private $mailer;
    private $twig;

    public function __construct(TokenGenerator $tokenGenerator, NewsletterRepository $newsletterRepository, \Swift_Mailer $mailer, Environment $twig)
    {
        $this->tokenGenerator = $tokenGenerator;
        $this->newsletterRepository = $newsletterRepository;
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendAllEmails()
    {
        $emails = $this->newsletterRepository->findAll();

        foreach ($emails as $email)
        {
            $this->sendEmail($email->getEmail());
        }
    }

    public function sendEmail($email)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('reapexautomaticemail@gmail.com')
            ->setTo($email)
            ->setBody("toast")
        ;
        $this->mailer->send($message);
    }

    public function sendRegistrationEmail($email, $token)
    {
        $message = (new \Swift_Message('Email de confirmation !'))
            ->setFrom('reapexautomaticemail@gmail.com')
            ->setTo($email)
            ->setBody(
                $this->twig->render(
                // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    ['token' => $token]
                ),
                'text/html'
            )
        ;
        $this->mailer->send($message);
    }

}