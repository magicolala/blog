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
        $__internal_464a6a46b2d99bb32a2a5ce1f9a4bd9961cd695d14e044bfd0f40965afa4c947 = $this->env->getExtension("native_profiler");
        $__internal_464a6a46b2d99bb32a2a5ce1f9a4bd9961cd695d14e044bfd0f40965afa4c947->enter($__internal_464a6a46b2d99bb32a2a5ce1f9a4bd9961cd695d14e044bfd0f40965afa4c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_464a6a46b2d99bb32a2a5ce1f9a4bd9961cd695d14e044bfd0f40965afa4c947->leave($__internal_464a6a46b2d99bb32a2a5ce1f9a4bd9961cd695d14e044bfd0f40965afa4c947_prof);

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
