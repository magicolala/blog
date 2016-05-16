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
        $__internal_01b0b494c9fe82a803f9e907f9b80ccec457dd60da833b0fb3b6d842f1308e15 = $this->env->getExtension("native_profiler");
        $__internal_01b0b494c9fe82a803f9e907f9b80ccec457dd60da833b0fb3b6d842f1308e15->enter($__internal_01b0b494c9fe82a803f9e907f9b80ccec457dd60da833b0fb3b6d842f1308e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b0b494c9fe82a803f9e907f9b80ccec457dd60da833b0fb3b6d842f1308e15->leave($__internal_01b0b494c9fe82a803f9e907f9b80ccec457dd60da833b0fb3b6d842f1308e15_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c4396b4ff07417b1d8ba726e52c3d2ad3156ace834c1ab312c4e0b5f3300451 = $this->env->getExtension("native_profiler");
        $__internal_5c4396b4ff07417b1d8ba726e52c3d2ad3156ace834c1ab312c4e0b5f3300451->enter($__internal_5c4396b4ff07417b1d8ba726e52c3d2ad3156ace834c1ab312c4e0b5f3300451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_5c4396b4ff07417b1d8ba726e52c3d2ad3156ace834c1ab312c4e0b5f3300451->leave($__internal_5c4396b4ff07417b1d8ba726e52c3d2ad3156ace834c1ab312c4e0b5f3300451_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_adcad79b8b1ac4bdba2fc13c2f9628b2c89b92dc3257322904d568533eada052 = $this->env->getExtension("native_profiler");
        $__internal_adcad79b8b1ac4bdba2fc13c2f9628b2c89b92dc3257322904d568533eada052->enter($__internal_adcad79b8b1ac4bdba2fc13c2f9628b2c89b92dc3257322904d568533eada052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_adcad79b8b1ac4bdba2fc13c2f9628b2c89b92dc3257322904d568533eada052->leave($__internal_adcad79b8b1ac4bdba2fc13c2f9628b2c89b92dc3257322904d568533eada052_prof);

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
