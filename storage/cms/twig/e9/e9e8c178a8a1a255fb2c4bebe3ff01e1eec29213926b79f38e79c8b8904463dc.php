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
        echo "<footer class=footer>
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

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Support </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"";
        // line 21
        echo url("faq");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>FAQ</a></li>
                        <li><a href=\"https://github.com/\"><i class=uk-margin-small-right uk-icon=\"icon: github;\"></i> Open source </a></li>
                        <li><a href=\"";
        // line 23
        echo url("updates");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Updates</a></li>
                    </ul>
                </div>



                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Platform </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"";
        // line 32
        echo url("groups");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Communities</a></li>
                        <li><a href=\"";
        // line 33
        echo url("members");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"";
        // line 34
        echo url("feeds");
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
            <p>Copyright © 2018 LzoSocial. All rights reserved.</p>
            <p>Terms & Sitemap</p>
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
        return array (  70 => 34,  66 => 33,  62 => 32,  50 => 23,  45 => 21,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=footer>
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

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Support </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"{{ url('faq') }}\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>FAQ</a></li>
                        <li><a href=\"https://github.com/\"><i class=uk-margin-small-right uk-icon=\"icon: github;\"></i> Open source </a></li>
                        <li><a href=\"{{ url('updates') }}\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Updates</a></li>
                    </ul>
                </div>



                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> Platform </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"{{ url('groups') }}\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Communities</a></li>
                        <li><a href=\"{{ url('members') }}\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"{{ url('feeds') }}\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Stories</a></li>
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
            <p>Copyright © 2018 LzoSocial. All rights reserved.</p>
            <p>Terms & Sitemap</p>
        </div>
    </div>
</footer>", "/shared/httpd/socialisy/htdocs/themes/network/partials/site/_footer.htm", "");
    }
}
