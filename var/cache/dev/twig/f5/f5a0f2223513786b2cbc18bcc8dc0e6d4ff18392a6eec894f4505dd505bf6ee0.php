<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c5fb76e0492696c236c3090de4e55bb4f31e75a55209476bd085fd3d86e5cb60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49ce4f7afdd71c7d706acd8c21b41f5da0094371e4b04b759ce4f31e5d2ebb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ce4f7afdd71c7d706acd8c21b41f5da0094371e4b04b759ce4f31e5d2ebb93->enter($__internal_49ce4f7afdd71c7d706acd8c21b41f5da0094371e4b04b759ce4f31e5d2ebb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_85ef5d13eb0bda9ae811aaeaa2d13753c4f19fbad97b5cc6321502a7ce0b1329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ef5d13eb0bda9ae811aaeaa2d13753c4f19fbad97b5cc6321502a7ce0b1329->enter($__internal_85ef5d13eb0bda9ae811aaeaa2d13753c4f19fbad97b5cc6321502a7ce0b1329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49ce4f7afdd71c7d706acd8c21b41f5da0094371e4b04b759ce4f31e5d2ebb93->leave($__internal_49ce4f7afdd71c7d706acd8c21b41f5da0094371e4b04b759ce4f31e5d2ebb93_prof);

        
        $__internal_85ef5d13eb0bda9ae811aaeaa2d13753c4f19fbad97b5cc6321502a7ce0b1329->leave($__internal_85ef5d13eb0bda9ae811aaeaa2d13753c4f19fbad97b5cc6321502a7ce0b1329_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f919683e2a26679d6d73618e255619559e37e113ec5530b538444fd71709d296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f919683e2a26679d6d73618e255619559e37e113ec5530b538444fd71709d296->enter($__internal_f919683e2a26679d6d73618e255619559e37e113ec5530b538444fd71709d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5b6470fc73e0b95ed9016d0814709f654ebb54b9991e37b6d10cef69a543e699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6470fc73e0b95ed9016d0814709f654ebb54b9991e37b6d10cef69a543e699->enter($__internal_5b6470fc73e0b95ed9016d0814709f654ebb54b9991e37b6d10cef69a543e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5b6470fc73e0b95ed9016d0814709f654ebb54b9991e37b6d10cef69a543e699->leave($__internal_5b6470fc73e0b95ed9016d0814709f654ebb54b9991e37b6d10cef69a543e699_prof);

        
        $__internal_f919683e2a26679d6d73618e255619559e37e113ec5530b538444fd71709d296->leave($__internal_f919683e2a26679d6d73618e255619559e37e113ec5530b538444fd71709d296_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d91d96b203ad4ba1e94b07a30e0532e842730044d8a1829634611dd166e60423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91d96b203ad4ba1e94b07a30e0532e842730044d8a1829634611dd166e60423->enter($__internal_d91d96b203ad4ba1e94b07a30e0532e842730044d8a1829634611dd166e60423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9879a61524341b67945b91be5b920d70e31f0d3451f7492938100a9b9517a542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9879a61524341b67945b91be5b920d70e31f0d3451f7492938100a9b9517a542->enter($__internal_9879a61524341b67945b91be5b920d70e31f0d3451f7492938100a9b9517a542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9879a61524341b67945b91be5b920d70e31f0d3451f7492938100a9b9517a542->leave($__internal_9879a61524341b67945b91be5b920d70e31f0d3451f7492938100a9b9517a542_prof);

        
        $__internal_d91d96b203ad4ba1e94b07a30e0532e842730044d8a1829634611dd166e60423->leave($__internal_d91d96b203ad4ba1e94b07a30e0532e842730044d8a1829634611dd166e60423_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
