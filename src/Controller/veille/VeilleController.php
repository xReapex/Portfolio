<?php

namespace App\Controller\veille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VeilleController extends AbstractController
{

    /**
     * @Route("/veille", name="app.veille")
     */
    public function showVeille()
    {
        return $this->render('veille/veille.html.twig');
    }
}