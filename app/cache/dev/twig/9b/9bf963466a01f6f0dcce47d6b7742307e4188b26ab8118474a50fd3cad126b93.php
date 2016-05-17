<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24554d2ef3b61bda1520e24ce6434be1d2291668ec7310c34e836804fa39aaf3 extends Twig_Template
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
        $__internal_21e8ffc152f8825189c3a5e3af258bf2464bfb4500ea3532c5cdca8a39920c81 = $this->env->getExtension("native_profiler");
        $__internal_21e8ffc152f8825189c3a5e3af258bf2464bfb4500ea3532c5cdca8a39920c81->enter($__internal_21e8ffc152f8825189c3a5e3af258bf2464bfb4500ea3532c5cdca8a39920c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_21e8ffc152f8825189c3a5e3af258bf2464bfb4500ea3532c5cdca8a39920c81->leave($__internal_21e8ffc152f8825189c3a5e3af258bf2464bfb4500ea3532c5cdca8a39920c81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
