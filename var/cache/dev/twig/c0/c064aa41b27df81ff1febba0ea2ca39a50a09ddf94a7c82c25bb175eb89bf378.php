<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0671531c531cec2fe2598471ba5c005aeffb157b6b704a4cdf430fb6e32b0839 extends Twig_Template
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
        $__internal_c1cd32c3de624d7e634e81f81bc9aee43b270663ae4e85dad96eaabfdbbc13d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cd32c3de624d7e634e81f81bc9aee43b270663ae4e85dad96eaabfdbbc13d3->enter($__internal_c1cd32c3de624d7e634e81f81bc9aee43b270663ae4e85dad96eaabfdbbc13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b5f5df65eeb3b70a062afdd2570c3d82ed5d367f45bb51b1232fb4f3e1699a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f5df65eeb3b70a062afdd2570c3d82ed5d367f45bb51b1232fb4f3e1699a9f->enter($__internal_b5f5df65eeb3b70a062afdd2570c3d82ed5d367f45bb51b1232fb4f3e1699a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c1cd32c3de624d7e634e81f81bc9aee43b270663ae4e85dad96eaabfdbbc13d3->leave($__internal_c1cd32c3de624d7e634e81f81bc9aee43b270663ae4e85dad96eaabfdbbc13d3_prof);

        
        $__internal_b5f5df65eeb3b70a062afdd2570c3d82ed5d367f45bb51b1232fb4f3e1699a9f->leave($__internal_b5f5df65eeb3b70a062afdd2570c3d82ed5d367f45bb51b1232fb4f3e1699a9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
