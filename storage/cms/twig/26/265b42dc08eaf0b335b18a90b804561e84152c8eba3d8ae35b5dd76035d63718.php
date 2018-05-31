<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/groups/default.htm */
class __TwigTemplate_c281a304fcb215f7add1dd00f31141886fd87526dabb9809c749bcced256c61a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "<div>
    <div class=\"uk-card uk-card-default uk-card-hover\">
        ";
            // line 4
            if (((twig_get_attribute($this->env, $this->source, $context["group"], "image", array()) != "") || (twig_get_attribute($this->env, $this->source, $context["group"], "image", array()) != "0"))) {
                // line 5
                echo "        <div class=uk-card-media-top>
            <img width=\"400\" height=\"300\" src=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "image", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
                echo "\">
        </div>
        ";
            }
            // line 9
            echo "        <div class=uk-card-body>
            <div class=\"uk-card-badge uk-label\">Badge</div>
            <h3 class=\"uk-card-title \" title=\"about ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "\">
                <a href=\"";
            // line 12
            echo url("group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "url", array()), "html", null, true);
            echo "\" class=\"uk-text-capitalize\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo " community\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array())), "html", null, true);
            echo "
                </a>
            </h3>
            <p>
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, call_user_func_array($this->env->getFunction('str_words')->getCallable(), array("words", twig_get_attribute($this->env, $this->source, $context["group"], "description", array()), 35, "..."))), "html", null, true);
            echo "
            </p>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

<!-- start the pagination !-->
<ul class=\"uk-pagination\">
    ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), "render", array());
        echo "
</ul>
<!-- end the pagination !-->";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/groups/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  79 => 23,  67 => 17,  60 => 13,  52 => 12,  48 => 11,  44 => 9,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for group in groups %}
<div>
    <div class=\"uk-card uk-card-default uk-card-hover\">
        {% if group.image !=\"\" or group.image !=\"0\" %}
        <div class=uk-card-media-top>
            <img width=\"400\" height=\"300\" src=\"{{ group.image }}\" alt=\"{{ group.name }}\">
        </div>
        {% endif %}
        <div class=uk-card-body>
            <div class=\"uk-card-badge uk-label\">Badge</div>
            <h3 class=\"uk-card-title \" title=\"about {{group.name}}\">
                <a href=\"{{ url('group') }}/{{ group.url}}\" class=\"uk-text-capitalize\" title=\"{{group.name}} community\">
                    {{ group.name | title }}
                </a>
            </h3>
            <p>
                {{ str_words(group.description, 35, '...') | title }}
            </p>
        </div>
    </div>
</div>
{% endfor %}


<!-- start the pagination !-->
<ul class=\"uk-pagination\">
    {{ groups.render | raw }}
</ul>
<!-- end the pagination !-->", "/shared/httpd/socialisy/htdocs/themes/network/partials/groups/default.htm", "");
    }
}
