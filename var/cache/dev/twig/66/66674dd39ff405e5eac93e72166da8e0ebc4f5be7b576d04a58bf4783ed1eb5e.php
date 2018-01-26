<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_110193cdaf01b1daba799979889f2bbb492b3fd695fdbec11af8431c47e75332 extends Twig_Template
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
        $__internal_b017cf0c8c17e89518212361abb0b3c5c42f978d077665477dcf0d29bc958b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b017cf0c8c17e89518212361abb0b3c5c42f978d077665477dcf0d29bc958b71->enter($__internal_b017cf0c8c17e89518212361abb0b3c5c42f978d077665477dcf0d29bc958b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f71acfe84d17c6088abf4600c34d0261b726643d439b819b2fb196fc3c6951cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71acfe84d17c6088abf4600c34d0261b726643d439b819b2fb196fc3c6951cb->enter($__internal_f71acfe84d17c6088abf4600c34d0261b726643d439b819b2fb196fc3c6951cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b017cf0c8c17e89518212361abb0b3c5c42f978d077665477dcf0d29bc958b71->leave($__internal_b017cf0c8c17e89518212361abb0b3c5c42f978d077665477dcf0d29bc958b71_prof);

        
        $__internal_f71acfe84d17c6088abf4600c34d0261b726643d439b819b2fb196fc3c6951cb->leave($__internal_f71acfe84d17c6088abf4600c34d0261b726643d439b819b2fb196fc3c6951cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
