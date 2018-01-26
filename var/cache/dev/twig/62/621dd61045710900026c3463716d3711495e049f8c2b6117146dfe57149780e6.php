<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4c688d9c0e2c3536f890bfa84b256f8e4200cd0b8ed533b674194bf02060d445 extends Twig_Template
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
        $__internal_47c1c5c2d5280c47fa2a4d5cf79f42505875ec5fa856506f9cc7e84834c63503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c1c5c2d5280c47fa2a4d5cf79f42505875ec5fa856506f9cc7e84834c63503->enter($__internal_47c1c5c2d5280c47fa2a4d5cf79f42505875ec5fa856506f9cc7e84834c63503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f7c6d07be7992c870802101a075da60c5b43fe9146829264d237994343ec0dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c6d07be7992c870802101a075da60c5b43fe9146829264d237994343ec0dd3->enter($__internal_f7c6d07be7992c870802101a075da60c5b43fe9146829264d237994343ec0dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_47c1c5c2d5280c47fa2a4d5cf79f42505875ec5fa856506f9cc7e84834c63503->leave($__internal_47c1c5c2d5280c47fa2a4d5cf79f42505875ec5fa856506f9cc7e84834c63503_prof);

        
        $__internal_f7c6d07be7992c870802101a075da60c5b43fe9146829264d237994343ec0dd3->leave($__internal_f7c6d07be7992c870802101a075da60c5b43fe9146829264d237994343ec0dd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
