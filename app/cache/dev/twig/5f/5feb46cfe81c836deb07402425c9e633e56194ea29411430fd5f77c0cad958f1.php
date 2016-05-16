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
        $__internal_c1920c371d9f590e120703ef88e8ad3e3a465b8e332ac5bd263623894f766a88 = $this->env->getExtension("native_profiler");
        $__internal_c1920c371d9f590e120703ef88e8ad3e3a465b8e332ac5bd263623894f766a88->enter($__internal_c1920c371d9f590e120703ef88e8ad3e3a465b8e332ac5bd263623894f766a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c1920c371d9f590e120703ef88e8ad3e3a465b8e332ac5bd263623894f766a88->leave($__internal_c1920c371d9f590e120703ef88e8ad3e3a465b8e332ac5bd263623894f766a88_prof);

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
