<?php

/* /shared/httpd/socialisy/htdocs/themes/network/layouts/default.htm */
class __TwigTemplate_e4d6e2f49cf3dda86fcfc16604cf3b0ca3adc77697bebb2bca396c484a448053 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- META -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>


    <!-- SEO Meta !-->
    <meta name=\"title\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">


    <!-- Open Graph !-->
    <meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\"/>

    <meta property=\"og:image\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "thumb", array()), "html", null, true);
        echo "\"/>
    <meta property=\"og:description\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\"/>


    <!-- Twitter Cards !-->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:title\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">

    <meta name=\"twitter:description\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">


    <!-- meta author !-->
    <meta name=\"author\" content=\"lzoMedia\">


    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">

    <!-- CORE CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>


    <!-- THEME CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("production/");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "css", array()), "html", null, true);
        echo "\">


</head>

<body>


<!-- start the main -->
<div class=\"uk-offcanvas-content\">


    <!-- Flash -->
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 59
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 60
                echo "

    <!-- test !-->
    <div data-control=\"flash-message\" data-interval=\"10\">

        <scripts>
            \$(window).on('load', function(response) {

                UIkit.notification({message: '";
                // line 68
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "', status: '";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "'});

            });

        </scripts>

    </div>


    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 78
        echo "

    <!--- Header !-->
    ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "

    <!-- Page !-->
    ";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 86
        echo "

    <!--- Footer !-->
    ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_footer.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "
    <!-- Side Menu !-->
    ";
        // line 92
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_side_menu.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 93
        echo "

    <!-- Notification Side Menu !-->
    ";
        // line 96
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_notifications.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 97
        echo "
</div>
<!-- /#wrapper -->
<script src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/production/");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "js", array()), "html", null, true);
        echo "\"></script>
";
        // line 101
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 102
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 102,  203 => 101,  197 => 100,  192 => 97,  188 => 96,  183 => 93,  179 => 92,  175 => 90,  171 => 89,  166 => 86,  164 => 85,  159 => 82,  155 => 81,  150 => 78,  134 => 68,  124 => 60,  121 => 59,  103 => 46,  93 => 39,  89 => 38,  78 => 30,  73 => 28,  65 => 23,  61 => 22,  56 => 20,  49 => 16,  45 => 15,  41 => 14,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- META -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <title>{{ this.page.title }}</title>


    <!-- SEO Meta !-->
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">


    <!-- Open Graph !-->
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }}\"/>

    <meta property=\"og:image\" content=\"{{ this.page.thumb }}\"/>
    <meta property=\"og:description\" content=\"{{ this.page.meta_description }}\"/>


    <!-- Twitter Cards !-->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:title\" content=\"{{ this.page.meta_title }}\">

    <meta name=\"twitter:description\" content=\"{{ this.page.meta_description }}\">


    <!-- meta author !-->
    <meta name=\"author\" content=\"lzoMedia\">


    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"{{ 'assets/img/favicon.ico'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/favicon.ico'|theme }}\">

    <!-- CORE CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>


    <!-- THEME CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'production/' | theme }}/{{ this.page.css }}\">


</head>

<body>


<!-- start the main -->
<div class=\"uk-offcanvas-content\">


    <!-- Flash -->
    {% flash %}


    <!-- test !-->
    <div data-control=\"flash-message\" data-interval=\"10\">

        <scripts>
            \$(window).on('load', function(response) {

                UIkit.notification({message: '{{ message }}', status: '{{ type }}'});

            });

        </scripts>

    </div>


    {% endflash %}


    <!--- Header !-->
    {% partial \"site/_header.htm\" %}


    <!-- Page !-->
    {% page %}


    <!--- Footer !-->
    {% partial \"site/_footer.htm\" %}

    <!-- Side Menu !-->
    {% partial \"site/_side_menu.htm\" %}


    <!-- Notification Side Menu !-->
    {% partial \"site/_notifications.htm\" %}

</div>
<!-- /#wrapper -->
<script src=\"{{ '/production/' | theme }}/{{ this.page.js }}\"></script>
{% framework extras %}


</body>
</html>", "/shared/httpd/socialisy/htdocs/themes/network/layouts/default.htm", "");
    }
}
