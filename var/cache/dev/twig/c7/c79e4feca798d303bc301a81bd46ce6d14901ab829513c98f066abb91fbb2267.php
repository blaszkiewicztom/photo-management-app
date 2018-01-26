<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_36834c5878cc6b66295e6bf901f8ed4e3cd9bd70ac8028cffce051d1a5cd319e extends Twig_Template
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
        $__internal_e15589ee5c3092702bbf49ff91ff8e3a65169865eede5bd0346a4210949bdec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15589ee5c3092702bbf49ff91ff8e3a65169865eede5bd0346a4210949bdec1->enter($__internal_e15589ee5c3092702bbf49ff91ff8e3a65169865eede5bd0346a4210949bdec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_74688ab3a05ccda08c2c1a38bb8d33d9a6617f7bc43e1c9a482eff184a91b92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74688ab3a05ccda08c2c1a38bb8d33d9a6617f7bc43e1c9a482eff184a91b92b->enter($__internal_74688ab3a05ccda08c2c1a38bb8d33d9a6617f7bc43e1c9a482eff184a91b92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_e15589ee5c3092702bbf49ff91ff8e3a65169865eede5bd0346a4210949bdec1->leave($__internal_e15589ee5c3092702bbf49ff91ff8e3a65169865eede5bd0346a4210949bdec1_prof);

        
        $__internal_74688ab3a05ccda08c2c1a38bb8d33d9a6617f7bc43e1c9a482eff184a91b92b->leave($__internal_74688ab3a05ccda08c2c1a38bb8d33d9a6617f7bc43e1c9a482eff184a91b92b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
