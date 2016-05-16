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
        $__internal_116618a01c715a3dd36d3efe0ce0244c238f7e44376ec6ee01561950b2304256 = $this->env->getExtension("native_profiler");
        $__internal_116618a01c715a3dd36d3efe0ce0244c238f7e44376ec6ee01561950b2304256->enter($__internal_116618a01c715a3dd36d3efe0ce0244c238f7e44376ec6ee01561950b2304256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_116618a01c715a3dd36d3efe0ce0244c238f7e44376ec6ee01561950b2304256->leave($__internal_116618a01c715a3dd36d3efe0ce0244c238f7e44376ec6ee01561950b2304256_prof);

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
