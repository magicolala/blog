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
        $__internal_adf6782fa5cae3f647b549f6d0df80de414547e7fd1b1416b0767b7a77eaf8b5 = $this->env->getExtension("native_profiler");
        $__internal_adf6782fa5cae3f647b549f6d0df80de414547e7fd1b1416b0767b7a77eaf8b5->enter($__internal_adf6782fa5cae3f647b549f6d0df80de414547e7fd1b1416b0767b7a77eaf8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_adf6782fa5cae3f647b549f6d0df80de414547e7fd1b1416b0767b7a77eaf8b5->leave($__internal_adf6782fa5cae3f647b549f6d0df80de414547e7fd1b1416b0767b7a77eaf8b5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9036863e46f6449275e5912f2fa325c690298db504eabf9ac832c72abfb716a4 = $this->env->getExtension("native_profiler");
        $__internal_9036863e46f6449275e5912f2fa325c690298db504eabf9ac832c72abfb716a4->enter($__internal_9036863e46f6449275e5912f2fa325c690298db504eabf9ac832c72abfb716a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_9036863e46f6449275e5912f2fa325c690298db504eabf9ac832c72abfb716a4->leave($__internal_9036863e46f6449275e5912f2fa325c690298db504eabf9ac832c72abfb716a4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_460bc698f95faee65755679b4d87e16331f0d25d9819f3e9543ba856c6593fab = $this->env->getExtension("native_profiler");
        $__internal_460bc698f95faee65755679b4d87e16331f0d25d9819f3e9543ba856c6593fab->enter($__internal_460bc698f95faee65755679b4d87e16331f0d25d9819f3e9543ba856c6593fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_460bc698f95faee65755679b4d87e16331f0d25d9819f3e9543ba856c6593fab->leave($__internal_460bc698f95faee65755679b4d87e16331f0d25d9819f3e9543ba856c6593fab_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e7a0d9461709f8746f87a6725d4a84647a88817908c9b851046bead94c922440 = $this->env->getExtension("native_profiler");
        $__internal_e7a0d9461709f8746f87a6725d4a84647a88817908c9b851046bead94c922440->enter($__internal_e7a0d9461709f8746f87a6725d4a84647a88817908c9b851046bead94c922440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e7a0d9461709f8746f87a6725d4a84647a88817908c9b851046bead94c922440->leave($__internal_e7a0d9461709f8746f87a6725d4a84647a88817908c9b851046bead94c922440_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4e19a8fed6c239c81ff68864e75ff6d95e7a9fafb67629eec4fa63b71987af24 = $this->env->getExtension("native_profiler");
        $__internal_4e19a8fed6c239c81ff68864e75ff6d95e7a9fafb67629eec4fa63b71987af24->enter($__internal_4e19a8fed6c239c81ff68864e75ff6d95e7a9fafb67629eec4fa63b71987af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_4e19a8fed6c239c81ff68864e75ff6d95e7a9fafb67629eec4fa63b71987af24->leave($__internal_4e19a8fed6c239c81ff68864e75ff6d95e7a9fafb67629eec4fa63b71987af24_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_6e4bcb041a92f2a37e1705b40e06b2b9fe4febc16c41e04227cf35586542b34a = $this->env->getExtension("native_profiler");
        $__internal_6e4bcb041a92f2a37e1705b40e06b2b9fe4febc16c41e04227cf35586542b34a->enter($__internal_6e4bcb041a92f2a37e1705b40e06b2b9fe4febc16c41e04227cf35586542b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_6e4bcb041a92f2a37e1705b40e06b2b9fe4febc16c41e04227cf35586542b34a->leave($__internal_6e4bcb041a92f2a37e1705b40e06b2b9fe4febc16c41e04227cf35586542b34a_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1657e26c239fa1ca2740d54f1f58801f6b4c43420c81a5e9e6d05200ae61fc7c = $this->env->getExtension("native_profiler");
        $__internal_1657e26c239fa1ca2740d54f1f58801f6b4c43420c81a5e9e6d05200ae61fc7c->enter($__internal_1657e26c239fa1ca2740d54f1f58801f6b4c43420c81a5e9e6d05200ae61fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1657e26c239fa1ca2740d54f1f58801f6b4c43420c81a5e9e6d05200ae61fc7c->leave($__internal_1657e26c239fa1ca2740d54f1f58801f6b4c43420c81a5e9e6d05200ae61fc7c_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4c1fe960c5004dc635ea33cda13a97d003bf034466c9857929c064f1955a6aa2 = $this->env->getExtension("native_profiler");
        $__internal_4c1fe960c5004dc635ea33cda13a97d003bf034466c9857929c064f1955a6aa2->enter($__internal_4c1fe960c5004dc635ea33cda13a97d003bf034466c9857929c064f1955a6aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4c1fe960c5004dc635ea33cda13a97d003bf034466c9857929c064f1955a6aa2->leave($__internal_4c1fe960c5004dc635ea33cda13a97d003bf034466c9857929c064f1955a6aa2_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_46211c0e51f8a4c97c4ea574f59fd47f4428acc4cff369a4ca4d9843f9645907 = $this->env->getExtension("native_profiler");
        $__internal_46211c0e51f8a4c97c4ea574f59fd47f4428acc4cff369a4ca4d9843f9645907->enter($__internal_46211c0e51f8a4c97c4ea574f59fd47f4428acc4cff369a4ca4d9843f9645907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_46211c0e51f8a4c97c4ea574f59fd47f4428acc4cff369a4ca4d9843f9645907->leave($__internal_46211c0e51f8a4c97c4ea574f59fd47f4428acc4cff369a4ca4d9843f9645907_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27fcf36196dc9250e73ac91bbf0a85e7c33be530bbae8c5c04265358117696c4 = $this->env->getExtension("native_profiler");
        $__internal_27fcf36196dc9250e73ac91bbf0a85e7c33be530bbae8c5c04265358117696c4->enter($__internal_27fcf36196dc9250e73ac91bbf0a85e7c33be530bbae8c5c04265358117696c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27fcf36196dc9250e73ac91bbf0a85e7c33be530bbae8c5c04265358117696c4->leave($__internal_27fcf36196dc9250e73ac91bbf0a85e7c33be530bbae8c5c04265358117696c4_prof);

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
