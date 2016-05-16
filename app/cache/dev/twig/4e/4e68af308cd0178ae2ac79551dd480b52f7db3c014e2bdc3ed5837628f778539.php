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
        $__internal_c5f5064228544e92db4bba37f847cb95e415529e8d7d6cad88342302090147eb = $this->env->getExtension("native_profiler");
        $__internal_c5f5064228544e92db4bba37f847cb95e415529e8d7d6cad88342302090147eb->enter($__internal_c5f5064228544e92db4bba37f847cb95e415529e8d7d6cad88342302090147eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c5f5064228544e92db4bba37f847cb95e415529e8d7d6cad88342302090147eb->leave($__internal_c5f5064228544e92db4bba37f847cb95e415529e8d7d6cad88342302090147eb_prof);

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
