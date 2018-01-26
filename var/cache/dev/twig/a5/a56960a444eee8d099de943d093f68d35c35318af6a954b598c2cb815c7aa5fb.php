<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_97298e49cf0eba6393cfb10a37f06dd0fb6055fd4aac887858c46273bb0137aa extends Twig_Template
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
        $__internal_cddd8915a7d215744739c7b119313be22a49596d9c4690373addb34ffe57e24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddd8915a7d215744739c7b119313be22a49596d9c4690373addb34ffe57e24c->enter($__internal_cddd8915a7d215744739c7b119313be22a49596d9c4690373addb34ffe57e24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8ab83fd6c4948b8f4023a531f2b6e8caadf761dd1c8bdb733e6963dbabb61a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab83fd6c4948b8f4023a531f2b6e8caadf761dd1c8bdb733e6963dbabb61a1e->enter($__internal_8ab83fd6c4948b8f4023a531f2b6e8caadf761dd1c8bdb733e6963dbabb61a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cddd8915a7d215744739c7b119313be22a49596d9c4690373addb34ffe57e24c->leave($__internal_cddd8915a7d215744739c7b119313be22a49596d9c4690373addb34ffe57e24c_prof);

        
        $__internal_8ab83fd6c4948b8f4023a531f2b6e8caadf761dd1c8bdb733e6963dbabb61a1e->leave($__internal_8ab83fd6c4948b8f4023a531f2b6e8caadf761dd1c8bdb733e6963dbabb61a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
