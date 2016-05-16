<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_5c093e91b383cc3885809697f51a5831ef33183f2811ac429b9b9c5f6f6d2a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f1dd64835de0b354a50a7e94faed54c298a12f77757b190743890aaa8d34a8e = $this->env->getExtension("native_profiler");
        $__internal_9f1dd64835de0b354a50a7e94faed54c298a12f77757b190743890aaa8d34a8e->enter($__internal_9f1dd64835de0b354a50a7e94faed54c298a12f77757b190743890aaa8d34a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1dd64835de0b354a50a7e94faed54c298a12f77757b190743890aaa8d34a8e->leave($__internal_9f1dd64835de0b354a50a7e94faed54c298a12f77757b190743890aaa8d34a8e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cec448b75740e980376ded413437db153a8017b15dbf035faebe0da57e46ca2f = $this->env->getExtension("native_profiler");
        $__internal_cec448b75740e980376ded413437db153a8017b15dbf035faebe0da57e46ca2f->enter($__internal_cec448b75740e980376ded413437db153a8017b15dbf035faebe0da57e46ca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_cec448b75740e980376ded413437db153a8017b15dbf035faebe0da57e46ca2f->leave($__internal_cec448b75740e980376ded413437db153a8017b15dbf035faebe0da57e46ca2f_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06d834d4109d454047721cfa51f422ecb8e9c43ac550df9992ea2dc52cd37f41 = $this->env->getExtension("native_profiler");
        $__internal_06d834d4109d454047721cfa51f422ecb8e9c43ac550df9992ea2dc52cd37f41->enter($__internal_06d834d4109d454047721cfa51f422ecb8e9c43ac550df9992ea2dc52cd37f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_06d834d4109d454047721cfa51f422ecb8e9c43ac550df9992ea2dc52cd37f41->leave($__internal_06d834d4109d454047721cfa51f422ecb8e9c43ac550df9992ea2dc52cd37f41_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/bloggerblog/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
/* */
