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

        $i = 0;
        $res = [];

        foreach ($rss_load->channel->item as $item){
            array_push($res, $item);
            $i++;

            if ($i > 5) break;
        };

        return $this->render('veille/veille.html.twig', [
            "items" => $res
        ]);
    }
}