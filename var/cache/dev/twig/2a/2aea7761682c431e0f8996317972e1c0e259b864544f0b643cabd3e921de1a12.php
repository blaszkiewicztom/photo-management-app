<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_485e4aed25c772f9801fe96a4f4fea615c18cc6288e0fd783a87d85395b3872b extends Twig_Template
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
        $__internal_51a0bf747a233141f5c606d00044aaa7c726ac77aa558f8fcac45ad2180d993c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a0bf747a233141f5c606d00044aaa7c726ac77aa558f8fcac45ad2180d993c->enter($__internal_51a0bf747a233141f5c606d00044aaa7c726ac77aa558f8fcac45ad2180d993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_505f20141f0b7f8873ee172bc32ead0ed071df375f238a2d69541e797541610e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505f20141f0b7f8873ee172bc32ead0ed071df375f238a2d69541e797541610e->enter($__internal_505f20141f0b7f8873ee172bc32ead0ed071df375f238a2d69541e797541610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_51a0bf747a233141f5c606d00044aaa7c726ac77aa558f8fcac45ad2180d993c->leave($__internal_51a0bf747a233141f5c606d00044aaa7c726ac77aa558f8fcac45ad2180d993c_prof);

        
        $__internal_505f20141f0b7f8873ee172bc32ead0ed071df375f238a2d69541e797541610e->leave($__internal_505f20141f0b7f8873ee172bc32ead0ed071df375f238a2d69541e797541610e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
