<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1e1a17583b10d64d619fe953441ba326f05082a21117e5c3df7044141cfdd851 extends Twig_Template
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
        $__internal_2d4f87b7525672fb0af0a42f68eaed1de8e6262d51d183b20fc61431326bf083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4f87b7525672fb0af0a42f68eaed1de8e6262d51d183b20fc61431326bf083->enter($__internal_2d4f87b7525672fb0af0a42f68eaed1de8e6262d51d183b20fc61431326bf083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4e92555a28938c4b4161156937a4405098325ecc6cb3949c7c3abb601960855a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e92555a28938c4b4161156937a4405098325ecc6cb3949c7c3abb601960855a->enter($__internal_4e92555a28938c4b4161156937a4405098325ecc6cb3949c7c3abb601960855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2d4f87b7525672fb0af0a42f68eaed1de8e6262d51d183b20fc61431326bf083->leave($__internal_2d4f87b7525672fb0af0a42f68eaed1de8e6262d51d183b20fc61431326bf083_prof);

        
        $__internal_4e92555a28938c4b4161156937a4405098325ecc6cb3949c7c3abb601960855a->leave($__internal_4e92555a28938c4b4161156937a4405098325ecc6cb3949c7c3abb601960855a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
