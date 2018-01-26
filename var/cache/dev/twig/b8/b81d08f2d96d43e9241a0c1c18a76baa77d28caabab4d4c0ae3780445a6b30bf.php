<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_586cf34fc332012e2a4bca86550a9617b8934e3edbe3dca00301ed4acef8d50d extends Twig_Template
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
        $__internal_da59237c2f92af07551b234aabcf6fa9982c1b1340fde8495a4677f7db51c765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da59237c2f92af07551b234aabcf6fa9982c1b1340fde8495a4677f7db51c765->enter($__internal_da59237c2f92af07551b234aabcf6fa9982c1b1340fde8495a4677f7db51c765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_15a96862b319095262ba7a52589809b088047a41837b11bd4983961a9d54b0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a96862b319095262ba7a52589809b088047a41837b11bd4983961a9d54b0e5->enter($__internal_15a96862b319095262ba7a52589809b088047a41837b11bd4983961a9d54b0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_da59237c2f92af07551b234aabcf6fa9982c1b1340fde8495a4677f7db51c765->leave($__internal_da59237c2f92af07551b234aabcf6fa9982c1b1340fde8495a4677f7db51c765_prof);

        
        $__internal_15a96862b319095262ba7a52589809b088047a41837b11bd4983961a9d54b0e5->leave($__internal_15a96862b319095262ba7a52589809b088047a41837b11bd4983961a9d54b0e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
