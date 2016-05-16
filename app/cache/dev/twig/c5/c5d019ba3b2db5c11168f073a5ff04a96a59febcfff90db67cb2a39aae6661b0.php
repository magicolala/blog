<?php

/* @BloggerBlog/Page/contact.html.twig */
class __TwigTemplate_e3ea52727032b5e1b87a17bc8810a738899afda7a15c0e463ffe0d377e901395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Page/contact.html.twig", 2);
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
        $__internal_6ab29fa96a12fb0cb89f9ee4a8217322a20bdb6e209a16ace9a6cccc8a007bcf = $this->env->getExtension("native_profiler");
        $__internal_6ab29fa96a12fb0cb89f9ee4a8217322a20bdb6e209a16ace9a6cccc8a007bcf->enter($__internal_6ab29fa96a12fb0cb89f9ee4a8217322a20bdb6e209a16ace9a6cccc8a007bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab29fa96a12fb0cb89f9ee4a8217322a20bdb6e209a16ace9a6cccc8a007bcf->leave($__internal_6ab29fa96a12fb0cb89f9ee4a8217322a20bdb6e209a16ace9a6cccc8a007bcf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_332f9e2dbc32bd012c489eb3d1c2492a77ddf5b0525d68ab38422092479ff6f8 = $this->env->getExtension("native_profiler");
        $__internal_332f9e2dbc32bd012c489eb3d1c2492a77ddf5b0525d68ab38422092479ff6f8->enter($__internal_332f9e2dbc32bd012c489eb3d1c2492a77ddf5b0525d68ab38422092479ff6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_332f9e2dbc32bd012c489eb3d1c2492a77ddf5b0525d68ab38422092479ff6f8->leave($__internal_332f9e2dbc32bd012c489eb3d1c2492a77ddf5b0525d68ab38422092479ff6f8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_441253bf0d45aa9eac0ab7ae66487825343376d4f13cf73bc9df7441131dd93e = $this->env->getExtension("native_profiler");
        $__internal_441253bf0d45aa9eac0ab7ae66487825343376d4f13cf73bc9df7441131dd93e->enter($__internal_441253bf0d45aa9eac0ab7ae66487825343376d4f13cf73bc9df7441131dd93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
    <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 12
            echo "    <div class=\"blogger-notice\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 16
        echo "
    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
        
        $__internal_441253bf0d45aa9eac0ab7ae66487825343376d4f13cf73bc9df7441131dd93e->leave($__internal_441253bf0d45aa9eac0ab7ae66487825343376d4f13cf73bc9df7441131dd93e_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  81 => 20,  75 => 19,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*     <h1>Contact symblog</h1>*/
/*     </header>*/
/* */
/*     {% if app.session.hasFlash('blogger-notice') %}*/
/*     <div class="blogger-notice">*/
/*         {{ app.session.flash('blogger-notice') }}*/
/*     </div>*/
/*     {% endif %}*/
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
