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
        $__internal_9c1b2be06b748cc5eb14d6ac45d41d171ea13363888bb511fc601e989746cd9e = $this->env->getExtension("native_profiler");
        $__internal_9c1b2be06b748cc5eb14d6ac45d41d171ea13363888bb511fc601e989746cd9e->enter($__internal_9c1b2be06b748cc5eb14d6ac45d41d171ea13363888bb511fc601e989746cd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1b2be06b748cc5eb14d6ac45d41d171ea13363888bb511fc601e989746cd9e->leave($__internal_9c1b2be06b748cc5eb14d6ac45d41d171ea13363888bb511fc601e989746cd9e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f19e4c83bbc1c91278a63de5161adf167274d3b6d05c8e02dff5f3b479dc6ea0 = $this->env->getExtension("native_profiler");
        $__internal_f19e4c83bbc1c91278a63de5161adf167274d3b6d05c8e02dff5f3b479dc6ea0->enter($__internal_f19e4c83bbc1c91278a63de5161adf167274d3b6d05c8e02dff5f3b479dc6ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_f19e4c83bbc1c91278a63de5161adf167274d3b6d05c8e02dff5f3b479dc6ea0->leave($__internal_f19e4c83bbc1c91278a63de5161adf167274d3b6d05c8e02dff5f3b479dc6ea0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b201aaf1c371f9c3e85e7c975154faff7ed1bd8ed38f1c0ca82856415ab5efb = $this->env->getExtension("native_profiler");
        $__internal_9b201aaf1c371f9c3e85e7c975154faff7ed1bd8ed38f1c0ca82856415ab5efb->enter($__internal_9b201aaf1c371f9c3e85e7c975154faff7ed1bd8ed38f1c0ca82856415ab5efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b201aaf1c371f9c3e85e7c975154faff7ed1bd8ed38f1c0ca82856415ab5efb->leave($__internal_9b201aaf1c371f9c3e85e7c975154faff7ed1bd8ed38f1c0ca82856415ab5efb_prof);

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
