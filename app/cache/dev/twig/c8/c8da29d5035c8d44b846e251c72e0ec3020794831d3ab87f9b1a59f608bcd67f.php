<?php

/* ::base.html.twig */
class __TwigTemplate_f88a431f043f25a8b66514c80b028efac838a0e3fba6aa25233a73799e134db3 extends Twig_Template
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
        $__internal_5b3dca4b4d61056d2cb187dc6109fa15213ce3d1d83cc64e46d9d4ca456de5ac = $this->env->getExtension("native_profiler");
        $__internal_5b3dca4b4d61056d2cb187dc6109fa15213ce3d1d83cc64e46d9d4ca456de5ac->enter($__internal_5b3dca4b4d61056d2cb187dc6109fa15213ce3d1d83cc64e46d9d4ca456de5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5b3dca4b4d61056d2cb187dc6109fa15213ce3d1d83cc64e46d9d4ca456de5ac->leave($__internal_5b3dca4b4d61056d2cb187dc6109fa15213ce3d1d83cc64e46d9d4ca456de5ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad65e52961f749da2a426bf05f020ea7ceae9bc9531e12b6b8fd443d88409ce2 = $this->env->getExtension("native_profiler");
        $__internal_ad65e52961f749da2a426bf05f020ea7ceae9bc9531e12b6b8fd443d88409ce2->enter($__internal_ad65e52961f749da2a426bf05f020ea7ceae9bc9531e12b6b8fd443d88409ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad65e52961f749da2a426bf05f020ea7ceae9bc9531e12b6b8fd443d88409ce2->leave($__internal_ad65e52961f749da2a426bf05f020ea7ceae9bc9531e12b6b8fd443d88409ce2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_412d76b63679157e233ba0ed361b02cf596f79ddac6ed0fa16bd502cb16c9647 = $this->env->getExtension("native_profiler");
        $__internal_412d76b63679157e233ba0ed361b02cf596f79ddac6ed0fa16bd502cb16c9647->enter($__internal_412d76b63679157e233ba0ed361b02cf596f79ddac6ed0fa16bd502cb16c9647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_412d76b63679157e233ba0ed361b02cf596f79ddac6ed0fa16bd502cb16c9647->leave($__internal_412d76b63679157e233ba0ed361b02cf596f79ddac6ed0fa16bd502cb16c9647_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabc8a3e860298092f11b617569c0113c981565cca545c1e6379078317ac7823 = $this->env->getExtension("native_profiler");
        $__internal_dabc8a3e860298092f11b617569c0113c981565cca545c1e6379078317ac7823->enter($__internal_dabc8a3e860298092f11b617569c0113c981565cca545c1e6379078317ac7823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dabc8a3e860298092f11b617569c0113c981565cca545c1e6379078317ac7823->leave($__internal_dabc8a3e860298092f11b617569c0113c981565cca545c1e6379078317ac7823_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dda453deebf31771c96b484a2680b297011b3a8f4b04cf047dc2e178bab2dc9b = $this->env->getExtension("native_profiler");
        $__internal_dda453deebf31771c96b484a2680b297011b3a8f4b04cf047dc2e178bab2dc9b->enter($__internal_dda453deebf31771c96b484a2680b297011b3a8f4b04cf047dc2e178bab2dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dda453deebf31771c96b484a2680b297011b3a8f4b04cf047dc2e178bab2dc9b->leave($__internal_dda453deebf31771c96b484a2680b297011b3a8f4b04cf047dc2e178bab2dc9b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
