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
        $__internal_413cbb13b0f53d9ede0d0d87704b2a09ccc355b823ee34203c45983b95847b65 = $this->env->getExtension("native_profiler");
        $__internal_413cbb13b0f53d9ede0d0d87704b2a09ccc355b823ee34203c45983b95847b65->enter($__internal_413cbb13b0f53d9ede0d0d87704b2a09ccc355b823ee34203c45983b95847b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_413cbb13b0f53d9ede0d0d87704b2a09ccc355b823ee34203c45983b95847b65->leave($__internal_413cbb13b0f53d9ede0d0d87704b2a09ccc355b823ee34203c45983b95847b65_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d0bbbc47e10dca264df9cba8bd1a5c65a52d63105d5a8a5b6921cfb16b4e75f = $this->env->getExtension("native_profiler");
        $__internal_9d0bbbc47e10dca264df9cba8bd1a5c65a52d63105d5a8a5b6921cfb16b4e75f->enter($__internal_9d0bbbc47e10dca264df9cba8bd1a5c65a52d63105d5a8a5b6921cfb16b4e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d0bbbc47e10dca264df9cba8bd1a5c65a52d63105d5a8a5b6921cfb16b4e75f->leave($__internal_9d0bbbc47e10dca264df9cba8bd1a5c65a52d63105d5a8a5b6921cfb16b4e75f_prof);

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
