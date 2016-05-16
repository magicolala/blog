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
        $__internal_a4fa39df4e6a78567099906d1ec90b2015557acd012e4bb942459380e8c13e48 = $this->env->getExtension("native_profiler");
        $__internal_a4fa39df4e6a78567099906d1ec90b2015557acd012e4bb942459380e8c13e48->enter($__internal_a4fa39df4e6a78567099906d1ec90b2015557acd012e4bb942459380e8c13e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a4fa39df4e6a78567099906d1ec90b2015557acd012e4bb942459380e8c13e48->leave($__internal_a4fa39df4e6a78567099906d1ec90b2015557acd012e4bb942459380e8c13e48_prof);

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
