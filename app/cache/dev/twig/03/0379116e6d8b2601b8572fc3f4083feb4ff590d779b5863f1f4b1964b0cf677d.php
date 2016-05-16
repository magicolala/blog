<?php

/* @BloggerBlog/layout.html.twig */
class __TwigTemplate_8fc554a646ca33ad8d3e36821da27bf7858d8e8757b045b97d6911cd52b851a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@BloggerBlog/layout.html.twig", 2);
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
        $__internal_9aeeed96387137cfded4477a8ca11b2e4c89cca8a1c7eebd42ef2639fb994860 = $this->env->getExtension("native_profiler");
        $__internal_9aeeed96387137cfded4477a8ca11b2e4c89cca8a1c7eebd42ef2639fb994860->enter($__internal_9aeeed96387137cfded4477a8ca11b2e4c89cca8a1c7eebd42ef2639fb994860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aeeed96387137cfded4477a8ca11b2e4c89cca8a1c7eebd42ef2639fb994860->leave($__internal_9aeeed96387137cfded4477a8ca11b2e4c89cca8a1c7eebd42ef2639fb994860_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3593037769d6aa6e5280849c01d0f9bd34ec154e8b13a128998e7ac72960467 = $this->env->getExtension("native_profiler");
        $__internal_d3593037769d6aa6e5280849c01d0f9bd34ec154e8b13a128998e7ac72960467->enter($__internal_d3593037769d6aa6e5280849c01d0f9bd34ec154e8b13a128998e7ac72960467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_d3593037769d6aa6e5280849c01d0f9bd34ec154e8b13a128998e7ac72960467->leave($__internal_d3593037769d6aa6e5280849c01d0f9bd34ec154e8b13a128998e7ac72960467_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c00f0998833e6e06cc990caa79fdbc426892ae4b091655ce29b8be9ec6369847 = $this->env->getExtension("native_profiler");
        $__internal_c00f0998833e6e06cc990caa79fdbc426892ae4b091655ce29b8be9ec6369847->enter($__internal_c00f0998833e6e06cc990caa79fdbc426892ae4b091655ce29b8be9ec6369847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_c00f0998833e6e06cc990caa79fdbc426892ae4b091655ce29b8be9ec6369847->leave($__internal_c00f0998833e6e06cc990caa79fdbc426892ae4b091655ce29b8be9ec6369847_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/layout.html.twig";
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
