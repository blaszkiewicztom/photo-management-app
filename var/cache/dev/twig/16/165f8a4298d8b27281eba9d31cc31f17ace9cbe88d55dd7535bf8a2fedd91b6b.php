<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a441ffc32ee477782f4e160194796c884407204a09609e894de15b05f4b68c77 extends Twig_Template
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
        $__internal_b8431af0aaa1ada615195f214c209c7deb7c2fe4d624da245bd6b65e8e60a6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8431af0aaa1ada615195f214c209c7deb7c2fe4d624da245bd6b65e8e60a6a6->enter($__internal_b8431af0aaa1ada615195f214c209c7deb7c2fe4d624da245bd6b65e8e60a6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a65d75463b1016d02bfb4c28c099a5cc2fa86a8d5cf913cdcd2bcce71bb9966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65d75463b1016d02bfb4c28c099a5cc2fa86a8d5cf913cdcd2bcce71bb9966d->enter($__internal_a65d75463b1016d02bfb4c28c099a5cc2fa86a8d5cf913cdcd2bcce71bb9966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b8431af0aaa1ada615195f214c209c7deb7c2fe4d624da245bd6b65e8e60a6a6->leave($__internal_b8431af0aaa1ada615195f214c209c7deb7c2fe4d624da245bd6b65e8e60a6a6_prof);

        
        $__internal_a65d75463b1016d02bfb4c28c099a5cc2fa86a8d5cf913cdcd2bcce71bb9966d->leave($__internal_a65d75463b1016d02bfb4c28c099a5cc2fa86a8d5cf913cdcd2bcce71bb9966d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
