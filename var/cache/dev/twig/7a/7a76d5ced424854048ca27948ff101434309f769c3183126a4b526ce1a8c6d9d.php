<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_57d814ae7a5c5f64d42260e83a82f960845cb8c9bc3160451feab8838296c572 extends Twig_Template
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
        $__internal_53423f436663f26e0e72616c1b398d30b45fbed13c14602eff41e63b8b5cef8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53423f436663f26e0e72616c1b398d30b45fbed13c14602eff41e63b8b5cef8e->enter($__internal_53423f436663f26e0e72616c1b398d30b45fbed13c14602eff41e63b8b5cef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2029cd80954216a18257a99aab482c8033ff7a53b7663a24bbcf36bd84922f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2029cd80954216a18257a99aab482c8033ff7a53b7663a24bbcf36bd84922f97->enter($__internal_2029cd80954216a18257a99aab482c8033ff7a53b7663a24bbcf36bd84922f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_53423f436663f26e0e72616c1b398d30b45fbed13c14602eff41e63b8b5cef8e->leave($__internal_53423f436663f26e0e72616c1b398d30b45fbed13c14602eff41e63b8b5cef8e_prof);

        
        $__internal_2029cd80954216a18257a99aab482c8033ff7a53b7663a24bbcf36bd84922f97->leave($__internal_2029cd80954216a18257a99aab482c8033ff7a53b7663a24bbcf36bd84922f97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
