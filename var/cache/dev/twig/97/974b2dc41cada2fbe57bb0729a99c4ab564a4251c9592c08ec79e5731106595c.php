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

/* emails/registration.html.twig */
class __TwigTemplate_78b11ae62526c95ddcaa7aa8ec046f6a37c067041a0acee0d8518a1579057570 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        // line 1
        echo "<container>
    ";
        // line 3
        echo "    <hr>
    <spacer size=\"20\"></spacer>
    <row>
        <columns>
            <p class=\"centre\">
                Merci de vous être inscrit sur dans ma newsletter ! Si vous ne vous êtes pas incrit, veuillez ignorer ce message.
            </p>
            <p>
                Bonjour et bienvenue ! Merci de vous être inscrit sur ma newsletter ! Vous allez maintenant recevoir les nouvautés me concernant...<br>
                Dernière étape, cliquez <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app.validation", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\" class=\"text-info\">ici</a> pour confirmer votre inscription et recevoir dès à présent des mails de ma part.
            </p>
        </columns>
    </row>
    ";
        // line 17
        echo "</container>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  57 => 12,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<container>
    {# Header #}
    <hr>
    <spacer size=\"20\"></spacer>
    <row>
        <columns>
            <p class=\"centre\">
                Merci de vous être inscrit sur dans ma newsletter ! Si vous ne vous êtes pas incrit, veuillez ignorer ce message.
            </p>
            <p>
                Bonjour et bienvenue ! Merci de vous être inscrit sur ma newsletter ! Vous allez maintenant recevoir les nouvautés me concernant...<br>
                Dernière étape, cliquez <a href=\"{{ url('app.validation', {'token': token }) }}\" class=\"text-info\">ici</a> pour confirmer votre inscription et recevoir dès à présent des mails de ma part.
            </p>
        </columns>
    </row>
    {# Footer #}
</container>", "emails/registration.html.twig", "/var/www/portfolio_website/templates/emails/registration.html.twig");
    }
}
