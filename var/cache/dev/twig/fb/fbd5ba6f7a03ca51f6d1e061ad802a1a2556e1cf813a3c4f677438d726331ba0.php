<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5501c01480766b11e461a8f49fe185ccd3ee42b34febee5193a2941caf923d88 extends Twig_Template
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
        $__internal_a96feca89edba7a7c1e038b2ee12c93e5b7856aade215dd69098ab4765904fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96feca89edba7a7c1e038b2ee12c93e5b7856aade215dd69098ab4765904fab->enter($__internal_a96feca89edba7a7c1e038b2ee12c93e5b7856aade215dd69098ab4765904fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0fd467cba01948a61df547ac760164cc39e2da0f50f99e2d417719f70f3af8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd467cba01948a61df547ac760164cc39e2da0f50f99e2d417719f70f3af8c0->enter($__internal_0fd467cba01948a61df547ac760164cc39e2da0f50f99e2d417719f70f3af8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a96feca89edba7a7c1e038b2ee12c93e5b7856aade215dd69098ab4765904fab->leave($__internal_a96feca89edba7a7c1e038b2ee12c93e5b7856aade215dd69098ab4765904fab_prof);

        
        $__internal_0fd467cba01948a61df547ac760164cc39e2da0f50f99e2d417719f70f3af8c0->leave($__internal_0fd467cba01948a61df547ac760164cc39e2da0f50f99e2d417719f70f3af8c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
