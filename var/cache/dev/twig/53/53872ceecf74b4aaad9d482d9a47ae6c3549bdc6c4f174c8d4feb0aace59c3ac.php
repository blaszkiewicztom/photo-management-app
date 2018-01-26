<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e820af6b7e0a6fce1507ac48901640404e2cbff7bda3610aec40324994b8e6bf extends Twig_Template
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
        $__internal_64bea7a25883522a814d51769b148741b1d65b25193815e156c1c414373a405e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bea7a25883522a814d51769b148741b1d65b25193815e156c1c414373a405e->enter($__internal_64bea7a25883522a814d51769b148741b1d65b25193815e156c1c414373a405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cfcda5a6730f2dbed57c15a76ea9b35b60ff34afc45f94973ed11da457275bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcda5a6730f2dbed57c15a76ea9b35b60ff34afc45f94973ed11da457275bfc->enter($__internal_cfcda5a6730f2dbed57c15a76ea9b35b60ff34afc45f94973ed11da457275bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_64bea7a25883522a814d51769b148741b1d65b25193815e156c1c414373a405e->leave($__internal_64bea7a25883522a814d51769b148741b1d65b25193815e156c1c414373a405e_prof);

        
        $__internal_cfcda5a6730f2dbed57c15a76ea9b35b60ff34afc45f94973ed11da457275bfc->leave($__internal_cfcda5a6730f2dbed57c15a76ea9b35b60ff34afc45f94973ed11da457275bfc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77e387e484a24a25c8e797ac1423aa1ec5898009ce2a4436839a28b6f21b84c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e387e484a24a25c8e797ac1423aa1ec5898009ce2a4436839a28b6f21b84c8->enter($__internal_77e387e484a24a25c8e797ac1423aa1ec5898009ce2a4436839a28b6f21b84c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b95d99f4c6a7ecfb0c7980eb9a10daf2e607a9d352fa46c1854dce468ebaf39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b95d99f4c6a7ecfb0c7980eb9a10daf2e607a9d352fa46c1854dce468ebaf39->enter($__internal_6b95d99f4c6a7ecfb0c7980eb9a10daf2e607a9d352fa46c1854dce468ebaf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6b95d99f4c6a7ecfb0c7980eb9a10daf2e607a9d352fa46c1854dce468ebaf39->leave($__internal_6b95d99f4c6a7ecfb0c7980eb9a10daf2e607a9d352fa46c1854dce468ebaf39_prof);

        
        $__internal_77e387e484a24a25c8e797ac1423aa1ec5898009ce2a4436839a28b6f21b84c8->leave($__internal_77e387e484a24a25c8e797ac1423aa1ec5898009ce2a4436839a28b6f21b84c8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_93706fd5124bdfac24adea077efbe740ea4ac9e7e55719e48ac5d840d2faa8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93706fd5124bdfac24adea077efbe740ea4ac9e7e55719e48ac5d840d2faa8b2->enter($__internal_93706fd5124bdfac24adea077efbe740ea4ac9e7e55719e48ac5d840d2faa8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5335ee57eb9c3e360e8c83177ddaebd1802ca2365c17a7754b1568f45614d19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5335ee57eb9c3e360e8c83177ddaebd1802ca2365c17a7754b1568f45614d19b->enter($__internal_5335ee57eb9c3e360e8c83177ddaebd1802ca2365c17a7754b1568f45614d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5335ee57eb9c3e360e8c83177ddaebd1802ca2365c17a7754b1568f45614d19b->leave($__internal_5335ee57eb9c3e360e8c83177ddaebd1802ca2365c17a7754b1568f45614d19b_prof);

        
        $__internal_93706fd5124bdfac24adea077efbe740ea4ac9e7e55719e48ac5d840d2faa8b2->leave($__internal_93706fd5124bdfac24adea077efbe740ea4ac9e7e55719e48ac5d840d2faa8b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a9f41f3b35d5978456914433c2ae0da1e112753f5933d79d2ec05dd92ef1be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9f41f3b35d5978456914433c2ae0da1e112753f5933d79d2ec05dd92ef1be1->enter($__internal_5a9f41f3b35d5978456914433c2ae0da1e112753f5933d79d2ec05dd92ef1be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f68d95a3263c24031fd04040b282347c71aed1f35d42cbe74d27c8915158417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f68d95a3263c24031fd04040b282347c71aed1f35d42cbe74d27c8915158417->enter($__internal_3f68d95a3263c24031fd04040b282347c71aed1f35d42cbe74d27c8915158417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f68d95a3263c24031fd04040b282347c71aed1f35d42cbe74d27c8915158417->leave($__internal_3f68d95a3263c24031fd04040b282347c71aed1f35d42cbe74d27c8915158417_prof);

        
        $__internal_5a9f41f3b35d5978456914433c2ae0da1e112753f5933d79d2ec05dd92ef1be1->leave($__internal_5a9f41f3b35d5978456914433c2ae0da1e112753f5933d79d2ec05dd92ef1be1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
