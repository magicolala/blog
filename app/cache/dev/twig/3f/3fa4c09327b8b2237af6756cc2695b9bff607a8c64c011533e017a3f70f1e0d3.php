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
        $__internal_6f0f6f7ef384839b61933a30d7279bec353c6a82496af7eda355d2f07f1df6c1 = $this->env->getExtension("native_profiler");
        $__internal_6f0f6f7ef384839b61933a30d7279bec353c6a82496af7eda355d2f07f1df6c1->enter($__internal_6f0f6f7ef384839b61933a30d7279bec353c6a82496af7eda355d2f07f1df6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0f6f7ef384839b61933a30d7279bec353c6a82496af7eda355d2f07f1df6c1->leave($__internal_6f0f6f7ef384839b61933a30d7279bec353c6a82496af7eda355d2f07f1df6c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d4c623727697b5e487997405a8c0da912b5ff8b71dedc4a9ad25d9aec3838f4 = $this->env->getExtension("native_profiler");
        $__internal_7d4c623727697b5e487997405a8c0da912b5ff8b71dedc4a9ad25d9aec3838f4->enter($__internal_7d4c623727697b5e487997405a8c0da912b5ff8b71dedc4a9ad25d9aec3838f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d4c623727697b5e487997405a8c0da912b5ff8b71dedc4a9ad25d9aec3838f4->leave($__internal_7d4c623727697b5e487997405a8c0da912b5ff8b71dedc4a9ad25d9aec3838f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2811be8b4628f1b929ea7253a284722ad0ce4963f7519be8de5b607346fe1cd = $this->env->getExtension("native_profiler");
        $__internal_b2811be8b4628f1b929ea7253a284722ad0ce4963f7519be8de5b607346fe1cd->enter($__internal_b2811be8b4628f1b929ea7253a284722ad0ce4963f7519be8de5b607346fe1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2811be8b4628f1b929ea7253a284722ad0ce4963f7519be8de5b607346fe1cd->leave($__internal_b2811be8b4628f1b929ea7253a284722ad0ce4963f7519be8de5b607346fe1cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bbf8bf18f8594f7c14e87d76602c9f2a81c5978cd372a32c201266d69829161 = $this->env->getExtension("native_profiler");
        $__internal_5bbf8bf18f8594f7c14e87d76602c9f2a81c5978cd372a32c201266d69829161->enter($__internal_5bbf8bf18f8594f7c14e87d76602c9f2a81c5978cd372a32c201266d69829161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5bbf8bf18f8594f7c14e87d76602c9f2a81c5978cd372a32c201266d69829161->leave($__internal_5bbf8bf18f8594f7c14e87d76602c9f2a81c5978cd372a32c201266d69829161_prof);

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
