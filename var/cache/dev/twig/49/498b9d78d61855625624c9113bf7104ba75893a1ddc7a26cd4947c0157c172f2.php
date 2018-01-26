<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_56073a2aa7075702bebc801ef2500d237b2e4bc6ca774bac578619e946001fb7 extends Twig_Template
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
        $__internal_535d5d7bfaa1f433ca07f5345bd3126366aeac8ca3ddbfd575fc0183e8eb9daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535d5d7bfaa1f433ca07f5345bd3126366aeac8ca3ddbfd575fc0183e8eb9daa->enter($__internal_535d5d7bfaa1f433ca07f5345bd3126366aeac8ca3ddbfd575fc0183e8eb9daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0fe6317b303912c69283a0bb3a65f6369a01b145fceed7ce4164b7a1fecd3a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe6317b303912c69283a0bb3a65f6369a01b145fceed7ce4164b7a1fecd3a8f->enter($__internal_0fe6317b303912c69283a0bb3a65f6369a01b145fceed7ce4164b7a1fecd3a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_535d5d7bfaa1f433ca07f5345bd3126366aeac8ca3ddbfd575fc0183e8eb9daa->leave($__internal_535d5d7bfaa1f433ca07f5345bd3126366aeac8ca3ddbfd575fc0183e8eb9daa_prof);

        
        $__internal_0fe6317b303912c69283a0bb3a65f6369a01b145fceed7ce4164b7a1fecd3a8f->leave($__internal_0fe6317b303912c69283a0bb3a65f6369a01b145fceed7ce4164b7a1fecd3a8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
