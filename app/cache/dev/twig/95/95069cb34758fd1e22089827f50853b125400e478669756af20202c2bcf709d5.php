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
        $__internal_998273dac6b32f8c7901946d1bae03336b7e2ee2b6163c3b1ff1912350193747 = $this->env->getExtension("native_profiler");
        $__internal_998273dac6b32f8c7901946d1bae03336b7e2ee2b6163c3b1ff1912350193747->enter($__internal_998273dac6b32f8c7901946d1bae03336b7e2ee2b6163c3b1ff1912350193747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998273dac6b32f8c7901946d1bae03336b7e2ee2b6163c3b1ff1912350193747->leave($__internal_998273dac6b32f8c7901946d1bae03336b7e2ee2b6163c3b1ff1912350193747_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6df9d4478757f5bd7249911d48d508339b8787e246a5ecb03558f8830921967b = $this->env->getExtension("native_profiler");
        $__internal_6df9d4478757f5bd7249911d48d508339b8787e246a5ecb03558f8830921967b->enter($__internal_6df9d4478757f5bd7249911d48d508339b8787e246a5ecb03558f8830921967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_6df9d4478757f5bd7249911d48d508339b8787e246a5ecb03558f8830921967b->leave($__internal_6df9d4478757f5bd7249911d48d508339b8787e246a5ecb03558f8830921967b_prof);

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
