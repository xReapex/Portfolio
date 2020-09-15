<?php

namespace App\Controller\project;

use App\Repository\DiscordProjectImageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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