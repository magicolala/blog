<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8ffb9474976be0354685f50ad55e56007ac8f31e74e83dccd6b9a0e397e3b62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_24deaad58cb5547799742fd50717dac056f55a807dd7e9861978338b57ae193a = $this->env->getExtension("native_profiler");
        $__internal_24deaad58cb5547799742fd50717dac056f55a807dd7e9861978338b57ae193a->enter($__internal_24deaad58cb5547799742fd50717dac056f55a807dd7e9861978338b57ae193a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24deaad58cb5547799742fd50717dac056f55a807dd7e9861978338b57ae193a->leave($__internal_24deaad58cb5547799742fd50717dac056f55a807dd7e9861978338b57ae193a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f705e2968329ea8dd08a3f7a5a01fde1778d8158d77a7dd307b4c816b9dd1d7 = $this->env->getExtension("native_profiler");
        $__internal_9f705e2968329ea8dd08a3f7a5a01fde1778d8158d77a7dd307b4c816b9dd1d7->enter($__internal_9f705e2968329ea8dd08a3f7a5a01fde1778d8158d77a7dd307b4c816b9dd1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f705e2968329ea8dd08a3f7a5a01fde1778d8158d77a7dd307b4c816b9dd1d7->leave($__internal_9f705e2968329ea8dd08a3f7a5a01fde1778d8158d77a7dd307b4c816b9dd1d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee263c7fd33113024162510486c4637ad8d00aa7a99483fc76b0d3a75923915e = $this->env->getExtension("native_profiler");
        $__internal_ee263c7fd33113024162510486c4637ad8d00aa7a99483fc76b0d3a75923915e->enter($__internal_ee263c7fd33113024162510486c4637ad8d00aa7a99483fc76b0d3a75923915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee263c7fd33113024162510486c4637ad8d00aa7a99483fc76b0d3a75923915e->leave($__internal_ee263c7fd33113024162510486c4637ad8d00aa7a99483fc76b0d3a75923915e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
