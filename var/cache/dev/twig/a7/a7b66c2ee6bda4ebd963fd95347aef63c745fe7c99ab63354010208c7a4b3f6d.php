<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a83e3b2abf2856ff06149b88451421d091fb6a5414e82d3fc5b5e3865a8c6428 extends Twig_Template
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
        $__internal_4352b3119cb87ede22c6e0874ff4dc75021f3dd57628a860120be5704c781a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4352b3119cb87ede22c6e0874ff4dc75021f3dd57628a860120be5704c781a33->enter($__internal_4352b3119cb87ede22c6e0874ff4dc75021f3dd57628a860120be5704c781a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2f36bbd96f5f3b0fa0005f065d7073c766b26b8e3a0c1ac484d436b750c9db72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f36bbd96f5f3b0fa0005f065d7073c766b26b8e3a0c1ac484d436b750c9db72->enter($__internal_2f36bbd96f5f3b0fa0005f065d7073c766b26b8e3a0c1ac484d436b750c9db72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4352b3119cb87ede22c6e0874ff4dc75021f3dd57628a860120be5704c781a33->leave($__internal_4352b3119cb87ede22c6e0874ff4dc75021f3dd57628a860120be5704c781a33_prof);

        
        $__internal_2f36bbd96f5f3b0fa0005f065d7073c766b26b8e3a0c1ac484d436b750c9db72->leave($__internal_2f36bbd96f5f3b0fa0005f065d7073c766b26b8e3a0c1ac484d436b750c9db72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
