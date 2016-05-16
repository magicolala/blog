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
        $__internal_d38529bb8e41c638b743e200d7fd952e324286072b0f6ee0567b1d3a80d99281 = $this->env->getExtension("native_profiler");
        $__internal_d38529bb8e41c638b743e200d7fd952e324286072b0f6ee0567b1d3a80d99281->enter($__internal_d38529bb8e41c638b743e200d7fd952e324286072b0f6ee0567b1d3a80d99281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d38529bb8e41c638b743e200d7fd952e324286072b0f6ee0567b1d3a80d99281->leave($__internal_d38529bb8e41c638b743e200d7fd952e324286072b0f6ee0567b1d3a80d99281_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fee244a9f8c0363f7eddd12978167f4531a314bef5e0bef0305efc5d4952f613 = $this->env->getExtension("native_profiler");
        $__internal_fee244a9f8c0363f7eddd12978167f4531a314bef5e0bef0305efc5d4952f613->enter($__internal_fee244a9f8c0363f7eddd12978167f4531a314bef5e0bef0305efc5d4952f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_fee244a9f8c0363f7eddd12978167f4531a314bef5e0bef0305efc5d4952f613->leave($__internal_fee244a9f8c0363f7eddd12978167f4531a314bef5e0bef0305efc5d4952f613_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3ab7ca2c99eb706f33518517558396460a1e321e683b854b91420d6b57eb55f = $this->env->getExtension("native_profiler");
        $__internal_c3ab7ca2c99eb706f33518517558396460a1e321e683b854b91420d6b57eb55f->enter($__internal_c3ab7ca2c99eb706f33518517558396460a1e321e683b854b91420d6b57eb55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c3ab7ca2c99eb706f33518517558396460a1e321e683b854b91420d6b57eb55f->leave($__internal_c3ab7ca2c99eb706f33518517558396460a1e321e683b854b91420d6b57eb55f_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2a38e5ffa55a46fadf845f636ee1f5751558a38f3d8ef0f6b17050a4d74f527f = $this->env->getExtension("native_profiler");
        $__internal_2a38e5ffa55a46fadf845f636ee1f5751558a38f3d8ef0f6b17050a4d74f527f->enter($__internal_2a38e5ffa55a46fadf845f636ee1f5751558a38f3d8ef0f6b17050a4d74f527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2a38e5ffa55a46fadf845f636ee1f5751558a38f3d8ef0f6b17050a4d74f527f->leave($__internal_2a38e5ffa55a46fadf845f636ee1f5751558a38f3d8ef0f6b17050a4d74f527f_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_997b3a982bad121c5abc564929109f930ee790e5034a83f68a4d4333922b3e16 = $this->env->getExtension("native_profiler");
        $__internal_997b3a982bad121c5abc564929109f930ee790e5034a83f68a4d4333922b3e16->enter($__internal_997b3a982bad121c5abc564929109f930ee790e5034a83f68a4d4333922b3e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_997b3a982bad121c5abc564929109f930ee790e5034a83f68a4d4333922b3e16->leave($__internal_997b3a982bad121c5abc564929109f930ee790e5034a83f68a4d4333922b3e16_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_02353684c6a14b3a7cece5a2ce73133e6781e85e7cc69bba473ebbaa4d9e2444 = $this->env->getExtension("native_profiler");
        $__internal_02353684c6a14b3a7cece5a2ce73133e6781e85e7cc69bba473ebbaa4d9e2444->enter($__internal_02353684c6a14b3a7cece5a2ce73133e6781e85e7cc69bba473ebbaa4d9e2444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_02353684c6a14b3a7cece5a2ce73133e6781e85e7cc69bba473ebbaa4d9e2444->leave($__internal_02353684c6a14b3a7cece5a2ce73133e6781e85e7cc69bba473ebbaa4d9e2444_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a30fa5cb1dfd38196752e5faf4c44bbcb08590497a1c8470692d396c8fbfcbd = $this->env->getExtension("native_profiler");
        $__internal_3a30fa5cb1dfd38196752e5faf4c44bbcb08590497a1c8470692d396c8fbfcbd->enter($__internal_3a30fa5cb1dfd38196752e5faf4c44bbcb08590497a1c8470692d396c8fbfcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a30fa5cb1dfd38196752e5faf4c44bbcb08590497a1c8470692d396c8fbfcbd->leave($__internal_3a30fa5cb1dfd38196752e5faf4c44bbcb08590497a1c8470692d396c8fbfcbd_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ea8334b19bb5696552b296ccb420c8ea0ff5aedfdf000203cf3e88b11629dcc3 = $this->env->getExtension("native_profiler");
        $__internal_ea8334b19bb5696552b296ccb420c8ea0ff5aedfdf000203cf3e88b11629dcc3->enter($__internal_ea8334b19bb5696552b296ccb420c8ea0ff5aedfdf000203cf3e88b11629dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ea8334b19bb5696552b296ccb420c8ea0ff5aedfdf000203cf3e88b11629dcc3->leave($__internal_ea8334b19bb5696552b296ccb420c8ea0ff5aedfdf000203cf3e88b11629dcc3_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_35d391af2df6949a62768a407d6284fc9d6bb829936cebead122181ffec888dc = $this->env->getExtension("native_profiler");
        $__internal_35d391af2df6949a62768a407d6284fc9d6bb829936cebead122181ffec888dc->enter($__internal_35d391af2df6949a62768a407d6284fc9d6bb829936cebead122181ffec888dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_35d391af2df6949a62768a407d6284fc9d6bb829936cebead122181ffec888dc->leave($__internal_35d391af2df6949a62768a407d6284fc9d6bb829936cebead122181ffec888dc_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d6a6cdcc0b0c54851caa702654be0188913002ca85b1c78770e421f924b7399 = $this->env->getExtension("native_profiler");
        $__internal_0d6a6cdcc0b0c54851caa702654be0188913002ca85b1c78770e421f924b7399->enter($__internal_0d6a6cdcc0b0c54851caa702654be0188913002ca85b1c78770e421f924b7399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d6a6cdcc0b0c54851caa702654be0188913002ca85b1c78770e421f924b7399->leave($__internal_0d6a6cdcc0b0c54851caa702654be0188913002ca85b1c78770e421f924b7399_prof);

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
