<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0090cea7e8fb52b27d5433caca7b1d88d15aa4ba9d12fd022442aee7cecf49c6 extends Twig_Template
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
        $__internal_a77228f4f5a21b3fe2484a457dd39881e22ad14278e2e08bd6b5d75aedf84ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77228f4f5a21b3fe2484a457dd39881e22ad14278e2e08bd6b5d75aedf84ae9->enter($__internal_a77228f4f5a21b3fe2484a457dd39881e22ad14278e2e08bd6b5d75aedf84ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0a915d2ffced13933a409ae185455fb1a41c4c83b232c73c469fc1e85aedb06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a915d2ffced13933a409ae185455fb1a41c4c83b232c73c469fc1e85aedb06b->enter($__internal_0a915d2ffced13933a409ae185455fb1a41c4c83b232c73c469fc1e85aedb06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a77228f4f5a21b3fe2484a457dd39881e22ad14278e2e08bd6b5d75aedf84ae9->leave($__internal_a77228f4f5a21b3fe2484a457dd39881e22ad14278e2e08bd6b5d75aedf84ae9_prof);

        
        $__internal_0a915d2ffced13933a409ae185455fb1a41c4c83b232c73c469fc1e85aedb06b->leave($__internal_0a915d2ffced13933a409ae185455fb1a41c4c83b232c73c469fc1e85aedb06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
