<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eda961be91808accae1f271049980a64d67892d9f2ae8bef1128ff404c1d33eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b79ee33e13b8c5fa241a108af8ee3da4b3d0ff1de57c5756f87eaf409cac8e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79ee33e13b8c5fa241a108af8ee3da4b3d0ff1de57c5756f87eaf409cac8e5e->enter($__internal_b79ee33e13b8c5fa241a108af8ee3da4b3d0ff1de57c5756f87eaf409cac8e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_214d5e256fe7702e8e82f9bf198db6f1da78b3fbdeba05689aef9ac960f38f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d5e256fe7702e8e82f9bf198db6f1da78b3fbdeba05689aef9ac960f38f96->enter($__internal_214d5e256fe7702e8e82f9bf198db6f1da78b3fbdeba05689aef9ac960f38f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79ee33e13b8c5fa241a108af8ee3da4b3d0ff1de57c5756f87eaf409cac8e5e->leave($__internal_b79ee33e13b8c5fa241a108af8ee3da4b3d0ff1de57c5756f87eaf409cac8e5e_prof);

        
        $__internal_214d5e256fe7702e8e82f9bf198db6f1da78b3fbdeba05689aef9ac960f38f96->leave($__internal_214d5e256fe7702e8e82f9bf198db6f1da78b3fbdeba05689aef9ac960f38f96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c68aa71725d0b6ffcfda179c337f09ec1ac6398c11727cb64e60c0ec413a53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c68aa71725d0b6ffcfda179c337f09ec1ac6398c11727cb64e60c0ec413a53d->enter($__internal_0c68aa71725d0b6ffcfda179c337f09ec1ac6398c11727cb64e60c0ec413a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c161542b28b58d2b344bbd6174538d8f336579d57605c8f0ba06134f49af75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c161542b28b58d2b344bbd6174538d8f336579d57605c8f0ba06134f49af75c->enter($__internal_0c161542b28b58d2b344bbd6174538d8f336579d57605c8f0ba06134f49af75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0c161542b28b58d2b344bbd6174538d8f336579d57605c8f0ba06134f49af75c->leave($__internal_0c161542b28b58d2b344bbd6174538d8f336579d57605c8f0ba06134f49af75c_prof);

        
        $__internal_0c68aa71725d0b6ffcfda179c337f09ec1ac6398c11727cb64e60c0ec413a53d->leave($__internal_0c68aa71725d0b6ffcfda179c337f09ec1ac6398c11727cb64e60c0ec413a53d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_357454ed983a12e8a99404d07a80262a1b4b6ef13d9571e481237a48703f9716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357454ed983a12e8a99404d07a80262a1b4b6ef13d9571e481237a48703f9716->enter($__internal_357454ed983a12e8a99404d07a80262a1b4b6ef13d9571e481237a48703f9716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f266f081d96358e2e6198a575cef0e4be37b6808971f3024013f911a7ed83742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f266f081d96358e2e6198a575cef0e4be37b6808971f3024013f911a7ed83742->enter($__internal_f266f081d96358e2e6198a575cef0e4be37b6808971f3024013f911a7ed83742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f266f081d96358e2e6198a575cef0e4be37b6808971f3024013f911a7ed83742->leave($__internal_f266f081d96358e2e6198a575cef0e4be37b6808971f3024013f911a7ed83742_prof);

        
        $__internal_357454ed983a12e8a99404d07a80262a1b4b6ef13d9571e481237a48703f9716->leave($__internal_357454ed983a12e8a99404d07a80262a1b4b6ef13d9571e481237a48703f9716_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_adee538693dd60507847bb0cf8d6982470038e7d2d7226a31a1a5b5002dc4a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adee538693dd60507847bb0cf8d6982470038e7d2d7226a31a1a5b5002dc4a29->enter($__internal_adee538693dd60507847bb0cf8d6982470038e7d2d7226a31a1a5b5002dc4a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c9231bd1eb55f17dc6eb5cb425514e7f9042e95e1d3bac9bea3b5e0c47c1db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9231bd1eb55f17dc6eb5cb425514e7f9042e95e1d3bac9bea3b5e0c47c1db9->enter($__internal_9c9231bd1eb55f17dc6eb5cb425514e7f9042e95e1d3bac9bea3b5e0c47c1db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9c9231bd1eb55f17dc6eb5cb425514e7f9042e95e1d3bac9bea3b5e0c47c1db9->leave($__internal_9c9231bd1eb55f17dc6eb5cb425514e7f9042e95e1d3bac9bea3b5e0c47c1db9_prof);

        
        $__internal_adee538693dd60507847bb0cf8d6982470038e7d2d7226a31a1a5b5002dc4a29->leave($__internal_adee538693dd60507847bb0cf8d6982470038e7d2d7226a31a1a5b5002dc4a29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
