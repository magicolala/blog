<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_30532d312d8e972f51a178645190e560cd83999efd5c3aa03a0d7cd70b6a9161 extends Twig_Template
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
        $__internal_b4abde7bee9ca42f3f37bfe7b32706ee8ff1fddd73e6692c29aa13b2da4c828f = $this->env->getExtension("native_profiler");
        $__internal_b4abde7bee9ca42f3f37bfe7b32706ee8ff1fddd73e6692c29aa13b2da4c828f->enter($__internal_b4abde7bee9ca42f3f37bfe7b32706ee8ff1fddd73e6692c29aa13b2da4c828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b4abde7bee9ca42f3f37bfe7b32706ee8ff1fddd73e6692c29aa13b2da4c828f->leave($__internal_b4abde7bee9ca42f3f37bfe7b32706ee8ff1fddd73e6692c29aa13b2da4c828f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
