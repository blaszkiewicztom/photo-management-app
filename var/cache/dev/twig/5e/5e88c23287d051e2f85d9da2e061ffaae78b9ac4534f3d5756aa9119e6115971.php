<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4ec976ae6e511fe4cb14b9f7759217057ff271d67276ab21a130ae6f55ae031c extends Twig_Template
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
        $__internal_2395b4b76ffee953a0fa0a1466dcf2296217f6525e79681eda684d38167b57bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2395b4b76ffee953a0fa0a1466dcf2296217f6525e79681eda684d38167b57bf->enter($__internal_2395b4b76ffee953a0fa0a1466dcf2296217f6525e79681eda684d38167b57bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c2fc93157e2199207e76a62be8796393eb28cd430831f3f2514c08fead761aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fc93157e2199207e76a62be8796393eb28cd430831f3f2514c08fead761aa2->enter($__internal_c2fc93157e2199207e76a62be8796393eb28cd430831f3f2514c08fead761aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2395b4b76ffee953a0fa0a1466dcf2296217f6525e79681eda684d38167b57bf->leave($__internal_2395b4b76ffee953a0fa0a1466dcf2296217f6525e79681eda684d38167b57bf_prof);

        
        $__internal_c2fc93157e2199207e76a62be8796393eb28cd430831f3f2514c08fead761aa2->leave($__internal_c2fc93157e2199207e76a62be8796393eb28cd430831f3f2514c08fead761aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
