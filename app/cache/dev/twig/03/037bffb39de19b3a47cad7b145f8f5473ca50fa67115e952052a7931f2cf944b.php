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
        $__internal_c262c2f3370aa8af91f1a485d04832d0e62fb3a3f7b5a48378b41dfd1aa06d45 = $this->env->getExtension("native_profiler");
        $__internal_c262c2f3370aa8af91f1a485d04832d0e62fb3a3f7b5a48378b41dfd1aa06d45->enter($__internal_c262c2f3370aa8af91f1a485d04832d0e62fb3a3f7b5a48378b41dfd1aa06d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c262c2f3370aa8af91f1a485d04832d0e62fb3a3f7b5a48378b41dfd1aa06d45->leave($__internal_c262c2f3370aa8af91f1a485d04832d0e62fb3a3f7b5a48378b41dfd1aa06d45_prof);

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
