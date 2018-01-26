<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ca31f3e65daa037a908467cb48d4b63cee836fb212e1a8e5fc09140e39bdfa33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23dff20fec7f7ff28c424616c6d4dfe151756c7a0955c6f84aaf06127a3a1238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dff20fec7f7ff28c424616c6d4dfe151756c7a0955c6f84aaf06127a3a1238->enter($__internal_23dff20fec7f7ff28c424616c6d4dfe151756c7a0955c6f84aaf06127a3a1238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0b1ab09296995f30c53da4ad851cfe3b3dad04ec47060b68f7f6a5e53a54eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1ab09296995f30c53da4ad851cfe3b3dad04ec47060b68f7f6a5e53a54eaad->enter($__internal_0b1ab09296995f30c53da4ad851cfe3b3dad04ec47060b68f7f6a5e53a54eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23dff20fec7f7ff28c424616c6d4dfe151756c7a0955c6f84aaf06127a3a1238->leave($__internal_23dff20fec7f7ff28c424616c6d4dfe151756c7a0955c6f84aaf06127a3a1238_prof);

        
        $__internal_0b1ab09296995f30c53da4ad851cfe3b3dad04ec47060b68f7f6a5e53a54eaad->leave($__internal_0b1ab09296995f30c53da4ad851cfe3b3dad04ec47060b68f7f6a5e53a54eaad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea79c9211f8a1e511326c39b32a5642dff37d84b242b49aed693ca89598ab693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea79c9211f8a1e511326c39b32a5642dff37d84b242b49aed693ca89598ab693->enter($__internal_ea79c9211f8a1e511326c39b32a5642dff37d84b242b49aed693ca89598ab693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f21c2e07e37430a648fc0aec5384e7807758557c569d845d2a4a1ac20b7eec09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21c2e07e37430a648fc0aec5384e7807758557c569d845d2a4a1ac20b7eec09->enter($__internal_f21c2e07e37430a648fc0aec5384e7807758557c569d845d2a4a1ac20b7eec09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f21c2e07e37430a648fc0aec5384e7807758557c569d845d2a4a1ac20b7eec09->leave($__internal_f21c2e07e37430a648fc0aec5384e7807758557c569d845d2a4a1ac20b7eec09_prof);

        
        $__internal_ea79c9211f8a1e511326c39b32a5642dff37d84b242b49aed693ca89598ab693->leave($__internal_ea79c9211f8a1e511326c39b32a5642dff37d84b242b49aed693ca89598ab693_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bfc48e05fc017d56e5fff4d2826383fa1dbf91172a0573c00cd0aab94f76634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfc48e05fc017d56e5fff4d2826383fa1dbf91172a0573c00cd0aab94f76634->enter($__internal_2bfc48e05fc017d56e5fff4d2826383fa1dbf91172a0573c00cd0aab94f76634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be4131a13a243ec23a6640e0245eef38fca55d81924abb6f41708d98934d65e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4131a13a243ec23a6640e0245eef38fca55d81924abb6f41708d98934d65e4->enter($__internal_be4131a13a243ec23a6640e0245eef38fca55d81924abb6f41708d98934d65e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be4131a13a243ec23a6640e0245eef38fca55d81924abb6f41708d98934d65e4->leave($__internal_be4131a13a243ec23a6640e0245eef38fca55d81924abb6f41708d98934d65e4_prof);

        
        $__internal_2bfc48e05fc017d56e5fff4d2826383fa1dbf91172a0573c00cd0aab94f76634->leave($__internal_2bfc48e05fc017d56e5fff4d2826383fa1dbf91172a0573c00cd0aab94f76634_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b900497f66f3671f69d03ebe1bb5e13bf69d5445262c50b2d406fd857767207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b900497f66f3671f69d03ebe1bb5e13bf69d5445262c50b2d406fd857767207->enter($__internal_0b900497f66f3671f69d03ebe1bb5e13bf69d5445262c50b2d406fd857767207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0227a33a023fd774d69b576e6fff27221fcdb3333b5f02fd8f9503b2c2c60236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0227a33a023fd774d69b576e6fff27221fcdb3333b5f02fd8f9503b2c2c60236->enter($__internal_0227a33a023fd774d69b576e6fff27221fcdb3333b5f02fd8f9503b2c2c60236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0227a33a023fd774d69b576e6fff27221fcdb3333b5f02fd8f9503b2c2c60236->leave($__internal_0227a33a023fd774d69b576e6fff27221fcdb3333b5f02fd8f9503b2c2c60236_prof);

        
        $__internal_0b900497f66f3671f69d03ebe1bb5e13bf69d5445262c50b2d406fd857767207->leave($__internal_0b900497f66f3671f69d03ebe1bb5e13bf69d5445262c50b2d406fd857767207_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
