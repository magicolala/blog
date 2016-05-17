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
        $__internal_0f1276878f60b143202c8efeaa177547f94425102e7f37c8f4f085076a8f6076 = $this->env->getExtension("native_profiler");
        $__internal_0f1276878f60b143202c8efeaa177547f94425102e7f37c8f4f085076a8f6076->enter($__internal_0f1276878f60b143202c8efeaa177547f94425102e7f37c8f4f085076a8f6076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0f1276878f60b143202c8efeaa177547f94425102e7f37c8f4f085076a8f6076->leave($__internal_0f1276878f60b143202c8efeaa177547f94425102e7f37c8f4f085076a8f6076_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6a3a97a4e17185706fc5b506cc58624283fa998739a43a34b4180f4ff8aa3b = $this->env->getExtension("native_profiler");
        $__internal_7f6a3a97a4e17185706fc5b506cc58624283fa998739a43a34b4180f4ff8aa3b->enter($__internal_7f6a3a97a4e17185706fc5b506cc58624283fa998739a43a34b4180f4ff8aa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_7f6a3a97a4e17185706fc5b506cc58624283fa998739a43a34b4180f4ff8aa3b->leave($__internal_7f6a3a97a4e17185706fc5b506cc58624283fa998739a43a34b4180f4ff8aa3b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d2c428f062552b2908786f7796c7fed95c501b75db2d276769a39def5ae6e81 = $this->env->getExtension("native_profiler");
        $__internal_4d2c428f062552b2908786f7796c7fed95c501b75db2d276769a39def5ae6e81->enter($__internal_4d2c428f062552b2908786f7796c7fed95c501b75db2d276769a39def5ae6e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_4d2c428f062552b2908786f7796c7fed95c501b75db2d276769a39def5ae6e81->leave($__internal_4d2c428f062552b2908786f7796c7fed95c501b75db2d276769a39def5ae6e81_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ad15425255d99741a24a94d3f20493213df0871ec8188a58585ce109475b609c = $this->env->getExtension("native_profiler");
        $__internal_ad15425255d99741a24a94d3f20493213df0871ec8188a58585ce109475b609c->enter($__internal_ad15425255d99741a24a94d3f20493213df0871ec8188a58585ce109475b609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_ad15425255d99741a24a94d3f20493213df0871ec8188a58585ce109475b609c->leave($__internal_ad15425255d99741a24a94d3f20493213df0871ec8188a58585ce109475b609c_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_e8846c5f703d2cff4ffd4800f75ff64bc5bd699fe2e1b579f279648293b94aee = $this->env->getExtension("native_profiler");
        $__internal_e8846c5f703d2cff4ffd4800f75ff64bc5bd699fe2e1b579f279648293b94aee->enter($__internal_e8846c5f703d2cff4ffd4800f75ff64bc5bd699fe2e1b579f279648293b94aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_e8846c5f703d2cff4ffd4800f75ff64bc5bd699fe2e1b579f279648293b94aee->leave($__internal_e8846c5f703d2cff4ffd4800f75ff64bc5bd699fe2e1b579f279648293b94aee_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_bb4b7494c7d04de1e26a3b42169f697a7a2f50374413b10e9dc8f13a8699c748 = $this->env->getExtension("native_profiler");
        $__internal_bb4b7494c7d04de1e26a3b42169f697a7a2f50374413b10e9dc8f13a8699c748->enter($__internal_bb4b7494c7d04de1e26a3b42169f697a7a2f50374413b10e9dc8f13a8699c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_bb4b7494c7d04de1e26a3b42169f697a7a2f50374413b10e9dc8f13a8699c748->leave($__internal_bb4b7494c7d04de1e26a3b42169f697a7a2f50374413b10e9dc8f13a8699c748_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_964c89e5ee1eef4d95f6cf42cf86589cc4b4d26655758e87c6c6370732c5e339 = $this->env->getExtension("native_profiler");
        $__internal_964c89e5ee1eef4d95f6cf42cf86589cc4b4d26655758e87c6c6370732c5e339->enter($__internal_964c89e5ee1eef4d95f6cf42cf86589cc4b4d26655758e87c6c6370732c5e339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_964c89e5ee1eef4d95f6cf42cf86589cc4b4d26655758e87c6c6370732c5e339->leave($__internal_964c89e5ee1eef4d95f6cf42cf86589cc4b4d26655758e87c6c6370732c5e339_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7ca2574d9d14e9ff8dc5a8d209298d5ae7485f11abca6d8ea0467045f9c85c62 = $this->env->getExtension("native_profiler");
        $__internal_7ca2574d9d14e9ff8dc5a8d209298d5ae7485f11abca6d8ea0467045f9c85c62->enter($__internal_7ca2574d9d14e9ff8dc5a8d209298d5ae7485f11abca6d8ea0467045f9c85c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7ca2574d9d14e9ff8dc5a8d209298d5ae7485f11abca6d8ea0467045f9c85c62->leave($__internal_7ca2574d9d14e9ff8dc5a8d209298d5ae7485f11abca6d8ea0467045f9c85c62_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e51aba38eb5fc4b6765098c1170b6ec46c21ac6f069e85ca8e425e0fbc3e1724 = $this->env->getExtension("native_profiler");
        $__internal_e51aba38eb5fc4b6765098c1170b6ec46c21ac6f069e85ca8e425e0fbc3e1724->enter($__internal_e51aba38eb5fc4b6765098c1170b6ec46c21ac6f069e85ca8e425e0fbc3e1724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_e51aba38eb5fc4b6765098c1170b6ec46c21ac6f069e85ca8e425e0fbc3e1724->leave($__internal_e51aba38eb5fc4b6765098c1170b6ec46c21ac6f069e85ca8e425e0fbc3e1724_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48f733d62b98b0460daabda51de843d04d65248c1c42a42289f67c2e951e3b06 = $this->env->getExtension("native_profiler");
        $__internal_48f733d62b98b0460daabda51de843d04d65248c1c42a42289f67c2e951e3b06->enter($__internal_48f733d62b98b0460daabda51de843d04d65248c1c42a42289f67c2e951e3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48f733d62b98b0460daabda51de843d04d65248c1c42a42289f67c2e951e3b06->leave($__internal_48f733d62b98b0460daabda51de843d04d65248c1c42a42289f67c2e951e3b06_prof);

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
