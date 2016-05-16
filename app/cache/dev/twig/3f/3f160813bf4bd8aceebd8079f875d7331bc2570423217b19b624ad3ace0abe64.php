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
        $__internal_80270e7f175215f0d9a21c365098cb1a660f218699587f739d0f8d0b34b81265 = $this->env->getExtension("native_profiler");
        $__internal_80270e7f175215f0d9a21c365098cb1a660f218699587f739d0f8d0b34b81265->enter($__internal_80270e7f175215f0d9a21c365098cb1a660f218699587f739d0f8d0b34b81265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80270e7f175215f0d9a21c365098cb1a660f218699587f739d0f8d0b34b81265->leave($__internal_80270e7f175215f0d9a21c365098cb1a660f218699587f739d0f8d0b34b81265_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a32b29826dc1142fb22628b6e6d8bda7471ec6576aecc7976ebaeb4064db44bc = $this->env->getExtension("native_profiler");
        $__internal_a32b29826dc1142fb22628b6e6d8bda7471ec6576aecc7976ebaeb4064db44bc->enter($__internal_a32b29826dc1142fb22628b6e6d8bda7471ec6576aecc7976ebaeb4064db44bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a32b29826dc1142fb22628b6e6d8bda7471ec6576aecc7976ebaeb4064db44bc->leave($__internal_a32b29826dc1142fb22628b6e6d8bda7471ec6576aecc7976ebaeb4064db44bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d05b38c2ab4117c96053384249a46ed6f333cd59817e1df4d207dbe2ed01b6b7 = $this->env->getExtension("native_profiler");
        $__internal_d05b38c2ab4117c96053384249a46ed6f333cd59817e1df4d207dbe2ed01b6b7->enter($__internal_d05b38c2ab4117c96053384249a46ed6f333cd59817e1df4d207dbe2ed01b6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d05b38c2ab4117c96053384249a46ed6f333cd59817e1df4d207dbe2ed01b6b7->leave($__internal_d05b38c2ab4117c96053384249a46ed6f333cd59817e1df4d207dbe2ed01b6b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_630769552f4d4aa78f895ef0e3fd2526e65d5433bd193adb74a0de5288c54e0b = $this->env->getExtension("native_profiler");
        $__internal_630769552f4d4aa78f895ef0e3fd2526e65d5433bd193adb74a0de5288c54e0b->enter($__internal_630769552f4d4aa78f895ef0e3fd2526e65d5433bd193adb74a0de5288c54e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_630769552f4d4aa78f895ef0e3fd2526e65d5433bd193adb74a0de5288c54e0b->leave($__internal_630769552f4d4aa78f895ef0e3fd2526e65d5433bd193adb74a0de5288c54e0b_prof);

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
