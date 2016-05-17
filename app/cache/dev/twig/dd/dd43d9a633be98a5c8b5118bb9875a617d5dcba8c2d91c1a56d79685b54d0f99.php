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
        $__internal_dbc4f95427de8808bf89f085fe76ed74bc7408ac26e803bad7aac4fc1a67e11d = $this->env->getExtension("native_profiler");
        $__internal_dbc4f95427de8808bf89f085fe76ed74bc7408ac26e803bad7aac4fc1a67e11d->enter($__internal_dbc4f95427de8808bf89f085fe76ed74bc7408ac26e803bad7aac4fc1a67e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dbc4f95427de8808bf89f085fe76ed74bc7408ac26e803bad7aac4fc1a67e11d->leave($__internal_dbc4f95427de8808bf89f085fe76ed74bc7408ac26e803bad7aac4fc1a67e11d_prof);

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
