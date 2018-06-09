<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm */
class __TwigTemplate_e3361305588f11a17ea08606f7c48b7ec690dab3472fd69ff0a1adafe2ecd0de extends Twig_Template
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
<div class=\"uk-container\">

    <div class=\"uk-text-center\" uk-grid>
        <div class=\"uk-width-1-2\">
            <form data-request=\"onSignin\">


                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend uk-text-left\">Login</legend>
                    <div class=\"uk-margin\">
                        <div class=\"uk-inline uk-width-1-1\">
                            <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                            <input class=\"uk-input uk-form-large\" name=\"login\" required placeholder=\"Enter your ";
            // line 15
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
                        <a uk-toggle=\"target: #register\" class=\"uk-button uk-margin uk-button-danger uk-button-large uk-width-1-1\">REGISTER</a>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"uk-width-1-2\">


        </div>
    </div>




    <!-- start the register modal !-->
    ";
            // line 41
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/register"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 42
            echo "


</div>

";
        } else {
            // line 48
            echo "

<div class=\"uk-container\">


    ";
            // line 53
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 54
            echo "
    ";
            // line 55
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 56
            echo "
    ";
            // line 57
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 58
            echo "
</div>



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
        return array (  106 => 58,  102 => 57,  99 => 56,  95 => 55,  92 => 54,  88 => 53,  81 => 48,  73 => 42,  69 => 41,  40 => 15,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}

<div class=\"uk-container\">

    <div class=\"uk-text-center\" uk-grid>
        <div class=\"uk-width-1-2\">
            <form data-request=\"onSignin\">


                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend uk-text-left\">Login</legend>
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
                        <a uk-toggle=\"target: #register\" class=\"uk-button uk-margin uk-button-danger uk-button-large uk-width-1-1\">REGISTER</a>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"uk-width-1-2\">


        </div>
    </div>




    <!-- start the register modal !-->
    {% partial 'modals/register' %}



</div>

{% else %}


<div class=\"uk-container\">


    {% partial __SELF__ ~ '::activation_check' %}

    {% partial __SELF__ ~ '::update' %}

    {% partial __SELF__ ~ '::deactivate_link' %}

</div>



{% endif %}", "/shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm", "");
    }
}
