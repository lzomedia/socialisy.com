<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/modals/search_modal.htm */
class __TwigTemplate_1c8b343cf3650be0d90d9568a5a2392822fb36624118996a3f552746f3d2722b extends Twig_Template
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
        echo "<a class=\"uk-navbar-toggle\" href=\"#modal-full\" uk-search-icon uk-toggle></a>

<div id=\"modal-full\" class=\"uk-modal-full uk-modal\" uk-modal>
    <div class=\"uk-modal-dialog uk-flex uk-flex-center uk-flex-middle\" uk-height-viewport>
        <button class=\"uk-modal-close-full\" type=\"button\" uk-close></button>

        <form class=\"uk-search uk-search-large\">
            <input class=\"uk-search-input uk-text-center\" type=\"search\" placeholder=\"Search for groups...\" autofocus>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/search_modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"uk-navbar-toggle\" href=\"#modal-full\" uk-search-icon uk-toggle></a>

<div id=\"modal-full\" class=\"uk-modal-full uk-modal\" uk-modal>
    <div class=\"uk-modal-dialog uk-flex uk-flex-center uk-flex-middle\" uk-height-viewport>
        <button class=\"uk-modal-close-full\" type=\"button\" uk-close></button>

        <form class=\"uk-search uk-search-large\">
            <input class=\"uk-search-input uk-text-center\" type=\"search\" placeholder=\"Search for groups...\" autofocus>
        </form>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/search_modal.htm", "");
    }
}
