<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dce54abf48b4129dd83421293090e7098a4dff80170a979314e235301e898fcc extends Twig_Template
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
        $__internal_a5eb199775b9ff88f67dad90625011f93a38b47cdeb58cef46377c377febe527 = $this->env->getExtension("native_profiler");
        $__internal_a5eb199775b9ff88f67dad90625011f93a38b47cdeb58cef46377c377febe527->enter($__internal_a5eb199775b9ff88f67dad90625011f93a38b47cdeb58cef46377c377febe527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a5eb199775b9ff88f67dad90625011f93a38b47cdeb58cef46377c377febe527->leave($__internal_a5eb199775b9ff88f67dad90625011f93a38b47cdeb58cef46377c377febe527_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
