<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9d6e46da9b7ac8bd6bff327755707adfb5b73566455b6d5a3aa7844f03a41c83 extends Twig_Template
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
        $__internal_afd0e57847678f1f5feec788e6ab851f3de02326930b828a28c41f27b3592dd3 = $this->env->getExtension("native_profiler");
        $__internal_afd0e57847678f1f5feec788e6ab851f3de02326930b828a28c41f27b3592dd3->enter($__internal_afd0e57847678f1f5feec788e6ab851f3de02326930b828a28c41f27b3592dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_afd0e57847678f1f5feec788e6ab851f3de02326930b828a28c41f27b3592dd3->leave($__internal_afd0e57847678f1f5feec788e6ab851f3de02326930b828a28c41f27b3592dd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
