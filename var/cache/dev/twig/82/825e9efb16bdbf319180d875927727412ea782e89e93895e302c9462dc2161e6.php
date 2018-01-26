<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_129959f5cd242415409d7d567f8c0ed8fc338cdf2ffefb6d8bf32b6585c803cf extends Twig_Template
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
        $__internal_15754a34239d12664484438fabbebfeebc3a7ec9053d9d5a75756bd97320b111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15754a34239d12664484438fabbebfeebc3a7ec9053d9d5a75756bd97320b111->enter($__internal_15754a34239d12664484438fabbebfeebc3a7ec9053d9d5a75756bd97320b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_03597f0fa98a262aa63d0e11f539803b91b9f3bbcd00a9f069b21c4bf72f6618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03597f0fa98a262aa63d0e11f539803b91b9f3bbcd00a9f069b21c4bf72f6618->enter($__internal_03597f0fa98a262aa63d0e11f539803b91b9f3bbcd00a9f069b21c4bf72f6618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_15754a34239d12664484438fabbebfeebc3a7ec9053d9d5a75756bd97320b111->leave($__internal_15754a34239d12664484438fabbebfeebc3a7ec9053d9d5a75756bd97320b111_prof);

        
        $__internal_03597f0fa98a262aa63d0e11f539803b91b9f3bbcd00a9f069b21c4bf72f6618->leave($__internal_03597f0fa98a262aa63d0e11f539803b91b9f3bbcd00a9f069b21c4bf72f6618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
