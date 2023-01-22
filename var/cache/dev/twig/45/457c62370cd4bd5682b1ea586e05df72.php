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

/* location/town.html.twig */
class __TwigTemplate_98be185472f3cd20ce315c905f20f77e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/town.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/town.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "location/town.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

<div class=\"d-flex justify-content-center\">
<div class=\"input-group mt-3 mb-3 w-75\">
  <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Tri</button>
  <ul class=\"dropdown-menu\">
    <li><a class=\"dropdown-item\" href=\"#\">Alphabet</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Région action</a></li>
  </ul>
  <input type=\"search\" class=\"form-control\" placeholder=\"Recherche\">
</div>
</div>


";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 18, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 20
            echo "<ul class=\"list-group list-group-light mb-4\">
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
      <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("" . twig_get_attribute($this->env, $this->source, $context["ville"], "blason", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" class=\"\" alt=\"\"
        style=\"width: 45px; height: 45px\" />



      <div class=\"ms-3\">
        <p class=\"fw-bold mb-1\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
        <p class=\"text-muted mb-0\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "country", [], "any", false, false, false, 30), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "region", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
      </div>
    </div>
    <span class=\"badge rounded-pill badge-primary\">Onboarding</span>
  </li>

";
            // line 37
            echo "
  ";
            // line 62
            echo "</ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "location/town.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 62,  117 => 37,  106 => 30,  102 => 29,  93 => 23,  88 => 20,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}


<div class=\"d-flex justify-content-center\">
<div class=\"input-group mt-3 mb-3 w-75\">
  <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Tri</button>
  <ul class=\"dropdown-menu\">
    <li><a class=\"dropdown-item\" href=\"#\">Alphabet</a></li>
    <li><a class=\"dropdown-item\" href=\"#\">Région action</a></li>
  </ul>
  <input type=\"search\" class=\"form-control\" placeholder=\"Recherche\">
</div>
</div>


{% for ville in villes|sort((a, b) => a.nom <=> b.nom) %}
{# <h6 class=\"bg-light p-2 border-top border-bottom mb-0\">C</h6> #}
<ul class=\"list-group list-group-light mb-4\">
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
      <img src=\"{{ asset(''~ville.blason)}}\" class=\"\" alt=\"\"
        style=\"width: 45px; height: 45px\" />



      <div class=\"ms-3\">
        <p class=\"fw-bold mb-1\">{{ ville.nom }}</p>
        <p class=\"text-muted mb-0\">{{ ville.country }} , {{ ville.region }}</p>
      </div>
    </div>
    <span class=\"badge rounded-pill badge-primary\">Onboarding</span>
  </li>

{# <h6 class=\"bg-light p-2 border-top border-bottom mb-0\">P</h6> #}

  {# <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
      <img src=\"{{ asset('assets/img/villes/Paris.jpg') }}\" class=\"\" alt=\"\"
        style=\"width: 45px; height: 45px\" />
      <div class=\"ms-3\">
        <p class=\"fw-bold mb-1\">Paris</p>
        <p class=\"text-muted mb-0\">Ile-de-France, France</p>
      </div>
    </div>
    <span class=\"badge rounded-pill badge-warning\">Awaiting</span>
  </li>

<h6 class=\"bg-light p-2 border-top border-bottom mb-0\">L</h6>

  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    <div class=\"d-flex align-items-center\">
        <img src=\"{{ asset('assets/img/villes/Lille.jpg') }}\" alt=\"\" style=\"width: 45px; height: 45px\" class=\"\" />
        <div class=\"ms-3\">
        <p class=\"fw-bold mb-1\">Lille</p>
        <p class=\"text-muted mb-0\">Haut-de-France, France</p>
        </div>
    </div>
    <span class=\"badge rounded-pill badge-success\">Active</span>
    </li> #}
</ul>
{% endfor %}
{% endblock %}", "location/town.html.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/location/town.html.twig");
    }
}
