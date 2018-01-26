<?php

/* form_table_layout.html.twig */
class __TwigTemplate_d0903393a096dd1b95f492d33aaed463c01713af68b37ed91e3ed120292c3f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed9543d6ce59d2e40302471202ae50eb13b4d24e2ea3309899d1424026e8ab5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9543d6ce59d2e40302471202ae50eb13b4d24e2ea3309899d1424026e8ab5e->enter($__internal_ed9543d6ce59d2e40302471202ae50eb13b4d24e2ea3309899d1424026e8ab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_10751b80645cdcca0b1a8fed1edabff5ceb15590f89376796f750558ab66efd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10751b80645cdcca0b1a8fed1edabff5ceb15590f89376796f750558ab66efd5->enter($__internal_10751b80645cdcca0b1a8fed1edabff5ceb15590f89376796f750558ab66efd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_ed9543d6ce59d2e40302471202ae50eb13b4d24e2ea3309899d1424026e8ab5e->leave($__internal_ed9543d6ce59d2e40302471202ae50eb13b4d24e2ea3309899d1424026e8ab5e_prof);

        
        $__internal_10751b80645cdcca0b1a8fed1edabff5ceb15590f89376796f750558ab66efd5->leave($__internal_10751b80645cdcca0b1a8fed1edabff5ceb15590f89376796f750558ab66efd5_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed9f09cb0c8781f69583fd0bad13616fd9b01a44d9aaebf5df3bc760ed6d8ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9f09cb0c8781f69583fd0bad13616fd9b01a44d9aaebf5df3bc760ed6d8ed4->enter($__internal_ed9f09cb0c8781f69583fd0bad13616fd9b01a44d9aaebf5df3bc760ed6d8ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_09b117a714a4688dd9484de13af0044db33c231744f2bbdcc9bd49d53ba2ca61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b117a714a4688dd9484de13af0044db33c231744f2bbdcc9bd49d53ba2ca61->enter($__internal_09b117a714a4688dd9484de13af0044db33c231744f2bbdcc9bd49d53ba2ca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_09b117a714a4688dd9484de13af0044db33c231744f2bbdcc9bd49d53ba2ca61->leave($__internal_09b117a714a4688dd9484de13af0044db33c231744f2bbdcc9bd49d53ba2ca61_prof);

        
        $__internal_ed9f09cb0c8781f69583fd0bad13616fd9b01a44d9aaebf5df3bc760ed6d8ed4->leave($__internal_ed9f09cb0c8781f69583fd0bad13616fd9b01a44d9aaebf5df3bc760ed6d8ed4_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f2bd191394d8f5098918ce091037f0546826cd2faa04de6a1560dd2e953d8cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bd191394d8f5098918ce091037f0546826cd2faa04de6a1560dd2e953d8cd5->enter($__internal_f2bd191394d8f5098918ce091037f0546826cd2faa04de6a1560dd2e953d8cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_51bc0d7bd6580168a3aef27510f4ce15d23707d166a8dca42ba3352b8bd94dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bc0d7bd6580168a3aef27510f4ce15d23707d166a8dca42ba3352b8bd94dd3->enter($__internal_51bc0d7bd6580168a3aef27510f4ce15d23707d166a8dca42ba3352b8bd94dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_51bc0d7bd6580168a3aef27510f4ce15d23707d166a8dca42ba3352b8bd94dd3->leave($__internal_51bc0d7bd6580168a3aef27510f4ce15d23707d166a8dca42ba3352b8bd94dd3_prof);

        
        $__internal_f2bd191394d8f5098918ce091037f0546826cd2faa04de6a1560dd2e953d8cd5->leave($__internal_f2bd191394d8f5098918ce091037f0546826cd2faa04de6a1560dd2e953d8cd5_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8aaac92b6cd6d07929fd53e04a945f6df39511ea4d522277e2c75b504511cbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaac92b6cd6d07929fd53e04a945f6df39511ea4d522277e2c75b504511cbc0->enter($__internal_8aaac92b6cd6d07929fd53e04a945f6df39511ea4d522277e2c75b504511cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b15b414cc386e2d7159dfae9927645e4ce2e3e395bac297c9b872601ad0d1a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15b414cc386e2d7159dfae9927645e4ce2e3e395bac297c9b872601ad0d1a2e->enter($__internal_b15b414cc386e2d7159dfae9927645e4ce2e3e395bac297c9b872601ad0d1a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b15b414cc386e2d7159dfae9927645e4ce2e3e395bac297c9b872601ad0d1a2e->leave($__internal_b15b414cc386e2d7159dfae9927645e4ce2e3e395bac297c9b872601ad0d1a2e_prof);

        
        $__internal_8aaac92b6cd6d07929fd53e04a945f6df39511ea4d522277e2c75b504511cbc0->leave($__internal_8aaac92b6cd6d07929fd53e04a945f6df39511ea4d522277e2c75b504511cbc0_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_85b9824beb77316a71df052dbe998554be4a70e378d483ca7af8c9d1914c5b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b9824beb77316a71df052dbe998554be4a70e378d483ca7af8c9d1914c5b50->enter($__internal_85b9824beb77316a71df052dbe998554be4a70e378d483ca7af8c9d1914c5b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8ce246a60d7feaf180e4c6ccb2096d43f0a6e449b9c306283e8eeadbba3df81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce246a60d7feaf180e4c6ccb2096d43f0a6e449b9c306283e8eeadbba3df81b->enter($__internal_8ce246a60d7feaf180e4c6ccb2096d43f0a6e449b9c306283e8eeadbba3df81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_8ce246a60d7feaf180e4c6ccb2096d43f0a6e449b9c306283e8eeadbba3df81b->leave($__internal_8ce246a60d7feaf180e4c6ccb2096d43f0a6e449b9c306283e8eeadbba3df81b_prof);

        
        $__internal_85b9824beb77316a71df052dbe998554be4a70e378d483ca7af8c9d1914c5b50->leave($__internal_85b9824beb77316a71df052dbe998554be4a70e378d483ca7af8c9d1914c5b50_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
