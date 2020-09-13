<?php

namespace App\Controller\project;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="app.project")
     */
    public function showProjects()
    {
        return $this->render('project/project.html.twig');
    }
}