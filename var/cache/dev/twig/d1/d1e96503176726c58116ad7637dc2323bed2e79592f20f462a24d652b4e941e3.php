<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* about/about.html.twig */
class __TwigTemplate_8cd70695ebab49203e84489dfcbdeeab34659e92e9c5db774ef45caa8ff6289b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About me";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">

    <center>
        <h2 style=\"margin-top: 5%\">A propos</h2><br><br>

        <div class=\"about-gauche zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px;\">
                <div class=\"card-header text-info\">Présentation générale</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Qui suis-je ?</h4>
                    <p class=\"card-text\">Je m'appelle Thomas ROBERT,<br>J'ai actuellement 19 ans et je vis près de Paris.<br>Je suis autodidacte dans le monde du développement.</p>
                </div>
            </div>
        </div>
        <div class=\"about-centre zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px; margin-top: 5%\">
                <div class=\"card-header text-success\">Compétences</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Quelles sont mes compétences ?</h4>
                    <p class=\"card-text\"><i class=\"fab fa-symfony\"></i> PHP (Symfony 5) • JavaScript (Node.js) <i class=\"fab fa-node\"></i><br><i class=\"fab fa-java\"></i> Java • Python <i class=\"fab fa-python\"></i><br> <i class=\"fas fa-code\"></i> HTML & CSS & TWIG <i class=\"fas fa-code\"></i></p></div>
            </div>
        </div>
        <div class=\"about-droit zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px; margin-top: 5%; margin-bottom: 5%\">
                <div class=\"card-header text-warning\">Mes ambitions</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Le développement...</h4>
                    <p class=\"card-text\">Le développement m'a toujours attiré, je me suis donc intéressé à plusieurs langages de<br> programmation pour approfondir mes connaissances dans ce domaine.<br>Mon objectif serait de devenir développeur dans le domaine du jeu vidéo.</p>
                </div>
            </div>
        </div>
    </center>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About me{% endblock %}

{% block body %}

<div class=\"container\">

    <center>
        <h2 style=\"margin-top: 5%\">A propos</h2><br><br>

        <div class=\"about-gauche zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px;\">
                <div class=\"card-header text-info\">Présentation générale</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Qui suis-je ?</h4>
                    <p class=\"card-text\">Je m'appelle Thomas ROBERT,<br>J'ai actuellement 19 ans et je vis près de Paris.<br>Je suis autodidacte dans le monde du développement.</p>
                </div>
            </div>
        </div>
        <div class=\"about-centre zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px; margin-top: 5%\">
                <div class=\"card-header text-success\">Compétences</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Quelles sont mes compétences ?</h4>
                    <p class=\"card-text\"><i class=\"fab fa-symfony\"></i> PHP (Symfony 5) • JavaScript (Node.js) <i class=\"fab fa-node\"></i><br><i class=\"fab fa-java\"></i> Java • Python <i class=\"fab fa-python\"></i><br> <i class=\"fas fa-code\"></i> HTML & CSS & TWIG <i class=\"fas fa-code\"></i></p></div>
            </div>
        </div>
        <div class=\"about-droit zoom\">
            <div class=\"card border-primary\" style=\"width: 1000px; height: 200px; margin-top: 5%; margin-bottom: 5%\">
                <div class=\"card-header text-warning\">Mes ambitions</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Le développement...</h4>
                    <p class=\"card-text\">Le développement m'a toujours attiré, je me suis donc intéressé à plusieurs langages de<br> programmation pour approfondir mes connaissances dans ce domaine.<br>Mon objectif serait de devenir développeur dans le domaine du jeu vidéo.</p>
                </div>
            </div>
        </div>
    </center>
</div>

{% endblock %}", "about/about.html.twig", "/var/www/portfolio_website/templates/about/about.html.twig");
    }
}
