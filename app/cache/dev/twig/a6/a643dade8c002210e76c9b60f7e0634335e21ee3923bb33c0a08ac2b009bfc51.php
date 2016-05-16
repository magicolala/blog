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
        $__internal_0e9326ad65a2651130cb041580a37c74b2df3e2bf487318ed5808717e5edac6f = $this->env->getExtension("native_profiler");
        $__internal_0e9326ad65a2651130cb041580a37c74b2df3e2bf487318ed5808717e5edac6f->enter($__internal_0e9326ad65a2651130cb041580a37c74b2df3e2bf487318ed5808717e5edac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0e9326ad65a2651130cb041580a37c74b2df3e2bf487318ed5808717e5edac6f->leave($__internal_0e9326ad65a2651130cb041580a37c74b2df3e2bf487318ed5808717e5edac6f_prof);

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
