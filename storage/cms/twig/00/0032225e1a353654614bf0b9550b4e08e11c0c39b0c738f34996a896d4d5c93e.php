<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/account/update.htm */
class __TwigTemplate_c0add491e73148088f212e7cbfe86fdf084d8dacb295b4815f653d1818f6c651 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => ($context["user"] ?? null))));
        echo "


<fieldset class=\"uk-fieldset\">

    <legend class=\"uk-legend uk-text-center\">
        <span uk-icon=\"icon: user;ratio:3\" style=\"color: #000;\"></span>
    </legend>

    <div class=\"uk-margin\">
        <input name=\"name\" type=\"text\" class=\"uk-input\" id=\"accountName\" value=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
    </div>

   <div class=\"uk-margin\">
       <input name=\"email\" type=\"email\" class=\"uk-input\" id=\"accountEmail\" value=\"";
        // line 15
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
   </div>

    <div class=\"uk-margin\">
        <input name=\"password\" type=\"password\" class=\"uk-input\" id=\"accountPassword\" placeholder=\"Password\">
    </div>

    <div class=\"uk-margin\">
        <input name=\"password_confirmation\" type=\"password\" class=\"uk-input\" id=\"accountPasswordConfirm\" placeholder=\"Password confirmation\">
    </div>


    <div class=\"uk-margin\">
        <button class=\"uk-button uk-button-secondary\" type=\"submit\">Save</button>
    </div>

</fieldset>



";
        // line 35
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 35,  43 => 15,  36 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate', { model: user }) }}


<fieldset class=\"uk-fieldset\">

    <legend class=\"uk-legend uk-text-center\">
        <span uk-icon=\"icon: user;ratio:3\" style=\"color: #000;\"></span>
    </legend>

    <div class=\"uk-margin\">
        <input name=\"name\" type=\"text\" class=\"uk-input\" id=\"accountName\" value=\"{{ form_value('name') }}\">
    </div>

   <div class=\"uk-margin\">
       <input name=\"email\" type=\"email\" class=\"uk-input\" id=\"accountEmail\" value=\"{{ form_value('email') }}\">
   </div>

    <div class=\"uk-margin\">
        <input name=\"password\" type=\"password\" class=\"uk-input\" id=\"accountPassword\" placeholder=\"Password\">
    </div>

    <div class=\"uk-margin\">
        <input name=\"password_confirmation\" type=\"password\" class=\"uk-input\" id=\"accountPasswordConfirm\" placeholder=\"Password confirmation\">
    </div>


    <div class=\"uk-margin\">
        <button class=\"uk-button uk-button-secondary\" type=\"submit\">Save</button>
    </div>

</fieldset>



{{ form_close() }}", "/shared/httpd/socialisy/htdocs/themes/network/partials/account/update.htm", "");
    }
}
