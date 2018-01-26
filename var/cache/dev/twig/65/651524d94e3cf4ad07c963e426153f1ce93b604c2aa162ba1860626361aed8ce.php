<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4c474b72ca47b4120060b3fc7d154497b67e3bc1faeb825e667a9522513a7fb3 extends Twig_Template
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
        $__internal_eeada5ec0b4e128df85768a09a872c3b3c1d81fb0f327bd5fba4848607ad7740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeada5ec0b4e128df85768a09a872c3b3c1d81fb0f327bd5fba4848607ad7740->enter($__internal_eeada5ec0b4e128df85768a09a872c3b3c1d81fb0f327bd5fba4848607ad7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7874aa8f34646e2fc73a273987d7ad241c0e4092c69b77e78f35d20b74f178d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7874aa8f34646e2fc73a273987d7ad241c0e4092c69b77e78f35d20b74f178d2->enter($__internal_7874aa8f34646e2fc73a273987d7ad241c0e4092c69b77e78f35d20b74f178d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_eeada5ec0b4e128df85768a09a872c3b3c1d81fb0f327bd5fba4848607ad7740->leave($__internal_eeada5ec0b4e128df85768a09a872c3b3c1d81fb0f327bd5fba4848607ad7740_prof);

        
        $__internal_7874aa8f34646e2fc73a273987d7ad241c0e4092c69b77e78f35d20b74f178d2->leave($__internal_7874aa8f34646e2fc73a273987d7ad241c0e4092c69b77e78f35d20b74f178d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
