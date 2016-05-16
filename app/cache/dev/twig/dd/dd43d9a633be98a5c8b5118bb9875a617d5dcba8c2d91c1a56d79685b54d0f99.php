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
        $__internal_618ae5cd35ee28299f848d61962d1490280289ed596d5e1fac2bc5fa6c8e11ac = $this->env->getExtension("native_profiler");
        $__internal_618ae5cd35ee28299f848d61962d1490280289ed596d5e1fac2bc5fa6c8e11ac->enter($__internal_618ae5cd35ee28299f848d61962d1490280289ed596d5e1fac2bc5fa6c8e11ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_618ae5cd35ee28299f848d61962d1490280289ed596d5e1fac2bc5fa6c8e11ac->leave($__internal_618ae5cd35ee28299f848d61962d1490280289ed596d5e1fac2bc5fa6c8e11ac_prof);

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
