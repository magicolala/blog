<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_78ba4278893f9bd5f07e552996db51ddd2d5fd25d6ac2a1ec16296589c024a7b extends Twig_Template
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
        $__internal_dde93a62ffe1d71d37b5596640cfac2bb4c00ce180ee6b2ecd9bc6e07d1925cd = $this->env->getExtension("native_profiler");
        $__internal_dde93a62ffe1d71d37b5596640cfac2bb4c00ce180ee6b2ecd9bc6e07d1925cd->enter($__internal_dde93a62ffe1d71d37b5596640cfac2bb4c00ce180ee6b2ecd9bc6e07d1925cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dde93a62ffe1d71d37b5596640cfac2bb4c00ce180ee6b2ecd9bc6e07d1925cd->leave($__internal_dde93a62ffe1d71d37b5596640cfac2bb4c00ce180ee6b2ecd9bc6e07d1925cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
