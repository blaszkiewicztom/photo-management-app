<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b5f573f9eeb448028a14f96d4cd63f717612588105a7b561999058ebce694cc3 extends Twig_Template
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
        $__internal_9b516a981d19929b14b104fe7bcf18ef37edef96446c23c4de4d50c475a48643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b516a981d19929b14b104fe7bcf18ef37edef96446c23c4de4d50c475a48643->enter($__internal_9b516a981d19929b14b104fe7bcf18ef37edef96446c23c4de4d50c475a48643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7aeae2eedd08b64e3be3efef8e71e0ec584daad1014f00a2aa0b3eef2a0b0a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeae2eedd08b64e3be3efef8e71e0ec584daad1014f00a2aa0b3eef2a0b0a4e->enter($__internal_7aeae2eedd08b64e3be3efef8e71e0ec584daad1014f00a2aa0b3eef2a0b0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9b516a981d19929b14b104fe7bcf18ef37edef96446c23c4de4d50c475a48643->leave($__internal_9b516a981d19929b14b104fe7bcf18ef37edef96446c23c4de4d50c475a48643_prof);

        
        $__internal_7aeae2eedd08b64e3be3efef8e71e0ec584daad1014f00a2aa0b3eef2a0b0a4e->leave($__internal_7aeae2eedd08b64e3be3efef8e71e0ec584daad1014f00a2aa0b3eef2a0b0a4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
