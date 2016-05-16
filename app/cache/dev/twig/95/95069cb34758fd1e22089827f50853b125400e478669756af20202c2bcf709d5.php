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
        $__internal_c10c8e020dbecee28782b931e77e322429b3b7a410748998fcdca7104865d00b = $this->env->getExtension("native_profiler");
        $__internal_c10c8e020dbecee28782b931e77e322429b3b7a410748998fcdca7104865d00b->enter($__internal_c10c8e020dbecee28782b931e77e322429b3b7a410748998fcdca7104865d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10c8e020dbecee28782b931e77e322429b3b7a410748998fcdca7104865d00b->leave($__internal_c10c8e020dbecee28782b931e77e322429b3b7a410748998fcdca7104865d00b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce2da64c8a27c478bbc67228123292ddd707bbb43ee9fa52bd43414b65776c8 = $this->env->getExtension("native_profiler");
        $__internal_9ce2da64c8a27c478bbc67228123292ddd707bbb43ee9fa52bd43414b65776c8->enter($__internal_9ce2da64c8a27c478bbc67228123292ddd707bbb43ee9fa52bd43414b65776c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_9ce2da64c8a27c478bbc67228123292ddd707bbb43ee9fa52bd43414b65776c8->leave($__internal_9ce2da64c8a27c478bbc67228123292ddd707bbb43ee9fa52bd43414b65776c8_prof);

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
