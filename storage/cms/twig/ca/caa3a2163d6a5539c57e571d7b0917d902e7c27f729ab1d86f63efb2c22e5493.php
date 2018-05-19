<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/modals/search_modal.htm */
class __TwigTemplate_8c23d371420cf94c063494f7e96972e156a6795ae67864bf11efebb146d7253a extends Twig_Template
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
