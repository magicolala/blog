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
        $__internal_5239d8a12c74a223f32e966f3bc4c8578a1efef33658668ee8026846b979f9e2 = $this->env->getExtension("native_profiler");
        $__internal_5239d8a12c74a223f32e966f3bc4c8578a1efef33658668ee8026846b979f9e2->enter($__internal_5239d8a12c74a223f32e966f3bc4c8578a1efef33658668ee8026846b979f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5239d8a12c74a223f32e966f3bc4c8578a1efef33658668ee8026846b979f9e2->leave($__internal_5239d8a12c74a223f32e966f3bc4c8578a1efef33658668ee8026846b979f9e2_prof);

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
