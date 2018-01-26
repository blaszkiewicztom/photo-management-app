<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_986d4c31291229d3121764758b73cd20ad69a7772377f5c3040cfc74301f5f32 extends Twig_Template
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
        $__internal_f8e4b095af5a92af74dcfe8a8a7a6a4ce9deb495bf06210d4ca2c2456a400766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e4b095af5a92af74dcfe8a8a7a6a4ce9deb495bf06210d4ca2c2456a400766->enter($__internal_f8e4b095af5a92af74dcfe8a8a7a6a4ce9deb495bf06210d4ca2c2456a400766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bdf118f865a6fab8424672f418ccf8504eb138e6c4d57a92e65b8628469f2f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf118f865a6fab8424672f418ccf8504eb138e6c4d57a92e65b8628469f2f03->enter($__internal_bdf118f865a6fab8424672f418ccf8504eb138e6c4d57a92e65b8628469f2f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f8e4b095af5a92af74dcfe8a8a7a6a4ce9deb495bf06210d4ca2c2456a400766->leave($__internal_f8e4b095af5a92af74dcfe8a8a7a6a4ce9deb495bf06210d4ca2c2456a400766_prof);

        
        $__internal_bdf118f865a6fab8424672f418ccf8504eb138e6c4d57a92e65b8628469f2f03->leave($__internal_bdf118f865a6fab8424672f418ccf8504eb138e6c4d57a92e65b8628469f2f03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
