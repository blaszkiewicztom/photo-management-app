<?php

/* :default:deleted.html.twig */
class __TwigTemplate_3ffd2550775ceed00ca195e9779ef734965dd2b62570d7df3bb65fa3c2709ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:deleted.html.twig", 1);
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
        $__internal_6f54d37b32fd124611075dfe14efa93d567810dab7e45f3f205dc08e96e0483e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f54d37b32fd124611075dfe14efa93d567810dab7e45f3f205dc08e96e0483e->enter($__internal_6f54d37b32fd124611075dfe14efa93d567810dab7e45f3f205dc08e96e0483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:deleted.html.twig"));

        $__internal_460890e895708679683823466f55e0fed143a4c28bfd2cec975e3b5284de2e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460890e895708679683823466f55e0fed143a4c28bfd2cec975e3b5284de2e71->enter($__internal_460890e895708679683823466f55e0fed143a4c28bfd2cec975e3b5284de2e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f54d37b32fd124611075dfe14efa93d567810dab7e45f3f205dc08e96e0483e->leave($__internal_6f54d37b32fd124611075dfe14efa93d567810dab7e45f3f205dc08e96e0483e_prof);

        
        $__internal_460890e895708679683823466f55e0fed143a4c28bfd2cec975e3b5284de2e71->leave($__internal_460890e895708679683823466f55e0fed143a4c28bfd2cec975e3b5284de2e71_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac1e902878464cc2a464f3dd023e5024c5be223934a53d8edc9b8300c62f8b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1e902878464cc2a464f3dd023e5024c5be223934a53d8edc9b8300c62f8b3b->enter($__internal_ac1e902878464cc2a464f3dd023e5024c5be223934a53d8edc9b8300c62f8b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c13b4dff09e0d042f62bd0509e5487e5589988cecfe1df11749775e3919e55da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13b4dff09e0d042f62bd0509e5487e5589988cecfe1df11749775e3919e55da->enter($__internal_c13b4dff09e0d042f62bd0509e5487e5589988cecfe1df11749775e3919e55da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                <ul class=\"nav justify-content-center nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("active");
        echo "\">Active</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload");
        echo "\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deletedImages"] ?? $this->getContext($context, "deletedImages")));
        foreach ($context['_seq'] as $context["_key"] => $context["deletedImage"]) {
            // line 22
            echo "                <div class=\"col-md-6 col-lg-6 col-xl-6 col-sm-12\">
                    <div class=\"card p-3\">
                        <img class=\"card-img-top img-fluid\" style=\"max-height: 240px\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["deletedImage"], "fileName", array()), "html", null, true);
            echo "\" alt=\"Image\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">Card title</h4>
                            <p class=\"card-text\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["deletedImage"], "description", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_restore", array("id" => $this->getAttribute($context["deletedImage"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\" role=\"button\">Restore</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deletedImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
";
        
        $__internal_c13b4dff09e0d042f62bd0509e5487e5589988cecfe1df11749775e3919e55da->leave($__internal_c13b4dff09e0d042f62bd0509e5487e5589988cecfe1df11749775e3919e55da_prof);

        
        $__internal_ac1e902878464cc2a464f3dd023e5024c5be223934a53d8edc9b8300c62f8b3b->leave($__internal_ac1e902878464cc2a464f3dd023e5024c5be223934a53d8edc9b8300c62f8b3b_prof);

    }

    public function getTemplateName()
    {
        return ":default:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  96 => 30,  90 => 27,  83 => 24,  79 => 22,  75 => 21,  65 => 14,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
                        <a class=\"nav-link active\" href=\"#\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('upload') }}\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class=\"row\">
            {% for deletedImage in deletedImages %}
                <div class=\"col-md-6 col-lg-6 col-xl-6 col-sm-12\">
                    <div class=\"card p-3\">
                        <img class=\"card-img-top img-fluid\" style=\"max-height: 240px\" src=\"{{ asset('images/') }}{{ deletedImage.fileName }}\" alt=\"Image\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">Card title</h4>
                            <p class=\"card-text\">{{ deletedImage.description }}</p>
                        </div>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
                            <a href=\"{{ path('api_restore',{'id' : deletedImage.id} ) }}\" class=\"btn btn-secondary\" role=\"button\">Restore</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", ":default:deleted.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app/Resources\\views/default/deleted.html.twig");
    }
}
