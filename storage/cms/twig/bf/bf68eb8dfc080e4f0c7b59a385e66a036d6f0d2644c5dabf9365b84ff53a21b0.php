<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/home.htm */
class __TwigTemplate_7dadfea0faa790c4bb195afa56cc6c6d536bceb137d50498b2d4f7cace02b853 extends Twig_Template
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
    <div class=\"uk-height-large uk-cover-container\" style=\"height:100vh\">
        <img src=\"https://picsum.photos/1300/500/?random\" alt=\"Alt img\" data-uk-cover=\"\" class=\"uk-cover\" style=\"width: 1171px; height: 450px;\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
            <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">
                <i style=\"color:#0f6ecd\" uk-icon=icon:star;ratio:10></i>


                <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                    <span>Laravel Community CMS</span>
                </h1>

                <p>
                    Build with UiKit, Laravel, Python, NPL ...
                </p>



                <a href=\"#\" uk-toggle=\"target: #register\" class=\"uk-button uk-button-default uk-margin-top\">
                    Register
                </a>

                ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/register"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            </div>
        </div>

    </div>
</section>
<section class=\"uk-section uk-section-muted uk-padding-remove-bottom\">
    <div class=\"uk-container uk-container-small\">
        <header class=\"uk-text-center\">
            <h1 class=\"uk-heading-primary\">Price</h1>
            <p class=\"uk-width-3-5 uk-margin-auto\">
                Our Product is the easiest way for creating and managing communities. Our advance plans give you more tools to get the job \\done.
            </p>
        </header>
        <div class=\"uk-grid uk-grid-small uk-child-width-1-3@m uk-margin-medium-top uk-grid-match\" data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200\" data-uk-grid=\"\">

            <!-- price -->
            <div class=\"uk-first-column\">
                <div class=\"uk-card uk-card-default uk-card-hover uk-flex uk-flex-column uk-scrollspy-inview uk-animation-slide-left-small\" data-uk-scrollspy-class=\"uk-animation-slide-left-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">PERSONAL</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span>0
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>1 community included</li>
                            <li>1 GB of storage</li>
                            <li>Email support</li>
                            <li>10 tokens</li>

                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"";
        // line 61
        echo url("account");
        echo "\" class=\"uk-button uk-button-primary uk-width-1-1\">FREE</a>
                    </div>
                </div>
            </div>
            <!-- /price -->

            <!-- price -->
            <div class=\"\">
                <div class=\"uk-card uk-card-default uk-card-hover uk-flex uk-flex-column uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">PROFESSIONAL</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span> 0. <small>99</small>
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>10 communities included</li>
                            <li>5 GB of storage</li>
                            <li>Email support</li>
                            <li>100 tokens</li>
                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"#\" class=\"uk-button uk-button-primary uk-width-1-1\">Free first year</a>
                    </div>
                </div>
            </div>
            <!-- /price -->
            <!-- price -->
            <div class=\"\">
                <div class=\"uk-card uk-card-default uk-flex uk-card-hover uk-flex-column uk-scrollspy-inview uk-animation-slide-right-small\" data-uk-scrollspy-class=\"uk-animation-slide-right-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">CORPORATE</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span>3. <small>99</small>
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>Unlimited users</li>
                            <li>Unlimited storage</li>
                            <li>Email support</li>
                            <li>1000 tokens</li>
                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"\" class=\"uk-button uk-button-primary uk-width-1-1\">Free first year</a>
                    </div>
                </div>
            </div>
            <!-- /price -->

        </div>
        <div class=\"uk-text-left uk-section-small\">
            *<small>With tokens you can buy stuff ... </small>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 61,  51 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-small uk-padding-remove\">
    <div class=\"uk-height-large uk-cover-container\" style=\"height:100vh\">
        <img src=\"https://picsum.photos/1300/500/?random\" alt=\"Alt img\" data-uk-cover=\"\" class=\"uk-cover\" style=\"width: 1171px; height: 450px;\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
            <div data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small\" class=\"uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">
                <i style=\"color:#0f6ecd\" uk-icon=icon:star;ratio:10></i>


                <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-heading-line uk-text-center\">
                    <span>Laravel Community CMS</span>
                </h1>

                <p>
                    Build with UiKit, Laravel, Python, NPL ...
                </p>



                <a href=\"#\" uk-toggle=\"target: #register\" class=\"uk-button uk-button-default uk-margin-top\">
                    Register
                </a>

                {% partial 'modals/register' %}
            </div>
        </div>

    </div>
</section>
<section class=\"uk-section uk-section-muted uk-padding-remove-bottom\">
    <div class=\"uk-container uk-container-small\">
        <header class=\"uk-text-center\">
            <h1 class=\"uk-heading-primary\">Price</h1>
            <p class=\"uk-width-3-5 uk-margin-auto\">
                Our Product is the easiest way for creating and managing communities. Our advance plans give you more tools to get the job \\done.
            </p>
        </header>
        <div class=\"uk-grid uk-grid-small uk-child-width-1-3@m uk-margin-medium-top uk-grid-match\" data-uk-scrollspy=\"cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200\" data-uk-grid=\"\">

            <!-- price -->
            <div class=\"uk-first-column\">
                <div class=\"uk-card uk-card-default uk-card-hover uk-flex uk-flex-column uk-scrollspy-inview uk-animation-slide-left-small\" data-uk-scrollspy-class=\"uk-animation-slide-left-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">PERSONAL</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span>0
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>1 community included</li>
                            <li>1 GB of storage</li>
                            <li>Email support</li>
                            <li>10 tokens</li>

                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"{{     url('account') }}\" class=\"uk-button uk-button-primary uk-width-1-1\">FREE</a>
                    </div>
                </div>
            </div>
            <!-- /price -->

            <!-- price -->
            <div class=\"\">
                <div class=\"uk-card uk-card-default uk-card-hover uk-flex uk-flex-column uk-scrollspy-inview uk-animation-slide-bottom-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">PROFESSIONAL</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span> 0. <small>99</small>
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>10 communities included</li>
                            <li>5 GB of storage</li>
                            <li>Email support</li>
                            <li>100 tokens</li>
                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"#\" class=\"uk-button uk-button-primary uk-width-1-1\">Free first year</a>
                    </div>
                </div>
            </div>
            <!-- /price -->
            <!-- price -->
            <div class=\"\">
                <div class=\"uk-card uk-card-default uk-flex uk-card-hover uk-flex-column uk-scrollspy-inview uk-animation-slide-right-small\" data-uk-scrollspy-class=\"uk-animation-slide-right-small\" style=\"\">
                    <div class=\"uk-card-header uk-text-center\">
                        <h4 class=\"uk-text-bold\">CORPORATE</h4>
                    </div>
                    <div class=\"uk-card-body uk-flex-1\">
                        <div class=\"uk-flex uk-flex-middle uk-flex-center\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 4rem; font-weight: 200; line-height: 1em\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 0.5em\">\$</span>3. <small>99</small>
\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"uk-text-small uk-text-center uk-text-muted\">Per community billed annually</div>
                        <ul>
                            <li>Unlimited users</li>
                            <li>Unlimited storage</li>
                            <li>Email support</li>
                            <li>1000 tokens</li>
                        </ul>
                    </div>
                    <div class=\"uk-card-footer\">
                        <a href=\"\" class=\"uk-button uk-button-primary uk-width-1-1\">Free first year</a>
                    </div>
                </div>
            </div>
            <!-- /price -->

        </div>
        <div class=\"uk-text-left uk-section-small\">
            *<small>With tokens you can buy stuff ... </small>

        </div>
    </div>
</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/home.htm", "");
    }
}
