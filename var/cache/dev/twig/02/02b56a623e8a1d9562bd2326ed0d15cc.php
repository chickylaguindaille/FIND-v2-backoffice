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

/* inc/all/sidebar/sidebar.html.twig */
class __TwigTemplate_136ab02a6f3dedd4941efb2cb6ae839e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/sidebar/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/sidebar/sidebar.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"d-lg-none collapse in width position-absolute sticky-top w-50 bg-dark\" id=\"navbarSupportedContent\">
            <div class=\"d-flex flex-column align-items-sm-start pt-2  text-white min-vh-100\">
                ";
        // line 8
        echo "                <div class=\"w-100 text-end mt-2\">
                    <button class=\"navbar-toggler \" id=\"closeSearchSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
                        <span class=\"bi bi-x text-white fs-3\"></span>
                    </button>
                </div>

                <ul class=\"nav nav-pills flex-column mb-auto mb-0 align-items-sm-start text-start w-100 px-3\" id=\"menu\">
                    
                    
                    
                    
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#submenu0\" data-bs-toggle=\"collapse\" class=\"nav-link align px-0 \">
                            <i class=\"fs-4 bi bi-search text-white\"></i> <span class=\"ms-3 d-inline text-light \">FIND</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu0\">
                            
                            
                            <li class=\"w-100\">
                                <a href=\"#subsubmenu0\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\">
                                    <i class=\"bi bi-pin-map mx-2 fs-4 text-white\"></i></span> Localisation </a>
                                <ul class=\"collapse nav flex-column ms-1\" id=\"subsubmenu0\" >
                                    <li class=\"w-100\">
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/flags/France.png"), "html", null, true);
        echo "\" style=\"width: 2em;\" class=\"mx-2\"></span> France </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/flags/Belgique.png"), "html", null, true);
        echo "\" style=\"width: 2em;\" class=\"mx-2\"></span> Belgique </a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href=\"#subsubmenu00\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\">
                                    <i class=\"bi bi-mortarboard mx-2 fs-4 text-white\"></i></span> Folklore </a>
                                <ul class=\"collapse nav flex-column ms-1\" id=\"subsubmenu00\" >
                                    <li class=\"w-100\">
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/Faluche.svg"), "html", null, true);
        echo "\" style=\"width: 2em;\" class=\"mx-2\"></span> Faluche </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/Calotte.svg"), "html", null, true);
        echo "\" style=\"width: 2em;\" class=\"mx-2\"></span> Calotte </a>
                                    </li>   
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/Penne.svg"), "html", null, true);
        echo "\" style=\"width: 2em;\" class=\"mx-2\"></span> Penne </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>




                    <li class=\"px-2 w-100\">
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0\">
                            <i class=\"fs-4 bi bi-calendar-event text-light \"></i> <span class=\"ms-3 d-inline text-light\">Calendrier</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Congrès Faluchard </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Ordinesque </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"px-2 w-100\">
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 \">
                            <i class=\"fs-4 bi bi-star text-light\"></i> <span class=\"ms-3 d-inline text-light\">Insignes</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Code National de la Faluche</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Usage en Belgique</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#\" class=\"nav-link px-0\">
                            <i class=\"fs-4 bi bi-book text-light\"></i> <span class=\"ms-3 d-inline text-light\">Codes</span>
                        </a>
                    </li>
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#\" class=\"nav-link px-0 disabled\">
                            <i class=\"fs-4 bi bi-pen\"></i> <span class=\"ms-3 d-inline\">Révisions</span>
                        </a>
                    </li>

                </ul>
                <hr>
                <div class=\"dropdown pb-4 w-100 px-2\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-inline ms-3\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdownUser1\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/all/sidebar/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  99 => 47,  93 => 44,  79 => 33,  73 => 30,  49 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"d-lg-none collapse in width position-absolute sticky-top w-50 bg-dark\" id=\"navbarSupportedContent\">
            <div class=\"d-flex flex-column align-items-sm-start pt-2  text-white min-vh-100\">
                {# <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5 d-inline\">Menu</span>
                </a> #}
                <div class=\"w-100 text-end mt-2\">
                    <button class=\"navbar-toggler \" id=\"closeSearchSupportedContent\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".searchSupportedContent\" aria-controls=\"searchSupportedContent\" aria-label=\"Toggle navigation\">
                        <span class=\"bi bi-x text-white fs-3\"></span>
                    </button>
                </div>

                <ul class=\"nav nav-pills flex-column mb-auto mb-0 align-items-sm-start text-start w-100 px-3\" id=\"menu\">
                    
                    
                    
                    
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#submenu0\" data-bs-toggle=\"collapse\" class=\"nav-link align px-0 \">
                            <i class=\"fs-4 bi bi-search text-white\"></i> <span class=\"ms-3 d-inline text-light \">FIND</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu0\">
                            
                            
                            <li class=\"w-100\">
                                <a href=\"#subsubmenu0\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\">
                                    <i class=\"bi bi-pin-map mx-2 fs-4 text-white\"></i></span> Localisation </a>
                                <ul class=\"collapse nav flex-column ms-1\" id=\"subsubmenu0\" >
                                    <li class=\"w-100\">
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"{{ asset('assets/img/flags/France.png') }}\" style=\"width: 2em;\" class=\"mx-2\"></span> France </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"{{ asset('assets/img/flags/Belgique.png') }}\" style=\"width: 2em;\" class=\"mx-2\"></span> Belgique </a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href=\"#subsubmenu00\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\">
                                    <i class=\"bi bi-mortarboard mx-2 fs-4 text-white\"></i></span> Folklore </a>
                                <ul class=\"collapse nav flex-column ms-1\" id=\"subsubmenu00\" >
                                    <li class=\"w-100\">
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"{{ asset('assets/img/logos/Faluche.svg') }}\" style=\"width: 2em;\" class=\"mx-2\"></span> Faluche </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"{{ asset('assets/img/logos/Calotte.svg') }}\" style=\"width: 2em;\" class=\"mx-2\"></span> Calotte </a>
                                    </li>   
                                    <li>
                                        <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"><img src=\"{{ asset('assets/img/logos/Penne.svg') }}\" style=\"width: 2em;\" class=\"mx-2\"></span> Penne </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>




                    <li class=\"px-2 w-100\">
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0\">
                            <i class=\"fs-4 bi bi-calendar-event text-light \"></i> <span class=\"ms-3 d-inline text-light\">Calendrier</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Congrès Faluchard </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Ordinesque </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"px-2 w-100\">
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 \">
                            <i class=\"fs-4 bi bi-star text-light\"></i> <span class=\"ms-3 d-inline text-light\">Insignes</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Code National de la Faluche</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0 text-white\"> <span class=\"d-inline\"></span> Usage en Belgique</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#\" class=\"nav-link px-0\">
                            <i class=\"fs-4 bi bi-book text-light\"></i> <span class=\"ms-3 d-inline text-light\">Codes</span>
                        </a>
                    </li>
                    <li class=\"nav-item px-2 w-100\">
                        <a href=\"#\" class=\"nav-link px-0 disabled\">
                            <i class=\"fs-4 bi bi-pen\"></i> <span class=\"ms-3 d-inline\">Révisions</span>
                        </a>
                    </li>

                </ul>
                <hr>
                <div class=\"dropdown pb-4 w-100 px-2\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-inline ms-3\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdownUser1\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>", "inc/all/sidebar/sidebar.html.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/inc/all/sidebar/sidebar.html.twig");
    }
}
