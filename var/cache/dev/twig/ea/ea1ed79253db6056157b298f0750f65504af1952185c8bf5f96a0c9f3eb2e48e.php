<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c16a9cace8f7c2f4a7bd472d4ba468d259a8a1272ab9358f846b137e117e25d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_140bcd0e08601fd5b851afd4a6d78397884988c4ab01ce3073acbc11807b7346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140bcd0e08601fd5b851afd4a6d78397884988c4ab01ce3073acbc11807b7346->enter($__internal_140bcd0e08601fd5b851afd4a6d78397884988c4ab01ce3073acbc11807b7346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e310879c419d2d910115943a5c823693f11cb3fc3e83c5cd9d26ee8f775665a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e310879c419d2d910115943a5c823693f11cb3fc3e83c5cd9d26ee8f775665a2->enter($__internal_e310879c419d2d910115943a5c823693f11cb3fc3e83c5cd9d26ee8f775665a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140bcd0e08601fd5b851afd4a6d78397884988c4ab01ce3073acbc11807b7346->leave($__internal_140bcd0e08601fd5b851afd4a6d78397884988c4ab01ce3073acbc11807b7346_prof);

        
        $__internal_e310879c419d2d910115943a5c823693f11cb3fc3e83c5cd9d26ee8f775665a2->leave($__internal_e310879c419d2d910115943a5c823693f11cb3fc3e83c5cd9d26ee8f775665a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce1fe0e4d3ca977aafc7f99b4f99e2f2192feb8e0a7412ee432127e0e2d97344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1fe0e4d3ca977aafc7f99b4f99e2f2192feb8e0a7412ee432127e0e2d97344->enter($__internal_ce1fe0e4d3ca977aafc7f99b4f99e2f2192feb8e0a7412ee432127e0e2d97344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9784f1685d4ed1e2881b5bdb4cf600fdc0e4a0f3c4d4924edcf701ce6fc34fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9784f1685d4ed1e2881b5bdb4cf600fdc0e4a0f3c4d4924edcf701ce6fc34fa->enter($__internal_e9784f1685d4ed1e2881b5bdb4cf600fdc0e4a0f3c4d4924edcf701ce6fc34fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9784f1685d4ed1e2881b5bdb4cf600fdc0e4a0f3c4d4924edcf701ce6fc34fa->leave($__internal_e9784f1685d4ed1e2881b5bdb4cf600fdc0e4a0f3c4d4924edcf701ce6fc34fa_prof);

        
        $__internal_ce1fe0e4d3ca977aafc7f99b4f99e2f2192feb8e0a7412ee432127e0e2d97344->leave($__internal_ce1fe0e4d3ca977aafc7f99b4f99e2f2192feb8e0a7412ee432127e0e2d97344_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a4252968ed65d0f46e8062f1aed17151d36307eb833d306dd7eea62e735221e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4252968ed65d0f46e8062f1aed17151d36307eb833d306dd7eea62e735221e->enter($__internal_0a4252968ed65d0f46e8062f1aed17151d36307eb833d306dd7eea62e735221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_737cd22d1a2097e287d52541f2ac5498f344f50aecf9033928253d88582dc900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737cd22d1a2097e287d52541f2ac5498f344f50aecf9033928253d88582dc900->enter($__internal_737cd22d1a2097e287d52541f2ac5498f344f50aecf9033928253d88582dc900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_737cd22d1a2097e287d52541f2ac5498f344f50aecf9033928253d88582dc900->leave($__internal_737cd22d1a2097e287d52541f2ac5498f344f50aecf9033928253d88582dc900_prof);

        
        $__internal_0a4252968ed65d0f46e8062f1aed17151d36307eb833d306dd7eea62e735221e->leave($__internal_0a4252968ed65d0f46e8062f1aed17151d36307eb833d306dd7eea62e735221e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_041ba05633c7204b6afd59bd71e2ee74afab3e627c6fc63de73ebdf057374456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041ba05633c7204b6afd59bd71e2ee74afab3e627c6fc63de73ebdf057374456->enter($__internal_041ba05633c7204b6afd59bd71e2ee74afab3e627c6fc63de73ebdf057374456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fc4ec0aa18b51708b5c9d733b5dd378242fe10904ae71464696cc1b93dfbdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc4ec0aa18b51708b5c9d733b5dd378242fe10904ae71464696cc1b93dfbdd0->enter($__internal_4fc4ec0aa18b51708b5c9d733b5dd378242fe10904ae71464696cc1b93dfbdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4fc4ec0aa18b51708b5c9d733b5dd378242fe10904ae71464696cc1b93dfbdd0->leave($__internal_4fc4ec0aa18b51708b5c9d733b5dd378242fe10904ae71464696cc1b93dfbdd0_prof);

        
        $__internal_041ba05633c7204b6afd59bd71e2ee74afab3e627c6fc63de73ebdf057374456->leave($__internal_041ba05633c7204b6afd59bd71e2ee74afab3e627c6fc63de73ebdf057374456_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
