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

/* project/project.html.twig */
class __TwigTemplate_1beb922bb93e334aa6bac2276aa3d2a420b2da9e6f8a96cee25375c460e95eaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/project.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/project.html.twig", 1);
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

        echo "Project";
        
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
    <div class=\"container\" style=\"margin-bottom: 3%\">
        <div class=\"centre\">
            <div>
                <h2>Portfolio de projets</h2>
                <p>Bienvenue sur la page qui regroupe tous mes projets répertoriés à ce jour. Vous pouvez soit accéder directement à mon<a href=\"https://gitlab.com/reapex\" class=\"text-warning\"> GitLab</a> ou bien parcourir les différents thèmes de mes projets. Vous pouvez par exemple commencer à aller voir mes <a href=\"#projet-formation\" class=\"text-info\">projets de formation</a>, c'est à dire les projets qui m'ont permis de me former dans diverses technologies... Vous pouvez également trouver des <a href=\"#projet-perso\" class=\"text-success\">projets personnels</a> de tous types...</p>
            </div>
        </div>

        <div class=\"centre\"></div>
        <a id=\"projet-formation\">
            <div style=\"height: 25vh\"></div>
            <center><h1 >Projets de formation.</h1></center><br><br>
        </a>

        <div class=\"row\">
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img2.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet1"]) || array_key_exists("projet1", $context) ? $context["projet1"] : (function () { throw new RuntimeError('Variable "projet1" does not exist.', 26, $this->source); })()), "languages", [], "array", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet1"]) || array_key_exists("projet1", $context) ? $context["projet1"] : (function () { throw new RuntimeError('Variable "projet1" does not exist.', 27, $this->source); })()), "description", [], "array", false, false, false, 27), "html", null, true);
        echo "</h6>
                        ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet1"]) || array_key_exists("projet1", $context) ? $context["projet1"] : (function () { throw new RuntimeError('Variable "projet1" does not exist.', 28, $this->source); })()), "readme_url", [], "array", false, false, false, 28);
        echo "
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet1"]) || array_key_exists("projet1", $context) ? $context["projet1"] : (function () { throw new RuntimeError('Variable "projet1" does not exist.', 29, $this->source); })()), "web_url", [], "array", false, false, false, 29), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/19872619.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet2"]) || array_key_exists("projet2", $context) ? $context["projet2"] : (function () { throw new RuntimeError('Variable "projet2" does not exist.', 37, $this->source); })()), "languages", [], "array", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet2"]) || array_key_exists("projet2", $context) ? $context["projet2"] : (function () { throw new RuntimeError('Variable "projet2" does not exist.', 38, $this->source); })()), "description", [], "array", false, false, false, 38), "html", null, true);
        echo "</h6>
                        ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet2"]) || array_key_exists("projet2", $context) ? $context["projet2"] : (function () { throw new RuntimeError('Variable "projet2" does not exist.', 39, $this->source); })()), "readme_url", [], "array", false, false, false, 39);
        echo "
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet2"]) || array_key_exists("projet2", $context) ? $context["projet2"] : (function () { throw new RuntimeError('Variable "projet2" does not exist.', 40, $this->source); })()), "web_url", [], "array", false, false, false, 40), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\" zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img2.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet3"]) || array_key_exists("projet3", $context) ? $context["projet3"] : (function () { throw new RuntimeError('Variable "projet3" does not exist.', 48, $this->source); })()), "languages", [], "array", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet3"]) || array_key_exists("projet3", $context) ? $context["projet3"] : (function () { throw new RuntimeError('Variable "projet3" does not exist.', 49, $this->source); })()), "description", [], "array", false, false, false, 49), "html", null, true);
        echo "</h6>
                        ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet3"]) || array_key_exists("projet3", $context) ? $context["projet3"] : (function () { throw new RuntimeError('Variable "projet3" does not exist.', 50, $this->source); })()), "readme_url", [], "array", false, false, false, 50);
        echo "
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet3"]) || array_key_exists("projet3", $context) ? $context["projet3"] : (function () { throw new RuntimeError('Variable "projet3" does not exist.', 51, $this->source); })()), "web_url", [], "array", false, false, false, 51), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
        </div>


    <!-------------------------------------------------------->

        <div class=\"centre\"></div>
        <a id=\"projet-perso\">
            <div style=\"height: 25vh\"></div>
            <center><h1 >Projets personnels.</h1></center><br><br>
        </a>

        <div class=\"row\">
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img2.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet4"]) || array_key_exists("projet4", $context) ? $context["projet4"] : (function () { throw new RuntimeError('Variable "projet4" does not exist.', 71, $this->source); })()), "languages", [], "array", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet4"]) || array_key_exists("projet4", $context) ? $context["projet4"] : (function () { throw new RuntimeError('Variable "projet4" does not exist.', 72, $this->source); })()), "description", [], "array", false, false, false, 72), "html", null, true);
        echo "</h6>
                        ";
        // line 73
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet4"]) || array_key_exists("projet4", $context) ? $context["projet4"] : (function () { throw new RuntimeError('Variable "projet4" does not exist.', 73, $this->source); })()), "readme_url", [], "array", false, false, false, 73);
        echo "
                        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet4"]) || array_key_exists("projet4", $context) ? $context["projet4"] : (function () { throw new RuntimeError('Variable "projet4" does not exist.', 74, $this->source); })()), "web_url", [], "array", false, false, false, 74), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/19872619.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet5"]) || array_key_exists("projet5", $context) ? $context["projet5"] : (function () { throw new RuntimeError('Variable "projet5" does not exist.', 82, $this->source); })()), "languages", [], "array", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet5"]) || array_key_exists("projet5", $context) ? $context["projet5"] : (function () { throw new RuntimeError('Variable "projet5" does not exist.', 83, $this->source); })()), "description", [], "array", false, false, false, 83), "html", null, true);
        echo "</h6>
                        ";
        // line 84
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet5"]) || array_key_exists("projet5", $context) ? $context["projet5"] : (function () { throw new RuntimeError('Variable "projet5" does not exist.', 84, $this->source); })()), "readme_url", [], "array", false, false, false, 84);
        echo "
                        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet5"]) || array_key_exists("projet5", $context) ? $context["projet5"] : (function () { throw new RuntimeError('Variable "projet5" does not exist.', 85, $this->source); })()), "web_url", [], "array", false, false, false, 85), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\" zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img2.png"), "html", null, true);
        echo "\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["projet6"]) || array_key_exists("projet6", $context) ? $context["projet6"] : (function () { throw new RuntimeError('Variable "projet6" does not exist.', 93, $this->source); })()), "languages", [], "array", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo $context["langue"];
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h8>
                        <h6 class=\"card-text\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet6"]) || array_key_exists("projet6", $context) ? $context["projet6"] : (function () { throw new RuntimeError('Variable "projet6" does not exist.', 94, $this->source); })()), "description", [], "array", false, false, false, 94), "html", null, true);
        echo "</h6>
                        ";
        // line 95
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet6"]) || array_key_exists("projet6", $context) ? $context["projet6"] : (function () { throw new RuntimeError('Variable "projet6" does not exist.', 95, $this->source); })()), "readme_url", [], "array", false, false, false, 95);
        echo "
                        <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet6"]) || array_key_exists("projet6", $context) ? $context["projet6"] : (function () { throw new RuntimeError('Variable "projet6" does not exist.', 96, $this->source); })()), "web_url", [], "array", false, false, false, 96), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
        </div>
        <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 96,  317 => 95,  313 => 94,  300 => 93,  295 => 91,  286 => 85,  282 => 84,  278 => 83,  265 => 82,  260 => 80,  251 => 74,  247 => 73,  243 => 72,  230 => 71,  225 => 69,  204 => 51,  200 => 50,  196 => 49,  183 => 48,  178 => 46,  169 => 40,  165 => 39,  161 => 38,  148 => 37,  143 => 35,  134 => 29,  130 => 28,  126 => 27,  113 => 26,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Project{% endblock %}

{% block body %}

    <div class=\"container\" style=\"margin-bottom: 3%\">
        <div class=\"centre\">
            <div>
                <h2>Portfolio de projets</h2>
                <p>Bienvenue sur la page qui regroupe tous mes projets répertoriés à ce jour. Vous pouvez soit accéder directement à mon<a href=\"https://gitlab.com/reapex\" class=\"text-warning\"> GitLab</a> ou bien parcourir les différents thèmes de mes projets. Vous pouvez par exemple commencer à aller voir mes <a href=\"#projet-formation\" class=\"text-info\">projets de formation</a>, c'est à dire les projets qui m'ont permis de me former dans diverses technologies... Vous pouvez également trouver des <a href=\"#projet-perso\" class=\"text-success\">projets personnels</a> de tous types...</p>
            </div>
        </div>

        <div class=\"centre\"></div>
        <a id=\"projet-formation\">
            <div style=\"height: 25vh\"></div>
            <center><h1 >Projets de formation.</h1></center><br><br>
        </a>

        <div class=\"row\">
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/img2.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet1['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet1['description'] }}</h6>
                        {{ projet1['readme_url'] | raw }}
                        <a href=\"{{ projet1['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/19872619.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet2['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet2['description'] }}</h6>
                        {{ projet2['readme_url'] | raw }}
                        <a href=\"{{ projet2['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\" zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/img2.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet3['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet3['description'] }}</h6>
                        {{ projet3['readme_url'] | raw }}
                        <a href=\"{{ projet3['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
        </div>


    <!-------------------------------------------------------->

        <div class=\"centre\"></div>
        <a id=\"projet-perso\">
            <div style=\"height: 25vh\"></div>
            <center><h1 >Projets personnels.</h1></center><br><br>
        </a>

        <div class=\"row\">
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/img2.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet4['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet4['description'] }}</h6>
                        {{ projet4['readme_url'] | raw }}
                        <a href=\"{{ projet4['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\"zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/19872619.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet5['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet5['description'] }}</h6>
                        {{ projet5['readme_url'] | raw }}
                        <a href=\"{{ projet5['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
            <div class=\" zoom col-sm-4\">
                <div class=\"card border-primary\" style=\"width: 18rem; height: 430px\">
                    <img src=\"{{ asset('img/img2.png') }}\" class=\"card-img-top imgflou\" alt=\"...\">
                    <div class=\"card-body\">
                        <h8 class=\"card-title\">{% for langue in projet6['languages'] %} {{ langue | raw }} {% endfor %}</h8>
                        <h6 class=\"card-text\">{{ projet6['description'] }}</h6>
                        {{ projet6['readme_url'] | raw }}
                        <a href=\"{{ projet6['web_url'] }}\" class=\"btn btn-warning\"><i class=\"fab fa-gitlab\"></i> Gitlab</a>
                    </div>
                </div>
            </div>
        </div>
        <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

{% endblock %}", "project/project.html.twig", "/var/www/portfolio_website/templates/project/project.html.twig");
    }
}
