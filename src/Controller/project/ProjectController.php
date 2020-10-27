<?php

namespace App\Controller\project;

use App\Services\ProjectId;
use App\Services\ProjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/projets", name="app.project")
     * @param ProjectManager $manager
     * @return Response
     */
    public function showProjects(ProjectManager $manager)
    {

        //Projets de formation
        $array = ProjectId::PROJET_FORMATION_GIT_LAB_IDS;
        $rand_formation = array_rand($array, 3);

        //Projet personnels
        $array1 = ProjectId::PROJET_PERSONNEL_GIT_LAB_IDS;
        $rand_perso = array_rand($array1, 3);

        //Projets de formation
        $projet1 = $manager->getProject($array[$rand_formation[0]]);
        $projet2 = $manager->getProject($array[$rand_formation[1]]);
        $projet3 = $manager->getProject($array[$rand_formation[2]]);

        //Projet personnels
        $projet_perso1 = $manager->getProject($array1[$rand_perso[0]]);
        $projet_perso2 = $manager->getProject($array1[$rand_perso[1]]);
        $projet_perso3 = $manager->getProject($array1[$rand_perso[2]]);

        $res = $this->render('project/project.html.twig', [
            "projet1" => $projet1,
            "projet2" => $projet2,
            "projet3" => $projet3,
            "projet4" => $projet_perso1,
            "projet5" => $projet_perso2,
            "projet6" => $projet_perso3
        ]);
        return $res->setMaxAge(3600);
    }

    /**
     * @Route("/projets/{id}", name="app.project.id")
     * @param $id
     * @param ProjectManager $manager
     * @return RedirectResponse|Response
     */
    public function showProjectId($id ,ProjectManager $manager)
    {

        if ($manager->isIdExists($id))
        {
            $project = $manager->requestGitlab($id);
            $project['languages'] = $manager->getLanguages($id);
            $chart = $manager->createChart($id);

            return $this->render('project/project_id.html.twig', [
                "project" => $project,
                'piechart' => $chart
            ]);
        }
        return $this->redirectToRoute('app.project');
    }
}