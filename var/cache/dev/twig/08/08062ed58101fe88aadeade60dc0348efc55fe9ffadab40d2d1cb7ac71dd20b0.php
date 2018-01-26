<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_592f2ef7f7e0dd1505a55168843a4b89dd149f8b495ff9c0bfb90f80d041b018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_38a36c2e7e1d7618e39f26d6a05d92c51cc8b3f5a6e9b3b32f2e396f11aca3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a36c2e7e1d7618e39f26d6a05d92c51cc8b3f5a6e9b3b32f2e396f11aca3c3->enter($__internal_38a36c2e7e1d7618e39f26d6a05d92c51cc8b3f5a6e9b3b32f2e396f11aca3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_71181b915a1b1044e46a136f4ffb14cdae4e9062a8b75009496b7b5edf99b37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71181b915a1b1044e46a136f4ffb14cdae4e9062a8b75009496b7b5edf99b37c->enter($__internal_71181b915a1b1044e46a136f4ffb14cdae4e9062a8b75009496b7b5edf99b37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a36c2e7e1d7618e39f26d6a05d92c51cc8b3f5a6e9b3b32f2e396f11aca3c3->leave($__internal_38a36c2e7e1d7618e39f26d6a05d92c51cc8b3f5a6e9b3b32f2e396f11aca3c3_prof);

        
        $__internal_71181b915a1b1044e46a136f4ffb14cdae4e9062a8b75009496b7b5edf99b37c->leave($__internal_71181b915a1b1044e46a136f4ffb14cdae4e9062a8b75009496b7b5edf99b37c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f502010a09e1b48bf952f7f9e907e5399e8549094d1a38fe1d198c828f349b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f502010a09e1b48bf952f7f9e907e5399e8549094d1a38fe1d198c828f349b32->enter($__internal_f502010a09e1b48bf952f7f9e907e5399e8549094d1a38fe1d198c828f349b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c39d2f4965a46e816875cdcdaf3c0d61c44830352a10ee85c1b99e14dc9b066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c39d2f4965a46e816875cdcdaf3c0d61c44830352a10ee85c1b99e14dc9b066->enter($__internal_2c39d2f4965a46e816875cdcdaf3c0d61c44830352a10ee85c1b99e14dc9b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c39d2f4965a46e816875cdcdaf3c0d61c44830352a10ee85c1b99e14dc9b066->leave($__internal_2c39d2f4965a46e816875cdcdaf3c0d61c44830352a10ee85c1b99e14dc9b066_prof);

        
        $__internal_f502010a09e1b48bf952f7f9e907e5399e8549094d1a38fe1d198c828f349b32->leave($__internal_f502010a09e1b48bf952f7f9e907e5399e8549094d1a38fe1d198c828f349b32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01c7c4bcae71e9b09ca2c06b874a983e13d8019c6aff1eb10ca6e88361251fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c7c4bcae71e9b09ca2c06b874a983e13d8019c6aff1eb10ca6e88361251fdb->enter($__internal_01c7c4bcae71e9b09ca2c06b874a983e13d8019c6aff1eb10ca6e88361251fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0f5801c6463230827f4461fee2110e22a23f776b2a33c95f0cf1a03689dc503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f5801c6463230827f4461fee2110e22a23f776b2a33c95f0cf1a03689dc503->enter($__internal_a0f5801c6463230827f4461fee2110e22a23f776b2a33c95f0cf1a03689dc503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0f5801c6463230827f4461fee2110e22a23f776b2a33c95f0cf1a03689dc503->leave($__internal_a0f5801c6463230827f4461fee2110e22a23f776b2a33c95f0cf1a03689dc503_prof);

        
        $__internal_01c7c4bcae71e9b09ca2c06b874a983e13d8019c6aff1eb10ca6e88361251fdb->leave($__internal_01c7c4bcae71e9b09ca2c06b874a983e13d8019c6aff1eb10ca6e88361251fdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
