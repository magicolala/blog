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
        $__internal_2d33c83cb43f38b8fe580372dd939b7773ba1366dcc67448c49b094701f3656b = $this->env->getExtension("native_profiler");
        $__internal_2d33c83cb43f38b8fe580372dd939b7773ba1366dcc67448c49b094701f3656b->enter($__internal_2d33c83cb43f38b8fe580372dd939b7773ba1366dcc67448c49b094701f3656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2d33c83cb43f38b8fe580372dd939b7773ba1366dcc67448c49b094701f3656b->leave($__internal_2d33c83cb43f38b8fe580372dd939b7773ba1366dcc67448c49b094701f3656b_prof);

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