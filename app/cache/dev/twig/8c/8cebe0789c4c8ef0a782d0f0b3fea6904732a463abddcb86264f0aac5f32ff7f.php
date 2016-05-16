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
        $__internal_b23953f750521f501f028503306d98052066c743dbc4ed6d4ee2c49a65541eff = $this->env->getExtension("native_profiler");
        $__internal_b23953f750521f501f028503306d98052066c743dbc4ed6d4ee2c49a65541eff->enter($__internal_b23953f750521f501f028503306d98052066c743dbc4ed6d4ee2c49a65541eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23953f750521f501f028503306d98052066c743dbc4ed6d4ee2c49a65541eff->leave($__internal_b23953f750521f501f028503306d98052066c743dbc4ed6d4ee2c49a65541eff_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_45bfd5f070b8b96280350b1fef5ccc5b18e8646447da1c417020fe833e2c72a9 = $this->env->getExtension("native_profiler");
        $__internal_45bfd5f070b8b96280350b1fef5ccc5b18e8646447da1c417020fe833e2c72a9->enter($__internal_45bfd5f070b8b96280350b1fef5ccc5b18e8646447da1c417020fe833e2c72a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_45bfd5f070b8b96280350b1fef5ccc5b18e8646447da1c417020fe833e2c72a9->leave($__internal_45bfd5f070b8b96280350b1fef5ccc5b18e8646447da1c417020fe833e2c72a9_prof);

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
