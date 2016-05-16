<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_54c4a715ad3925ae9a22c2e763cb67f29f3facf7b28ef4110de4a734ec7f5608 extends Twig_Template
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
        $__internal_a2cfbe622ed6c58dca1b0e6fbc0478fa3478ac103101dcd671eaadb135685f8f = $this->env->getExtension("native_profiler");
        $__internal_a2cfbe622ed6c58dca1b0e6fbc0478fa3478ac103101dcd671eaadb135685f8f->enter($__internal_a2cfbe622ed6c58dca1b0e6fbc0478fa3478ac103101dcd671eaadb135685f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a2cfbe622ed6c58dca1b0e6fbc0478fa3478ac103101dcd671eaadb135685f8f->leave($__internal_a2cfbe622ed6c58dca1b0e6fbc0478fa3478ac103101dcd671eaadb135685f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
