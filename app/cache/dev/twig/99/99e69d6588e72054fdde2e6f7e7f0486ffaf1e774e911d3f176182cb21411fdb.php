<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6c132412643be34696f6ce0fb72c927cff994422123b0d2b72b3683d1675f213 extends Twig_Template
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
        $__internal_cecaa450058042baaeb10cb3420bddb83fdca8a9ad53164b0aeeeda3dac9bf47 = $this->env->getExtension("native_profiler");
        $__internal_cecaa450058042baaeb10cb3420bddb83fdca8a9ad53164b0aeeeda3dac9bf47->enter($__internal_cecaa450058042baaeb10cb3420bddb83fdca8a9ad53164b0aeeeda3dac9bf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cecaa450058042baaeb10cb3420bddb83fdca8a9ad53164b0aeeeda3dac9bf47->leave($__internal_cecaa450058042baaeb10cb3420bddb83fdca8a9ad53164b0aeeeda3dac9bf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
