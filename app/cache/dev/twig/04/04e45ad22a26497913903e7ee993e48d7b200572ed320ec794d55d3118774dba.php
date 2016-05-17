<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_dca3813ea7a9c292809d95574c770fe4a61573ab5bfa65fe0b8e8d9093d98f81 extends Twig_Template
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
        $__internal_5a6c5c4a064f84a2eb6f9c497b3ce21598499253471fdf4d79da4fb8754c0069 = $this->env->getExtension("native_profiler");
        $__internal_5a6c5c4a064f84a2eb6f9c497b3ce21598499253471fdf4d79da4fb8754c0069->enter($__internal_5a6c5c4a064f84a2eb6f9c497b3ce21598499253471fdf4d79da4fb8754c0069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5a6c5c4a064f84a2eb6f9c497b3ce21598499253471fdf4d79da4fb8754c0069->leave($__internal_5a6c5c4a064f84a2eb6f9c497b3ce21598499253471fdf4d79da4fb8754c0069_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
