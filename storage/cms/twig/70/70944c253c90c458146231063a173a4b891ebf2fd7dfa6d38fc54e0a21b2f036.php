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
                <div class=\"uk-navbar-left\"><a class=\"uk-navbar-item uk-logo\" href=\"/\">
                   <a href=\"";
        // line 6
        echo url("/");
        echo "\" uk-icon=\"icon: happy;ratio:2\">
                       Social Trixy
                   </a>
                </a>
                    <ul class=\"uk-navbar-nav uk-visible@m\">
                        <li>
                            <a href=\"";
        // line 12
        echo url("communities");
        echo "\" title=\"recent groups\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Communities
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 18
        echo url("stories");
        echo "\" title=\"recent posts\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: rss\"></span>
                                Stories
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 24
        echo url("members");
        echo "\" title=\"recent members\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
                                Influencers
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 30
        echo url("rentals");
        echo "\" title=\"recent members\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: cart\"></span>
                                Rentals
                            </a>
                        </li>
                    </ul>

                </div>



                <div class=\"uk-navbar-right\">
                    <ul class=\"uk-navbar-nav\">


                        <li>

                            ";
        // line 47
        if ( !($context["user"] ?? null)) {
            // line 48
            echo "                                <a href=\"";
            echo url("account");
            echo "\" data-uk-icon=\"icon:user\"></a>
                            ";
        } else {
            // line 50
            echo "
                            <a href=\"#\" data-uk-icon=\"icon:user\"></a>

                            <div class=\"uk-navbar-dropdown uk-navbar-dropdown-bottom-left\">
                                <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                    <li class=\"uk-nav-header uk-text-small uk-text-primary\">Your Account</li>
                                    <li><a href=\"";
            // line 56
            echo url("account");
            echo "\"><span data-uk-icon=\"icon: pencil\"></span> Edit</a></li>
                                    <li class=\"uk-nav-divider\"></li>
                                    <li><a href=\"";
            // line 58
            echo url("friends");
            echo "\"><span data-uk-icon=\"icon: user\"></span> Your Friends</a></li>
                                    <li><a href=\"";
            // line 59
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
        // line 72
        echo "                        </li>

                    </ul>


                    <!-- search modal !-->
                    ";
        // line 78
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/search_modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 79
        echo "
                    ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_side_menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "
                    ";
        // line 82
        if (($context["user"] ?? null)) {
            // line 83
            echo "
                        <!-- notification modal !-->
                        ";
            // line 85
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/_notifications"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 86
            echo "

                    ";
        }
        // line 89
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
        return array (  164 => 89,  159 => 86,  155 => 85,  151 => 83,  149 => 82,  146 => 81,  142 => 80,  139 => 79,  135 => 78,  127 => 72,  111 => 59,  107 => 58,  102 => 56,  94 => 50,  88 => 48,  86 => 47,  66 => 30,  57 => 24,  48 => 18,  39 => 12,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"uk-position-top\">
        <div class=\"uk-overlay uk-position-top\">
            <nav class=\"uk-navbar-container uk-margin\" style=\"z-index:980\" uk-sticky=\"bottom: #offset\" uk-navbar>
                <div class=\"uk-navbar-left\"><a class=\"uk-navbar-item uk-logo\" href=\"/\">
                   <a href=\"{{ url('/') }}\" uk-icon=\"icon: happy;ratio:2\">
                       Social Trixy
                   </a>
                </a>
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
                                Influencers
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ url('rentals') }}\" title=\"recent members\">
                                <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: cart\"></span>
                                Rentals
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

                        <!-- notification modal !-->
                        {% partial 'modals/_notifications' %}


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
