<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_dc8ccda5571cf5f3522b73c002e7d4c05ecd207e5ae2f24e9e201e2b3148664a extends Twig_Template
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
        $__internal_c12ea46730be35ed86a354e40787ab51c0c9ac1ee334d4715ba7164d781b0bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12ea46730be35ed86a354e40787ab51c0c9ac1ee334d4715ba7164d781b0bd9->enter($__internal_c12ea46730be35ed86a354e40787ab51c0c9ac1ee334d4715ba7164d781b0bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e279107c7819e460ae34f5e11bdaaa15f4aae4652a98981ee05fd9fdd0c987eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e279107c7819e460ae34f5e11bdaaa15f4aae4652a98981ee05fd9fdd0c987eb->enter($__internal_e279107c7819e460ae34f5e11bdaaa15f4aae4652a98981ee05fd9fdd0c987eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c12ea46730be35ed86a354e40787ab51c0c9ac1ee334d4715ba7164d781b0bd9->leave($__internal_c12ea46730be35ed86a354e40787ab51c0c9ac1ee334d4715ba7164d781b0bd9_prof);

        
        $__internal_e279107c7819e460ae34f5e11bdaaa15f4aae4652a98981ee05fd9fdd0c987eb->leave($__internal_e279107c7819e460ae34f5e11bdaaa15f4aae4652a98981ee05fd9fdd0c987eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
