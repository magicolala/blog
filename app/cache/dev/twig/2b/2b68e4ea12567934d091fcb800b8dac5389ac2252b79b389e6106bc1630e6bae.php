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
        $__internal_f4fd3d2ec834a00567981e9fe8ca283b0f92d4a4afbac78631dec05d01ec0a67 = $this->env->getExtension("native_profiler");
        $__internal_f4fd3d2ec834a00567981e9fe8ca283b0f92d4a4afbac78631dec05d01ec0a67->enter($__internal_f4fd3d2ec834a00567981e9fe8ca283b0f92d4a4afbac78631dec05d01ec0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f4fd3d2ec834a00567981e9fe8ca283b0f92d4a4afbac78631dec05d01ec0a67->leave($__internal_f4fd3d2ec834a00567981e9fe8ca283b0f92d4a4afbac78631dec05d01ec0a67_prof);

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
