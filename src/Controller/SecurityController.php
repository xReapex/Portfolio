<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Services\EmailManager;
use App\Services\TokenManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app.home');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param TokenManager $tokenGenerator
     * @param EmailManager $email
     * @return RedirectResponse|Response
     * @Route("/register", name="app.register")
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $encoder, TokenManager $tokenGenerator, EmailManager $email)
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app.home');
        }

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {
                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($hash);
                $user->setRoles(["ROLE_USER"]);

                // Utilisateur non-vérifié
                $user->setIsVerified(0);

                // Création du token
                $token = $user->setToken($tokenGenerator->createToken(16));

                // Envoie confirmation email
                $email->sendRegistrationEmail($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('security/register.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/confirm/{token}", name="app.confirm.registration")
     * @param $token
     * @param TokenManager $tokenManager
     * @return RedirectResponse
     */
    public function confirmEmail($token, TokenManager $tokenManager)
    {
        $user = $tokenManager->findToken($token);
        if($user)
        {
            $user->setIsVerified(1);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();

            // Flash Message Success
            $this->addFlash('success', 'Votre email a bien été confirmé !');

            return $this->redirectToRoute('app_login');
        }

        return $this->redirectToRoute('app_login');
    }
}
