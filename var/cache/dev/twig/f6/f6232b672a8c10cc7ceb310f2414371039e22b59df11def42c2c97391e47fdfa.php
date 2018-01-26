<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_51da208c03300646ff45b0cfdc4e6ce308abb15f00cdbb8c4c4dc6ebae1c0b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_54a27e78423e756686b9d4ac87d99b9929f4865359c9f7610a9545488d6a2b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a27e78423e756686b9d4ac87d99b9929f4865359c9f7610a9545488d6a2b5d->enter($__internal_54a27e78423e756686b9d4ac87d99b9929f4865359c9f7610a9545488d6a2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4b0026376d56177d7cc5c73d507b7eb3220c7de878e202e17896b8df7dd1848e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0026376d56177d7cc5c73d507b7eb3220c7de878e202e17896b8df7dd1848e->enter($__internal_4b0026376d56177d7cc5c73d507b7eb3220c7de878e202e17896b8df7dd1848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a27e78423e756686b9d4ac87d99b9929f4865359c9f7610a9545488d6a2b5d->leave($__internal_54a27e78423e756686b9d4ac87d99b9929f4865359c9f7610a9545488d6a2b5d_prof);

        
        $__internal_4b0026376d56177d7cc5c73d507b7eb3220c7de878e202e17896b8df7dd1848e->leave($__internal_4b0026376d56177d7cc5c73d507b7eb3220c7de878e202e17896b8df7dd1848e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5ab58001915010569b4106ab10fe5448b13402a5c54f18ba3a471f84569fea30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab58001915010569b4106ab10fe5448b13402a5c54f18ba3a471f84569fea30->enter($__internal_5ab58001915010569b4106ab10fe5448b13402a5c54f18ba3a471f84569fea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a8a61e056886b5d0ca3c2d0f0e9240b00096ae1f0c80c40676f6b495b6559c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a61e056886b5d0ca3c2d0f0e9240b00096ae1f0c80c40676f6b495b6559c97->enter($__internal_a8a61e056886b5d0ca3c2d0f0e9240b00096ae1f0c80c40676f6b495b6559c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a8a61e056886b5d0ca3c2d0f0e9240b00096ae1f0c80c40676f6b495b6559c97->leave($__internal_a8a61e056886b5d0ca3c2d0f0e9240b00096ae1f0c80c40676f6b495b6559c97_prof);

        
        $__internal_5ab58001915010569b4106ab10fe5448b13402a5c54f18ba3a471f84569fea30->leave($__internal_5ab58001915010569b4106ab10fe5448b13402a5c54f18ba3a471f84569fea30_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46c54a8a76fe966f46aba50f194f5562a39a0bf9ed92f8be495a653ea99cb383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c54a8a76fe966f46aba50f194f5562a39a0bf9ed92f8be495a653ea99cb383->enter($__internal_46c54a8a76fe966f46aba50f194f5562a39a0bf9ed92f8be495a653ea99cb383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b33c7ad37b43187c04ef343d03aac5f21f75f10fb4545de55d7ed4f494a52afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33c7ad37b43187c04ef343d03aac5f21f75f10fb4545de55d7ed4f494a52afe->enter($__internal_b33c7ad37b43187c04ef343d03aac5f21f75f10fb4545de55d7ed4f494a52afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b33c7ad37b43187c04ef343d03aac5f21f75f10fb4545de55d7ed4f494a52afe->leave($__internal_b33c7ad37b43187c04ef343d03aac5f21f75f10fb4545de55d7ed4f494a52afe_prof);

        
        $__internal_46c54a8a76fe966f46aba50f194f5562a39a0bf9ed92f8be495a653ea99cb383->leave($__internal_46c54a8a76fe966f46aba50f194f5562a39a0bf9ed92f8be495a653ea99cb383_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
