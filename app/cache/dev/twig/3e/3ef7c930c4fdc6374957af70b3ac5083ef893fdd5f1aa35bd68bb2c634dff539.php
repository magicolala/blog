<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11c2e1ee42640421eee14f8f84b764fdd7ac7a8d5a1f180776f0a93faa531d51 extends Twig_Template
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
        $__internal_ee77dfae704ba21e4a2fa16cb46e07e8fe9aeb59aaccc3e615f136a96b63f438 = $this->env->getExtension("native_profiler");
        $__internal_ee77dfae704ba21e4a2fa16cb46e07e8fe9aeb59aaccc3e615f136a96b63f438->enter($__internal_ee77dfae704ba21e4a2fa16cb46e07e8fe9aeb59aaccc3e615f136a96b63f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ee77dfae704ba21e4a2fa16cb46e07e8fe9aeb59aaccc3e615f136a96b63f438->leave($__internal_ee77dfae704ba21e4a2fa16cb46e07e8fe9aeb59aaccc3e615f136a96b63f438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
