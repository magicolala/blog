<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_5c093e91b383cc3885809697f51a5831ef33183f2811ac429b9b9c5f6f6d2a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8233c213283f35a8645cec505ac074843d739035e998d0a89502fd9d0fdc6425 = $this->env->getExtension("native_profiler");
        $__internal_8233c213283f35a8645cec505ac074843d739035e998d0a89502fd9d0fdc6425->enter($__internal_8233c213283f35a8645cec505ac074843d739035e998d0a89502fd9d0fdc6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8233c213283f35a8645cec505ac074843d739035e998d0a89502fd9d0fdc6425->leave($__internal_8233c213283f35a8645cec505ac074843d739035e998d0a89502fd9d0fdc6425_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a8a931e71f5e55bd46fcddbf1f1421b731fa91df538265538a6fb2ffcda4307 = $this->env->getExtension("native_profiler");
        $__internal_2a8a931e71f5e55bd46fcddbf1f1421b731fa91df538265538a6fb2ffcda4307->enter($__internal_2a8a931e71f5e55bd46fcddbf1f1421b731fa91df538265538a6fb2ffcda4307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_2a8a931e71f5e55bd46fcddbf1f1421b731fa91df538265538a6fb2ffcda4307->leave($__internal_2a8a931e71f5e55bd46fcddbf1f1421b731fa91df538265538a6fb2ffcda4307_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_20e2c8e3c3b9731eccbf98bc903d587df41238d1b69ca78192e2e0971bf3ff8f = $this->env->getExtension("native_profiler");
        $__internal_20e2c8e3c3b9731eccbf98bc903d587df41238d1b69ca78192e2e0971bf3ff8f->enter($__internal_20e2c8e3c3b9731eccbf98bc903d587df41238d1b69ca78192e2e0971bf3ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_20e2c8e3c3b9731eccbf98bc903d587df41238d1b69ca78192e2e0971bf3ff8f->leave($__internal_20e2c8e3c3b9731eccbf98bc903d587df41238d1b69ca78192e2e0971bf3ff8f_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/bloggerblog/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
/* */
