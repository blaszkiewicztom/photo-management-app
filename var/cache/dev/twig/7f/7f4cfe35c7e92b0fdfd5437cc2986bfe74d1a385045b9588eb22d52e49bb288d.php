<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_eebdc5cd0bd7426e9b239271196937d978c14c68e9d52cb63f4282857c183271 extends Twig_Template
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
        $__internal_660b1ed7dd8100cf2084baf9ab45fa36305fb100c2dc8ba60cbca9cc06d6f523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660b1ed7dd8100cf2084baf9ab45fa36305fb100c2dc8ba60cbca9cc06d6f523->enter($__internal_660b1ed7dd8100cf2084baf9ab45fa36305fb100c2dc8ba60cbca9cc06d6f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b7778fbd0e1ad20b993b5a81553e679a36f62575e9694bba2f4c9a68e844e2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7778fbd0e1ad20b993b5a81553e679a36f62575e9694bba2f4c9a68e844e2a9->enter($__internal_b7778fbd0e1ad20b993b5a81553e679a36f62575e9694bba2f4c9a68e844e2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_660b1ed7dd8100cf2084baf9ab45fa36305fb100c2dc8ba60cbca9cc06d6f523->leave($__internal_660b1ed7dd8100cf2084baf9ab45fa36305fb100c2dc8ba60cbca9cc06d6f523_prof);

        
        $__internal_b7778fbd0e1ad20b993b5a81553e679a36f62575e9694bba2f4c9a68e844e2a9->leave($__internal_b7778fbd0e1ad20b993b5a81553e679a36f62575e9694bba2f4c9a68e844e2a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
