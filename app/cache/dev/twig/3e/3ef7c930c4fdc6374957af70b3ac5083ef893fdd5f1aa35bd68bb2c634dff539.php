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
        $__internal_80339757e96101672addd994c8f4518a49cff4ad5d9134b5df6ea4ab68b6c615 = $this->env->getExtension("native_profiler");
        $__internal_80339757e96101672addd994c8f4518a49cff4ad5d9134b5df6ea4ab68b6c615->enter($__internal_80339757e96101672addd994c8f4518a49cff4ad5d9134b5df6ea4ab68b6c615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_80339757e96101672addd994c8f4518a49cff4ad5d9134b5df6ea4ab68b6c615->leave($__internal_80339757e96101672addd994c8f4518a49cff4ad5d9134b5df6ea4ab68b6c615_prof);

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
