<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_dbef6e71b953229bfbd72330d08a53418c8ceaced3da82dddbb682aeb0ee8ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
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
        $__internal_0e666068746abf7f3ad04c7f7f6ef04b389abf7b6a6d62c43501fa9ccd068270 = $this->env->getExtension("native_profiler");
        $__internal_0e666068746abf7f3ad04c7f7f6ef04b389abf7b6a6d62c43501fa9ccd068270->enter($__internal_0e666068746abf7f3ad04c7f7f6ef04b389abf7b6a6d62c43501fa9ccd068270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e666068746abf7f3ad04c7f7f6ef04b389abf7b6a6d62c43501fa9ccd068270->leave($__internal_0e666068746abf7f3ad04c7f7f6ef04b389abf7b6a6d62c43501fa9ccd068270_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b422b0cc54887d24ab8f83d74c4af2311811e98b7e4fbf243db76e86387ab03 = $this->env->getExtension("native_profiler");
        $__internal_0b422b0cc54887d24ab8f83d74c4af2311811e98b7e4fbf243db76e86387ab03->enter($__internal_0b422b0cc54887d24ab8f83d74c4af2311811e98b7e4fbf243db76e86387ab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_0b422b0cc54887d24ab8f83d74c4af2311811e98b7e4fbf243db76e86387ab03->leave($__internal_0b422b0cc54887d24ab8f83d74c4af2311811e98b7e4fbf243db76e86387ab03_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
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
