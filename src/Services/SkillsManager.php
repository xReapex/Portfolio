<?php

namespace App\Services;

use Twig\Environment;

class SkillsManager
{

    protected $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function showSkill($name)
    {
        $name = strtolower($name);

        if (1 === $this->isTemplateExistsBySkill($name))
        {
            return "skills/$name.html.twig";
        }
        return "about/about.html.twig";
    }

    private function isTemplateExistsBySkill($name)
    {
        if ($this->twig->getLoader()->exists("skills/$name.html.twig"))
        {
            return 1;
        }
        return 0;
    }
}