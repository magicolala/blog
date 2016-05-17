<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e7f6ee3f652a64f070caacce4c1d9d9648f94c009a96aeaf8446420aa829d518 extends Twig_Template
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
        $__internal_92e179be44a6934fee6139f112bc7ba2d67cd09f28ffa8c1e655a3579002cd2e = $this->env->getExtension("native_profiler");
        $__internal_92e179be44a6934fee6139f112bc7ba2d67cd09f28ffa8c1e655a3579002cd2e->enter($__internal_92e179be44a6934fee6139f112bc7ba2d67cd09f28ffa8c1e655a3579002cd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_92e179be44a6934fee6139f112bc7ba2d67cd09f28ffa8c1e655a3579002cd2e->leave($__internal_92e179be44a6934fee6139f112bc7ba2d67cd09f28ffa8c1e655a3579002cd2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
