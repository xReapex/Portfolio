<?php

namespace App\Controller\home;

use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

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
}