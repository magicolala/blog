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
        $__internal_1783e2dd52ddf791b785c8826f81c96f6f3a53d988755e0691b3f98b94f5ade0 = $this->env->getExtension("native_profiler");
        $__internal_1783e2dd52ddf791b785c8826f81c96f6f3a53d988755e0691b3f98b94f5ade0->enter($__internal_1783e2dd52ddf791b785c8826f81c96f6f3a53d988755e0691b3f98b94f5ade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1783e2dd52ddf791b785c8826f81c96f6f3a53d988755e0691b3f98b94f5ade0->leave($__internal_1783e2dd52ddf791b785c8826f81c96f6f3a53d988755e0691b3f98b94f5ade0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b7d1e2efd5e22db6cfa75d7eabc62383881b25287ab69844d2ff0b0c941291c = $this->env->getExtension("native_profiler");
        $__internal_9b7d1e2efd5e22db6cfa75d7eabc62383881b25287ab69844d2ff0b0c941291c->enter($__internal_9b7d1e2efd5e22db6cfa75d7eabc62383881b25287ab69844d2ff0b0c941291c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_9b7d1e2efd5e22db6cfa75d7eabc62383881b25287ab69844d2ff0b0c941291c->leave($__internal_9b7d1e2efd5e22db6cfa75d7eabc62383881b25287ab69844d2ff0b0c941291c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a68289ac50d9c681186e5bd2c669e2cbca3a5ced745935fb67e60db09af806 = $this->env->getExtension("native_profiler");
        $__internal_87a68289ac50d9c681186e5bd2c669e2cbca3a5ced745935fb67e60db09af806->enter($__internal_87a68289ac50d9c681186e5bd2c669e2cbca3a5ced745935fb67e60db09af806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87a68289ac50d9c681186e5bd2c669e2cbca3a5ced745935fb67e60db09af806->leave($__internal_87a68289ac50d9c681186e5bd2c669e2cbca3a5ced745935fb67e60db09af806_prof);

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
