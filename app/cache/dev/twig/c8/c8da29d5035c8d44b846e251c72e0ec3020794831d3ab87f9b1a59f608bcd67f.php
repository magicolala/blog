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
        $__internal_139166aaead5c0e8aaeea11c37e9fe1c47260f11b5e3b10b9cc3fae9d8a668fe = $this->env->getExtension("native_profiler");
        $__internal_139166aaead5c0e8aaeea11c37e9fe1c47260f11b5e3b10b9cc3fae9d8a668fe->enter($__internal_139166aaead5c0e8aaeea11c37e9fe1c47260f11b5e3b10b9cc3fae9d8a668fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_139166aaead5c0e8aaeea11c37e9fe1c47260f11b5e3b10b9cc3fae9d8a668fe->leave($__internal_139166aaead5c0e8aaeea11c37e9fe1c47260f11b5e3b10b9cc3fae9d8a668fe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab1d4e69714e6d67c088b84a6a0cf0cdcba8b3a08383c524b1765f3089f1a9d = $this->env->getExtension("native_profiler");
        $__internal_8ab1d4e69714e6d67c088b84a6a0cf0cdcba8b3a08383c524b1765f3089f1a9d->enter($__internal_8ab1d4e69714e6d67c088b84a6a0cf0cdcba8b3a08383c524b1765f3089f1a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_8ab1d4e69714e6d67c088b84a6a0cf0cdcba8b3a08383c524b1765f3089f1a9d->leave($__internal_8ab1d4e69714e6d67c088b84a6a0cf0cdcba8b3a08383c524b1765f3089f1a9d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e4cccf67157b16708227deb9241c771362ef82ffffec6d17b6a00a047ef8c32 = $this->env->getExtension("native_profiler");
        $__internal_3e4cccf67157b16708227deb9241c771362ef82ffffec6d17b6a00a047ef8c32->enter($__internal_3e4cccf67157b16708227deb9241c771362ef82ffffec6d17b6a00a047ef8c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3e4cccf67157b16708227deb9241c771362ef82ffffec6d17b6a00a047ef8c32->leave($__internal_3e4cccf67157b16708227deb9241c771362ef82ffffec6d17b6a00a047ef8c32_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c1e22ba93e1ae1c736b78c775136873a68839e9ce822db45ac17e9d0403f50e8 = $this->env->getExtension("native_profiler");
        $__internal_c1e22ba93e1ae1c736b78c775136873a68839e9ce822db45ac17e9d0403f50e8->enter($__internal_c1e22ba93e1ae1c736b78c775136873a68839e9ce822db45ac17e9d0403f50e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c1e22ba93e1ae1c736b78c775136873a68839e9ce822db45ac17e9d0403f50e8->leave($__internal_c1e22ba93e1ae1c736b78c775136873a68839e9ce822db45ac17e9d0403f50e8_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3d2098aea78c9727b799d1587fa0e0458be2a9a91fd8b9e64aef958c3c59dd6d = $this->env->getExtension("native_profiler");
        $__internal_3d2098aea78c9727b799d1587fa0e0458be2a9a91fd8b9e64aef958c3c59dd6d->enter($__internal_3d2098aea78c9727b799d1587fa0e0458be2a9a91fd8b9e64aef958c3c59dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_3d2098aea78c9727b799d1587fa0e0458be2a9a91fd8b9e64aef958c3c59dd6d->leave($__internal_3d2098aea78c9727b799d1587fa0e0458be2a9a91fd8b9e64aef958c3c59dd6d_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_da6d281811ccb2aa1c2020ae26ff35e41a2da1dad8c0ee88292c685f277b6353 = $this->env->getExtension("native_profiler");
        $__internal_da6d281811ccb2aa1c2020ae26ff35e41a2da1dad8c0ee88292c685f277b6353->enter($__internal_da6d281811ccb2aa1c2020ae26ff35e41a2da1dad8c0ee88292c685f277b6353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_da6d281811ccb2aa1c2020ae26ff35e41a2da1dad8c0ee88292c685f277b6353->leave($__internal_da6d281811ccb2aa1c2020ae26ff35e41a2da1dad8c0ee88292c685f277b6353_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_76499d62e0f6185afdf0697a5b38c552bcd7fb0371d54a663afc11743c3dcd6d = $this->env->getExtension("native_profiler");
        $__internal_76499d62e0f6185afdf0697a5b38c552bcd7fb0371d54a663afc11743c3dcd6d->enter($__internal_76499d62e0f6185afdf0697a5b38c552bcd7fb0371d54a663afc11743c3dcd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_76499d62e0f6185afdf0697a5b38c552bcd7fb0371d54a663afc11743c3dcd6d->leave($__internal_76499d62e0f6185afdf0697a5b38c552bcd7fb0371d54a663afc11743c3dcd6d_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c8079ff6c7c4792c11f26ff628710e0bffa0e7dc7f4bb5656bafd267c083b65 = $this->env->getExtension("native_profiler");
        $__internal_1c8079ff6c7c4792c11f26ff628710e0bffa0e7dc7f4bb5656bafd267c083b65->enter($__internal_1c8079ff6c7c4792c11f26ff628710e0bffa0e7dc7f4bb5656bafd267c083b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_1c8079ff6c7c4792c11f26ff628710e0bffa0e7dc7f4bb5656bafd267c083b65->leave($__internal_1c8079ff6c7c4792c11f26ff628710e0bffa0e7dc7f4bb5656bafd267c083b65_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b9cb24668b1322653bae2dd250f59307d21f13a790ed70525f34c22f5b95ede3 = $this->env->getExtension("native_profiler");
        $__internal_b9cb24668b1322653bae2dd250f59307d21f13a790ed70525f34c22f5b95ede3->enter($__internal_b9cb24668b1322653bae2dd250f59307d21f13a790ed70525f34c22f5b95ede3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_b9cb24668b1322653bae2dd250f59307d21f13a790ed70525f34c22f5b95ede3->leave($__internal_b9cb24668b1322653bae2dd250f59307d21f13a790ed70525f34c22f5b95ede3_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3f168dc2b2c4425751abc8a5f11539e085837fefd244a5f9da3fc11072e67dc = $this->env->getExtension("native_profiler");
        $__internal_b3f168dc2b2c4425751abc8a5f11539e085837fefd244a5f9da3fc11072e67dc->enter($__internal_b3f168dc2b2c4425751abc8a5f11539e085837fefd244a5f9da3fc11072e67dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3f168dc2b2c4425751abc8a5f11539e085837fefd244a5f9da3fc11072e67dc->leave($__internal_b3f168dc2b2c4425751abc8a5f11539e085837fefd244a5f9da3fc11072e67dc_prof);

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
