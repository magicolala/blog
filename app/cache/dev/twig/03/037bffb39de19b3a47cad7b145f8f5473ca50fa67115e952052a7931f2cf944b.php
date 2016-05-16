<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_433ee20c39ac0a7abd839ed7970368467af99ee817451dcdb70fb26e76b3a874 extends Twig_Template
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
        $__internal_3b6ced5a13413a62907e9fd7316270778a9807bff75f2ef6a4dabc2ff3197ad1 = $this->env->getExtension("native_profiler");
        $__internal_3b6ced5a13413a62907e9fd7316270778a9807bff75f2ef6a4dabc2ff3197ad1->enter($__internal_3b6ced5a13413a62907e9fd7316270778a9807bff75f2ef6a4dabc2ff3197ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3b6ced5a13413a62907e9fd7316270778a9807bff75f2ef6a4dabc2ff3197ad1->leave($__internal_3b6ced5a13413a62907e9fd7316270778a9807bff75f2ef6a4dabc2ff3197ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
