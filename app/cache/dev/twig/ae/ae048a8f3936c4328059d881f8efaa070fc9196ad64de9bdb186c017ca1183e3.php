<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3926bb4a8dc1b393fa8f764046e7979aa82e470323da9fd5e4115b39e0b7407c extends Twig_Template
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
        $__internal_740783fcde4684d749c4353cc7ffd12f5b9d7bc2d37c0d2a6c06152328ca8b30 = $this->env->getExtension("native_profiler");
        $__internal_740783fcde4684d749c4353cc7ffd12f5b9d7bc2d37c0d2a6c06152328ca8b30->enter($__internal_740783fcde4684d749c4353cc7ffd12f5b9d7bc2d37c0d2a6c06152328ca8b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_740783fcde4684d749c4353cc7ffd12f5b9d7bc2d37c0d2a6c06152328ca8b30->leave($__internal_740783fcde4684d749c4353cc7ffd12f5b9d7bc2d37c0d2a6c06152328ca8b30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
