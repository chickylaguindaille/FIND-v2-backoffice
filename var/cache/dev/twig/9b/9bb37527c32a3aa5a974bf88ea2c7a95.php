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

/* inc/all/navbar/navbar.html.twig */
class __TwigTemplate_8a74bbbb7458834a9463dda0df53b1d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/navbar/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/navbar/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand collapse navbar-collapse\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><span class=\"bi bi-emoji-smile\"></span></a>
    
  ";
        // line 6
        echo "    <button class=\"navbar-toggler searchHideSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"#navbarSupportedContent\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <a class=\"navbar-toggler searchHideSupportedContent\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"  aria-expanded=\"true\">
      <span class=\"bi bi-emoji-smile\"></span>
    </a>

    <button class=\"navbar-toggler searchHideSupportedContent\" id=\"searchButtonSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
      <span class=\"bi bi-search\"></span>
    </button>

  ";
        // line 19
        echo "    <button class=\"navbar-toggler closeHideSupportedContent hidden\" id=\"closeHideSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
      <span class=\"bi bi-x\"></span>
    </button>
    <form class=\"hidden d-lg-none\" id=\"searchFormSupportedContent\" >
      <input class=\"form-control me-2\" type=\"search\" placeholder=\"Trouve ton folklore\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success\" type=\"submit\">FIND</button>
    </form>


  ";
        // line 29
        echo "    <div class=\"collapse navbar-collapse\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarFINDDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            FIND
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarFINDDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Localisation</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Folklore</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarCalendarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Calendrier
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarCalendarDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Congrès</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Ordinesque</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarInsignesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Insignes
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarInsignesDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Code National de la Faluche</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Usage en Belgique</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Codes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Révisions</a>
        </li>
      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Trouve ton folklore\" aria-label=\"search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">FIND</button>
      </form>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/all/navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  69 => 19,  58 => 10,  52 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand collapse navbar-collapse\" href=\"{{ path('accueil')}}\"><span class=\"bi bi-emoji-smile\"></span></a>
    
  {# MOBILE START #}
    <button class=\"navbar-toggler searchHideSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"#navbarSupportedContent\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <a class=\"navbar-toggler searchHideSupportedContent\" href=\"{{ path('accueil')}}\"  aria-expanded=\"true\">
      <span class=\"bi bi-emoji-smile\"></span>
    </a>

    <button class=\"navbar-toggler searchHideSupportedContent\" id=\"searchButtonSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
      <span class=\"bi bi-search\"></span>
    </button>

  {# MOBILE START SEARCH #}
    <button class=\"navbar-toggler closeHideSupportedContent hidden\" id=\"closeHideSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
      <span class=\"bi bi-x\"></span>
    </button>
    <form class=\"hidden d-lg-none\" id=\"searchFormSupportedContent\" >
      <input class=\"form-control me-2\" type=\"search\" placeholder=\"Trouve ton folklore\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success\" type=\"submit\">FIND</button>
    </form>


  {# DESKTOP #}
    <div class=\"collapse navbar-collapse\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarFINDDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            FIND
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarFINDDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Localisation</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Folklore</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarCalendarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Calendrier
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarCalendarDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Congrès</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Ordinesque</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarInsignesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Insignes
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarInsignesDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Code National de la Faluche</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Usage en Belgique</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Codes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Révisions</a>
        </li>
      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Trouve ton folklore\" aria-label=\"search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">FIND</button>
      </form>
    </div>
  </div>
</nav>", "inc/all/navbar/navbar.html.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/inc/all/navbar/navbar.html.twig");
    }
}
