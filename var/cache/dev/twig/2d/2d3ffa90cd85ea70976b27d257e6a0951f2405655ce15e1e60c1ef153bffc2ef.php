<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2a026706b21d85f2c620c05b36d0b378a3d93b476b82d4df40e4e0ab1299c2bc extends Twig_Template
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
        $__internal_b931166930d97447321c97dddc43a14e4a148622303ed8e68bd3bbe73c7eef1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b931166930d97447321c97dddc43a14e4a148622303ed8e68bd3bbe73c7eef1f->enter($__internal_b931166930d97447321c97dddc43a14e4a148622303ed8e68bd3bbe73c7eef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d33643b1fff3ddd978a049bce9b7b71ac0ad342c3659b9cbf4e8beaf73a4dc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33643b1fff3ddd978a049bce9b7b71ac0ad342c3659b9cbf4e8beaf73a4dc51->enter($__internal_d33643b1fff3ddd978a049bce9b7b71ac0ad342c3659b9cbf4e8beaf73a4dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b931166930d97447321c97dddc43a14e4a148622303ed8e68bd3bbe73c7eef1f->leave($__internal_b931166930d97447321c97dddc43a14e4a148622303ed8e68bd3bbe73c7eef1f_prof);

        
        $__internal_d33643b1fff3ddd978a049bce9b7b71ac0ad342c3659b9cbf4e8beaf73a4dc51->leave($__internal_d33643b1fff3ddd978a049bce9b7b71ac0ad342c3659b9cbf4e8beaf73a4dc51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
