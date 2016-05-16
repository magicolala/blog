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
        $__internal_d3d3933cae0c6145170af430bf1f5c3593fd0a01462125b33f3adacd92e96129 = $this->env->getExtension("native_profiler");
        $__internal_d3d3933cae0c6145170af430bf1f5c3593fd0a01462125b33f3adacd92e96129->enter($__internal_d3d3933cae0c6145170af430bf1f5c3593fd0a01462125b33f3adacd92e96129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d3d3933cae0c6145170af430bf1f5c3593fd0a01462125b33f3adacd92e96129->leave($__internal_d3d3933cae0c6145170af430bf1f5c3593fd0a01462125b33f3adacd92e96129_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5517dd7a5b9ca3b9dec2ceecfd99b04e5425142d609b5dd03a993830dc29e01 = $this->env->getExtension("native_profiler");
        $__internal_c5517dd7a5b9ca3b9dec2ceecfd99b04e5425142d609b5dd03a993830dc29e01->enter($__internal_c5517dd7a5b9ca3b9dec2ceecfd99b04e5425142d609b5dd03a993830dc29e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_c5517dd7a5b9ca3b9dec2ceecfd99b04e5425142d609b5dd03a993830dc29e01->leave($__internal_c5517dd7a5b9ca3b9dec2ceecfd99b04e5425142d609b5dd03a993830dc29e01_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80e543adb58863ed1fc46369806d23c801cd28a06c20736b00177b686d720537 = $this->env->getExtension("native_profiler");
        $__internal_80e543adb58863ed1fc46369806d23c801cd28a06c20736b00177b686d720537->enter($__internal_80e543adb58863ed1fc46369806d23c801cd28a06c20736b00177b686d720537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_80e543adb58863ed1fc46369806d23c801cd28a06c20736b00177b686d720537->leave($__internal_80e543adb58863ed1fc46369806d23c801cd28a06c20736b00177b686d720537_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d484079c12160e386761849ee311579fe81a7fb7a18aaa71ed306b51d4584a32 = $this->env->getExtension("native_profiler");
        $__internal_d484079c12160e386761849ee311579fe81a7fb7a18aaa71ed306b51d4584a32->enter($__internal_d484079c12160e386761849ee311579fe81a7fb7a18aaa71ed306b51d4584a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d484079c12160e386761849ee311579fe81a7fb7a18aaa71ed306b51d4584a32->leave($__internal_d484079c12160e386761849ee311579fe81a7fb7a18aaa71ed306b51d4584a32_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_6258361d13d65644ff3e386061f40164b6c6cf4baef5ea0de75b63df6a805fc7 = $this->env->getExtension("native_profiler");
        $__internal_6258361d13d65644ff3e386061f40164b6c6cf4baef5ea0de75b63df6a805fc7->enter($__internal_6258361d13d65644ff3e386061f40164b6c6cf4baef5ea0de75b63df6a805fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_6258361d13d65644ff3e386061f40164b6c6cf4baef5ea0de75b63df6a805fc7->leave($__internal_6258361d13d65644ff3e386061f40164b6c6cf4baef5ea0de75b63df6a805fc7_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_71d0df1e32cbfdb34f4203757ba9003aacd16ce2499c274b4d5c57ddff80b12d = $this->env->getExtension("native_profiler");
        $__internal_71d0df1e32cbfdb34f4203757ba9003aacd16ce2499c274b4d5c57ddff80b12d->enter($__internal_71d0df1e32cbfdb34f4203757ba9003aacd16ce2499c274b4d5c57ddff80b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_71d0df1e32cbfdb34f4203757ba9003aacd16ce2499c274b4d5c57ddff80b12d->leave($__internal_71d0df1e32cbfdb34f4203757ba9003aacd16ce2499c274b4d5c57ddff80b12d_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_459316d675d362efad565b2bf5d32f55b395a6bb68fb02bf0b04349c0a4fd418 = $this->env->getExtension("native_profiler");
        $__internal_459316d675d362efad565b2bf5d32f55b395a6bb68fb02bf0b04349c0a4fd418->enter($__internal_459316d675d362efad565b2bf5d32f55b395a6bb68fb02bf0b04349c0a4fd418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_459316d675d362efad565b2bf5d32f55b395a6bb68fb02bf0b04349c0a4fd418->leave($__internal_459316d675d362efad565b2bf5d32f55b395a6bb68fb02bf0b04349c0a4fd418_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7beed5422719b8dac5dd189ae9b0c9d1a2de5705e49ae72475ee3f5f7c4501fd = $this->env->getExtension("native_profiler");
        $__internal_7beed5422719b8dac5dd189ae9b0c9d1a2de5705e49ae72475ee3f5f7c4501fd->enter($__internal_7beed5422719b8dac5dd189ae9b0c9d1a2de5705e49ae72475ee3f5f7c4501fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7beed5422719b8dac5dd189ae9b0c9d1a2de5705e49ae72475ee3f5f7c4501fd->leave($__internal_7beed5422719b8dac5dd189ae9b0c9d1a2de5705e49ae72475ee3f5f7c4501fd_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_222f055e277f10799de3ef7d6e8d167eb2e6c2390d56f5aff6f957117f06dc4e = $this->env->getExtension("native_profiler");
        $__internal_222f055e277f10799de3ef7d6e8d167eb2e6c2390d56f5aff6f957117f06dc4e->enter($__internal_222f055e277f10799de3ef7d6e8d167eb2e6c2390d56f5aff6f957117f06dc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_222f055e277f10799de3ef7d6e8d167eb2e6c2390d56f5aff6f957117f06dc4e->leave($__internal_222f055e277f10799de3ef7d6e8d167eb2e6c2390d56f5aff6f957117f06dc4e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fece05ae60007d3364d62c36b5d7078498720cf9266e47966ad1e83b65486f64 = $this->env->getExtension("native_profiler");
        $__internal_fece05ae60007d3364d62c36b5d7078498720cf9266e47966ad1e83b65486f64->enter($__internal_fece05ae60007d3364d62c36b5d7078498720cf9266e47966ad1e83b65486f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fece05ae60007d3364d62c36b5d7078498720cf9266e47966ad1e83b65486f64->leave($__internal_fece05ae60007d3364d62c36b5d7078498720cf9266e47966ad1e83b65486f64_prof);

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
