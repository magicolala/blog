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
        $__internal_810636ed03afcd2f7d735a2e4f0ca124f23d2b65459f92fdbeab3fd3b55a3bb2 = $this->env->getExtension("native_profiler");
        $__internal_810636ed03afcd2f7d735a2e4f0ca124f23d2b65459f92fdbeab3fd3b55a3bb2->enter($__internal_810636ed03afcd2f7d735a2e4f0ca124f23d2b65459f92fdbeab3fd3b55a3bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_810636ed03afcd2f7d735a2e4f0ca124f23d2b65459f92fdbeab3fd3b55a3bb2->leave($__internal_810636ed03afcd2f7d735a2e4f0ca124f23d2b65459f92fdbeab3fd3b55a3bb2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0e1f40c8009cd9e6b80fa62926c31c0abe3d6e601c84a6fdbc992031639f8f5 = $this->env->getExtension("native_profiler");
        $__internal_c0e1f40c8009cd9e6b80fa62926c31c0abe3d6e601c84a6fdbc992031639f8f5->enter($__internal_c0e1f40c8009cd9e6b80fa62926c31c0abe3d6e601c84a6fdbc992031639f8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c0e1f40c8009cd9e6b80fa62926c31c0abe3d6e601c84a6fdbc992031639f8f5->leave($__internal_c0e1f40c8009cd9e6b80fa62926c31c0abe3d6e601c84a6fdbc992031639f8f5_prof);

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
