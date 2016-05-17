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
        $__internal_40672fe7b91e69e748e08743cf92853b00eba179ca75638eb8d4d23cf8ef4563 = $this->env->getExtension("native_profiler");
        $__internal_40672fe7b91e69e748e08743cf92853b00eba179ca75638eb8d4d23cf8ef4563->enter($__internal_40672fe7b91e69e748e08743cf92853b00eba179ca75638eb8d4d23cf8ef4563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40672fe7b91e69e748e08743cf92853b00eba179ca75638eb8d4d23cf8ef4563->leave($__internal_40672fe7b91e69e748e08743cf92853b00eba179ca75638eb8d4d23cf8ef4563_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a9555ce52638e182037053020b18a9dd81bc756fd3a982f8c48ae464ab5b2ed = $this->env->getExtension("native_profiler");
        $__internal_0a9555ce52638e182037053020b18a9dd81bc756fd3a982f8c48ae464ab5b2ed->enter($__internal_0a9555ce52638e182037053020b18a9dd81bc756fd3a982f8c48ae464ab5b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a9555ce52638e182037053020b18a9dd81bc756fd3a982f8c48ae464ab5b2ed->leave($__internal_0a9555ce52638e182037053020b18a9dd81bc756fd3a982f8c48ae464ab5b2ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37d4f0f732e635ce8fdf276c520ca2ae2e895eb0ccd28d0ebaf883878df55676 = $this->env->getExtension("native_profiler");
        $__internal_37d4f0f732e635ce8fdf276c520ca2ae2e895eb0ccd28d0ebaf883878df55676->enter($__internal_37d4f0f732e635ce8fdf276c520ca2ae2e895eb0ccd28d0ebaf883878df55676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37d4f0f732e635ce8fdf276c520ca2ae2e895eb0ccd28d0ebaf883878df55676->leave($__internal_37d4f0f732e635ce8fdf276c520ca2ae2e895eb0ccd28d0ebaf883878df55676_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_507ce1e9a6824043c670b0aa483edb23da3695db398b5f2c9e4557a9d0d696f5 = $this->env->getExtension("native_profiler");
        $__internal_507ce1e9a6824043c670b0aa483edb23da3695db398b5f2c9e4557a9d0d696f5->enter($__internal_507ce1e9a6824043c670b0aa483edb23da3695db398b5f2c9e4557a9d0d696f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_507ce1e9a6824043c670b0aa483edb23da3695db398b5f2c9e4557a9d0d696f5->leave($__internal_507ce1e9a6824043c670b0aa483edb23da3695db398b5f2c9e4557a9d0d696f5_prof);

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
