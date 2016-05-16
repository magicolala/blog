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
        $__internal_cdb9750eabea3ff2652b9c74f700363aa56657354c7dfbd705cd372a33b7905e = $this->env->getExtension("native_profiler");
        $__internal_cdb9750eabea3ff2652b9c74f700363aa56657354c7dfbd705cd372a33b7905e->enter($__internal_cdb9750eabea3ff2652b9c74f700363aa56657354c7dfbd705cd372a33b7905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cdb9750eabea3ff2652b9c74f700363aa56657354c7dfbd705cd372a33b7905e->leave($__internal_cdb9750eabea3ff2652b9c74f700363aa56657354c7dfbd705cd372a33b7905e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb25b40641b0a61a4e3ba9a215342a273ecb25f0d580cb98ef116a92d336d053 = $this->env->getExtension("native_profiler");
        $__internal_fb25b40641b0a61a4e3ba9a215342a273ecb25f0d580cb98ef116a92d336d053->enter($__internal_fb25b40641b0a61a4e3ba9a215342a273ecb25f0d580cb98ef116a92d336d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb25b40641b0a61a4e3ba9a215342a273ecb25f0d580cb98ef116a92d336d053->leave($__internal_fb25b40641b0a61a4e3ba9a215342a273ecb25f0d580cb98ef116a92d336d053_prof);

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
