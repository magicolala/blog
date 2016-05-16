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
        $__internal_b9fd92c05adca7ead72c529884ef7a2723efe6d570ca7f9857a29dec3cf3dca7 = $this->env->getExtension("native_profiler");
        $__internal_b9fd92c05adca7ead72c529884ef7a2723efe6d570ca7f9857a29dec3cf3dca7->enter($__internal_b9fd92c05adca7ead72c529884ef7a2723efe6d570ca7f9857a29dec3cf3dca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fd92c05adca7ead72c529884ef7a2723efe6d570ca7f9857a29dec3cf3dca7->leave($__internal_b9fd92c05adca7ead72c529884ef7a2723efe6d570ca7f9857a29dec3cf3dca7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e9cc741173c0496b29aa84367afb11b331278e5d00bafb8b621d35633a43055 = $this->env->getExtension("native_profiler");
        $__internal_8e9cc741173c0496b29aa84367afb11b331278e5d00bafb8b621d35633a43055->enter($__internal_8e9cc741173c0496b29aa84367afb11b331278e5d00bafb8b621d35633a43055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e9cc741173c0496b29aa84367afb11b331278e5d00bafb8b621d35633a43055->leave($__internal_8e9cc741173c0496b29aa84367afb11b331278e5d00bafb8b621d35633a43055_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94198db3dfc8a5cd46e5cf46678654521de3939a5a78c478f0638b04e1eacbbc = $this->env->getExtension("native_profiler");
        $__internal_94198db3dfc8a5cd46e5cf46678654521de3939a5a78c478f0638b04e1eacbbc->enter($__internal_94198db3dfc8a5cd46e5cf46678654521de3939a5a78c478f0638b04e1eacbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94198db3dfc8a5cd46e5cf46678654521de3939a5a78c478f0638b04e1eacbbc->leave($__internal_94198db3dfc8a5cd46e5cf46678654521de3939a5a78c478f0638b04e1eacbbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_324b1ce0807fc8801fa04c5e7e416e40a36f7688dad16e5f386e9afd65dbfa7a = $this->env->getExtension("native_profiler");
        $__internal_324b1ce0807fc8801fa04c5e7e416e40a36f7688dad16e5f386e9afd65dbfa7a->enter($__internal_324b1ce0807fc8801fa04c5e7e416e40a36f7688dad16e5f386e9afd65dbfa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_324b1ce0807fc8801fa04c5e7e416e40a36f7688dad16e5f386e9afd65dbfa7a->leave($__internal_324b1ce0807fc8801fa04c5e7e416e40a36f7688dad16e5f386e9afd65dbfa7a_prof);

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
