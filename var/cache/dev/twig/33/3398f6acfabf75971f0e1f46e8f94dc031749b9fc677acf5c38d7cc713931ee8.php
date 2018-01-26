<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c8326abee58e2a9b407591040681ccf28b94b28b40e411e81fe5293530a4da7 extends Twig_Template
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
        $__internal_198005201681253d969229b41a66683fd8f8b5ed2d6fc5a24b34576750dd3761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198005201681253d969229b41a66683fd8f8b5ed2d6fc5a24b34576750dd3761->enter($__internal_198005201681253d969229b41a66683fd8f8b5ed2d6fc5a24b34576750dd3761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d70b4fa3553dee79d8c6ed8b7409dc9e68540d86e495d1556c758b8d200d84bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b4fa3553dee79d8c6ed8b7409dc9e68540d86e495d1556c758b8d200d84bd->enter($__internal_d70b4fa3553dee79d8c6ed8b7409dc9e68540d86e495d1556c758b8d200d84bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_198005201681253d969229b41a66683fd8f8b5ed2d6fc5a24b34576750dd3761->leave($__internal_198005201681253d969229b41a66683fd8f8b5ed2d6fc5a24b34576750dd3761_prof);

        
        $__internal_d70b4fa3553dee79d8c6ed8b7409dc9e68540d86e495d1556c758b8d200d84bd->leave($__internal_d70b4fa3553dee79d8c6ed8b7409dc9e68540d86e495d1556c758b8d200d84bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
