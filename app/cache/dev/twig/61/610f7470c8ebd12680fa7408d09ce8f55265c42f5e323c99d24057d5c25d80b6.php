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
        $__internal_5d5a023894b5544375d956b9893013ec82b8efb0b7476ad128508c6897159818 = $this->env->getExtension("native_profiler");
        $__internal_5d5a023894b5544375d956b9893013ec82b8efb0b7476ad128508c6897159818->enter($__internal_5d5a023894b5544375d956b9893013ec82b8efb0b7476ad128508c6897159818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5d5a023894b5544375d956b9893013ec82b8efb0b7476ad128508c6897159818->leave($__internal_5d5a023894b5544375d956b9893013ec82b8efb0b7476ad128508c6897159818_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_674b5379ba488d9a847320859de7f3ea534bbc90b55e759d8308873b1c046573 = $this->env->getExtension("native_profiler");
        $__internal_674b5379ba488d9a847320859de7f3ea534bbc90b55e759d8308873b1c046573->enter($__internal_674b5379ba488d9a847320859de7f3ea534bbc90b55e759d8308873b1c046573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_674b5379ba488d9a847320859de7f3ea534bbc90b55e759d8308873b1c046573->leave($__internal_674b5379ba488d9a847320859de7f3ea534bbc90b55e759d8308873b1c046573_prof);

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
