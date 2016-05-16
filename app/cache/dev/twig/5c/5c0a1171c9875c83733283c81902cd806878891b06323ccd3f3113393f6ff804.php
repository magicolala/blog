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
        $__internal_6f1e627a609a6e3a3a5b78327402dfd884c166001180528ef3d29c3b67012f48 = $this->env->getExtension("native_profiler");
        $__internal_6f1e627a609a6e3a3a5b78327402dfd884c166001180528ef3d29c3b67012f48->enter($__internal_6f1e627a609a6e3a3a5b78327402dfd884c166001180528ef3d29c3b67012f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1e627a609a6e3a3a5b78327402dfd884c166001180528ef3d29c3b67012f48->leave($__internal_6f1e627a609a6e3a3a5b78327402dfd884c166001180528ef3d29c3b67012f48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0a564b48e86919ae0495d89677442a2c150b1d90ec1a56bc4c577b6f03a4c2b = $this->env->getExtension("native_profiler");
        $__internal_e0a564b48e86919ae0495d89677442a2c150b1d90ec1a56bc4c577b6f03a4c2b->enter($__internal_e0a564b48e86919ae0495d89677442a2c150b1d90ec1a56bc4c577b6f03a4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e0a564b48e86919ae0495d89677442a2c150b1d90ec1a56bc4c577b6f03a4c2b->leave($__internal_e0a564b48e86919ae0495d89677442a2c150b1d90ec1a56bc4c577b6f03a4c2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3334376305787a55c5bbbf0d9b0d9e05203bf643466617957a259bb95cd69f7e = $this->env->getExtension("native_profiler");
        $__internal_3334376305787a55c5bbbf0d9b0d9e05203bf643466617957a259bb95cd69f7e->enter($__internal_3334376305787a55c5bbbf0d9b0d9e05203bf643466617957a259bb95cd69f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3334376305787a55c5bbbf0d9b0d9e05203bf643466617957a259bb95cd69f7e->leave($__internal_3334376305787a55c5bbbf0d9b0d9e05203bf643466617957a259bb95cd69f7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ad155c456d82835a773d2f687539ac2767ba6acba9b026fc3134861645e1be6 = $this->env->getExtension("native_profiler");
        $__internal_9ad155c456d82835a773d2f687539ac2767ba6acba9b026fc3134861645e1be6->enter($__internal_9ad155c456d82835a773d2f687539ac2767ba6acba9b026fc3134861645e1be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ad155c456d82835a773d2f687539ac2767ba6acba9b026fc3134861645e1be6->leave($__internal_9ad155c456d82835a773d2f687539ac2767ba6acba9b026fc3134861645e1be6_prof);

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
