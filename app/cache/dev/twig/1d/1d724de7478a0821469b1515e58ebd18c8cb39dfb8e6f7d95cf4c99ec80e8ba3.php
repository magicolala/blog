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
        $__internal_cfa55f2e3029173a2626e9eaedc9ea6e5c1dcfce901c4d0d0cef11e2b11e0b6b = $this->env->getExtension("native_profiler");
        $__internal_cfa55f2e3029173a2626e9eaedc9ea6e5c1dcfce901c4d0d0cef11e2b11e0b6b->enter($__internal_cfa55f2e3029173a2626e9eaedc9ea6e5c1dcfce901c4d0d0cef11e2b11e0b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cfa55f2e3029173a2626e9eaedc9ea6e5c1dcfce901c4d0d0cef11e2b11e0b6b->leave($__internal_cfa55f2e3029173a2626e9eaedc9ea6e5c1dcfce901c4d0d0cef11e2b11e0b6b_prof);

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
