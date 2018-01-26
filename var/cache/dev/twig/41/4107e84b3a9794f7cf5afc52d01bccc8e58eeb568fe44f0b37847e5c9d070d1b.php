<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5f19a65f930332c9dbf67b01f5d53d8115aa1c9a27b20e19ad7f51938ef8a707 extends Twig_Template
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
        $__internal_9263a1806fda8bbd3277d852881fa193ef0d31161030ec2b56640fa76ae96fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9263a1806fda8bbd3277d852881fa193ef0d31161030ec2b56640fa76ae96fa6->enter($__internal_9263a1806fda8bbd3277d852881fa193ef0d31161030ec2b56640fa76ae96fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0d2d7b75edf1460a5accfa455608beb79e01827fd9664451b502900d782dd28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2d7b75edf1460a5accfa455608beb79e01827fd9664451b502900d782dd28d->enter($__internal_0d2d7b75edf1460a5accfa455608beb79e01827fd9664451b502900d782dd28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9263a1806fda8bbd3277d852881fa193ef0d31161030ec2b56640fa76ae96fa6->leave($__internal_9263a1806fda8bbd3277d852881fa193ef0d31161030ec2b56640fa76ae96fa6_prof);

        
        $__internal_0d2d7b75edf1460a5accfa455608beb79e01827fd9664451b502900d782dd28d->leave($__internal_0d2d7b75edf1460a5accfa455608beb79e01827fd9664451b502900d782dd28d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
