<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_85dbe5a7240fbf99b129b93de412380527e3b543d73444001aed10f029b89763 extends Twig_Template
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
        $__internal_4f9e77804779e9798d354890db1e00a87af02349c5665c85667ce02223859efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9e77804779e9798d354890db1e00a87af02349c5665c85667ce02223859efb->enter($__internal_4f9e77804779e9798d354890db1e00a87af02349c5665c85667ce02223859efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b5b6d5d743249659f38d7ae2a99d5705678003697a2adf2b8055f2b66009922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b6d5d743249659f38d7ae2a99d5705678003697a2adf2b8055f2b66009922a->enter($__internal_b5b6d5d743249659f38d7ae2a99d5705678003697a2adf2b8055f2b66009922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4f9e77804779e9798d354890db1e00a87af02349c5665c85667ce02223859efb->leave($__internal_4f9e77804779e9798d354890db1e00a87af02349c5665c85667ce02223859efb_prof);

        
        $__internal_b5b6d5d743249659f38d7ae2a99d5705678003697a2adf2b8055f2b66009922a->leave($__internal_b5b6d5d743249659f38d7ae2a99d5705678003697a2adf2b8055f2b66009922a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
