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
        $__internal_5880e99e1edd4237d4f5ae58b390c05affde3b10fdae3d1f07bfe9df740f2ea6 = $this->env->getExtension("native_profiler");
        $__internal_5880e99e1edd4237d4f5ae58b390c05affde3b10fdae3d1f07bfe9df740f2ea6->enter($__internal_5880e99e1edd4237d4f5ae58b390c05affde3b10fdae3d1f07bfe9df740f2ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5880e99e1edd4237d4f5ae58b390c05affde3b10fdae3d1f07bfe9df740f2ea6->leave($__internal_5880e99e1edd4237d4f5ae58b390c05affde3b10fdae3d1f07bfe9df740f2ea6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_453a090627a927a0e9743c9fcc4f44907ec5c1043995c0e6bb72c9aafe28dc4f = $this->env->getExtension("native_profiler");
        $__internal_453a090627a927a0e9743c9fcc4f44907ec5c1043995c0e6bb72c9aafe28dc4f->enter($__internal_453a090627a927a0e9743c9fcc4f44907ec5c1043995c0e6bb72c9aafe28dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_453a090627a927a0e9743c9fcc4f44907ec5c1043995c0e6bb72c9aafe28dc4f->leave($__internal_453a090627a927a0e9743c9fcc4f44907ec5c1043995c0e6bb72c9aafe28dc4f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0044f3d279ac02a9ae0ed9756bb2d4d5097c8525bd268aad6d4e232b2e9e85b4 = $this->env->getExtension("native_profiler");
        $__internal_0044f3d279ac02a9ae0ed9756bb2d4d5097c8525bd268aad6d4e232b2e9e85b4->enter($__internal_0044f3d279ac02a9ae0ed9756bb2d4d5097c8525bd268aad6d4e232b2e9e85b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
        
        $__internal_0044f3d279ac02a9ae0ed9756bb2d4d5097c8525bd268aad6d4e232b2e9e85b4->leave($__internal_0044f3d279ac02a9ae0ed9756bb2d4d5097c8525bd268aad6d4e232b2e9e85b4_prof);

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
        return array (  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  61 => 13,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
/* */
/*     <form action="{{ path('BloggerBlogBundle_contact') }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.subject) }}*/
/*         {{ form_row(form.body) }}*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         <input type="submit" value="Submit" />*/
/*     </form>*/
/* {% endblock %}*/
/* */
