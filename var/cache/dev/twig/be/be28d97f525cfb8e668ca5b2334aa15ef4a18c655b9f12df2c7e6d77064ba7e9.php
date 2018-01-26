<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6990c63a7b4cf0dc84459eeac3962c2b9ca31539c99958954c00b74ee8204583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_204a751cbd9ac3e1ff43a9aa458945d6bdd1793b365bcc02aa6577bd8c2e5663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204a751cbd9ac3e1ff43a9aa458945d6bdd1793b365bcc02aa6577bd8c2e5663->enter($__internal_204a751cbd9ac3e1ff43a9aa458945d6bdd1793b365bcc02aa6577bd8c2e5663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5831c38c4bbe374568e3c30f76f343091ad9ab642fe60cd3d05bbd71116fe279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5831c38c4bbe374568e3c30f76f343091ad9ab642fe60cd3d05bbd71116fe279->enter($__internal_5831c38c4bbe374568e3c30f76f343091ad9ab642fe60cd3d05bbd71116fe279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204a751cbd9ac3e1ff43a9aa458945d6bdd1793b365bcc02aa6577bd8c2e5663->leave($__internal_204a751cbd9ac3e1ff43a9aa458945d6bdd1793b365bcc02aa6577bd8c2e5663_prof);

        
        $__internal_5831c38c4bbe374568e3c30f76f343091ad9ab642fe60cd3d05bbd71116fe279->leave($__internal_5831c38c4bbe374568e3c30f76f343091ad9ab642fe60cd3d05bbd71116fe279_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fa803fd2b3653230cc2cd8106c68d944b257f6759e2f8adb2bb88fefa3a8bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa803fd2b3653230cc2cd8106c68d944b257f6759e2f8adb2bb88fefa3a8bf7->enter($__internal_6fa803fd2b3653230cc2cd8106c68d944b257f6759e2f8adb2bb88fefa3a8bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_185a1a04eeb71bc59c5cbf67e5c5b31043a9836625322751560ef334ce49baa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185a1a04eeb71bc59c5cbf67e5c5b31043a9836625322751560ef334ce49baa1->enter($__internal_185a1a04eeb71bc59c5cbf67e5c5b31043a9836625322751560ef334ce49baa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_185a1a04eeb71bc59c5cbf67e5c5b31043a9836625322751560ef334ce49baa1->leave($__internal_185a1a04eeb71bc59c5cbf67e5c5b31043a9836625322751560ef334ce49baa1_prof);

        
        $__internal_6fa803fd2b3653230cc2cd8106c68d944b257f6759e2f8adb2bb88fefa3a8bf7->leave($__internal_6fa803fd2b3653230cc2cd8106c68d944b257f6759e2f8adb2bb88fefa3a8bf7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53ac08b9b8e682a1e8ed4514aa95c4f4617c4a77427032838815cb0363a44eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ac08b9b8e682a1e8ed4514aa95c4f4617c4a77427032838815cb0363a44eb5->enter($__internal_53ac08b9b8e682a1e8ed4514aa95c4f4617c4a77427032838815cb0363a44eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05848a511360e53cefa491db34f0fdfc6a530f7d46152ae38571307d93963460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05848a511360e53cefa491db34f0fdfc6a530f7d46152ae38571307d93963460->enter($__internal_05848a511360e53cefa491db34f0fdfc6a530f7d46152ae38571307d93963460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_05848a511360e53cefa491db34f0fdfc6a530f7d46152ae38571307d93963460->leave($__internal_05848a511360e53cefa491db34f0fdfc6a530f7d46152ae38571307d93963460_prof);

        
        $__internal_53ac08b9b8e682a1e8ed4514aa95c4f4617c4a77427032838815cb0363a44eb5->leave($__internal_53ac08b9b8e682a1e8ed4514aa95c4f4617c4a77427032838815cb0363a44eb5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92aee51f0dfbc78d5871249e7c53b892753c190f91f34fe392dce49786f8f8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aee51f0dfbc78d5871249e7c53b892753c190f91f34fe392dce49786f8f8f9->enter($__internal_92aee51f0dfbc78d5871249e7c53b892753c190f91f34fe392dce49786f8f8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2179b0d31a551a82fcc7e50f5b8e8dbae5fc562dcea76386675e3d603339cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2179b0d31a551a82fcc7e50f5b8e8dbae5fc562dcea76386675e3d603339cb3->enter($__internal_d2179b0d31a551a82fcc7e50f5b8e8dbae5fc562dcea76386675e3d603339cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d2179b0d31a551a82fcc7e50f5b8e8dbae5fc562dcea76386675e3d603339cb3->leave($__internal_d2179b0d31a551a82fcc7e50f5b8e8dbae5fc562dcea76386675e3d603339cb3_prof);

        
        $__internal_92aee51f0dfbc78d5871249e7c53b892753c190f91f34fe392dce49786f8f8f9->leave($__internal_92aee51f0dfbc78d5871249e7c53b892753c190f91f34fe392dce49786f8f8f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
