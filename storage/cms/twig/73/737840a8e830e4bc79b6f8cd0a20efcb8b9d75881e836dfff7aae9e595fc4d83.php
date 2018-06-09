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
        echo "<div id=\"register\" class=\"uk-modal-container\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
            <div class=\"uk-padding\">



                ";
        // line 8
        if (($context["canRegister"] ?? null)) {
            // line 9
            echo "



                <form data-request=\"onRegister\">

                    <fieldset class=\"uk-fieldset\">
                        <legend class=\"uk-legend\">Register new user</legend>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"name\"  placeholder=\"@username\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\" data-uk-icon=\"icon: mail\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"email\" required placeholder=\"@ ";
            // line 26
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:black\" data-uk-icon=\"icon: lock\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"password\" type=\"password\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</button>

                        </div>
                    </fieldset>

                </form>


                <hr class=\"uk-divider-icon\">


                <div class=\"uk-margin\">

                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["link"]) {
                // line 50
                echo "
                    <a class=\"uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">
                        <span uk-icon=\"icon: facebook; ratio: 2\"></span>
                        ";
                // line 53
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "
                    </a>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </div>

                ";
        } else {
            // line 60
            echo "                <!-- Registration is disabled. -->
                ";
        }
        // line 62
        echo "

            </div>
           </div>
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
        return array (  110 => 62,  106 => 60,  101 => 57,  91 => 53,  86 => 51,  83 => 50,  79 => 49,  53 => 26,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"register\" class=\"uk-modal-container\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
            <div class=\"uk-padding\">



                {% if canRegister %}




                <form data-request=\"onRegister\">

                    <fieldset class=\"uk-fieldset\">
                        <legend class=\"uk-legend\">Register new user</legend>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\" data-uk-icon=\"icon: user\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"name\"  placeholder=\"@username\" type=\"text\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\" style=\"color:black\" data-uk-icon=\"icon: mail\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"email\" required placeholder=\"@ {{ loginAttributeLabel|lower }}\" type=\"email\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <div class=\"uk-inline uk-width-1-1\">
                                <span class=\"uk-form-icon uk-form-icon-flip\"  style=\"color:black\" data-uk-icon=\"icon: lock\"></span>
                                <input class=\"uk-input uk-form-large\" name=\"password\" required placeholder=\"password\" type=\"password\">
                            </div>
                        </div>
                        <div class=\"uk-margin\">
                            <button type=\"submit\" class=\"uk-button uk-button-primary uk-button-secondary uk-button-large uk-width-1-1\">REGISTER</button>

                        </div>
                    </fieldset>

                </form>


                <hr class=\"uk-divider-icon\">


                <div class=\"uk-margin\">

                    {% for name, link in social_login_links %}

                    <a class=\"uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin\" href=\"{{ link }}\">
                        <span uk-icon=\"icon: facebook; ratio: 2\"></span>
                        {{ name }}
                    </a>

                    {% endfor %}
                </div>

                {% else %}
                <!-- Registration is disabled. -->
                {% endif %}


            </div>
           </div>
        </div>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/register.htm", "");
    }
}
