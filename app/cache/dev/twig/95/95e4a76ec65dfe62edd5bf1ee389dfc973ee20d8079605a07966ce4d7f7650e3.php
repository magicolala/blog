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
        $__internal_f0baaeb3d81e3cee56cae90591a0dc5edb809b2b632c7e132fa3fddcbe47a941 = $this->env->getExtension("native_profiler");
        $__internal_f0baaeb3d81e3cee56cae90591a0dc5edb809b2b632c7e132fa3fddcbe47a941->enter($__internal_f0baaeb3d81e3cee56cae90591a0dc5edb809b2b632c7e132fa3fddcbe47a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f0baaeb3d81e3cee56cae90591a0dc5edb809b2b632c7e132fa3fddcbe47a941->leave($__internal_f0baaeb3d81e3cee56cae90591a0dc5edb809b2b632c7e132fa3fddcbe47a941_prof);

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
