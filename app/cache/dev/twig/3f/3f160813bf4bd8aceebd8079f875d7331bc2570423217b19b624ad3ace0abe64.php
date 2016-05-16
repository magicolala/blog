<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c104a5b7ccb056a6a25d8f51faa7408eacf146b9abebf01f620ac3b50a45594a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d659b0225c661038fd57008a3238cf597874c64accaad0f8dbc07281613d1a = $this->env->getExtension("native_profiler");
        $__internal_28d659b0225c661038fd57008a3238cf597874c64accaad0f8dbc07281613d1a->enter($__internal_28d659b0225c661038fd57008a3238cf597874c64accaad0f8dbc07281613d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d659b0225c661038fd57008a3238cf597874c64accaad0f8dbc07281613d1a->leave($__internal_28d659b0225c661038fd57008a3238cf597874c64accaad0f8dbc07281613d1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad9f2320401141cc94103b4e39baf82446f46b603b5185f1057b3efd3679db56 = $this->env->getExtension("native_profiler");
        $__internal_ad9f2320401141cc94103b4e39baf82446f46b603b5185f1057b3efd3679db56->enter($__internal_ad9f2320401141cc94103b4e39baf82446f46b603b5185f1057b3efd3679db56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad9f2320401141cc94103b4e39baf82446f46b603b5185f1057b3efd3679db56->leave($__internal_ad9f2320401141cc94103b4e39baf82446f46b603b5185f1057b3efd3679db56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e64215e2af824ca9ebd3ea82b0e8d88c409b35a44b090d2b3cdde62495e1915 = $this->env->getExtension("native_profiler");
        $__internal_4e64215e2af824ca9ebd3ea82b0e8d88c409b35a44b090d2b3cdde62495e1915->enter($__internal_4e64215e2af824ca9ebd3ea82b0e8d88c409b35a44b090d2b3cdde62495e1915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e64215e2af824ca9ebd3ea82b0e8d88c409b35a44b090d2b3cdde62495e1915->leave($__internal_4e64215e2af824ca9ebd3ea82b0e8d88c409b35a44b090d2b3cdde62495e1915_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8b23aad67c66811c85d38737f81d0394e9aa0831cb6e4b818b5ea3a9e76fa4b = $this->env->getExtension("native_profiler");
        $__internal_a8b23aad67c66811c85d38737f81d0394e9aa0831cb6e4b818b5ea3a9e76fa4b->enter($__internal_a8b23aad67c66811c85d38737f81d0394e9aa0831cb6e4b818b5ea3a9e76fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a8b23aad67c66811c85d38737f81d0394e9aa0831cb6e4b818b5ea3a9e76fa4b->leave($__internal_a8b23aad67c66811c85d38737f81d0394e9aa0831cb6e4b818b5ea3a9e76fa4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
