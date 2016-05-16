<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bde80b7d643bdc71c2ff3b72be6886a46bdca8445f489a08ab63d76ebb3f11a2 extends Twig_Template
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
        $__internal_aeccf7980169287eca02e083cb6f55a05be5e8d38ed34a580883232b39a73837 = $this->env->getExtension("native_profiler");
        $__internal_aeccf7980169287eca02e083cb6f55a05be5e8d38ed34a580883232b39a73837->enter($__internal_aeccf7980169287eca02e083cb6f55a05be5e8d38ed34a580883232b39a73837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aeccf7980169287eca02e083cb6f55a05be5e8d38ed34a580883232b39a73837->leave($__internal_aeccf7980169287eca02e083cb6f55a05be5e8d38ed34a580883232b39a73837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
