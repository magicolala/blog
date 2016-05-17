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
        $__internal_6047406a75f45a570c4f42ff03ca30452fa6f4df27129231417188e3183eed8c = $this->env->getExtension("native_profiler");
        $__internal_6047406a75f45a570c4f42ff03ca30452fa6f4df27129231417188e3183eed8c->enter($__internal_6047406a75f45a570c4f42ff03ca30452fa6f4df27129231417188e3183eed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6047406a75f45a570c4f42ff03ca30452fa6f4df27129231417188e3183eed8c->leave($__internal_6047406a75f45a570c4f42ff03ca30452fa6f4df27129231417188e3183eed8c_prof);

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
