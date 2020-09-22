<?php

namespace App\Controller\skills;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/skills", name="app.skills")
     */
    public function showSkills()
    {
        return $this->render('skills/skills.html.twig');
    }

    /**
     * Route("/skills/{name}", name="app.skills.name")
     * @param $name
     * @return Response
     */
    public function showSkillsByName($name)
    {
        return $this->render('skills/skills_fiche.html.twig', [
            "name" => $name
        ]);
    }
}