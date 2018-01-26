<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9409f73c814e80354151a1a4d48526b7958a492e0a284c22d36116166152840b extends Twig_Template
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
        $__internal_05ff2c0107538f3dcbc164004857622b18bad48851b8e7c29c947c5541b2e6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ff2c0107538f3dcbc164004857622b18bad48851b8e7c29c947c5541b2e6a5->enter($__internal_05ff2c0107538f3dcbc164004857622b18bad48851b8e7c29c947c5541b2e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_97afed621f1b98668e122f2cf2fd7d09d7a5cb5ec8f212bf35aa28c0cc3ae5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97afed621f1b98668e122f2cf2fd7d09d7a5cb5ec8f212bf35aa28c0cc3ae5c1->enter($__internal_97afed621f1b98668e122f2cf2fd7d09d7a5cb5ec8f212bf35aa28c0cc3ae5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_05ff2c0107538f3dcbc164004857622b18bad48851b8e7c29c947c5541b2e6a5->leave($__internal_05ff2c0107538f3dcbc164004857622b18bad48851b8e7c29c947c5541b2e6a5_prof);

        
        $__internal_97afed621f1b98668e122f2cf2fd7d09d7a5cb5ec8f212bf35aa28c0cc3ae5c1->leave($__internal_97afed621f1b98668e122f2cf2fd7d09d7a5cb5ec8f212bf35aa28c0cc3ae5c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
