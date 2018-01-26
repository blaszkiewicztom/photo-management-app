<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b8dca4c305d2045782d752c34cf9f003a3999a08cbfaadb4e2886373a28d0d34 extends Twig_Template
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
        $__internal_670f147926394e00abf7410d48bcf13f6aa82cbb1f79372d51ecc3e0fa3cc05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670f147926394e00abf7410d48bcf13f6aa82cbb1f79372d51ecc3e0fa3cc05e->enter($__internal_670f147926394e00abf7410d48bcf13f6aa82cbb1f79372d51ecc3e0fa3cc05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e3d69eb818cc9f338865c4223d43bf76932e4c952d7241b49aeb63d7417b89a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d69eb818cc9f338865c4223d43bf76932e4c952d7241b49aeb63d7417b89a0->enter($__internal_e3d69eb818cc9f338865c4223d43bf76932e4c952d7241b49aeb63d7417b89a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_670f147926394e00abf7410d48bcf13f6aa82cbb1f79372d51ecc3e0fa3cc05e->leave($__internal_670f147926394e00abf7410d48bcf13f6aa82cbb1f79372d51ecc3e0fa3cc05e_prof);

        
        $__internal_e3d69eb818cc9f338865c4223d43bf76932e4c952d7241b49aeb63d7417b89a0->leave($__internal_e3d69eb818cc9f338865c4223d43bf76932e4c952d7241b49aeb63d7417b89a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
