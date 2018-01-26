<?php

/* default/upload.html.twig */
class __TwigTemplate_0b7ba29c050577423d9a7d23597637b8012f09d689415e9dd51c5f8760e3e6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/upload.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0511ba8d90c9051122f74835db7ec6f38d4f8e365f72dc3bc5168757e223dd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0511ba8d90c9051122f74835db7ec6f38d4f8e365f72dc3bc5168757e223dd4d->enter($__internal_0511ba8d90c9051122f74835db7ec6f38d4f8e365f72dc3bc5168757e223dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/upload.html.twig"));

        $__internal_c91a9443f10f45ab4cc30a62bc91b3d26bc5a8befbfa4314d9dbfd33c7551650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91a9443f10f45ab4cc30a62bc91b3d26bc5a8befbfa4314d9dbfd33c7551650->enter($__internal_c91a9443f10f45ab4cc30a62bc91b3d26bc5a8befbfa4314d9dbfd33c7551650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0511ba8d90c9051122f74835db7ec6f38d4f8e365f72dc3bc5168757e223dd4d->leave($__internal_0511ba8d90c9051122f74835db7ec6f38d4f8e365f72dc3bc5168757e223dd4d_prof);

        
        $__internal_c91a9443f10f45ab4cc30a62bc91b3d26bc5a8befbfa4314d9dbfd33c7551650->leave($__internal_c91a9443f10f45ab4cc30a62bc91b3d26bc5a8befbfa4314d9dbfd33c7551650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96b16ed200622cf9fae159a851dfc48ab97882587af4b2be1a3ec153749544eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b16ed200622cf9fae159a851dfc48ab97882587af4b2be1a3ec153749544eb->enter($__internal_96b16ed200622cf9fae159a851dfc48ab97882587af4b2be1a3ec153749544eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbd7d53b89cff251ea737d936d07bbecd05e7c975c09bc6277330c8ca1d9d41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd7d53b89cff251ea737d936d07bbecd05e7c975c09bc6277330c8ca1d9d41d->enter($__internal_fbd7d53b89cff251ea737d936d07bbecd05e7c975c09bc6277330c8ca1d9d41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                <ul class=\"nav justify-content-center nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("active");
        echo "\">Active</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleted");
        echo "\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), 'form_start');
        echo "
                <div class=\"form-group\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), "description", array()), 'row');
        echo "</div>
                <div class=\"form-group\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), "file", array()), 'row');
        echo "</div>
                <button type=\"submit\" class=\"btn btn-secondary\">Upload</button>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_fbd7d53b89cff251ea737d936d07bbecd05e7c975c09bc6277330c8ca1d9d41d->leave($__internal_fbd7d53b89cff251ea737d936d07bbecd05e7c975c09bc6277330c8ca1d9d41d_prof);

        
        $__internal_96b16ed200622cf9fae159a851dfc48ab97882587af4b2be1a3ec153749544eb->leave($__internal_96b16ed200622cf9fae159a851dfc48ab97882587af4b2be1a3ec153749544eb_prof);

    }

    public function getTemplateName()
    {
        return "default/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  84 => 25,  80 => 24,  76 => 23,  63 => 13,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                <ul class=\"nav justify-content-center nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('active') }}\">Active</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('deleted') }}\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                {{ form_start(uploadForm) }}
                <div class=\"form-group\">{{ form_row(uploadForm.description) }}</div>
                <div class=\"form-group\">{{ form_row(uploadForm.file) }}</div>
                <button type=\"submit\" class=\"btn btn-secondary\">Upload</button>
                {{ form_end(uploadForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "default/upload.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app\\Resources\\views\\default\\upload.html.twig");
    }
}
