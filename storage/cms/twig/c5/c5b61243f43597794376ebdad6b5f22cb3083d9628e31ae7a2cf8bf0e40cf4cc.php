<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/groups/default.htm */
class __TwigTemplate_527b30954268a38d5c633867557856266588b9ba1ba0544cdd70094df21754fc extends Twig_Template
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
        <div class=uk-card-media-top>
            <img width=\"400\" height=\"300\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "\">
        </div>
        <div class=uk-card-body>
            <div class=\"uk-card-badge uk-label\">Badge</div>
            <h3 class=\"uk-card-title \" title=\"about ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "\">
                <a href=\"";
            // line 10
            echo url("group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "url", array()), "html", null, true);
            echo "\" class=\"uk-text-capitalize\" title=\"about ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array())), "html", null, true);
            echo "
                </a>
            </h3>
            <p>
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, call_user_func_array($this->env->getFunction('str_words')->getCallable(), array("words", twig_get_attribute($this->env, $this->source, $context["group"], "description", array()), 25, "..."))), "html", null, true);
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
        // line 21
        echo "

<!-- start the pagination !-->
<ul class=\"uk-pagination\">
    ";
        // line 25
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
        return array (  78 => 25,  72 => 21,  60 => 15,  53 => 11,  45 => 10,  41 => 9,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for group in groups %}
<div>
    <div class=\"uk-card uk-card-default uk-card-hover\">
        <div class=uk-card-media-top>
            <img width=\"400\" height=\"300\" src=\"{{ group.image }}\" alt=\"{{ group.name }}\">
        </div>
        <div class=uk-card-body>
            <div class=\"uk-card-badge uk-label\">Badge</div>
            <h3 class=\"uk-card-title \" title=\"about {{group.name}}\">
                <a href=\"{{ url('group') }}/{{ group.url}}\" class=\"uk-text-capitalize\" title=\"about {{group.name}}\">
                    {{ group.name | title }}
                </a>
            </h3>
            <p>
                {{ str_words(group.description, 25, '...') | title }}
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
