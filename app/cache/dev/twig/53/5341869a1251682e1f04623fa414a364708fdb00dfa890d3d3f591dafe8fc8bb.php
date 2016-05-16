<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_764fa0493a23d94bb31a11b22ac22ff298d4e4c72ee90aa940d41dc24ccd9f19 extends Twig_Template
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
        $__internal_6e5c2a9b63c7ea2550f51c6157bcb7e2a5893d7431e2760f0bd3b0cd0f6d3a44 = $this->env->getExtension("native_profiler");
        $__internal_6e5c2a9b63c7ea2550f51c6157bcb7e2a5893d7431e2760f0bd3b0cd0f6d3a44->enter($__internal_6e5c2a9b63c7ea2550f51c6157bcb7e2a5893d7431e2760f0bd3b0cd0f6d3a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6e5c2a9b63c7ea2550f51c6157bcb7e2a5893d7431e2760f0bd3b0cd0f6d3a44->leave($__internal_6e5c2a9b63c7ea2550f51c6157bcb7e2a5893d7431e2760f0bd3b0cd0f6d3a44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
