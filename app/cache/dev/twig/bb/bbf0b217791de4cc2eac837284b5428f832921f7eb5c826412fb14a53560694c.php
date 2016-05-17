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
        $__internal_de87cb0cc898ae6f241ed08594c11f2e1c12e72ae8efaafa11a062a2b4e1bfb0 = $this->env->getExtension("native_profiler");
        $__internal_de87cb0cc898ae6f241ed08594c11f2e1c12e72ae8efaafa11a062a2b4e1bfb0->enter($__internal_de87cb0cc898ae6f241ed08594c11f2e1c12e72ae8efaafa11a062a2b4e1bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_de87cb0cc898ae6f241ed08594c11f2e1c12e72ae8efaafa11a062a2b4e1bfb0->leave($__internal_de87cb0cc898ae6f241ed08594c11f2e1c12e72ae8efaafa11a062a2b4e1bfb0_prof);

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
