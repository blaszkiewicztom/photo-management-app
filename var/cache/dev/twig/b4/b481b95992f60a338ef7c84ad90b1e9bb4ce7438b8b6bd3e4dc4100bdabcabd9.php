<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7c4f93a00f0e7a1b6158786040d366a6c8f9815ba6a968cbc66febe06ca345aa extends Twig_Template
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
        $__internal_6286d35fd03377363d27eb81a98d92051973251ada5f0a8948a0036a3c0adac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6286d35fd03377363d27eb81a98d92051973251ada5f0a8948a0036a3c0adac1->enter($__internal_6286d35fd03377363d27eb81a98d92051973251ada5f0a8948a0036a3c0adac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d535ee365ec66914b5cff5494e193e11e3d19f913af3c8c5a293858b207a16e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d535ee365ec66914b5cff5494e193e11e3d19f913af3c8c5a293858b207a16e8->enter($__internal_d535ee365ec66914b5cff5494e193e11e3d19f913af3c8c5a293858b207a16e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6286d35fd03377363d27eb81a98d92051973251ada5f0a8948a0036a3c0adac1->leave($__internal_6286d35fd03377363d27eb81a98d92051973251ada5f0a8948a0036a3c0adac1_prof);

        
        $__internal_d535ee365ec66914b5cff5494e193e11e3d19f913af3c8c5a293858b207a16e8->leave($__internal_d535ee365ec66914b5cff5494e193e11e3d19f913af3c8c5a293858b207a16e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
