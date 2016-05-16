<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cf760eb680e29488b591fb7f53ad8e321a897e4e561a5712ee38dd82904ac020 extends Twig_Template
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
        $__internal_005f1e4bce9793b25679eba771a1399b0c4619d2fc16101082c777e50f4f4aa8 = $this->env->getExtension("native_profiler");
        $__internal_005f1e4bce9793b25679eba771a1399b0c4619d2fc16101082c777e50f4f4aa8->enter($__internal_005f1e4bce9793b25679eba771a1399b0c4619d2fc16101082c777e50f4f4aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_005f1e4bce9793b25679eba771a1399b0c4619d2fc16101082c777e50f4f4aa8->leave($__internal_005f1e4bce9793b25679eba771a1399b0c4619d2fc16101082c777e50f4f4aa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
