<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_80e038e57198ce36372a13fe701c7b429301683d75f771ac1da8d2a473555ab2 extends Twig_Template
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
        $__internal_418665601bbfd1ebd491af1b32c9b0bb4e5aaa83b5880315355e69c7becfff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418665601bbfd1ebd491af1b32c9b0bb4e5aaa83b5880315355e69c7becfff68->enter($__internal_418665601bbfd1ebd491af1b32c9b0bb4e5aaa83b5880315355e69c7becfff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_060ec5165701e7dee155e30c938ae3ab8554f59fe401c26e956612036fafdde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060ec5165701e7dee155e30c938ae3ab8554f59fe401c26e956612036fafdde8->enter($__internal_060ec5165701e7dee155e30c938ae3ab8554f59fe401c26e956612036fafdde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_418665601bbfd1ebd491af1b32c9b0bb4e5aaa83b5880315355e69c7becfff68->leave($__internal_418665601bbfd1ebd491af1b32c9b0bb4e5aaa83b5880315355e69c7becfff68_prof);

        
        $__internal_060ec5165701e7dee155e30c938ae3ab8554f59fe401c26e956612036fafdde8->leave($__internal_060ec5165701e7dee155e30c938ae3ab8554f59fe401c26e956612036fafdde8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
