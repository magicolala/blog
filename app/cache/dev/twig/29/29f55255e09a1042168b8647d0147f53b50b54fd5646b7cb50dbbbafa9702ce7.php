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
        $__internal_3fbf1e9cc22b145e1da2ff22f10f8b44941b52e7099a4b84932962de7947dd20 = $this->env->getExtension("native_profiler");
        $__internal_3fbf1e9cc22b145e1da2ff22f10f8b44941b52e7099a4b84932962de7947dd20->enter($__internal_3fbf1e9cc22b145e1da2ff22f10f8b44941b52e7099a4b84932962de7947dd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbf1e9cc22b145e1da2ff22f10f8b44941b52e7099a4b84932962de7947dd20->leave($__internal_3fbf1e9cc22b145e1da2ff22f10f8b44941b52e7099a4b84932962de7947dd20_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1025dc1450ff6525c6cd2db1bf62ddfdcdce0c2f2df2f0d27d6cf5a8684a4c1a = $this->env->getExtension("native_profiler");
        $__internal_1025dc1450ff6525c6cd2db1bf62ddfdcdce0c2f2df2f0d27d6cf5a8684a4c1a->enter($__internal_1025dc1450ff6525c6cd2db1bf62ddfdcdce0c2f2df2f0d27d6cf5a8684a4c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1025dc1450ff6525c6cd2db1bf62ddfdcdce0c2f2df2f0d27d6cf5a8684a4c1a->leave($__internal_1025dc1450ff6525c6cd2db1bf62ddfdcdce0c2f2df2f0d27d6cf5a8684a4c1a_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a79d598ad0221689ecf784a1160ed0e6b08900dfba8f246af58a97ca4592a0c9 = $this->env->getExtension("native_profiler");
        $__internal_a79d598ad0221689ecf784a1160ed0e6b08900dfba8f246af58a97ca4592a0c9->enter($__internal_a79d598ad0221689ecf784a1160ed0e6b08900dfba8f246af58a97ca4592a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_a79d598ad0221689ecf784a1160ed0e6b08900dfba8f246af58a97ca4592a0c9->leave($__internal_a79d598ad0221689ecf784a1160ed0e6b08900dfba8f246af58a97ca4592a0c9_prof);

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
