<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_235e8dd70f20420b7d5f26e8d40869db06c09479de0ddfb67dbc8143db533dde extends Twig_Template
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
        $__internal_c752deebd1d9f2d4a4fb251a42e4be4551154c473906a675316dbfdd05bcb784 = $this->env->getExtension("native_profiler");
        $__internal_c752deebd1d9f2d4a4fb251a42e4be4551154c473906a675316dbfdd05bcb784->enter($__internal_c752deebd1d9f2d4a4fb251a42e4be4551154c473906a675316dbfdd05bcb784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_c752deebd1d9f2d4a4fb251a42e4be4551154c473906a675316dbfdd05bcb784->leave($__internal_c752deebd1d9f2d4a4fb251a42e4be4551154c473906a675316dbfdd05bcb784_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
