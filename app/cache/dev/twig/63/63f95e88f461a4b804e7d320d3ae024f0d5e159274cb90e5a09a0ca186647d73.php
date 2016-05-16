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
        $__internal_fa4175a92fab59b07d161309d8173e875fed25f363379545ff7c69eceab24e17 = $this->env->getExtension("native_profiler");
        $__internal_fa4175a92fab59b07d161309d8173e875fed25f363379545ff7c69eceab24e17->enter($__internal_fa4175a92fab59b07d161309d8173e875fed25f363379545ff7c69eceab24e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4175a92fab59b07d161309d8173e875fed25f363379545ff7c69eceab24e17->leave($__internal_fa4175a92fab59b07d161309d8173e875fed25f363379545ff7c69eceab24e17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d6567dcbcbefbc7b8a86a705bc45eb1ff10561458a3698c33b70fb6376b3f46 = $this->env->getExtension("native_profiler");
        $__internal_0d6567dcbcbefbc7b8a86a705bc45eb1ff10561458a3698c33b70fb6376b3f46->enter($__internal_0d6567dcbcbefbc7b8a86a705bc45eb1ff10561458a3698c33b70fb6376b3f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d6567dcbcbefbc7b8a86a705bc45eb1ff10561458a3698c33b70fb6376b3f46->leave($__internal_0d6567dcbcbefbc7b8a86a705bc45eb1ff10561458a3698c33b70fb6376b3f46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b090d6a7d1e00c78253d87af363ec841e2c4aec4c34e9d94127883b33ceb9ce9 = $this->env->getExtension("native_profiler");
        $__internal_b090d6a7d1e00c78253d87af363ec841e2c4aec4c34e9d94127883b33ceb9ce9->enter($__internal_b090d6a7d1e00c78253d87af363ec841e2c4aec4c34e9d94127883b33ceb9ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b090d6a7d1e00c78253d87af363ec841e2c4aec4c34e9d94127883b33ceb9ce9->leave($__internal_b090d6a7d1e00c78253d87af363ec841e2c4aec4c34e9d94127883b33ceb9ce9_prof);

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
