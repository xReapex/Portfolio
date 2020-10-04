<?php

namespace App\Controller\feedbacks;

use App\Entity\Feedbacks;
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

class FeedbacksController extends AbstractController
{

    /**
     * @Route("/feedback", name="app.feedbacks.home")
     * @param Request $request
     * @param FeedbacksRepository $feedbacksRepository
     * @return RedirectResponse|Response
     */
    public function showFeedbacks(Request $request, FeedbacksRepository $feedbacksRepository)
    {
        $feedback = new Feedbacks();
        $form = $this->createForm(FormType::class, $feedback);

        $form
            ->add('Title', TextType::class, [
                'help' => 'Quel est l\'objet de votre commentaire ?',
                'attr' => [
                    'placeholder' => 'Mon super commentaire !'
                ]
            ])

            ->add('Content', TextType::class, [
                'help' => 'Quel est votre message ?',
                'attr' => [
                    'placeholder' => 'Je pense que le site est ...'
                ]
            ])

            ->add('Author', TextType::class, [
                'help' => 'Qui êtes-vous ?',
                'attr' => [
                    'placeholder' => 'Je suis ...'
                ]
            ])
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

        $feedbacks = $feedbacksRepository->findLastest()->getResult();

        return $this->render('feedbacks/feedbacks.html.twig', array(
            'form' => $form->createView(),
            'feedbacks' => $feedbacks
        ));

    }
}