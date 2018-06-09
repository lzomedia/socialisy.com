<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/account/deactivate_link.htm */
class __TwigTemplate_b0746b0e1649c98b17d80c40667540b0dd4de2ee1e3eb12dd4da0963d23e4bfa extends Twig_Template
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
        echo "<a
        href=\"javascript:;\"
        onclick=\"\$('#accountDeactivateForm').toggle()\">
    Deactivate account
</a>

<div id=\"accountDeactivateForm\" style=\"display: none\">
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onDeactivate"));
        echo "
    <hr />
    <h3>Deactivate your account?</h3>
    <p>
        Your account will be disabled and your details removed from the site.
        You can reactivate your account any time by signing back in.
    </p>
    <div class=\"uk-margin\">
        <label for=\"accountDeletePassword\" class=\"\">To continue, please enter your password:</label>
        <input name=\"password\" type=\"password\" class=\"uk-input\" id=\"accountDeletePassword\" />
    </div>
    <button type=\"submit\" class=\"uk-button uk-button-danger\">
        Confirm Deactivate Account
    </button>

    <div class=\"uk-margin\">

        <a
                href=\"javascript:;\"
                onclick=\"\$('#accountDeactivateForm').toggle()\">
            I changed my mind
        </a>

    </div>
    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/account/deactivate_link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 32,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a
        href=\"javascript:;\"
        onclick=\"\$('#accountDeactivateForm').toggle()\">
    Deactivate account
</a>

<div id=\"accountDeactivateForm\" style=\"display: none\">
    {{ form_ajax('onDeactivate') }}
    <hr />
    <h3>Deactivate your account?</h3>
    <p>
        Your account will be disabled and your details removed from the site.
        You can reactivate your account any time by signing back in.
    </p>
    <div class=\"uk-margin\">
        <label for=\"accountDeletePassword\" class=\"\">To continue, please enter your password:</label>
        <input name=\"password\" type=\"password\" class=\"uk-input\" id=\"accountDeletePassword\" />
    </div>
    <button type=\"submit\" class=\"uk-button uk-button-danger\">
        Confirm Deactivate Account
    </button>

    <div class=\"uk-margin\">

        <a
                href=\"javascript:;\"
                onclick=\"\$('#accountDeactivateForm').toggle()\">
            I changed my mind
        </a>

    </div>
    {{ form_close() }}
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/account/deactivate_link.htm", "");
    }
}
