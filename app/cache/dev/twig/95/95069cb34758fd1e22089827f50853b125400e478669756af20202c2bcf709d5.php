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
        $__internal_210f78aa8943e45b5ab6a6404890736abcc693758318032a12cd4e17b7093176 = $this->env->getExtension("native_profiler");
        $__internal_210f78aa8943e45b5ab6a6404890736abcc693758318032a12cd4e17b7093176->enter($__internal_210f78aa8943e45b5ab6a6404890736abcc693758318032a12cd4e17b7093176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210f78aa8943e45b5ab6a6404890736abcc693758318032a12cd4e17b7093176->leave($__internal_210f78aa8943e45b5ab6a6404890736abcc693758318032a12cd4e17b7093176_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_30ef9690c8e5e92dec72465c1d40b7bcd85f19b0aa139bf35444784ea46763cc = $this->env->getExtension("native_profiler");
        $__internal_30ef9690c8e5e92dec72465c1d40b7bcd85f19b0aa139bf35444784ea46763cc->enter($__internal_30ef9690c8e5e92dec72465c1d40b7bcd85f19b0aa139bf35444784ea46763cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_30ef9690c8e5e92dec72465c1d40b7bcd85f19b0aa139bf35444784ea46763cc->leave($__internal_30ef9690c8e5e92dec72465c1d40b7bcd85f19b0aa139bf35444784ea46763cc_prof);

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
