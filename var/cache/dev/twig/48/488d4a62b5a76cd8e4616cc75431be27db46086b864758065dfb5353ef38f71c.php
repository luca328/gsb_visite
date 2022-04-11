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

/* praticien/show.html.twig */
class __TwigTemplate_ca15571f9960274915f5b9a199ce593375ac83edceb983bf1cfdab9feb89c5d2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "praticien/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "praticien/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Praticien";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Praticien</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 16, $this->source); })()), "praNom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 20, $this->source); })()), "praPrenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_tel</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 24, $this->source); })()), "praTel", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_mail</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 28, $this->source); })()), "praMail", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_rue</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 32, $this->source); })()), "praRue", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_codePostal</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 36, $this->source); })()), "praCodePostal", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_ville</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 40, $this->source); })()), "praVille", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pra_coefNotoriete</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 44, $this->source); })()), "praCoefNotoriete", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("praticien_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("praticien_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["praticien"]) || array_key_exists("praticien", $context) ? $context["praticien"] : (function () { throw new RuntimeError('Variable "praticien" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "praticien/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "praticien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  150 => 51,  145 => 49,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Praticien{% endblock %}

{% block body %}
    <h1>Praticien</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ praticien.id }}</td>
            </tr>
            <tr>
                <th>Pra_nom</th>
                <td>{{ praticien.praNom }}</td>
            </tr>
            <tr>
                <th>Pra_prenom</th>
                <td>{{ praticien.praPrenom }}</td>
            </tr>
            <tr>
                <th>Pra_tel</th>
                <td>{{ praticien.praTel }}</td>
            </tr>
            <tr>
                <th>Pra_mail</th>
                <td>{{ praticien.praMail }}</td>
            </tr>
            <tr>
                <th>Pra_rue</th>
                <td>{{ praticien.praRue }}</td>
            </tr>
            <tr>
                <th>Pra_codePostal</th>
                <td>{{ praticien.praCodePostal }}</td>
            </tr>
            <tr>
                <th>Pra_ville</th>
                <td>{{ praticien.praVille }}</td>
            </tr>
            <tr>
                <th>Pra_coefNotoriete</th>
                <td>{{ praticien.praCoefNotoriete }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('praticien_index') }}\">back to list</a>

    <a href=\"{{ path('praticien_edit', {'id': praticien.id}) }}\">edit</a>

    {{ include('praticien/_delete_form.html.twig') }}
{% endblock %}
", "praticien/show.html.twig", "C:\\Users\\sio\\Desktop\\synfony\\projet\\gsb_visites\\templates\\praticien\\show.html.twig");
    }
}
