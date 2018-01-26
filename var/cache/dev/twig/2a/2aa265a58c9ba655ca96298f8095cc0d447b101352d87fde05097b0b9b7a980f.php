<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_31f132c209946628eb224cb063da71af2b41d7b2572de143f6d0157981a007a4 extends Twig_Template
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
        $__internal_b3d28a955f43a430cec0688daf6b3a31f4961a461832c2d4d9948415e5bfae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d28a955f43a430cec0688daf6b3a31f4961a461832c2d4d9948415e5bfae7e->enter($__internal_b3d28a955f43a430cec0688daf6b3a31f4961a461832c2d4d9948415e5bfae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5b4628929b7684cd63e41f1071816d2a10f39541f95098d8a4128e8da2d8e88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4628929b7684cd63e41f1071816d2a10f39541f95098d8a4128e8da2d8e88c->enter($__internal_5b4628929b7684cd63e41f1071816d2a10f39541f95098d8a4128e8da2d8e88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b3d28a955f43a430cec0688daf6b3a31f4961a461832c2d4d9948415e5bfae7e->leave($__internal_b3d28a955f43a430cec0688daf6b3a31f4961a461832c2d4d9948415e5bfae7e_prof);

        
        $__internal_5b4628929b7684cd63e41f1071816d2a10f39541f95098d8a4128e8da2d8e88c->leave($__internal_5b4628929b7684cd63e41f1071816d2a10f39541f95098d8a4128e8da2d8e88c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
