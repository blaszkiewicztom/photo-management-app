<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1305fdd9d8d7b7a009c6dd8caec663436423689f9d1e40851ddbfb63ecd43ec4 extends Twig_Template
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
        $__internal_b2c5ef9d9cc98870cdd45b54a615b17a7253493ae06e98e2c6020f1a00ac1994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c5ef9d9cc98870cdd45b54a615b17a7253493ae06e98e2c6020f1a00ac1994->enter($__internal_b2c5ef9d9cc98870cdd45b54a615b17a7253493ae06e98e2c6020f1a00ac1994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_69f503fda88310b0028408ae57c9e71dfd659a1405bf239f78f767eda4c27090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f503fda88310b0028408ae57c9e71dfd659a1405bf239f78f767eda4c27090->enter($__internal_69f503fda88310b0028408ae57c9e71dfd659a1405bf239f78f767eda4c27090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b2c5ef9d9cc98870cdd45b54a615b17a7253493ae06e98e2c6020f1a00ac1994->leave($__internal_b2c5ef9d9cc98870cdd45b54a615b17a7253493ae06e98e2c6020f1a00ac1994_prof);

        
        $__internal_69f503fda88310b0028408ae57c9e71dfd659a1405bf239f78f767eda4c27090->leave($__internal_69f503fda88310b0028408ae57c9e71dfd659a1405bf239f78f767eda4c27090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
