<?php

namespace App\Controller\home;

use App\Entity\Newsletter;
use App\Repository\NewsletterRepository;
use App\Services\TokenGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class HomeController extends AbstractController
{

    private $flashBag;
    private $mailer;
    private $token;

    public function __construct(FlashBagInterface $flashBag, \Swift_Mailer $mailer, TokenGenerator $token)
    {
        $this->flashBag = $flashBag;
        $this->mailer = $mailer;
        $this->token = $token;
    }

    /**
    * @Route("/", name="app.redirect")
    */
    public function redirectRoute()
    {
        return $this->redirectToRoute('app.home');
    }

    /**
     * @Route("/home", name="app.home")
     */
    public function showHome()
    {
        return $this->render('home/home.html.twig');
    }

    /**
     * @Route("/newsletter/add", name="app.newsletter.add")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param NewsletterRepository $newsletterRepository
     * @return RedirectResponse
     */

    public function addEmail(Request $request, EntityManagerInterface $manager, NewsletterRepository $newsletterRepository)
    {
        // Requete
        $email = $request->request->get('newsletter_email');

        if ($newsletterRepository->findOneBy(["email" => $email])){

            $this->flashBag->add('newsletter_error', "Une erreur est survenue, l'adresse email choisie est déja utilisée ! Veuillez en sélectionner une autre.");
            return $this->redirectToRoute('app.home');

        }else{
            // On créée l'objet
            $new_mail = new Newsletter();
            $new_mail->setEmail($email);

            //Push objet
            $manager->persist($new_mail);
            $manager->flush();

            $this->flashBag->add('newsletter_success', "Votre adresse mail a correctement été ajoutée et sera utilisée pour la newsletter !");
            return $this->redirectToRoute('app.home');
        }
    }

    /**
     * @Route("/test", name="app.test")
     */
    public function test()
    {
        $token = $this->token->createToken(16);

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('reapexautomaticemail@gmail.com')
            ->setTo('test@gmail.com')
            ->setBody("Email de test")
        ;
        $this->mailer->send($message);
        return $this->render('home/home.html.twig');
    }

    /**
     * @Route("/newsletter/send/all", name="app.newsletter.send.all")
     * @param NewsletterRepository $newsletterRepository
     * @return RedirectResponse
     */
    public function sendNewsletter(NewsletterRepository $newsletterRepository)
    {
        $emails = $newsletterRepository->findAll();

        foreach ($emails as $email)
        {
            $this->sendEmail($email->getEmail());
        }
        return $this->redirectToRoute('app.home');
    }

    private function sendEmail($email)
    {
        $token = $this->token->createToken(16);

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