<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c104a5b7ccb056a6a25d8f51faa7408eacf146b9abebf01f620ac3b50a45594a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8818f4ac3ddab83934382e1bfaa875b64734d26304f85ae15fc0eb0e821f9031 = $this->env->getExtension("native_profiler");
        $__internal_8818f4ac3ddab83934382e1bfaa875b64734d26304f85ae15fc0eb0e821f9031->enter($__internal_8818f4ac3ddab83934382e1bfaa875b64734d26304f85ae15fc0eb0e821f9031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8818f4ac3ddab83934382e1bfaa875b64734d26304f85ae15fc0eb0e821f9031->leave($__internal_8818f4ac3ddab83934382e1bfaa875b64734d26304f85ae15fc0eb0e821f9031_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a2ea5771f42b24e2aa9e83e37dc0a8a14613a93f58c36b080b2e25ea1749754 = $this->env->getExtension("native_profiler");
        $__internal_3a2ea5771f42b24e2aa9e83e37dc0a8a14613a93f58c36b080b2e25ea1749754->enter($__internal_3a2ea5771f42b24e2aa9e83e37dc0a8a14613a93f58c36b080b2e25ea1749754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a2ea5771f42b24e2aa9e83e37dc0a8a14613a93f58c36b080b2e25ea1749754->leave($__internal_3a2ea5771f42b24e2aa9e83e37dc0a8a14613a93f58c36b080b2e25ea1749754_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d27d763a9d847e1d16e4626a98d6972966306455441da01de0b6157a44bc591 = $this->env->getExtension("native_profiler");
        $__internal_7d27d763a9d847e1d16e4626a98d6972966306455441da01de0b6157a44bc591->enter($__internal_7d27d763a9d847e1d16e4626a98d6972966306455441da01de0b6157a44bc591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d27d763a9d847e1d16e4626a98d6972966306455441da01de0b6157a44bc591->leave($__internal_7d27d763a9d847e1d16e4626a98d6972966306455441da01de0b6157a44bc591_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa7c66734df25e9f18d906d4431d3dda02618c4b421bdd2b5462110de5c283a = $this->env->getExtension("native_profiler");
        $__internal_6fa7c66734df25e9f18d906d4431d3dda02618c4b421bdd2b5462110de5c283a->enter($__internal_6fa7c66734df25e9f18d906d4431d3dda02618c4b421bdd2b5462110de5c283a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6fa7c66734df25e9f18d906d4431d3dda02618c4b421bdd2b5462110de5c283a->leave($__internal_6fa7c66734df25e9f18d906d4431d3dda02618c4b421bdd2b5462110de5c283a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
