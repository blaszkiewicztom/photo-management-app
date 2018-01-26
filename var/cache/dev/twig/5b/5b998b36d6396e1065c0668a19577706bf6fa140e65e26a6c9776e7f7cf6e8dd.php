<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d419c98b0908dfbd92e04cdc42f69b8b5b1c3c8e7b1f60691d0f0b54f59636fc extends Twig_Template
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
        $__internal_53b51ea54eb6a01ab61250c5fb1b04e39d6812e94d1c6f32dc5ae50c4f866ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b51ea54eb6a01ab61250c5fb1b04e39d6812e94d1c6f32dc5ae50c4f866ad6->enter($__internal_53b51ea54eb6a01ab61250c5fb1b04e39d6812e94d1c6f32dc5ae50c4f866ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ffe53353fc66ab103bfe88feeb455bb50c7146232fef6311a489a2380136b1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe53353fc66ab103bfe88feeb455bb50c7146232fef6311a489a2380136b1c4->enter($__internal_ffe53353fc66ab103bfe88feeb455bb50c7146232fef6311a489a2380136b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_53b51ea54eb6a01ab61250c5fb1b04e39d6812e94d1c6f32dc5ae50c4f866ad6->leave($__internal_53b51ea54eb6a01ab61250c5fb1b04e39d6812e94d1c6f32dc5ae50c4f866ad6_prof);

        
        $__internal_ffe53353fc66ab103bfe88feeb455bb50c7146232fef6311a489a2380136b1c4->leave($__internal_ffe53353fc66ab103bfe88feeb455bb50c7146232fef6311a489a2380136b1c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
