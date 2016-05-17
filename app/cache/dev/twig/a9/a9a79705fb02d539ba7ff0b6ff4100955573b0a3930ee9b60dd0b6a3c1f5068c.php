<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_70a205243ce0af72fb83bf6ed2bdc02ea75f4041f862aeea4bfaf08f6b6048c5 extends Twig_Template
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
        $__internal_7ccbc89cb7fa318d216a3ba8cdac216e98a6f071e111948d59417b59a9f10312 = $this->env->getExtension("native_profiler");
        $__internal_7ccbc89cb7fa318d216a3ba8cdac216e98a6f071e111948d59417b59a9f10312->enter($__internal_7ccbc89cb7fa318d216a3ba8cdac216e98a6f071e111948d59417b59a9f10312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7ccbc89cb7fa318d216a3ba8cdac216e98a6f071e111948d59417b59a9f10312->leave($__internal_7ccbc89cb7fa318d216a3ba8cdac216e98a6f071e111948d59417b59a9f10312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
