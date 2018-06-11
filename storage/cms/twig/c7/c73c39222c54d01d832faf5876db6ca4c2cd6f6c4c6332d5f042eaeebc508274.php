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
<div class=\"uk-section uk-section-secondary uk-light\" style=\"height:100vh;padding-top:20vh\">

    <div class=\"uk-container\">

        <div class=\"uk-grid-match\">


            <div uk-grid>


                <div class=\"uk-width-1-2@l uk-align-center\">

                    <h1>
                        Create an account
                    </h1>

                    <h4>It's free and always will be.</h4>
                    <p>
                        <small>We have even enterprise accounts</small>
                    </p>
                    <form data-request=\"onSignin\">


                        <fieldset class=\"uk-fieldset\">

                            <div class=\"uk-margin\">
                                <div class=\"uk-inline uk-width-1-1\">
                                    <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\"
                                          data-uk-icon=\"icon: user\"></span>
                                    <input class=\"uk-input uk-form-large\" name=\"login\" required
                                           placeholder=\"Enter your ";
            // line 33
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"uk-margin\">
                                <div class=\"uk-inline uk-width-1-1\">
                                    <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\"
                                          data-uk-icon=\"icon: lock\"></span>
                                    <input class=\"uk-input uk-form-large\" name=\"password\" required
                                           placeholder=\"Password\" type=\"password\">
                                </div>
                            </div>
                            <div class=\"uk-margin\">
                                <button type=\"submit\"
                                        class=\"uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1\">
                                    LOG IN
                                </button>
                                <a uk-toggle=\"target: #register\"
                                   class=\"uk-button uk-margin uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class=\"uk-width-1-2@l  uk-visible@s\">

                    <h2 class=\"_5iyx\">Social Trixie</h2>

                    <h4>
                        It helps you connect and share with the people in your life.
                    </h4>

                    <img class=\"img\" src=\"https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png\" alt=\"\" width=\"537\" height=\"195\">
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>


    </div>

    <!-- start the register modal !-->
    ";
            // line 73
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/register"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 74
            echo "</div>
</div>
";
        } else {
            // line 77
            echo "

<div class=\"uk-section uk-section-primary uk-light\" style=\"height:100vh;padding-top:20vh\">

    <div class=\"uk-container\">

        <div class=\"uk-grid-match\">


            <div uk-grid>


            ";
            // line 89
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 90
            echo "
            ";
            // line 91
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 92
            echo "
            ";
            // line 93
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 94
            echo "
            </div>
        </div>
    </div>

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
        return array (  142 => 94,  138 => 93,  135 => 92,  131 => 91,  128 => 90,  124 => 89,  110 => 77,  105 => 74,  101 => 73,  58 => 33,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}

<div class=\"uk-section uk-section-secondary uk-light\" style=\"height:100vh;padding-top:20vh\">

    <div class=\"uk-container\">

        <div class=\"uk-grid-match\">


            <div uk-grid>


                <div class=\"uk-width-1-2@l uk-align-center\">

                    <h1>
                        Create an account
                    </h1>

                    <h4>It's free and always will be.</h4>
                    <p>
                        <small>We have even enterprise accounts</small>
                    </p>
                    <form data-request=\"onSignin\">


                        <fieldset class=\"uk-fieldset\">

                            <div class=\"uk-margin\">
                                <div class=\"uk-inline uk-width-1-1\">
                                    <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\"
                                          data-uk-icon=\"icon: user\"></span>
                                    <input class=\"uk-input uk-form-large\" name=\"login\" required
                                           placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" type=\"text\">
                                </div>
                            </div>
                            <div class=\"uk-margin\">
                                <div class=\"uk-inline uk-width-1-1\">
                                    <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\"
                                          data-uk-icon=\"icon: lock\"></span>
                                    <input class=\"uk-input uk-form-large\" name=\"password\" required
                                           placeholder=\"Password\" type=\"password\">
                                </div>
                            </div>
                            <div class=\"uk-margin\">
                                <button type=\"submit\"
                                        class=\"uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1\">
                                    LOG IN
                                </button>
                                <a uk-toggle=\"target: #register\"
                                   class=\"uk-button uk-margin uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class=\"uk-width-1-2@l  uk-visible@s\">

                    <h2 class=\"_5iyx\">Social Trixie</h2>

                    <h4>
                        It helps you connect and share with the people in your life.
                    </h4>

                    <img class=\"img\" src=\"https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png\" alt=\"\" width=\"537\" height=\"195\">
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>


    </div>

    <!-- start the register modal !-->
    {% partial 'modals/register' %}
</div>
</div>
{% else %}


<div class=\"uk-section uk-section-primary uk-light\" style=\"height:100vh;padding-top:20vh\">

    <div class=\"uk-container\">

        <div class=\"uk-grid-match\">


            <div uk-grid>


            {% partial __SELF__ ~ '::activation_check' %}

            {% partial __SELF__ ~ '::update' %}

            {% partial __SELF__ ~ '::deactivate_link' %}

            </div>
        </div>
    </div>

</div>


{% endif %}", "/shared/httpd/socialisy/htdocs/themes/network/partials/account/default.htm", "");
    }
}
