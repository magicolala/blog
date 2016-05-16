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
        $__internal_07cf74cf158076fba0dc233589080a3e57975025320a3656535f2c48fc4526a3 = $this->env->getExtension("native_profiler");
        $__internal_07cf74cf158076fba0dc233589080a3e57975025320a3656535f2c48fc4526a3->enter($__internal_07cf74cf158076fba0dc233589080a3e57975025320a3656535f2c48fc4526a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07cf74cf158076fba0dc233589080a3e57975025320a3656535f2c48fc4526a3->leave($__internal_07cf74cf158076fba0dc233589080a3e57975025320a3656535f2c48fc4526a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72dae784c6fbc444b2ecd36b0234b570fde16d784082b21bc3c71bdfe4811ca1 = $this->env->getExtension("native_profiler");
        $__internal_72dae784c6fbc444b2ecd36b0234b570fde16d784082b21bc3c71bdfe4811ca1->enter($__internal_72dae784c6fbc444b2ecd36b0234b570fde16d784082b21bc3c71bdfe4811ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72dae784c6fbc444b2ecd36b0234b570fde16d784082b21bc3c71bdfe4811ca1->leave($__internal_72dae784c6fbc444b2ecd36b0234b570fde16d784082b21bc3c71bdfe4811ca1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_329da65823eddfcc669892de8b8953a2ac2d8b8c10d423c838a08a4af03a6d30 = $this->env->getExtension("native_profiler");
        $__internal_329da65823eddfcc669892de8b8953a2ac2d8b8c10d423c838a08a4af03a6d30->enter($__internal_329da65823eddfcc669892de8b8953a2ac2d8b8c10d423c838a08a4af03a6d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_329da65823eddfcc669892de8b8953a2ac2d8b8c10d423c838a08a4af03a6d30->leave($__internal_329da65823eddfcc669892de8b8953a2ac2d8b8c10d423c838a08a4af03a6d30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eaf05375002477daf8943adbfa77955494f8164d9a61d7039130e49fab8ff520 = $this->env->getExtension("native_profiler");
        $__internal_eaf05375002477daf8943adbfa77955494f8164d9a61d7039130e49fab8ff520->enter($__internal_eaf05375002477daf8943adbfa77955494f8164d9a61d7039130e49fab8ff520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eaf05375002477daf8943adbfa77955494f8164d9a61d7039130e49fab8ff520->leave($__internal_eaf05375002477daf8943adbfa77955494f8164d9a61d7039130e49fab8ff520_prof);

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
