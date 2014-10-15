<?php

/* BoAdminBundle:Default:calcul.html.twig */
class __TwigTemplate_394b3c7a314c41cb47052f56bdd70978f91a799f708730166dfb59a6bce6b77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Symfony2 possède <b style=\"color:#cc0000\">";
        echo twig_escape_filter($this->env, (isset($context["nbr_articles"]) ? $context["nbr_articles"] : $this->getContext($context, "nbr_articles")), "html", null, true);
        echo "</b> articles sur internet
";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:calcul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
