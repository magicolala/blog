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
        $__internal_5e58699da1301cb363c64188d6812866a2c7675a796b4136f02675b664e41051 = $this->env->getExtension("native_profiler");
        $__internal_5e58699da1301cb363c64188d6812866a2c7675a796b4136f02675b664e41051->enter($__internal_5e58699da1301cb363c64188d6812866a2c7675a796b4136f02675b664e41051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e58699da1301cb363c64188d6812866a2c7675a796b4136f02675b664e41051->leave($__internal_5e58699da1301cb363c64188d6812866a2c7675a796b4136f02675b664e41051_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_427fd66b8ef1a69209c972202251d6b75e6b157fcd272e7f41274d99bb122e11 = $this->env->getExtension("native_profiler");
        $__internal_427fd66b8ef1a69209c972202251d6b75e6b157fcd272e7f41274d99bb122e11->enter($__internal_427fd66b8ef1a69209c972202251d6b75e6b157fcd272e7f41274d99bb122e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_427fd66b8ef1a69209c972202251d6b75e6b157fcd272e7f41274d99bb122e11->leave($__internal_427fd66b8ef1a69209c972202251d6b75e6b157fcd272e7f41274d99bb122e11_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_953b6d00887e9f16fb9ff0c143e3c22ac41ad57bf9c535f30ea48887b72b4310 = $this->env->getExtension("native_profiler");
        $__internal_953b6d00887e9f16fb9ff0c143e3c22ac41ad57bf9c535f30ea48887b72b4310->enter($__internal_953b6d00887e9f16fb9ff0c143e3c22ac41ad57bf9c535f30ea48887b72b4310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_953b6d00887e9f16fb9ff0c143e3c22ac41ad57bf9c535f30ea48887b72b4310->leave($__internal_953b6d00887e9f16fb9ff0c143e3c22ac41ad57bf9c535f30ea48887b72b4310_prof);

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
