<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1f74d8b2c5602b27a279e84226dba93d69985ec0706d41724529b9beee20ddc4 extends Twig_Template
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
        $__internal_975544448b7bbfa83a418094acea73ca12c8f98f658052d4d86bd9f223600728 = $this->env->getExtension("native_profiler");
        $__internal_975544448b7bbfa83a418094acea73ca12c8f98f658052d4d86bd9f223600728->enter($__internal_975544448b7bbfa83a418094acea73ca12c8f98f658052d4d86bd9f223600728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_975544448b7bbfa83a418094acea73ca12c8f98f658052d4d86bd9f223600728->leave($__internal_975544448b7bbfa83a418094acea73ca12c8f98f658052d4d86bd9f223600728_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
