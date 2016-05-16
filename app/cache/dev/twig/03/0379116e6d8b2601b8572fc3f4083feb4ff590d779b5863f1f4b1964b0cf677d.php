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
        $__internal_1716e8b844d74bb0e1e54df75cb207da36e0531ef38cf2bd3e56f4f362355d00 = $this->env->getExtension("native_profiler");
        $__internal_1716e8b844d74bb0e1e54df75cb207da36e0531ef38cf2bd3e56f4f362355d00->enter($__internal_1716e8b844d74bb0e1e54df75cb207da36e0531ef38cf2bd3e56f4f362355d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1716e8b844d74bb0e1e54df75cb207da36e0531ef38cf2bd3e56f4f362355d00->leave($__internal_1716e8b844d74bb0e1e54df75cb207da36e0531ef38cf2bd3e56f4f362355d00_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1566520d8c41287fb1c3e4e9d84cca96db7ff94df7c09c7d1a353a3ef693c1b4 = $this->env->getExtension("native_profiler");
        $__internal_1566520d8c41287fb1c3e4e9d84cca96db7ff94df7c09c7d1a353a3ef693c1b4->enter($__internal_1566520d8c41287fb1c3e4e9d84cca96db7ff94df7c09c7d1a353a3ef693c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1566520d8c41287fb1c3e4e9d84cca96db7ff94df7c09c7d1a353a3ef693c1b4->leave($__internal_1566520d8c41287fb1c3e4e9d84cca96db7ff94df7c09c7d1a353a3ef693c1b4_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3fd6b45a39836086f7af4bd6114181a8b41e840eb7d005cbac7b4ecfa4587215 = $this->env->getExtension("native_profiler");
        $__internal_3fd6b45a39836086f7af4bd6114181a8b41e840eb7d005cbac7b4ecfa4587215->enter($__internal_3fd6b45a39836086f7af4bd6114181a8b41e840eb7d005cbac7b4ecfa4587215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_3fd6b45a39836086f7af4bd6114181a8b41e840eb7d005cbac7b4ecfa4587215->leave($__internal_3fd6b45a39836086f7af4bd6114181a8b41e840eb7d005cbac7b4ecfa4587215_prof);

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
