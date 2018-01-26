<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_27c226119963ad8ce484a5d7b98923a109c360d5dfb3a087a97b27990d460f71 extends Twig_Template
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
        $__internal_0a6dc2c6789c218f3c90d98ebc712941749ec427c88ffc7b7db92f5bd4ac912b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6dc2c6789c218f3c90d98ebc712941749ec427c88ffc7b7db92f5bd4ac912b->enter($__internal_0a6dc2c6789c218f3c90d98ebc712941749ec427c88ffc7b7db92f5bd4ac912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a5847cd23c8176fb3eef1f81a47ed88ce7a5dcd57f6f207c56ef07225a0e040e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5847cd23c8176fb3eef1f81a47ed88ce7a5dcd57f6f207c56ef07225a0e040e->enter($__internal_a5847cd23c8176fb3eef1f81a47ed88ce7a5dcd57f6f207c56ef07225a0e040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0a6dc2c6789c218f3c90d98ebc712941749ec427c88ffc7b7db92f5bd4ac912b->leave($__internal_0a6dc2c6789c218f3c90d98ebc712941749ec427c88ffc7b7db92f5bd4ac912b_prof);

        
        $__internal_a5847cd23c8176fb3eef1f81a47ed88ce7a5dcd57f6f207c56ef07225a0e040e->leave($__internal_a5847cd23c8176fb3eef1f81a47ed88ce7a5dcd57f6f207c56ef07225a0e040e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
