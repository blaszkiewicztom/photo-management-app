<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5221666319b2173076034f29c93e393cdc896acde7fb3a12a85d3b4e3cdcae10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05c0bbc113bd894ede987f88ca2aabdaf0e5c115d1cf5810d6c11575aac7cb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c0bbc113bd894ede987f88ca2aabdaf0e5c115d1cf5810d6c11575aac7cb77->enter($__internal_05c0bbc113bd894ede987f88ca2aabdaf0e5c115d1cf5810d6c11575aac7cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_46266af4238179e5d24085e6829a716c35c6f3a73d186fc9a0c4b3d52114358d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46266af4238179e5d24085e6829a716c35c6f3a73d186fc9a0c4b3d52114358d->enter($__internal_46266af4238179e5d24085e6829a716c35c6f3a73d186fc9a0c4b3d52114358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_05c0bbc113bd894ede987f88ca2aabdaf0e5c115d1cf5810d6c11575aac7cb77->leave($__internal_05c0bbc113bd894ede987f88ca2aabdaf0e5c115d1cf5810d6c11575aac7cb77_prof);

        
        $__internal_46266af4238179e5d24085e6829a716c35c6f3a73d186fc9a0c4b3d52114358d->leave($__internal_46266af4238179e5d24085e6829a716c35c6f3a73d186fc9a0c4b3d52114358d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f5c44b19533fc95c6db455084bc413bcff8b3b64641b5f769064aa2a45fdd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5c44b19533fc95c6db455084bc413bcff8b3b64641b5f769064aa2a45fdd04->enter($__internal_8f5c44b19533fc95c6db455084bc413bcff8b3b64641b5f769064aa2a45fdd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4513a44ef9a9c92fd112ee886c1f401140816c0935042a7d37508c9cfc861b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4513a44ef9a9c92fd112ee886c1f401140816c0935042a7d37508c9cfc861b7->enter($__internal_f4513a44ef9a9c92fd112ee886c1f401140816c0935042a7d37508c9cfc861b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f4513a44ef9a9c92fd112ee886c1f401140816c0935042a7d37508c9cfc861b7->leave($__internal_f4513a44ef9a9c92fd112ee886c1f401140816c0935042a7d37508c9cfc861b7_prof);

        
        $__internal_8f5c44b19533fc95c6db455084bc413bcff8b3b64641b5f769064aa2a45fdd04->leave($__internal_8f5c44b19533fc95c6db455084bc413bcff8b3b64641b5f769064aa2a45fdd04_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcf1b240c7b2ea28f2007031f4dd5e0b35df0b7a6df7b7b583080ad22af5be57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf1b240c7b2ea28f2007031f4dd5e0b35df0b7a6df7b7b583080ad22af5be57->enter($__internal_dcf1b240c7b2ea28f2007031f4dd5e0b35df0b7a6df7b7b583080ad22af5be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6852f15784fd661fc6db072fa4963c8dd019660ccd09cb120b2380b2578c2b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6852f15784fd661fc6db072fa4963c8dd019660ccd09cb120b2380b2578c2b11->enter($__internal_6852f15784fd661fc6db072fa4963c8dd019660ccd09cb120b2380b2578c2b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6852f15784fd661fc6db072fa4963c8dd019660ccd09cb120b2380b2578c2b11->leave($__internal_6852f15784fd661fc6db072fa4963c8dd019660ccd09cb120b2380b2578c2b11_prof);

        
        $__internal_dcf1b240c7b2ea28f2007031f4dd5e0b35df0b7a6df7b7b583080ad22af5be57->leave($__internal_dcf1b240c7b2ea28f2007031f4dd5e0b35df0b7a6df7b7b583080ad22af5be57_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_99414c9fc453d7d4a8bd4c5af8101eedb581da03de44b3434765bb62bd6f9141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99414c9fc453d7d4a8bd4c5af8101eedb581da03de44b3434765bb62bd6f9141->enter($__internal_99414c9fc453d7d4a8bd4c5af8101eedb581da03de44b3434765bb62bd6f9141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb374e95ad32329b85fdcbce7fbc4a2b5c92bd4b1329d80c426b792ce6f74f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb374e95ad32329b85fdcbce7fbc4a2b5c92bd4b1329d80c426b792ce6f74f42->enter($__internal_eb374e95ad32329b85fdcbce7fbc4a2b5c92bd4b1329d80c426b792ce6f74f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb374e95ad32329b85fdcbce7fbc4a2b5c92bd4b1329d80c426b792ce6f74f42->leave($__internal_eb374e95ad32329b85fdcbce7fbc4a2b5c92bd4b1329d80c426b792ce6f74f42_prof);

        
        $__internal_99414c9fc453d7d4a8bd4c5af8101eedb581da03de44b3434765bb62bd6f9141->leave($__internal_99414c9fc453d7d4a8bd4c5af8101eedb581da03de44b3434765bb62bd6f9141_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
