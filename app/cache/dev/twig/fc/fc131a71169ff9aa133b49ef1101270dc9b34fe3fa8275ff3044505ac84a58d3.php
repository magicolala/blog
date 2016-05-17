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
        $__internal_82ed097fae9c32499816e9c4b88a611c0fd73e2a6113e0ba3b49bf09c3d1aa2f = $this->env->getExtension("native_profiler");
        $__internal_82ed097fae9c32499816e9c4b88a611c0fd73e2a6113e0ba3b49bf09c3d1aa2f->enter($__internal_82ed097fae9c32499816e9c4b88a611c0fd73e2a6113e0ba3b49bf09c3d1aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_82ed097fae9c32499816e9c4b88a611c0fd73e2a6113e0ba3b49bf09c3d1aa2f->leave($__internal_82ed097fae9c32499816e9c4b88a611c0fd73e2a6113e0ba3b49bf09c3d1aa2f_prof);

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
