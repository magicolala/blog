<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_731da8b606af79f2496f730670ee48ab5163cf2e7d7bea67895831cc03fa7d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dd9f3e3e9f33ff9b934df7a034063cc9a09899459e2d2f4e0bac672697224890 = $this->env->getExtension("native_profiler");
        $__internal_dd9f3e3e9f33ff9b934df7a034063cc9a09899459e2d2f4e0bac672697224890->enter($__internal_dd9f3e3e9f33ff9b934df7a034063cc9a09899459e2d2f4e0bac672697224890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9f3e3e9f33ff9b934df7a034063cc9a09899459e2d2f4e0bac672697224890->leave($__internal_dd9f3e3e9f33ff9b934df7a034063cc9a09899459e2d2f4e0bac672697224890_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_deff0d36a4783c16468de2d50825972725474782dd7aaa4f2521f5406955191f = $this->env->getExtension("native_profiler");
        $__internal_deff0d36a4783c16468de2d50825972725474782dd7aaa4f2521f5406955191f->enter($__internal_deff0d36a4783c16468de2d50825972725474782dd7aaa4f2521f5406955191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_deff0d36a4783c16468de2d50825972725474782dd7aaa4f2521f5406955191f->leave($__internal_deff0d36a4783c16468de2d50825972725474782dd7aaa4f2521f5406955191f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db9af7cae5527e17deeea945e63658e48c99e18adf49d37447cd62993df7860 = $this->env->getExtension("native_profiler");
        $__internal_5db9af7cae5527e17deeea945e63658e48c99e18adf49d37447cd62993df7860->enter($__internal_5db9af7cae5527e17deeea945e63658e48c99e18adf49d37447cd62993df7860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5db9af7cae5527e17deeea945e63658e48c99e18adf49d37447cd62993df7860->leave($__internal_5db9af7cae5527e17deeea945e63658e48c99e18adf49d37447cd62993df7860_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8282d4fb25a9a42090b4cb3cb53eafd9288c324d800bef14709b372f7fcbc565 = $this->env->getExtension("native_profiler");
        $__internal_8282d4fb25a9a42090b4cb3cb53eafd9288c324d800bef14709b372f7fcbc565->enter($__internal_8282d4fb25a9a42090b4cb3cb53eafd9288c324d800bef14709b372f7fcbc565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8282d4fb25a9a42090b4cb3cb53eafd9288c324d800bef14709b372f7fcbc565->leave($__internal_8282d4fb25a9a42090b4cb3cb53eafd9288c324d800bef14709b372f7fcbc565_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
