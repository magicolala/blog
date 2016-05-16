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
        $__internal_e1859f0f33371b04625c68f24978c90a9f6c6b16cd90a2de8832e684376ecbe3 = $this->env->getExtension("native_profiler");
        $__internal_e1859f0f33371b04625c68f24978c90a9f6c6b16cd90a2de8832e684376ecbe3->enter($__internal_e1859f0f33371b04625c68f24978c90a9f6c6b16cd90a2de8832e684376ecbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1859f0f33371b04625c68f24978c90a9f6c6b16cd90a2de8832e684376ecbe3->leave($__internal_e1859f0f33371b04625c68f24978c90a9f6c6b16cd90a2de8832e684376ecbe3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77ebe2d95a065faeae28e05fbaac8c120b043d6e71331e8bb0dce8d83f91c078 = $this->env->getExtension("native_profiler");
        $__internal_77ebe2d95a065faeae28e05fbaac8c120b043d6e71331e8bb0dce8d83f91c078->enter($__internal_77ebe2d95a065faeae28e05fbaac8c120b043d6e71331e8bb0dce8d83f91c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77ebe2d95a065faeae28e05fbaac8c120b043d6e71331e8bb0dce8d83f91c078->leave($__internal_77ebe2d95a065faeae28e05fbaac8c120b043d6e71331e8bb0dce8d83f91c078_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e03689c26e079a71bbcf9a303791852afeb9adf1e37cb751e81a8190e69e636 = $this->env->getExtension("native_profiler");
        $__internal_0e03689c26e079a71bbcf9a303791852afeb9adf1e37cb751e81a8190e69e636->enter($__internal_0e03689c26e079a71bbcf9a303791852afeb9adf1e37cb751e81a8190e69e636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e03689c26e079a71bbcf9a303791852afeb9adf1e37cb751e81a8190e69e636->leave($__internal_0e03689c26e079a71bbcf9a303791852afeb9adf1e37cb751e81a8190e69e636_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d50886fbf77e042bdc7203dfe123e3649df4a126a3cac721d594b86e1bcf4125 = $this->env->getExtension("native_profiler");
        $__internal_d50886fbf77e042bdc7203dfe123e3649df4a126a3cac721d594b86e1bcf4125->enter($__internal_d50886fbf77e042bdc7203dfe123e3649df4a126a3cac721d594b86e1bcf4125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d50886fbf77e042bdc7203dfe123e3649df4a126a3cac721d594b86e1bcf4125->leave($__internal_d50886fbf77e042bdc7203dfe123e3649df4a126a3cac721d594b86e1bcf4125_prof);

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
