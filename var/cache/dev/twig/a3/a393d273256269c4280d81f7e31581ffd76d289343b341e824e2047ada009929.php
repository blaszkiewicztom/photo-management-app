<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_763aed652a7e2b0cf73ebbd69f287288d87243d1e8382d3ef6a9f64aba0661dc extends Twig_Template
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
        $__internal_b13b5acc33dfb887235ac130ea6c51f7620e40bbc19e8d4362d1ef4fc9006f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13b5acc33dfb887235ac130ea6c51f7620e40bbc19e8d4362d1ef4fc9006f01->enter($__internal_b13b5acc33dfb887235ac130ea6c51f7620e40bbc19e8d4362d1ef4fc9006f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_800eb9e77ec829524cde3c2e0562df15d12f13bb5fca86e325afdec3ddde6c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800eb9e77ec829524cde3c2e0562df15d12f13bb5fca86e325afdec3ddde6c26->enter($__internal_800eb9e77ec829524cde3c2e0562df15d12f13bb5fca86e325afdec3ddde6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b13b5acc33dfb887235ac130ea6c51f7620e40bbc19e8d4362d1ef4fc9006f01->leave($__internal_b13b5acc33dfb887235ac130ea6c51f7620e40bbc19e8d4362d1ef4fc9006f01_prof);

        
        $__internal_800eb9e77ec829524cde3c2e0562df15d12f13bb5fca86e325afdec3ddde6c26->leave($__internal_800eb9e77ec829524cde3c2e0562df15d12f13bb5fca86e325afdec3ddde6c26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
