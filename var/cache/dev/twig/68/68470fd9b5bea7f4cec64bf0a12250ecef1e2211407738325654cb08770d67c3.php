<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6f0c23303578e5b7035dc34594879ecb65e0ae7a14877445846281f04636c7f9 extends Twig_Template
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
        $__internal_e4f41e7709cb12f0787489b6802ea0f38a8bebf720f0425cedfb018f80995eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f41e7709cb12f0787489b6802ea0f38a8bebf720f0425cedfb018f80995eb5->enter($__internal_e4f41e7709cb12f0787489b6802ea0f38a8bebf720f0425cedfb018f80995eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e3a20439c477d6368090cc1f5a88ddf59aa84c0de6d0954a395c6efa30a4db70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a20439c477d6368090cc1f5a88ddf59aa84c0de6d0954a395c6efa30a4db70->enter($__internal_e3a20439c477d6368090cc1f5a88ddf59aa84c0de6d0954a395c6efa30a4db70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e4f41e7709cb12f0787489b6802ea0f38a8bebf720f0425cedfb018f80995eb5->leave($__internal_e4f41e7709cb12f0787489b6802ea0f38a8bebf720f0425cedfb018f80995eb5_prof);

        
        $__internal_e3a20439c477d6368090cc1f5a88ddf59aa84c0de6d0954a395c6efa30a4db70->leave($__internal_e3a20439c477d6368090cc1f5a88ddf59aa84c0de6d0954a395c6efa30a4db70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
