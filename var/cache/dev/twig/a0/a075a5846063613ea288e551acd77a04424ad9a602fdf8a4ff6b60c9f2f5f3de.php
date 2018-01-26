<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b696253cb9a22c1afd9843290fb11c4053b98a83a3c0fb8f48a7022fbefeb2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_fbbc7f3d2468f4d1ea3ed447ad1dd7dbf4a49dc1f787f6b2336af284e1861b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbc7f3d2468f4d1ea3ed447ad1dd7dbf4a49dc1f787f6b2336af284e1861b31->enter($__internal_fbbc7f3d2468f4d1ea3ed447ad1dd7dbf4a49dc1f787f6b2336af284e1861b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4e83b2f9ac66a219cd274ef5fc38d5fff57d3376aa40582023e597bfa3c09b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e83b2f9ac66a219cd274ef5fc38d5fff57d3376aa40582023e597bfa3c09b23->enter($__internal_4e83b2f9ac66a219cd274ef5fc38d5fff57d3376aa40582023e597bfa3c09b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbbc7f3d2468f4d1ea3ed447ad1dd7dbf4a49dc1f787f6b2336af284e1861b31->leave($__internal_fbbc7f3d2468f4d1ea3ed447ad1dd7dbf4a49dc1f787f6b2336af284e1861b31_prof);

        
        $__internal_4e83b2f9ac66a219cd274ef5fc38d5fff57d3376aa40582023e597bfa3c09b23->leave($__internal_4e83b2f9ac66a219cd274ef5fc38d5fff57d3376aa40582023e597bfa3c09b23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb653f55b9615eddfb4ee1edb4ca8d034634d3db4bc7fb1a63a9597d4318af34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb653f55b9615eddfb4ee1edb4ca8d034634d3db4bc7fb1a63a9597d4318af34->enter($__internal_eb653f55b9615eddfb4ee1edb4ca8d034634d3db4bc7fb1a63a9597d4318af34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9954aa45d82c78e3e5ab83071ad10505673dd8424df991ea768547b209d261e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9954aa45d82c78e3e5ab83071ad10505673dd8424df991ea768547b209d261e8->enter($__internal_9954aa45d82c78e3e5ab83071ad10505673dd8424df991ea768547b209d261e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9954aa45d82c78e3e5ab83071ad10505673dd8424df991ea768547b209d261e8->leave($__internal_9954aa45d82c78e3e5ab83071ad10505673dd8424df991ea768547b209d261e8_prof);

        
        $__internal_eb653f55b9615eddfb4ee1edb4ca8d034634d3db4bc7fb1a63a9597d4318af34->leave($__internal_eb653f55b9615eddfb4ee1edb4ca8d034634d3db4bc7fb1a63a9597d4318af34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_76db5c1798a04251874141d0726435603ae85a4ade18d7156cf73719f311f48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76db5c1798a04251874141d0726435603ae85a4ade18d7156cf73719f311f48d->enter($__internal_76db5c1798a04251874141d0726435603ae85a4ade18d7156cf73719f311f48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cd32fe3398bc2c2081734f5bd5fa06838b05c61329bddde52a0b506ff6773a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd32fe3398bc2c2081734f5bd5fa06838b05c61329bddde52a0b506ff6773a3->enter($__internal_2cd32fe3398bc2c2081734f5bd5fa06838b05c61329bddde52a0b506ff6773a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cd32fe3398bc2c2081734f5bd5fa06838b05c61329bddde52a0b506ff6773a3->leave($__internal_2cd32fe3398bc2c2081734f5bd5fa06838b05c61329bddde52a0b506ff6773a3_prof);

        
        $__internal_76db5c1798a04251874141d0726435603ae85a4ade18d7156cf73719f311f48d->leave($__internal_76db5c1798a04251874141d0726435603ae85a4ade18d7156cf73719f311f48d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
