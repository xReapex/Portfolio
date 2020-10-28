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

    public function isTemplateExistsBySkill($name)
    {
        $name = strtolower($name);
        if ($this->twig->getLoader()->exists("skills/$name.html.twig"))
        {
            return 1;
        }
        return 0;
    }
}