<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_40b3ecdb42100c4b7b3e13606fcae54a5915d496bcc59f9d4ea1762dcc8fc6a0 extends Twig_Template
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
        $__internal_bb61ff3c443da98d508e4520b6c193540e88718d69a1044b93b823715b231a47 = $this->env->getExtension("native_profiler");
        $__internal_bb61ff3c443da98d508e4520b6c193540e88718d69a1044b93b823715b231a47->enter($__internal_bb61ff3c443da98d508e4520b6c193540e88718d69a1044b93b823715b231a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bb61ff3c443da98d508e4520b6c193540e88718d69a1044b93b823715b231a47->leave($__internal_bb61ff3c443da98d508e4520b6c193540e88718d69a1044b93b823715b231a47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
