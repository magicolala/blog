<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_78ba4278893f9bd5f07e552996db51ddd2d5fd25d6ac2a1ec16296589c024a7b extends Twig_Template
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
        $__internal_2ab4a7d6a18ab1f08cdeab8c13d958f8d46f799ca5739435e6fae8f6f8d8af48 = $this->env->getExtension("native_profiler");
        $__internal_2ab4a7d6a18ab1f08cdeab8c13d958f8d46f799ca5739435e6fae8f6f8d8af48->enter($__internal_2ab4a7d6a18ab1f08cdeab8c13d958f8d46f799ca5739435e6fae8f6f8d8af48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2ab4a7d6a18ab1f08cdeab8c13d958f8d46f799ca5739435e6fae8f6f8d8af48->leave($__internal_2ab4a7d6a18ab1f08cdeab8c13d958f8d46f799ca5739435e6fae8f6f8d8af48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
