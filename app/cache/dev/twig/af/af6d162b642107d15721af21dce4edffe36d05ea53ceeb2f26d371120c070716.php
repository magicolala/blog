<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0e01b97807e49e47be70f92627dd475a2ea8b47204a6bcd7ecd3c752c4a72783 extends Twig_Template
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
        $__internal_d3484c4c48e23084b1aa22bf73d25de5a3780d2da9fb5289e154e023f1bb218b = $this->env->getExtension("native_profiler");
        $__internal_d3484c4c48e23084b1aa22bf73d25de5a3780d2da9fb5289e154e023f1bb218b->enter($__internal_d3484c4c48e23084b1aa22bf73d25de5a3780d2da9fb5289e154e023f1bb218b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d3484c4c48e23084b1aa22bf73d25de5a3780d2da9fb5289e154e023f1bb218b->leave($__internal_d3484c4c48e23084b1aa22bf73d25de5a3780d2da9fb5289e154e023f1bb218b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
