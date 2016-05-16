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
        $__internal_2876efbc98ec2b7b9626fa4f6960f61fff849f798824bd27d2a56efe07461f46 = $this->env->getExtension("native_profiler");
        $__internal_2876efbc98ec2b7b9626fa4f6960f61fff849f798824bd27d2a56efe07461f46->enter($__internal_2876efbc98ec2b7b9626fa4f6960f61fff849f798824bd27d2a56efe07461f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2876efbc98ec2b7b9626fa4f6960f61fff849f798824bd27d2a56efe07461f46->leave($__internal_2876efbc98ec2b7b9626fa4f6960f61fff849f798824bd27d2a56efe07461f46_prof);

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
