<?php

namespace App\Controller\feedbacks;

use App\Entity\Feedbacks;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;

class FeedbacksController extends AbstractController
{

    /**
     * @Route("/feedback", name="app.feedbacks.home")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function showFeedbacks(Request $request)
    {
        $feedback = new Feedbacks();
        $form = $this->createForm(FormType::class, $feedback);

        $form
            ->add('Title', TextType::class)
            ->add('Content', TextType::class)
            ->add('Author', TextType::class)
            ->add('Submit', SubmitType::class)
            ;

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($feedback);
                $em->flush();
                $feedback = $feedback->setDate(new \DateTime("now"));
                $em->persist($feedback);
                $em->flush();
                return $this->redirectToRoute('app.feedbacks.home', ["_fragment" => "created"]);
            }
        }

        return $this->render('feedbacks/feedbacks.html.twig', array(
            'form' => $form->createView()
        ));

    }
}