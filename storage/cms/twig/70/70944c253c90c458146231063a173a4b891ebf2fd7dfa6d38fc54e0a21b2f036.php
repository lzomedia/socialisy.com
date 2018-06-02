<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/site/_header.htm */
class __TwigTemplate_623d0936138feda1ceb7b2f91466a7783b0de82aaa3b3018ca9099caae4a232e extends Twig_Template
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
        echo "<header>
    <div class=\"uk-position-top\">
        <div class=\"uk-overlay uk-position-top\">
            <nav class=\"uk-navbar-container uk-margin\" style=\"z-index:980\" uk-sticky=\"bottom: #offset\" uk-navbar>
                <div class=\"uk-navbar-left\"><a class=\"uk-navbar-item uk-logo\" href=\"/\">Social Twizy</a>
                    <ul class=\"uk-navbar-nav uk-visible@m\">
                        <li>
                            <a href=\"";
        // line 8
        echo url("communities");
        echo "\" title=\"recent groups\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Communities
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 14
        echo url("stories");
        echo "\" title=\"recent posts\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                                Stories
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 20
        echo url("members");
        echo "\" title=\"recent members\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Members
                            </a>
                        </li>
                    </ul>

                </div>



                <div class=\"uk-navbar-right\">
                    <ul class=\"uk-navbar-nav\">


                        <li>

                            ";
        // line 37
        if ( !($context["user"] ?? null)) {
            // line 38
            echo "                                <a href=\"";
            echo url("account");
            echo "\" data-uk-icon=\"icon:user\"></a>
                            ";
        } else {
            // line 40
            echo "
                            <a href=\"#\" data-uk-icon=\"icon:user\"></a>

                            <div class=\"uk-navbar-dropdown uk-navbar-dropdown-bottom-left\">
                                <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                    <li class=\"uk-nav-header uk-text-small uk-text-primary\">Your Account</li>
                                    <li><a href=\"";
            // line 46
            echo url("account");
            echo "\"><span data-uk-icon=\"icon: pencil\"></span> Edit</a></li>
                                    <li class=\"uk-nav-divider\"></li>
                                    <li><a href=\"";
            // line 48
            echo url("friends");
            echo "\"><span data-uk-icon=\"icon: user\"></span> Your Friends</a></li>
                                    <li><a href=\"";
            // line 49
            echo url("messages");
            echo "\"><span data-uk-icon=\"icon: mail\"></span> Messages</a></li>
                                    <li class=\"uk-nav-divider\"></li>
                                    <li>
                                        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                                            <span data-uk-icon=\"icon: sign-out\"></span>
                                            Logout
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            ";
        }
        // line 62
        echo "                        </li>

                    </ul>


                    <!-- search modal !-->
                    ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/search_modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "                    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_side_menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "

                    ";
        // line 72
        if (($context["user"] ?? null)) {
            // line 73
            echo "
                    <div class=\"uk-inline uk-visible@l\">
                        <span uk-toggle=\"target: #offcanvas-flip\" class=\"uk-margin-small-right uk-icon\" uk-icon=\"icon: mail\">
                            <small class=\"uk-text-danger notification-circle\"> 23 </small>
                        </span>
                    </div>

                    ";
        }
        // line 81
        echo "
                    <!-- to enable mobile only add uk-hidden@s !-->
                    <a class=\"uk-navbar-toggle uk-hidden@s uk-hidden@m \" uk-toggle=\"target: #offcanvas-usage\">
                        <span uk-navbar-toggle-icon></span>
                        <span class=\"uk-margin-small-left\">Menu</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 81,  134 => 73,  132 => 72,  128 => 70,  123 => 69,  119 => 68,  111 => 62,  95 => 49,  91 => 48,  86 => 46,  78 => 40,  72 => 38,  70 => 37,  50 => 20,  41 => 14,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"uk-position-top\">
        <div class=\"uk-overlay uk-position-top\">
            <nav class=\"uk-navbar-container uk-margin\" style=\"z-index:980\" uk-sticky=\"bottom: #offset\" uk-navbar>
                <div class=\"uk-navbar-left\"><a class=\"uk-navbar-item uk-logo\" href=\"/\">Social Twizy</a>
                    <ul class=\"uk-navbar-nav uk-visible@m\">
                        <li>
                            <a href=\"{{ url('communities') }}\" title=\"recent groups\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Communities
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ url('stories') }}\" title=\"recent posts\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                                Stories
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ url('members') }}\" title=\"recent members\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Members
                            </a>
                        </li>
                    </ul>

                </div>



                <div class=\"uk-navbar-right\">
                    <ul class=\"uk-navbar-nav\">


                        <li>

                            {% if not user %}
                                <a href=\"{{ url('account') }}\" data-uk-icon=\"icon:user\"></a>
                            {% else %}

                            <a href=\"#\" data-uk-icon=\"icon:user\"></a>

                            <div class=\"uk-navbar-dropdown uk-navbar-dropdown-bottom-left\">
                                <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                    <li class=\"uk-nav-header uk-text-small uk-text-primary\">Your Account</li>
                                    <li><a href=\"{{ url('account') }}\"><span data-uk-icon=\"icon: pencil\"></span> Edit</a></li>
                                    <li class=\"uk-nav-divider\"></li>
                                    <li><a href=\"{{ url('friends') }}\"><span data-uk-icon=\"icon: user\"></span> Your Friends</a></li>
                                    <li><a href=\"{{ url('messages') }}\"><span data-uk-icon=\"icon: mail\"></span> Messages</a></li>
                                    <li class=\"uk-nav-divider\"></li>
                                    <li>
                                        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                                            <span data-uk-icon=\"icon: sign-out\"></span>
                                            Logout
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            {% endif %}
                        </li>

                    </ul>


                    <!-- search modal !-->
                    {% partial 'modals/search_modal' %}
                    {% partial 'site/_side_menu' %}


                    {% if user %}

                    <div class=\"uk-inline uk-visible@l\">
                        <span uk-toggle=\"target: #offcanvas-flip\" class=\"uk-margin-small-right uk-icon\" uk-icon=\"icon: mail\">
                            <small class=\"uk-text-danger notification-circle\"> 23 </small>
                        </span>
                    </div>

                    {% endif %}

                    <!-- to enable mobile only add uk-hidden@s !-->
                    <a class=\"uk-navbar-toggle uk-hidden@s uk-hidden@m \" uk-toggle=\"target: #offcanvas-usage\">
                        <span uk-navbar-toggle-icon></span>
                        <span class=\"uk-margin-small-left\">Menu</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>", "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_header.htm", "");
    }
}
