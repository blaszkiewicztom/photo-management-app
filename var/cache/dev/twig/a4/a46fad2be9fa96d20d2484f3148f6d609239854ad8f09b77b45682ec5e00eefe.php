<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c64e635d3890110a4884487d09dd512ba47a508bdb5a0010a62aa59874bd146a extends Twig_Template
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
        $__internal_bb06adcfb34927e15a44ff1c75be3e6d8431a5e8e109e900e46355970ba0c9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb06adcfb34927e15a44ff1c75be3e6d8431a5e8e109e900e46355970ba0c9b0->enter($__internal_bb06adcfb34927e15a44ff1c75be3e6d8431a5e8e109e900e46355970ba0c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3713060b51d5aa06180e7157f429794548adf5e6bb96e59d16b203140a530d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3713060b51d5aa06180e7157f429794548adf5e6bb96e59d16b203140a530d3c->enter($__internal_3713060b51d5aa06180e7157f429794548adf5e6bb96e59d16b203140a530d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb06adcfb34927e15a44ff1c75be3e6d8431a5e8e109e900e46355970ba0c9b0->leave($__internal_bb06adcfb34927e15a44ff1c75be3e6d8431a5e8e109e900e46355970ba0c9b0_prof);

        
        $__internal_3713060b51d5aa06180e7157f429794548adf5e6bb96e59d16b203140a530d3c->leave($__internal_3713060b51d5aa06180e7157f429794548adf5e6bb96e59d16b203140a530d3c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5934786e8d82078f0786f18dfebb6e334e6b5946081004f3f87d42ff61d8ef46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5934786e8d82078f0786f18dfebb6e334e6b5946081004f3f87d42ff61d8ef46->enter($__internal_5934786e8d82078f0786f18dfebb6e334e6b5946081004f3f87d42ff61d8ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d951696605f0579984c5e9f6fb4a44b3e266ef62ed7769375c665f33c1ac600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d951696605f0579984c5e9f6fb4a44b3e266ef62ed7769375c665f33c1ac600->enter($__internal_2d951696605f0579984c5e9f6fb4a44b3e266ef62ed7769375c665f33c1ac600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2d951696605f0579984c5e9f6fb4a44b3e266ef62ed7769375c665f33c1ac600->leave($__internal_2d951696605f0579984c5e9f6fb4a44b3e266ef62ed7769375c665f33c1ac600_prof);

        
        $__internal_5934786e8d82078f0786f18dfebb6e334e6b5946081004f3f87d42ff61d8ef46->leave($__internal_5934786e8d82078f0786f18dfebb6e334e6b5946081004f3f87d42ff61d8ef46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
