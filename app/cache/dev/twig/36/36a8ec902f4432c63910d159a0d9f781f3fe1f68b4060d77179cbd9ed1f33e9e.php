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
        $__internal_4073976f2bfa0bd62d8fb6510cfa940f297fd175918c44c9e02cd38907a1c6dc = $this->env->getExtension("native_profiler");
        $__internal_4073976f2bfa0bd62d8fb6510cfa940f297fd175918c44c9e02cd38907a1c6dc->enter($__internal_4073976f2bfa0bd62d8fb6510cfa940f297fd175918c44c9e02cd38907a1c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4073976f2bfa0bd62d8fb6510cfa940f297fd175918c44c9e02cd38907a1c6dc->leave($__internal_4073976f2bfa0bd62d8fb6510cfa940f297fd175918c44c9e02cd38907a1c6dc_prof);

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
