<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fa4023c8feafee9d8e4de6342768c860c14450fef4c09319ca085d7d8e68e039 extends Twig_Template
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
        $__internal_f99ffc1796441c49a9e033ece3427282c746eef80548e0ab3b72d5fa6ff3a35d = $this->env->getExtension("native_profiler");
        $__internal_f99ffc1796441c49a9e033ece3427282c746eef80548e0ab3b72d5fa6ff3a35d->enter($__internal_f99ffc1796441c49a9e033ece3427282c746eef80548e0ab3b72d5fa6ff3a35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f99ffc1796441c49a9e033ece3427282c746eef80548e0ab3b72d5fa6ff3a35d->leave($__internal_f99ffc1796441c49a9e033ece3427282c746eef80548e0ab3b72d5fa6ff3a35d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
