<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1c72c0ccbd07678a5e2396edc5ea9e597a19ded79a2da9807d53f8185850b6a2 extends Twig_Template
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
        $__internal_c792501e0e520780c343168daa5f024adf2f0848774ac546d692cd959a48c1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c792501e0e520780c343168daa5f024adf2f0848774ac546d692cd959a48c1ee->enter($__internal_c792501e0e520780c343168daa5f024adf2f0848774ac546d692cd959a48c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a915eea9a897f0b541b6f9983f3f59d0524da951ad57e2dbd530c77347185575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a915eea9a897f0b541b6f9983f3f59d0524da951ad57e2dbd530c77347185575->enter($__internal_a915eea9a897f0b541b6f9983f3f59d0524da951ad57e2dbd530c77347185575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c792501e0e520780c343168daa5f024adf2f0848774ac546d692cd959a48c1ee->leave($__internal_c792501e0e520780c343168daa5f024adf2f0848774ac546d692cd959a48c1ee_prof);

        
        $__internal_a915eea9a897f0b541b6f9983f3f59d0524da951ad57e2dbd530c77347185575->leave($__internal_a915eea9a897f0b541b6f9983f3f59d0524da951ad57e2dbd530c77347185575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
