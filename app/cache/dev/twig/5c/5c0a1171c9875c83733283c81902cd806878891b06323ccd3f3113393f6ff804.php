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
        $__internal_ebe0ddb67e94d1d5656f3f8f935acf56127465979174c46ed6ca64dda5e3d59c = $this->env->getExtension("native_profiler");
        $__internal_ebe0ddb67e94d1d5656f3f8f935acf56127465979174c46ed6ca64dda5e3d59c->enter($__internal_ebe0ddb67e94d1d5656f3f8f935acf56127465979174c46ed6ca64dda5e3d59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe0ddb67e94d1d5656f3f8f935acf56127465979174c46ed6ca64dda5e3d59c->leave($__internal_ebe0ddb67e94d1d5656f3f8f935acf56127465979174c46ed6ca64dda5e3d59c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bb6fbb91ee0d1b924a385956010b731d734e720de3087989cfb1b1b50216676 = $this->env->getExtension("native_profiler");
        $__internal_7bb6fbb91ee0d1b924a385956010b731d734e720de3087989cfb1b1b50216676->enter($__internal_7bb6fbb91ee0d1b924a385956010b731d734e720de3087989cfb1b1b50216676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7bb6fbb91ee0d1b924a385956010b731d734e720de3087989cfb1b1b50216676->leave($__internal_7bb6fbb91ee0d1b924a385956010b731d734e720de3087989cfb1b1b50216676_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1b586f67a5cd6b47d25c32b9770b23673695274b7ca4033b8ea2dde9235eaab = $this->env->getExtension("native_profiler");
        $__internal_d1b586f67a5cd6b47d25c32b9770b23673695274b7ca4033b8ea2dde9235eaab->enter($__internal_d1b586f67a5cd6b47d25c32b9770b23673695274b7ca4033b8ea2dde9235eaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1b586f67a5cd6b47d25c32b9770b23673695274b7ca4033b8ea2dde9235eaab->leave($__internal_d1b586f67a5cd6b47d25c32b9770b23673695274b7ca4033b8ea2dde9235eaab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1a79c4d65a10be34cf5ecd245a04ae0a97ce0610093f3f5dd6c27d509ba718 = $this->env->getExtension("native_profiler");
        $__internal_ca1a79c4d65a10be34cf5ecd245a04ae0a97ce0610093f3f5dd6c27d509ba718->enter($__internal_ca1a79c4d65a10be34cf5ecd245a04ae0a97ce0610093f3f5dd6c27d509ba718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca1a79c4d65a10be34cf5ecd245a04ae0a97ce0610093f3f5dd6c27d509ba718->leave($__internal_ca1a79c4d65a10be34cf5ecd245a04ae0a97ce0610093f3f5dd6c27d509ba718_prof);

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
