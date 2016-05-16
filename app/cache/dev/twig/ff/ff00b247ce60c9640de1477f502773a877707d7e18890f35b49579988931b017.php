<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_6bdd50e19128e55cb23217c03625cdd047fd995199c9dae7627c68106a31b9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c151d31a89c2f83ed96961cb31f30c061527000c2f05bd161618d6ffed8a978 = $this->env->getExtension("native_profiler");
        $__internal_6c151d31a89c2f83ed96961cb31f30c061527000c2f05bd161618d6ffed8a978->enter($__internal_6c151d31a89c2f83ed96961cb31f30c061527000c2f05bd161618d6ffed8a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_6c151d31a89c2f83ed96961cb31f30c061527000c2f05bd161618d6ffed8a978->leave($__internal_6c151d31a89c2f83ed96961cb31f30c061527000c2f05bd161618d6ffed8a978_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
