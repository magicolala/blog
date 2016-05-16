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
        $__internal_21c2b406b8402324e3604342c4049892a86ad4b4d01f051da5298992ace01273 = $this->env->getExtension("native_profiler");
        $__internal_21c2b406b8402324e3604342c4049892a86ad4b4d01f051da5298992ace01273->enter($__internal_21c2b406b8402324e3604342c4049892a86ad4b4d01f051da5298992ace01273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c2b406b8402324e3604342c4049892a86ad4b4d01f051da5298992ace01273->leave($__internal_21c2b406b8402324e3604342c4049892a86ad4b4d01f051da5298992ace01273_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ecea92e017a1cece1b7217396840c3aeab7db0b8dbd8457ca53ea839ab8328b = $this->env->getExtension("native_profiler");
        $__internal_5ecea92e017a1cece1b7217396840c3aeab7db0b8dbd8457ca53ea839ab8328b->enter($__internal_5ecea92e017a1cece1b7217396840c3aeab7db0b8dbd8457ca53ea839ab8328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ecea92e017a1cece1b7217396840c3aeab7db0b8dbd8457ca53ea839ab8328b->leave($__internal_5ecea92e017a1cece1b7217396840c3aeab7db0b8dbd8457ca53ea839ab8328b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55acb31548554a9076de424eeae6285332602b8d83e515a37600c3da81d1d0bf = $this->env->getExtension("native_profiler");
        $__internal_55acb31548554a9076de424eeae6285332602b8d83e515a37600c3da81d1d0bf->enter($__internal_55acb31548554a9076de424eeae6285332602b8d83e515a37600c3da81d1d0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55acb31548554a9076de424eeae6285332602b8d83e515a37600c3da81d1d0bf->leave($__internal_55acb31548554a9076de424eeae6285332602b8d83e515a37600c3da81d1d0bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2f6d4a0a114cd444070930bccf9d138af8254e79892acf9c04bfeb19aec83db = $this->env->getExtension("native_profiler");
        $__internal_a2f6d4a0a114cd444070930bccf9d138af8254e79892acf9c04bfeb19aec83db->enter($__internal_a2f6d4a0a114cd444070930bccf9d138af8254e79892acf9c04bfeb19aec83db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2f6d4a0a114cd444070930bccf9d138af8254e79892acf9c04bfeb19aec83db->leave($__internal_a2f6d4a0a114cd444070930bccf9d138af8254e79892acf9c04bfeb19aec83db_prof);

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
