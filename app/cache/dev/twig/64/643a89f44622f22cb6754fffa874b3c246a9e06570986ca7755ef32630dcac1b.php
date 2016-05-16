<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f546333fee153be23bde9ec9c967f459d3d7a94aea67271d1c84177a12290bc9 extends Twig_Template
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
        $__internal_049b320e33677683b570e0f566a1df159bce6ae770116a544b67145201a16da7 = $this->env->getExtension("native_profiler");
        $__internal_049b320e33677683b570e0f566a1df159bce6ae770116a544b67145201a16da7->enter($__internal_049b320e33677683b570e0f566a1df159bce6ae770116a544b67145201a16da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_049b320e33677683b570e0f566a1df159bce6ae770116a544b67145201a16da7->leave($__internal_049b320e33677683b570e0f566a1df159bce6ae770116a544b67145201a16da7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
