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
        $__internal_c667250a47d29e579ac0688777e1863b10ea945018968d7414c4d7ff419c1e52 = $this->env->getExtension("native_profiler");
        $__internal_c667250a47d29e579ac0688777e1863b10ea945018968d7414c4d7ff419c1e52->enter($__internal_c667250a47d29e579ac0688777e1863b10ea945018968d7414c4d7ff419c1e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c667250a47d29e579ac0688777e1863b10ea945018968d7414c4d7ff419c1e52->leave($__internal_c667250a47d29e579ac0688777e1863b10ea945018968d7414c4d7ff419c1e52_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_134dbf020cff1c1a4653a059e267077877f517ca7c36714f49b71d3f0cfdb8eb = $this->env->getExtension("native_profiler");
        $__internal_134dbf020cff1c1a4653a059e267077877f517ca7c36714f49b71d3f0cfdb8eb->enter($__internal_134dbf020cff1c1a4653a059e267077877f517ca7c36714f49b71d3f0cfdb8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_134dbf020cff1c1a4653a059e267077877f517ca7c36714f49b71d3f0cfdb8eb->leave($__internal_134dbf020cff1c1a4653a059e267077877f517ca7c36714f49b71d3f0cfdb8eb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e18f970e0702fa9c23b69dd0bad3b86fadf370d0c19f0c9e608ee770943b192d = $this->env->getExtension("native_profiler");
        $__internal_e18f970e0702fa9c23b69dd0bad3b86fadf370d0c19f0c9e608ee770943b192d->enter($__internal_e18f970e0702fa9c23b69dd0bad3b86fadf370d0c19f0c9e608ee770943b192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e18f970e0702fa9c23b69dd0bad3b86fadf370d0c19f0c9e608ee770943b192d->leave($__internal_e18f970e0702fa9c23b69dd0bad3b86fadf370d0c19f0c9e608ee770943b192d_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_782908373f0f6a383d8535fe1abf91af733ec74aef110994003188c076a88324 = $this->env->getExtension("native_profiler");
        $__internal_782908373f0f6a383d8535fe1abf91af733ec74aef110994003188c076a88324->enter($__internal_782908373f0f6a383d8535fe1abf91af733ec74aef110994003188c076a88324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_782908373f0f6a383d8535fe1abf91af733ec74aef110994003188c076a88324->leave($__internal_782908373f0f6a383d8535fe1abf91af733ec74aef110994003188c076a88324_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_89e34ac433a0b64cea2eec91e715c020914f95df7a0d2f3a04de355cc8928dcd = $this->env->getExtension("native_profiler");
        $__internal_89e34ac433a0b64cea2eec91e715c020914f95df7a0d2f3a04de355cc8928dcd->enter($__internal_89e34ac433a0b64cea2eec91e715c020914f95df7a0d2f3a04de355cc8928dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_89e34ac433a0b64cea2eec91e715c020914f95df7a0d2f3a04de355cc8928dcd->leave($__internal_89e34ac433a0b64cea2eec91e715c020914f95df7a0d2f3a04de355cc8928dcd_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_44904c25e5562fce12d76dccc302ed2b3774cd3295cf22b2ec35cd536d37623d = $this->env->getExtension("native_profiler");
        $__internal_44904c25e5562fce12d76dccc302ed2b3774cd3295cf22b2ec35cd536d37623d->enter($__internal_44904c25e5562fce12d76dccc302ed2b3774cd3295cf22b2ec35cd536d37623d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_44904c25e5562fce12d76dccc302ed2b3774cd3295cf22b2ec35cd536d37623d->leave($__internal_44904c25e5562fce12d76dccc302ed2b3774cd3295cf22b2ec35cd536d37623d_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae3c4088eef738969353265b3c37407cd2bc642ccb38388c21be0390db594c9a = $this->env->getExtension("native_profiler");
        $__internal_ae3c4088eef738969353265b3c37407cd2bc642ccb38388c21be0390db594c9a->enter($__internal_ae3c4088eef738969353265b3c37407cd2bc642ccb38388c21be0390db594c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae3c4088eef738969353265b3c37407cd2bc642ccb38388c21be0390db594c9a->leave($__internal_ae3c4088eef738969353265b3c37407cd2bc642ccb38388c21be0390db594c9a_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_11eca6775fdd71e214000edfd8e5086ac4cc2c1716c126f128763696dcea10db = $this->env->getExtension("native_profiler");
        $__internal_11eca6775fdd71e214000edfd8e5086ac4cc2c1716c126f128763696dcea10db->enter($__internal_11eca6775fdd71e214000edfd8e5086ac4cc2c1716c126f128763696dcea10db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_11eca6775fdd71e214000edfd8e5086ac4cc2c1716c126f128763696dcea10db->leave($__internal_11eca6775fdd71e214000edfd8e5086ac4cc2c1716c126f128763696dcea10db_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cb9b0a323603aec2b589869a52813d78e8344c01569a51bdb56919389d05daf1 = $this->env->getExtension("native_profiler");
        $__internal_cb9b0a323603aec2b589869a52813d78e8344c01569a51bdb56919389d05daf1->enter($__internal_cb9b0a323603aec2b589869a52813d78e8344c01569a51bdb56919389d05daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_cb9b0a323603aec2b589869a52813d78e8344c01569a51bdb56919389d05daf1->leave($__internal_cb9b0a323603aec2b589869a52813d78e8344c01569a51bdb56919389d05daf1_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60a8123fcf9dabc55127b0aa83567e4b8054b93d91001d5b0a1d4a8909127944 = $this->env->getExtension("native_profiler");
        $__internal_60a8123fcf9dabc55127b0aa83567e4b8054b93d91001d5b0a1d4a8909127944->enter($__internal_60a8123fcf9dabc55127b0aa83567e4b8054b93d91001d5b0a1d4a8909127944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60a8123fcf9dabc55127b0aa83567e4b8054b93d91001d5b0a1d4a8909127944->leave($__internal_60a8123fcf9dabc55127b0aa83567e4b8054b93d91001d5b0a1d4a8909127944_prof);

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
