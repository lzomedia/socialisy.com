<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/site/_side_menu.htm */
class __TwigTemplate_c69c3e31f920ed8d3f8862f6733e8d954b8393b3150426b918641ba1bbde01a1 extends Twig_Template
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
        echo "<div id=\"offcanvas-usage\" uk-offcanvas=\"mode: slide; overlay: true;flip: true\">
    <div class=\"uk-offcanvas-bar\">
        <button class=\"uk-offcanvas-close\" type=button uk-close></button>
        <ul class=\"uk-nav uk-nav-default\">
            <li class=\"uk-nav-header\">Social Twizy</li>
            <li class=\"uk-nav-divider\"></li>
            <li>
                <a href=\"";
        // line 8
        echo url("communities");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                    Communities
                </a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo url("stories");
        echo "\">
                 <span class=\"uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                 Trending Stories
                </a>
            </li>
            <li>
                <a href=\"";
        // line 19
        echo url("influencers");
        echo "\">
                    <span class=\"uk-margin-small-right\" uk-icon=\"icon: star\"></span>
                    Influencers
                </a>
            </li>
            <li class=\"uk-nav-divider\"></li>
            <li>
                <a href=\"";
        // line 26
        echo url("account");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>
                    Account
                </a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_side_menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 26,  49 => 19,  40 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"offcanvas-usage\" uk-offcanvas=\"mode: slide; overlay: true;flip: true\">
    <div class=\"uk-offcanvas-bar\">
        <button class=\"uk-offcanvas-close\" type=button uk-close></button>
        <ul class=\"uk-nav uk-nav-default\">
            <li class=\"uk-nav-header\">Social Twizy</li>
            <li class=\"uk-nav-divider\"></li>
            <li>
                <a href=\"{{ url('communities') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                    Communities
                </a>
            </li>
            <li>
                <a href=\"{{ url('stories') }}\">
                 <span class=\"uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                 Trending Stories
                </a>
            </li>
            <li>
                <a href=\"{{ url('influencers') }}\">
                    <span class=\"uk-margin-small-right\" uk-icon=\"icon: star\"></span>
                    Influencers
                </a>
            </li>
            <li class=\"uk-nav-divider\"></li>
            <li>
                <a href=\"{{ url('account') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>
                    Account
                </a>
            </li>
        </ul>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_side_menu.htm", "");
    }
}
