<?php

/* base.html.twig */
class __TwigTemplate_8eb128e1266ac9dd380c08c9f4bc5b6030f0f32aea9d6872e4144cc3e647cdfe extends Twig_Template
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
        $__internal_2ca79751be0bfc4f394a3f74c0fec29ca8e3db9a535b5c57b7585e6937e98f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca79751be0bfc4f394a3f74c0fec29ca8e3db9a535b5c57b7585e6937e98f42->enter($__internal_2ca79751be0bfc4f394a3f74c0fec29ca8e3db9a535b5c57b7585e6937e98f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3c17a7c89fd33fc149ff354381997bb85177bf57449aa8d0b0113f6f979783a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c17a7c89fd33fc149ff354381997bb85177bf57449aa8d0b0113f6f979783a9->enter($__internal_3c17a7c89fd33fc149ff354381997bb85177bf57449aa8d0b0113f6f979783a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ca79751be0bfc4f394a3f74c0fec29ca8e3db9a535b5c57b7585e6937e98f42->leave($__internal_2ca79751be0bfc4f394a3f74c0fec29ca8e3db9a535b5c57b7585e6937e98f42_prof);

        
        $__internal_3c17a7c89fd33fc149ff354381997bb85177bf57449aa8d0b0113f6f979783a9->leave($__internal_3c17a7c89fd33fc149ff354381997bb85177bf57449aa8d0b0113f6f979783a9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_993aa827aae4c9a57c342c262a19fd6f92e5c9dc5e6a57f45271eb427da3ba6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993aa827aae4c9a57c342c262a19fd6f92e5c9dc5e6a57f45271eb427da3ba6e->enter($__internal_993aa827aae4c9a57c342c262a19fd6f92e5c9dc5e6a57f45271eb427da3ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3a2a71cfb35623f377ba9a1aaa8541a8b6a42f7c840d37c18fd7cded5c52df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a2a71cfb35623f377ba9a1aaa8541a8b6a42f7c840d37c18fd7cded5c52df4->enter($__internal_b3a2a71cfb35623f377ba9a1aaa8541a8b6a42f7c840d37c18fd7cded5c52df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3a2a71cfb35623f377ba9a1aaa8541a8b6a42f7c840d37c18fd7cded5c52df4->leave($__internal_b3a2a71cfb35623f377ba9a1aaa8541a8b6a42f7c840d37c18fd7cded5c52df4_prof);

        
        $__internal_993aa827aae4c9a57c342c262a19fd6f92e5c9dc5e6a57f45271eb427da3ba6e->leave($__internal_993aa827aae4c9a57c342c262a19fd6f92e5c9dc5e6a57f45271eb427da3ba6e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c216cc469aace11195c47da93e004474b54747d21628597f65d73f7468bae936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c216cc469aace11195c47da93e004474b54747d21628597f65d73f7468bae936->enter($__internal_c216cc469aace11195c47da93e004474b54747d21628597f65d73f7468bae936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_789abacf7e1022e60a94cd828ad67b3b9efb33d23017f7d14d46c17275ac5739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789abacf7e1022e60a94cd828ad67b3b9efb33d23017f7d14d46c17275ac5739->enter($__internal_789abacf7e1022e60a94cd828ad67b3b9efb33d23017f7d14d46c17275ac5739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        ";
        
        $__internal_789abacf7e1022e60a94cd828ad67b3b9efb33d23017f7d14d46c17275ac5739->leave($__internal_789abacf7e1022e60a94cd828ad67b3b9efb33d23017f7d14d46c17275ac5739_prof);

        
        $__internal_c216cc469aace11195c47da93e004474b54747d21628597f65d73f7468bae936->leave($__internal_c216cc469aace11195c47da93e004474b54747d21628597f65d73f7468bae936_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d416ef4a6466cde683f62905ab83fefb01800ef6b096968c7ea3159617909d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d416ef4a6466cde683f62905ab83fefb01800ef6b096968c7ea3159617909d2->enter($__internal_8d416ef4a6466cde683f62905ab83fefb01800ef6b096968c7ea3159617909d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2cad66e6b7f28708aedb328e3111f33db8e679be76ea29ae094c192b25fbd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cad66e6b7f28708aedb328e3111f33db8e679be76ea29ae094c192b25fbd3a->enter($__internal_c2cad66e6b7f28708aedb328e3111f33db8e679be76ea29ae094c192b25fbd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2cad66e6b7f28708aedb328e3111f33db8e679be76ea29ae094c192b25fbd3a->leave($__internal_c2cad66e6b7f28708aedb328e3111f33db8e679be76ea29ae094c192b25fbd3a_prof);

        
        $__internal_8d416ef4a6466cde683f62905ab83fefb01800ef6b096968c7ea3159617909d2->leave($__internal_8d416ef4a6466cde683f62905ab83fefb01800ef6b096968c7ea3159617909d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a2e4fa6e0b7090083d8f6ea13e7e15c92ffc17849ce51f08206fae8c1c0426d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2e4fa6e0b7090083d8f6ea13e7e15c92ffc17849ce51f08206fae8c1c0426d->enter($__internal_5a2e4fa6e0b7090083d8f6ea13e7e15c92ffc17849ce51f08206fae8c1c0426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_620ad59c46db8f642bc0ca1f29b0af680084fc0a8877694052f47af57bb0a463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620ad59c46db8f642bc0ca1f29b0af680084fc0a8877694052f47af57bb0a463->enter($__internal_620ad59c46db8f642bc0ca1f29b0af680084fc0a8877694052f47af57bb0a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_620ad59c46db8f642bc0ca1f29b0af680084fc0a8877694052f47af57bb0a463->leave($__internal_620ad59c46db8f642bc0ca1f29b0af680084fc0a8877694052f47af57bb0a463_prof);

        
        $__internal_5a2e4fa6e0b7090083d8f6ea13e7e15c92ffc17849ce51f08206fae8c1c0426d->leave($__internal_5a2e4fa6e0b7090083d8f6ea13e7e15c92ffc17849ce51f08206fae8c1c0426d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\app\\Resources\\views\\base.html.twig");
    }
}
