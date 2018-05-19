<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/modals/register.htm */
class __TwigTemplate_e490fb2865d10eac21257b7b0aa1592dae6e28c4e62778692c47ff4bbbcfe81a extends Twig_Template
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
        echo "<div id=\"registerUser\" class=\"uk-modal-full\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
        <div class=\"uk-grid-collapse uk-child-width-1-2@s uk-flex-middle\" uk-grid>

            <div class=\"uk-padding\">



                ";
        // line 10
        if (($context["canRegister"] ?? null)) {
            // line 11
            echo "



                <form data-request=\"onRegister\">

                    <fieldset class=\"uk-fieldset\">
                        <legend class=\"uk-legend\">Register new user</legend>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"name\"  placeholder=\"Enter your name\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"email\" required placeholder=\"Enter your ";
            // line 28
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:white\" data-uk-icon=\"icon: lock\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"Password\" type=\"password\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</button>

                        </div>
                    </fieldset>

                </form>


                <hr class=\"uk-divider-icon\">


                <div class=\"uk-margin\">
                    <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin\">
                        FACEBOOK <span uk-icon=\"icon: facebook; ratio: 1\"></span>
                    </button>

                    <button type=\"submit\" class=\"uk-button uk-button-danger uk-button-large uk-width-1-1\">
                        FACEBOOK <span uk-icon=\"icon: google; ratio: 1\"></span>
                    </button>
                </div>

                ";
        } else {
            // line 60
            echo "                <!-- Registration is disabled. -->
                ";
        }
        // line 62
        echo "

            </div>

            <div class=\"uk-background-cover\" style=\"background-image: url('https://picsum.photos/1300/500/?random');\" uk-height-viewport></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 62,  90 => 60,  55 => 28,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"registerUser\" class=\"uk-modal-full\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
        <div class=\"uk-grid-collapse uk-child-width-1-2@s uk-flex-middle\" uk-grid>

            <div class=\"uk-padding\">



                {% if canRegister %}




                <form data-request=\"onRegister\">

                    <fieldset class=\"uk-fieldset\">
                        <legend class=\"uk-legend\">Register new user</legend>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"name\"  placeholder=\"Enter your name\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:white\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"email\" required placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:white\" data-uk-icon=\"icon: lock\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"Password\" type=\"password\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</button>

                        </div>
                    </fieldset>

                </form>


                <hr class=\"uk-divider-icon\">


                <div class=\"uk-margin\">
                    <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin\">
                        FACEBOOK <span uk-icon=\"icon: facebook; ratio: 1\"></span>
                    </button>

                    <button type=\"submit\" class=\"uk-button uk-button-danger uk-button-large uk-width-1-1\">
                        FACEBOOK <span uk-icon=\"icon: google; ratio: 1\"></span>
                    </button>
                </div>

                {% else %}
                <!-- Registration is disabled. -->
                {% endif %}


            </div>

            <div class=\"uk-background-cover\" style=\"background-image: url('https://picsum.photos/1300/500/?random');\" uk-height-viewport></div>
        </div>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/register.htm", "");
    }
}
