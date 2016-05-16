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
        $__internal_406ccac0bf79c15cfe868e31f871d25730e44853b1b1612741d41f50d559eaef = $this->env->getExtension("native_profiler");
        $__internal_406ccac0bf79c15cfe868e31f871d25730e44853b1b1612741d41f50d559eaef->enter($__internal_406ccac0bf79c15cfe868e31f871d25730e44853b1b1612741d41f50d559eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406ccac0bf79c15cfe868e31f871d25730e44853b1b1612741d41f50d559eaef->leave($__internal_406ccac0bf79c15cfe868e31f871d25730e44853b1b1612741d41f50d559eaef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9fc59edd967e69b50c9292a93b6ee9b1851fc7a68b1ca329cceeb3eb89e8c24 = $this->env->getExtension("native_profiler");
        $__internal_e9fc59edd967e69b50c9292a93b6ee9b1851fc7a68b1ca329cceeb3eb89e8c24->enter($__internal_e9fc59edd967e69b50c9292a93b6ee9b1851fc7a68b1ca329cceeb3eb89e8c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9fc59edd967e69b50c9292a93b6ee9b1851fc7a68b1ca329cceeb3eb89e8c24->leave($__internal_e9fc59edd967e69b50c9292a93b6ee9b1851fc7a68b1ca329cceeb3eb89e8c24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70e63d841e4b938ee6530e7c7bdf19cfba021cb3e583a947111ac8a4b5b7994d = $this->env->getExtension("native_profiler");
        $__internal_70e63d841e4b938ee6530e7c7bdf19cfba021cb3e583a947111ac8a4b5b7994d->enter($__internal_70e63d841e4b938ee6530e7c7bdf19cfba021cb3e583a947111ac8a4b5b7994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_70e63d841e4b938ee6530e7c7bdf19cfba021cb3e583a947111ac8a4b5b7994d->leave($__internal_70e63d841e4b938ee6530e7c7bdf19cfba021cb3e583a947111ac8a4b5b7994d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6ea943097d330ddedb54836896ee4db0b8b7978d43debfd71af536d667e8fe8 = $this->env->getExtension("native_profiler");
        $__internal_b6ea943097d330ddedb54836896ee4db0b8b7978d43debfd71af536d667e8fe8->enter($__internal_b6ea943097d330ddedb54836896ee4db0b8b7978d43debfd71af536d667e8fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b6ea943097d330ddedb54836896ee4db0b8b7978d43debfd71af536d667e8fe8->leave($__internal_b6ea943097d330ddedb54836896ee4db0b8b7978d43debfd71af536d667e8fe8_prof);

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
