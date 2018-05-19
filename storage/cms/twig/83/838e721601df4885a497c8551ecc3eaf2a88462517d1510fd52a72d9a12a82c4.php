<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/site/_footer.htm */
class __TwigTemplate_350108c3e084703ac89d17c6c42a744e16778cdace6196257554baba7412e5f6 extends Twig_Template
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
                <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> ABOUT </h6>
                <p class=\"uk-margin-remove\">
                    Socialisy started as a personal project and it evolved fast in an <b>open source social network</b> project backed up by big names in the <i>social network</i> community.
                </p>
                <p>
                    With over 500k members we are the <b>best community</b> to join when and chat about the things that you prefer so do not hesitate and open your own
                    account to see for yourself how we can improve the way to communicate with friends and fammily.
                </p>

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> SUBSCRIBE </h6>
                    <p> Subscribe to our newsletter and get notification when new updates or communities are available. </p>
                    <div class=uk-margin>
                        <div class=uk-inline>
                            <span class=\"uk-form-icon uk-form-icon-flip\" uk-icon=\"icon: mail\"></span>
                            <input placeholder=Subscribe class=uk-input type=text>
                        </div>
                    </div>
                </div>

                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> PLATFORM </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"";
        // line 32
        echo url("groups");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Groups</a></li>
                        <li><a href=\"";
        // line 33
        echo url("members");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"";
        // line 34
        echo url("feeds");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Feeds</a></li>
                        <li><a href=\"";
        // line 35
        echo url("photos");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: image;\"></i>Photos</a></li>
                        <li><a href=\"";
        // line 36
        echo url("videos");
        echo "\"><i class=uk-margin-small-right uk-icon=\"icon: play-circle;\"></i>Videos</a></li>
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
        return array (  72 => 36,  68 => 35,  64 => 34,  60 => 33,  56 => 32,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=footer>
    <div class=uk-container>
        <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l uk-column-divider\" uk-grid>
            <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> ABOUT </h6>
                <p class=\"uk-margin-remove\">
                    Socialisy started as a personal project and it evolved fast in an <b>open source social network</b> project backed up by big names in the <i>social network</i> community.
                </p>
                <p>
                    With over 500k members we are the <b>best community</b> to join when and chat about the things that you prefer so do not hesitate and open your own
                    account to see for yourself how we can improve the way to communicate with friends and fammily.
                </p>

            </div>
            <div class=\"uk-child-width-1-2@s1 uk-child-width-1-2@l\" uk-grid>


                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large\"> SUBSCRIBE </h6>
                    <p> Subscribe to our newsletter and get notification when new updates or communities are available. </p>
                    <div class=uk-margin>
                        <div class=uk-inline>
                            <span class=\"uk-form-icon uk-form-icon-flip\" uk-icon=\"icon: mail\"></span>
                            <input placeholder=Subscribe class=uk-input type=text>
                        </div>
                    </div>
                </div>

                <div class=\"uk-light uk-background-blend-darken uk-padding uk-text-left\">
                    <h6 class=\"uk-text-capitalize uk-text-bold uk-text-large uk-margin-remove\"> PLATFORM </h6>
                    <ul class=\"uk-list uk-link-text uk-left-list\">
                        <li><a href=\"{{ url('groups') }}\"><i class=uk-margin-small-right uk-icon=\"icon: question;\"></i>Groups</a></li>
                        <li><a href=\"{{ url('members') }}\"><i class=uk-margin-small-right uk-icon=\"icon: users;\"></i> Members</a></li>
                        <li><a href=\"{{ url('feeds') }}\"><i class=uk-margin-small-right uk-icon=\"icon: rss;\"></i> Feeds</a></li>
                        <li><a href=\"{{ url('photos') }}\"><i class=uk-margin-small-right uk-icon=\"icon: image;\"></i>Photos</a></li>
                        <li><a href=\"{{ url('videos') }}\"><i class=uk-margin-small-right uk-icon=\"icon: play-circle;\"></i>Videos</a></li>
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
