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
        $__internal_f0c9c4a092b1326c185658994ad669e0e711f0bd5b60b5d6555d4b21b92e3c3c = $this->env->getExtension("native_profiler");
        $__internal_f0c9c4a092b1326c185658994ad669e0e711f0bd5b60b5d6555d4b21b92e3c3c->enter($__internal_f0c9c4a092b1326c185658994ad669e0e711f0bd5b60b5d6555d4b21b92e3c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c9c4a092b1326c185658994ad669e0e711f0bd5b60b5d6555d4b21b92e3c3c->leave($__internal_f0c9c4a092b1326c185658994ad669e0e711f0bd5b60b5d6555d4b21b92e3c3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_766526e4aed9ba32ff9ed80ae16fe724c4bae680796d94df6600174a2b2c8a82 = $this->env->getExtension("native_profiler");
        $__internal_766526e4aed9ba32ff9ed80ae16fe724c4bae680796d94df6600174a2b2c8a82->enter($__internal_766526e4aed9ba32ff9ed80ae16fe724c4bae680796d94df6600174a2b2c8a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_766526e4aed9ba32ff9ed80ae16fe724c4bae680796d94df6600174a2b2c8a82->leave($__internal_766526e4aed9ba32ff9ed80ae16fe724c4bae680796d94df6600174a2b2c8a82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_522eaba8ed185e50fde6c1980cef18d578500b926914c11c3420308a8f047a02 = $this->env->getExtension("native_profiler");
        $__internal_522eaba8ed185e50fde6c1980cef18d578500b926914c11c3420308a8f047a02->enter($__internal_522eaba8ed185e50fde6c1980cef18d578500b926914c11c3420308a8f047a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_522eaba8ed185e50fde6c1980cef18d578500b926914c11c3420308a8f047a02->leave($__internal_522eaba8ed185e50fde6c1980cef18d578500b926914c11c3420308a8f047a02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_214a0cd2d2e52c2b4dfcded3fb29bd38aad19d44d51f1c32481f8c2f1543e69e = $this->env->getExtension("native_profiler");
        $__internal_214a0cd2d2e52c2b4dfcded3fb29bd38aad19d44d51f1c32481f8c2f1543e69e->enter($__internal_214a0cd2d2e52c2b4dfcded3fb29bd38aad19d44d51f1c32481f8c2f1543e69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_214a0cd2d2e52c2b4dfcded3fb29bd38aad19d44d51f1c32481f8c2f1543e69e->leave($__internal_214a0cd2d2e52c2b4dfcded3fb29bd38aad19d44d51f1c32481f8c2f1543e69e_prof);

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
