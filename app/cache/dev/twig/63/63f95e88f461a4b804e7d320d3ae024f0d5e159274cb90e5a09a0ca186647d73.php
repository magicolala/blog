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
        $__internal_06d971e182bf47bcf2066598b8dd0a514694402f18ebe3baa71b4bd263dc5f69 = $this->env->getExtension("native_profiler");
        $__internal_06d971e182bf47bcf2066598b8dd0a514694402f18ebe3baa71b4bd263dc5f69->enter($__internal_06d971e182bf47bcf2066598b8dd0a514694402f18ebe3baa71b4bd263dc5f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d971e182bf47bcf2066598b8dd0a514694402f18ebe3baa71b4bd263dc5f69->leave($__internal_06d971e182bf47bcf2066598b8dd0a514694402f18ebe3baa71b4bd263dc5f69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed13dcbafb33ea8662fb994cb9eaaecb93c7440cc0f834a1b993f088465226a9 = $this->env->getExtension("native_profiler");
        $__internal_ed13dcbafb33ea8662fb994cb9eaaecb93c7440cc0f834a1b993f088465226a9->enter($__internal_ed13dcbafb33ea8662fb994cb9eaaecb93c7440cc0f834a1b993f088465226a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ed13dcbafb33ea8662fb994cb9eaaecb93c7440cc0f834a1b993f088465226a9->leave($__internal_ed13dcbafb33ea8662fb994cb9eaaecb93c7440cc0f834a1b993f088465226a9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6351e2ef5989343db671bcd6d64acade03cc4f30437cb1dd5f427da5ed96051b = $this->env->getExtension("native_profiler");
        $__internal_6351e2ef5989343db671bcd6d64acade03cc4f30437cb1dd5f427da5ed96051b->enter($__internal_6351e2ef5989343db671bcd6d64acade03cc4f30437cb1dd5f427da5ed96051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6351e2ef5989343db671bcd6d64acade03cc4f30437cb1dd5f427da5ed96051b->leave($__internal_6351e2ef5989343db671bcd6d64acade03cc4f30437cb1dd5f427da5ed96051b_prof);

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
