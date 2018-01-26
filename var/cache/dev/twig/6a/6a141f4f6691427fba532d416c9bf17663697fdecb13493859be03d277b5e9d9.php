<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f2d4f2e0213ab28955cb91c450e006940e2ed50f8a3e847457decf01b2f99350 extends Twig_Template
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
        $__internal_da4368fa68a5d4d90fc0c922cd3fc7497d024511895d3998e2051a968dce5ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4368fa68a5d4d90fc0c922cd3fc7497d024511895d3998e2051a968dce5ec0->enter($__internal_da4368fa68a5d4d90fc0c922cd3fc7497d024511895d3998e2051a968dce5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9a45415c7996f4ecd4c37d27e4b6d4abb72888eca11594879ea36dfb8ea16012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a45415c7996f4ecd4c37d27e4b6d4abb72888eca11594879ea36dfb8ea16012->enter($__internal_9a45415c7996f4ecd4c37d27e4b6d4abb72888eca11594879ea36dfb8ea16012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_da4368fa68a5d4d90fc0c922cd3fc7497d024511895d3998e2051a968dce5ec0->leave($__internal_da4368fa68a5d4d90fc0c922cd3fc7497d024511895d3998e2051a968dce5ec0_prof);

        
        $__internal_9a45415c7996f4ecd4c37d27e4b6d4abb72888eca11594879ea36dfb8ea16012->leave($__internal_9a45415c7996f4ecd4c37d27e4b6d4abb72888eca11594879ea36dfb8ea16012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
