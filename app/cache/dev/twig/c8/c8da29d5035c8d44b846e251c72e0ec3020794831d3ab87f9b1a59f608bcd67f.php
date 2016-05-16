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
        $__internal_6e89aa5dc19662b7dc8d22aa92173a609c858ba595bcd2ff125d5cbd0f42fc8b = $this->env->getExtension("native_profiler");
        $__internal_6e89aa5dc19662b7dc8d22aa92173a609c858ba595bcd2ff125d5cbd0f42fc8b->enter($__internal_6e89aa5dc19662b7dc8d22aa92173a609c858ba595bcd2ff125d5cbd0f42fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6e89aa5dc19662b7dc8d22aa92173a609c858ba595bcd2ff125d5cbd0f42fc8b->leave($__internal_6e89aa5dc19662b7dc8d22aa92173a609c858ba595bcd2ff125d5cbd0f42fc8b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ddd1de3989f5c1dfe07cfb90fe16a2795fab3297494d42374f97a5c29b842da = $this->env->getExtension("native_profiler");
        $__internal_7ddd1de3989f5c1dfe07cfb90fe16a2795fab3297494d42374f97a5c29b842da->enter($__internal_7ddd1de3989f5c1dfe07cfb90fe16a2795fab3297494d42374f97a5c29b842da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_7ddd1de3989f5c1dfe07cfb90fe16a2795fab3297494d42374f97a5c29b842da->leave($__internal_7ddd1de3989f5c1dfe07cfb90fe16a2795fab3297494d42374f97a5c29b842da_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0382e158eb2696c84c8c53c7e480ecc7bc00963571edf9ab2962b1631ca0a79 = $this->env->getExtension("native_profiler");
        $__internal_d0382e158eb2696c84c8c53c7e480ecc7bc00963571edf9ab2962b1631ca0a79->enter($__internal_d0382e158eb2696c84c8c53c7e480ecc7bc00963571edf9ab2962b1631ca0a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_d0382e158eb2696c84c8c53c7e480ecc7bc00963571edf9ab2962b1631ca0a79->leave($__internal_d0382e158eb2696c84c8c53c7e480ecc7bc00963571edf9ab2962b1631ca0a79_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e9313d29b1d6f4687e1bc6a1a5062514e7e8493913da444f406a40aeb976fb78 = $this->env->getExtension("native_profiler");
        $__internal_e9313d29b1d6f4687e1bc6a1a5062514e7e8493913da444f406a40aeb976fb78->enter($__internal_e9313d29b1d6f4687e1bc6a1a5062514e7e8493913da444f406a40aeb976fb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e9313d29b1d6f4687e1bc6a1a5062514e7e8493913da444f406a40aeb976fb78->leave($__internal_e9313d29b1d6f4687e1bc6a1a5062514e7e8493913da444f406a40aeb976fb78_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_90161a30a69b28f7a82d4d1f320b4919bf7475e7e5573e79cc7b2053f3b3d6e9 = $this->env->getExtension("native_profiler");
        $__internal_90161a30a69b28f7a82d4d1f320b4919bf7475e7e5573e79cc7b2053f3b3d6e9->enter($__internal_90161a30a69b28f7a82d4d1f320b4919bf7475e7e5573e79cc7b2053f3b3d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_90161a30a69b28f7a82d4d1f320b4919bf7475e7e5573e79cc7b2053f3b3d6e9->leave($__internal_90161a30a69b28f7a82d4d1f320b4919bf7475e7e5573e79cc7b2053f3b3d6e9_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_62417ac0c448f9c09149d1e702686191de02f3dbac29a9b2ef97c1424ec14c9b = $this->env->getExtension("native_profiler");
        $__internal_62417ac0c448f9c09149d1e702686191de02f3dbac29a9b2ef97c1424ec14c9b->enter($__internal_62417ac0c448f9c09149d1e702686191de02f3dbac29a9b2ef97c1424ec14c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_62417ac0c448f9c09149d1e702686191de02f3dbac29a9b2ef97c1424ec14c9b->leave($__internal_62417ac0c448f9c09149d1e702686191de02f3dbac29a9b2ef97c1424ec14c9b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_112a97b9e44b4364d66122cc6c8bfe5a2fdfb216acdd7f5ecadf88cb1725e1b4 = $this->env->getExtension("native_profiler");
        $__internal_112a97b9e44b4364d66122cc6c8bfe5a2fdfb216acdd7f5ecadf88cb1725e1b4->enter($__internal_112a97b9e44b4364d66122cc6c8bfe5a2fdfb216acdd7f5ecadf88cb1725e1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_112a97b9e44b4364d66122cc6c8bfe5a2fdfb216acdd7f5ecadf88cb1725e1b4->leave($__internal_112a97b9e44b4364d66122cc6c8bfe5a2fdfb216acdd7f5ecadf88cb1725e1b4_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_04d44396cb1f9890f3acaad6d72c534908dd677c1864df7e9db137b0083620bf = $this->env->getExtension("native_profiler");
        $__internal_04d44396cb1f9890f3acaad6d72c534908dd677c1864df7e9db137b0083620bf->enter($__internal_04d44396cb1f9890f3acaad6d72c534908dd677c1864df7e9db137b0083620bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_04d44396cb1f9890f3acaad6d72c534908dd677c1864df7e9db137b0083620bf->leave($__internal_04d44396cb1f9890f3acaad6d72c534908dd677c1864df7e9db137b0083620bf_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4720e87187871015d844e3bd78ed1fb9dc6b5d34a0283caa4e25ec07417ba401 = $this->env->getExtension("native_profiler");
        $__internal_4720e87187871015d844e3bd78ed1fb9dc6b5d34a0283caa4e25ec07417ba401->enter($__internal_4720e87187871015d844e3bd78ed1fb9dc6b5d34a0283caa4e25ec07417ba401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_4720e87187871015d844e3bd78ed1fb9dc6b5d34a0283caa4e25ec07417ba401->leave($__internal_4720e87187871015d844e3bd78ed1fb9dc6b5d34a0283caa4e25ec07417ba401_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6ad5f34efdb8d71037002865fb61201a45af05352930ce20318461f128a2679 = $this->env->getExtension("native_profiler");
        $__internal_f6ad5f34efdb8d71037002865fb61201a45af05352930ce20318461f128a2679->enter($__internal_f6ad5f34efdb8d71037002865fb61201a45af05352930ce20318461f128a2679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6ad5f34efdb8d71037002865fb61201a45af05352930ce20318461f128a2679->leave($__internal_f6ad5f34efdb8d71037002865fb61201a45af05352930ce20318461f128a2679_prof);

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
