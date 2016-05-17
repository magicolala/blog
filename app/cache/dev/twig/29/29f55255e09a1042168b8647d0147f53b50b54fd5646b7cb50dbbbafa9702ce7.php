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
        $__internal_73d908eb91121915f5a88f4b1f9bba4ef2dd12b9fa495b9cd05cd82e5fd9795e = $this->env->getExtension("native_profiler");
        $__internal_73d908eb91121915f5a88f4b1f9bba4ef2dd12b9fa495b9cd05cd82e5fd9795e->enter($__internal_73d908eb91121915f5a88f4b1f9bba4ef2dd12b9fa495b9cd05cd82e5fd9795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d908eb91121915f5a88f4b1f9bba4ef2dd12b9fa495b9cd05cd82e5fd9795e->leave($__internal_73d908eb91121915f5a88f4b1f9bba4ef2dd12b9fa495b9cd05cd82e5fd9795e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a30de409701f4bade3570bde53ef86ba53240cf8903bf1ae6ba542d0e99e6564 = $this->env->getExtension("native_profiler");
        $__internal_a30de409701f4bade3570bde53ef86ba53240cf8903bf1ae6ba542d0e99e6564->enter($__internal_a30de409701f4bade3570bde53ef86ba53240cf8903bf1ae6ba542d0e99e6564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a30de409701f4bade3570bde53ef86ba53240cf8903bf1ae6ba542d0e99e6564->leave($__internal_a30de409701f4bade3570bde53ef86ba53240cf8903bf1ae6ba542d0e99e6564_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bcfae9584effa78181f4447fdefda3ceaa42caa062d76f351d6f5906c0828d8a = $this->env->getExtension("native_profiler");
        $__internal_bcfae9584effa78181f4447fdefda3ceaa42caa062d76f351d6f5906c0828d8a->enter($__internal_bcfae9584effa78181f4447fdefda3ceaa42caa062d76f351d6f5906c0828d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_bcfae9584effa78181f4447fdefda3ceaa42caa062d76f351d6f5906c0828d8a->leave($__internal_bcfae9584effa78181f4447fdefda3ceaa42caa062d76f351d6f5906c0828d8a_prof);

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
