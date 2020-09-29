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

/* feedbacks/feedbacks.html.twig */
class __TwigTemplate_bcc97f86857c552d1edde913fae63f3e6f8e245dc03b8e0e1a19f9a4c92b5cda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedbacks/feedbacks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedbacks/feedbacks.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "feedbacks/feedbacks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <div class=\"container\">
        <div class=\"centre\">
            <div>
                <h2>Feedbacks</h2>
                <p>Vous voila sur la page des feedbacks, c'est à dire des commentaires que vous me faites. Je vous laisse à chacun le droit de vous exprimer librement. Mais faites attention, les commentaires ne sont ni <d class=\"text-warning\">modifiables</d> ni <d class=\"text-warning\">effaçables</d> ! Commencez dès maintenant à me dire ce que vous pensez du site en <a href=\"#form\" class=\"text-success\">crééant</a> votre premier feedback !</p>
                <br><br>
                <blockquote class=\"blockquote text-center\">
                    <p class=\"mb-0\">“Le silence est l'expression la plus parfaite du mépris.”</p>
                    <footer class=\"blockquote-footer\">George Bernard Shaw, <cite title=\"Source Title\">Scénariste</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class=\"centre\" id=\"form\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form');
        echo "
        </div>
    </div>

    <div class=\"centre\" id=\"created\">
        <div>
            <h2>Merci !</h2>
            <p>Vous avez participé à <a class=\"text-success\">l'évolution</a> du site grâce à ce commentaire ! Vous voulez voir ce qui se dit ? Alors rendez-vous dans la partie <a href=\"#commentaires\" class=\"text-info\">commentaires</a> du site !</p>
        </div>
    </div>

    <div class=\"centre\" id=\"commentaires\">
        <div>
            Test
        </div>
    </div>

    <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "feedbacks/feedbacks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"centre\">
            <div>
                <h2>Feedbacks</h2>
                <p>Vous voila sur la page des feedbacks, c'est à dire des commentaires que vous me faites. Je vous laisse à chacun le droit de vous exprimer librement. Mais faites attention, les commentaires ne sont ni <d class=\"text-warning\">modifiables</d> ni <d class=\"text-warning\">effaçables</d> ! Commencez dès maintenant à me dire ce que vous pensez du site en <a href=\"#form\" class=\"text-success\">crééant</a> votre premier feedback !</p>
                <br><br>
                <blockquote class=\"blockquote text-center\">
                    <p class=\"mb-0\">“Le silence est l'expression la plus parfaite du mépris.”</p>
                    <footer class=\"blockquote-footer\">George Bernard Shaw, <cite title=\"Source Title\">Scénariste</cite></footer>
                </blockquote>
            </div>
        </div>
        <div class=\"centre\" id=\"form\">
            {{ form(form) }}
        </div>
    </div>

    <div class=\"centre\" id=\"created\">
        <div>
            <h2>Merci !</h2>
            <p>Vous avez participé à <a class=\"text-success\">l'évolution</a> du site grâce à ce commentaire ! Vous voulez voir ce qui se dit ? Alors rendez-vous dans la partie <a href=\"#commentaires\" class=\"text-info\">commentaires</a> du site !</p>
        </div>
    </div>

    <div class=\"centre\" id=\"commentaires\">
        <div>
            Test
        </div>
    </div>

    <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
{% endblock %}", "feedbacks/feedbacks.html.twig", "/var/www/portfolio_website/templates/feedbacks/feedbacks.html.twig");
    }
}
