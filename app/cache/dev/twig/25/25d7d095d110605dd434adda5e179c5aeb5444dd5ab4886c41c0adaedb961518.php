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
        $__internal_2ada9ed2cd1b00d4bdc7f01aae0e8d472b06e342749197b7df725fbbb98e4d84 = $this->env->getExtension("native_profiler");
        $__internal_2ada9ed2cd1b00d4bdc7f01aae0e8d472b06e342749197b7df725fbbb98e4d84->enter($__internal_2ada9ed2cd1b00d4bdc7f01aae0e8d472b06e342749197b7df725fbbb98e4d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ada9ed2cd1b00d4bdc7f01aae0e8d472b06e342749197b7df725fbbb98e4d84->leave($__internal_2ada9ed2cd1b00d4bdc7f01aae0e8d472b06e342749197b7df725fbbb98e4d84_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d915478dc1b81972ccf3e4c9ccaf706d4022c3ef66e49f14c9b31817508c84 = $this->env->getExtension("native_profiler");
        $__internal_65d915478dc1b81972ccf3e4c9ccaf706d4022c3ef66e49f14c9b31817508c84->enter($__internal_65d915478dc1b81972ccf3e4c9ccaf706d4022c3ef66e49f14c9b31817508c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_65d915478dc1b81972ccf3e4c9ccaf706d4022c3ef66e49f14c9b31817508c84->leave($__internal_65d915478dc1b81972ccf3e4c9ccaf706d4022c3ef66e49f14c9b31817508c84_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c30582b8180eda9f7bb66f3ec7c23cfcda1cb4cfd6b257217360050ff266847 = $this->env->getExtension("native_profiler");
        $__internal_4c30582b8180eda9f7bb66f3ec7c23cfcda1cb4cfd6b257217360050ff266847->enter($__internal_4c30582b8180eda9f7bb66f3ec7c23cfcda1cb4cfd6b257217360050ff266847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c30582b8180eda9f7bb66f3ec7c23cfcda1cb4cfd6b257217360050ff266847->leave($__internal_4c30582b8180eda9f7bb66f3ec7c23cfcda1cb4cfd6b257217360050ff266847_prof);

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
