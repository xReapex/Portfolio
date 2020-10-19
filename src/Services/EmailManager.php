<?php

namespace App\Services;

use App\Repository\NewsletterRepository;

class EmailManager
{

    protected $tokenGenerator;
    protected $newsletterRepository;
    protected $mailer;

    public function __construct(TokenGenerator $tokenGenerator, NewsletterRepository $newsletterRepository, \Swift_Mailer $mailer)
    {
        $this->tokenGenerator = $tokenGenerator;
        $this->newsletterRepository = $newsletterRepository;
        $this->mailer = $mailer;
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
            ->setBody(
                $this->renderView(
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