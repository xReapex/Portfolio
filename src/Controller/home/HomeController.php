<?php

namespace App\Controller\home;

use App\Entity\Newsletter;
use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\NewsletterRepository;
use App\Services\EmailManager;
use App\Services\TokenManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class HomeController extends AbstractController
{


    private $mailer;
    private $token;

    public function __construct(\Swift_Mailer $mailer, TokenManager $token)
    {
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
        $email = $request->get('newsletter_email');

        if ($newsletterRepository->findOneBy(["email" => $email])){

            $this->addFlash('newsletter_error', "Une erreur est survenue, l'adresse email choisie est déja utilisée ! Veuillez en sélectionner une autre.");
            return $this->redirectToRoute('app.home');

        }
            // On créée l'objet
            $new_mail = new Newsletter();
            $new_mail->setEmail($email);

            //Push objet
            $manager->persist($new_mail);
            $manager->flush();

            $this->addFlash('newsletter_success', "Votre adresse mail a correctement été ajoutée et sera utilisée pour la newsletter !");

            return $this->redirectToRoute('app.home');
    }

    /**
     * @Route("/newsletter/send/all", name="app.newsletter.send.all")
     * @param EmailManager $emailManager
     * @return RedirectResponse
     */
    public function sendNewsletter(EmailManager $emailManager)
    {
        $emailManager->sendAllEmails();
        return $this->redirectToRoute('app.home');
    }


}