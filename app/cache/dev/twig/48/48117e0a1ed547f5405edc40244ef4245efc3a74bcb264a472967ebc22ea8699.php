<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a8060e25aa055ac361b499346a7062f3c5782e05ef19f3b5a66f0431c9fdb625 extends Twig_Template
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
        $__internal_f5456bec83125c9574a18fa1dff0a96e278e996fda887153d40a353ddbb11724 = $this->env->getExtension("native_profiler");
        $__internal_f5456bec83125c9574a18fa1dff0a96e278e996fda887153d40a353ddbb11724->enter($__internal_f5456bec83125c9574a18fa1dff0a96e278e996fda887153d40a353ddbb11724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f5456bec83125c9574a18fa1dff0a96e278e996fda887153d40a353ddbb11724->leave($__internal_f5456bec83125c9574a18fa1dff0a96e278e996fda887153d40a353ddbb11724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
