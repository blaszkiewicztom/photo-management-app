<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79f558f5d54dcb7c888e4fd0e7bfc5eebc9f819e1f2c2036478f254bfbf59364 extends Twig_Template
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
        $__internal_7f7be5c54fc8fa00efe828be98b98b004b3a9edb0bbd6357fa0b12a86cd989a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7be5c54fc8fa00efe828be98b98b004b3a9edb0bbd6357fa0b12a86cd989a5->enter($__internal_7f7be5c54fc8fa00efe828be98b98b004b3a9edb0bbd6357fa0b12a86cd989a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5b508e32a842d989b8cabc758160bfe4184f8f9aae4d8707825462e9cad63703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b508e32a842d989b8cabc758160bfe4184f8f9aae4d8707825462e9cad63703->enter($__internal_5b508e32a842d989b8cabc758160bfe4184f8f9aae4d8707825462e9cad63703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7f7be5c54fc8fa00efe828be98b98b004b3a9edb0bbd6357fa0b12a86cd989a5->leave($__internal_7f7be5c54fc8fa00efe828be98b98b004b3a9edb0bbd6357fa0b12a86cd989a5_prof);

        
        $__internal_5b508e32a842d989b8cabc758160bfe4184f8f9aae4d8707825462e9cad63703->leave($__internal_5b508e32a842d989b8cabc758160bfe4184f8f9aae4d8707825462e9cad63703_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
