<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a2f056f3b7df34decb35d457daf503e7856df1f8fd0913b1d58a3992a7ef41be extends Twig_Template
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
        $__internal_9fdf34922b6c35fdc41a67e410db1ae2b16804e6f5304870b06f0b9b93029e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdf34922b6c35fdc41a67e410db1ae2b16804e6f5304870b06f0b9b93029e83->enter($__internal_9fdf34922b6c35fdc41a67e410db1ae2b16804e6f5304870b06f0b9b93029e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_79b4ff30e19fe0c4b43da1139f83abae1235c512d384856e93e47e6d0503ef33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b4ff30e19fe0c4b43da1139f83abae1235c512d384856e93e47e6d0503ef33->enter($__internal_79b4ff30e19fe0c4b43da1139f83abae1235c512d384856e93e47e6d0503ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9fdf34922b6c35fdc41a67e410db1ae2b16804e6f5304870b06f0b9b93029e83->leave($__internal_9fdf34922b6c35fdc41a67e410db1ae2b16804e6f5304870b06f0b9b93029e83_prof);

        
        $__internal_79b4ff30e19fe0c4b43da1139f83abae1235c512d384856e93e47e6d0503ef33->leave($__internal_79b4ff30e19fe0c4b43da1139f83abae1235c512d384856e93e47e6d0503ef33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
