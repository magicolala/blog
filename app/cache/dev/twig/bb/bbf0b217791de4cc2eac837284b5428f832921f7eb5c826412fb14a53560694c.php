<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_54c4a715ad3925ae9a22c2e763cb67f29f3facf7b28ef4110de4a734ec7f5608 extends Twig_Template
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
        $__internal_854a3d5f00e06285269738aefaf7250be71d28d46c088cca2fa010c4f3dc3bfc = $this->env->getExtension("native_profiler");
        $__internal_854a3d5f00e06285269738aefaf7250be71d28d46c088cca2fa010c4f3dc3bfc->enter($__internal_854a3d5f00e06285269738aefaf7250be71d28d46c088cca2fa010c4f3dc3bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_854a3d5f00e06285269738aefaf7250be71d28d46c088cca2fa010c4f3dc3bfc->leave($__internal_854a3d5f00e06285269738aefaf7250be71d28d46c088cca2fa010c4f3dc3bfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
