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
        $__internal_6ddaf0f36ea4af2d5e903341600924bc0b7293908a1cd69b57e7e45e43dd2028 = $this->env->getExtension("native_profiler");
        $__internal_6ddaf0f36ea4af2d5e903341600924bc0b7293908a1cd69b57e7e45e43dd2028->enter($__internal_6ddaf0f36ea4af2d5e903341600924bc0b7293908a1cd69b57e7e45e43dd2028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ddaf0f36ea4af2d5e903341600924bc0b7293908a1cd69b57e7e45e43dd2028->leave($__internal_6ddaf0f36ea4af2d5e903341600924bc0b7293908a1cd69b57e7e45e43dd2028_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5928f69a709c6ea0181b188e3af460d2000a86e0c330f097f20bbe258d9cb1bb = $this->env->getExtension("native_profiler");
        $__internal_5928f69a709c6ea0181b188e3af460d2000a86e0c330f097f20bbe258d9cb1bb->enter($__internal_5928f69a709c6ea0181b188e3af460d2000a86e0c330f097f20bbe258d9cb1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5928f69a709c6ea0181b188e3af460d2000a86e0c330f097f20bbe258d9cb1bb->leave($__internal_5928f69a709c6ea0181b188e3af460d2000a86e0c330f097f20bbe258d9cb1bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1df4a8f615c009351260d170ce6a89c60637e01314e0644ae59221ffa67de2dc = $this->env->getExtension("native_profiler");
        $__internal_1df4a8f615c009351260d170ce6a89c60637e01314e0644ae59221ffa67de2dc->enter($__internal_1df4a8f615c009351260d170ce6a89c60637e01314e0644ae59221ffa67de2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1df4a8f615c009351260d170ce6a89c60637e01314e0644ae59221ffa67de2dc->leave($__internal_1df4a8f615c009351260d170ce6a89c60637e01314e0644ae59221ffa67de2dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6b8c5a81854d13524a7dfa391d75be5ee22648c2db36d4568fcd8e50760d825 = $this->env->getExtension("native_profiler");
        $__internal_f6b8c5a81854d13524a7dfa391d75be5ee22648c2db36d4568fcd8e50760d825->enter($__internal_f6b8c5a81854d13524a7dfa391d75be5ee22648c2db36d4568fcd8e50760d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6b8c5a81854d13524a7dfa391d75be5ee22648c2db36d4568fcd8e50760d825->leave($__internal_f6b8c5a81854d13524a7dfa391d75be5ee22648c2db36d4568fcd8e50760d825_prof);

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
