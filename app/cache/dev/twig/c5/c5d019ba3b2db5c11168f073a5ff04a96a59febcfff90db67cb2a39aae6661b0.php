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
        $__internal_bf90bda43ca04c43a0be9cc7731107bdcb101c2ba5a4493a48799416d15aaeac = $this->env->getExtension("native_profiler");
        $__internal_bf90bda43ca04c43a0be9cc7731107bdcb101c2ba5a4493a48799416d15aaeac->enter($__internal_bf90bda43ca04c43a0be9cc7731107bdcb101c2ba5a4493a48799416d15aaeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf90bda43ca04c43a0be9cc7731107bdcb101c2ba5a4493a48799416d15aaeac->leave($__internal_bf90bda43ca04c43a0be9cc7731107bdcb101c2ba5a4493a48799416d15aaeac_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e290bc1f2c6d7359269bce1469bfc3416086c5794203548c7c545c66a22f0a = $this->env->getExtension("native_profiler");
        $__internal_90e290bc1f2c6d7359269bce1469bfc3416086c5794203548c7c545c66a22f0a->enter($__internal_90e290bc1f2c6d7359269bce1469bfc3416086c5794203548c7c545c66a22f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_90e290bc1f2c6d7359269bce1469bfc3416086c5794203548c7c545c66a22f0a->leave($__internal_90e290bc1f2c6d7359269bce1469bfc3416086c5794203548c7c545c66a22f0a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0ca7188cb24e61ba72b4103d445836efbceba272fccbdd398b42cfe4ce69006 = $this->env->getExtension("native_profiler");
        $__internal_f0ca7188cb24e61ba72b4103d445836efbceba272fccbdd398b42cfe4ce69006->enter($__internal_f0ca7188cb24e61ba72b4103d445836efbceba272fccbdd398b42cfe4ce69006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
    <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <div class=\"blogger-notice\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        
        $__internal_f0ca7188cb24e61ba72b4103d445836efbceba272fccbdd398b42cfe4ce69006->leave($__internal_f0ca7188cb24e61ba72b4103d445836efbceba272fccbdd398b42cfe4ce69006_prof);

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
        return array (  108 => 27,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  86 => 20,  80 => 19,  75 => 16,  66 => 13,  63 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
/*     {% for flashMessage in app.session.flashbag.get('blogger-notice') %}*/
/*     <div class="blogger-notice">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/*     {% endfor %}*/
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
