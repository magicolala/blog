<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e7e2e68c80230f9f99ccc912fca43ad86e6609adaadd9fc54d9be7906dad58b1 extends Twig_Template
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
        $__internal_1709f54e48dab1f90caa398a0441a5b7a35f700ee790d957b7bff17e8a4d0f73 = $this->env->getExtension("native_profiler");
        $__internal_1709f54e48dab1f90caa398a0441a5b7a35f700ee790d957b7bff17e8a4d0f73->enter($__internal_1709f54e48dab1f90caa398a0441a5b7a35f700ee790d957b7bff17e8a4d0f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1709f54e48dab1f90caa398a0441a5b7a35f700ee790d957b7bff17e8a4d0f73->leave($__internal_1709f54e48dab1f90caa398a0441a5b7a35f700ee790d957b7bff17e8a4d0f73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
