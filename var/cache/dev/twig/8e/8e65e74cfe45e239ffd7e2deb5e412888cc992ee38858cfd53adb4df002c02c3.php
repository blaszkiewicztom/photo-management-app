<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_70abc4c8fd9430dcf46f5d347006f3c0c4a0f092887fa973d21463b58eb4a191 extends Twig_Template
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
        $__internal_455294f10cdb6cbc6b969289d5073061161883a6c0537ecf65a90834afaa8a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455294f10cdb6cbc6b969289d5073061161883a6c0537ecf65a90834afaa8a18->enter($__internal_455294f10cdb6cbc6b969289d5073061161883a6c0537ecf65a90834afaa8a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8ab4a387eb48e1a221693fe356bb2d1fd3965fae1fe5582e31406fb958ed81b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab4a387eb48e1a221693fe356bb2d1fd3965fae1fe5582e31406fb958ed81b9->enter($__internal_8ab4a387eb48e1a221693fe356bb2d1fd3965fae1fe5582e31406fb958ed81b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_455294f10cdb6cbc6b969289d5073061161883a6c0537ecf65a90834afaa8a18->leave($__internal_455294f10cdb6cbc6b969289d5073061161883a6c0537ecf65a90834afaa8a18_prof);

        
        $__internal_8ab4a387eb48e1a221693fe356bb2d1fd3965fae1fe5582e31406fb958ed81b9->leave($__internal_8ab4a387eb48e1a221693fe356bb2d1fd3965fae1fe5582e31406fb958ed81b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
