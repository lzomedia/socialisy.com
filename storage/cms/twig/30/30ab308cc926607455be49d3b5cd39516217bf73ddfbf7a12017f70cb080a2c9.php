<?php

/* /shared/httpd/socialisy/htdocs/themes/network/layouts/account.htm */
class __TwigTemplate_623a3ecc8720fafb521cca62c3d45e26e1b9a4ea886f21dbbc63e875ca22a1a5 extends Twig_Template
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

    <title>Social Community - ";
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("production/dashboard.min.css");
        echo "\">


</head>

<div class=\"uk-offcanvas-content\">


    <!--- Header !-->
    ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "


    <!-- CONTENT -->
    <div id=\"content\" data-uk-height-viewport=\"expand: true\">
        <div class=\"uk-container-expand\">

            <!-- Page !-->
            ";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 65
        echo "


            ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/_footer.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "

        </div>
    </div>
    <!-- /CONTENT -->





</div>

<!-- /#wrapper -->
<script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/production/account.min.js");
        echo "\"></script>
";
        // line 83
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 84
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/layouts/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 84,  159 => 83,  155 => 82,  140 => 69,  136 => 68,  131 => 65,  129 => 64,  119 => 56,  115 => 55,  103 => 46,  93 => 39,  89 => 38,  78 => 30,  73 => 28,  65 => 23,  61 => 22,  56 => 20,  49 => 16,  45 => 15,  41 => 14,  34 => 10,  23 => 1,);
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

    <title>Social Community - {{ this.page.title }}</title>


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
    <link rel=\"stylesheet\" href=\"{{ 'production/dashboard.min.css' | theme }}\">


</head>

<div class=\"uk-offcanvas-content\">


    <!--- Header !-->
    {% partial \"site/_header.htm\" %}



    <!-- CONTENT -->
    <div id=\"content\" data-uk-height-viewport=\"expand: true\">
        <div class=\"uk-container-expand\">

            <!-- Page !-->
            {% page %}



            {% partial \"site/_footer.htm\" %}


        </div>
    </div>
    <!-- /CONTENT -->





</div>

<!-- /#wrapper -->
<script src=\"{{ '/production/account.min.js' | theme }}\"></script>
{% framework extras %}


</body>
</html>", "/shared/httpd/socialisy/htdocs/themes/network/layouts/account.htm", "");
    }
}
