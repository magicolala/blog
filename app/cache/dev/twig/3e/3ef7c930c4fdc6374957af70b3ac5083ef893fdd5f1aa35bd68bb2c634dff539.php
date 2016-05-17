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
        $__internal_e55e2e74aa44d719b4f656549a57d698cfbe6d1e8d9d5e0430ad4daa9327efa7 = $this->env->getExtension("native_profiler");
        $__internal_e55e2e74aa44d719b4f656549a57d698cfbe6d1e8d9d5e0430ad4daa9327efa7->enter($__internal_e55e2e74aa44d719b4f656549a57d698cfbe6d1e8d9d5e0430ad4daa9327efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e55e2e74aa44d719b4f656549a57d698cfbe6d1e8d9d5e0430ad4daa9327efa7->leave($__internal_e55e2e74aa44d719b4f656549a57d698cfbe6d1e8d9d5e0430ad4daa9327efa7_prof);

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
