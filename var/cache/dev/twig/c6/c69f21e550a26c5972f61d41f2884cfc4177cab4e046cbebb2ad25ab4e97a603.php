<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9b7962b2c63c7f8d6fefcc1127ad11d4301cac7c7bd8a354870a69a080bb2cc1 extends Twig_Template
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
        $__internal_d4d1524e6a525b2dd37374558b3434e586d9a22f9b759c7e26b0859e1e08f1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d1524e6a525b2dd37374558b3434e586d9a22f9b759c7e26b0859e1e08f1db->enter($__internal_d4d1524e6a525b2dd37374558b3434e586d9a22f9b759c7e26b0859e1e08f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_aeca3b2382a01f70bc8b5542308eb944618f8f835b7148289f301cfb5e7658f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeca3b2382a01f70bc8b5542308eb944618f8f835b7148289f301cfb5e7658f4->enter($__internal_aeca3b2382a01f70bc8b5542308eb944618f8f835b7148289f301cfb5e7658f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d4d1524e6a525b2dd37374558b3434e586d9a22f9b759c7e26b0859e1e08f1db->leave($__internal_d4d1524e6a525b2dd37374558b3434e586d9a22f9b759c7e26b0859e1e08f1db_prof);

        
        $__internal_aeca3b2382a01f70bc8b5542308eb944618f8f835b7148289f301cfb5e7658f4->leave($__internal_aeca3b2382a01f70bc8b5542308eb944618f8f835b7148289f301cfb5e7658f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
