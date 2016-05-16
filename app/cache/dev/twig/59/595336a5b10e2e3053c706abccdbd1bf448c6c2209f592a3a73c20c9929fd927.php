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
        $__internal_fe95c4267b7ee458d0c969f20bc10c5bc65bbc2218f804fd110d5ba8282d5644 = $this->env->getExtension("native_profiler");
        $__internal_fe95c4267b7ee458d0c969f20bc10c5bc65bbc2218f804fd110d5ba8282d5644->enter($__internal_fe95c4267b7ee458d0c969f20bc10c5bc65bbc2218f804fd110d5ba8282d5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe95c4267b7ee458d0c969f20bc10c5bc65bbc2218f804fd110d5ba8282d5644->leave($__internal_fe95c4267b7ee458d0c969f20bc10c5bc65bbc2218f804fd110d5ba8282d5644_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae96fbc6ea0289f42d96f91b91dba22743b9806a428dee5fdf7d94d1d1ba956a = $this->env->getExtension("native_profiler");
        $__internal_ae96fbc6ea0289f42d96f91b91dba22743b9806a428dee5fdf7d94d1d1ba956a->enter($__internal_ae96fbc6ea0289f42d96f91b91dba22743b9806a428dee5fdf7d94d1d1ba956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae96fbc6ea0289f42d96f91b91dba22743b9806a428dee5fdf7d94d1d1ba956a->leave($__internal_ae96fbc6ea0289f42d96f91b91dba22743b9806a428dee5fdf7d94d1d1ba956a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a641da5189671e075c5683148a927787541de6b27ab628cb9e70675f0dfb76f = $this->env->getExtension("native_profiler");
        $__internal_0a641da5189671e075c5683148a927787541de6b27ab628cb9e70675f0dfb76f->enter($__internal_0a641da5189671e075c5683148a927787541de6b27ab628cb9e70675f0dfb76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a641da5189671e075c5683148a927787541de6b27ab628cb9e70675f0dfb76f->leave($__internal_0a641da5189671e075c5683148a927787541de6b27ab628cb9e70675f0dfb76f_prof);

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
