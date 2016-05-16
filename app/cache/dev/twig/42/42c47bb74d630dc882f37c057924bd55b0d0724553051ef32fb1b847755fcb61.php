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
        $__internal_0b230a3c291406a41859082839596f968e41f5a00a79db82e5cfb9f8556b40c9 = $this->env->getExtension("native_profiler");
        $__internal_0b230a3c291406a41859082839596f968e41f5a00a79db82e5cfb9f8556b40c9->enter($__internal_0b230a3c291406a41859082839596f968e41f5a00a79db82e5cfb9f8556b40c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b230a3c291406a41859082839596f968e41f5a00a79db82e5cfb9f8556b40c9->leave($__internal_0b230a3c291406a41859082839596f968e41f5a00a79db82e5cfb9f8556b40c9_prof);

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
