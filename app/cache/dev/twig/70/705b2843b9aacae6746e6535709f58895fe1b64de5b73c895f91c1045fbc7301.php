<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_481867a65c78f78e5f97979bf3385b50187c9f70d4be47b1bf6f06d3e8a2b054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a85d1664fc4577d76e1d203f544ee0763150d55140f2922d75c2a367453ff20f = $this->env->getExtension("native_profiler");
        $__internal_a85d1664fc4577d76e1d203f544ee0763150d55140f2922d75c2a367453ff20f->enter($__internal_a85d1664fc4577d76e1d203f544ee0763150d55140f2922d75c2a367453ff20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85d1664fc4577d76e1d203f544ee0763150d55140f2922d75c2a367453ff20f->leave($__internal_a85d1664fc4577d76e1d203f544ee0763150d55140f2922d75c2a367453ff20f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19856d1a2c972bcc2423b8ed478f040054d8a6bd34f63730a6d41416d4b2ec36 = $this->env->getExtension("native_profiler");
        $__internal_19856d1a2c972bcc2423b8ed478f040054d8a6bd34f63730a6d41416d4b2ec36->enter($__internal_19856d1a2c972bcc2423b8ed478f040054d8a6bd34f63730a6d41416d4b2ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19856d1a2c972bcc2423b8ed478f040054d8a6bd34f63730a6d41416d4b2ec36->leave($__internal_19856d1a2c972bcc2423b8ed478f040054d8a6bd34f63730a6d41416d4b2ec36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b88a159e0145a0cb02522ff367f0745f61f7dfee45e058e46ed4cdfd8154686 = $this->env->getExtension("native_profiler");
        $__internal_8b88a159e0145a0cb02522ff367f0745f61f7dfee45e058e46ed4cdfd8154686->enter($__internal_8b88a159e0145a0cb02522ff367f0745f61f7dfee45e058e46ed4cdfd8154686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b88a159e0145a0cb02522ff367f0745f61f7dfee45e058e46ed4cdfd8154686->leave($__internal_8b88a159e0145a0cb02522ff367f0745f61f7dfee45e058e46ed4cdfd8154686_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce6ab3d3e9821f248cb4278a8cb9d48a9c2826c24644a5c3675f0add6345c760 = $this->env->getExtension("native_profiler");
        $__internal_ce6ab3d3e9821f248cb4278a8cb9d48a9c2826c24644a5c3675f0add6345c760->enter($__internal_ce6ab3d3e9821f248cb4278a8cb9d48a9c2826c24644a5c3675f0add6345c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce6ab3d3e9821f248cb4278a8cb9d48a9c2826c24644a5c3675f0add6345c760->leave($__internal_ce6ab3d3e9821f248cb4278a8cb9d48a9c2826c24644a5c3675f0add6345c760_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
