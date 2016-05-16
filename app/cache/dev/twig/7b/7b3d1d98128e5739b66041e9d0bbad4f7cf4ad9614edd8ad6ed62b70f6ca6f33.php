<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d8614c61145340c2ba9aa6e5fa62506d157dae59fceef0f89ceb4d2f797eb769 extends Twig_Template
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
        $__internal_de1c4b21509f64b2c1d5c739105e52ae46b42decfe1a0237ee1e704cf64f90a5 = $this->env->getExtension("native_profiler");
        $__internal_de1c4b21509f64b2c1d5c739105e52ae46b42decfe1a0237ee1e704cf64f90a5->enter($__internal_de1c4b21509f64b2c1d5c739105e52ae46b42decfe1a0237ee1e704cf64f90a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_de1c4b21509f64b2c1d5c739105e52ae46b42decfe1a0237ee1e704cf64f90a5->leave($__internal_de1c4b21509f64b2c1d5c739105e52ae46b42decfe1a0237ee1e704cf64f90a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
