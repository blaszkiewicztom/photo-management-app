<?php

/* :default:upload.html.twig */
class __TwigTemplate_fa21ddd6264ce9fe5e9d913b2b977c3c7a55b13cf9dd6479a96434482d5e686c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:upload.html.twig", 1);
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
        $__internal_65ae1796515b6074125c4155532e50e074ba4c0887d80330a7fb1912c5132257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ae1796515b6074125c4155532e50e074ba4c0887d80330a7fb1912c5132257->enter($__internal_65ae1796515b6074125c4155532e50e074ba4c0887d80330a7fb1912c5132257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:upload.html.twig"));

        $__internal_1bac1f6c2b6b3ff29662ea683db231427946c7af63c14a8c44519647f4e6d5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bac1f6c2b6b3ff29662ea683db231427946c7af63c14a8c44519647f4e6d5ac->enter($__internal_1bac1f6c2b6b3ff29662ea683db231427946c7af63c14a8c44519647f4e6d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ae1796515b6074125c4155532e50e074ba4c0887d80330a7fb1912c5132257->leave($__internal_65ae1796515b6074125c4155532e50e074ba4c0887d80330a7fb1912c5132257_prof);

        
        $__internal_1bac1f6c2b6b3ff29662ea683db231427946c7af63c14a8c44519647f4e6d5ac->leave($__internal_1bac1f6c2b6b3ff29662ea683db231427946c7af63c14a8c44519647f4e6d5ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6effb42cc7608c3afa191e42d62db643eb3c5b587ce39893c6edbdcb0e20887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6effb42cc7608c3afa191e42d62db643eb3c5b587ce39893c6edbdcb0e20887->enter($__internal_c6effb42cc7608c3afa191e42d62db643eb3c5b587ce39893c6edbdcb0e20887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bc7ad5e8262ddd11e6e3327488cf94deb273b6af8d7d4db3ed6349a3aefc89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc7ad5e8262ddd11e6e3327488cf94deb273b6af8d7d4db3ed6349a3aefc89f->enter($__internal_3bc7ad5e8262ddd11e6e3327488cf94deb273b6af8d7d4db3ed6349a3aefc89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3bc7ad5e8262ddd11e6e3327488cf94deb273b6af8d7d4db3ed6349a3aefc89f->leave($__internal_3bc7ad5e8262ddd11e6e3327488cf94deb273b6af8d7d4db3ed6349a3aefc89f_prof);

        
        $__internal_c6effb42cc7608c3afa191e42d62db643eb3c5b587ce39893c6edbdcb0e20887->leave($__internal_c6effb42cc7608c3afa191e42d62db643eb3c5b587ce39893c6edbdcb0e20887_prof);

    }

    public function getTemplateName()
    {
        return ":default:upload.html.twig";
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

{% endblock %}", ":default:upload.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app/Resources\\views/default/upload.html.twig");
    }
}
