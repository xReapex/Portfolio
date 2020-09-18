<?php

namespace App\Controller\project;

use App\Services\ProjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="app.project")
     * @param ProjectManager $manager
     * @return Response
     */
    public function showProjects(ProjectManager $manager)
    {
        $projet1 = $manager->getLanguage(21095567);
        $projet2 = $manager->getLanguage(19872619);
        $projet3 = $manager->getLanguage(20577993);

        return $this->render('project/project.html.twig', [
            "projet1" => $projet1,
            "projet2" => $projet2,
            "projet3" => $projet3
        ]);
    }
}