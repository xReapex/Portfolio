<?php

namespace App\Controller\project;

use App\Services\ProjectId;
use App\Services\ProjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/projets", name="app.project")
     * @param ProjectManager $manager
     * @param ProjectId $IdManager
     * @return Response
     */
    public function showProjects(ProjectManager $manager, ProjectId $IdManager)
    {

        //Projets de formation
        $array = $IdManager->getFormationProjectID();
        $rand_formation = array_rand($array, 3);

        //Projet personnels
        $array1 = $IdManager->getPersonnalProjectID();
        $rand_perso = array_rand($array1, 3);

        //Projets de formation
        $projet1 = $manager->getProject($array[$rand_formation[0]]);
        $projet2 = $manager->getProject($array[$rand_formation[1]]);
        $projet3 = $manager->getProject($array[$rand_formation[2]]);

        //Projet personnels
        $projet_perso1 = $manager->getProject($array1[$rand_perso[0]]);
        $projet_perso2 = $manager->getProject($array1[$rand_perso[1]]);
        $projet_perso3 = $manager->getProject($array1[$rand_perso[2]]);

        return $this->render('project/project.html.twig', [
            "projet1" => $projet1,
            "projet2" => $projet2,
            "projet3" => $projet3,
            "projet4" => $projet_perso1,
            "projet5" => $projet_perso2,
            "projet6" => $projet_perso3
        ]);
    }

    /**
     * @Route("/projets/{id}", name="app.project.id")
     * @param $id
     * @param ProjectManager $manager
     */
    public function showProjectId($id ,ProjectManager $manager)
    {
        $res = $manager->isIdExists($id);

        if ($res)
        {
            $project = $manager->requestGitlab($id);
            $project['languages'] = $manager->getLanguages($id);

            return $this->render('project/project_id.html.twig', [
                "id" => $id,
                "project" => $project
            ]);
        }

    }
}