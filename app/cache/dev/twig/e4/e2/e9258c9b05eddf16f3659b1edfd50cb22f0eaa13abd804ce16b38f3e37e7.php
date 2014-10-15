<?php

/* BoAdminBundle:Default:aide.html.twig */
class __TwigTemplate_e4e2e9258c9b05eddf16f3659b1edfd50cb22f0eaa13abd804ce16b38f3e37e7 extends Twig_Template
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
        echo "Symfony est un Framework Open-Source, dont l’objectif est de développer des applications web professionnelles en utilisant le langage PHP.
<br>
<br>Symfony apporte une architecture, des composants et des outils pour que les développeurs construisent des applications web complexes plus rapidement. Choisir Symfony permet de publier vos applications plus tôt, de les héberger et de les diffuser sans problème, et ainsi de les maintenir dans le temps sans mauvaise surprise. Symfony est basé sur l’expérience. Notre crédo ? Non pas créer pour créer, mais enrichir l’existant, dans une logique “open-source“. Des milliers de développeurs font désormais confiance à Symfony pour leurs applications ! Et tous les mois, plus d’ 1 000 000 de visiteurs différents se rendent sur le site officiel Symfony. Symfony est utilisé par de nombreuses entreprises comme Yahoo !, Dailymotion, Ted.com, Electronic Arts, Orange, ArianeEspace, et bien d’autres encore.
<br>
<br>
<br>
<div id=\"sidebar\">
    ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BoAdminBundle:Default:calcul"));
        echo "
</div>
<div align=\"center\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/symfony2.png"), "html", null, true);
        echo "\" alt=\"image_symfony2\"></div>
";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  40 => 11,  31 => 4,  28 => 3,);
    }
}
