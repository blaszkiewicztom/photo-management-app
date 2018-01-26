<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b07ec5cca134c7d4b95332b346d33f61399850c05dba85952143eadc46ad9ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_af2124694ec5687f9ea2e2ac97133578e6c92c770af133b0dfe86cb780d1b04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2124694ec5687f9ea2e2ac97133578e6c92c770af133b0dfe86cb780d1b04a->enter($__internal_af2124694ec5687f9ea2e2ac97133578e6c92c770af133b0dfe86cb780d1b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bfe7e07e9b768a4f07e7559aea8a4cf951d27a72c35e46fe5814501a4aba9ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe7e07e9b768a4f07e7559aea8a4cf951d27a72c35e46fe5814501a4aba9ee4->enter($__internal_bfe7e07e9b768a4f07e7559aea8a4cf951d27a72c35e46fe5814501a4aba9ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2124694ec5687f9ea2e2ac97133578e6c92c770af133b0dfe86cb780d1b04a->leave($__internal_af2124694ec5687f9ea2e2ac97133578e6c92c770af133b0dfe86cb780d1b04a_prof);

        
        $__internal_bfe7e07e9b768a4f07e7559aea8a4cf951d27a72c35e46fe5814501a4aba9ee4->leave($__internal_bfe7e07e9b768a4f07e7559aea8a4cf951d27a72c35e46fe5814501a4aba9ee4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be04b1cf5f7d4b86ec52e68b519d46077da917bb01362cb7a9d7d5cc63af74cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be04b1cf5f7d4b86ec52e68b519d46077da917bb01362cb7a9d7d5cc63af74cb->enter($__internal_be04b1cf5f7d4b86ec52e68b519d46077da917bb01362cb7a9d7d5cc63af74cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_652f818053f7a428bf20adb5c6faf9157e6b18d62d9b2621087d85c0ceb93c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652f818053f7a428bf20adb5c6faf9157e6b18d62d9b2621087d85c0ceb93c8e->enter($__internal_652f818053f7a428bf20adb5c6faf9157e6b18d62d9b2621087d85c0ceb93c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_652f818053f7a428bf20adb5c6faf9157e6b18d62d9b2621087d85c0ceb93c8e->leave($__internal_652f818053f7a428bf20adb5c6faf9157e6b18d62d9b2621087d85c0ceb93c8e_prof);

        
        $__internal_be04b1cf5f7d4b86ec52e68b519d46077da917bb01362cb7a9d7d5cc63af74cb->leave($__internal_be04b1cf5f7d4b86ec52e68b519d46077da917bb01362cb7a9d7d5cc63af74cb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_05ecaf0fd9697a415d2e31fe583d2ba5e1ee50fb9bdf766abb49ec0a256cc342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ecaf0fd9697a415d2e31fe583d2ba5e1ee50fb9bdf766abb49ec0a256cc342->enter($__internal_05ecaf0fd9697a415d2e31fe583d2ba5e1ee50fb9bdf766abb49ec0a256cc342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0c3ecebee502031c589a30bd449ff7a3d3b5e8f68c115087312c13aeb692254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c3ecebee502031c589a30bd449ff7a3d3b5e8f68c115087312c13aeb692254->enter($__internal_a0c3ecebee502031c589a30bd449ff7a3d3b5e8f68c115087312c13aeb692254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0c3ecebee502031c589a30bd449ff7a3d3b5e8f68c115087312c13aeb692254->leave($__internal_a0c3ecebee502031c589a30bd449ff7a3d3b5e8f68c115087312c13aeb692254_prof);

        
        $__internal_05ecaf0fd9697a415d2e31fe583d2ba5e1ee50fb9bdf766abb49ec0a256cc342->leave($__internal_05ecaf0fd9697a415d2e31fe583d2ba5e1ee50fb9bdf766abb49ec0a256cc342_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b431672343e363ecd43ea6d37d73250e3f9b7795da76e760055937c49b217f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b431672343e363ecd43ea6d37d73250e3f9b7795da76e760055937c49b217f12->enter($__internal_b431672343e363ecd43ea6d37d73250e3f9b7795da76e760055937c49b217f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8825e2b6cc5cbaf2053a17c8826c0b28a9f33fca52b92d582de7935b157d8833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8825e2b6cc5cbaf2053a17c8826c0b28a9f33fca52b92d582de7935b157d8833->enter($__internal_8825e2b6cc5cbaf2053a17c8826c0b28a9f33fca52b92d582de7935b157d8833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8825e2b6cc5cbaf2053a17c8826c0b28a9f33fca52b92d582de7935b157d8833->leave($__internal_8825e2b6cc5cbaf2053a17c8826c0b28a9f33fca52b92d582de7935b157d8833_prof);

        
        $__internal_b431672343e363ecd43ea6d37d73250e3f9b7795da76e760055937c49b217f12->leave($__internal_b431672343e363ecd43ea6d37d73250e3f9b7795da76e760055937c49b217f12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
