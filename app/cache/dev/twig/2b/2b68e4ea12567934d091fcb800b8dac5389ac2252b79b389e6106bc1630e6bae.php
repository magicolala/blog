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
        $__internal_94a096f9caab4cea83bb1974128debfffd113efe4e7a01cb88db66b700272729 = $this->env->getExtension("native_profiler");
        $__internal_94a096f9caab4cea83bb1974128debfffd113efe4e7a01cb88db66b700272729->enter($__internal_94a096f9caab4cea83bb1974128debfffd113efe4e7a01cb88db66b700272729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94a096f9caab4cea83bb1974128debfffd113efe4e7a01cb88db66b700272729->leave($__internal_94a096f9caab4cea83bb1974128debfffd113efe4e7a01cb88db66b700272729_prof);

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
