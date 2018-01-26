<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9961aff56ccdd18fa9eb6810d2db8c9a73a558b08cd350f47ac33fb506cba18 extends Twig_Template
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
        $__internal_be7a1179d4c6a0d7060f04ddb4f8ac03feb55d390ec35aa49ad4e101e3965651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7a1179d4c6a0d7060f04ddb4f8ac03feb55d390ec35aa49ad4e101e3965651->enter($__internal_be7a1179d4c6a0d7060f04ddb4f8ac03feb55d390ec35aa49ad4e101e3965651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8215c1922fd9b53874289dddd1302d75ff71e77d3362c927077f85a6a9647ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8215c1922fd9b53874289dddd1302d75ff71e77d3362c927077f85a6a9647ef6->enter($__internal_8215c1922fd9b53874289dddd1302d75ff71e77d3362c927077f85a6a9647ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_be7a1179d4c6a0d7060f04ddb4f8ac03feb55d390ec35aa49ad4e101e3965651->leave($__internal_be7a1179d4c6a0d7060f04ddb4f8ac03feb55d390ec35aa49ad4e101e3965651_prof);

        
        $__internal_8215c1922fd9b53874289dddd1302d75ff71e77d3362c927077f85a6a9647ef6->leave($__internal_8215c1922fd9b53874289dddd1302d75ff71e77d3362c927077f85a6a9647ef6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
