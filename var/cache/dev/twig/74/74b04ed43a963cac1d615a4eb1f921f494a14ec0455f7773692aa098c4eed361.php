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

/* integpa/new.html.twig */
class __TwigTemplate_a32ebeec26391231959140866b1a113e49278558e41dc5f9e1a9f98a89a89a47 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        // line 1
        return "modules/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integpa/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integpa/new.html.twig"));

        $this->parent = $this->loadTemplate("modules/base.html.twig", "integpa/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "INTEGRATION ";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_active_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "active_nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "active_nav"));

        // line 11
        echo "<a class=\"active\" href=\"\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "

        ";
        // line 20
        $this->displayBlock('nav_hor', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 92
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "            ";
        $this->loadTemplate("modules/header.html.twig", "integpa/new.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_nav_hor($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_hor"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_hor"));

        // line 21
        echo "            ";
        $this->loadTemplate("modules/navi.html.twig", "integpa/new.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 25
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"breadcrumbs-alt\">
                        <li>
                            <a class=\"current\" href=\"\">1. CHARGEMENT FICHIER ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</a>
                        </li>
                        <li>
                            <a href=\"#\">2. INTEGRATION DES ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</a>
                        </li>
                        <li>
                            <a href=\"#\">4. VALIDATION</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">Chargement Fichier Pour Intègration ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "
                            <span class=\"tools pull-right\">
                                 ";
        // line 45
        echo "                         </span>
                        </header>
                        <div class=\"panel-body\">
                                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                         <div class=\"form-group\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "control-label col-md-3"]]);
        echo "
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'errors');
        echo "
                             <div class=\"col-md-4 col-xs-11\">
                             ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "col-md-4 col-xs-11"]]);
        echo "
                             </div>
                         </div>
                            <div class=\"form-group\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "content", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "control-label col-md-3"]]);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'errors');
        echo "
                                <div class=\"col-md-4 col-xs-11\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "content", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "col-md-4 col-xs-11"]]);
        echo "
                                </div>
                            </div>

                            ";
        // line 65
        echo "                                ";
        // line 66
        echo "                                ";
        // line 67
        echo "                                ";
        // line 68
        echo "                                    ";
        // line 69
        echo "                                    ";
        // line 70
        echo "                                ";
        // line 71
        echo "                            ";
        // line 72
        echo "
                            <div class=\"form-group\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "file", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "control-label col-md-3"]]);
        echo "
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "file", [], "any", false, false, false, 75), 'errors');
        echo "
                                <div class=\"col-md-6 col-xs-11\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "file", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "col-md-8 col-xs-11"]]);
        echo "
                                </div>
                            </div>

                                <div class=\"col-lg-offset-6 col-lg-10\">
                                    <input class=\"btn btn-success\" type=\"submit\" value=\"Création ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\" />
                                </div>
                                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
                            <a class=\"btn btn-info pull-right\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\">Liste Fichiers</a>
                        </div>

                    </section>
                ";
        // line 90
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "


<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-fileupload/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-timepicker/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-multi-select/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-tags-input/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-tags-input/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "integpa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 114,  421 => 112,  416 => 110,  412 => 109,  408 => 108,  404 => 107,  400 => 106,  396 => 105,  392 => 104,  388 => 103,  384 => 102,  380 => 101,  376 => 100,  372 => 99,  368 => 98,  363 => 95,  353 => 94,  342 => 90,  335 => 85,  331 => 84,  326 => 82,  318 => 77,  313 => 75,  309 => 74,  305 => 72,  303 => 71,  301 => 70,  299 => 69,  297 => 68,  295 => 67,  293 => 66,  291 => 65,  284 => 60,  279 => 58,  275 => 57,  268 => 53,  263 => 51,  259 => 50,  254 => 48,  249 => 45,  244 => 42,  232 => 33,  226 => 30,  219 => 25,  209 => 24,  199 => 22,  196 => 21,  186 => 20,  176 => 17,  173 => 16,  163 => 15,  153 => 92,  151 => 24,  148 => 23,  146 => 20,  142 => 18,  139 => 15,  129 => 14,  118 => 11,  108 => 10,  95 => 6,  85 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"modules/base.html.twig\" %}

{% block title %}INTEGRATION {{ slug }}{% endblock %}

 {% block stylesheet %}
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('js/bootstrap-datepicker/css/datepicker.css') }}\">
 {% endblock %}


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
                <div class=\"col-md-12\">
                    <ul class=\"breadcrumbs-alt\">
                        <li>
                            <a class=\"current\" href=\"\">1. CHARGEMENT FICHIER {{ slug }}</a>
                        </li>
                        <li>
                            <a href=\"#\">2. INTEGRATION DES {{ slug }}</a>
                        </li>
                        <li>
                            <a href=\"#\">4. VALIDATION</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-12\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">Chargement Fichier Pour Intègration {{ slug }}
                            <span class=\"tools pull-right\">
                                 {#<a href=\"javascript:;\" class=\"fa fa-times\"></a>#}
                         </span>
                        </header>
                        <div class=\"panel-body\">
                                {{ form_start(form,{'attr': {'class': 'form-horizontal'}}) }}
                         <div class=\"form-group\">
                                {{ form_label(form.nom, null, {'label_attr': {'class' : 'control-label col-md-3'}}) }}
                                {{ form_errors(form.nom) }}
                             <div class=\"col-md-4 col-xs-11\">
                             {{ form_widget(form.nom, {'attr': {'class': 'col-md-4 col-xs-11'}}) }}
                             </div>
                         </div>
                            <div class=\"form-group\">
                                {{ form_label(form.content, null, {'label_attr': {'class' : 'control-label col-md-3'}}) }}
                                {{ form_errors(form.content) }}
                                <div class=\"col-md-4 col-xs-11\">
                                    {{ form_widget(form.content, {'attr': {'class': 'col-md-4 col-xs-11'}}) }}
                                </div>
                            </div>

                            {#<div class=\"form-group\">#}
                                {#{{ form_label(form.date, null, {'label_attr': {'class' : 'control-label col-md-3'}}) }}#}
                                {#{{ form_errors(form.date) }}#}
                                {#<div class=\"col-md-4 col-xs-11\">#}
                                    {#{{ form_widget(form.date, {'attr': {'class': 'form-control form-control-inline input-medium default-date-picker'}}) }}#}
                                    {#<span class=\"help-block\">date d'application</span>#}
                                {#</div>#}
                            {#</div>#}

                            <div class=\"form-group\">
                                {{ form_label(form.file, null, {'label_attr': {'class' : 'control-label col-md-3'}}) }}
                                {{ form_errors(form.file) }}
                                <div class=\"col-md-6 col-xs-11\">
                                    {{ form_widget(form.file, {'attr': {'class': 'col-md-8 col-xs-11'}}) }}
                                </div>
                            </div>

                                <div class=\"col-lg-offset-6 col-lg-10\">
                                    <input class=\"btn btn-success\" type=\"submit\" value=\"Création {{ slug }}\" />
                                </div>
                                {{ form_end(form) }}
                            <a class=\"btn btn-info pull-right\" href=\"{{ path('post_index') }}\">Liste Fichiers</a>
                        </div>

                    </section>
                {#</div>#}
            </div>
        {% endblock %}
    {% endblock %}

    {% block javascripts %}



<script src=\"{{ asset('js/bootstrap-switch.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/fuelux/js/spinner.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-fileupload/bootstrap-fileupload.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-daterangepicker/moment.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-timepicker/js/bootstrap-timepicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-multi-select/js/jquery.multi-select.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-multi-select/js/jquery.quicksearch.js') }}\"></script>

<script type=\"text/javascript\" src=\"{{ asset('js/jquery-tags-input/jquery.tagsinput.js') }}\"></script>

<script src=\"{{ asset('js/jquery-tags-input/jquery.tagsinput.js') }}\"></script>


{% endblock %}", "integpa/new.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\app\\Resources\\views\\integpa\\new.html.twig");
    }
}
