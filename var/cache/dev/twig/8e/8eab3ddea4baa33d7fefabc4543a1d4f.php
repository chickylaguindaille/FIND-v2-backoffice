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

/* inc/all/all.js.twig */
class __TwigTemplate_da0368c1d8e71a303530846e67052a29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/all.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/all/all.js.twig"));

        // line 1
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>

<script>
";
        // line 6
        echo "    \$( \"#searchButtonSupportedContent\" ).click(function() {
        \$( \".searchHideSupportedContent\" ).addClass('hidden')

        \$('#searchFormSupportedContent').removeClass('hidden')
        \$('#searchFormSupportedContent').addClass('flex')
        \$('#closeHideSupportedContent').removeClass('hidden')
    });

";
        // line 15
        echo "    \$( \"#closeHideSupportedContent\" ).click(function() {
        \$( \".searchHideSupportedContent\" ).removeClass('hidden')

        \$('#searchFormSupportedContent').removeClass('flex')
        \$('#searchFormSupportedContent').addClass('hidden')
        \$('#closeHideSupportedContent').addClass('hidden')
    });

";
        // line 24
        echo "    \$( \"#closeSearchSupportedContent\" ).click(function() {
        console.log(\"test\");
        \$('#navbarSupportedContent').removeClass('show')
    });\$

";
        // line 30
        echo "    ";
        // line 33
        echo "

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/all/all.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  76 => 30,  69 => 24,  59 => 15,  49 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>

<script>
{# NAVBAR SEARCH BUTTON #}
    \$( \"#searchButtonSupportedContent\" ).click(function() {
        \$( \".searchHideSupportedContent\" ).addClass('hidden')

        \$('#searchFormSupportedContent').removeClass('hidden')
        \$('#searchFormSupportedContent').addClass('flex')
        \$('#closeHideSupportedContent').removeClass('hidden')
    });

{# SEARCH CLOSE BUTTON #}
    \$( \"#closeHideSupportedContent\" ).click(function() {
        \$( \".searchHideSupportedContent\" ).removeClass('hidden')

        \$('#searchFormSupportedContent').removeClass('flex')
        \$('#searchFormSupportedContent').addClass('hidden')
        \$('#closeHideSupportedContent').addClass('hidden')
    });

{# SIDEBAR CLOSE BUTTON #}
    \$( \"#closeSearchSupportedContent\" ).click(function() {
        console.log(\"test\");
        \$('#navbarSupportedContent').removeClass('show')
    });\$

{# SIDEBAR MOBILE BACKGROUND #}
    {# \$( \".nav-link\" ).click(function() {
        \$(this).addClass('selected')
    });\$ #}


</script>", "inc/all/all.js.twig", "/Applications/MAMP/htdocs/FIND-v2-backoffice/templates/inc/all/all.js.twig");
    }
}
