<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_09b6fe791c5e971baa873eb2734a56bf89a2d05e24e8db5165697c1faeed04fb extends Twig_Template
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
        $__internal_a95148551d8dfa50c8c3a9b383a7a5c6a99a28ec1ecda369c8cf354bec889342 = $this->env->getExtension("native_profiler");
        $__internal_a95148551d8dfa50c8c3a9b383a7a5c6a99a28ec1ecda369c8cf354bec889342->enter($__internal_a95148551d8dfa50c8c3a9b383a7a5c6a99a28ec1ecda369c8cf354bec889342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a95148551d8dfa50c8c3a9b383a7a5c6a99a28ec1ecda369c8cf354bec889342->leave($__internal_a95148551d8dfa50c8c3a9b383a7a5c6a99a28ec1ecda369c8cf354bec889342_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
