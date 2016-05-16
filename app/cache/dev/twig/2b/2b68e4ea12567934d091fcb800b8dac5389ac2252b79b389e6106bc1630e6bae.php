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
        $__internal_d4b7312799c9e7d788d6b8e35c81a27ccf7877c810366bc395756b91b307489c = $this->env->getExtension("native_profiler");
        $__internal_d4b7312799c9e7d788d6b8e35c81a27ccf7877c810366bc395756b91b307489c->enter($__internal_d4b7312799c9e7d788d6b8e35c81a27ccf7877c810366bc395756b91b307489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4b7312799c9e7d788d6b8e35c81a27ccf7877c810366bc395756b91b307489c->leave($__internal_d4b7312799c9e7d788d6b8e35c81a27ccf7877c810366bc395756b91b307489c_prof);

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
