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
        $__internal_c1e89715345e655bbd733a9f90d390c39e9336750ecfd51c67b8024796fc8cec = $this->env->getExtension("native_profiler");
        $__internal_c1e89715345e655bbd733a9f90d390c39e9336750ecfd51c67b8024796fc8cec->enter($__internal_c1e89715345e655bbd733a9f90d390c39e9336750ecfd51c67b8024796fc8cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c1e89715345e655bbd733a9f90d390c39e9336750ecfd51c67b8024796fc8cec->leave($__internal_c1e89715345e655bbd733a9f90d390c39e9336750ecfd51c67b8024796fc8cec_prof);

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
