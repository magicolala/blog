<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c7c19760e334955d86202876eed5d9aed870e7d7526df2fef21aff7217cbd15f extends Twig_Template
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
        $__internal_db307161d18284fd8cdeab0fd972cb9a87f68f21c7535fe0c4e1fd88688b7bb2 = $this->env->getExtension("native_profiler");
        $__internal_db307161d18284fd8cdeab0fd972cb9a87f68f21c7535fe0c4e1fd88688b7bb2->enter($__internal_db307161d18284fd8cdeab0fd972cb9a87f68f21c7535fe0c4e1fd88688b7bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db307161d18284fd8cdeab0fd972cb9a87f68f21c7535fe0c4e1fd88688b7bb2->leave($__internal_db307161d18284fd8cdeab0fd972cb9a87f68f21c7535fe0c4e1fd88688b7bb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
