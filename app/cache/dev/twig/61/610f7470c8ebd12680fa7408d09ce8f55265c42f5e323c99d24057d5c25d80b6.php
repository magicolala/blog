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
        $__internal_2b89bb0739c1591e12a2a2a2489d0f351f21be93d6e0ab409c193943d655d29a = $this->env->getExtension("native_profiler");
        $__internal_2b89bb0739c1591e12a2a2a2489d0f351f21be93d6e0ab409c193943d655d29a->enter($__internal_2b89bb0739c1591e12a2a2a2489d0f351f21be93d6e0ab409c193943d655d29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b89bb0739c1591e12a2a2a2489d0f351f21be93d6e0ab409c193943d655d29a->leave($__internal_2b89bb0739c1591e12a2a2a2489d0f351f21be93d6e0ab409c193943d655d29a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_329cd2791bc05aa4b1ecb30b16f8dbcdc16c137b6b1e423065b38ea3280e0b87 = $this->env->getExtension("native_profiler");
        $__internal_329cd2791bc05aa4b1ecb30b16f8dbcdc16c137b6b1e423065b38ea3280e0b87->enter($__internal_329cd2791bc05aa4b1ecb30b16f8dbcdc16c137b6b1e423065b38ea3280e0b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_329cd2791bc05aa4b1ecb30b16f8dbcdc16c137b6b1e423065b38ea3280e0b87->leave($__internal_329cd2791bc05aa4b1ecb30b16f8dbcdc16c137b6b1e423065b38ea3280e0b87_prof);

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
