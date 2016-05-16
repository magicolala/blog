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
        $__internal_5fd02f3b048847923e3312881dfe2acea2ec356969cd81513c7965b8d04a0d52 = $this->env->getExtension("native_profiler");
        $__internal_5fd02f3b048847923e3312881dfe2acea2ec356969cd81513c7965b8d04a0d52->enter($__internal_5fd02f3b048847923e3312881dfe2acea2ec356969cd81513c7965b8d04a0d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5fd02f3b048847923e3312881dfe2acea2ec356969cd81513c7965b8d04a0d52->leave($__internal_5fd02f3b048847923e3312881dfe2acea2ec356969cd81513c7965b8d04a0d52_prof);

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
