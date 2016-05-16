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
        $__internal_ed7ec20693f5a75b68d911ee133cdb048ee6900cc08891f499efcffa93b29397 = $this->env->getExtension("native_profiler");
        $__internal_ed7ec20693f5a75b68d911ee133cdb048ee6900cc08891f499efcffa93b29397->enter($__internal_ed7ec20693f5a75b68d911ee133cdb048ee6900cc08891f499efcffa93b29397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7ec20693f5a75b68d911ee133cdb048ee6900cc08891f499efcffa93b29397->leave($__internal_ed7ec20693f5a75b68d911ee133cdb048ee6900cc08891f499efcffa93b29397_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96038166b2f42195b17b188cdc51fd4ee919e733bca29341bfdb045c80e7cd17 = $this->env->getExtension("native_profiler");
        $__internal_96038166b2f42195b17b188cdc51fd4ee919e733bca29341bfdb045c80e7cd17->enter($__internal_96038166b2f42195b17b188cdc51fd4ee919e733bca29341bfdb045c80e7cd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_96038166b2f42195b17b188cdc51fd4ee919e733bca29341bfdb045c80e7cd17->leave($__internal_96038166b2f42195b17b188cdc51fd4ee919e733bca29341bfdb045c80e7cd17_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f29ce18368114f889950ae1ac4e58e2386ac8b834b477c3e8207978e9b5a03ac = $this->env->getExtension("native_profiler");
        $__internal_f29ce18368114f889950ae1ac4e58e2386ac8b834b477c3e8207978e9b5a03ac->enter($__internal_f29ce18368114f889950ae1ac4e58e2386ac8b834b477c3e8207978e9b5a03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_f29ce18368114f889950ae1ac4e58e2386ac8b834b477c3e8207978e9b5a03ac->leave($__internal_f29ce18368114f889950ae1ac4e58e2386ac8b834b477c3e8207978e9b5a03ac_prof);

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
