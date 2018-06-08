<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/groups.htm */
class __TwigTemplate_af6695a9eea106bad3d3509db990ff9470fafb434fade2b4f04f5fd573755feb extends Twig_Template
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
        <img src=\"https://picsum.photos/1300/500/?random\" alt=\"Alt img\" data-uk-cover=\"\" class=\"uk-cover\" style=\"width: 1171px; height: 450px;\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
            <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">

                <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                    <span><i uk-icon=icon:star></i> Recent Communities <i uk-icon=icon:star></i></span>
                </h1>
                <p>Here is a list of our newest social communities don't hesitate to join our full of fun community and start chatting with your friends.
                </p>
                <a href=\"#\" uk-toggle=\"target: #createGroup\" class=\"uk-button uk-button-default uk-margin-top\">
                    Create
                </a>

                ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/create-community"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            </div>
        </div>

    </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=\"uk-container\">


            <div id=\"fixtest\"></div>



            <div id=\"top-groups\"></div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/pages/groups.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-small uk-padding-remove\">
    <div class=\"uk-height-large uk-cover-container uk-border-rounded\">
        <img src=\"https://picsum.photos/1300/500/?random\" alt=\"Alt img\" data-uk-cover=\"\" class=\"uk-cover\" style=\"width: 1171px; height: 450px;\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
            <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">

                <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                    <span><i uk-icon=icon:star></i> Recent Communities <i uk-icon=icon:star></i></span>
                </h1>
                <p>Here is a list of our newest social communities don't hesitate to join our full of fun community and start chatting with your friends.
                </p>
                <a href=\"#\" uk-toggle=\"target: #createGroup\" class=\"uk-button uk-button-default uk-margin-top\">
                    Create
                </a>

                {% partial 'modals/create-community' %}
            </div>
        </div>

    </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=\"uk-container\">


            <div id=\"fixtest\"></div>



            <div id=\"top-groups\"></div>

        </div>
    </div>
</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/groups.htm", "");
    }
}
