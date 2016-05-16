<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fe80e57f55bedf1cdd3a3772e3e0e8bed0ff0bbeb060d8f909e7fe9dfa96d1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be399401a7a52bf2e34147c8dccebddae81b31811dfb8318d482583a0cbe7eb = $this->env->getExtension("native_profiler");
        $__internal_7be399401a7a52bf2e34147c8dccebddae81b31811dfb8318d482583a0cbe7eb->enter($__internal_7be399401a7a52bf2e34147c8dccebddae81b31811dfb8318d482583a0cbe7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7be399401a7a52bf2e34147c8dccebddae81b31811dfb8318d482583a0cbe7eb->leave($__internal_7be399401a7a52bf2e34147c8dccebddae81b31811dfb8318d482583a0cbe7eb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a6b316029aa8fc9d791af71cac03fa999a4b62a19da40f7d6dc58d2f39208b0 = $this->env->getExtension("native_profiler");
        $__internal_5a6b316029aa8fc9d791af71cac03fa999a4b62a19da40f7d6dc58d2f39208b0->enter($__internal_5a6b316029aa8fc9d791af71cac03fa999a4b62a19da40f7d6dc58d2f39208b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a6b316029aa8fc9d791af71cac03fa999a4b62a19da40f7d6dc58d2f39208b0->leave($__internal_5a6b316029aa8fc9d791af71cac03fa999a4b62a19da40f7d6dc58d2f39208b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
