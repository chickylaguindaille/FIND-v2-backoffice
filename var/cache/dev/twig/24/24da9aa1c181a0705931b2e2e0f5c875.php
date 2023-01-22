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

/* corporations/show.html.twig */
class __TwigTemplate_57c9a0690d8a35eab406b427f7ce864d extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "corporations/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "corporations/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "corporations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Corporations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Corporations</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 16, $this->source); })()), "Nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 20, $this->source); })()), "Ville", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 24, $this->source); })()), "Pays", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 28, $this->source); })()), "Date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 28, $this->source); })()), "Date", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 32, $this->source); })()), "Logo", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Résumé</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 36, $this->source); })()), "Resume", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abréviation</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 40, $this->source); })()), "Abreviation", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_corporations_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_corporations_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["corporation"]) || array_key_exists("corporation", $context) ? $context["corporation"] : (function () { throw new RuntimeError('Variable "corporation" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "corporations/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "corporations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Corporations{% endblock %}

{% block body %}
    <h1>Corporations</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ corporation.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ corporation.Nom }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ corporation.Ville }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ corporation.Pays }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ corporation.Date ? corporation.Date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>{{ corporation.Logo }}</td>
            </tr>
            <tr>
                <th>Résumé</th>
                <td>{{ corporation.Resume }}</td>
            </tr>
            <tr>
                <th>Abréviation</th>
                <td>{{ corporation.Abreviation }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_corporations_index') }}\">back to list</a>

    <a href=\"{{ path('app_corporations_edit', {'id': corporation.id}) }}\">edit</a>

    {{ include('corporations/_delete_form.html.twig') }}
{% endblock %}
", "corporations/show.html.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/corporations/show.html.twig");
    }
}
