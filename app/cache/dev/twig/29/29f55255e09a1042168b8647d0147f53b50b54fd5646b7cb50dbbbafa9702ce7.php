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
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70dfc1130549296288899acc859af65a11020127293e3664f1e671f43532207f = $this->env->getExtension("native_profiler");
        $__internal_70dfc1130549296288899acc859af65a11020127293e3664f1e671f43532207f->enter($__internal_70dfc1130549296288899acc859af65a11020127293e3664f1e671f43532207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70dfc1130549296288899acc859af65a11020127293e3664f1e671f43532207f->leave($__internal_70dfc1130549296288899acc859af65a11020127293e3664f1e671f43532207f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b4b584965666867f50da5962a3511a84a1da550183aa0db6738f12c3b1e1ac83 = $this->env->getExtension("native_profiler");
        $__internal_b4b584965666867f50da5962a3511a84a1da550183aa0db6738f12c3b1e1ac83->enter($__internal_b4b584965666867f50da5962a3511a84a1da550183aa0db6738f12c3b1e1ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_b4b584965666867f50da5962a3511a84a1da550183aa0db6738f12c3b1e1ac83->leave($__internal_b4b584965666867f50da5962a3511a84a1da550183aa0db6738f12c3b1e1ac83_prof);

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
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
/* */
