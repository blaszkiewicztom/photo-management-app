<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_798b57c5a5c886445791e7bb156077280bda52ee2cbaff71bd25f1980cf7ef1f extends Twig_Template
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
        $__internal_0e60eeae40724bce70ec4d1284c8649343eec45b9345c888e19e51d57d1743dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e60eeae40724bce70ec4d1284c8649343eec45b9345c888e19e51d57d1743dc->enter($__internal_0e60eeae40724bce70ec4d1284c8649343eec45b9345c888e19e51d57d1743dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8ed6103341f413cfab35e91eb5c198b34498ac16d416defc00a04e129bf0d44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6103341f413cfab35e91eb5c198b34498ac16d416defc00a04e129bf0d44b->enter($__internal_8ed6103341f413cfab35e91eb5c198b34498ac16d416defc00a04e129bf0d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0e60eeae40724bce70ec4d1284c8649343eec45b9345c888e19e51d57d1743dc->leave($__internal_0e60eeae40724bce70ec4d1284c8649343eec45b9345c888e19e51d57d1743dc_prof);

        
        $__internal_8ed6103341f413cfab35e91eb5c198b34498ac16d416defc00a04e129bf0d44b->leave($__internal_8ed6103341f413cfab35e91eb5c198b34498ac16d416defc00a04e129bf0d44b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
