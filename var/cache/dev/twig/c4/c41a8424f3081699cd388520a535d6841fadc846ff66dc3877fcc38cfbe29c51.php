<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_00b70b5a1fb8ffe850b281467623a9e3ccdd1da8c044abd77ba2d7cfb006b6f2 extends Twig_Template
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
        $__internal_1acd75683f6b06121f850458f7fbb9b8325dd0b414e88d274ae0cf2f45f5c6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acd75683f6b06121f850458f7fbb9b8325dd0b414e88d274ae0cf2f45f5c6e1->enter($__internal_1acd75683f6b06121f850458f7fbb9b8325dd0b414e88d274ae0cf2f45f5c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_c1adc7e41b8955ba3d035f315daec8c6532ae3759f0de93848f7ae0738b3f0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1adc7e41b8955ba3d035f315daec8c6532ae3759f0de93848f7ae0738b3f0d7->enter($__internal_c1adc7e41b8955ba3d035f315daec8c6532ae3759f0de93848f7ae0738b3f0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_1acd75683f6b06121f850458f7fbb9b8325dd0b414e88d274ae0cf2f45f5c6e1->leave($__internal_1acd75683f6b06121f850458f7fbb9b8325dd0b414e88d274ae0cf2f45f5c6e1_prof);

        
        $__internal_c1adc7e41b8955ba3d035f315daec8c6532ae3759f0de93848f7ae0738b3f0d7->leave($__internal_c1adc7e41b8955ba3d035f315daec8c6532ae3759f0de93848f7ae0738b3f0d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
