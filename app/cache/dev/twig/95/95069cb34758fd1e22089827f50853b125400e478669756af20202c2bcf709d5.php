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
        $__internal_93d89a30f6fe9bbf7d3d421fa83cfd1320c872bf413995cdf19bdf4a2f638d10 = $this->env->getExtension("native_profiler");
        $__internal_93d89a30f6fe9bbf7d3d421fa83cfd1320c872bf413995cdf19bdf4a2f638d10->enter($__internal_93d89a30f6fe9bbf7d3d421fa83cfd1320c872bf413995cdf19bdf4a2f638d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d89a30f6fe9bbf7d3d421fa83cfd1320c872bf413995cdf19bdf4a2f638d10->leave($__internal_93d89a30f6fe9bbf7d3d421fa83cfd1320c872bf413995cdf19bdf4a2f638d10_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20aeae6dbaf6a15932ac6b7aa2a3c441530e6bdfb1c5fb62d7bc53b6a6f24fb = $this->env->getExtension("native_profiler");
        $__internal_d20aeae6dbaf6a15932ac6b7aa2a3c441530e6bdfb1c5fb62d7bc53b6a6f24fb->enter($__internal_d20aeae6dbaf6a15932ac6b7aa2a3c441530e6bdfb1c5fb62d7bc53b6a6f24fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_d20aeae6dbaf6a15932ac6b7aa2a3c441530e6bdfb1c5fb62d7bc53b6a6f24fb->leave($__internal_d20aeae6dbaf6a15932ac6b7aa2a3c441530e6bdfb1c5fb62d7bc53b6a6f24fb_prof);

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
