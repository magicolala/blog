<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b1b7d57bceb15c542b05afb250c87f2b1139e5fb245ce83029a61a3e98c283ff extends Twig_Template
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
        $__internal_b78f146b19f2279b8ea63e8c42c09cd78f7768971c5612095566441324d563e0 = $this->env->getExtension("native_profiler");
        $__internal_b78f146b19f2279b8ea63e8c42c09cd78f7768971c5612095566441324d563e0->enter($__internal_b78f146b19f2279b8ea63e8c42c09cd78f7768971c5612095566441324d563e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b78f146b19f2279b8ea63e8c42c09cd78f7768971c5612095566441324d563e0->leave($__internal_b78f146b19f2279b8ea63e8c42c09cd78f7768971c5612095566441324d563e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
