<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2bd4ed182c7901271a808034a7ff5f0e731cb01a6df0ffa59e4a090e4f3f1706 extends Twig_Template
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
        $__internal_d4a0d7736878bd02a61458a09c438e16ca64d4dbf6415f3a626ec77d5829a32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a0d7736878bd02a61458a09c438e16ca64d4dbf6415f3a626ec77d5829a32d->enter($__internal_d4a0d7736878bd02a61458a09c438e16ca64d4dbf6415f3a626ec77d5829a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9425152e99c17b2a48ae5015627b3e9579ea22b3aa963d64fff66e9943556996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9425152e99c17b2a48ae5015627b3e9579ea22b3aa963d64fff66e9943556996->enter($__internal_9425152e99c17b2a48ae5015627b3e9579ea22b3aa963d64fff66e9943556996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d4a0d7736878bd02a61458a09c438e16ca64d4dbf6415f3a626ec77d5829a32d->leave($__internal_d4a0d7736878bd02a61458a09c438e16ca64d4dbf6415f3a626ec77d5829a32d_prof);

        
        $__internal_9425152e99c17b2a48ae5015627b3e9579ea22b3aa963d64fff66e9943556996->leave($__internal_9425152e99c17b2a48ae5015627b3e9579ea22b3aa963d64fff66e9943556996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
