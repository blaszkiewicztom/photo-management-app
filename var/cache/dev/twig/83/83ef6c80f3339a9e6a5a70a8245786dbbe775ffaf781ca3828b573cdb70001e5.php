<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_08cee3b191b7e1ea277672ff92571ee455a6e58ec5712271098bcb5db1126b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8989da1ce446db2b08a0fe9f4c3927def1dceeadac86a2c779896bb5744024d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8989da1ce446db2b08a0fe9f4c3927def1dceeadac86a2c779896bb5744024d0->enter($__internal_8989da1ce446db2b08a0fe9f4c3927def1dceeadac86a2c779896bb5744024d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_31ae727d9b08114498a50f8e35d942fb90877d34c046214aec534f0afc25eede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ae727d9b08114498a50f8e35d942fb90877d34c046214aec534f0afc25eede->enter($__internal_31ae727d9b08114498a50f8e35d942fb90877d34c046214aec534f0afc25eede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8989da1ce446db2b08a0fe9f4c3927def1dceeadac86a2c779896bb5744024d0->leave($__internal_8989da1ce446db2b08a0fe9f4c3927def1dceeadac86a2c779896bb5744024d0_prof);

        
        $__internal_31ae727d9b08114498a50f8e35d942fb90877d34c046214aec534f0afc25eede->leave($__internal_31ae727d9b08114498a50f8e35d942fb90877d34c046214aec534f0afc25eede_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ae0b57a3e9c39f9226a0bf125fd5ec5ab90b9c3599199ea04ef568ec19c69e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae0b57a3e9c39f9226a0bf125fd5ec5ab90b9c3599199ea04ef568ec19c69e8->enter($__internal_5ae0b57a3e9c39f9226a0bf125fd5ec5ab90b9c3599199ea04ef568ec19c69e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe2b83cb6511742e5034e8c618be58a4cb105b3249eca1b2445290028ceaa008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2b83cb6511742e5034e8c618be58a4cb105b3249eca1b2445290028ceaa008->enter($__internal_fe2b83cb6511742e5034e8c618be58a4cb105b3249eca1b2445290028ceaa008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fe2b83cb6511742e5034e8c618be58a4cb105b3249eca1b2445290028ceaa008->leave($__internal_fe2b83cb6511742e5034e8c618be58a4cb105b3249eca1b2445290028ceaa008_prof);

        
        $__internal_5ae0b57a3e9c39f9226a0bf125fd5ec5ab90b9c3599199ea04ef568ec19c69e8->leave($__internal_5ae0b57a3e9c39f9226a0bf125fd5ec5ab90b9c3599199ea04ef568ec19c69e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
