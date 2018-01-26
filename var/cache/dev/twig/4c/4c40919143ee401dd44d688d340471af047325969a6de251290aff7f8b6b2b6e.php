<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4f0aed13e5da3622484c8aefd721a5a2508f89cb0ccb596d999e5d47a6ffc236 extends Twig_Template
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
        $__internal_9d0f94026d074823884799792f7a23aeb6c923c16fdc931a307625b64831996f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0f94026d074823884799792f7a23aeb6c923c16fdc931a307625b64831996f->enter($__internal_9d0f94026d074823884799792f7a23aeb6c923c16fdc931a307625b64831996f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_85b3337fbcac26559eb3722db183e741b2a12babe126c4b189b0fa0555bc85d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b3337fbcac26559eb3722db183e741b2a12babe126c4b189b0fa0555bc85d6->enter($__internal_85b3337fbcac26559eb3722db183e741b2a12babe126c4b189b0fa0555bc85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9d0f94026d074823884799792f7a23aeb6c923c16fdc931a307625b64831996f->leave($__internal_9d0f94026d074823884799792f7a23aeb6c923c16fdc931a307625b64831996f_prof);

        
        $__internal_85b3337fbcac26559eb3722db183e741b2a12babe126c4b189b0fa0555bc85d6->leave($__internal_85b3337fbcac26559eb3722db183e741b2a12babe126c4b189b0fa0555bc85d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
