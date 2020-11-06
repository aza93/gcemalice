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

/* Gceapp/new.html.twig */
class __TwigTemplate_bf67cb4f91e61cd270528f12eac79f4524dd3a35ee0b5483c8a309a5d44fae6f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'active_nav' => [$this, 'block_active_nav'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'nav_hor' => [$this, 'block_nav_hor'],
            'container' => [$this, 'block_container'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "modules/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gceapp/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gceapp/new.html.twig"));

        $this->parent = $this->loadTemplate("modules/base.html.twig", "Gceapp/new.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Invalidation NCF";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_active_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "active_nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "active_nav"));

        // line 8
        echo "<a class=\"active\" href=\"\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "

        ";
        // line 18
        $this->displayBlock('nav_hor', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('container', $context, $blocks);
        // line 123
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            ";
        $this->loadTemplate("modules/header.html.twig", "Gceapp/new.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_nav_hor($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_hor"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_hor"));

        // line 19
        echo "            ";
        $this->loadTemplate("modules/navi.html.twig", "Gceapp/new.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 23
        echo "    <div class=\"row\">

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    Supprimer une NCF
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        ";
        // line 32
        echo "                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">

                    <div class=\"position-center\">
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "

                        <div class=\"col-sm-6\">
                            Numéro NCF :
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "numncf", [], "any", false, false, false, 42), 'widget');
        echo "
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "numncf", [], "any", false, false, false, 43), 'errors');
        echo "
                        </div>
                        <div style=\"display:none\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'rest');
        echo "
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "

                    </div>
                </div>
            </section>

        </div>

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    RENVOI DES COMMANDES EMAIL
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        ";
        // line 66
        echo "                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">
                    <div class=\"position-center\">
                        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_renvoicmd"]) || array_key_exists("form_renvoicmd", $context) ? $context["form_renvoicmd"] : (function () { throw new RuntimeError('Variable "form_renvoicmd" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                        <div class=\"col-sm-6\">
                            Numéro de commande :
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_renvoicmd"]) || array_key_exists("form_renvoicmd", $context) ? $context["form_renvoicmd"] : (function () { throw new RuntimeError('Variable "form_renvoicmd" does not exist.', 74, $this->source); })()), "cmdrenvoi", [], "any", false, false, false, 74), 'widget');
        echo "
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_renvoicmd"]) || array_key_exists("form_renvoicmd", $context) ? $context["form_renvoicmd"] : (function () { throw new RuntimeError('Variable "form_renvoicmd" does not exist.', 75, $this->source); })()), "cmdrenvoi", [], "any", false, false, false, 75), 'errors');
        echo "
                        </div>
                        <div style=\"display:none\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_renvoicmd"]) || array_key_exists("form_renvoicmd", $context) ? $context["form_renvoicmd"] : (function () { throw new RuntimeError('Variable "form_renvoicmd" does not exist.', 78, $this->source); })()), 'rest');
        echo "
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_renvoicmd"]) || array_key_exists("form_renvoicmd", $context) ? $context["form_renvoicmd"] : (function () { throw new RuntimeError('Variable "form_renvoicmd" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    IMPRESSION DES ETIQUETES MAGASIN
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        ";
        // line 96
        echo "                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">
                    <div class=\"position-center\">
                        ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_impre"]) || array_key_exists("form_impre", $context) ? $context["form_impre"] : (function () { throw new RuntimeError('Variable "form_impre" does not exist.', 101, $this->source); })()), 'form_start');
        echo "
                        <div class=\"col-sm-6\">
                            Magasin :
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_impre"]) || array_key_exists("form_impre", $context) ? $context["form_impre"] : (function () { throw new RuntimeError('Variable "form_impre" does not exist.', 104, $this->source); })()), "edimag", [], "any", false, false, false, 104), 'widget');
        echo "
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_impre"]) || array_key_exists("form_impre", $context) ? $context["form_impre"] : (function () { throw new RuntimeError('Variable "form_impre" does not exist.', 105, $this->source); })()), "edimag", [], "any", false, false, false, 105), 'errors');
        echo "
                        </div>
                        <div style=\"display:none\">
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_impre"]) || array_key_exists("form_impre", $context) ? $context["form_impre"] : (function () { throw new RuntimeError('Variable "form_impre" does not exist.', 108, $this->source); })()), 'rest');
        echo "
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_impre"]) || array_key_exists("form_impre", $context) ? $context["form_impre"] : (function () { throw new RuntimeError('Variable "form_impre" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </section>
        </div>

    </div>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Gceapp/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 126,  351 => 125,  331 => 113,  323 => 108,  317 => 105,  313 => 104,  307 => 101,  300 => 96,  285 => 83,  277 => 78,  271 => 75,  267 => 74,  261 => 71,  254 => 66,  237 => 51,  229 => 46,  223 => 43,  219 => 42,  212 => 38,  204 => 32,  194 => 23,  184 => 22,  174 => 20,  171 => 19,  161 => 18,  151 => 15,  148 => 14,  138 => 13,  128 => 123,  126 => 22,  123 => 21,  121 => 18,  117 => 16,  114 => 13,  104 => 12,  93 => 8,  83 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"modules/base.html.twig\" %}

{% block title %}Invalidation NCF{% endblock %}

 {% block active_nav %}
<a class=\"active\" href=\"\">
    {% endblock %}


    {% block body %}
        {% block header %}
            {% include 'modules/header.html.twig' %}
        {% endblock %}


        {% block nav_hor %}
            {% include 'modules/navi.html.twig' %}
        {% endblock %}

        {% block container %}
    <div class=\"row\">

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    Supprimer une NCF
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        {#<a href=\"javascript:;\" class=\"fa fa-cog\"></a>#}
                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">

                    <div class=\"position-center\">
                        {{ form_start(form) }}

                        <div class=\"col-sm-6\">
                            Numéro NCF :
                            {{ form_widget(form.numncf) }}
                            {{ form_errors(form.numncf) }}
                        </div>
                        <div style=\"display:none\">
                            {{ form_rest(form) }}
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        {{ form_end(form) }}

                    </div>
                </div>
            </section>

        </div>

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    RENVOI DES COMMANDES EMAIL
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        {#<a href=\"javascript:;\" class=\"fa fa-cog\"></a>#}
                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">
                    <div class=\"position-center\">
                        {{ form_start(form_renvoicmd) }}
                        <div class=\"col-sm-6\">
                            Numéro de commande :
                            {{ form_widget(form_renvoicmd.cmdrenvoi) }}
                            {{ form_errors(form_renvoicmd.cmdrenvoi) }}
                        </div>
                        <div style=\"display:none\">
                            {{ form_rest(form_renvoicmd) }}
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        {{ form_end(form_renvoicmd) }}
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            <section class=\"panel\">
                <header class=\"panel-heading\">
                    IMPRESSION DES ETIQUETES MAGASIN
                    <span class=\"tools pull-right\">
                            <a href=\"javascript:;\" class=\"fa fa-chevron-up\"></a>
                        {#<a href=\"javascript:;\" class=\"fa fa-cog\"></a>#}
                        <a href=\"javascript:;\" class=\"fa fa-times\"></a>
                         </span>
                </header>
                <div class=\"panel-body\" style=\"display: none\">
                    <div class=\"position-center\">
                        {{ form_start(form_impre) }}
                        <div class=\"col-sm-6\">
                            Magasin :
                            {{ form_widget(form_impre.edimag) }}
                            {{ form_errors(form_impre.edimag) }}
                        </div>
                        <div style=\"display:none\">
                            {{ form_rest(form_impre) }}
                        </div>
                        <div class=\"right\"><br>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Envoyer\" />
                        </div>
                        {{ form_end(form_impre) }}
                    </div>
                </div>
            </section>
        </div>

    </div>


        {% endblock %}
    {% endblock %}

    {% block javascripts %}


    {% endblock %}


", "Gceapp/new.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\app\\Resources\\views\\Gceapp\\new.html.twig");
    }
}
