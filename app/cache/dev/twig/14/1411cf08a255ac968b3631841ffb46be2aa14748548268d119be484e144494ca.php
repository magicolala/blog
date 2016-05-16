<?php

/* @BloggerBlog/Page/about.html.twig */
class __TwigTemplate_58b0e567ba48bad40c950ea6ed6cabb62dae21a2ff7893d7e217a68d49169a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Page/about.html.twig", 2);
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
        $__internal_3fe36909936d01142aa199cf325de613ef754a7a34ae59d08cef96189027e211 = $this->env->getExtension("native_profiler");
        $__internal_3fe36909936d01142aa199cf325de613ef754a7a34ae59d08cef96189027e211->enter($__internal_3fe36909936d01142aa199cf325de613ef754a7a34ae59d08cef96189027e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe36909936d01142aa199cf325de613ef754a7a34ae59d08cef96189027e211->leave($__internal_3fe36909936d01142aa199cf325de613ef754a7a34ae59d08cef96189027e211_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4af228b14ed8d4b81a78dc9e3b670458cbbe35bc90944849923da99a52f40dc = $this->env->getExtension("native_profiler");
        $__internal_a4af228b14ed8d4b81a78dc9e3b670458cbbe35bc90944849923da99a52f40dc->enter($__internal_a4af228b14ed8d4b81a78dc9e3b670458cbbe35bc90944849923da99a52f40dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_a4af228b14ed8d4b81a78dc9e3b670458cbbe35bc90944849923da99a52f40dc->leave($__internal_a4af228b14ed8d4b81a78dc9e3b670458cbbe35bc90944849923da99a52f40dc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_117e227ed4c3d261b066c6a4da79c7c4c10a39960baec200d5fdd4a49161d4d1 = $this->env->getExtension("native_profiler");
        $__internal_117e227ed4c3d261b066c6a4da79c7c4c10a39960baec200d5fdd4a49161d4d1->enter($__internal_117e227ed4c3d261b066c6a4da79c7c4c10a39960baec200d5fdd4a49161d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_117e227ed4c3d261b066c6a4da79c7c4c10a39960baec200d5fdd4a49161d4d1->leave($__internal_117e227ed4c3d261b066c6a4da79c7c4c10a39960baec200d5fdd4a49161d4d1_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/about.html.twig";
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
