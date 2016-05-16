<?php

/* base.html.twig */
class __TwigTemplate_8d23a5317eed2b324ee7fc61c8af243458be6a85391ab3b908481bc07586ca58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6eb5846d6e412922152612622aaf96dd4192bbcc566d7e5676f7f771720f0fbb = $this->env->getExtension("native_profiler");
        $__internal_6eb5846d6e412922152612622aaf96dd4192bbcc566d7e5676f7f771720f0fbb->enter($__internal_6eb5846d6e412922152612622aaf96dd4192bbcc566d7e5676f7f771720f0fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6eb5846d6e412922152612622aaf96dd4192bbcc566d7e5676f7f771720f0fbb->leave($__internal_6eb5846d6e412922152612622aaf96dd4192bbcc566d7e5676f7f771720f0fbb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f98389a62c5e033f67333345d5d90e38a0bdb5ccd10cd1f3f4e527e424d892 = $this->env->getExtension("native_profiler");
        $__internal_f9f98389a62c5e033f67333345d5d90e38a0bdb5ccd10cd1f3f4e527e424d892->enter($__internal_f9f98389a62c5e033f67333345d5d90e38a0bdb5ccd10cd1f3f4e527e424d892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f9f98389a62c5e033f67333345d5d90e38a0bdb5ccd10cd1f3f4e527e424d892->leave($__internal_f9f98389a62c5e033f67333345d5d90e38a0bdb5ccd10cd1f3f4e527e424d892_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35054fdffe58d9d430a50cbf48ae02f22231f61e8468e909b2daf70823729586 = $this->env->getExtension("native_profiler");
        $__internal_35054fdffe58d9d430a50cbf48ae02f22231f61e8468e909b2daf70823729586->enter($__internal_35054fdffe58d9d430a50cbf48ae02f22231f61e8468e909b2daf70823729586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35054fdffe58d9d430a50cbf48ae02f22231f61e8468e909b2daf70823729586->leave($__internal_35054fdffe58d9d430a50cbf48ae02f22231f61e8468e909b2daf70823729586_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b76e14621fb735fa11dc80c63742b028c4537dee6a8f0b72f2569f700dc7299 = $this->env->getExtension("native_profiler");
        $__internal_7b76e14621fb735fa11dc80c63742b028c4537dee6a8f0b72f2569f700dc7299->enter($__internal_7b76e14621fb735fa11dc80c63742b028c4537dee6a8f0b72f2569f700dc7299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b76e14621fb735fa11dc80c63742b028c4537dee6a8f0b72f2569f700dc7299->leave($__internal_7b76e14621fb735fa11dc80c63742b028c4537dee6a8f0b72f2569f700dc7299_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e844b1b598a053e262df72dc76ffe260b23e68f384651e7357ee74261b64c438 = $this->env->getExtension("native_profiler");
        $__internal_e844b1b598a053e262df72dc76ffe260b23e68f384651e7357ee74261b64c438->enter($__internal_e844b1b598a053e262df72dc76ffe260b23e68f384651e7357ee74261b64c438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e844b1b598a053e262df72dc76ffe260b23e68f384651e7357ee74261b64c438->leave($__internal_e844b1b598a053e262df72dc76ffe260b23e68f384651e7357ee74261b64c438_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
