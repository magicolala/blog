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
        $__internal_37b6eb3c97a408b32b38885dde04a5f4158ca0735502e0200154c88fc64baf4b = $this->env->getExtension("native_profiler");
        $__internal_37b6eb3c97a408b32b38885dde04a5f4158ca0735502e0200154c88fc64baf4b->enter($__internal_37b6eb3c97a408b32b38885dde04a5f4158ca0735502e0200154c88fc64baf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_37b6eb3c97a408b32b38885dde04a5f4158ca0735502e0200154c88fc64baf4b->leave($__internal_37b6eb3c97a408b32b38885dde04a5f4158ca0735502e0200154c88fc64baf4b_prof);

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
