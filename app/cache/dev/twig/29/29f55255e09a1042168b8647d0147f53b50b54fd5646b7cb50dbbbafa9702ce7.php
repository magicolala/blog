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
        $__internal_0f8e788956735eca150f72d3cdd92f136446969df5b200dbb08d3a38ebdaae5c = $this->env->getExtension("native_profiler");
        $__internal_0f8e788956735eca150f72d3cdd92f136446969df5b200dbb08d3a38ebdaae5c->enter($__internal_0f8e788956735eca150f72d3cdd92f136446969df5b200dbb08d3a38ebdaae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8e788956735eca150f72d3cdd92f136446969df5b200dbb08d3a38ebdaae5c->leave($__internal_0f8e788956735eca150f72d3cdd92f136446969df5b200dbb08d3a38ebdaae5c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f72d2739cd9689e07e607e941b4a837b29b9ca9de70b17ba95e891385773e552 = $this->env->getExtension("native_profiler");
        $__internal_f72d2739cd9689e07e607e941b4a837b29b9ca9de70b17ba95e891385773e552->enter($__internal_f72d2739cd9689e07e607e941b4a837b29b9ca9de70b17ba95e891385773e552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f72d2739cd9689e07e607e941b4a837b29b9ca9de70b17ba95e891385773e552->leave($__internal_f72d2739cd9689e07e607e941b4a837b29b9ca9de70b17ba95e891385773e552_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a1030e0f10ae4a7683ea15708d31595389111710989bb7c29ff9830a701c329f = $this->env->getExtension("native_profiler");
        $__internal_a1030e0f10ae4a7683ea15708d31595389111710989bb7c29ff9830a701c329f->enter($__internal_a1030e0f10ae4a7683ea15708d31595389111710989bb7c29ff9830a701c329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_a1030e0f10ae4a7683ea15708d31595389111710989bb7c29ff9830a701c329f->leave($__internal_a1030e0f10ae4a7683ea15708d31595389111710989bb7c29ff9830a701c329f_prof);

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
