<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_35cb1df13486512f2ff9b001219f58f72dee2b5f8cfdcb8c9546d9ebe7a3fce6 extends Twig_Template
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
        $__internal_36be525987f24120339a3383b7b3034f15439b5077ce56930ef09380fd8e9ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36be525987f24120339a3383b7b3034f15439b5077ce56930ef09380fd8e9ed5->enter($__internal_36be525987f24120339a3383b7b3034f15439b5077ce56930ef09380fd8e9ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1f6dde3a721cc2b076e56fe068aed9f262fb764ca67b4557fb81b03fc29607a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6dde3a721cc2b076e56fe068aed9f262fb764ca67b4557fb81b03fc29607a5->enter($__internal_1f6dde3a721cc2b076e56fe068aed9f262fb764ca67b4557fb81b03fc29607a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_36be525987f24120339a3383b7b3034f15439b5077ce56930ef09380fd8e9ed5->leave($__internal_36be525987f24120339a3383b7b3034f15439b5077ce56930ef09380fd8e9ed5_prof);

        
        $__internal_1f6dde3a721cc2b076e56fe068aed9f262fb764ca67b4557fb81b03fc29607a5->leave($__internal_1f6dde3a721cc2b076e56fe068aed9f262fb764ca67b4557fb81b03fc29607a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
