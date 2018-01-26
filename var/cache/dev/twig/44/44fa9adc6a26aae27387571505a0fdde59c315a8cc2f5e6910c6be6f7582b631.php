<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7cf9aa9f3a338ac0cd386aa422605f5a3e29295f17d3b8993a9dc606c364a982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_982296fe9ecd9c6b4855bfc1901b7be4d3d9a4d3c24346a350579c46b2c730c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982296fe9ecd9c6b4855bfc1901b7be4d3d9a4d3c24346a350579c46b2c730c2->enter($__internal_982296fe9ecd9c6b4855bfc1901b7be4d3d9a4d3c24346a350579c46b2c730c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_46477f12516605f3eed4567db14d60513d624b1350c5b00310dca17af3eb3ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46477f12516605f3eed4567db14d60513d624b1350c5b00310dca17af3eb3ff6->enter($__internal_46477f12516605f3eed4567db14d60513d624b1350c5b00310dca17af3eb3ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982296fe9ecd9c6b4855bfc1901b7be4d3d9a4d3c24346a350579c46b2c730c2->leave($__internal_982296fe9ecd9c6b4855bfc1901b7be4d3d9a4d3c24346a350579c46b2c730c2_prof);

        
        $__internal_46477f12516605f3eed4567db14d60513d624b1350c5b00310dca17af3eb3ff6->leave($__internal_46477f12516605f3eed4567db14d60513d624b1350c5b00310dca17af3eb3ff6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a96532ae6cd8d50edb2b5ed8866aa622dfaf57d0e09ff3c970d816791f11212e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96532ae6cd8d50edb2b5ed8866aa622dfaf57d0e09ff3c970d816791f11212e->enter($__internal_a96532ae6cd8d50edb2b5ed8866aa622dfaf57d0e09ff3c970d816791f11212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21d72f44d7b4a51624d1b99fcd1a2c30b2cde727765d70b6de05073485a94dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d72f44d7b4a51624d1b99fcd1a2c30b2cde727765d70b6de05073485a94dd6->enter($__internal_21d72f44d7b4a51624d1b99fcd1a2c30b2cde727765d70b6de05073485a94dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21d72f44d7b4a51624d1b99fcd1a2c30b2cde727765d70b6de05073485a94dd6->leave($__internal_21d72f44d7b4a51624d1b99fcd1a2c30b2cde727765d70b6de05073485a94dd6_prof);

        
        $__internal_a96532ae6cd8d50edb2b5ed8866aa622dfaf57d0e09ff3c970d816791f11212e->leave($__internal_a96532ae6cd8d50edb2b5ed8866aa622dfaf57d0e09ff3c970d816791f11212e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_737b026d05c20e847ad26ba8e6a39ddcb1cff73c6ed895c75d02a8caf80c1adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737b026d05c20e847ad26ba8e6a39ddcb1cff73c6ed895c75d02a8caf80c1adb->enter($__internal_737b026d05c20e847ad26ba8e6a39ddcb1cff73c6ed895c75d02a8caf80c1adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6785d0b298387fd6a7f7dbc6e2b192b95b60e553a06623f512bc0a70680d423e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6785d0b298387fd6a7f7dbc6e2b192b95b60e553a06623f512bc0a70680d423e->enter($__internal_6785d0b298387fd6a7f7dbc6e2b192b95b60e553a06623f512bc0a70680d423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6785d0b298387fd6a7f7dbc6e2b192b95b60e553a06623f512bc0a70680d423e->leave($__internal_6785d0b298387fd6a7f7dbc6e2b192b95b60e553a06623f512bc0a70680d423e_prof);

        
        $__internal_737b026d05c20e847ad26ba8e6a39ddcb1cff73c6ed895c75d02a8caf80c1adb->leave($__internal_737b026d05c20e847ad26ba8e6a39ddcb1cff73c6ed895c75d02a8caf80c1adb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ef522ceda9072a8ffe4cc487c15d92db65ba1bad89aad51fc0cdf5a8db0f825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef522ceda9072a8ffe4cc487c15d92db65ba1bad89aad51fc0cdf5a8db0f825->enter($__internal_1ef522ceda9072a8ffe4cc487c15d92db65ba1bad89aad51fc0cdf5a8db0f825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1ba02b1f3f1567737f4ff749e797ba1b865fd5e6b29a8cfa9b5e1f788317b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ba02b1f3f1567737f4ff749e797ba1b865fd5e6b29a8cfa9b5e1f788317b11->enter($__internal_a1ba02b1f3f1567737f4ff749e797ba1b865fd5e6b29a8cfa9b5e1f788317b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1ba02b1f3f1567737f4ff749e797ba1b865fd5e6b29a8cfa9b5e1f788317b11->leave($__internal_a1ba02b1f3f1567737f4ff749e797ba1b865fd5e6b29a8cfa9b5e1f788317b11_prof);

        
        $__internal_1ef522ceda9072a8ffe4cc487c15d92db65ba1bad89aad51fc0cdf5a8db0f825->leave($__internal_1ef522ceda9072a8ffe4cc487c15d92db65ba1bad89aad51fc0cdf5a8db0f825_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
