<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b250c77af9079a71e8132d3eede198ef8e854a466bda8ddb7ce234c2f415e8e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b49bec635930ad34a72f183a28268d8fc2348579d2cf28f6baf5efbd83f7225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b49bec635930ad34a72f183a28268d8fc2348579d2cf28f6baf5efbd83f7225->enter($__internal_5b49bec635930ad34a72f183a28268d8fc2348579d2cf28f6baf5efbd83f7225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f796f2b068fde6a30188960d02d45f99b48911dd4f582e5734c979445ba8e549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f796f2b068fde6a30188960d02d45f99b48911dd4f582e5734c979445ba8e549->enter($__internal_f796f2b068fde6a30188960d02d45f99b48911dd4f582e5734c979445ba8e549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5b49bec635930ad34a72f183a28268d8fc2348579d2cf28f6baf5efbd83f7225->leave($__internal_5b49bec635930ad34a72f183a28268d8fc2348579d2cf28f6baf5efbd83f7225_prof);

        
        $__internal_f796f2b068fde6a30188960d02d45f99b48911dd4f582e5734c979445ba8e549->leave($__internal_f796f2b068fde6a30188960d02d45f99b48911dd4f582e5734c979445ba8e549_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c3b97efeffd99aaa1277b24faa9562442babd2ab6608c4dd60d7e8289e88f857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b97efeffd99aaa1277b24faa9562442babd2ab6608c4dd60d7e8289e88f857->enter($__internal_c3b97efeffd99aaa1277b24faa9562442babd2ab6608c4dd60d7e8289e88f857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4f48b78f8f16f9152e9f6e1a3ac9fc8572a677c1188638a48a3f52a7ec31beec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f48b78f8f16f9152e9f6e1a3ac9fc8572a677c1188638a48a3f52a7ec31beec->enter($__internal_4f48b78f8f16f9152e9f6e1a3ac9fc8572a677c1188638a48a3f52a7ec31beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4f48b78f8f16f9152e9f6e1a3ac9fc8572a677c1188638a48a3f52a7ec31beec->leave($__internal_4f48b78f8f16f9152e9f6e1a3ac9fc8572a677c1188638a48a3f52a7ec31beec_prof);

        
        $__internal_c3b97efeffd99aaa1277b24faa9562442babd2ab6608c4dd60d7e8289e88f857->leave($__internal_c3b97efeffd99aaa1277b24faa9562442babd2ab6608c4dd60d7e8289e88f857_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_58a19cf8e735037d000baf01cb78e5df8b6f1fd58646f3b1cff212b90c02980d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a19cf8e735037d000baf01cb78e5df8b6f1fd58646f3b1cff212b90c02980d->enter($__internal_58a19cf8e735037d000baf01cb78e5df8b6f1fd58646f3b1cff212b90c02980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2de72ebbe00ddadb15edfb3f01c4f34d7e88f01040afeb021f0c0f6ab39edd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de72ebbe00ddadb15edfb3f01c4f34d7e88f01040afeb021f0c0f6ab39edd07->enter($__internal_2de72ebbe00ddadb15edfb3f01c4f34d7e88f01040afeb021f0c0f6ab39edd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2de72ebbe00ddadb15edfb3f01c4f34d7e88f01040afeb021f0c0f6ab39edd07->leave($__internal_2de72ebbe00ddadb15edfb3f01c4f34d7e88f01040afeb021f0c0f6ab39edd07_prof);

        
        $__internal_58a19cf8e735037d000baf01cb78e5df8b6f1fd58646f3b1cff212b90c02980d->leave($__internal_58a19cf8e735037d000baf01cb78e5df8b6f1fd58646f3b1cff212b90c02980d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ca93ed4f28be8248b9a96d6e072b11e0ba12a6d64b45f2bd63605c7164023f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca93ed4f28be8248b9a96d6e072b11e0ba12a6d64b45f2bd63605c7164023f86->enter($__internal_ca93ed4f28be8248b9a96d6e072b11e0ba12a6d64b45f2bd63605c7164023f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b5c84c44d37d74b7d261ab11805391db948c3279a8bf34e0c61b7d6695d087d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c84c44d37d74b7d261ab11805391db948c3279a8bf34e0c61b7d6695d087d7->enter($__internal_b5c84c44d37d74b7d261ab11805391db948c3279a8bf34e0c61b7d6695d087d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b5c84c44d37d74b7d261ab11805391db948c3279a8bf34e0c61b7d6695d087d7->leave($__internal_b5c84c44d37d74b7d261ab11805391db948c3279a8bf34e0c61b7d6695d087d7_prof);

        
        $__internal_ca93ed4f28be8248b9a96d6e072b11e0ba12a6d64b45f2bd63605c7164023f86->leave($__internal_ca93ed4f28be8248b9a96d6e072b11e0ba12a6d64b45f2bd63605c7164023f86_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9be823647f07333cfaebbfed7d6a8d89b09ee2446339107ad649dec0bbc0a31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be823647f07333cfaebbfed7d6a8d89b09ee2446339107ad649dec0bbc0a31e->enter($__internal_9be823647f07333cfaebbfed7d6a8d89b09ee2446339107ad649dec0bbc0a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_69adaff8909e692f8f7db0265b7fc990fcf9d503b573985f678866e24a6f396c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69adaff8909e692f8f7db0265b7fc990fcf9d503b573985f678866e24a6f396c->enter($__internal_69adaff8909e692f8f7db0265b7fc990fcf9d503b573985f678866e24a6f396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_60f6a02fec2a21e3708c1a8c3bf7b05b9e0857f7d31c147b0f33336434850f41 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d5b1ba7c3fd576e67a07bf121cda1ac19e5e09a1cd79b9631ab646339d79243f = "{{") && ('' === $__internal_d5b1ba7c3fd576e67a07bf121cda1ac19e5e09a1cd79b9631ab646339d79243f || 0 === strpos($__internal_60f6a02fec2a21e3708c1a8c3bf7b05b9e0857f7d31c147b0f33336434850f41, $__internal_d5b1ba7c3fd576e67a07bf121cda1ac19e5e09a1cd79b9631ab646339d79243f)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_c1c4e7060b8dba9feab906d02be8ba48dffb35365da07c6e133c13e0e508ba68 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d5d118521c8b2f1f6bf155be777f2e6b9afca206e2b57c2e8e8d955f5d304603 = "}}") && ('' === $__internal_d5d118521c8b2f1f6bf155be777f2e6b9afca206e2b57c2e8e8d955f5d304603 || $__internal_d5d118521c8b2f1f6bf155be777f2e6b9afca206e2b57c2e8e8d955f5d304603 === substr($__internal_c1c4e7060b8dba9feab906d02be8ba48dffb35365da07c6e133c13e0e508ba68, -strlen($__internal_d5d118521c8b2f1f6bf155be777f2e6b9afca206e2b57c2e8e8d955f5d304603))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_69adaff8909e692f8f7db0265b7fc990fcf9d503b573985f678866e24a6f396c->leave($__internal_69adaff8909e692f8f7db0265b7fc990fcf9d503b573985f678866e24a6f396c_prof);

        
        $__internal_9be823647f07333cfaebbfed7d6a8d89b09ee2446339107ad649dec0bbc0a31e->leave($__internal_9be823647f07333cfaebbfed7d6a8d89b09ee2446339107ad649dec0bbc0a31e_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_db2cb9189f52b5243b439f79fa6ba4a889fc82807669728604551eed61b78ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2cb9189f52b5243b439f79fa6ba4a889fc82807669728604551eed61b78ef7->enter($__internal_db2cb9189f52b5243b439f79fa6ba4a889fc82807669728604551eed61b78ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e89e8ad6e9545c847f335550ace8ce2b5a892792087a6951e7d6e2bc463e4edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89e8ad6e9545c847f335550ace8ce2b5a892792087a6951e7d6e2bc463e4edb->enter($__internal_e89e8ad6e9545c847f335550ace8ce2b5a892792087a6951e7d6e2bc463e4edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e89e8ad6e9545c847f335550ace8ce2b5a892792087a6951e7d6e2bc463e4edb->leave($__internal_e89e8ad6e9545c847f335550ace8ce2b5a892792087a6951e7d6e2bc463e4edb_prof);

        
        $__internal_db2cb9189f52b5243b439f79fa6ba4a889fc82807669728604551eed61b78ef7->leave($__internal_db2cb9189f52b5243b439f79fa6ba4a889fc82807669728604551eed61b78ef7_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_85884cdaac23a546a2f9153bc8e6da4e54c02c00f609dd5ed45cdc828faf00a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85884cdaac23a546a2f9153bc8e6da4e54c02c00f609dd5ed45cdc828faf00a1->enter($__internal_85884cdaac23a546a2f9153bc8e6da4e54c02c00f609dd5ed45cdc828faf00a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_de895d5a71735a03b4eb51a0d62a123a18716c65f146a825a620293f1db44714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de895d5a71735a03b4eb51a0d62a123a18716c65f146a825a620293f1db44714->enter($__internal_de895d5a71735a03b4eb51a0d62a123a18716c65f146a825a620293f1db44714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_de895d5a71735a03b4eb51a0d62a123a18716c65f146a825a620293f1db44714->leave($__internal_de895d5a71735a03b4eb51a0d62a123a18716c65f146a825a620293f1db44714_prof);

        
        $__internal_85884cdaac23a546a2f9153bc8e6da4e54c02c00f609dd5ed45cdc828faf00a1->leave($__internal_85884cdaac23a546a2f9153bc8e6da4e54c02c00f609dd5ed45cdc828faf00a1_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bfd47280886bb7aeaea64c86baa6d0fb8598a0c12f8ab52d6e1404ce2cbc8879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd47280886bb7aeaea64c86baa6d0fb8598a0c12f8ab52d6e1404ce2cbc8879->enter($__internal_bfd47280886bb7aeaea64c86baa6d0fb8598a0c12f8ab52d6e1404ce2cbc8879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4ab8bffaf104044c79e05a5af466a92f5e40ed9e1b73bdd98e34164206cd9808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab8bffaf104044c79e05a5af466a92f5e40ed9e1b73bdd98e34164206cd9808->enter($__internal_4ab8bffaf104044c79e05a5af466a92f5e40ed9e1b73bdd98e34164206cd9808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_4ab8bffaf104044c79e05a5af466a92f5e40ed9e1b73bdd98e34164206cd9808->leave($__internal_4ab8bffaf104044c79e05a5af466a92f5e40ed9e1b73bdd98e34164206cd9808_prof);

        
        $__internal_bfd47280886bb7aeaea64c86baa6d0fb8598a0c12f8ab52d6e1404ce2cbc8879->leave($__internal_bfd47280886bb7aeaea64c86baa6d0fb8598a0c12f8ab52d6e1404ce2cbc8879_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_df6016a535fe0a437cf3415a3a8de31fa4c5bfa1b8b3ffd4c7854ecaf8d42923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6016a535fe0a437cf3415a3a8de31fa4c5bfa1b8b3ffd4c7854ecaf8d42923->enter($__internal_df6016a535fe0a437cf3415a3a8de31fa4c5bfa1b8b3ffd4c7854ecaf8d42923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_21406c1c8c97f523dcbc657891e42f8b14e7a9fe75fd2896f72dc15267b80352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21406c1c8c97f523dcbc657891e42f8b14e7a9fe75fd2896f72dc15267b80352->enter($__internal_21406c1c8c97f523dcbc657891e42f8b14e7a9fe75fd2896f72dc15267b80352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_21406c1c8c97f523dcbc657891e42f8b14e7a9fe75fd2896f72dc15267b80352->leave($__internal_21406c1c8c97f523dcbc657891e42f8b14e7a9fe75fd2896f72dc15267b80352_prof);

        
        $__internal_df6016a535fe0a437cf3415a3a8de31fa4c5bfa1b8b3ffd4c7854ecaf8d42923->leave($__internal_df6016a535fe0a437cf3415a3a8de31fa4c5bfa1b8b3ffd4c7854ecaf8d42923_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7f623f96c84603593cc7d2b08e5c4843745cc9e778232447f69ae0854664dff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f623f96c84603593cc7d2b08e5c4843745cc9e778232447f69ae0854664dff4->enter($__internal_7f623f96c84603593cc7d2b08e5c4843745cc9e778232447f69ae0854664dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_180685a55d4a31bd488147a9ce0126c82fa9f406e5ae5e6781b85d383b9829ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180685a55d4a31bd488147a9ce0126c82fa9f406e5ae5e6781b85d383b9829ec->enter($__internal_180685a55d4a31bd488147a9ce0126c82fa9f406e5ae5e6781b85d383b9829ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_180685a55d4a31bd488147a9ce0126c82fa9f406e5ae5e6781b85d383b9829ec->leave($__internal_180685a55d4a31bd488147a9ce0126c82fa9f406e5ae5e6781b85d383b9829ec_prof);

        
        $__internal_7f623f96c84603593cc7d2b08e5c4843745cc9e778232447f69ae0854664dff4->leave($__internal_7f623f96c84603593cc7d2b08e5c4843745cc9e778232447f69ae0854664dff4_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8c7467d180a31c886b94aca52c347c09ec65380be2bf3088a6465d2d3ccfc625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7467d180a31c886b94aca52c347c09ec65380be2bf3088a6465d2d3ccfc625->enter($__internal_8c7467d180a31c886b94aca52c347c09ec65380be2bf3088a6465d2d3ccfc625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_76b61893984b595d18af25c7b30afcedb0604f4ff49caffb2d414138f349bf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b61893984b595d18af25c7b30afcedb0604f4ff49caffb2d414138f349bf5c->enter($__internal_76b61893984b595d18af25c7b30afcedb0604f4ff49caffb2d414138f349bf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_76b61893984b595d18af25c7b30afcedb0604f4ff49caffb2d414138f349bf5c->leave($__internal_76b61893984b595d18af25c7b30afcedb0604f4ff49caffb2d414138f349bf5c_prof);

        
        $__internal_8c7467d180a31c886b94aca52c347c09ec65380be2bf3088a6465d2d3ccfc625->leave($__internal_8c7467d180a31c886b94aca52c347c09ec65380be2bf3088a6465d2d3ccfc625_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b2724fa41adf285777965e0da98338bd006a3ab196c12d34906afa6e530b40a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2724fa41adf285777965e0da98338bd006a3ab196c12d34906afa6e530b40a7->enter($__internal_b2724fa41adf285777965e0da98338bd006a3ab196c12d34906afa6e530b40a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_354167be1b5f6ff170bacf69c4de5ca11e0697e3e8fa5aab7ffd688d9153e99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354167be1b5f6ff170bacf69c4de5ca11e0697e3e8fa5aab7ffd688d9153e99f->enter($__internal_354167be1b5f6ff170bacf69c4de5ca11e0697e3e8fa5aab7ffd688d9153e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_354167be1b5f6ff170bacf69c4de5ca11e0697e3e8fa5aab7ffd688d9153e99f->leave($__internal_354167be1b5f6ff170bacf69c4de5ca11e0697e3e8fa5aab7ffd688d9153e99f_prof);

        
        $__internal_b2724fa41adf285777965e0da98338bd006a3ab196c12d34906afa6e530b40a7->leave($__internal_b2724fa41adf285777965e0da98338bd006a3ab196c12d34906afa6e530b40a7_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5c48d69fcf74d1e25023cb2d3755c46035c310f3f112720589213b7549653a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c48d69fcf74d1e25023cb2d3755c46035c310f3f112720589213b7549653a5c->enter($__internal_5c48d69fcf74d1e25023cb2d3755c46035c310f3f112720589213b7549653a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cc344b26db34e30521db5b72b567aaa164b143ef43645699e7d5fb1b23c59bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc344b26db34e30521db5b72b567aaa164b143ef43645699e7d5fb1b23c59bdb->enter($__internal_cc344b26db34e30521db5b72b567aaa164b143ef43645699e7d5fb1b23c59bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_cc344b26db34e30521db5b72b567aaa164b143ef43645699e7d5fb1b23c59bdb->leave($__internal_cc344b26db34e30521db5b72b567aaa164b143ef43645699e7d5fb1b23c59bdb_prof);

        
        $__internal_5c48d69fcf74d1e25023cb2d3755c46035c310f3f112720589213b7549653a5c->leave($__internal_5c48d69fcf74d1e25023cb2d3755c46035c310f3f112720589213b7549653a5c_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_31926d0e776c8130b9856eccf2c786f4e6d2c17bdca91a68f0af2cdd357dd1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31926d0e776c8130b9856eccf2c786f4e6d2c17bdca91a68f0af2cdd357dd1ac->enter($__internal_31926d0e776c8130b9856eccf2c786f4e6d2c17bdca91a68f0af2cdd357dd1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_30fc9442c3fae200d02305859dad66869529381cb401ffa60a87ab4ea2b4e8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fc9442c3fae200d02305859dad66869529381cb401ffa60a87ab4ea2b4e8ee->enter($__internal_30fc9442c3fae200d02305859dad66869529381cb401ffa60a87ab4ea2b4e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_30fc9442c3fae200d02305859dad66869529381cb401ffa60a87ab4ea2b4e8ee->leave($__internal_30fc9442c3fae200d02305859dad66869529381cb401ffa60a87ab4ea2b4e8ee_prof);

        
        $__internal_31926d0e776c8130b9856eccf2c786f4e6d2c17bdca91a68f0af2cdd357dd1ac->leave($__internal_31926d0e776c8130b9856eccf2c786f4e6d2c17bdca91a68f0af2cdd357dd1ac_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_680b41263a8af999bc25306a4395e21d83e6a8de0c0e62017e80acc4bff4efbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680b41263a8af999bc25306a4395e21d83e6a8de0c0e62017e80acc4bff4efbb->enter($__internal_680b41263a8af999bc25306a4395e21d83e6a8de0c0e62017e80acc4bff4efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f6be3af36f4bf9937391a6d0a24595dbbc375a8f82596af6c60e7dc211e9b9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6be3af36f4bf9937391a6d0a24595dbbc375a8f82596af6c60e7dc211e9b9ae->enter($__internal_f6be3af36f4bf9937391a6d0a24595dbbc375a8f82596af6c60e7dc211e9b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f6be3af36f4bf9937391a6d0a24595dbbc375a8f82596af6c60e7dc211e9b9ae->leave($__internal_f6be3af36f4bf9937391a6d0a24595dbbc375a8f82596af6c60e7dc211e9b9ae_prof);

        
        $__internal_680b41263a8af999bc25306a4395e21d83e6a8de0c0e62017e80acc4bff4efbb->leave($__internal_680b41263a8af999bc25306a4395e21d83e6a8de0c0e62017e80acc4bff4efbb_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ee6ef8cf05687171c47c60fb7ec504d47bd1e1aa0e3211da364cbc0da429688d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6ef8cf05687171c47c60fb7ec504d47bd1e1aa0e3211da364cbc0da429688d->enter($__internal_ee6ef8cf05687171c47c60fb7ec504d47bd1e1aa0e3211da364cbc0da429688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e8d8f18e20937ba898faa2d6469784a0e7bfbf354ec78d7ba003f483bec252ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d8f18e20937ba898faa2d6469784a0e7bfbf354ec78d7ba003f483bec252ca->enter($__internal_e8d8f18e20937ba898faa2d6469784a0e7bfbf354ec78d7ba003f483bec252ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e8d8f18e20937ba898faa2d6469784a0e7bfbf354ec78d7ba003f483bec252ca->leave($__internal_e8d8f18e20937ba898faa2d6469784a0e7bfbf354ec78d7ba003f483bec252ca_prof);

        
        $__internal_ee6ef8cf05687171c47c60fb7ec504d47bd1e1aa0e3211da364cbc0da429688d->leave($__internal_ee6ef8cf05687171c47c60fb7ec504d47bd1e1aa0e3211da364cbc0da429688d_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_56cc300a308eaae40485ba93efd9817c9973b30e700b33e3811055a83f5744f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cc300a308eaae40485ba93efd9817c9973b30e700b33e3811055a83f5744f9->enter($__internal_56cc300a308eaae40485ba93efd9817c9973b30e700b33e3811055a83f5744f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_82a038ea8d126e82a9278d376f14bc690898ab9d07493cab0b4799b6d30a573c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a038ea8d126e82a9278d376f14bc690898ab9d07493cab0b4799b6d30a573c->enter($__internal_82a038ea8d126e82a9278d376f14bc690898ab9d07493cab0b4799b6d30a573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_82a038ea8d126e82a9278d376f14bc690898ab9d07493cab0b4799b6d30a573c->leave($__internal_82a038ea8d126e82a9278d376f14bc690898ab9d07493cab0b4799b6d30a573c_prof);

        
        $__internal_56cc300a308eaae40485ba93efd9817c9973b30e700b33e3811055a83f5744f9->leave($__internal_56cc300a308eaae40485ba93efd9817c9973b30e700b33e3811055a83f5744f9_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3d4e8538490c87b1f6144c544b60a1650e74e713e9c0ef122cd97777bb4eb19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4e8538490c87b1f6144c544b60a1650e74e713e9c0ef122cd97777bb4eb19d->enter($__internal_3d4e8538490c87b1f6144c544b60a1650e74e713e9c0ef122cd97777bb4eb19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7a2cc0172ff68a393460222f42068861d7569847f6131c2bfacdd547081527cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2cc0172ff68a393460222f42068861d7569847f6131c2bfacdd547081527cb->enter($__internal_7a2cc0172ff68a393460222f42068861d7569847f6131c2bfacdd547081527cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7a2cc0172ff68a393460222f42068861d7569847f6131c2bfacdd547081527cb->leave($__internal_7a2cc0172ff68a393460222f42068861d7569847f6131c2bfacdd547081527cb_prof);

        
        $__internal_3d4e8538490c87b1f6144c544b60a1650e74e713e9c0ef122cd97777bb4eb19d->leave($__internal_3d4e8538490c87b1f6144c544b60a1650e74e713e9c0ef122cd97777bb4eb19d_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6ddb814b5f4436f33563d423e2d3d61cb0f28ab07a0410b15bdc2040bcb21a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddb814b5f4436f33563d423e2d3d61cb0f28ab07a0410b15bdc2040bcb21a54->enter($__internal_6ddb814b5f4436f33563d423e2d3d61cb0f28ab07a0410b15bdc2040bcb21a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3a81d6d1ea6f366e9870b3afef5fbe47e68ad62de25562e1e53f9a7dfa9b835d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a81d6d1ea6f366e9870b3afef5fbe47e68ad62de25562e1e53f9a7dfa9b835d->enter($__internal_3a81d6d1ea6f366e9870b3afef5fbe47e68ad62de25562e1e53f9a7dfa9b835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_3a81d6d1ea6f366e9870b3afef5fbe47e68ad62de25562e1e53f9a7dfa9b835d->leave($__internal_3a81d6d1ea6f366e9870b3afef5fbe47e68ad62de25562e1e53f9a7dfa9b835d_prof);

        
        $__internal_6ddb814b5f4436f33563d423e2d3d61cb0f28ab07a0410b15bdc2040bcb21a54->leave($__internal_6ddb814b5f4436f33563d423e2d3d61cb0f28ab07a0410b15bdc2040bcb21a54_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_98b14a21574d95dd2839023ea9902acd3fe3b0969344fa93f0d7eb0f56d3ef8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b14a21574d95dd2839023ea9902acd3fe3b0969344fa93f0d7eb0f56d3ef8c->enter($__internal_98b14a21574d95dd2839023ea9902acd3fe3b0969344fa93f0d7eb0f56d3ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_74c39e0d2e4ae007c8f9d5959a4fc294b6eb1526920827fe8d6012b6b04b74a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c39e0d2e4ae007c8f9d5959a4fc294b6eb1526920827fe8d6012b6b04b74a1->enter($__internal_74c39e0d2e4ae007c8f9d5959a4fc294b6eb1526920827fe8d6012b6b04b74a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_74c39e0d2e4ae007c8f9d5959a4fc294b6eb1526920827fe8d6012b6b04b74a1->leave($__internal_74c39e0d2e4ae007c8f9d5959a4fc294b6eb1526920827fe8d6012b6b04b74a1_prof);

        
        $__internal_98b14a21574d95dd2839023ea9902acd3fe3b0969344fa93f0d7eb0f56d3ef8c->leave($__internal_98b14a21574d95dd2839023ea9902acd3fe3b0969344fa93f0d7eb0f56d3ef8c_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_449433a32ac9057d6d8acd63ba8a9445a619389c0382095010d3e317c35dac56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449433a32ac9057d6d8acd63ba8a9445a619389c0382095010d3e317c35dac56->enter($__internal_449433a32ac9057d6d8acd63ba8a9445a619389c0382095010d3e317c35dac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_413f49da8ab1e348ea189d73a88058bd733155b3477eea6901e1c2e63b866ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413f49da8ab1e348ea189d73a88058bd733155b3477eea6901e1c2e63b866ec4->enter($__internal_413f49da8ab1e348ea189d73a88058bd733155b3477eea6901e1c2e63b866ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_413f49da8ab1e348ea189d73a88058bd733155b3477eea6901e1c2e63b866ec4->leave($__internal_413f49da8ab1e348ea189d73a88058bd733155b3477eea6901e1c2e63b866ec4_prof);

        
        $__internal_449433a32ac9057d6d8acd63ba8a9445a619389c0382095010d3e317c35dac56->leave($__internal_449433a32ac9057d6d8acd63ba8a9445a619389c0382095010d3e317c35dac56_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0d1e23b58df56da0b07d4bf2429e6ab652431e685334a8f0e71c186e7b227bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1e23b58df56da0b07d4bf2429e6ab652431e685334a8f0e71c186e7b227bb9->enter($__internal_0d1e23b58df56da0b07d4bf2429e6ab652431e685334a8f0e71c186e7b227bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e12f8c9a0c278f322828359682f1cdd2ea4c75433a6c9df95994f4bc488ce114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12f8c9a0c278f322828359682f1cdd2ea4c75433a6c9df95994f4bc488ce114->enter($__internal_e12f8c9a0c278f322828359682f1cdd2ea4c75433a6c9df95994f4bc488ce114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e12f8c9a0c278f322828359682f1cdd2ea4c75433a6c9df95994f4bc488ce114->leave($__internal_e12f8c9a0c278f322828359682f1cdd2ea4c75433a6c9df95994f4bc488ce114_prof);

        
        $__internal_0d1e23b58df56da0b07d4bf2429e6ab652431e685334a8f0e71c186e7b227bb9->leave($__internal_0d1e23b58df56da0b07d4bf2429e6ab652431e685334a8f0e71c186e7b227bb9_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f7d189d7f2f6288ce1a7a9d608f6e910f0f03e5a53acbce07e346aed26fc6bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d189d7f2f6288ce1a7a9d608f6e910f0f03e5a53acbce07e346aed26fc6bb9->enter($__internal_f7d189d7f2f6288ce1a7a9d608f6e910f0f03e5a53acbce07e346aed26fc6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b880363558551f6502f482f80cff65cce8675b9f2a5d7a3d9091c5e1eb6221aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b880363558551f6502f482f80cff65cce8675b9f2a5d7a3d9091c5e1eb6221aa->enter($__internal_b880363558551f6502f482f80cff65cce8675b9f2a5d7a3d9091c5e1eb6221aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b880363558551f6502f482f80cff65cce8675b9f2a5d7a3d9091c5e1eb6221aa->leave($__internal_b880363558551f6502f482f80cff65cce8675b9f2a5d7a3d9091c5e1eb6221aa_prof);

        
        $__internal_f7d189d7f2f6288ce1a7a9d608f6e910f0f03e5a53acbce07e346aed26fc6bb9->leave($__internal_f7d189d7f2f6288ce1a7a9d608f6e910f0f03e5a53acbce07e346aed26fc6bb9_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f4d1099fdcfa0c5768c6425fe597e3d933b24713715091665c2aa6f0587c605b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d1099fdcfa0c5768c6425fe597e3d933b24713715091665c2aa6f0587c605b->enter($__internal_f4d1099fdcfa0c5768c6425fe597e3d933b24713715091665c2aa6f0587c605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_53ac6c342d286deaa9ce895a1e7c2e6fc3962c8c13882b1c6fbddd118b77ee1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ac6c342d286deaa9ce895a1e7c2e6fc3962c8c13882b1c6fbddd118b77ee1a->enter($__internal_53ac6c342d286deaa9ce895a1e7c2e6fc3962c8c13882b1c6fbddd118b77ee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_53ac6c342d286deaa9ce895a1e7c2e6fc3962c8c13882b1c6fbddd118b77ee1a->leave($__internal_53ac6c342d286deaa9ce895a1e7c2e6fc3962c8c13882b1c6fbddd118b77ee1a_prof);

        
        $__internal_f4d1099fdcfa0c5768c6425fe597e3d933b24713715091665c2aa6f0587c605b->leave($__internal_f4d1099fdcfa0c5768c6425fe597e3d933b24713715091665c2aa6f0587c605b_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_44cfaa812061a996f490ad71e3b353c5811a0c19c84d7eb3896f04f23fc192c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cfaa812061a996f490ad71e3b353c5811a0c19c84d7eb3896f04f23fc192c6->enter($__internal_44cfaa812061a996f490ad71e3b353c5811a0c19c84d7eb3896f04f23fc192c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a5efb59bbaa3571e82a71b30784287d0416070f2c0d427ff67d3e7a599757fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5efb59bbaa3571e82a71b30784287d0416070f2c0d427ff67d3e7a599757fd9->enter($__internal_a5efb59bbaa3571e82a71b30784287d0416070f2c0d427ff67d3e7a599757fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a5efb59bbaa3571e82a71b30784287d0416070f2c0d427ff67d3e7a599757fd9->leave($__internal_a5efb59bbaa3571e82a71b30784287d0416070f2c0d427ff67d3e7a599757fd9_prof);

        
        $__internal_44cfaa812061a996f490ad71e3b353c5811a0c19c84d7eb3896f04f23fc192c6->leave($__internal_44cfaa812061a996f490ad71e3b353c5811a0c19c84d7eb3896f04f23fc192c6_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b581bb96fd865a0d46a9d5776b19644d48b75ab6aa0f50b55136ec8ea75175c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b581bb96fd865a0d46a9d5776b19644d48b75ab6aa0f50b55136ec8ea75175c8->enter($__internal_b581bb96fd865a0d46a9d5776b19644d48b75ab6aa0f50b55136ec8ea75175c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_331d2da9113f2029e03d19b27b198b4bfafb8b7f03477a629830dd105047db56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331d2da9113f2029e03d19b27b198b4bfafb8b7f03477a629830dd105047db56->enter($__internal_331d2da9113f2029e03d19b27b198b4bfafb8b7f03477a629830dd105047db56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_331d2da9113f2029e03d19b27b198b4bfafb8b7f03477a629830dd105047db56->leave($__internal_331d2da9113f2029e03d19b27b198b4bfafb8b7f03477a629830dd105047db56_prof);

        
        $__internal_b581bb96fd865a0d46a9d5776b19644d48b75ab6aa0f50b55136ec8ea75175c8->leave($__internal_b581bb96fd865a0d46a9d5776b19644d48b75ab6aa0f50b55136ec8ea75175c8_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bc1482e8daa1b2dd63bc80553c4e77ebe7ec3b73e1df51efcc25e0c0e0b87dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1482e8daa1b2dd63bc80553c4e77ebe7ec3b73e1df51efcc25e0c0e0b87dea->enter($__internal_bc1482e8daa1b2dd63bc80553c4e77ebe7ec3b73e1df51efcc25e0c0e0b87dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ca03e50fbf8fdc691fbd507a2868b14b5180f0754d1de91a67b93c14f9c072cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca03e50fbf8fdc691fbd507a2868b14b5180f0754d1de91a67b93c14f9c072cc->enter($__internal_ca03e50fbf8fdc691fbd507a2868b14b5180f0754d1de91a67b93c14f9c072cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_ca03e50fbf8fdc691fbd507a2868b14b5180f0754d1de91a67b93c14f9c072cc->leave($__internal_ca03e50fbf8fdc691fbd507a2868b14b5180f0754d1de91a67b93c14f9c072cc_prof);

        
        $__internal_bc1482e8daa1b2dd63bc80553c4e77ebe7ec3b73e1df51efcc25e0c0e0b87dea->leave($__internal_bc1482e8daa1b2dd63bc80553c4e77ebe7ec3b73e1df51efcc25e0c0e0b87dea_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_94725d7fc63caa65e9a57c231f7dc0c625c072548d2f1a31c84e6c970c65d59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94725d7fc63caa65e9a57c231f7dc0c625c072548d2f1a31c84e6c970c65d59f->enter($__internal_94725d7fc63caa65e9a57c231f7dc0c625c072548d2f1a31c84e6c970c65d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6ef48dc05497617a0d95562821c00479a8de78f903417ca5147a2a010b2d9710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef48dc05497617a0d95562821c00479a8de78f903417ca5147a2a010b2d9710->enter($__internal_6ef48dc05497617a0d95562821c00479a8de78f903417ca5147a2a010b2d9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6ef48dc05497617a0d95562821c00479a8de78f903417ca5147a2a010b2d9710->leave($__internal_6ef48dc05497617a0d95562821c00479a8de78f903417ca5147a2a010b2d9710_prof);

        
        $__internal_94725d7fc63caa65e9a57c231f7dc0c625c072548d2f1a31c84e6c970c65d59f->leave($__internal_94725d7fc63caa65e9a57c231f7dc0c625c072548d2f1a31c84e6c970c65d59f_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
