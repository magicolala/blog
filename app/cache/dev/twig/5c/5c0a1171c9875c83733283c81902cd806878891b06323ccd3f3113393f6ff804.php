<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_731da8b606af79f2496f730670ee48ab5163cf2e7d7bea67895831cc03fa7d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8cccbfca57e45d32a3b7c871371e8a78af809636cdca445b3b7c5de938869af4 = $this->env->getExtension("native_profiler");
        $__internal_8cccbfca57e45d32a3b7c871371e8a78af809636cdca445b3b7c5de938869af4->enter($__internal_8cccbfca57e45d32a3b7c871371e8a78af809636cdca445b3b7c5de938869af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cccbfca57e45d32a3b7c871371e8a78af809636cdca445b3b7c5de938869af4->leave($__internal_8cccbfca57e45d32a3b7c871371e8a78af809636cdca445b3b7c5de938869af4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54fbc8d094d468141613fd2612a1b88f2041794a962cc91be475d78f60262ddd = $this->env->getExtension("native_profiler");
        $__internal_54fbc8d094d468141613fd2612a1b88f2041794a962cc91be475d78f60262ddd->enter($__internal_54fbc8d094d468141613fd2612a1b88f2041794a962cc91be475d78f60262ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54fbc8d094d468141613fd2612a1b88f2041794a962cc91be475d78f60262ddd->leave($__internal_54fbc8d094d468141613fd2612a1b88f2041794a962cc91be475d78f60262ddd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33d536f088d36a3bfab514567f76e2b9601e0feca7722bf65a80de9c27ebb522 = $this->env->getExtension("native_profiler");
        $__internal_33d536f088d36a3bfab514567f76e2b9601e0feca7722bf65a80de9c27ebb522->enter($__internal_33d536f088d36a3bfab514567f76e2b9601e0feca7722bf65a80de9c27ebb522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33d536f088d36a3bfab514567f76e2b9601e0feca7722bf65a80de9c27ebb522->leave($__internal_33d536f088d36a3bfab514567f76e2b9601e0feca7722bf65a80de9c27ebb522_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d253bb9527caae889e65b2d295c47322c54088da5920f24601f8b3b8be048d1 = $this->env->getExtension("native_profiler");
        $__internal_2d253bb9527caae889e65b2d295c47322c54088da5920f24601f8b3b8be048d1->enter($__internal_2d253bb9527caae889e65b2d295c47322c54088da5920f24601f8b3b8be048d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d253bb9527caae889e65b2d295c47322c54088da5920f24601f8b3b8be048d1->leave($__internal_2d253bb9527caae889e65b2d295c47322c54088da5920f24601f8b3b8be048d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
