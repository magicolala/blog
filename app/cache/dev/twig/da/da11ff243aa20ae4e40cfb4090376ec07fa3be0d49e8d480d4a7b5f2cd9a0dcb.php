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
        $__internal_ce72d82acd727022f3e1498a8c254fadc5c076552b2df4e0d3f3f0e88c23f1a8 = $this->env->getExtension("native_profiler");
        $__internal_ce72d82acd727022f3e1498a8c254fadc5c076552b2df4e0d3f3f0e88c23f1a8->enter($__internal_ce72d82acd727022f3e1498a8c254fadc5c076552b2df4e0d3f3f0e88c23f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ce72d82acd727022f3e1498a8c254fadc5c076552b2df4e0d3f3f0e88c23f1a8->leave($__internal_ce72d82acd727022f3e1498a8c254fadc5c076552b2df4e0d3f3f0e88c23f1a8_prof);

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
