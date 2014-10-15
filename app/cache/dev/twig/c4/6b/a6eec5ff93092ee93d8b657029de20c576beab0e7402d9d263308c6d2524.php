<?php

/* ::base.html.twig */
class __TwigTemplate_c46ba6eec5ff93092ee93d8b657029de20c576beab0e7402d9d263308c6d2524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>SF2</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        
        <style type=\"text/css\">
            body{
                padding-top: 60px;
            }
        </style>
    </head>
    <body>
        <!-- menu -->
        ";
        // line 17
        $this->env->loadTemplate("BoAdminBundle:Default:menu.html.twig")->display($context);
        // line 18
        echo "        <!-- menu end -->

        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "            </div>
        </div>

        <script src=\"http://code.jquery.com/jquery.js\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
    </body>
</html>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 27,  51 => 23,  49 => 22,  43 => 18,  41 => 17,  28 => 7,  20 => 1,);
    }
}
