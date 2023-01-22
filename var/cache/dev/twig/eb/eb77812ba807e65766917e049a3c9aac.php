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

/* inc/all/navbar/navbar.html.save.twig */
class __TwigTemplate_c577e887d2b4bc7266848197df54b2fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/navbar/navbar.html.save.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/navbar/navbar.html.save.twig"));

        // line 1
        echo "<div class=\"container-fluid overflow-hidden\">
    <div class=\"row vh-100 overflow-auto\">
        <div class=\"col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white\">
                <a href=\"/\" class=\"d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5\">B<span class=\"d-none d-sm-inline\">rand</span></span>
                </a>
                <ul class=\"nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-house\"></i><span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-speedometer2\"></i><span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-table\"></i><span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle px-sm-0 px-2\" id=\"dropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fs-5 bi-bootstrap\"></i><span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdown\">
                            <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
                            <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-grid\"></i><span class=\"ms-1 d-none d-sm-inline\">Products</span></a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-people\"></i><span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <div class=\"dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"28\" height=\"28\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">Joe</span>
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
        <div class=\"col d-flex flex-column h-100\">
            <main class=\"row\">
                <div class=\"col pt-4\">
                    <h3>Vertical Sidebar that switches to Horizontal Navbar</h3>
                    <p class=\"lead\">An example multi-level sidebar with collasible menu items. The menu functions like an \"accordion\" where only a single menu is be open at a time.</p>
                    <hr />
                    <h3>More content...</h3>
                    <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                    <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                </div>
            </main>
            <footer class=\"row bg-light py-4 mt-auto\">
                <div class=\"col\"> Bottom footer content here... </div>
            </footer>
        </div>
    </div>
</div>


<style>
@media (min-width: 576px) {
    .h-sm-100 {
        height: 100%;
    }
}
</style>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/all/navbar/navbar.html.save.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid overflow-hidden\">
    <div class=\"row vh-100 overflow-auto\">
        <div class=\"col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white\">
                <a href=\"/\" class=\"d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5\">B<span class=\"d-none d-sm-inline\">rand</span></span>
                </a>
                <ul class=\"nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-house\"></i><span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-speedometer2\"></i><span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-table\"></i><span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle px-sm-0 px-2\" id=\"dropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fs-5 bi-bootstrap\"></i><span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdown\">
                            <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
                            <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-grid\"></i><span class=\"ms-1 d-none d-sm-inline\">Products</span></a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-sm-0 px-2\">
                            <i class=\"fs-5 bi-people\"></i><span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <div class=\"dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"28\" height=\"28\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">Joe</span>
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
        <div class=\"col d-flex flex-column h-100\">
            <main class=\"row\">
                <div class=\"col pt-4\">
                    <h3>Vertical Sidebar that switches to Horizontal Navbar</h3>
                    <p class=\"lead\">An example multi-level sidebar with collasible menu items. The menu functions like an \"accordion\" where only a single menu is be open at a time.</p>
                    <hr />
                    <h3>More content...</h3>
                    <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                    <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                </div>
            </main>
            <footer class=\"row bg-light py-4 mt-auto\">
                <div class=\"col\"> Bottom footer content here... </div>
            </footer>
        </div>
    </div>
</div>


<style>
@media (min-width: 576px) {
    .h-sm-100 {
        height: 100%;
    }
}
</style>

", "inc/all/navbar/navbar.html.save.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/inc/all/navbar/navbar.html.save.twig");
    }
}