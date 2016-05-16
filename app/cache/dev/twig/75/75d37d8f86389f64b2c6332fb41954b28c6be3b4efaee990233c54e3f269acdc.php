<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_de351554969246de7eb7555767d25eb71827ce70948b33e8630b8c6b477267ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e2d4a0342504a0eb5df2e232c4d02f95e4996ca1b33673c654b198323b29cd7 = $this->env->getExtension("native_profiler");
        $__internal_5e2d4a0342504a0eb5df2e232c4d02f95e4996ca1b33673c654b198323b29cd7->enter($__internal_5e2d4a0342504a0eb5df2e232c4d02f95e4996ca1b33673c654b198323b29cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2d4a0342504a0eb5df2e232c4d02f95e4996ca1b33673c654b198323b29cd7->leave($__internal_5e2d4a0342504a0eb5df2e232c4d02f95e4996ca1b33673c654b198323b29cd7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4f2e16942249fd0fda800712b67d9909300d9fc55414516d90282714398abb8 = $this->env->getExtension("native_profiler");
        $__internal_a4f2e16942249fd0fda800712b67d9909300d9fc55414516d90282714398abb8->enter($__internal_a4f2e16942249fd0fda800712b67d9909300d9fc55414516d90282714398abb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_a4f2e16942249fd0fda800712b67d9909300d9fc55414516d90282714398abb8->leave($__internal_a4f2e16942249fd0fda800712b67d9909300d9fc55414516d90282714398abb8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_26073481c5a09e20e0983ae94bd1eaa17606ac4d61edaa4918553cc7502db565 = $this->env->getExtension("native_profiler");
        $__internal_26073481c5a09e20e0983ae94bd1eaa17606ac4d61edaa4918553cc7502db565->enter($__internal_26073481c5a09e20e0983ae94bd1eaa17606ac4d61edaa4918553cc7502db565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_26073481c5a09e20e0983ae94bd1eaa17606ac4d61edaa4918553cc7502db565->leave($__internal_26073481c5a09e20e0983ae94bd1eaa17606ac4d61edaa4918553cc7502db565_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}About{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>About symblog</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit*/
/*         amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.*/
/*         Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue*/
/*         urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida*/
/*         tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas*/
/*         condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis*/
/*         vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a*/
/*         lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices*/
/*         posuere cubilia Curae.</p>*/
/*     </article>*/
/* {% endblock %}*/
/* */
