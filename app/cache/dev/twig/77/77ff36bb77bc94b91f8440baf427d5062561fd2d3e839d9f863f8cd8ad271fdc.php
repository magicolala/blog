<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_40b3ecdb42100c4b7b3e13606fcae54a5915d496bcc59f9d4ea1762dcc8fc6a0 extends Twig_Template
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
        $__internal_e7b9492566aee26a8dcd573c1aefa01d82bad01ea5ba9e923cb7882c71130899 = $this->env->getExtension("native_profiler");
        $__internal_e7b9492566aee26a8dcd573c1aefa01d82bad01ea5ba9e923cb7882c71130899->enter($__internal_e7b9492566aee26a8dcd573c1aefa01d82bad01ea5ba9e923cb7882c71130899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e7b9492566aee26a8dcd573c1aefa01d82bad01ea5ba9e923cb7882c71130899->leave($__internal_e7b9492566aee26a8dcd573c1aefa01d82bad01ea5ba9e923cb7882c71130899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
