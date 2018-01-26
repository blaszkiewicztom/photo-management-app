<?php

/* default/deleted.html.twig */
class __TwigTemplate_32d1ee89ce5d1e1d4a734c0765f0b57f7c7ee9e8290499cdfe5806c1fc8a8264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/deleted.html.twig", 1);
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
        $__internal_6d66dcb8600211ed62a27372100bb08d40b3966d99514306a80d8245bfefd4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d66dcb8600211ed62a27372100bb08d40b3966d99514306a80d8245bfefd4c8->enter($__internal_6d66dcb8600211ed62a27372100bb08d40b3966d99514306a80d8245bfefd4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/deleted.html.twig"));

        $__internal_5d17de9151f4bf7ecbc970e5210f86d293d68b164a8d22a6e21e53f8477c2f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d17de9151f4bf7ecbc970e5210f86d293d68b164a8d22a6e21e53f8477c2f82->enter($__internal_5d17de9151f4bf7ecbc970e5210f86d293d68b164a8d22a6e21e53f8477c2f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d66dcb8600211ed62a27372100bb08d40b3966d99514306a80d8245bfefd4c8->leave($__internal_6d66dcb8600211ed62a27372100bb08d40b3966d99514306a80d8245bfefd4c8_prof);

        
        $__internal_5d17de9151f4bf7ecbc970e5210f86d293d68b164a8d22a6e21e53f8477c2f82->leave($__internal_5d17de9151f4bf7ecbc970e5210f86d293d68b164a8d22a6e21e53f8477c2f82_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f5bb7c8eaf998883f2a54695eaa4aa3639776e859bdd7c065ee654b53efe87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f5bb7c8eaf998883f2a54695eaa4aa3639776e859bdd7c065ee654b53efe87->enter($__internal_36f5bb7c8eaf998883f2a54695eaa4aa3639776e859bdd7c065ee654b53efe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5171d1dc6bca5e7d8e5e4de666dbdeb74f5fffde71156417110895c0bb398bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5171d1dc6bca5e7d8e5e4de666dbdeb74f5fffde71156417110895c0bb398bac->enter($__internal_5171d1dc6bca5e7d8e5e4de666dbdeb74f5fffde71156417110895c0bb398bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5171d1dc6bca5e7d8e5e4de666dbdeb74f5fffde71156417110895c0bb398bac->leave($__internal_5171d1dc6bca5e7d8e5e4de666dbdeb74f5fffde71156417110895c0bb398bac_prof);

        
        $__internal_36f5bb7c8eaf998883f2a54695eaa4aa3639776e859bdd7c065ee654b53efe87->leave($__internal_36f5bb7c8eaf998883f2a54695eaa4aa3639776e859bdd7c065ee654b53efe87_prof);

    }

    public function getTemplateName()
    {
        return "default/deleted.html.twig";
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
{% endblock %}", "default/deleted.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app\\Resources\\views\\default\\deleted.html.twig");
    }
}
