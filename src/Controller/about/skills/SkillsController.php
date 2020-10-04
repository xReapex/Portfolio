<?php

namespace App\Controller\about\skills;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/skills/{name}", name="app.skills")
     * @param $name
     */
    public function showLanguage($name)
    {
        $name = strtolower($name);

        switch ($name)
        {
            case "html":
                $res = $this->render('skills/html.html.twig');
                break;
            case "css":
                $res = $this->render('skills/css.html.twig');
                break;
            case "twig":
                $res = $this->render('skills/twig.html.twig');
                break;
            case "python":
                $res = $this->render('skills/python.html.twig');
                break;
            case "php":
                $res = $this->render('skills/php.html.twig');
                break;
            case "java":
                $res = $this->render('skills/java.html.twig');
                break;
            case "javascript":
                $res = $this->render('skills/javascript.html.twig');
                break;
        }

        return $res;
    }
}