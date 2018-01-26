<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6de72676ab4def473a065713c9db6f795272cbc53f748243c446a1546c865061 extends Twig_Template
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
        $__internal_6f585a3043165a5e2d74a4d8632e934e5adc73ccb7ad994ea2d740bfc6f37a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f585a3043165a5e2d74a4d8632e934e5adc73ccb7ad994ea2d740bfc6f37a86->enter($__internal_6f585a3043165a5e2d74a4d8632e934e5adc73ccb7ad994ea2d740bfc6f37a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9fb2cf1680a105daf9e2e846073b61944ff7aead42f34e70ce7fb54f81897b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb2cf1680a105daf9e2e846073b61944ff7aead42f34e70ce7fb54f81897b39->enter($__internal_9fb2cf1680a105daf9e2e846073b61944ff7aead42f34e70ce7fb54f81897b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6f585a3043165a5e2d74a4d8632e934e5adc73ccb7ad994ea2d740bfc6f37a86->leave($__internal_6f585a3043165a5e2d74a4d8632e934e5adc73ccb7ad994ea2d740bfc6f37a86_prof);

        
        $__internal_9fb2cf1680a105daf9e2e846073b61944ff7aead42f34e70ce7fb54f81897b39->leave($__internal_9fb2cf1680a105daf9e2e846073b61944ff7aead42f34e70ce7fb54f81897b39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
