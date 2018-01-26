<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ccff04363ce1e6ea518183d73e3ac106acdaf0e63458bf16568347c84ad3d860 extends Twig_Template
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
        $__internal_c7bbeb296ce5abf83764785de7b5f948e10f185a09ac0fc9e8e56c3a0ce99139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bbeb296ce5abf83764785de7b5f948e10f185a09ac0fc9e8e56c3a0ce99139->enter($__internal_c7bbeb296ce5abf83764785de7b5f948e10f185a09ac0fc9e8e56c3a0ce99139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_689c41028def40606039f33fabe8b57e43c9085c85604bd4190c8a9b2c3a2a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c41028def40606039f33fabe8b57e43c9085c85604bd4190c8a9b2c3a2a24->enter($__internal_689c41028def40606039f33fabe8b57e43c9085c85604bd4190c8a9b2c3a2a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c7bbeb296ce5abf83764785de7b5f948e10f185a09ac0fc9e8e56c3a0ce99139->leave($__internal_c7bbeb296ce5abf83764785de7b5f948e10f185a09ac0fc9e8e56c3a0ce99139_prof);

        
        $__internal_689c41028def40606039f33fabe8b57e43c9085c85604bd4190c8a9b2c3a2a24->leave($__internal_689c41028def40606039f33fabe8b57e43c9085c85604bd4190c8a9b2c3a2a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
