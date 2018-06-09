<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/stories.htm */
class __TwigTemplate_4f42c8ce6adae87832b03c150dcb5177574821ce3c6d3f9f3266c8320911cfdd extends Twig_Template
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
                        <span><i uk-icon=icon:star></i> Recent Stories <i uk-icon=icon:star></i></span>
                    </h1>
                    <p>Here is a list of our recent stories join an story start chatting with friends.
                    </p>
                    <a href=\"#\" uk-toggle=\"target: #createGroup\" class=\"uk-button uk-button-default uk-margin-top\">
                        Create your own story
                    </a>

                    ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/create-story"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "                </div>
            </div>

        </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <!-- Start the listing of the groups !-->

            @Section to come.

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/pages/stories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-small uk-padding-remove\">

        <div class=\"uk-height-large uk-cover-container uk-border-rounded\">
            <div id=\"particles-js\" data-uk-cover=\"\" class=\"uk-cover\" ></div>
            <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
                <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">

                    <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                        <span><i uk-icon=icon:star></i> Recent Stories <i uk-icon=icon:star></i></span>
                    </h1>
                    <p>Here is a list of our recent stories join an story start chatting with friends.
                    </p>
                    <a href=\"#\" uk-toggle=\"target: #createGroup\" class=\"uk-button uk-button-default uk-margin-top\">
                        Create your own story
                    </a>

                    {% partial 'modals/create-story' %}
                </div>
            </div>

        </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <!-- Start the listing of the groups !-->

            @Section to come.

        </div>
    </div>
</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/stories.htm", "");
    }
}
