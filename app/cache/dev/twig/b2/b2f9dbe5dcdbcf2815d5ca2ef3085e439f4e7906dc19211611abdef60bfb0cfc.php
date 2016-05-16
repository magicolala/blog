<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_133407000eb317efcb2a31b1ae8fb06d384a0976a42d43c223e249cdf1672b31 extends Twig_Template
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
        $__internal_0d95a318b580b3bcd0faf0ce59074d7dc20a76b7a633f303336a477c8814fe88 = $this->env->getExtension("native_profiler");
        $__internal_0d95a318b580b3bcd0faf0ce59074d7dc20a76b7a633f303336a477c8814fe88->enter($__internal_0d95a318b580b3bcd0faf0ce59074d7dc20a76b7a633f303336a477c8814fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0d95a318b580b3bcd0faf0ce59074d7dc20a76b7a633f303336a477c8814fe88->leave($__internal_0d95a318b580b3bcd0faf0ce59074d7dc20a76b7a633f303336a477c8814fe88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
