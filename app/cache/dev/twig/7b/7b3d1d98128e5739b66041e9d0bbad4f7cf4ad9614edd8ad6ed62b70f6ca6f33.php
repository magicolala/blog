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
        $__internal_70175e8a153b9ae09da83dba9ab0723346e1958d61e89c46a2d628e342400343 = $this->env->getExtension("native_profiler");
        $__internal_70175e8a153b9ae09da83dba9ab0723346e1958d61e89c46a2d628e342400343->enter($__internal_70175e8a153b9ae09da83dba9ab0723346e1958d61e89c46a2d628e342400343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_70175e8a153b9ae09da83dba9ab0723346e1958d61e89c46a2d628e342400343->leave($__internal_70175e8a153b9ae09da83dba9ab0723346e1958d61e89c46a2d628e342400343_prof);

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
