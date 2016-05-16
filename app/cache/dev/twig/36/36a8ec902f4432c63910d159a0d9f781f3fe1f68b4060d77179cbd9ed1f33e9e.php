<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dce54abf48b4129dd83421293090e7098a4dff80170a979314e235301e898fcc extends Twig_Template
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
        $__internal_7a31d0171af393697364813d36cb7184c2598b9e8330a07381f323ac5155241b = $this->env->getExtension("native_profiler");
        $__internal_7a31d0171af393697364813d36cb7184c2598b9e8330a07381f323ac5155241b->enter($__internal_7a31d0171af393697364813d36cb7184c2598b9e8330a07381f323ac5155241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7a31d0171af393697364813d36cb7184c2598b9e8330a07381f323ac5155241b->leave($__internal_7a31d0171af393697364813d36cb7184c2598b9e8330a07381f323ac5155241b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
