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
        $__internal_c80cf267e7f47fc7620c24479a701a8b14d36e1b328f78b550ca20fe2250e6e8 = $this->env->getExtension("native_profiler");
        $__internal_c80cf267e7f47fc7620c24479a701a8b14d36e1b328f78b550ca20fe2250e6e8->enter($__internal_c80cf267e7f47fc7620c24479a701a8b14d36e1b328f78b550ca20fe2250e6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c80cf267e7f47fc7620c24479a701a8b14d36e1b328f78b550ca20fe2250e6e8->leave($__internal_c80cf267e7f47fc7620c24479a701a8b14d36e1b328f78b550ca20fe2250e6e8_prof);

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
