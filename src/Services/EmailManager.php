<?php

namespace App\Services;

use App\Entity\User;
use App\Repository\FeedbacksRepository;
use App\Repository\NewsletterRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class EmailManager
{

    private $tokenGenerator;
    private $newsletterRepository;
    private $mailer;
    private $twig;
    private $manager;

    public function __construct(TokenManager $tokenGenerator, NewsletterRepository $newsletterRepository, \Swift_Mailer $mailer, Environment $twig, EntityManagerInterface $manager)
    {
        $this->tokenGenerator = $tokenGenerator;
        $this->newsletterRepository = $newsletterRepository;
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->manager = $manager;
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
                $this->twig->render(
                    "emails/email_template.html.twig"
                )
            )
        ;
        $this->mailer->send($message);
    }

    public function sendRegistrationEmail(User $user)
    {
        $message = (new \Swift_Message('Email de confirmation !'))
            ->setFrom('reapexautomaticemail@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->twig->render(
                // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    [
                        'token' => $user->getToken(),
                        'username' => $user->getUsername(),
                        'email' => $user->getEmail(),
                    ]
                ),
                'text/html'
            )
        ;
        $this->mailer->send($message);
    }

    public function unsubscribe($email)
    {
        $record = $this->newsletterRepository->findOneBy([
            'email' => $email
        ]);
        $this->manager->remove($record);
        $this->manager->flush();
    }

}