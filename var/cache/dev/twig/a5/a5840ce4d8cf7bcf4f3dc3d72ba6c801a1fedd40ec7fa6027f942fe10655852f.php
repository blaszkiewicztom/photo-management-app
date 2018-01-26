<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_073e8bd8836175acb9d9c3a2d16015cbc1797237a5dcb9eb0a485ca8f6465335 extends Twig_Template
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
        $__internal_dcda6f9a55114855c70829c92357773cc18769fe867df9b01822e604f25febdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcda6f9a55114855c70829c92357773cc18769fe867df9b01822e604f25febdf->enter($__internal_dcda6f9a55114855c70829c92357773cc18769fe867df9b01822e604f25febdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0f8c5d50f33b01a93749571f4cf7ad6a0ab4a2af49e9d74bf56ffe33c2615773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8c5d50f33b01a93749571f4cf7ad6a0ab4a2af49e9d74bf56ffe33c2615773->enter($__internal_0f8c5d50f33b01a93749571f4cf7ad6a0ab4a2af49e9d74bf56ffe33c2615773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dcda6f9a55114855c70829c92357773cc18769fe867df9b01822e604f25febdf->leave($__internal_dcda6f9a55114855c70829c92357773cc18769fe867df9b01822e604f25febdf_prof);

        
        $__internal_0f8c5d50f33b01a93749571f4cf7ad6a0ab4a2af49e9d74bf56ffe33c2615773->leave($__internal_0f8c5d50f33b01a93749571f4cf7ad6a0ab4a2af49e9d74bf56ffe33c2615773_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
