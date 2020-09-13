<?php

namespace App\Controller\about;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="app.about")
     */
    public function showAbout()
    {
        return $this->render('about/about.html.twig');
    }
}
