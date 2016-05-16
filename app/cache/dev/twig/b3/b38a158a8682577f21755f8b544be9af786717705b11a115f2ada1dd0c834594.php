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
        $__internal_cb20b0cbd3f01812f2891701d83fed1d6c797bc1b38cca27f7de897d86891c48 = $this->env->getExtension("native_profiler");
        $__internal_cb20b0cbd3f01812f2891701d83fed1d6c797bc1b38cca27f7de897d86891c48->enter($__internal_cb20b0cbd3f01812f2891701d83fed1d6c797bc1b38cca27f7de897d86891c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cb20b0cbd3f01812f2891701d83fed1d6c797bc1b38cca27f7de897d86891c48->leave($__internal_cb20b0cbd3f01812f2891701d83fed1d6c797bc1b38cca27f7de897d86891c48_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e38d0e794be056d864b08f8c8cf1360999fd595eddf0e77667aaec6348bc951 = $this->env->getExtension("native_profiler");
        $__internal_2e38d0e794be056d864b08f8c8cf1360999fd595eddf0e77667aaec6348bc951->enter($__internal_2e38d0e794be056d864b08f8c8cf1360999fd595eddf0e77667aaec6348bc951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_2e38d0e794be056d864b08f8c8cf1360999fd595eddf0e77667aaec6348bc951->leave($__internal_2e38d0e794be056d864b08f8c8cf1360999fd595eddf0e77667aaec6348bc951_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7ffa1d517db07b72f4156147604fcfc988fc8ff47c4bdf09807db766a3333fa = $this->env->getExtension("native_profiler");
        $__internal_d7ffa1d517db07b72f4156147604fcfc988fc8ff47c4bdf09807db766a3333fa->enter($__internal_d7ffa1d517db07b72f4156147604fcfc988fc8ff47c4bdf09807db766a3333fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_d7ffa1d517db07b72f4156147604fcfc988fc8ff47c4bdf09807db766a3333fa->leave($__internal_d7ffa1d517db07b72f4156147604fcfc988fc8ff47c4bdf09807db766a3333fa_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6b27a8ae057afb94aa29a38d5b5650f4680c8276ade8f0386d1bb1ac2eb0ee58 = $this->env->getExtension("native_profiler");
        $__internal_6b27a8ae057afb94aa29a38d5b5650f4680c8276ade8f0386d1bb1ac2eb0ee58->enter($__internal_6b27a8ae057afb94aa29a38d5b5650f4680c8276ade8f0386d1bb1ac2eb0ee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_6b27a8ae057afb94aa29a38d5b5650f4680c8276ade8f0386d1bb1ac2eb0ee58->leave($__internal_6b27a8ae057afb94aa29a38d5b5650f4680c8276ade8f0386d1bb1ac2eb0ee58_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_9b3af5af1cd012fe4cba93dd5095b359841fe827e62b798239650f42ead3e7f1 = $this->env->getExtension("native_profiler");
        $__internal_9b3af5af1cd012fe4cba93dd5095b359841fe827e62b798239650f42ead3e7f1->enter($__internal_9b3af5af1cd012fe4cba93dd5095b359841fe827e62b798239650f42ead3e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_9b3af5af1cd012fe4cba93dd5095b359841fe827e62b798239650f42ead3e7f1->leave($__internal_9b3af5af1cd012fe4cba93dd5095b359841fe827e62b798239650f42ead3e7f1_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_ff99de0247de36d52926ef3569e4958b3950f76fdce6bc8e3a47e309e60dc36c = $this->env->getExtension("native_profiler");
        $__internal_ff99de0247de36d52926ef3569e4958b3950f76fdce6bc8e3a47e309e60dc36c->enter($__internal_ff99de0247de36d52926ef3569e4958b3950f76fdce6bc8e3a47e309e60dc36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_ff99de0247de36d52926ef3569e4958b3950f76fdce6bc8e3a47e309e60dc36c->leave($__internal_ff99de0247de36d52926ef3569e4958b3950f76fdce6bc8e3a47e309e60dc36c_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88660fad5f1d7d9845679de5f28dc7a144865b5a38b6591cd3633fb18cb34a6 = $this->env->getExtension("native_profiler");
        $__internal_c88660fad5f1d7d9845679de5f28dc7a144865b5a38b6591cd3633fb18cb34a6->enter($__internal_c88660fad5f1d7d9845679de5f28dc7a144865b5a38b6591cd3633fb18cb34a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c88660fad5f1d7d9845679de5f28dc7a144865b5a38b6591cd3633fb18cb34a6->leave($__internal_c88660fad5f1d7d9845679de5f28dc7a144865b5a38b6591cd3633fb18cb34a6_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06e6ad0a6c694b5465684e842c26bb0e63305edce6d6706b52d4d93baca91396 = $this->env->getExtension("native_profiler");
        $__internal_06e6ad0a6c694b5465684e842c26bb0e63305edce6d6706b52d4d93baca91396->enter($__internal_06e6ad0a6c694b5465684e842c26bb0e63305edce6d6706b52d4d93baca91396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_06e6ad0a6c694b5465684e842c26bb0e63305edce6d6706b52d4d93baca91396->leave($__internal_06e6ad0a6c694b5465684e842c26bb0e63305edce6d6706b52d4d93baca91396_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3305e9aa5e809dc8591ec54258771f937e30abdd463780a4710ae739db4c861c = $this->env->getExtension("native_profiler");
        $__internal_3305e9aa5e809dc8591ec54258771f937e30abdd463780a4710ae739db4c861c->enter($__internal_3305e9aa5e809dc8591ec54258771f937e30abdd463780a4710ae739db4c861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_3305e9aa5e809dc8591ec54258771f937e30abdd463780a4710ae739db4c861c->leave($__internal_3305e9aa5e809dc8591ec54258771f937e30abdd463780a4710ae739db4c861c_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6ef67fad0ad12f5c6ba10019c3c7b067aeaf888448601136784339aa7f23450 = $this->env->getExtension("native_profiler");
        $__internal_b6ef67fad0ad12f5c6ba10019c3c7b067aeaf888448601136784339aa7f23450->enter($__internal_b6ef67fad0ad12f5c6ba10019c3c7b067aeaf888448601136784339aa7f23450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6ef67fad0ad12f5c6ba10019c3c7b067aeaf888448601136784339aa7f23450->leave($__internal_b6ef67fad0ad12f5c6ba10019c3c7b067aeaf888448601136784339aa7f23450_prof);

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
