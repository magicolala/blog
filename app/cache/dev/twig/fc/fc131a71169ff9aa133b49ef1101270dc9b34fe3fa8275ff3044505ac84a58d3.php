<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f9df6f59780fbeda720a9079b4cc78b92c94faf0711e117bbd2a104ddd9eaab2 extends Twig_Template
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
        $__internal_99ed2a4a65c076fcf93024018388702e24f134991f6cb786ffaa0f6cd13ad0d0 = $this->env->getExtension("native_profiler");
        $__internal_99ed2a4a65c076fcf93024018388702e24f134991f6cb786ffaa0f6cd13ad0d0->enter($__internal_99ed2a4a65c076fcf93024018388702e24f134991f6cb786ffaa0f6cd13ad0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99ed2a4a65c076fcf93024018388702e24f134991f6cb786ffaa0f6cd13ad0d0->leave($__internal_99ed2a4a65c076fcf93024018388702e24f134991f6cb786ffaa0f6cd13ad0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
