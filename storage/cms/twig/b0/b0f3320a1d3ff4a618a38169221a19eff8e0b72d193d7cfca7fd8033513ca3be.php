<?php

/* /shared/httpd/socialisy/htdocs/themes/network/partials/modals/create-group.htm */
class __TwigTemplate_d11f79a9ef69f544761f36b1a2d425b141e9229569936662a94416e3cd4ee500 extends Twig_Template
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
        echo "<div id=\"createGroup\" class=\"uk-modal-full\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
        <div class=\"uk-grid-collapse uk-child-width-1-2@s uk-flex-middle\" uk-grid>
            <div class=\"uk-background-cover\" style=\"background-image: url('https://picsum.photos/1300/500/?random');\" uk-height-viewport></div>
            <div class=\"uk-padding\">

                <h2 title=\"create your own social media group\">
                    Create
                </h2>

                <form class=\"uk-form-stacked\" data-request=\"onCreateGroup\">

                    <div class=\"uk-margin\">
                        <label class=\"uk-form-label\" for=\"form-stacked-text\">
                            Group Name
                        </label>
                        <div class=\"uk-form-controls\">
                            <input name=\"group-name\" class=\"uk-input\" id=\"form-stacked-text\" required type=\"text\" placeholder=\"Name\">
                        </div>
                    </div>

                    <div class=\"uk-margin\">
                        <div class=\"uk-form-label\">Privacy</div>
                        <div class=\"uk-form-controls\">
                            <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">

                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"public\"> Public</label><br>
                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"private\"> Private</label><br>
                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"enterprise\"> Enterprise</label>
                            </div>
                        </div>
                    </div>


                    <div class=\"uk-margin\">
                        <label class=\"uk-form-label\" for=\"form-stacked-text\">
                            Group Description
                        </label>
                        <textarea class=\"uk-textarea\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>


                    <div class=\"uk-margin\">
                        <button class=\"uk-button uk-button-danger\">
                            Create
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/create-group.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"createGroup\" class=\"uk-modal-full\" uk-modal>
    <div class=\"uk-modal-dialog\">
        <button class=\"uk-modal-close-full uk-close-large\" type=\"button\" uk-close></button>
        <div class=\"uk-grid-collapse uk-child-width-1-2@s uk-flex-middle\" uk-grid>
            <div class=\"uk-background-cover\" style=\"background-image: url('https://picsum.photos/1300/500/?random');\" uk-height-viewport></div>
            <div class=\"uk-padding\">

                <h2 title=\"create your own social media group\">
                    Create
                </h2>

                <form class=\"uk-form-stacked\" data-request=\"onCreateGroup\">

                    <div class=\"uk-margin\">
                        <label class=\"uk-form-label\" for=\"form-stacked-text\">
                            Group Name
                        </label>
                        <div class=\"uk-form-controls\">
                            <input name=\"group-name\" class=\"uk-input\" id=\"form-stacked-text\" required type=\"text\" placeholder=\"Name\">
                        </div>
                    </div>

                    <div class=\"uk-margin\">
                        <div class=\"uk-form-label\">Privacy</div>
                        <div class=\"uk-form-controls\">
                            <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">

                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"public\"> Public</label><br>
                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"private\"> Private</label><br>
                            <label><input class=\"uk-radio\" type=\"radio\" name=\"privacy\" value=\"enterprise\"> Enterprise</label>
                            </div>
                        </div>
                    </div>


                    <div class=\"uk-margin\">
                        <label class=\"uk-form-label\" for=\"form-stacked-text\">
                            Group Description
                        </label>
                        <textarea class=\"uk-textarea\" rows=\"5\" placeholder=\"Description\"></textarea>
                    </div>


                    <div class=\"uk-margin\">
                        <button class=\"uk-button uk-button-danger\">
                            Create
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>", "/shared/httpd/socialisy/htdocs/themes/network/partials/modals/create-group.htm", "");
    }
}
