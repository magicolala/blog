<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_caf00109a1e80f7d5772198e68841413b35ba045e7ee84af60f42fe7b2f94389 extends Twig_Template
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
        $__internal_69d47c5e3c2bf08e159b71e1341b021e8c26be422b49d79868f81e34f758b1f6 = $this->env->getExtension("native_profiler");
        $__internal_69d47c5e3c2bf08e159b71e1341b021e8c26be422b49d79868f81e34f758b1f6->enter($__internal_69d47c5e3c2bf08e159b71e1341b021e8c26be422b49d79868f81e34f758b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_69d47c5e3c2bf08e159b71e1341b021e8c26be422b49d79868f81e34f758b1f6->leave($__internal_69d47c5e3c2bf08e159b71e1341b021e8c26be422b49d79868f81e34f758b1f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
