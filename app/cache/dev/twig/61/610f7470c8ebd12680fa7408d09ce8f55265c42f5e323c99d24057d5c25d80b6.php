<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_84ff60b52dd049b357e1d1b76729e93dc5d3093fa0839962768eda336aef0c9b extends Twig_Template
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
        $__internal_f72322e1c61bf2aeff1ac2b5d21fc02324d12d65259eabcbe43fbcb4ac00b7e4 = $this->env->getExtension("native_profiler");
        $__internal_f72322e1c61bf2aeff1ac2b5d21fc02324d12d65259eabcbe43fbcb4ac00b7e4->enter($__internal_f72322e1c61bf2aeff1ac2b5d21fc02324d12d65259eabcbe43fbcb4ac00b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f72322e1c61bf2aeff1ac2b5d21fc02324d12d65259eabcbe43fbcb4ac00b7e4->leave($__internal_f72322e1c61bf2aeff1ac2b5d21fc02324d12d65259eabcbe43fbcb4ac00b7e4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85dc9704742151041d823e088cce515252729fc9e7ef336ea3a5b3661cfbe9bb = $this->env->getExtension("native_profiler");
        $__internal_85dc9704742151041d823e088cce515252729fc9e7ef336ea3a5b3661cfbe9bb->enter($__internal_85dc9704742151041d823e088cce515252729fc9e7ef336ea3a5b3661cfbe9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85dc9704742151041d823e088cce515252729fc9e7ef336ea3a5b3661cfbe9bb->leave($__internal_85dc9704742151041d823e088cce515252729fc9e7ef336ea3a5b3661cfbe9bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
