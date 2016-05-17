<?php

/* @BloggerBlog/Page/index.html.twig */
class __TwigTemplate_48bb44638303ff569c2d5b1e9c3a48220cfb39da4eb2ba2c423a36a0c58f4b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Page/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dee69fb2d8a69e9d3925419a48057812ff304d14a1474a1c176c24ee950d1e9 = $this->env->getExtension("native_profiler");
        $__internal_9dee69fb2d8a69e9d3925419a48057812ff304d14a1474a1c176c24ee950d1e9->enter($__internal_9dee69fb2d8a69e9d3925419a48057812ff304d14a1474a1c176c24ee950d1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dee69fb2d8a69e9d3925419a48057812ff304d14a1474a1c176c24ee950d1e9->leave($__internal_9dee69fb2d8a69e9d3925419a48057812ff304d14a1474a1c176c24ee950d1e9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e37154aecdca71245b0ba7763d102ee15fe8ef783d4743a22c85c2f0f270df0 = $this->env->getExtension("native_profiler");
        $__internal_3e37154aecdca71245b0ba7763d102ee15fe8ef783d4743a22c85c2f0f270df0->enter($__internal_3e37154aecdca71245b0ba7763d102ee15fe8ef783d4743a22c85c2f0f270df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_3e37154aecdca71245b0ba7763d102ee15fe8ef783d4743a22c85c2f0f270df0->leave($__internal_3e37154aecdca71245b0ba7763d102ee15fe8ef783d4743a22c85c2f0f270df0_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Blog homepage*/
/* {% endblock %}*/
/* */
