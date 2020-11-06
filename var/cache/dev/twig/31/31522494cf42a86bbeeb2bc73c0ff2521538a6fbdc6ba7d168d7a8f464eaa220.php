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

/* @Exploit/Default/blocinfo.html.twig */
class __TwigTemplate_f9bf7fbaab9512aad222a7f2a4d8cfb8985c7f922f14779b157eff45c6fee565 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exploit/Default/blocinfo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exploit/Default/blocinfo.html.twig"));

        // line 1
        echo "<div class=\"nav notify-row\" id=\"top_menu\">
    <!--  notification start -->
    <ul class=\"nav top-menu\">
        <!-- settings start -->
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"fa fa-tasks\"></i>
                <span class=\"badge bg-success\"></span>
            </a>
            ";
        // line 11
        echo "                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                ";
        // line 14
        echo "                ";
        // line 15
        echo "                    ";
        // line 16
        echo "                        ";
        // line 17
        echo "                            ";
        // line 18
        echo "                                ";
        // line 19
        echo "                                ";
        // line 20
        echo "                            ";
        // line 21
        echo "                            ";
        // line 22
        echo "                            ";
        // line 23
        echo "                            ";
        // line 24
        echo "                        ";
        // line 25
        echo "                    ";
        // line 26
        echo "                ";
        // line 27
        echo "
            ";
        // line 29
        echo "        </li>
        <!-- settings end -->

        <!-- inbox dropdown start-->
        ";
        // line 34
        echo "            ";
        // line 35
        echo "                ";
        // line 36
        echo "                ";
        // line 37
        echo "            ";
        // line 38
        echo "            ";
        // line 39
        echo "                ";
        // line 40
        echo "                    ";
        // line 41
        echo "                ";
        // line 42
        echo "
            ";
        // line 44
        echo "        ";
        // line 45
        echo "        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        ";
        // line 48
        echo "            ";
        // line 49
        echo "
                ";
        // line 51
        echo "                ";
        // line 52
        echo "            ";
        // line 53
        echo "            ";
        // line 54
        echo "                ";
        // line 55
        echo "                    ";
        // line 56
        echo "                ";
        // line 57
        echo "
            ";
        // line 59
        echo "        ";
        // line 60
        echo "        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>

<div class=\"top-nav clearfix\">
    <!--search & user info start-->
    <ul class=\"nav pull-right top-menu\">
        ";
        // line 69
        echo "            ";
        // line 70
        echo "        ";
        // line 71
        echo "        <!-- user login dropdown start-->
        ";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <img alt=\"\" src=\"images/avatar1_small.jpg\">
                <span class=\"username\"> ";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "username", [], "any", false, false, false, 76)], "FOSUserBundle"), "html", null, true);
            echo "</span>
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu extended logout\">
                <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>

                <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-key\"></i> Deconnexion</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        ";
        } else {
            // line 87
            echo "        <li class=\"dropdown\">
        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
            <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\"><i class=\"icon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo " </a>
        <li>
            </li>
        ";
        }
        // line 93
        echo "            <div class=\"toggle-right-box\">
                <div class=\"fa fa-bars\"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Exploit/Default/blocinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 93,  190 => 89,  186 => 87,  178 => 82,  173 => 80,  166 => 76,  161 => 73,  159 => 72,  156 => 71,  154 => 70,  152 => 69,  142 => 60,  140 => 59,  137 => 57,  135 => 56,  133 => 55,  131 => 54,  129 => 53,  127 => 52,  125 => 51,  122 => 49,  120 => 48,  116 => 45,  114 => 44,  111 => 42,  109 => 41,  107 => 40,  105 => 39,  103 => 38,  101 => 37,  99 => 36,  97 => 35,  95 => 34,  89 => 29,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav notify-row\" id=\"top_menu\">
    <!--  notification start -->
    <ul class=\"nav top-menu\">
        <!-- settings start -->
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"fa fa-tasks\"></i>
                <span class=\"badge bg-success\"></span>
            </a>
            {#<ul class=\"dropdown-menu extended tasks-bar\">#}
                {#<li>#}
                    {#<p class=\"\">test</p>#}
                {#</li>#}
                {#<li>#}
                    {#<a href=\"#\">#}
                        {#<div class=\"task-info clearfix\">#}
                            {#<div class=\"desc pull-left\">#}
                                {#<h5>test</h5>#}
                                {#<p>test</p>#}
                            {#</div>#}
                            {#<span class=\"notification-pie-chart pull-right\" data-percent=\"45\">#}
                            {#<span class=\"percent\"></span>#}
                            {#</span>#}
                        {#</div>#}
                    {#</a>#}
                {#</li>#}

            {#</ul>#}
        </li>
        <!-- settings end -->

        <!-- inbox dropdown start-->
        {#<li id=\"header_inbox_bar\" class=\"dropdown\">#}
            {#<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">#}
                {#<i class=\"fa fa-envelope-o\"></i>#}
                {#<span class=\"badge bg-important\">2</span>#}
            {#</a>#}
            {#<ul class=\"dropdown-menu extended inbox\">#}
                {#<li>#}
                    {#<p class=\"red\">vous aves 2 mail </p>#}
                {#</li>#}

            {#</ul>#}
        {#</li>#}
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        {#<li id=\"header_notification_bar\" class=\"dropdown\">#}
            {#<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">#}

                {#<i class=\"fa fa-bell-o\"></i>#}
                {#<span class=\"badge bg-warning\">3</span>#}
            {#</a>#}
            {#<ul class=\"dropdown-menu extended notification\">#}
                {#<li>#}
                    {#<p>Notifications</p>#}
                {#</li>#}

            {#</ul>#}
        {#</li>#}
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>

<div class=\"top-nav clearfix\">
    <!--search & user info start-->
    <ul class=\"nav pull-right top-menu\">
        {#<li>#}
            {#<input type=\"text\" class=\"form-control search\" placeholder=\" Search\">#}
        {#</li>#}
        <!-- user login dropdown start-->
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <img alt=\"\" src=\"images/avatar1_small.jpg\">
                <span class=\"username\"> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</span>
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu extended logout\">
                <li><a href=\"{{ path('fos_user_profile_show') }}\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>

                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-key\"></i> Deconnexion</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        {% else %}
        <li class=\"dropdown\">
        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
            <a href=\"{{ path('fos_user_security_login') }}\"><i class=\"icon-user\"></i> {{ 'layout.login'|trans({}, 'FOSUserBundle') }} </a>
        <li>
            </li>
        {% endif %}
            <div class=\"toggle-right-box\">
                <div class=\"fa fa-bars\"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
\t", "@Exploit/Default/blocinfo.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\src\\ExploitBundle\\Resources\\views\\Default\\blocinfo.html.twig");
    }
}
