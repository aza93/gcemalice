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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_8f0c1d9a88f5901911e9e31d065e1ddb9305bd0b73a9eb49b0192f8ced905783 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
    <body style=\"background: #1FB3A3 url('";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lock-screen.jpg"), "html", null, true);
        echo "') no-repeat fixed 0 0 / cover;\" onload=\"startTime()\">
    <div class=\"lock-wrapper\">
        <div id=\"time\"></div>

        <form class=\"form-signin\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <h2 class=\"form-signin-heading\">COMPTE</h2>

            <div class=\"login-wrap\">
                <div class=\"user-login-info\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" />
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" autofocus>

                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\" autofocus>
                </div>
                <label class=\"checkbox\">
                    <input type=\"checkbox\" value=\"remember-me\">  ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
                    <span class=\"pull-right\">
                    <a data-toggle=\"modal\" href=\"#myModal\"> Mode de passe oublié?</a>

                </span>
                </label>
                <button class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
                ";
        // line 27
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                    <div >";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageKey", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 30
        echo "            </div>

            <!-- Modal -->
            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">réinitialiser le mot de passe</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Enter votre e-mail pour réinitialiser le mot de passe.</p>
                            <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                        </div>
                        <div class=\"modal-footer\">
                            <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                            <button class=\"btn btn-success\" type=\"button\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>
    </div>
    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+\":\"+m+\":\"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i=\"0\" + i;
            }
            return i;
        }
    </script>
    </body>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  98 => 28,  96 => 27,  90 => 26,  81 => 20,  75 => 17,  68 => 15,  64 => 14,  56 => 9,  49 => 5,  46 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{#{% block fos_user_content %}#}

    <body style=\"background: #1FB3A3 url('{{ asset('images/lock-screen.jpg') }}') no-repeat fixed 0 0 / cover;\" onload=\"startTime()\">
    <div class=\"lock-wrapper\">
        <div id=\"time\"></div>

        <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <h2 class=\"form-signin-heading\">COMPTE</h2>

            <div class=\"login-wrap\">
                <div class=\"user-login-info\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"  placeholder=\"{{ 'security.login.username'|trans }}\" autofocus>

                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\" autofocus>
                </div>
                <label class=\"checkbox\">
                    <input type=\"checkbox\" value=\"remember-me\">  {{ 'security.login.remember_me'|trans }}
                    <span class=\"pull-right\">
                    <a data-toggle=\"modal\" href=\"#myModal\"> Mode de passe oublié?</a>

                </span>
                </label>
                <button class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"{{ 'security.login.submit'|trans }}\">{{ 'security.login.submit'|trans }}</button>
                {% if error %}
                    <div >{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            </div>

            <!-- Modal -->
            <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">réinitialiser le mot de passe</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Enter votre e-mail pour réinitialiser le mot de passe.</p>
                            <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                        </div>
                        <div class=\"modal-footer\">
                            <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                            <button class=\"btn btn-success\" type=\"button\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>
    </div>
    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+\":\"+m+\":\"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i=\"0\" + i;
            }
            return i;
        }
    </script>
    </body>



{#{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>#}
{#{% endblock fos_user_content %}#}", "@FOSUser/Security/login_content.html.twig", "C:\\Users\\aazabar\\Desktop\\Workspace\\gcemalice\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
