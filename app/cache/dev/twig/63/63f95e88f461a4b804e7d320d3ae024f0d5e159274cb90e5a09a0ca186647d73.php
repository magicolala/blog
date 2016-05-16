<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b0e0a9201ef5640c1fcc6818064cbb329da2c254b38002a79879ab2762011e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d13eb2daf054dd7bd52927ed3bf684bcdf82d660f04c48973a9dd7bf4f96b856 = $this->env->getExtension("native_profiler");
        $__internal_d13eb2daf054dd7bd52927ed3bf684bcdf82d660f04c48973a9dd7bf4f96b856->enter($__internal_d13eb2daf054dd7bd52927ed3bf684bcdf82d660f04c48973a9dd7bf4f96b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13eb2daf054dd7bd52927ed3bf684bcdf82d660f04c48973a9dd7bf4f96b856->leave($__internal_d13eb2daf054dd7bd52927ed3bf684bcdf82d660f04c48973a9dd7bf4f96b856_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa23a8b4556f85c21e92c0e9aa57306454619346096ae5550ffc2adb2eb725b9 = $this->env->getExtension("native_profiler");
        $__internal_aa23a8b4556f85c21e92c0e9aa57306454619346096ae5550ffc2adb2eb725b9->enter($__internal_aa23a8b4556f85c21e92c0e9aa57306454619346096ae5550ffc2adb2eb725b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aa23a8b4556f85c21e92c0e9aa57306454619346096ae5550ffc2adb2eb725b9->leave($__internal_aa23a8b4556f85c21e92c0e9aa57306454619346096ae5550ffc2adb2eb725b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49d0bba494c603d1f260e397f29ab5f88c1e759c2e28e2c6c2ed2c5b6e0c6e23 = $this->env->getExtension("native_profiler");
        $__internal_49d0bba494c603d1f260e397f29ab5f88c1e759c2e28e2c6c2ed2c5b6e0c6e23->enter($__internal_49d0bba494c603d1f260e397f29ab5f88c1e759c2e28e2c6c2ed2c5b6e0c6e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_49d0bba494c603d1f260e397f29ab5f88c1e759c2e28e2c6c2ed2c5b6e0c6e23->leave($__internal_49d0bba494c603d1f260e397f29ab5f88c1e759c2e28e2c6c2ed2c5b6e0c6e23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
