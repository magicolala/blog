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
        $__internal_0a2b3e709cdeae33d2f51ecaa7b7deb3a068a6537daddc95c8c3b36c3ed144b6 = $this->env->getExtension("native_profiler");
        $__internal_0a2b3e709cdeae33d2f51ecaa7b7deb3a068a6537daddc95c8c3b36c3ed144b6->enter($__internal_0a2b3e709cdeae33d2f51ecaa7b7deb3a068a6537daddc95c8c3b36c3ed144b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_0a2b3e709cdeae33d2f51ecaa7b7deb3a068a6537daddc95c8c3b36c3ed144b6->leave($__internal_0a2b3e709cdeae33d2f51ecaa7b7deb3a068a6537daddc95c8c3b36c3ed144b6_prof);

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
