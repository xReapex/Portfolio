<?php

namespace App\Controller\feedbacks;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FeedbacksController extends AbstractController
{

    /**
     * @Route("/feedbacks", name="app.feedbacks")
     */
    public function showFeedbacks()
    {
        return $this->render('feedbacks.html.twig');
    }

}