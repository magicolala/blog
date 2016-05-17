<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4ca595b82e821797970ea578ac6a7c111b120ba578387e0a87dd2fbffef83db6 extends Twig_Template
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
        $__internal_b95013d54600bbcb21fc114745932158b2892f91d1321a0975cfe235023fc051 = $this->env->getExtension("native_profiler");
        $__internal_b95013d54600bbcb21fc114745932158b2892f91d1321a0975cfe235023fc051->enter($__internal_b95013d54600bbcb21fc114745932158b2892f91d1321a0975cfe235023fc051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b95013d54600bbcb21fc114745932158b2892f91d1321a0975cfe235023fc051->leave($__internal_b95013d54600bbcb21fc114745932158b2892f91d1321a0975cfe235023fc051_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
