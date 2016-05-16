<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a07e3b5bdff8bfaa1c8b24dee47b4e097eb307d8b11cc8ece92c07455f8cb41c extends Twig_Template
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
        $__internal_9deac7eac7739094f7edfabc5b6a97b4d6c2cec1c28be394d5fc17864a917c1d = $this->env->getExtension("native_profiler");
        $__internal_9deac7eac7739094f7edfabc5b6a97b4d6c2cec1c28be394d5fc17864a917c1d->enter($__internal_9deac7eac7739094f7edfabc5b6a97b4d6c2cec1c28be394d5fc17864a917c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9deac7eac7739094f7edfabc5b6a97b4d6c2cec1c28be394d5fc17864a917c1d->leave($__internal_9deac7eac7739094f7edfabc5b6a97b4d6c2cec1c28be394d5fc17864a917c1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
