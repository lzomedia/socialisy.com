<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm */
class __TwigTemplate_4ab4d0ddd99fc95195f2e30593eab11ca41fd7fabf4ceeedc2a29b993cf8391b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
<div class=\"row\">


        <form data-request=\"onSignin\">


            <fieldset class=\"uk-fieldset\">
                <legend class=\"uk-legend\">Login</legend>
                <div class=\"uk-margin\">
                    <div class=\"uk-inline uk-width-1-1\">
                        <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                        <input class=\"uk-input uk-form-large\" name=\"login\" required placeholder=\"Enter your ";
            // line 14
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" type=\"text\">
                    </div>
                </div>
                <div class=\"uk-margin\">
                    <div class=\"uk-inline uk-width-1-1\">
                        <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:white\" data-uk-icon=\"icon: lock\"></span>
                        <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"Password\" type=\"password\">
                    </div>
                </div>
                <div class=\"uk-margin\">
                    <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1\">LOG IN</button>
                    <a uk-toggle=\"target: #registerUser\" class=\"uk-button uk-margin uk-button-danger uk-button-large uk-width-1-1\">REGISTER</a>
                </div>
            </fieldset>
        </form>


    <!-- start the register modal !-->
    ";
            // line 32
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/register"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 33
            echo "


</div>

";
        } else {
            // line 39
            echo "
";
            // line 40
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 41
            echo "
";
            // line 42
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "
";
            // line 44
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 45
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 45,  89 => 44,  86 => 43,  82 => 42,  79 => 41,  75 => 40,  72 => 39,  64 => 33,  60 => 32,  39 => 14,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}

<div class=\"row\">


        <form data-request=\"onSignin\">


            <fieldset class=\"uk-fieldset\">
                <legend class=\"uk-legend\">Login</legend>
                <div class=\"uk-margin\">
                    <div class=\"uk-inline uk-width-1-1\">
                        <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                        <input class=\"uk-input uk-form-large\" name=\"login\" required placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" type=\"text\">
                    </div>
                </div>
                <div class=\"uk-margin\">
                    <div class=\"uk-inline uk-width-1-1\">
                        <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:white\" data-uk-icon=\"icon: lock\"></span>
                        <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"Password\" type=\"password\">
                    </div>
                </div>
                <div class=\"uk-margin\">
                    <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1\">LOG IN</button>
                    <a uk-toggle=\"target: #registerUser\" class=\"uk-button uk-margin uk-button-danger uk-button-large uk-width-1-1\">REGISTER</a>
                </div>
            </fieldset>
        </form>


    <!-- start the register modal !-->
    {% partial 'modals/register' %}



</div>

{% else %}

{% partial __SELF__ ~ '::activation_check' %}

{% partial __SELF__ ~ '::update' %}

{% partial __SELF__ ~ '::deactivate_link' %}

{% endif %}", "/shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm", "");
    }
}
