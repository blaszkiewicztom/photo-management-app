<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b241b3ee455cc9b3bdd1a3a215e64dad2f0fbce5dc2d88053b4452e8f2d0a7c7 extends Twig_Template
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
        $__internal_abd84f6bf8e766d35a4dc78e5e9a41344ce3b580aae874ad524018ae52429164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd84f6bf8e766d35a4dc78e5e9a41344ce3b580aae874ad524018ae52429164->enter($__internal_abd84f6bf8e766d35a4dc78e5e9a41344ce3b580aae874ad524018ae52429164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c11f1dd8d6b48e1909eb8ee373ac29d011ed6a828641a315c3c759e06a70a484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11f1dd8d6b48e1909eb8ee373ac29d011ed6a828641a315c3c759e06a70a484->enter($__internal_c11f1dd8d6b48e1909eb8ee373ac29d011ed6a828641a315c3c759e06a70a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_abd84f6bf8e766d35a4dc78e5e9a41344ce3b580aae874ad524018ae52429164->leave($__internal_abd84f6bf8e766d35a4dc78e5e9a41344ce3b580aae874ad524018ae52429164_prof);

        
        $__internal_c11f1dd8d6b48e1909eb8ee373ac29d011ed6a828641a315c3c759e06a70a484->leave($__internal_c11f1dd8d6b48e1909eb8ee373ac29d011ed6a828641a315c3c759e06a70a484_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
