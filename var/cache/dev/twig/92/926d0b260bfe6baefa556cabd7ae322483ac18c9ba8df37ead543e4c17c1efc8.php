<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_67cbb08576f460fe5b423aaad5601df8092a1bd0c580596f9bfbd457d596bf19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68868da60bf888f7d6f367d7ac62d253ce4927dc81bc2a9853671f9b0738b18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68868da60bf888f7d6f367d7ac62d253ce4927dc81bc2a9853671f9b0738b18c->enter($__internal_68868da60bf888f7d6f367d7ac62d253ce4927dc81bc2a9853671f9b0738b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_e274f398711022ad541ef126418db33b8f3f13dbbf93123aa1d701fc87a333cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e274f398711022ad541ef126418db33b8f3f13dbbf93123aa1d701fc87a333cc->enter($__internal_e274f398711022ad541ef126418db33b8f3f13dbbf93123aa1d701fc87a333cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_68868da60bf888f7d6f367d7ac62d253ce4927dc81bc2a9853671f9b0738b18c->leave($__internal_68868da60bf888f7d6f367d7ac62d253ce4927dc81bc2a9853671f9b0738b18c_prof);

        
        $__internal_e274f398711022ad541ef126418db33b8f3f13dbbf93123aa1d701fc87a333cc->leave($__internal_e274f398711022ad541ef126418db33b8f3f13dbbf93123aa1d701fc87a333cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
