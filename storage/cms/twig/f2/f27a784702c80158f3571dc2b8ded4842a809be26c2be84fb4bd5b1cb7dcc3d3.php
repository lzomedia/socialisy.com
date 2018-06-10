<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/modals/_notifications.htm */
class __TwigTemplate_3ce62a3f6e8543a8c20482872b9cb7fe1f392490d6f4abaab56cd9026a9fcfec extends Twig_Template
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
        echo "<div class=\"uk-offcanvas-content\">

    <a type=\"button\" uk-toggle=\"target: #offcanvas-flip\">
        <small class=\"uk-text-danger uk-badge\" style=\"background: transparent;font-size: 12px\" uk-icon=\"icon: mail\" > 23 </small>
    </button>

    <div id=\"offcanvas-flip\" uk-offcanvas=\"flip: true; overlay: true\">
        <div class=\"uk-offcanvas-bar\">

            <button class=\"uk-offcanvas-close\" type=\"button\" uk-close></button>

            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/_notifications.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"uk-offcanvas-content\">

    <a type=\"button\" uk-toggle=\"target: #offcanvas-flip\">
        <small class=\"uk-text-danger uk-badge\" style=\"background: transparent;font-size: 12px\" uk-icon=\"icon: mail\" > 23 </small>
    </button>

    <div id=\"offcanvas-flip\" uk-offcanvas=\"flip: true; overlay: true\">
        <div class=\"uk-offcanvas-bar\">

            <button class=\"uk-offcanvas-close\" type=\"button\" uk-close></button>

            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
    </div>

</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/_notifications.htm", "");
    }
}
