<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7952e1c8594787413123aeb1575c7b2ebea4c402e0d23d05df41cb0374a6f2ea extends Twig_Template
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
        $__internal_4189e8c1f37f5aea2532ac2d7a3f64d6936cad465c1a5f6a80af419aad1be09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4189e8c1f37f5aea2532ac2d7a3f64d6936cad465c1a5f6a80af419aad1be09b->enter($__internal_4189e8c1f37f5aea2532ac2d7a3f64d6936cad465c1a5f6a80af419aad1be09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_4999ff83eab428239c6e6e4daafa2e05c74ed46211afdd5cae49940c48e0c2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4999ff83eab428239c6e6e4daafa2e05c74ed46211afdd5cae49940c48e0c2eb->enter($__internal_4999ff83eab428239c6e6e4daafa2e05c74ed46211afdd5cae49940c48e0c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4189e8c1f37f5aea2532ac2d7a3f64d6936cad465c1a5f6a80af419aad1be09b->leave($__internal_4189e8c1f37f5aea2532ac2d7a3f64d6936cad465c1a5f6a80af419aad1be09b_prof);

        
        $__internal_4999ff83eab428239c6e6e4daafa2e05c74ed46211afdd5cae49940c48e0c2eb->leave($__internal_4999ff83eab428239c6e6e4daafa2e05c74ed46211afdd5cae49940c48e0c2eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
