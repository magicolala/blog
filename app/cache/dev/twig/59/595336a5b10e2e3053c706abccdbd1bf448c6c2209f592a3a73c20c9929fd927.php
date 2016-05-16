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
        $__internal_622c343851fb99c4418b500c0db56a459b9a9cb2e1133cc4efbce8562a4e4602 = $this->env->getExtension("native_profiler");
        $__internal_622c343851fb99c4418b500c0db56a459b9a9cb2e1133cc4efbce8562a4e4602->enter($__internal_622c343851fb99c4418b500c0db56a459b9a9cb2e1133cc4efbce8562a4e4602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622c343851fb99c4418b500c0db56a459b9a9cb2e1133cc4efbce8562a4e4602->leave($__internal_622c343851fb99c4418b500c0db56a459b9a9cb2e1133cc4efbce8562a4e4602_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd364e765ce0de1a05c9107073d79c26bb767a00385a0ee645870bbd755b01a = $this->env->getExtension("native_profiler");
        $__internal_1cd364e765ce0de1a05c9107073d79c26bb767a00385a0ee645870bbd755b01a->enter($__internal_1cd364e765ce0de1a05c9107073d79c26bb767a00385a0ee645870bbd755b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1cd364e765ce0de1a05c9107073d79c26bb767a00385a0ee645870bbd755b01a->leave($__internal_1cd364e765ce0de1a05c9107073d79c26bb767a00385a0ee645870bbd755b01a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68b58b384bcc06a4a9dc9b50f43749a2b8cc83c2c791f3f64e2ad9c97e7a524 = $this->env->getExtension("native_profiler");
        $__internal_b68b58b384bcc06a4a9dc9b50f43749a2b8cc83c2c791f3f64e2ad9c97e7a524->enter($__internal_b68b58b384bcc06a4a9dc9b50f43749a2b8cc83c2c791f3f64e2ad9c97e7a524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b68b58b384bcc06a4a9dc9b50f43749a2b8cc83c2c791f3f64e2ad9c97e7a524->leave($__internal_b68b58b384bcc06a4a9dc9b50f43749a2b8cc83c2c791f3f64e2ad9c97e7a524_prof);

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
