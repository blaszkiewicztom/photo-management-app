<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_301c6e09455b8f09533713885f0b1ff46f85777a4ebef71dbb96e81f12981155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5385cbefc93739e9b8c8b0314a19159769a4247d70d38f9d06a8b96beae644b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5385cbefc93739e9b8c8b0314a19159769a4247d70d38f9d06a8b96beae644b4->enter($__internal_5385cbefc93739e9b8c8b0314a19159769a4247d70d38f9d06a8b96beae644b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c488f202d0f4b422d534dd1ac1d9c6e38e8d4d5f6800d6308dd6b93ad4a38750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c488f202d0f4b422d534dd1ac1d9c6e38e8d4d5f6800d6308dd6b93ad4a38750->enter($__internal_c488f202d0f4b422d534dd1ac1d9c6e38e8d4d5f6800d6308dd6b93ad4a38750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5385cbefc93739e9b8c8b0314a19159769a4247d70d38f9d06a8b96beae644b4->leave($__internal_5385cbefc93739e9b8c8b0314a19159769a4247d70d38f9d06a8b96beae644b4_prof);

        
        $__internal_c488f202d0f4b422d534dd1ac1d9c6e38e8d4d5f6800d6308dd6b93ad4a38750->leave($__internal_c488f202d0f4b422d534dd1ac1d9c6e38e8d4d5f6800d6308dd6b93ad4a38750_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbeaa62c5f4560db0a909075ecc238f9b9abe8c9033869f446d08a18ca00a967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeaa62c5f4560db0a909075ecc238f9b9abe8c9033869f446d08a18ca00a967->enter($__internal_dbeaa62c5f4560db0a909075ecc238f9b9abe8c9033869f446d08a18ca00a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30fc99e462b36c8309ac90df958927e666a01d346c788abe81b06b2a0f6d8f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fc99e462b36c8309ac90df958927e666a01d346c788abe81b06b2a0f6d8f5f->enter($__internal_30fc99e462b36c8309ac90df958927e666a01d346c788abe81b06b2a0f6d8f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_30fc99e462b36c8309ac90df958927e666a01d346c788abe81b06b2a0f6d8f5f->leave($__internal_30fc99e462b36c8309ac90df958927e666a01d346c788abe81b06b2a0f6d8f5f_prof);

        
        $__internal_dbeaa62c5f4560db0a909075ecc238f9b9abe8c9033869f446d08a18ca00a967->leave($__internal_dbeaa62c5f4560db0a909075ecc238f9b9abe8c9033869f446d08a18ca00a967_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ce82d0637d4e72c320cf343227e9ed0d69385f6e7fb7e7ffc158be0a10de79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ce82d0637d4e72c320cf343227e9ed0d69385f6e7fb7e7ffc158be0a10de79->enter($__internal_92ce82d0637d4e72c320cf343227e9ed0d69385f6e7fb7e7ffc158be0a10de79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_967e957dee70a5af4972f0080674837f1642ccb7c99b2f3b99fb6132bf2d912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967e957dee70a5af4972f0080674837f1642ccb7c99b2f3b99fb6132bf2d912c->enter($__internal_967e957dee70a5af4972f0080674837f1642ccb7c99b2f3b99fb6132bf2d912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_967e957dee70a5af4972f0080674837f1642ccb7c99b2f3b99fb6132bf2d912c->leave($__internal_967e957dee70a5af4972f0080674837f1642ccb7c99b2f3b99fb6132bf2d912c_prof);

        
        $__internal_92ce82d0637d4e72c320cf343227e9ed0d69385f6e7fb7e7ffc158be0a10de79->leave($__internal_92ce82d0637d4e72c320cf343227e9ed0d69385f6e7fb7e7ffc158be0a10de79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
