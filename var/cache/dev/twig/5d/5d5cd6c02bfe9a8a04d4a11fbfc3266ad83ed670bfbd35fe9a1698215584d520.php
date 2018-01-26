<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_667ce21214aecb0a4c20bb4efaa0b352a631e0bbf06d7a253b8bcdf6b98b7714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f35f22a423ba184cd0af6d6411769c1513d7b28ed4419377f3909ade22552452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f22a423ba184cd0af6d6411769c1513d7b28ed4419377f3909ade22552452->enter($__internal_f35f22a423ba184cd0af6d6411769c1513d7b28ed4419377f3909ade22552452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4b37835e27e7f05c1d8714397236b84bdf6c88a208101cbf5a927e38ba2feef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b37835e27e7f05c1d8714397236b84bdf6c88a208101cbf5a927e38ba2feef0->enter($__internal_4b37835e27e7f05c1d8714397236b84bdf6c88a208101cbf5a927e38ba2feef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35f22a423ba184cd0af6d6411769c1513d7b28ed4419377f3909ade22552452->leave($__internal_f35f22a423ba184cd0af6d6411769c1513d7b28ed4419377f3909ade22552452_prof);

        
        $__internal_4b37835e27e7f05c1d8714397236b84bdf6c88a208101cbf5a927e38ba2feef0->leave($__internal_4b37835e27e7f05c1d8714397236b84bdf6c88a208101cbf5a927e38ba2feef0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79a4607927ac7800a522e13ab4da3ce147f43eaded14014a8d7f155120ae6c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a4607927ac7800a522e13ab4da3ce147f43eaded14014a8d7f155120ae6c5e->enter($__internal_79a4607927ac7800a522e13ab4da3ce147f43eaded14014a8d7f155120ae6c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5b35245412bba041856873169a3a17135317aeb0bc8b6972efc17467eb20711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b35245412bba041856873169a3a17135317aeb0bc8b6972efc17467eb20711->enter($__internal_b5b35245412bba041856873169a3a17135317aeb0bc8b6972efc17467eb20711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b5b35245412bba041856873169a3a17135317aeb0bc8b6972efc17467eb20711->leave($__internal_b5b35245412bba041856873169a3a17135317aeb0bc8b6972efc17467eb20711_prof);

        
        $__internal_79a4607927ac7800a522e13ab4da3ce147f43eaded14014a8d7f155120ae6c5e->leave($__internal_79a4607927ac7800a522e13ab4da3ce147f43eaded14014a8d7f155120ae6c5e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e278f63f5fb94540ac39f2418926571c3798025ec8fcc409dd09e484865b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e278f63f5fb94540ac39f2418926571c3798025ec8fcc409dd09e484865b60->enter($__internal_17e278f63f5fb94540ac39f2418926571c3798025ec8fcc409dd09e484865b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6ad8278ea16195c6e7e3df689c1488496e660507b59c24649d231827d639fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad8278ea16195c6e7e3df689c1488496e660507b59c24649d231827d639fa1->enter($__internal_e6ad8278ea16195c6e7e3df689c1488496e660507b59c24649d231827d639fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e6ad8278ea16195c6e7e3df689c1488496e660507b59c24649d231827d639fa1->leave($__internal_e6ad8278ea16195c6e7e3df689c1488496e660507b59c24649d231827d639fa1_prof);

        
        $__internal_17e278f63f5fb94540ac39f2418926571c3798025ec8fcc409dd09e484865b60->leave($__internal_17e278f63f5fb94540ac39f2418926571c3798025ec8fcc409dd09e484865b60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
