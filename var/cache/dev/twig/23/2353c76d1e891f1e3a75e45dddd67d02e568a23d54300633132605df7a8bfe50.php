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

/* home/home.html.twig */
class __TwigTemplate_c939afc6f43f0d7e9609c0a2e9cf039b776183b7e65d15c3cf9d914e3a99bde5 extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "home/home.html.twig", 1);
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

        echo "Home";
        
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
        echo "    <center>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "newsletter_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-dismissible alert-danger mt-3\" style=\"width: 500px; border-radius: 10px; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "newsletter_success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "            <div class=\"alert alert-dismissible alert-success mt-3\" style=\"width: 500px; border-radius: 10px; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </center>

    <div class=\"container\">
        <div class=\"centre\">
            <div>
                <h2>Bienvenue</h2>
                <p>Bienvenue sur mon site ! Vous pouvez y retrouver plein d'informations sympas sur moi et découvrir quel type de développeur je suis ! N'hésitez pas à explorer les différents onglets... Dans le cas où mon profil vous intéresse, vous pouvez renseigner votre adresse <a href=\"#newsletter\" class=\"text-info\">e-mail</a> pour recevoir des nouveautées de ma part !</p>
            </div>
        </div>
    </div>

    <div class=\"container ml-auto\" style=\"width: 500px\">
        <div class=\"centre\">
            <a id=\"newsletter\"></a>
            <div class=\"form-group\">
                <label for=\"email\">Newsletter</label>
            <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.newsletter.add");
        echo "\" class=\"form-inline my-2 my-lg-0\">
                <input id=\"email\" name=\"newsletter_email\" oninput=\"if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);\" maxlength = \"30\" style=\"border-radius: 10px;\" class=\"form-control mr-sm-2\" type=\"email\" placeholder=\"Entrez votre email\">
                <button style=\"border-radius: 10px;\" class=\"btn btn-primary my-2 my-sm-0\" aria-describedby=\"emailHelp\" type=\"submit\"><i class=\"fas fa-search\"></i> Envoyer</button>
                <small id=\"emailHelp\" class=\"form-text text-muted\">Je vous promets de ne jamais vous spamer.</small>
            </form>
            </div>
        </div>
    </div>
    <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 35,  126 => 19,  117 => 16,  113 => 14,  108 => 13,  99 => 10,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
    <center>
        {% for message in app.flashes('newsletter_error') %}
            <div class=\"alert alert-dismissible alert-danger mt-3\" style=\"width: 500px; border-radius: 10px; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('newsletter_success') %}
            <div class=\"alert alert-dismissible alert-success mt-3\" style=\"width: 500px; border-radius: 10px; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
    </center>

    <div class=\"container\">
        <div class=\"centre\">
            <div>
                <h2>Bienvenue</h2>
                <p>Bienvenue sur mon site ! Vous pouvez y retrouver plein d'informations sympas sur moi et découvrir quel type de développeur je suis ! N'hésitez pas à explorer les différents onglets... Dans le cas où mon profil vous intéresse, vous pouvez renseigner votre adresse <a href=\"#newsletter\" class=\"text-info\">e-mail</a> pour recevoir des nouveautées de ma part !</p>
            </div>
        </div>
    </div>

    <div class=\"container ml-auto\" style=\"width: 500px\">
        <div class=\"centre\">
            <a id=\"newsletter\"></a>
            <div class=\"form-group\">
                <label for=\"email\">Newsletter</label>
            <form method=\"post\" action=\"{{ path('app.newsletter.add') }}\" class=\"form-inline my-2 my-lg-0\">
                <input id=\"email\" name=\"newsletter_email\" oninput=\"if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);\" maxlength = \"30\" style=\"border-radius: 10px;\" class=\"form-control mr-sm-2\" type=\"email\" placeholder=\"Entrez votre email\">
                <button style=\"border-radius: 10px;\" class=\"btn btn-primary my-2 my-sm-0\" aria-describedby=\"emailHelp\" type=\"submit\"><i class=\"fas fa-search\"></i> Envoyer</button>
                <small id=\"emailHelp\" class=\"form-text text-muted\">Je vous promets de ne jamais vous spamer.</small>
            </form>
            </div>
        </div>
    </div>
    <a href=\"#top\" type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fas fa-link\"></i></a>
{% endblock %}", "home/home.html.twig", "/var/www/portfolio_website/templates/home/home.html.twig");
    }
}
