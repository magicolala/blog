<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b0e0a9201ef5640c1fcc6818064cbb329da2c254b38002a79879ab2762011e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_eb854db88697cb54f9b098bc3131ed019f691a04b8ff0d0fbbbfd35f372f6963 = $this->env->getExtension("native_profiler");
        $__internal_eb854db88697cb54f9b098bc3131ed019f691a04b8ff0d0fbbbfd35f372f6963->enter($__internal_eb854db88697cb54f9b098bc3131ed019f691a04b8ff0d0fbbbfd35f372f6963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb854db88697cb54f9b098bc3131ed019f691a04b8ff0d0fbbbfd35f372f6963->leave($__internal_eb854db88697cb54f9b098bc3131ed019f691a04b8ff0d0fbbbfd35f372f6963_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1492ba672be5336e66d4d328a6b100674e25e3ae3d8b380311a6133ac23b171c = $this->env->getExtension("native_profiler");
        $__internal_1492ba672be5336e66d4d328a6b100674e25e3ae3d8b380311a6133ac23b171c->enter($__internal_1492ba672be5336e66d4d328a6b100674e25e3ae3d8b380311a6133ac23b171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1492ba672be5336e66d4d328a6b100674e25e3ae3d8b380311a6133ac23b171c->leave($__internal_1492ba672be5336e66d4d328a6b100674e25e3ae3d8b380311a6133ac23b171c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0a289e41fe869dbecf5e56565e3700022dfd7d6ebe641410b38b5248620cd8 = $this->env->getExtension("native_profiler");
        $__internal_6b0a289e41fe869dbecf5e56565e3700022dfd7d6ebe641410b38b5248620cd8->enter($__internal_6b0a289e41fe869dbecf5e56565e3700022dfd7d6ebe641410b38b5248620cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6b0a289e41fe869dbecf5e56565e3700022dfd7d6ebe641410b38b5248620cd8->leave($__internal_6b0a289e41fe869dbecf5e56565e3700022dfd7d6ebe641410b38b5248620cd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
