<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5e5246052948ce0d21587a127aacafa0d026335c97db89d7f349b89849128af2 extends Twig_Template
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
        $__internal_9f1058947ea8144f9960fa648aa404d81329a9784660f46d0717a3802477ca22 = $this->env->getExtension("native_profiler");
        $__internal_9f1058947ea8144f9960fa648aa404d81329a9784660f46d0717a3802477ca22->enter($__internal_9f1058947ea8144f9960fa648aa404d81329a9784660f46d0717a3802477ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9f1058947ea8144f9960fa648aa404d81329a9784660f46d0717a3802477ca22->leave($__internal_9f1058947ea8144f9960fa648aa404d81329a9784660f46d0717a3802477ca22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
