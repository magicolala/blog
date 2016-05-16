<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9d207121940cdea7c50433531bb787dccd8034714cb1e9780c565b9844ddede3 extends Twig_Template
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
        $__internal_80a4eefb89b29766edd0df549aa0044f992cbc804c3b41b8b3a0b5fd0f538749 = $this->env->getExtension("native_profiler");
        $__internal_80a4eefb89b29766edd0df549aa0044f992cbc804c3b41b8b3a0b5fd0f538749->enter($__internal_80a4eefb89b29766edd0df549aa0044f992cbc804c3b41b8b3a0b5fd0f538749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_80a4eefb89b29766edd0df549aa0044f992cbc804c3b41b8b3a0b5fd0f538749->leave($__internal_80a4eefb89b29766edd0df549aa0044f992cbc804c3b41b8b3a0b5fd0f538749_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
