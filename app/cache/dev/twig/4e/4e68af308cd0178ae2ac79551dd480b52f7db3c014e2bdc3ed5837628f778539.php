<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0460d724f7d9ccf876d5fef819cb92ce867fca29655d326aa405b9400cd321aa extends Twig_Template
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
        $__internal_6b51ef5c4faf0d71d180e3f6f2c10576cb2179c008b6ff2d3346d5c45a1e902a = $this->env->getExtension("native_profiler");
        $__internal_6b51ef5c4faf0d71d180e3f6f2c10576cb2179c008b6ff2d3346d5c45a1e902a->enter($__internal_6b51ef5c4faf0d71d180e3f6f2c10576cb2179c008b6ff2d3346d5c45a1e902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6b51ef5c4faf0d71d180e3f6f2c10576cb2179c008b6ff2d3346d5c45a1e902a->leave($__internal_6b51ef5c4faf0d71d180e3f6f2c10576cb2179c008b6ff2d3346d5c45a1e902a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
