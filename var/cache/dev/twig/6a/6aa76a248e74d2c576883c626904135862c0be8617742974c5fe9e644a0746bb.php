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

/* modules/header.html.twig */
class __TwigTemplate_c6190c6df6c05b3aaad655294021a6e81141228d1ebf8a947fbdc4b602ab44fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/header.html.twig"));

        // line 1
        echo "<!--header start-->
<header class=\"header fixed-top clearfix\">
    <!--logo start-->
    <div class=\"brand\">
        <a class=\"logocenter\" href=\"\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/gcemalice_logo.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars\"></div>
        </div>
    </div>
    <!--logo end-->

    ";
        // line 14
        echo twig_include($this->env, $context, "@Exploit/Default/blocinfo.html.twig");
        echo "
</header>
<!--header end-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modules/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--header start-->
<header class=\"header fixed-top clearfix\">
    <!--logo start-->
    <div class=\"brand\">
        <a class=\"logocenter\" href=\"\">
            <img src=\"{{ asset('/images/gcemalice_logo.png') }}\" alt=\"\">
        </a>
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars\"></div>
        </div>
    </div>
    <!--logo end-->

    {{ include('@Exploit/Default/blocinfo.html.twig') }}
</header>
<!--header end-->", "modules/header.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\app\\Resources\\views\\modules\\header.html.twig");
    }
}
