<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9455ff65568f97eb4901a75203826264c75d967c29be6d5c60aca1db4ca757e4 extends Twig_Template
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
        $__internal_98eec74bfa5917a50a70b710c1cc786c05a043189aa23b36902da770fcd91066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eec74bfa5917a50a70b710c1cc786c05a043189aa23b36902da770fcd91066->enter($__internal_98eec74bfa5917a50a70b710c1cc786c05a043189aa23b36902da770fcd91066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b6ae875b535ca09f339a8275d03d5ebe060b9781cd493a327a474c7a54d92f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ae875b535ca09f339a8275d03d5ebe060b9781cd493a327a474c7a54d92f0e->enter($__internal_b6ae875b535ca09f339a8275d03d5ebe060b9781cd493a327a474c7a54d92f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_98eec74bfa5917a50a70b710c1cc786c05a043189aa23b36902da770fcd91066->leave($__internal_98eec74bfa5917a50a70b710c1cc786c05a043189aa23b36902da770fcd91066_prof);

        
        $__internal_b6ae875b535ca09f339a8275d03d5ebe060b9781cd493a327a474c7a54d92f0e->leave($__internal_b6ae875b535ca09f339a8275d03d5ebe060b9781cd493a327a474c7a54d92f0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
