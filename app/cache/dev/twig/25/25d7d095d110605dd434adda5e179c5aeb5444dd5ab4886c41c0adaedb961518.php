<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_5a0e804c34a71ecff3ac9e3f26a6f12aaf793bd8c4f5156a67531972d18f0c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03e44b31e994ae2246c4c60b229e39fed3c0aac2b4dd0935aca428d5693bc8e0 = $this->env->getExtension("native_profiler");
        $__internal_03e44b31e994ae2246c4c60b229e39fed3c0aac2b4dd0935aca428d5693bc8e0->enter($__internal_03e44b31e994ae2246c4c60b229e39fed3c0aac2b4dd0935aca428d5693bc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e44b31e994ae2246c4c60b229e39fed3c0aac2b4dd0935aca428d5693bc8e0->leave($__internal_03e44b31e994ae2246c4c60b229e39fed3c0aac2b4dd0935aca428d5693bc8e0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_70882e6c6488c6a9613ebe51197d8bf7a6bcfe8b178f597ac954f409262891d0 = $this->env->getExtension("native_profiler");
        $__internal_70882e6c6488c6a9613ebe51197d8bf7a6bcfe8b178f597ac954f409262891d0->enter($__internal_70882e6c6488c6a9613ebe51197d8bf7a6bcfe8b178f597ac954f409262891d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_70882e6c6488c6a9613ebe51197d8bf7a6bcfe8b178f597ac954f409262891d0->leave($__internal_70882e6c6488c6a9613ebe51197d8bf7a6bcfe8b178f597ac954f409262891d0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2c94006c19c2af5a971410045f0425ddbeec3db64fabdd51ce1cc955cd9dbc = $this->env->getExtension("native_profiler");
        $__internal_db2c94006c19c2af5a971410045f0425ddbeec3db64fabdd51ce1cc955cd9dbc->enter($__internal_db2c94006c19c2af5a971410045f0425ddbeec3db64fabdd51ce1cc955cd9dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
";
        
        $__internal_db2c94006c19c2af5a971410045f0425ddbeec3db64fabdd51ce1cc955cd9dbc->leave($__internal_db2c94006c19c2af5a971410045f0425ddbeec3db64fabdd51ce1cc955cd9dbc_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact symblog</h1>*/
/*     </header>*/
/* */
/*     <p>Want to contact symblog?</p>*/
/* {% endblock %}*/
/* */
