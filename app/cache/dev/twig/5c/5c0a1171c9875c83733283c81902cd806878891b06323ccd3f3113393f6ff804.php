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
        $__internal_7d30075ff6e8cdaaaafc712a80f970e68a0c56ea364803999ba0726bfd95071f = $this->env->getExtension("native_profiler");
        $__internal_7d30075ff6e8cdaaaafc712a80f970e68a0c56ea364803999ba0726bfd95071f->enter($__internal_7d30075ff6e8cdaaaafc712a80f970e68a0c56ea364803999ba0726bfd95071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d30075ff6e8cdaaaafc712a80f970e68a0c56ea364803999ba0726bfd95071f->leave($__internal_7d30075ff6e8cdaaaafc712a80f970e68a0c56ea364803999ba0726bfd95071f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_226010f27b983f0339286575327b35961bac95e0505e600e320cdc09651e3afd = $this->env->getExtension("native_profiler");
        $__internal_226010f27b983f0339286575327b35961bac95e0505e600e320cdc09651e3afd->enter($__internal_226010f27b983f0339286575327b35961bac95e0505e600e320cdc09651e3afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_226010f27b983f0339286575327b35961bac95e0505e600e320cdc09651e3afd->leave($__internal_226010f27b983f0339286575327b35961bac95e0505e600e320cdc09651e3afd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dec22f82c35bb60cb996775a9694285640905a463d85985d9578590024e31aee = $this->env->getExtension("native_profiler");
        $__internal_dec22f82c35bb60cb996775a9694285640905a463d85985d9578590024e31aee->enter($__internal_dec22f82c35bb60cb996775a9694285640905a463d85985d9578590024e31aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dec22f82c35bb60cb996775a9694285640905a463d85985d9578590024e31aee->leave($__internal_dec22f82c35bb60cb996775a9694285640905a463d85985d9578590024e31aee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e96aaa504517e1294932360a1470e6f4a1c78326078095d7e206f55b644acb5 = $this->env->getExtension("native_profiler");
        $__internal_4e96aaa504517e1294932360a1470e6f4a1c78326078095d7e206f55b644acb5->enter($__internal_4e96aaa504517e1294932360a1470e6f4a1c78326078095d7e206f55b644acb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e96aaa504517e1294932360a1470e6f4a1c78326078095d7e206f55b644acb5->leave($__internal_4e96aaa504517e1294932360a1470e6f4a1c78326078095d7e206f55b644acb5_prof);

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
