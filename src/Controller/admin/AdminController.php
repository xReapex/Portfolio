<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController
{

    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/admin", name="app.admin")
     * @param PaginatorInterface $paginator
     * @param UserRepository $userRepository
     * @param Request $request
     * @return Response
     */
    public function showAdmin(PaginatorInterface $paginator, UserRepository $userRepository, Request $request): Response
    {
        $users = $paginator->paginate(
            $userRepository->findLastest(),
            $request->query->getInt('page', 1),
            3);

        return $this->render('admin/admin.html.twig', [
            "current_menu" => 'users',
            'users' => $users
        ]);
    }

    /**
     * @Route("/user/delete/{id}", name="app.user.delete")
     * @param $id
     * @return RedirectResponse
     */
    public function deleteUser($id)
    {
        $user = $this->userRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash("remove", "L'utilisateur a bien été supprimé.");

        return $this->redirectToRoute('app.admin');
    }

    /**
     * @Route("/user/edit/{id}", name="app.user.edit")
     * @param User $user
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function editUser(User $user, Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoded = $encoder->encodePassword($user, $form->get('password')->getData());
            $user->setPassword($encoded);

            $manager->flush();

            $this->addFlash('success', "L'utilisateur a bien été mis à jour.");
            return $this->redirectToRoute('app.admin');
        }

        return $this->render(
            'admin/_edit_user.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/user/change/{id}", name="app.user.changerole")
     * @param $id
     * @param UserRepository $repository
     * @param Request $request
     * @return RedirectResponse
     */

    public function switchRole($id, UserRepository $repository, Request $request)
    {
        $user = $repository->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        if ($user->getRoles() === ["ROLE_USER"]) {
            $user->setRoles(["ROLE_ADMIN"]);
            $entityManager->flush();
            $this->addFlash('success', 'Le role de l\'utilisateur ' .$user->getId(). ' a été changé en "Admin"');

        }else{
            $user->setRoles(["ROLE_USER"]);
            $entityManager->flush();
            $this->addFlash('success', 'Le role de l\'utilisateur ' .$user->getId(). ' a été changé en "User"');
        }
        return $this->redirectToRoute('app.admin');
    }
}