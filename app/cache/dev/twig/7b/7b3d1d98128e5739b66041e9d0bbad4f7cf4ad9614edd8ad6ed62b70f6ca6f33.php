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
        $__internal_a19498a0eb9c9bef4010dc4b98ddd0eb1b61f9b5a7f8c5031a5f498a0dddac8d = $this->env->getExtension("native_profiler");
        $__internal_a19498a0eb9c9bef4010dc4b98ddd0eb1b61f9b5a7f8c5031a5f498a0dddac8d->enter($__internal_a19498a0eb9c9bef4010dc4b98ddd0eb1b61f9b5a7f8c5031a5f498a0dddac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a19498a0eb9c9bef4010dc4b98ddd0eb1b61f9b5a7f8c5031a5f498a0dddac8d->leave($__internal_a19498a0eb9c9bef4010dc4b98ddd0eb1b61f9b5a7f8c5031a5f498a0dddac8d_prof);

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
