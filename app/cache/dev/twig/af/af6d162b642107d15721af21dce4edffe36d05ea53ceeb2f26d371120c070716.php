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
        $__internal_77f3c33421a547a2ec4d4cb87607277f7bb01a23994ffd857d81d070edb6cabd = $this->env->getExtension("native_profiler");
        $__internal_77f3c33421a547a2ec4d4cb87607277f7bb01a23994ffd857d81d070edb6cabd->enter($__internal_77f3c33421a547a2ec4d4cb87607277f7bb01a23994ffd857d81d070edb6cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_77f3c33421a547a2ec4d4cb87607277f7bb01a23994ffd857d81d070edb6cabd->leave($__internal_77f3c33421a547a2ec4d4cb87607277f7bb01a23994ffd857d81d070edb6cabd_prof);

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
