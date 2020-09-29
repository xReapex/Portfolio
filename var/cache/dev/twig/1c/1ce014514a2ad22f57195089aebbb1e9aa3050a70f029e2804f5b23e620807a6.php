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

/* include/navbar.html.twig */
class __TwigTemplate_ac7c4fab5e0176c5199abd8fd75aad9b7a2120ad71e353a293477853c9ef7cbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand underline-link\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.home");
        echo "\">Thomas R</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.about");
        echo "\"><i class=\"fas fa-address-card\"></i> A propos</a>
                </li>
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.project");
        echo "\"><i class=\"fas fa-project-diagram\"></i> Projets</a>
                </li>
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.feedbacks.home");
        echo "\"><i class=\"fas fa-comments\"></i> Feedbacks</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item underline-link nav-item-right\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.api");
        echo "\"><i class=\"fas fa-server\"></i> API</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  70 => 17,  64 => 14,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand underline-link\" href=\"{{ path('app.home') }}\">Thomas R</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"{{ path('app.about') }}\"><i class=\"fas fa-address-card\"></i> A propos</a>
                </li>
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"{{ path('app.project') }}\"><i class=\"fas fa-project-diagram\"></i> Projets</a>
                </li>
                <li class=\"nav-item underline-link\">
                    <a class=\"nav-link\" href=\"{{ path('app.feedbacks.home') }}\"><i class=\"fas fa-comments\"></i> Feedbacks</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item underline-link nav-item-right\">
                    <a class=\"nav-link\" href=\"{{ path('app.api') }}\"><i class=\"fas fa-server\"></i> API</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

", "include/navbar.html.twig", "/var/www/portfolio_website/templates/include/navbar.html.twig");
    }
}
