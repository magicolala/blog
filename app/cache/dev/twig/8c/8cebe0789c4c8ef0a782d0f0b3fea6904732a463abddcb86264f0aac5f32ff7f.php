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
        $__internal_811bf05fbff6d80acb2c264f1ff57705774bc71f040fb85241727660c59137d1 = $this->env->getExtension("native_profiler");
        $__internal_811bf05fbff6d80acb2c264f1ff57705774bc71f040fb85241727660c59137d1->enter($__internal_811bf05fbff6d80acb2c264f1ff57705774bc71f040fb85241727660c59137d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811bf05fbff6d80acb2c264f1ff57705774bc71f040fb85241727660c59137d1->leave($__internal_811bf05fbff6d80acb2c264f1ff57705774bc71f040fb85241727660c59137d1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d886dbfe3d8a7c1733589942346ba72178415a291ea3c70be29d97797f8283 = $this->env->getExtension("native_profiler");
        $__internal_63d886dbfe3d8a7c1733589942346ba72178415a291ea3c70be29d97797f8283->enter($__internal_63d886dbfe3d8a7c1733589942346ba72178415a291ea3c70be29d97797f8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_63d886dbfe3d8a7c1733589942346ba72178415a291ea3c70be29d97797f8283->leave($__internal_63d886dbfe3d8a7c1733589942346ba72178415a291ea3c70be29d97797f8283_prof);

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
