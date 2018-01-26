<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c7caaeae7ca580913686c5f00f32745d8f867ab0f9529cef075713f176543d2e extends Twig_Template
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
        $__internal_96a8386f04882ff9b5ca586a1ce53249e88ee50f23d70e0984ab3a9ba36ea2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a8386f04882ff9b5ca586a1ce53249e88ee50f23d70e0984ab3a9ba36ea2e8->enter($__internal_96a8386f04882ff9b5ca586a1ce53249e88ee50f23d70e0984ab3a9ba36ea2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f0da79efa8a758ecd70e3f2632db154f2b1566f42c3c31d0ae571a50bb8ff9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0da79efa8a758ecd70e3f2632db154f2b1566f42c3c31d0ae571a50bb8ff9a6->enter($__internal_f0da79efa8a758ecd70e3f2632db154f2b1566f42c3c31d0ae571a50bb8ff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_96a8386f04882ff9b5ca586a1ce53249e88ee50f23d70e0984ab3a9ba36ea2e8->leave($__internal_96a8386f04882ff9b5ca586a1ce53249e88ee50f23d70e0984ab3a9ba36ea2e8_prof);

        
        $__internal_f0da79efa8a758ecd70e3f2632db154f2b1566f42c3c31d0ae571a50bb8ff9a6->leave($__internal_f0da79efa8a758ecd70e3f2632db154f2b1566f42c3c31d0ae571a50bb8ff9a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
