<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/site/_side_menu.htm */
class __TwigTemplate_00e5dfd4c3043fc05ed9b5ae177c63e560caa9783d98c12550bdc61411fcb57e extends Twig_Template
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
        echo url("groups");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                    Groups
                </a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo url("feeds");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                Feeds
                </a>
            </li>
            <li>
                <a href=\"";
        // line 18
        echo url("members");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: star\"></span>
                Members
                </a>
            </li>
            <li class=\"uk-nav-divider\"></li>
            <li><a href=\"";
        // line 23
        echo url("account");
        echo "\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Account
            </a></li>
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
        return array (  56 => 23,  48 => 18,  40 => 13,  32 => 8,  23 => 1,);
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
                <a href=\"{{ url('groups') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                    Groups
                </a>
            </li>
            <li>
                <a href=\"{{ url('feeds') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                Feeds
                </a>
            </li>
            <li>
                <a href=\"{{ url('members') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: star\"></span>
                Members
                </a>
            </li>
            <li class=\"uk-nav-divider\"></li>
            <li><a href=\"{{ url('account') }}\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Account
            </a></li>
        </ul>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_side_menu.htm", "");
    }
}
