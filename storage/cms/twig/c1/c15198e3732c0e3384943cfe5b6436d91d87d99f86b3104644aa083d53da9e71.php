<?php

/* /shared/httpd/socialisy/htdocs/themes/network/pages/home.htm */
class __TwigTemplate_2554d4005b73e8f2bfea9c154547043008712b76eace60781c8f1a3a0137ae9f extends Twig_Template
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
        echo "<section class=\"uk-section uk-section-large uk-section-primary\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        <h1>Album example</h1>
        <p class=\"uk-text-large\">This is a text that describes the album, its creator and something that you want to tell that is attractive.</p>
        <div data-uk-margin=\"\">
            <div class=\"uk-button uk-button-primary uk-first-column\">
                CALL TO ACTION
            </div>
            <a class=\"uk-button uk-button-default\" href=\"#modal-center\" data-uk-toggle=\"\">Open Modal</a>
            <a class=\"uk-button uk-button-default\" href=\"#modal-media-vimeo\" data-uk-toggle=\"\">Vimeo</a>
        </div>
    </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <h2 class=\"uk-heading-line uk-text-center\">
                <span><i uk-icon=icon:star></i> Recent Communities <i uk-icon=icon:star></i></span>
            </h2>
            <p class=uk-text-center>
                Here is a list of our newest social communities don't hesitate to join our full of fun community and start chating with your friends
            </p>
            <div class=\"uk-child-width-1-3@m uk-grid-match uk-grid\" uk-grid=\"\">

                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                <div>
                    <div>
                        <div class=\"uk-card uk-card-default\">
                            <div class=uk-card-media-top><img src=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("./production/static/b544bda014136f485aa3dd182707b5ba.jpg");
            echo "\" alt=\"\"></div>
                            <div class=uk-card-body>
                                <h3 class=uk-card-title>Media Top</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                <div class=\"uk-align-center uk-animation-toggle\">
                    <a href=\"";
        // line 42
        echo url("groups");
        echo "\" class=\"btn-load-more uk-button uk-button-primary uk-animation-fade\">
                        View More <span class=\"uk-margin-small-left uk-icon\" uk-icon=\"icon: more\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>




<!--
/*--------------------------------------
  02. Counter Element
----------------------------------------*/
!-->
<section class=\"counter\">
    <div class=\"uk-container uk-container-center\">
        <div class=\"uk-grid-divider uk-child-width-expand@s\" uk-grid>
            <div>
                <h6 class=\" uk-text-center\">
                    500k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Members</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    10k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Groups</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    100k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Posts</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    100k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Streams</p>
            </div>
        </div>
    </div>
</section>

<section>

    <div class=\"uk-section uk-section-primary uk-preserve-color\">
        <div class=\"uk-container\">

            <div class=\"uk-panel uk-light uk-margin-medium\">
                <h3>Section Primary with cards</h3>
            </div>

            <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
                <div>
                    <div class=\"uk-card uk-card-default uk-card-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-default uk-card-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section class=\"pricing uk-section-default\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <h2 class=\"uk-heading-line uk-text-center\">
                <span>Pricing</span>
            </h2>

            <p class=\"uk-text-center\">
                Our modest prices
            </p>

            <div class=\"uk-child-width-1-3@m uk-grid-match uk-grid\" uk-grid>
                <div class=\"uk-first-column\">
                    <div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Free</h3>
                        <p>With our free package you can create your own <b title=\"create social network\">social network</b> and start chatting on your favorites subjects</p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-primary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Private</h3>
                        <p>
                            Build your private social group without the fear of being tracked . Your privacy is important for us .
                        </p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Enterprise</h3>
                        <p>
                            Build your own enterprise groups and chat about the things you want to share with work colegues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section subscribe !-->
<section class=\"subscribe uk-section-default uk-card-primary\">

    <div class=\"uk-container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"uk-heading-line\">Sign up for our Newsletter</h2>
                <span>Join our newsletter to get the new updates regarding the futures that we are releasing everyday</span>
            </div>
            <div class=\"col-md-6\">
                <div class=\"subscribe-form\">
                    <div class=uk-margin>
                        <div class=uk-inline>
                            <span class=\"uk-form-icon uk-form-icon-flip\" uk-icon=\"icon: mail\"></span>
                            <input placeholder=Subscribe class=uk-input type=text>
                        </div>
                    </div>
                </div>
            </div>
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
        return array (  79 => 42,  75 => 40,  59 => 30,  54 => 27,  50 => 26,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"uk-section uk-section-large uk-section-primary\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        <h1>Album example</h1>
        <p class=\"uk-text-large\">This is a text that describes the album, its creator and something that you want to tell that is attractive.</p>
        <div data-uk-margin=\"\">
            <div class=\"uk-button uk-button-primary uk-first-column\">
                CALL TO ACTION
            </div>
            <a class=\"uk-button uk-button-default\" href=\"#modal-center\" data-uk-toggle=\"\">Open Modal</a>
            <a class=\"uk-button uk-button-default\" href=\"#modal-media-vimeo\" data-uk-toggle=\"\">Vimeo</a>
        </div>
    </div>
</section>

<section class=\"uk-section-default top-streamers\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <h2 class=\"uk-heading-line uk-text-center\">
                <span><i uk-icon=icon:star></i> Recent Communities <i uk-icon=icon:star></i></span>
            </h2>
            <p class=uk-text-center>
                Here is a list of our newest social communities don't hesitate to join our full of fun community and start chating with your friends
            </p>
            <div class=\"uk-child-width-1-3@m uk-grid-match uk-grid\" uk-grid=\"\">

                {% for i in 1..9 %}
                <div>
                    <div>
                        <div class=\"uk-card uk-card-default\">
                            <div class=uk-card-media-top><img src=\"{{ './production/static/b544bda014136f485aa3dd182707b5ba.jpg' | theme }}\" alt=\"\"></div>
                            <div class=uk-card-body>
                                <h3 class=uk-card-title>Media Top</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

                <div class=\"uk-align-center uk-animation-toggle\">
                    <a href=\"{{ url('groups') }}\" class=\"btn-load-more uk-button uk-button-primary uk-animation-fade\">
                        View More <span class=\"uk-margin-small-left uk-icon\" uk-icon=\"icon: more\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>




<!--
/*--------------------------------------
  02. Counter Element
----------------------------------------*/
!-->
<section class=\"counter\">
    <div class=\"uk-container uk-container-center\">
        <div class=\"uk-grid-divider uk-child-width-expand@s\" uk-grid>
            <div>
                <h6 class=\" uk-text-center\">
                    500k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Members</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    10k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Groups</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    100k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Posts</p>
            </div>
            <div>
                <h6 class=\" uk-text-center\">
                    100k+
                </h6>
                <p class=\"uk-text-meta uk-text-center\">Streams</p>
            </div>
        </div>
    </div>
</section>

<section>

    <div class=\"uk-section uk-section-primary uk-preserve-color\">
        <div class=\"uk-container\">

            <div class=\"uk-panel uk-light uk-margin-medium\">
                <h3>Section Primary with cards</h3>
            </div>

            <div class=\"uk-grid-match uk-child-width-expand@m\" uk-grid>
                <div>
                    <div class=\"uk-card uk-card-default uk-card-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-default uk-card-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section class=\"pricing uk-section-default\">
    <div class=\"uk-section uk-section-small uk-background-cover\">
        <div class=uk-container>
            <h2 class=\"uk-heading-line uk-text-center\">
                <span>Pricing</span>
            </h2>

            <p class=\"uk-text-center\">
                Our modest prices
            </p>

            <div class=\"uk-child-width-1-3@m uk-grid-match uk-grid\" uk-grid>
                <div class=\"uk-first-column\">
                    <div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Free</h3>
                        <p>With our free package you can create your own <b title=\"create social network\">social network</b> and start chatting on your favorites subjects</p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-primary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Private</h3>
                        <p>
                            Build your private social group without the fear of being tracked . Your privacy is important for us .
                        </p>
                    </div>
                </div>
                <div>
                    <div class=\"uk-card uk-card-secondary uk-card-hover uk-card-body\">
                        <h3 class=\"uk-card-title uk-text-center\">Enterprise</h3>
                        <p>
                            Build your own enterprise groups and chat about the things you want to share with work colegues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section subscribe !-->
<section class=\"subscribe uk-section-default uk-card-primary\">

    <div class=\"uk-container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"uk-heading-line\">Sign up for our Newsletter</h2>
                <span>Join our newsletter to get the new updates regarding the futures that we are releasing everyday</span>
            </div>
            <div class=\"col-md-6\">
                <div class=\"subscribe-form\">
                    <div class=uk-margin>
                        <div class=uk-inline>
                            <span class=\"uk-form-icon uk-form-icon-flip\" uk-icon=\"icon: mail\"></span>
                            <input placeholder=Subscribe class=uk-input type=text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>", "/shared/httpd/socialisy/htdocs/themes/network/pages/home.htm", "");
    }
}
