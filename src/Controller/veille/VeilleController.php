<?php

namespace App\Controller\veille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VeilleController extends AbstractController
{

    /**
     * @Route("/veille", name="app.veille")
     */
    public function showVeille(): Response
    {

        // Flux RSS 01.net
        $rss_link = "https://www.01net.com/rss/actualites/securite/";
        $rss_load = simplexml_load_file($rss_link);

        // img
        $link = $rss_load->channel->item->enclosure['url'];

        return $this->render('veille/veille.html.twig', [
            'link' => $link
        ]);
    }
}