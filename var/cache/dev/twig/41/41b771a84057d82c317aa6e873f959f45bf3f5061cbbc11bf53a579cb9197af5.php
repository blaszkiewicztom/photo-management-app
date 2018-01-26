<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9206a7603d187f9284be916321fd78c66c812a63eb9c2ced3db38f94ce49e2a4 extends Twig_Template
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
        $__internal_757c77323acaace6ca7d99dbf0d286187b006f01f7124eb7bb0b4cc7f3123ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757c77323acaace6ca7d99dbf0d286187b006f01f7124eb7bb0b4cc7f3123ac4->enter($__internal_757c77323acaace6ca7d99dbf0d286187b006f01f7124eb7bb0b4cc7f3123ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_500ed8f124fcf5ca71967391d739c21a3d48ae779d4d9573e7290add1df848e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500ed8f124fcf5ca71967391d739c21a3d48ae779d4d9573e7290add1df848e5->enter($__internal_500ed8f124fcf5ca71967391d739c21a3d48ae779d4d9573e7290add1df848e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_757c77323acaace6ca7d99dbf0d286187b006f01f7124eb7bb0b4cc7f3123ac4->leave($__internal_757c77323acaace6ca7d99dbf0d286187b006f01f7124eb7bb0b4cc7f3123ac4_prof);

        
        $__internal_500ed8f124fcf5ca71967391d739c21a3d48ae779d4d9573e7290add1df848e5->leave($__internal_500ed8f124fcf5ca71967391d739c21a3d48ae779d4d9573e7290add1df848e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
