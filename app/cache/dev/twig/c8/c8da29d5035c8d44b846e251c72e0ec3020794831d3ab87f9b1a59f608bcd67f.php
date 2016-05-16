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
        $__internal_ac411bb7c94e25e52913005727ec548455ad9dbd437a0ce77bfea241f69a030d = $this->env->getExtension("native_profiler");
        $__internal_ac411bb7c94e25e52913005727ec548455ad9dbd437a0ce77bfea241f69a030d->enter($__internal_ac411bb7c94e25e52913005727ec548455ad9dbd437a0ce77bfea241f69a030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ac411bb7c94e25e52913005727ec548455ad9dbd437a0ce77bfea241f69a030d->leave($__internal_ac411bb7c94e25e52913005727ec548455ad9dbd437a0ce77bfea241f69a030d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e559a00216b8926c4a520bc6ead0f063056050ee004094eb930e113588a47430 = $this->env->getExtension("native_profiler");
        $__internal_e559a00216b8926c4a520bc6ead0f063056050ee004094eb930e113588a47430->enter($__internal_e559a00216b8926c4a520bc6ead0f063056050ee004094eb930e113588a47430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_e559a00216b8926c4a520bc6ead0f063056050ee004094eb930e113588a47430->leave($__internal_e559a00216b8926c4a520bc6ead0f063056050ee004094eb930e113588a47430_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25d0ca25d565f9af7b111ba09ab8f5784922e8c306b65745e0f8b978ed83204f = $this->env->getExtension("native_profiler");
        $__internal_25d0ca25d565f9af7b111ba09ab8f5784922e8c306b65745e0f8b978ed83204f->enter($__internal_25d0ca25d565f9af7b111ba09ab8f5784922e8c306b65745e0f8b978ed83204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_25d0ca25d565f9af7b111ba09ab8f5784922e8c306b65745e0f8b978ed83204f->leave($__internal_25d0ca25d565f9af7b111ba09ab8f5784922e8c306b65745e0f8b978ed83204f_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_161455f2ce706e148261a9b3af4b3a456bbb767a92cb74d952117a8c4372f361 = $this->env->getExtension("native_profiler");
        $__internal_161455f2ce706e148261a9b3af4b3a456bbb767a92cb74d952117a8c4372f361->enter($__internal_161455f2ce706e148261a9b3af4b3a456bbb767a92cb74d952117a8c4372f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_161455f2ce706e148261a9b3af4b3a456bbb767a92cb74d952117a8c4372f361->leave($__internal_161455f2ce706e148261a9b3af4b3a456bbb767a92cb74d952117a8c4372f361_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_99530be4ac06576c79df8bab653cbd43498601185ccbd3ebe1d5e84418210cf5 = $this->env->getExtension("native_profiler");
        $__internal_99530be4ac06576c79df8bab653cbd43498601185ccbd3ebe1d5e84418210cf5->enter($__internal_99530be4ac06576c79df8bab653cbd43498601185ccbd3ebe1d5e84418210cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_99530be4ac06576c79df8bab653cbd43498601185ccbd3ebe1d5e84418210cf5->leave($__internal_99530be4ac06576c79df8bab653cbd43498601185ccbd3ebe1d5e84418210cf5_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_2989fe9736f4e42a32dc54d43c50e2ac061da6f48d7166a7182d7f49720f0ce6 = $this->env->getExtension("native_profiler");
        $__internal_2989fe9736f4e42a32dc54d43c50e2ac061da6f48d7166a7182d7f49720f0ce6->enter($__internal_2989fe9736f4e42a32dc54d43c50e2ac061da6f48d7166a7182d7f49720f0ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_2989fe9736f4e42a32dc54d43c50e2ac061da6f48d7166a7182d7f49720f0ce6->leave($__internal_2989fe9736f4e42a32dc54d43c50e2ac061da6f48d7166a7182d7f49720f0ce6_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_656fa9d3ff8573d3ad0c2e310fa0a7dd141e7e4c21c388340dd11d64ecaea696 = $this->env->getExtension("native_profiler");
        $__internal_656fa9d3ff8573d3ad0c2e310fa0a7dd141e7e4c21c388340dd11d64ecaea696->enter($__internal_656fa9d3ff8573d3ad0c2e310fa0a7dd141e7e4c21c388340dd11d64ecaea696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_656fa9d3ff8573d3ad0c2e310fa0a7dd141e7e4c21c388340dd11d64ecaea696->leave($__internal_656fa9d3ff8573d3ad0c2e310fa0a7dd141e7e4c21c388340dd11d64ecaea696_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fe5080605b9b8445e354941ee41904a6c0ab965432bbddc7bb638077a4875b38 = $this->env->getExtension("native_profiler");
        $__internal_fe5080605b9b8445e354941ee41904a6c0ab965432bbddc7bb638077a4875b38->enter($__internal_fe5080605b9b8445e354941ee41904a6c0ab965432bbddc7bb638077a4875b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_fe5080605b9b8445e354941ee41904a6c0ab965432bbddc7bb638077a4875b38->leave($__internal_fe5080605b9b8445e354941ee41904a6c0ab965432bbddc7bb638077a4875b38_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0ae2e805b078926dd3df3cb09e7a444b7f960a62cefaa6bbba7730807d5c29da = $this->env->getExtension("native_profiler");
        $__internal_0ae2e805b078926dd3df3cb09e7a444b7f960a62cefaa6bbba7730807d5c29da->enter($__internal_0ae2e805b078926dd3df3cb09e7a444b7f960a62cefaa6bbba7730807d5c29da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_0ae2e805b078926dd3df3cb09e7a444b7f960a62cefaa6bbba7730807d5c29da->leave($__internal_0ae2e805b078926dd3df3cb09e7a444b7f960a62cefaa6bbba7730807d5c29da_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c88f84759062bbd484f44e6856b8e19bd97144b900d02596b59f3ff93aca73ec = $this->env->getExtension("native_profiler");
        $__internal_c88f84759062bbd484f44e6856b8e19bd97144b900d02596b59f3ff93aca73ec->enter($__internal_c88f84759062bbd484f44e6856b8e19bd97144b900d02596b59f3ff93aca73ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c88f84759062bbd484f44e6856b8e19bd97144b900d02596b59f3ff93aca73ec->leave($__internal_c88f84759062bbd484f44e6856b8e19bd97144b900d02596b59f3ff93aca73ec_prof);

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
