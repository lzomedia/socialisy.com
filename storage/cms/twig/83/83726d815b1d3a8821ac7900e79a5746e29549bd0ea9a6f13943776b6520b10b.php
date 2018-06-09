<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/members.htm */
class __TwigTemplate_778a5712ab2528ccda556a6c691705b8eb8c5ee26dc75469d4d6726a05afef3d extends Twig_Template
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
        echo "<section class=\"uk-section uk-section-small uk-padding-remove\">

        <div class=\"uk-height-large uk-cover-container uk-border-rounded\">
            <div id=\"particles-js\" data-uk-cover=\"\" class=\"uk-cover\" ></div>
            <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
                <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">

                    <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                        <span><i uk-icon=icon:users></i> Members <i uk-icon=icon:users></i></span>
                    </h1>
                    <p>Here is a list of our recent stories join an story start chatting with friends.
                    </p>

                    <a href=\"";
        // line 14
        echo url("account");
        echo "\"  class=\"uk-button uk-button-default uk-margin-top\">
                       Join
                    </a>
                </div>
            </div>

        </div>
</section>





<section class=\"uk-section uk-section-default uk-box-shadow-small uk-section-xsmall\">
    <div class=\"uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex uk-flex-middle\" data-uk-grid>



            @Section to come.


            <!--<div class=\"uk-width-auto\">-->
                <!--<img src=\"https://unsplash.it/65/65/?random\" alt=\"\" class=\"uk-border-circle\">-->
            <!--</div>-->
            <!--<div class=\"uk-width-expand\">-->
                <!--<h4 class=\"uk-margin-remove\">-->
                    <!--Username ";
        // line 41
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "-->
                <!--</h4>-->
                <!--<i class=\"uk-text-muted uk-text-small\">Created on 12th May 2017</i>-->
            <!--</div>-->
            <!--<div class=\"uk-width-1-2 uk-width-1-5@m uk-visible@m\">-->
                <!--<span class=\"uk-text-success\" data-uk-icon=\"icon:user; ratio: 0.8\"></span><span class=\"uk-text-small uk-text-muted  uk-text-bottom\"> Last Login:</span><br>-->
                <!--<span class=\"uk-text-large uk-text-success\">18th Feb 2017</span>-->
            <!--</div>-->
            <!--<div class=\"uk-width-auto@m uk-visible@m\">-->
                <!--<ul class=\"uk-iconnav\">-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: close\"></a></li>-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: comment\"></a></li>-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: check\"></a></li>-->
                <!--</ul>-->
            <!--</div>-->



        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/pages/members.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 41,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-small uk-padding-remove\">

        <div class=\"uk-height-large uk-cover-container uk-border-rounded\">
            <div id=\"particles-js\" data-uk-cover=\"\" class=\"uk-cover\" ></div>
            <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
                <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">

                    <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                        <span><i uk-icon=icon:users></i> Members <i uk-icon=icon:users></i></span>
                    </h1>
                    <p>Here is a list of our recent stories join an story start chatting with friends.
                    </p>

                    <a href=\"{{ url('account') }}\"  class=\"uk-button uk-button-default uk-margin-top\">
                       Join
                    </a>
                </div>
            </div>

        </div>
</section>





<section class=\"uk-section uk-section-default uk-box-shadow-small uk-section-xsmall\">
    <div class=\"uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex uk-flex-middle\" data-uk-grid>



            @Section to come.


            <!--<div class=\"uk-width-auto\">-->
                <!--<img src=\"https://unsplash.it/65/65/?random\" alt=\"\" class=\"uk-border-circle\">-->
            <!--</div>-->
            <!--<div class=\"uk-width-expand\">-->
                <!--<h4 class=\"uk-margin-remove\">-->
                    <!--Username {{ i }}-->
                <!--</h4>-->
                <!--<i class=\"uk-text-muted uk-text-small\">Created on 12th May 2017</i>-->
            <!--</div>-->
            <!--<div class=\"uk-width-1-2 uk-width-1-5@m uk-visible@m\">-->
                <!--<span class=\"uk-text-success\" data-uk-icon=\"icon:user; ratio: 0.8\"></span><span class=\"uk-text-small uk-text-muted  uk-text-bottom\"> Last Login:</span><br>-->
                <!--<span class=\"uk-text-large uk-text-success\">18th Feb 2017</span>-->
            <!--</div>-->
            <!--<div class=\"uk-width-auto@m uk-visible@m\">-->
                <!--<ul class=\"uk-iconnav\">-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: close\"></a></li>-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: comment\"></a></li>-->
                    <!--<li><a href=\"#\" uk-icon=\"icon: check\"></a></li>-->
                <!--</ul>-->
            <!--</div>-->



        </div>
    </div>
</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/members.htm", "");
    }
}
