<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff0c3f3e0fbc3de0ea42374be6504a82bb1fa56d0a3e1f4fb3e5359d08dbd757 extends Twig_Template
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
        $__internal_7775324fc6e38ad89088d1bfb525c7d21b3321ba51e696c0014fe72d060c2ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7775324fc6e38ad89088d1bfb525c7d21b3321ba51e696c0014fe72d060c2ddc->enter($__internal_7775324fc6e38ad89088d1bfb525c7d21b3321ba51e696c0014fe72d060c2ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3700aeb557282b9a7ef57ec078f3025d5e667bef9ce911e6fa325a057459d4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3700aeb557282b9a7ef57ec078f3025d5e667bef9ce911e6fa325a057459d4a1->enter($__internal_3700aeb557282b9a7ef57ec078f3025d5e667bef9ce911e6fa325a057459d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7775324fc6e38ad89088d1bfb525c7d21b3321ba51e696c0014fe72d060c2ddc->leave($__internal_7775324fc6e38ad89088d1bfb525c7d21b3321ba51e696c0014fe72d060c2ddc_prof);

        
        $__internal_3700aeb557282b9a7ef57ec078f3025d5e667bef9ce911e6fa325a057459d4a1->leave($__internal_3700aeb557282b9a7ef57ec078f3025d5e667bef9ce911e6fa325a057459d4a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
