<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3641a8007e2101d5b8ce9b0059e9909173c728e1593f8fd3199055aa63837a7d extends Twig_Template
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
        $__internal_07ac398bc875dd5ff87c29ec0cd0c96d785583aacf36ee446f407a4fa27925d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ac398bc875dd5ff87c29ec0cd0c96d785583aacf36ee446f407a4fa27925d3->enter($__internal_07ac398bc875dd5ff87c29ec0cd0c96d785583aacf36ee446f407a4fa27925d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_38d6440cadfd851f90fb1775b749aedbba8c8155c5d7b581d4a49c0ada95c0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d6440cadfd851f90fb1775b749aedbba8c8155c5d7b581d4a49c0ada95c0e0->enter($__internal_38d6440cadfd851f90fb1775b749aedbba8c8155c5d7b581d4a49c0ada95c0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_07ac398bc875dd5ff87c29ec0cd0c96d785583aacf36ee446f407a4fa27925d3->leave($__internal_07ac398bc875dd5ff87c29ec0cd0c96d785583aacf36ee446f407a4fa27925d3_prof);

        
        $__internal_38d6440cadfd851f90fb1775b749aedbba8c8155c5d7b581d4a49c0ada95c0e0->leave($__internal_38d6440cadfd851f90fb1775b749aedbba8c8155c5d7b581d4a49c0ada95c0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
