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
        $__internal_09e265d314626be0287f389aa982e81839c9d909f6df0973072e0fb9a01ef2db = $this->env->getExtension("native_profiler");
        $__internal_09e265d314626be0287f389aa982e81839c9d909f6df0973072e0fb9a01ef2db->enter($__internal_09e265d314626be0287f389aa982e81839c9d909f6df0973072e0fb9a01ef2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e265d314626be0287f389aa982e81839c9d909f6df0973072e0fb9a01ef2db->leave($__internal_09e265d314626be0287f389aa982e81839c9d909f6df0973072e0fb9a01ef2db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f665f15fa6bd2cd8708bcc2b56c31f0aaa6349c76abc1770882e8e6950fde153 = $this->env->getExtension("native_profiler");
        $__internal_f665f15fa6bd2cd8708bcc2b56c31f0aaa6349c76abc1770882e8e6950fde153->enter($__internal_f665f15fa6bd2cd8708bcc2b56c31f0aaa6349c76abc1770882e8e6950fde153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f665f15fa6bd2cd8708bcc2b56c31f0aaa6349c76abc1770882e8e6950fde153->leave($__internal_f665f15fa6bd2cd8708bcc2b56c31f0aaa6349c76abc1770882e8e6950fde153_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed0813c6607d3f230d343af163b03f9d2990d562452e6066535c181f537e2101 = $this->env->getExtension("native_profiler");
        $__internal_ed0813c6607d3f230d343af163b03f9d2990d562452e6066535c181f537e2101->enter($__internal_ed0813c6607d3f230d343af163b03f9d2990d562452e6066535c181f537e2101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed0813c6607d3f230d343af163b03f9d2990d562452e6066535c181f537e2101->leave($__internal_ed0813c6607d3f230d343af163b03f9d2990d562452e6066535c181f537e2101_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b67acbe151a2b1dceed4c4ece34ba8a8c0c209d49e26bb86ed06102da2b8f10 = $this->env->getExtension("native_profiler");
        $__internal_5b67acbe151a2b1dceed4c4ece34ba8a8c0c209d49e26bb86ed06102da2b8f10->enter($__internal_5b67acbe151a2b1dceed4c4ece34ba8a8c0c209d49e26bb86ed06102da2b8f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5b67acbe151a2b1dceed4c4ece34ba8a8c0c209d49e26bb86ed06102da2b8f10->leave($__internal_5b67acbe151a2b1dceed4c4ece34ba8a8c0c209d49e26bb86ed06102da2b8f10_prof);

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
