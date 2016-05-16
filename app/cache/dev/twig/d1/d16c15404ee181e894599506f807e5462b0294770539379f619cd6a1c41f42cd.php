<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a3f043f7ad8ffba61030da9c35ff6ce38868cc3580d05b954922754c1e51229e extends Twig_Template
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
        $__internal_4da5bbfee418bfcbf3b3984d37101a002f6b82156947f3bc517dacd6879be329 = $this->env->getExtension("native_profiler");
        $__internal_4da5bbfee418bfcbf3b3984d37101a002f6b82156947f3bc517dacd6879be329->enter($__internal_4da5bbfee418bfcbf3b3984d37101a002f6b82156947f3bc517dacd6879be329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4da5bbfee418bfcbf3b3984d37101a002f6b82156947f3bc517dacd6879be329->leave($__internal_4da5bbfee418bfcbf3b3984d37101a002f6b82156947f3bc517dacd6879be329_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
