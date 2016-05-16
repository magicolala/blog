<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_59f055d52ecb462e8d3c621c8ad38c7165ae0806705bad456577eed5c21d69de extends Twig_Template
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
        $__internal_ed7a4746c9baa4f0151ea055dd8d45b6dcde2f7e823466ca4b03a3299b45fe45 = $this->env->getExtension("native_profiler");
        $__internal_ed7a4746c9baa4f0151ea055dd8d45b6dcde2f7e823466ca4b03a3299b45fe45->enter($__internal_ed7a4746c9baa4f0151ea055dd8d45b6dcde2f7e823466ca4b03a3299b45fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed7a4746c9baa4f0151ea055dd8d45b6dcde2f7e823466ca4b03a3299b45fe45->leave($__internal_ed7a4746c9baa4f0151ea055dd8d45b6dcde2f7e823466ca4b03a3299b45fe45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
