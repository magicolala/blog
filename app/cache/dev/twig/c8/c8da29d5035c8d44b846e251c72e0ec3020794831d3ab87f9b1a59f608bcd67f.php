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
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f61f62ae008d5d00b5e802468e918682fde5dce62a297366462c4ec3dec4685 = $this->env->getExtension("native_profiler");
        $__internal_8f61f62ae008d5d00b5e802468e918682fde5dce62a297366462c4ec3dec4685->enter($__internal_8f61f62ae008d5d00b5e802468e918682fde5dce62a297366462c4ec3dec4685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        
        $__internal_8f61f62ae008d5d00b5e802468e918682fde5dce62a297366462c4ec3dec4685->leave($__internal_8f61f62ae008d5d00b5e802468e918682fde5dce62a297366462c4ec3dec4685_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7adc60e25cc3819e9fb9b49ed774293abd70e74f7fb222556936dd227a243659 = $this->env->getExtension("native_profiler");
        $__internal_7adc60e25cc3819e9fb9b49ed774293abd70e74f7fb222556936dd227a243659->enter($__internal_7adc60e25cc3819e9fb9b49ed774293abd70e74f7fb222556936dd227a243659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_7adc60e25cc3819e9fb9b49ed774293abd70e74f7fb222556936dd227a243659->leave($__internal_7adc60e25cc3819e9fb9b49ed774293abd70e74f7fb222556936dd227a243659_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a19ebfff5530053be2e3012553021b815c7e8835ee5d3391d18b7753ef5144fc = $this->env->getExtension("native_profiler");
        $__internal_a19ebfff5530053be2e3012553021b815c7e8835ee5d3391d18b7753ef5144fc->enter($__internal_a19ebfff5530053be2e3012553021b815c7e8835ee5d3391d18b7753ef5144fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a19ebfff5530053be2e3012553021b815c7e8835ee5d3391d18b7753ef5144fc->leave($__internal_a19ebfff5530053be2e3012553021b815c7e8835ee5d3391d18b7753ef5144fc_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_065aef73d305591bde52c8ca1446af3b312ce232e7a5bfca4e36f9efb319c5e5 = $this->env->getExtension("native_profiler");
        $__internal_065aef73d305591bde52c8ca1446af3b312ce232e7a5bfca4e36f9efb319c5e5->enter($__internal_065aef73d305591bde52c8ca1446af3b312ce232e7a5bfca4e36f9efb319c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_065aef73d305591bde52c8ca1446af3b312ce232e7a5bfca4e36f9efb319c5e5->leave($__internal_065aef73d305591bde52c8ca1446af3b312ce232e7a5bfca4e36f9efb319c5e5_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4dd611918e0c0f0f29ddab32b17e3b1c9fabd43d7b0399bd615c7127569654c2 = $this->env->getExtension("native_profiler");
        $__internal_4dd611918e0c0f0f29ddab32b17e3b1c9fabd43d7b0399bd615c7127569654c2->enter($__internal_4dd611918e0c0f0f29ddab32b17e3b1c9fabd43d7b0399bd615c7127569654c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_4dd611918e0c0f0f29ddab32b17e3b1c9fabd43d7b0399bd615c7127569654c2->leave($__internal_4dd611918e0c0f0f29ddab32b17e3b1c9fabd43d7b0399bd615c7127569654c2_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8c2d7c219e7ecffba88b30fbe2a939618054b07b0f3c2d7185f512af1321f39f = $this->env->getExtension("native_profiler");
        $__internal_8c2d7c219e7ecffba88b30fbe2a939618054b07b0f3c2d7185f512af1321f39f->enter($__internal_8c2d7c219e7ecffba88b30fbe2a939618054b07b0f3c2d7185f512af1321f39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_8c2d7c219e7ecffba88b30fbe2a939618054b07b0f3c2d7185f512af1321f39f->leave($__internal_8c2d7c219e7ecffba88b30fbe2a939618054b07b0f3c2d7185f512af1321f39f_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d01cec8108c641143248c04335cf0d6682565f407365da4a51020fed649a5b = $this->env->getExtension("native_profiler");
        $__internal_d4d01cec8108c641143248c04335cf0d6682565f407365da4a51020fed649a5b->enter($__internal_d4d01cec8108c641143248c04335cf0d6682565f407365da4a51020fed649a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4d01cec8108c641143248c04335cf0d6682565f407365da4a51020fed649a5b->leave($__internal_d4d01cec8108c641143248c04335cf0d6682565f407365da4a51020fed649a5b_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7668d1593cb7ddcf93d7df380a8f7847129ee507ae441e0f05572102e7d8e900 = $this->env->getExtension("native_profiler");
        $__internal_7668d1593cb7ddcf93d7df380a8f7847129ee507ae441e0f05572102e7d8e900->enter($__internal_7668d1593cb7ddcf93d7df380a8f7847129ee507ae441e0f05572102e7d8e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7668d1593cb7ddcf93d7df380a8f7847129ee507ae441e0f05572102e7d8e900->leave($__internal_7668d1593cb7ddcf93d7df380a8f7847129ee507ae441e0f05572102e7d8e900_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9af636a07111b909893a789bb2f292d93fdebebb50420ab624ee6a92d0ce6623 = $this->env->getExtension("native_profiler");
        $__internal_9af636a07111b909893a789bb2f292d93fdebebb50420ab624ee6a92d0ce6623->enter($__internal_9af636a07111b909893a789bb2f292d93fdebebb50420ab624ee6a92d0ce6623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_9af636a07111b909893a789bb2f292d93fdebebb50420ab624ee6a92d0ce6623->leave($__internal_9af636a07111b909893a789bb2f292d93fdebebb50420ab624ee6a92d0ce6623_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94b30d24e2099b6b23fe54f3534aedd670e9b3b0a61c87b5fecae948f9975f3e = $this->env->getExtension("native_profiler");
        $__internal_94b30d24e2099b6b23fe54f3534aedd670e9b3b0a61c87b5fecae948f9975f3e->enter($__internal_94b30d24e2099b6b23fe54f3534aedd670e9b3b0a61c87b5fecae948f9975f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94b30d24e2099b6b23fe54f3534aedd670e9b3b0a61c87b5fecae948f9975f3e->leave($__internal_94b30d24e2099b6b23fe54f3534aedd670e9b3b0a61c87b5fecae948f9975f3e_prof);

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
        return array (  232 => 53,  224 => 48,  218 => 47,  207 => 43,  196 => 40,  182 => 35,  168 => 34,  157 => 27,  153 => 26,  149 => 25,  145 => 23,  139 => 22,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 54,  97 => 53,  92 => 50,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  69 => 35,  65 => 34,  60 => 31,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />*/
/*         <title>{% block title %}symblog{% endblock %} - symblog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_homepage') }}">Home</a></li>*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_about') }}">About</a></li>*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_contact') }}">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{ path('BloggerBlogBundle_homepage') }}">symblog</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{ path('BloggerBlogBundle_homepage') }}">creating a blog in Symfony2</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Symfony2 blog tutorial - created by <a href="https://github.com/dsyph3r">dsyph3r</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
