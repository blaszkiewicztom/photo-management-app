<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_36e7882e4a4f96332d6800c6101500fa04b0b119a853fd8bdd9c72b389c61073 extends Twig_Template
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
        $__internal_fdf21b7113fea91781dcd1b72ae50f8ea39ee936fde5b20cbe305d0bc8152b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf21b7113fea91781dcd1b72ae50f8ea39ee936fde5b20cbe305d0bc8152b20->enter($__internal_fdf21b7113fea91781dcd1b72ae50f8ea39ee936fde5b20cbe305d0bc8152b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6eef0a4a70a99894bfa938b554a221d7bfab0f7586a8405b1421aa9abd4d7291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eef0a4a70a99894bfa938b554a221d7bfab0f7586a8405b1421aa9abd4d7291->enter($__internal_6eef0a4a70a99894bfa938b554a221d7bfab0f7586a8405b1421aa9abd4d7291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fdf21b7113fea91781dcd1b72ae50f8ea39ee936fde5b20cbe305d0bc8152b20->leave($__internal_fdf21b7113fea91781dcd1b72ae50f8ea39ee936fde5b20cbe305d0bc8152b20_prof);

        
        $__internal_6eef0a4a70a99894bfa938b554a221d7bfab0f7586a8405b1421aa9abd4d7291->leave($__internal_6eef0a4a70a99894bfa938b554a221d7bfab0f7586a8405b1421aa9abd4d7291_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
