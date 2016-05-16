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
        $__internal_55f0680e6e3a0aac87f464ef9ee36e5f8a40d6c9ab9f5bd0e13b9c5b6325a8ec = $this->env->getExtension("native_profiler");
        $__internal_55f0680e6e3a0aac87f464ef9ee36e5f8a40d6c9ab9f5bd0e13b9c5b6325a8ec->enter($__internal_55f0680e6e3a0aac87f464ef9ee36e5f8a40d6c9ab9f5bd0e13b9c5b6325a8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_55f0680e6e3a0aac87f464ef9ee36e5f8a40d6c9ab9f5bd0e13b9c5b6325a8ec->leave($__internal_55f0680e6e3a0aac87f464ef9ee36e5f8a40d6c9ab9f5bd0e13b9c5b6325a8ec_prof);

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
