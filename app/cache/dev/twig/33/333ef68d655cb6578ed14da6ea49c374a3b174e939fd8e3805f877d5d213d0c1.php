<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_424dc5ac230c8ef53475ccacfc444c675f582afc7390eb0eab5cfa234b55b5fa extends Twig_Template
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
        $__internal_25f1959b2d9593ce9ed3eaa729423e2ff43b4d1061d7e751e269dcb7dd49708c = $this->env->getExtension("native_profiler");
        $__internal_25f1959b2d9593ce9ed3eaa729423e2ff43b4d1061d7e751e269dcb7dd49708c->enter($__internal_25f1959b2d9593ce9ed3eaa729423e2ff43b4d1061d7e751e269dcb7dd49708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_25f1959b2d9593ce9ed3eaa729423e2ff43b4d1061d7e751e269dcb7dd49708c->leave($__internal_25f1959b2d9593ce9ed3eaa729423e2ff43b4d1061d7e751e269dcb7dd49708c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
