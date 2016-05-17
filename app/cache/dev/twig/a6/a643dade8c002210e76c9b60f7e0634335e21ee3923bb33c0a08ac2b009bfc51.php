<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_10b5c0208f709e2a743c9a4bb292963d3873a199c107736e216b340dd9eccd2f extends Twig_Template
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
        $__internal_984ae46f963b7df8a06665d32a4fc2bed14ec05b5a2e72cff9a32bdb7b7d6464 = $this->env->getExtension("native_profiler");
        $__internal_984ae46f963b7df8a06665d32a4fc2bed14ec05b5a2e72cff9a32bdb7b7d6464->enter($__internal_984ae46f963b7df8a06665d32a4fc2bed14ec05b5a2e72cff9a32bdb7b7d6464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_984ae46f963b7df8a06665d32a4fc2bed14ec05b5a2e72cff9a32bdb7b7d6464->leave($__internal_984ae46f963b7df8a06665d32a4fc2bed14ec05b5a2e72cff9a32bdb7b7d6464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
