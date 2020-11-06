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

/* modules/navi.html.twig */
class __TwigTemplate_6908fa90d60342a1a60dcc79df3c33d646502a25ac008f2cfc901de8b0445fc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/navi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/navi.html.twig"));

        // line 1
        echo "<!--sidebar start-->
<aside>
    <div id=\"sidebar\" class=\"nav-collapse\">
        <!-- sidebar menu start-->
        <div class=\"leftside-navigation\">
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <li>
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exploit_homepage_index");
        echo "\" title=\"Anigestion index\"
                            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9) == "exploit_homepage_idex")) {
            echo " class=\"active\"
                            ";
        }
        // line 10
        echo ">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>

                </li>
                ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 17
            echo "                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" ";
            // line 18
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18), [0 => "GceConsultIndex", 1 => "GceDbInfo", 2 => "formgce_gce", 3 => "EdiConsult"])) {
                echo " class=\"active\"
                            ";
            }
            // line 20
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "GceConsultIndex")) {
                echo " class=\"active\"
                            ";
            }
            // line 21
            echo ">
                        <i class=\"fa fa-laptop\"></i>
                        <span>GCE</span>
                    </a>

                    <ul class=\"sub\">

                        <li";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", [0 => "_route"], "method", false, false, false, 28) == "GceConsultIndex")) {
                echo " class=\"active\"
                                ";
            }
            // line 29
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GceConsultIndex");
            echo "\" title=\"General\">
                                General</a></li>

                        <li ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "GceDbInfo")) {
                echo " class=\"active\"
                                ";
            }
            // line 33
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GceDbInfo");
            echo "\" title=\"Info Tablespace\">
                                Info DB GCE</a></li>

                        <li ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36) == "formgce_gce")) {
                echo " class=\"active\"
                                ";
            }
            // line 37
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formgce_gce");
            echo "\" title=\"GceApp\">
                                Gestion GCE</a>
                        </li>

                        <li ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41) == "EdiConsult")) {
                echo " class=\"active\"
                                ";
            }
            // line 42
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EdiConsult");
            echo "\" title=\"Log Editique erreurs\">
                                Infos Log</a>
                        </li>
                    </ul>
                </li>
                ";
        }
        // line 48
        echo "
                ";
        // line 49
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MAG") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 50
            echo "                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" ";
            // line 51
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "get", [0 => "_route"], "method", false, false, false, 51), [0 => "GceConsultIndex", 1 => "GceDbInfo", 2 => "formgce_gce", 3 => "EdiConsult"])) {
                echo " class=\"active\"
                    ";
            }
            // line 53
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "get", [0 => "_route"], "method", false, false, false, 53) == "mag_index")) {
                echo " class=\"active\"
                            ";
            }
            // line 54
            echo ">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Magasin-App</span>
                    </a>

                    <ul class=\"sub\">

                        <li";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61) == "mag_index")) {
                echo " class=\"active\"
                                ";
            }
            // line 62
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mag_index");
            echo "\" title=\"General\">
                                Impressions </a></li>


                    </ul>
                </li>
                ";
        }
        // line 69
        echo "
                ";
        // line 70
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAM") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 71
            echo "                ";
            // line 72
            echo "                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" ";
            // line 73
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", [0 => "_route"], "method", false, false, false, 73), [0 => "post_new", 1 => "integ_pa", 2 => "integ_pv", 3 => "modif_vn", 4 => "modif_gamme"])) {
                echo " class=\"active\"
                    ";
            }
            // line 74
            echo ">
                        <i class=\"fa fa-book\"></i>
                        <span>Créations et MAJ Produits </span>
                    </a>
                    <ul class=\"sub\">
                        <li";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "get", [0 => "_route"], "method", false, false, false, 79) == "post_new")) {
                echo " class=\"active\"
                                ";
            }
            // line 80
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
            echo "\" title=\"Création produits en masse\">Créations Produits en Masse
                                </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84) == "integ_pa")) {
                echo " class=\"active\"
                                ";
            }
            // line 85
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integ_pa");
            echo "\" title=\"Inetgration PA\">Intègration PA
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89) == "integ_pv")) {
                echo " class=\"active\"
                                ";
            }
            // line 90
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integ_pv");
            echo "\" title=\"Inetgration PV\">Intègration PV
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                       <li";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "get", [0 => "_route"], "method", false, false, false, 94) == "modif_vn")) {
                echo " class=\"active\"
                                ";
            }
            // line 95
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_vn");
            echo "\" title=\"Mettre les produits en PV\">Produits en VN
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "get", [0 => "_route"], "method", false, false, false, 99) == "modif_gamme")) {
                echo " class=\"active\"
                                ";
            }
            // line 100
            echo "> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_gamme");
            echo "\" title=\"Changer de Gamme\">Changer de GAMME
                            </a></li>
                    </ul>
                </li>
                ";
        }
        // line 105
        echo "                ";
        // line 106
        echo "                    ";
        // line 107
        echo "                        ";
        // line 108
        echo "                        ";
        // line 109
        echo "                        ";
        // line 110
        echo "                    ";
        // line 111
        echo "                    ";
        // line 112
        echo "                        ";
        // line 113
        echo "                                ";
        // line 114
        echo "                            ";
        // line 115
        echo "                           ";
        // line 116
        echo "
                    ";
        // line 118
        echo "                    ";
        // line 119
        echo "                        ";
        // line 120
        echo "
                    ";
        // line 122
        echo "                    ";
        // line 123
        echo "                        ";
        // line 124
        echo "
                    ";
        // line 126
        echo "                ";
        // line 127
        echo "                ";
        // line 128
        echo "                    ";
        // line 129
        echo "                        ";
        // line 130
        echo "                        ";
        // line 131
        echo "                    ";
        // line 132
        echo "                    ";
        // line 133
        echo "                        ";
        // line 134
        echo "
                    ";
        // line 136
        echo "                ";
        // line 137
        echo "                ";
        // line 138
        echo "                    ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 141
        echo "                    ";
        // line 142
        echo "                    ";
        // line 143
        echo "                        ";
        // line 144
        echo "
                    ";
        // line 146
        echo "                ";
        // line 147
        echo "
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modules/navi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 147,  355 => 146,  352 => 144,  350 => 143,  348 => 142,  346 => 141,  344 => 140,  342 => 139,  340 => 138,  338 => 137,  336 => 136,  333 => 134,  331 => 133,  329 => 132,  327 => 131,  325 => 130,  323 => 129,  321 => 128,  319 => 127,  317 => 126,  314 => 124,  312 => 123,  310 => 122,  307 => 120,  305 => 119,  303 => 118,  300 => 116,  298 => 115,  296 => 114,  294 => 113,  292 => 112,  290 => 111,  288 => 110,  286 => 109,  284 => 108,  282 => 107,  280 => 106,  278 => 105,  269 => 100,  264 => 99,  256 => 95,  251 => 94,  243 => 90,  238 => 89,  230 => 85,  225 => 84,  217 => 80,  212 => 79,  205 => 74,  200 => 73,  197 => 72,  195 => 71,  193 => 70,  190 => 69,  179 => 62,  174 => 61,  165 => 54,  159 => 53,  154 => 51,  151 => 50,  149 => 49,  146 => 48,  136 => 42,  131 => 41,  123 => 37,  118 => 36,  111 => 33,  106 => 32,  99 => 29,  94 => 28,  85 => 21,  79 => 20,  74 => 18,  71 => 17,  69 => 16,  61 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--sidebar start-->
<aside>
    <div id=\"sidebar\" class=\"nav-collapse\">
        <!-- sidebar menu start-->
        <div class=\"leftside-navigation\">
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <li>
                    <a href=\"{{ path('exploit_homepage_index') }}\" title=\"Anigestion index\"
                            {% if app.request.get('_route') == 'exploit_homepage_idex' %} class=\"active\"
                            {% endif %}>
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>

                </li>
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" {% if app.request.get('_route') in ['GceConsultIndex' , 'GceDbInfo', 'formgce_gce','EdiConsult'] %} class=\"active\"
                            {% endif %}
                            {% if app.request.get('_route') == 'GceConsultIndex'  %} class=\"active\"
                            {% endif %}>
                        <i class=\"fa fa-laptop\"></i>
                        <span>GCE</span>
                    </a>

                    <ul class=\"sub\">

                        <li{% if app.request.get('_route') == 'GceConsultIndex' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('GceConsultIndex') }}\" title=\"General\">
                                General</a></li>

                        <li {% if app.request.get('_route') == 'GceDbInfo' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('GceDbInfo') }}\" title=\"Info Tablespace\">
                                Info DB GCE</a></li>

                        <li {% if app.request.get('_route') == 'formgce_gce' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('formgce_gce') }}\" title=\"GceApp\">
                                Gestion GCE</a>
                        </li>

                        <li {% if app.request.get('_route') == 'EdiConsult' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('EdiConsult') }}\" title=\"Log Editique erreurs\">
                                Infos Log</a>
                        </li>
                    </ul>
                </li>
                {% endif %}

                {% if is_granted('ROLE_MAG') or is_granted('ROLE_SUPER_ADMIN') %}
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" {% if app.request.get('_route') in ['GceConsultIndex' , 'GceDbInfo', 'formgce_gce','EdiConsult'] %} class=\"active\"
                    {% endif %}
                            {% if app.request.get('_route') == 'mag_index'  %} class=\"active\"
                            {% endif %}>
                        <i class=\"fa fa-laptop\"></i>
                        <span>Magasin-App</span>
                    </a>

                    <ul class=\"sub\">

                        <li{% if app.request.get('_route') == 'mag_index' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('mag_index') }}\" title=\"General\">
                                Impressions </a></li>


                    </ul>
                </li>
                {% endif %}

                {% if is_granted('ROLE_CAM') or is_granted('ROLE_SUPER_ADMIN') %}
                {#Preparation GCE#}
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\" {% if app.request.get('_route')in ['post_new' , 'integ_pa' , 'integ_pv', 'modif_vn', 'modif_gamme']   %} class=\"active\"
                    {% endif %}>
                        <i class=\"fa fa-book\"></i>
                        <span>Créations et MAJ Produits </span>
                    </a>
                    <ul class=\"sub\">
                        <li{% if app.request.get('_route') == 'post_new' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('post_new') }}\" title=\"Création produits en masse\">Créations Produits en Masse
                                </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li{% if app.request.get('_route') == 'integ_pa' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('integ_pa') }}\" title=\"Inetgration PA\">Intègration PA
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li{% if app.request.get('_route') == 'integ_pv' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('integ_pv') }}\" title=\"Inetgration PV\">Intègration PV
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                       <li{% if app.request.get('_route') == 'modif_vn' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('modif_vn') }}\" title=\"Mettre les produits en PV\">Produits en VN
                            </a></li>
                    </ul>
                    <ul class=\"sub\">
                        <li{% if app.request.get('_route') == 'modif_gamme' %} class=\"active\"
                                {% endif %}> <a href=\"{{ path('modif_gamme') }}\" title=\"Changer de Gamme\">Changer de GAMME
                            </a></li>
                    </ul>
                </li>
                {% endif %}
                {#<li class=\"sub-menu\">#}
                    {#<a href=\"javascript:;\"  {% if app.request.get('_route') == 'exploit_gce_integration' %} class=\"active\"#}
                        {#{% endif %}>#}
                        {#<i class=\"fa fa-book\"></i>#}
                        {#<span>INTEGRATION</span>#}
                    {#</a>#}
                    {#<ul class=\"sub\">#}
                        {#<li{% if app.request.get('_route') == 'exploit_gce_integration' %} class=\"active\"#}
                                {#{% endif %}>#}
                            {#<a href=\"{{ path('exploit_gce_integration') }}\" title=\"Integration\">Integration Produits en Masse </a>#}
                           {#</li>#}

                    {#</ul>#}
                    {#<ul class=\"sub\">#}
                        {#<li><a href=\"general.html\">Integration PA</a></li>#}

                    {#</ul>#}
                    {#<ul class=\"sub\">#}
                        {#<li><a href=\"general.html\">Integration PV</a></li>#}

                    {#</ul>#}
                {#</>#}
                {#<li class=\"sub-menu\">#}
                    {#<a href=\"javascript:;\">#}
                        {#<i class=\"fa fa-envelope\"></i>#}
                        {#<span>Mail </span>#}
                    {#</a>#}
                    {#<ul class=\"sub\">#}
                        {#<li><a href=\"mail.html\">General</a></li>#}

                    {#</ul>#}
                {#</li>#}
                {#<li class=\"sub-menu\">#}
                    {#<a href=\"javascript:;\">#}
                        {#<i class=\" fa fa-bar-chart-o\"></i>#}
                        {#<span>WIKI</span>#}
                    {#</a>#}
                    {#<ul class=\"sub\">#}
                        {#<li><a href=\"morris.html\">General</a></li>#}

                    {#</ul>#}
                {#</li>#}

            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
", "modules/navi.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\app\\Resources\\views\\modules\\navi.html.twig");
    }
}
