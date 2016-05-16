<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1192f55927a2c682cb12fb680c7ab9a0abeef236b395ddf326ee6bdf1f6a5044 extends Twig_Template
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
        $__internal_1eae7e9bdbbffc96a0077633c13dad78699676fcaf232fcb2034e5e58fdb7d81 = $this->env->getExtension("native_profiler");
        $__internal_1eae7e9bdbbffc96a0077633c13dad78699676fcaf232fcb2034e5e58fdb7d81->enter($__internal_1eae7e9bdbbffc96a0077633c13dad78699676fcaf232fcb2034e5e58fdb7d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_1eae7e9bdbbffc96a0077633c13dad78699676fcaf232fcb2034e5e58fdb7d81->leave($__internal_1eae7e9bdbbffc96a0077633c13dad78699676fcaf232fcb2034e5e58fdb7d81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
