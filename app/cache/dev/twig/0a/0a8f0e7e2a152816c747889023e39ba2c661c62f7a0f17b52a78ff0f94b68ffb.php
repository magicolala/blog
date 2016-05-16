<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7b47d35a354c4e2a9d06d975cd9b26bd09b32a3956e3bd3232fb55ba9e33c401 extends Twig_Template
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
        $__internal_6d010fc3b5e5d260a2706c6bee704c7915012b8b888968c6ca8f6d40b4002d7b = $this->env->getExtension("native_profiler");
        $__internal_6d010fc3b5e5d260a2706c6bee704c7915012b8b888968c6ca8f6d40b4002d7b->enter($__internal_6d010fc3b5e5d260a2706c6bee704c7915012b8b888968c6ca8f6d40b4002d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6d010fc3b5e5d260a2706c6bee704c7915012b8b888968c6ca8f6d40b4002d7b->leave($__internal_6d010fc3b5e5d260a2706c6bee704c7915012b8b888968c6ca8f6d40b4002d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
