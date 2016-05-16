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
        $__internal_32f6720270413114ee3d3af081757d4f8412a8cbe679eb377a296bfbd932a294 = $this->env->getExtension("native_profiler");
        $__internal_32f6720270413114ee3d3af081757d4f8412a8cbe679eb377a296bfbd932a294->enter($__internal_32f6720270413114ee3d3af081757d4f8412a8cbe679eb377a296bfbd932a294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_32f6720270413114ee3d3af081757d4f8412a8cbe679eb377a296bfbd932a294->leave($__internal_32f6720270413114ee3d3af081757d4f8412a8cbe679eb377a296bfbd932a294_prof);

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
