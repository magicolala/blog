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
        $__internal_cfb9ee017f5516f4683f184c47673cd07550b46822620863b3c3c88372ac0c53 = $this->env->getExtension("native_profiler");
        $__internal_cfb9ee017f5516f4683f184c47673cd07550b46822620863b3c3c88372ac0c53->enter($__internal_cfb9ee017f5516f4683f184c47673cd07550b46822620863b3c3c88372ac0c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb9ee017f5516f4683f184c47673cd07550b46822620863b3c3c88372ac0c53->leave($__internal_cfb9ee017f5516f4683f184c47673cd07550b46822620863b3c3c88372ac0c53_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_732b6d0c828b9d557566e8a04ba10f06ca6967692a79638c8616d538771779cf = $this->env->getExtension("native_profiler");
        $__internal_732b6d0c828b9d557566e8a04ba10f06ca6967692a79638c8616d538771779cf->enter($__internal_732b6d0c828b9d557566e8a04ba10f06ca6967692a79638c8616d538771779cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_732b6d0c828b9d557566e8a04ba10f06ca6967692a79638c8616d538771779cf->leave($__internal_732b6d0c828b9d557566e8a04ba10f06ca6967692a79638c8616d538771779cf_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e335c7f675e170eee745b67070a2a48cfe116d94d5b6b6e11d6cdededae40955 = $this->env->getExtension("native_profiler");
        $__internal_e335c7f675e170eee745b67070a2a48cfe116d94d5b6b6e11d6cdededae40955->enter($__internal_e335c7f675e170eee745b67070a2a48cfe116d94d5b6b6e11d6cdededae40955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_e335c7f675e170eee745b67070a2a48cfe116d94d5b6b6e11d6cdededae40955->leave($__internal_e335c7f675e170eee745b67070a2a48cfe116d94d5b6b6e11d6cdededae40955_prof);

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
