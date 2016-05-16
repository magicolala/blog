<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4b9a61c3afa31628b6090f6aa2bba0613eae66c8ffedcf60f424d5a92e9416e0 extends Twig_Template
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
        $__internal_99e9628d5c50223d7c7fcb4dfec64ced6a2bb600ddd4a927766e7a95e64642bf = $this->env->getExtension("native_profiler");
        $__internal_99e9628d5c50223d7c7fcb4dfec64ced6a2bb600ddd4a927766e7a95e64642bf->enter($__internal_99e9628d5c50223d7c7fcb4dfec64ced6a2bb600ddd4a927766e7a95e64642bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_99e9628d5c50223d7c7fcb4dfec64ced6a2bb600ddd4a927766e7a95e64642bf->leave($__internal_99e9628d5c50223d7c7fcb4dfec64ced6a2bb600ddd4a927766e7a95e64642bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
