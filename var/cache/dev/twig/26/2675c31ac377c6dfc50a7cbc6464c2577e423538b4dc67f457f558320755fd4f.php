<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0ba4a2d0d5001d36685ffba816b3c57d4ac4d7a35c5c54cbf41d1521a0e411de extends Twig_Template
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
        $__internal_837a5c038cd3abe28a60124e1abd366449be51b0273786e81bee9f33a76d616c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837a5c038cd3abe28a60124e1abd366449be51b0273786e81bee9f33a76d616c->enter($__internal_837a5c038cd3abe28a60124e1abd366449be51b0273786e81bee9f33a76d616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_55dfb3455df27166b6a9a67c379ced207b050370903d768e46ebabd01760c687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55dfb3455df27166b6a9a67c379ced207b050370903d768e46ebabd01760c687->enter($__internal_55dfb3455df27166b6a9a67c379ced207b050370903d768e46ebabd01760c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_837a5c038cd3abe28a60124e1abd366449be51b0273786e81bee9f33a76d616c->leave($__internal_837a5c038cd3abe28a60124e1abd366449be51b0273786e81bee9f33a76d616c_prof);

        
        $__internal_55dfb3455df27166b6a9a67c379ced207b050370903d768e46ebabd01760c687->leave($__internal_55dfb3455df27166b6a9a67c379ced207b050370903d768e46ebabd01760c687_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
