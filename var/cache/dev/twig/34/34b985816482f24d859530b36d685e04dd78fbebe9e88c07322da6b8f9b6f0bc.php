<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_de946ca8aff5cd80057ce5464367ca5bbd19d11e57f8b052aa7c68ceb98db548 extends Twig_Template
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
        $__internal_d775e1d8922b511b7e82ca6f42eab2ca90e82a85071da3d54a764e9fd172e755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d775e1d8922b511b7e82ca6f42eab2ca90e82a85071da3d54a764e9fd172e755->enter($__internal_d775e1d8922b511b7e82ca6f42eab2ca90e82a85071da3d54a764e9fd172e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7a22ac366428fdbeae50a0c72130e94de44c84b84eb21ec58679c69f4e7469e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a22ac366428fdbeae50a0c72130e94de44c84b84eb21ec58679c69f4e7469e0->enter($__internal_7a22ac366428fdbeae50a0c72130e94de44c84b84eb21ec58679c69f4e7469e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d775e1d8922b511b7e82ca6f42eab2ca90e82a85071da3d54a764e9fd172e755->leave($__internal_d775e1d8922b511b7e82ca6f42eab2ca90e82a85071da3d54a764e9fd172e755_prof);

        
        $__internal_7a22ac366428fdbeae50a0c72130e94de44c84b84eb21ec58679c69f4e7469e0->leave($__internal_7a22ac366428fdbeae50a0c72130e94de44c84b84eb21ec58679c69f4e7469e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
