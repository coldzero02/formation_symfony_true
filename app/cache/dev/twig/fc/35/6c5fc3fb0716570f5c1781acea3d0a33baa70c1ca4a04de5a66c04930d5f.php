<?php

/* BoAdminBundle:Default:menu.html.twig */
class __TwigTemplate_fc356c5fc3fb0716570f5c1781acea3d0a33baa70c1ca4a04de5a66c04930d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <nav class=\"navbar navbar-default navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">Exercices</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\">Accueil</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">---------- <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin.aide");
        echo "\">aide</a></li>
                                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil", array("name" => "nicolas"));
        echo "\">accueil</a></li>
                            </ul>
                        </li>
                        <!--<li><a href=\"#\">Aide</a></li>-->
                    </ul>
<!--                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Identification <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Connection</a></li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
            </div>
        </nav>";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 14,  19 => 1,);
    }
}
