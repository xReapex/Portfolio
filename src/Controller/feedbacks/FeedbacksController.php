<?php

namespace App\Controller\feedbacks;

use App\Entity\Feedbacks;
use App\Form\FeedBacksType;
use App\Repository\FeedbacksRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class FeedbacksController extends AbstractController
{

    /**
     * @Route("/feedback", name="app.feedbacks.home")
     * @param Request $request
     * @param FeedbacksRepository $feedbacksRepository
     * @return RedirectResponse|Response
     */
    public function showFeedbacks(Request $request, FeedbacksRepository $feedbacksRepository, Security $security)
    {
        $feedback = new Feedbacks();
        $form = $this->createForm(FeedBacksType::class, $feedback);

        $user = $security->getUser()->getUsername();
        $feedback->setAuthor($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($feedback);
                $em->flush();

                return $this->redirectToRoute('app.feedbacks.home', ["_fragment" => "created"]);
        }

        $feedbacks = $feedbacksRepository->findLastest()->getResult();

        return $this->render('feedbacks/feedbacks.html.twig', array(
            'form' => $form->createView(),
            'feedbacks' => $feedbacks
        ));

    }
}