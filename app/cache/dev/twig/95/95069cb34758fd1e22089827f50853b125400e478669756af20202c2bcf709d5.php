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
        $__internal_27ed3eeffce147181d419487f8a1bd130e06ae9a144dd3bbffb2f36bde44bea3 = $this->env->getExtension("native_profiler");
        $__internal_27ed3eeffce147181d419487f8a1bd130e06ae9a144dd3bbffb2f36bde44bea3->enter($__internal_27ed3eeffce147181d419487f8a1bd130e06ae9a144dd3bbffb2f36bde44bea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ed3eeffce147181d419487f8a1bd130e06ae9a144dd3bbffb2f36bde44bea3->leave($__internal_27ed3eeffce147181d419487f8a1bd130e06ae9a144dd3bbffb2f36bde44bea3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0138d1edeaa38f615296930a5a49e8e9f685af93fbc864c682ab87cbfc309814 = $this->env->getExtension("native_profiler");
        $__internal_0138d1edeaa38f615296930a5a49e8e9f685af93fbc864c682ab87cbfc309814->enter($__internal_0138d1edeaa38f615296930a5a49e8e9f685af93fbc864c682ab87cbfc309814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_0138d1edeaa38f615296930a5a49e8e9f685af93fbc864c682ab87cbfc309814->leave($__internal_0138d1edeaa38f615296930a5a49e8e9f685af93fbc864c682ab87cbfc309814_prof);

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
