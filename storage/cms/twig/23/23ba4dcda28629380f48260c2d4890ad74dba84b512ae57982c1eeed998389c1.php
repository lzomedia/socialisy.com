<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/account.htm */
class __TwigTemplate_3807de567281e3b869da7e216d61997bc73f9fb8880f92b8a79f7317529475c6 extends Twig_Template
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
        echo "<section class=\"uk-section uk-section-large\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-large\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        {% component 'account' %}
    </div>
</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/account.htm", "");
    }
}
