<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_15ec50c83ce813bcb084bf837c102c85c79f320e2a12290ed5db0afe87b329f9 extends Twig_Template
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
        $__internal_f8c086467d3ef3b00ea22b7e0bfcdb5437aaac6c8a9f61f7b9c54509eb462bbe = $this->env->getExtension("native_profiler");
        $__internal_f8c086467d3ef3b00ea22b7e0bfcdb5437aaac6c8a9f61f7b9c54509eb462bbe->enter($__internal_f8c086467d3ef3b00ea22b7e0bfcdb5437aaac6c8a9f61f7b9c54509eb462bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f8c086467d3ef3b00ea22b7e0bfcdb5437aaac6c8a9f61f7b9c54509eb462bbe->leave($__internal_f8c086467d3ef3b00ea22b7e0bfcdb5437aaac6c8a9f61f7b9c54509eb462bbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
