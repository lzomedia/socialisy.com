<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/site/_footer.htm */
class __TwigTemplate_824f1acb74a0a23461a135805534829f3dd966062934480cc841d2c7c30e8a56 extends Twig_Template
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
        echo "<footer class=\"footer\" id=\"footer\">
    <div class=uk-container>
        <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l uk-column-divider\" uk-grid>
            <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> About </h6>
                <p class=\"uk-margin-remove\">
                    Social Trixy started as a personal project and it evolved fast in an <b>open source social network</b> project.
                </p>
                <p>
                    With over 500k members we are the <b>best community</b> to join and chat about the things you love so do not hesitate and open your own
                    account to see for yourself how we can improve the way we communicate with friends and family.
                </p>

                <p>
                    <a href=\"";
        // line 15
        echo url("sitemap.xml");
        echo "\" class=\"url\"><small>SITEMAP</small></a>
                </p>
                <p>

                    <a href=\"";
        // line 19
        echo url("terms");
        echo "\" class=\"url\"><small>TERMS</small></a>
                </p>

                <p>
                    <a href=\"";
        // line 23
        echo url("gdpr");
        echo "\" class=\"url\"><small>GDPR</small></a>
                </p>

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Support </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"";
        // line 33
        echo url("faq");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>FAQ</a></li>
                        <li><a href=\"https://github.com/lzomedia\"><i class=uk-margin-small-right uk-icon=\"icon: github;\"></i> Open source </a></li>
                        <li><a href=\"https://trello.com/b/cUuR54Df/socialisycom\" target=\"_blank\">
                                <i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i>
                                Updates & Suggestions
                            </a>
                        </li>
                    </ul>
                </div>



                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Platform </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"";
        // line 48
        echo url("communities");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Communities</a></li>
                        <li><a href=\"";
        // line 49
        echo url("members");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"";
        // line 50
        echo url("stories");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Stories</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class=\"footer-copyright uk-child-width-1@s1 uk-child-width-1@l1 uk-text-center\">
            <div class=\"footer-social-icons uk-align-center\">
                <a href='#' uk-icon=\"icon: facebook\"></a>
                <a href='#' uk-icon=\"icon: google\"></a>
                <a href='#' uk-icon=\"icon: instagram\"></a>
                <a href='#' uk-icon=\"icon: pinterest\"></a>
                <a href='#' uk-icon=\"icon: foursquare\"></a>
                <a href='#' uk-icon=\"icon: dribbble\"></a>
                <a href='#' uk-icon=\"icon: linkedin\"></a>
            </div>
            <p>Copyright © 2018 <a href=\"https://lzomedia.com\" title=\"freelance developer\">@Lzo Media</a> All rights reserved. Free for Commercial use (CC BY 2.0 license)</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 50,  88 => 49,  84 => 48,  66 => 33,  53 => 23,  46 => 19,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer\" id=\"footer\">
    <div class=uk-container>
        <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l uk-column-divider\" uk-grid>
            <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> About </h6>
                <p class=\"uk-margin-remove\">
                    Social Trixy started as a personal project and it evolved fast in an <b>open source social network</b> project.
                </p>
                <p>
                    With over 500k members we are the <b>best community</b> to join and chat about the things you love so do not hesitate and open your own
                    account to see for yourself how we can improve the way we communicate with friends and family.
                </p>

                <p>
                    <a href=\"{{ url('sitemap.xml') }}\" class=\"url\"><small>SITEMAP</small></a>
                </p>
                <p>

                    <a href=\"{{ url('terms') }}\" class=\"url\"><small>TERMS</small></a>
                </p>

                <p>
                    <a href=\"{{ url('gdpr') }}\" class=\"url\"><small>GDPR</small></a>
                </p>

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Support </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"{{ url('faq') }}\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>FAQ</a></li>
                        <li><a href=\"https://github.com/lzomedia\"><i class=uk-margin-small-right uk-icon=\"icon: github;\"></i> Open source </a></li>
                        <li><a href=\"https://trello.com/b/cUuR54Df/socialisycom\" target=\"_blank\">
                                <i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i>
                                Updates & Suggestions
                            </a>
                        </li>
                    </ul>
                </div>



                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Platform </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"{{ url('communities') }}\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Communities</a></li>
                        <li><a href=\"{{ url('members') }}\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"{{ url('stories') }}\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Stories</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class=\"footer-copyright uk-child-width-1@s1 uk-child-width-1@l1 uk-text-center\">
            <div class=\"footer-social-icons uk-align-center\">
                <a href='#' uk-icon=\"icon: facebook\"></a>
                <a href='#' uk-icon=\"icon: google\"></a>
                <a href='#' uk-icon=\"icon: instagram\"></a>
                <a href='#' uk-icon=\"icon: pinterest\"></a>
                <a href='#' uk-icon=\"icon: foursquare\"></a>
                <a href='#' uk-icon=\"icon: dribbble\"></a>
                <a href='#' uk-icon=\"icon: linkedin\"></a>
            </div>
            <p>Copyright © 2018 <a href=\"https://lzomedia.com\" title=\"freelance developer\">@Lzo Media</a> All rights reserved. Free for Commercial use (CC BY 2.0 license)</p>
        </div>
    </div>
</footer>", "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_footer.htm", "");
    }
}
