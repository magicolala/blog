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
        $__internal_27886a37f59e4b0f4475b34fe5cf99ae168e2b44e50ac6b50bb82bf24f6d28a5 = $this->env->getExtension("native_profiler");
        $__internal_27886a37f59e4b0f4475b34fe5cf99ae168e2b44e50ac6b50bb82bf24f6d28a5->enter($__internal_27886a37f59e4b0f4475b34fe5cf99ae168e2b44e50ac6b50bb82bf24f6d28a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27886a37f59e4b0f4475b34fe5cf99ae168e2b44e50ac6b50bb82bf24f6d28a5->leave($__internal_27886a37f59e4b0f4475b34fe5cf99ae168e2b44e50ac6b50bb82bf24f6d28a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d33d51a6d17639d67a4a36694e088ebd4fb0e67195101c486c889a45b745d28d = $this->env->getExtension("native_profiler");
        $__internal_d33d51a6d17639d67a4a36694e088ebd4fb0e67195101c486c889a45b745d28d->enter($__internal_d33d51a6d17639d67a4a36694e088ebd4fb0e67195101c486c889a45b745d28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d33d51a6d17639d67a4a36694e088ebd4fb0e67195101c486c889a45b745d28d->leave($__internal_d33d51a6d17639d67a4a36694e088ebd4fb0e67195101c486c889a45b745d28d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f050b74737da62828a358e84fad320e93a8f09ee1548c62028d2123f29638b3e = $this->env->getExtension("native_profiler");
        $__internal_f050b74737da62828a358e84fad320e93a8f09ee1548c62028d2123f29638b3e->enter($__internal_f050b74737da62828a358e84fad320e93a8f09ee1548c62028d2123f29638b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f050b74737da62828a358e84fad320e93a8f09ee1548c62028d2123f29638b3e->leave($__internal_f050b74737da62828a358e84fad320e93a8f09ee1548c62028d2123f29638b3e_prof);

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
