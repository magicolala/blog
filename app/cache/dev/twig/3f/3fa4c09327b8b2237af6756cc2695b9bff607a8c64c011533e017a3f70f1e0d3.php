<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c56a2ade7dc98c1f2f6c6b9303d4977a6d9b5af48a9e6d7294c44b5ce35dd9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cf234f7b0f78a501225d3047be1e8b363bb72e17aa5353f004d3550e8ae589e = $this->env->getExtension("native_profiler");
        $__internal_4cf234f7b0f78a501225d3047be1e8b363bb72e17aa5353f004d3550e8ae589e->enter($__internal_4cf234f7b0f78a501225d3047be1e8b363bb72e17aa5353f004d3550e8ae589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf234f7b0f78a501225d3047be1e8b363bb72e17aa5353f004d3550e8ae589e->leave($__internal_4cf234f7b0f78a501225d3047be1e8b363bb72e17aa5353f004d3550e8ae589e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bca0680dc768605a1b8e8b34b283a599f19c047061a4664db509ab920563f52 = $this->env->getExtension("native_profiler");
        $__internal_7bca0680dc768605a1b8e8b34b283a599f19c047061a4664db509ab920563f52->enter($__internal_7bca0680dc768605a1b8e8b34b283a599f19c047061a4664db509ab920563f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bca0680dc768605a1b8e8b34b283a599f19c047061a4664db509ab920563f52->leave($__internal_7bca0680dc768605a1b8e8b34b283a599f19c047061a4664db509ab920563f52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0466f0aa2c3a1bb19bf6c7719257995e7df8fe73144d137917059893568e1dba = $this->env->getExtension("native_profiler");
        $__internal_0466f0aa2c3a1bb19bf6c7719257995e7df8fe73144d137917059893568e1dba->enter($__internal_0466f0aa2c3a1bb19bf6c7719257995e7df8fe73144d137917059893568e1dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0466f0aa2c3a1bb19bf6c7719257995e7df8fe73144d137917059893568e1dba->leave($__internal_0466f0aa2c3a1bb19bf6c7719257995e7df8fe73144d137917059893568e1dba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bd763594e8f4c5740003ca78adb0df78b7ced910a9339e783e606614f26a8e2 = $this->env->getExtension("native_profiler");
        $__internal_8bd763594e8f4c5740003ca78adb0df78b7ced910a9339e783e606614f26a8e2->enter($__internal_8bd763594e8f4c5740003ca78adb0df78b7ced910a9339e783e606614f26a8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8bd763594e8f4c5740003ca78adb0df78b7ced910a9339e783e606614f26a8e2->leave($__internal_8bd763594e8f4c5740003ca78adb0df78b7ced910a9339e783e606614f26a8e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
