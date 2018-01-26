<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_757246e7aa1852f127ba3f435b94a2aa0710a380f019017e60575df1ee23f865 extends Twig_Template
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
        $__internal_e8b4cf8b7888ac787aa9f6e8af6936d9aa397702bbb8af13869bba05a880b95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b4cf8b7888ac787aa9f6e8af6936d9aa397702bbb8af13869bba05a880b95d->enter($__internal_e8b4cf8b7888ac787aa9f6e8af6936d9aa397702bbb8af13869bba05a880b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_db5debe2998572b227b41faa2fd76eb01a72cbcc2ba048c293ad6e35c395e8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5debe2998572b227b41faa2fd76eb01a72cbcc2ba048c293ad6e35c395e8d8->enter($__internal_db5debe2998572b227b41faa2fd76eb01a72cbcc2ba048c293ad6e35c395e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e8b4cf8b7888ac787aa9f6e8af6936d9aa397702bbb8af13869bba05a880b95d->leave($__internal_e8b4cf8b7888ac787aa9f6e8af6936d9aa397702bbb8af13869bba05a880b95d_prof);

        
        $__internal_db5debe2998572b227b41faa2fd76eb01a72cbcc2ba048c293ad6e35c395e8d8->leave($__internal_db5debe2998572b227b41faa2fd76eb01a72cbcc2ba048c293ad6e35c395e8d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
