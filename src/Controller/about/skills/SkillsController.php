<?php

namespace App\Controller\about\skills;

use App\Services\SkillsManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/skills/{name}", name="app.skills")
     * @param $name
     * @param SkillsManager $manager
     * @return Response
     */
    public function showLanguage($name, SkillsManager $manager)
    {
        if ($manager->isTemplateExistsBySkill($name))
        {
            return $this->render("skills/$name.html.twig");
        }

        return $this->redirectToRoute("app.about", ["_fragment" => "competences"]);
    }
}