<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/account.htm */
class __TwigTemplate_64493afb41f3fdc4ac77f82f1beff8314522e3d0cc5e0241d960f1f5f1a3db87 extends Twig_Template
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
        echo "<body class=\"uk-height-1-1\">
    <div class=\"uk-flex uk-flex-center uk-flex-middle uk-background-primary uk-height-viewport uk-light\">





        <div class=\"uk-width-large uk-padding-small\">


            ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "


        </div>



    </div>


</body>";
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
        return array (  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body class=\"uk-height-1-1\">
    <div class=\"uk-flex uk-flex-center uk-flex-middle uk-background-primary uk-height-viewport uk-light\">





        <div class=\"uk-width-large uk-padding-small\">


            {% component 'account' %}



        </div>



    </div>


</body>", "/shared/httpd/socialisy/htdocs/themes/network/pages/account.htm", "");
    }
}
