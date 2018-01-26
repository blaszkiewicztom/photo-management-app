<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_62544e74b063199095b3bffe78bc54a809e2f5778a200caac989bf2395a8ac01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e93a8c97583a3aaf47821171793be262aed9a1ad7f41c562f5e643a626ed942e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93a8c97583a3aaf47821171793be262aed9a1ad7f41c562f5e643a626ed942e->enter($__internal_e93a8c97583a3aaf47821171793be262aed9a1ad7f41c562f5e643a626ed942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c6e6e264acb66b307aa6f607c313aa02bca7ef44628479df0da3e66e18eaea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e6e264acb66b307aa6f607c313aa02bca7ef44628479df0da3e66e18eaea13->enter($__internal_c6e6e264acb66b307aa6f607c313aa02bca7ef44628479df0da3e66e18eaea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e93a8c97583a3aaf47821171793be262aed9a1ad7f41c562f5e643a626ed942e->leave($__internal_e93a8c97583a3aaf47821171793be262aed9a1ad7f41c562f5e643a626ed942e_prof);

        
        $__internal_c6e6e264acb66b307aa6f607c313aa02bca7ef44628479df0da3e66e18eaea13->leave($__internal_c6e6e264acb66b307aa6f607c313aa02bca7ef44628479df0da3e66e18eaea13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51383519ad52c73620bb30532cc443790fb310460bc5b44210705c25283f5603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51383519ad52c73620bb30532cc443790fb310460bc5b44210705c25283f5603->enter($__internal_51383519ad52c73620bb30532cc443790fb310460bc5b44210705c25283f5603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34a2a51636835e83e807fcb8d7f7bd204cfa02238716e49fb63a14ff9a5b19b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a2a51636835e83e807fcb8d7f7bd204cfa02238716e49fb63a14ff9a5b19b0->enter($__internal_34a2a51636835e83e807fcb8d7f7bd204cfa02238716e49fb63a14ff9a5b19b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_34a2a51636835e83e807fcb8d7f7bd204cfa02238716e49fb63a14ff9a5b19b0->leave($__internal_34a2a51636835e83e807fcb8d7f7bd204cfa02238716e49fb63a14ff9a5b19b0_prof);

        
        $__internal_51383519ad52c73620bb30532cc443790fb310460bc5b44210705c25283f5603->leave($__internal_51383519ad52c73620bb30532cc443790fb310460bc5b44210705c25283f5603_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
