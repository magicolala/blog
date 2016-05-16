<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_beb5a379a4fbd7d21ad02ccb20c0501da87508e180a1639ea0be29586ac567f2 extends Twig_Template
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
        $__internal_7639b1e35b52c40697c71084ada09370909a3b088aaa97b421348dabbd894e6b = $this->env->getExtension("native_profiler");
        $__internal_7639b1e35b52c40697c71084ada09370909a3b088aaa97b421348dabbd894e6b->enter($__internal_7639b1e35b52c40697c71084ada09370909a3b088aaa97b421348dabbd894e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7639b1e35b52c40697c71084ada09370909a3b088aaa97b421348dabbd894e6b->leave($__internal_7639b1e35b52c40697c71084ada09370909a3b088aaa97b421348dabbd894e6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
