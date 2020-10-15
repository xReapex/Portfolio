<?php

namespace App\Controller\about;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AboutController
 * @package App\Controller\about
 */
class AboutController extends AbstractController
{
    /**
     *@Route("/about", name="app.about")
     *@return Response
     */
    public function showAbout(): Response
    {
        return $this->render('about/about.html.twig');
    }
}
