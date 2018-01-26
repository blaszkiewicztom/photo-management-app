<?php

/* ::base.html.twig */
class __TwigTemplate_55eb37c53adcb4813688c86ad2cb41300b9b29774edf1462a6d49718ddce4d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a073fab2fcd635b3bdbdc3acf7b5bfa7ff52197a796ed247177db344e907ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a073fab2fcd635b3bdbdc3acf7b5bfa7ff52197a796ed247177db344e907ce2->enter($__internal_6a073fab2fcd635b3bdbdc3acf7b5bfa7ff52197a796ed247177db344e907ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0e1b656e66beb8a7425eb77d6bd7246b96e56b794bdd47e418ffaa5d38801622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1b656e66beb8a7425eb77d6bd7246b96e56b794bdd47e418ffaa5d38801622->enter($__internal_0e1b656e66beb8a7425eb77d6bd7246b96e56b794bdd47e418ffaa5d38801622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_6a073fab2fcd635b3bdbdc3acf7b5bfa7ff52197a796ed247177db344e907ce2->leave($__internal_6a073fab2fcd635b3bdbdc3acf7b5bfa7ff52197a796ed247177db344e907ce2_prof);

        
        $__internal_0e1b656e66beb8a7425eb77d6bd7246b96e56b794bdd47e418ffaa5d38801622->leave($__internal_0e1b656e66beb8a7425eb77d6bd7246b96e56b794bdd47e418ffaa5d38801622_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4582ea4230ba8f814049c85d8b0b160be052141ba3b0fd1fa7aa5918e71d7cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4582ea4230ba8f814049c85d8b0b160be052141ba3b0fd1fa7aa5918e71d7cc0->enter($__internal_4582ea4230ba8f814049c85d8b0b160be052141ba3b0fd1fa7aa5918e71d7cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bbed2d6efae42e9afc5d6d07c7db2c9771ea59d5a28ab9c6b507ab8253ec615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbed2d6efae42e9afc5d6d07c7db2c9771ea59d5a28ab9c6b507ab8253ec615->enter($__internal_4bbed2d6efae42e9afc5d6d07c7db2c9771ea59d5a28ab9c6b507ab8253ec615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4bbed2d6efae42e9afc5d6d07c7db2c9771ea59d5a28ab9c6b507ab8253ec615->leave($__internal_4bbed2d6efae42e9afc5d6d07c7db2c9771ea59d5a28ab9c6b507ab8253ec615_prof);

        
        $__internal_4582ea4230ba8f814049c85d8b0b160be052141ba3b0fd1fa7aa5918e71d7cc0->leave($__internal_4582ea4230ba8f814049c85d8b0b160be052141ba3b0fd1fa7aa5918e71d7cc0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_442d0c737f46f163b4c64dbd910dbaf2ea221246193c1dd0a48b209ff09c09da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442d0c737f46f163b4c64dbd910dbaf2ea221246193c1dd0a48b209ff09c09da->enter($__internal_442d0c737f46f163b4c64dbd910dbaf2ea221246193c1dd0a48b209ff09c09da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_60d32f120fb9eb96196c7568f9eb94620e3f62f954b79925a85e689b557df2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d32f120fb9eb96196c7568f9eb94620e3f62f954b79925a85e689b557df2df->enter($__internal_60d32f120fb9eb96196c7568f9eb94620e3f62f954b79925a85e689b557df2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        ";
        
        $__internal_60d32f120fb9eb96196c7568f9eb94620e3f62f954b79925a85e689b557df2df->leave($__internal_60d32f120fb9eb96196c7568f9eb94620e3f62f954b79925a85e689b557df2df_prof);

        
        $__internal_442d0c737f46f163b4c64dbd910dbaf2ea221246193c1dd0a48b209ff09c09da->leave($__internal_442d0c737f46f163b4c64dbd910dbaf2ea221246193c1dd0a48b209ff09c09da_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d011e28f05fa250cca09e9e9ad0a040eb1cee11a422f639af1b89f57db0ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d011e28f05fa250cca09e9e9ad0a040eb1cee11a422f639af1b89f57db0ccb->enter($__internal_84d011e28f05fa250cca09e9e9ad0a040eb1cee11a422f639af1b89f57db0ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d70f859ab842e1c69964cffcaafe1bf12d90fd58b61a8acb1445b0dc1f7e6312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70f859ab842e1c69964cffcaafe1bf12d90fd58b61a8acb1445b0dc1f7e6312->enter($__internal_d70f859ab842e1c69964cffcaafe1bf12d90fd58b61a8acb1445b0dc1f7e6312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d70f859ab842e1c69964cffcaafe1bf12d90fd58b61a8acb1445b0dc1f7e6312->leave($__internal_d70f859ab842e1c69964cffcaafe1bf12d90fd58b61a8acb1445b0dc1f7e6312_prof);

        
        $__internal_84d011e28f05fa250cca09e9e9ad0a040eb1cee11a422f639af1b89f57db0ccb->leave($__internal_84d011e28f05fa250cca09e9e9ad0a040eb1cee11a422f639af1b89f57db0ccb_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65c75f18ea13ae1e7d18787cc9247a33a4d18464d4eac16b619e8cf6b44e2909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c75f18ea13ae1e7d18787cc9247a33a4d18464d4eac16b619e8cf6b44e2909->enter($__internal_65c75f18ea13ae1e7d18787cc9247a33a4d18464d4eac16b619e8cf6b44e2909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd3dad690dde7b910913e950527d89155f67e9358f2418bd03faf8ee6b48f90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3dad690dde7b910913e950527d89155f67e9358f2418bd03faf8ee6b48f90b->enter($__internal_bd3dad690dde7b910913e950527d89155f67e9358f2418bd03faf8ee6b48f90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_bd3dad690dde7b910913e950527d89155f67e9358f2418bd03faf8ee6b48f90b->leave($__internal_bd3dad690dde7b910913e950527d89155f67e9358f2418bd03faf8ee6b48f90b_prof);

        
        $__internal_65c75f18ea13ae1e7d18787cc9247a33a4d18464d4eac16b619e8cf6b44e2909->leave($__internal_65c75f18ea13ae1e7d18787cc9247a33a4d18464d4eac16b619e8cf6b44e2909_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 15,  121 => 14,  104 => 13,  93 => 8,  84 => 7,  66 => 6,  54 => 19,  51 => 14,  49 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app/Resources\\views/base.html.twig");
    }
}
