<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/group/default.htm */
class __TwigTemplate_5e6c958f8bbac60f609e76439471bbf6ac264a7c131f23262d1e946538a0c7b4 extends Twig_Template
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
        echo "<div id=\"response\"></div>



<section class=\"uk-section uk-section-large uk-section-primary\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        <h1>
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", array()), "html", null, true);
        echo "
        </h1>
        <p class=\"uk-text-large addReadMore showlesscontent\">
            ";
        // line 11
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "description", array())), "html", null, true);
        echo "
        </p>
    </div>
</section>


<section class=\"uk-section uk-section-secondary uk-light uk-box-shadow-small uk-section-xsmall \">
    <div class=\"uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex uk-flex-middle\" data-uk-grid=\"\">
            <div class=\"uk-width-expand uk-visible@m\">
                <h4 class=\"uk-margin-remove\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "admin", array()), "name", array()), "html", null, true);
        echo "
                </h4>
                <i class=\"uk-text-muted uk-text-small\">Created on 12th May 2017</i>
            </div>
            <div class=\"uk-width-1-2 uk-width-1-5@m uk-visible@m\">
                <span class=\"uk-text-primary uk-icon\" data-uk-icon=\"icon:calendar; ratio: 0.8\">
                </span>
                <span class=\"uk-text-small uk-text-muted uk-text-bottom\"> Created</span><br>
                <span class=\"uk-text-large uk-text-primary\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "created_at", array()), "d M "), "html", null, true);
        echo "
                </span>
            </div>

            <div class=\"uk-width-auto@m uk-visible@s\">
                <button class=\"uk-animation-fade uk-button uk-button-danger uk-width-1-1\"
                        data-request=\"onJoin\"
                        data-attach-loading
                        data-request-flash>
                    Join
                </button>
            </div>
        </div>
    </div>
</section>



<section class=\"uk-section\">
    <div class=\"uk-container\">

        <form>
            <fieldset class=\"uk-fieldset\">

                <legend class=\"uk-legend\">Legend</legend>

                <div class=\"uk-margin\">
                    <input class=\"uk-input\" type=\"text\" placeholder=\"Input\">
                </div>


                <div class=\"uk-margin\">
                    <textarea class=\"uk-textarea\" rows=\"5\" placeholder=\"Textarea\"></textarea>
                </div>


                <div class=\"uk-margin\">
                    <button class=\"uk-button uk-button-danger\">Danger</button>

                </div>
            </fieldset>
        </form>

    </div>
</section>

<section class=\"uk-container uk-container-center\">


        <ul class=\"uk-tab\" data-uk-tab=\"{connect:'#my-id'}\">
            <li><a href=\"\">Posts</a></li>
            <li><a href=\"\">Members</a></li>
        </ul>



        <ul id=\"my-id\" class=\"uk-switcher uk-margin\">

            <li>
                <div uk-grid>
                    <div  masonry=\"true\" class=\"uk-grid-match uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l\" uk-grid-parallax uk-scrollspy=\"cls: uk-animation-fade; target: > div > .uk-card; delay: 300; repeat: true\">


                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 95
            echo "

                                <!-- ";
            // line 97
            echo twig_escape_filter($this->env, $context["post"], "html", null, true);
            echo " -->

                                ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "body", array()) != "")) {
                // line 100
                echo "                                <div>

                                    <div class=\"uk-card uk-card-default\">
                                        ";
                // line 103
                if ((twig_get_attribute($this->env, $this->source, $context["post"], "extra_info", array()) != "")) {
                    // line 104
                    echo "                                        <div class=\"uk-card-media-top\">
                                            <img src=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "extra_info", array()), "html", null, true);
                    echo "\" alt=\"\">
                                        </div>
                                        ";
                }
                // line 108
                echo "                                        <div class=\"uk-card-body\">
                                            <p>
                                                ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", array()), "html", null, true);
                echo "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            // line 116
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "

                    </div>
                </div>


                <div class=\"uk-container uk-text-center\">

                    <ul class=\"uk-pagination\">
                        ";
        // line 127
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", array());
        echo "
                    </ul>

                </div>


            </li>

            <li>Content 2</li>
            <li>Content 3</li>
        </ul>
    </section>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/group/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 127,  181 => 118,  174 => 116,  165 => 110,  161 => 108,  155 => 105,  152 => 104,  150 => 103,  145 => 100,  143 => 99,  138 => 97,  134 => 95,  130 => 94,  64 => 31,  52 => 22,  38 => 11,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"response\"></div>



<section class=\"uk-section uk-section-large uk-section-primary\">
    <div class=\"uk-container uk-container-small uk-text-center\">
        <h1>
            {{ group.name }}
        </h1>
        <p class=\"uk-text-large addReadMore showlesscontent\">
            {{ group.description | striptags  }}
        </p>
    </div>
</section>


<section class=\"uk-section uk-section-secondary uk-light uk-box-shadow-small uk-section-xsmall \">
    <div class=\"uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex uk-flex-middle\" data-uk-grid=\"\">
            <div class=\"uk-width-expand uk-visible@m\">
                <h4 class=\"uk-margin-remove\">
                    {{ group.admin.name }}
                </h4>
                <i class=\"uk-text-muted uk-text-small\">Created on 12th May 2017</i>
            </div>
            <div class=\"uk-width-1-2 uk-width-1-5@m uk-visible@m\">
                <span class=\"uk-text-primary uk-icon\" data-uk-icon=\"icon:calendar; ratio: 0.8\">
                </span>
                <span class=\"uk-text-small uk-text-muted uk-text-bottom\"> Created</span><br>
                <span class=\"uk-text-large uk-text-primary\">
                    {{ group.created_at | date ('d M ') }}
                </span>
            </div>

            <div class=\"uk-width-auto@m uk-visible@s\">
                <button class=\"uk-animation-fade uk-button uk-button-danger uk-width-1-1\"
                        data-request=\"onJoin\"
                        data-attach-loading
                        data-request-flash>
                    Join
                </button>
            </div>
        </div>
    </div>
</section>



<section class=\"uk-section\">
    <div class=\"uk-container\">

        <form>
            <fieldset class=\"uk-fieldset\">

                <legend class=\"uk-legend\">Legend</legend>

                <div class=\"uk-margin\">
                    <input class=\"uk-input\" type=\"text\" placeholder=\"Input\">
                </div>


                <div class=\"uk-margin\">
                    <textarea class=\"uk-textarea\" rows=\"5\" placeholder=\"Textarea\"></textarea>
                </div>


                <div class=\"uk-margin\">
                    <button class=\"uk-button uk-button-danger\">Danger</button>

                </div>
            </fieldset>
        </form>

    </div>
</section>

<section class=\"uk-container uk-container-center\">


        <ul class=\"uk-tab\" data-uk-tab=\"{connect:'#my-id'}\">
            <li><a href=\"\">Posts</a></li>
            <li><a href=\"\">Members</a></li>
        </ul>



        <ul id=\"my-id\" class=\"uk-switcher uk-margin\">

            <li>
                <div uk-grid>
                    <div  masonry=\"true\" class=\"uk-grid-match uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l\" uk-grid-parallax uk-scrollspy=\"cls: uk-animation-fade; target: > div > .uk-card; delay: 300; repeat: true\">


                                {% for post in posts %}


                                <!-- {{ post }} -->

                                {% if post.body != '' %}
                                <div>

                                    <div class=\"uk-card uk-card-default\">
                                        {% if post.extra_info != '' %}
                                        <div class=\"uk-card-media-top\">
                                            <img src=\"{{ post.extra_info }}\" alt=\"\">
                                        </div>
                                        {% endif %}
                                        <div class=\"uk-card-body\">
                                            <p>
                                                {{ post.body }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                {% endfor %}


                    </div>
                </div>


                <div class=\"uk-container uk-text-center\">

                    <ul class=\"uk-pagination\">
                        {{ posts.render | raw }}
                    </ul>

                </div>


            </li>

            <li>Content 2</li>
            <li>Content 3</li>
        </ul>
    </section>", "/shared/httpd/socialisy/htdocs/themes/network/partials/group/default.htm", "");
    }
}
