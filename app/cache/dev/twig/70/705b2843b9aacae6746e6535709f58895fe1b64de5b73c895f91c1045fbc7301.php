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
        $__internal_9dca245fd0f82c2a33127307d261dc7fd32080461354b9d1320026d1ddd2b8ef = $this->env->getExtension("native_profiler");
        $__internal_9dca245fd0f82c2a33127307d261dc7fd32080461354b9d1320026d1ddd2b8ef->enter($__internal_9dca245fd0f82c2a33127307d261dc7fd32080461354b9d1320026d1ddd2b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dca245fd0f82c2a33127307d261dc7fd32080461354b9d1320026d1ddd2b8ef->leave($__internal_9dca245fd0f82c2a33127307d261dc7fd32080461354b9d1320026d1ddd2b8ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_549ac29d6e9557e5d5fa4052fb7546dce3892491b605960131dbbb129633052a = $this->env->getExtension("native_profiler");
        $__internal_549ac29d6e9557e5d5fa4052fb7546dce3892491b605960131dbbb129633052a->enter($__internal_549ac29d6e9557e5d5fa4052fb7546dce3892491b605960131dbbb129633052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_549ac29d6e9557e5d5fa4052fb7546dce3892491b605960131dbbb129633052a->leave($__internal_549ac29d6e9557e5d5fa4052fb7546dce3892491b605960131dbbb129633052a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7120a2bafa713ebd8e48b46f53fa57e21218f3435f8bb877a24e24029c840131 = $this->env->getExtension("native_profiler");
        $__internal_7120a2bafa713ebd8e48b46f53fa57e21218f3435f8bb877a24e24029c840131->enter($__internal_7120a2bafa713ebd8e48b46f53fa57e21218f3435f8bb877a24e24029c840131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7120a2bafa713ebd8e48b46f53fa57e21218f3435f8bb877a24e24029c840131->leave($__internal_7120a2bafa713ebd8e48b46f53fa57e21218f3435f8bb877a24e24029c840131_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b390db4e60fa65eb25e36f539d5ec3189d7acbeb85cd25f99a618bd8f0eb114 = $this->env->getExtension("native_profiler");
        $__internal_1b390db4e60fa65eb25e36f539d5ec3189d7acbeb85cd25f99a618bd8f0eb114->enter($__internal_1b390db4e60fa65eb25e36f539d5ec3189d7acbeb85cd25f99a618bd8f0eb114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b390db4e60fa65eb25e36f539d5ec3189d7acbeb85cd25f99a618bd8f0eb114->leave($__internal_1b390db4e60fa65eb25e36f539d5ec3189d7acbeb85cd25f99a618bd8f0eb114_prof);

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
