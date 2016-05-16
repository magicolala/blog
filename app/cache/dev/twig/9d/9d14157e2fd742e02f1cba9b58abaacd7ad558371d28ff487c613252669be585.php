<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c7c19760e334955d86202876eed5d9aed870e7d7526df2fef21aff7217cbd15f extends Twig_Template
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
        $__internal_c233e71f8e899619174fdc4ec3607844f935ee7a97826aa27c68bee3ea2eabc9 = $this->env->getExtension("native_profiler");
        $__internal_c233e71f8e899619174fdc4ec3607844f935ee7a97826aa27c68bee3ea2eabc9->enter($__internal_c233e71f8e899619174fdc4ec3607844f935ee7a97826aa27c68bee3ea2eabc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c233e71f8e899619174fdc4ec3607844f935ee7a97826aa27c68bee3ea2eabc9->leave($__internal_c233e71f8e899619174fdc4ec3607844f935ee7a97826aa27c68bee3ea2eabc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
