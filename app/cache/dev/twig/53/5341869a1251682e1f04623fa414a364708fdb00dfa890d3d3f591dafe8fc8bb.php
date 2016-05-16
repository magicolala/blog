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
        $__internal_c4e7fa26d7c960153a529b0ce79aaa6a5cc5e07d5a0ee9b807fe79610b51e034 = $this->env->getExtension("native_profiler");
        $__internal_c4e7fa26d7c960153a529b0ce79aaa6a5cc5e07d5a0ee9b807fe79610b51e034->enter($__internal_c4e7fa26d7c960153a529b0ce79aaa6a5cc5e07d5a0ee9b807fe79610b51e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c4e7fa26d7c960153a529b0ce79aaa6a5cc5e07d5a0ee9b807fe79610b51e034->leave($__internal_c4e7fa26d7c960153a529b0ce79aaa6a5cc5e07d5a0ee9b807fe79610b51e034_prof);

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
