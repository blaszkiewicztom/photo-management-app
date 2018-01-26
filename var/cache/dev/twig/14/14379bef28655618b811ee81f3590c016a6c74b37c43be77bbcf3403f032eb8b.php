<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0521621ad159c956b1cfdfe7fbbe6ef3a18a2935e9d7065d84a34e068f376dbc extends Twig_Template
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
        $__internal_df50952816e3f637664b55753f5dec6954fd8a2439c779fea546ea99b9b0da0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df50952816e3f637664b55753f5dec6954fd8a2439c779fea546ea99b9b0da0d->enter($__internal_df50952816e3f637664b55753f5dec6954fd8a2439c779fea546ea99b9b0da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8c8b18eb904efc56804af049022a4359af33dc457048ef44a754438413227a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8b18eb904efc56804af049022a4359af33dc457048ef44a754438413227a52->enter($__internal_8c8b18eb904efc56804af049022a4359af33dc457048ef44a754438413227a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_df50952816e3f637664b55753f5dec6954fd8a2439c779fea546ea99b9b0da0d->leave($__internal_df50952816e3f637664b55753f5dec6954fd8a2439c779fea546ea99b9b0da0d_prof);

        
        $__internal_8c8b18eb904efc56804af049022a4359af33dc457048ef44a754438413227a52->leave($__internal_8c8b18eb904efc56804af049022a4359af33dc457048ef44a754438413227a52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
