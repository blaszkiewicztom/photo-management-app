<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_56367c7953679acfd39be405243fbec2d5c5222309ea3b43efae9f1a2042b91b extends Twig_Template
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
        $__internal_ba30343b2f4421b6edcc12db66f6abacabaeb2540580831880259af56353d7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba30343b2f4421b6edcc12db66f6abacabaeb2540580831880259af56353d7f0->enter($__internal_ba30343b2f4421b6edcc12db66f6abacabaeb2540580831880259af56353d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5158cc05c0d261d2c9e746620af3752c1a2a9b6b668771677c4d993cfd7c144c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5158cc05c0d261d2c9e746620af3752c1a2a9b6b668771677c4d993cfd7c144c->enter($__internal_5158cc05c0d261d2c9e746620af3752c1a2a9b6b668771677c4d993cfd7c144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ba30343b2f4421b6edcc12db66f6abacabaeb2540580831880259af56353d7f0->leave($__internal_ba30343b2f4421b6edcc12db66f6abacabaeb2540580831880259af56353d7f0_prof);

        
        $__internal_5158cc05c0d261d2c9e746620af3752c1a2a9b6b668771677c4d993cfd7c144c->leave($__internal_5158cc05c0d261d2c9e746620af3752c1a2a9b6b668771677c4d993cfd7c144c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
