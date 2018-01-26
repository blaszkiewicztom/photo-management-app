<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_adc4de45c815cccfe19ee368999eb5e90fc2c8065b34ce5ff4173fd0e96520fd extends Twig_Template
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
        $__internal_720c059d6e9179ffeca4e90214a90861207bb056e3db3eb7ccb6f4874085cf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720c059d6e9179ffeca4e90214a90861207bb056e3db3eb7ccb6f4874085cf07->enter($__internal_720c059d6e9179ffeca4e90214a90861207bb056e3db3eb7ccb6f4874085cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8a18f1c273d4b71d9cc9ed6969b626cd3d236da44d6310a71032004583c75753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a18f1c273d4b71d9cc9ed6969b626cd3d236da44d6310a71032004583c75753->enter($__internal_8a18f1c273d4b71d9cc9ed6969b626cd3d236da44d6310a71032004583c75753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_720c059d6e9179ffeca4e90214a90861207bb056e3db3eb7ccb6f4874085cf07->leave($__internal_720c059d6e9179ffeca4e90214a90861207bb056e3db3eb7ccb6f4874085cf07_prof);

        
        $__internal_8a18f1c273d4b71d9cc9ed6969b626cd3d236da44d6310a71032004583c75753->leave($__internal_8a18f1c273d4b71d9cc9ed6969b626cd3d236da44d6310a71032004583c75753_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
