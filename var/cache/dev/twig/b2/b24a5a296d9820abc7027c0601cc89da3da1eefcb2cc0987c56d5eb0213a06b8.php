<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_38db984c2cfecf8d58c1676f3f0c707b4772204966a63a03797aa518e3fdfa8b extends Twig_Template
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
        $__internal_243efcbbf4445ec667e152ba3ab4c00c8be18ca928f69dd3dfc31c5a0d810fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243efcbbf4445ec667e152ba3ab4c00c8be18ca928f69dd3dfc31c5a0d810fad->enter($__internal_243efcbbf4445ec667e152ba3ab4c00c8be18ca928f69dd3dfc31c5a0d810fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_5284ba97a7ec65d9e2cd9379cbc465d1cab9b77c4a64ceafecb5e4f3e02a7794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5284ba97a7ec65d9e2cd9379cbc465d1cab9b77c4a64ceafecb5e4f3e02a7794->enter($__internal_5284ba97a7ec65d9e2cd9379cbc465d1cab9b77c4a64ceafecb5e4f3e02a7794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_243efcbbf4445ec667e152ba3ab4c00c8be18ca928f69dd3dfc31c5a0d810fad->leave($__internal_243efcbbf4445ec667e152ba3ab4c00c8be18ca928f69dd3dfc31c5a0d810fad_prof);

        
        $__internal_5284ba97a7ec65d9e2cd9379cbc465d1cab9b77c4a64ceafecb5e4f3e02a7794->leave($__internal_5284ba97a7ec65d9e2cd9379cbc465d1cab9b77c4a64ceafecb5e4f3e02a7794_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
