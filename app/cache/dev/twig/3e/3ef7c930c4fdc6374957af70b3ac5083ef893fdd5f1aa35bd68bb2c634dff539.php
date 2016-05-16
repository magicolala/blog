<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11c2e1ee42640421eee14f8f84b764fdd7ac7a8d5a1f180776f0a93faa531d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88927ec11d3f5db85b5bd745a83d92d8783af14f1e5603f1eefdc7c9453be01f = $this->env->getExtension("native_profiler");
        $__internal_88927ec11d3f5db85b5bd745a83d92d8783af14f1e5603f1eefdc7c9453be01f->enter($__internal_88927ec11d3f5db85b5bd745a83d92d8783af14f1e5603f1eefdc7c9453be01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_88927ec11d3f5db85b5bd745a83d92d8783af14f1e5603f1eefdc7c9453be01f->leave($__internal_88927ec11d3f5db85b5bd745a83d92d8783af14f1e5603f1eefdc7c9453be01f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
