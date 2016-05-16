<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4b9a61c3afa31628b6090f6aa2bba0613eae66c8ffedcf60f424d5a92e9416e0 extends Twig_Template
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
        $__internal_a5628849e29ada54f9a25e6d80afac77a025154abbc5559208dee9af16b43fa5 = $this->env->getExtension("native_profiler");
        $__internal_a5628849e29ada54f9a25e6d80afac77a025154abbc5559208dee9af16b43fa5->enter($__internal_a5628849e29ada54f9a25e6d80afac77a025154abbc5559208dee9af16b43fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a5628849e29ada54f9a25e6d80afac77a025154abbc5559208dee9af16b43fa5->leave($__internal_a5628849e29ada54f9a25e6d80afac77a025154abbc5559208dee9af16b43fa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
