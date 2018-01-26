<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_0100111f239fee85d11b6bd7463503b30d158f2da1a5c3f544bba61d6ba51eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_868dace09c6adb408653f1b1526491c33e4d632d6de4dbf3045c3576ab0a36b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868dace09c6adb408653f1b1526491c33e4d632d6de4dbf3045c3576ab0a36b1->enter($__internal_868dace09c6adb408653f1b1526491c33e4d632d6de4dbf3045c3576ab0a36b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_0059abf8a5d850459f08fc0833928e95ce589cb3ef0471139848d86a3c0e98d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0059abf8a5d850459f08fc0833928e95ce589cb3ef0471139848d86a3c0e98d0->enter($__internal_0059abf8a5d850459f08fc0833928e95ce589cb3ef0471139848d86a3c0e98d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_868dace09c6adb408653f1b1526491c33e4d632d6de4dbf3045c3576ab0a36b1->leave($__internal_868dace09c6adb408653f1b1526491c33e4d632d6de4dbf3045c3576ab0a36b1_prof);

        
        $__internal_0059abf8a5d850459f08fc0833928e95ce589cb3ef0471139848d86a3c0e98d0->leave($__internal_0059abf8a5d850459f08fc0833928e95ce589cb3ef0471139848d86a3c0e98d0_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_020976e95f52664624e93b1dcabf7f0c98fad63fa3145a21cfcd16fac64a594b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020976e95f52664624e93b1dcabf7f0c98fad63fa3145a21cfcd16fac64a594b->enter($__internal_020976e95f52664624e93b1dcabf7f0c98fad63fa3145a21cfcd16fac64a594b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_cfdf6803a0dbdeffd6b5551c289e3b8bc65c8c519e96e2c8b85d277f8414c651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdf6803a0dbdeffd6b5551c289e3b8bc65c8c519e96e2c8b85d277f8414c651->enter($__internal_cfdf6803a0dbdeffd6b5551c289e3b8bc65c8c519e96e2c8b85d277f8414c651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cfdf6803a0dbdeffd6b5551c289e3b8bc65c8c519e96e2c8b85d277f8414c651->leave($__internal_cfdf6803a0dbdeffd6b5551c289e3b8bc65c8c519e96e2c8b85d277f8414c651_prof);

        
        $__internal_020976e95f52664624e93b1dcabf7f0c98fad63fa3145a21cfcd16fac64a594b->leave($__internal_020976e95f52664624e93b1dcabf7f0c98fad63fa3145a21cfcd16fac64a594b_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2c8eabd672fe39fa5baa15b6645a41629339cce83577a2ffd3007925e7ab5522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8eabd672fe39fa5baa15b6645a41629339cce83577a2ffd3007925e7ab5522->enter($__internal_2c8eabd672fe39fa5baa15b6645a41629339cce83577a2ffd3007925e7ab5522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7ea0b97f92ace3d610019b511427c35f8c003014f5535f0f668af4d3f89e0bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea0b97f92ace3d610019b511427c35f8c003014f5535f0f668af4d3f89e0bd6->enter($__internal_7ea0b97f92ace3d610019b511427c35f8c003014f5535f0f668af4d3f89e0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7ea0b97f92ace3d610019b511427c35f8c003014f5535f0f668af4d3f89e0bd6->leave($__internal_7ea0b97f92ace3d610019b511427c35f8c003014f5535f0f668af4d3f89e0bd6_prof);

        
        $__internal_2c8eabd672fe39fa5baa15b6645a41629339cce83577a2ffd3007925e7ab5522->leave($__internal_2c8eabd672fe39fa5baa15b6645a41629339cce83577a2ffd3007925e7ab5522_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_05f25ac3fd50b38019fc156d49ec4c4b90cf51122200cbfaa8eff0e87e56c61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f25ac3fd50b38019fc156d49ec4c4b90cf51122200cbfaa8eff0e87e56c61f->enter($__internal_05f25ac3fd50b38019fc156d49ec4c4b90cf51122200cbfaa8eff0e87e56c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b978af73f26187e7ff4a8bf7ff325b6534943303b50f8b6aef6d66da5fadc38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b978af73f26187e7ff4a8bf7ff325b6534943303b50f8b6aef6d66da5fadc38f->enter($__internal_b978af73f26187e7ff4a8bf7ff325b6534943303b50f8b6aef6d66da5fadc38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b978af73f26187e7ff4a8bf7ff325b6534943303b50f8b6aef6d66da5fadc38f->leave($__internal_b978af73f26187e7ff4a8bf7ff325b6534943303b50f8b6aef6d66da5fadc38f_prof);

        
        $__internal_05f25ac3fd50b38019fc156d49ec4c4b90cf51122200cbfaa8eff0e87e56c61f->leave($__internal_05f25ac3fd50b38019fc156d49ec4c4b90cf51122200cbfaa8eff0e87e56c61f_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d6da740006a3b7ebb8210689b9209985026e24b0a9f55e98d12e8f8fb4eb9784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6da740006a3b7ebb8210689b9209985026e24b0a9f55e98d12e8f8fb4eb9784->enter($__internal_d6da740006a3b7ebb8210689b9209985026e24b0a9f55e98d12e8f8fb4eb9784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6ea42caf57258de29de2bf7babdbe733840d9a5c22eb5e806766774ad6f2e415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea42caf57258de29de2bf7babdbe733840d9a5c22eb5e806766774ad6f2e415->enter($__internal_6ea42caf57258de29de2bf7babdbe733840d9a5c22eb5e806766774ad6f2e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_6ea42caf57258de29de2bf7babdbe733840d9a5c22eb5e806766774ad6f2e415->leave($__internal_6ea42caf57258de29de2bf7babdbe733840d9a5c22eb5e806766774ad6f2e415_prof);

        
        $__internal_d6da740006a3b7ebb8210689b9209985026e24b0a9f55e98d12e8f8fb4eb9784->leave($__internal_d6da740006a3b7ebb8210689b9209985026e24b0a9f55e98d12e8f8fb4eb9784_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9bdbb6d496e9cffb97f31878463fd9bc356310eb137ff3de063b76992b7fa188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdbb6d496e9cffb97f31878463fd9bc356310eb137ff3de063b76992b7fa188->enter($__internal_9bdbb6d496e9cffb97f31878463fd9bc356310eb137ff3de063b76992b7fa188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8c6d8c12e2a5f462f879e4028a7493b9d014fca7bdea0a85c3dd6d67a2f40900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6d8c12e2a5f462f879e4028a7493b9d014fca7bdea0a85c3dd6d67a2f40900->enter($__internal_8c6d8c12e2a5f462f879e4028a7493b9d014fca7bdea0a85c3dd6d67a2f40900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_8c6d8c12e2a5f462f879e4028a7493b9d014fca7bdea0a85c3dd6d67a2f40900->leave($__internal_8c6d8c12e2a5f462f879e4028a7493b9d014fca7bdea0a85c3dd6d67a2f40900_prof);

        
        $__internal_9bdbb6d496e9cffb97f31878463fd9bc356310eb137ff3de063b76992b7fa188->leave($__internal_9bdbb6d496e9cffb97f31878463fd9bc356310eb137ff3de063b76992b7fa188_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e869dcdc3c51d61ba34fdefd9d6e28b224604bb0f4dda2bcd794825946a59e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e869dcdc3c51d61ba34fdefd9d6e28b224604bb0f4dda2bcd794825946a59e82->enter($__internal_e869dcdc3c51d61ba34fdefd9d6e28b224604bb0f4dda2bcd794825946a59e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0e8bf91b7fa6fb97bb657c146887b234ce82fdaefaaee2d8e644e6f976fbd9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8bf91b7fa6fb97bb657c146887b234ce82fdaefaaee2d8e644e6f976fbd9af->enter($__internal_0e8bf91b7fa6fb97bb657c146887b234ce82fdaefaaee2d8e644e6f976fbd9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_0e8bf91b7fa6fb97bb657c146887b234ce82fdaefaaee2d8e644e6f976fbd9af->leave($__internal_0e8bf91b7fa6fb97bb657c146887b234ce82fdaefaaee2d8e644e6f976fbd9af_prof);

        
        $__internal_e869dcdc3c51d61ba34fdefd9d6e28b224604bb0f4dda2bcd794825946a59e82->leave($__internal_e869dcdc3c51d61ba34fdefd9d6e28b224604bb0f4dda2bcd794825946a59e82_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_232c42ddfbd0bd3b86854781d173bcf2fd5e397b5181cd8bda8a43dcdbe5d575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232c42ddfbd0bd3b86854781d173bcf2fd5e397b5181cd8bda8a43dcdbe5d575->enter($__internal_232c42ddfbd0bd3b86854781d173bcf2fd5e397b5181cd8bda8a43dcdbe5d575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f5d054b95cafc85da7aff8f9bc5a272ebe90863fad3606241a2ed573644b11f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d054b95cafc85da7aff8f9bc5a272ebe90863fad3606241a2ed573644b11f2->enter($__internal_f5d054b95cafc85da7aff8f9bc5a272ebe90863fad3606241a2ed573644b11f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_f5d054b95cafc85da7aff8f9bc5a272ebe90863fad3606241a2ed573644b11f2->leave($__internal_f5d054b95cafc85da7aff8f9bc5a272ebe90863fad3606241a2ed573644b11f2_prof);

        
        $__internal_232c42ddfbd0bd3b86854781d173bcf2fd5e397b5181cd8bda8a43dcdbe5d575->leave($__internal_232c42ddfbd0bd3b86854781d173bcf2fd5e397b5181cd8bda8a43dcdbe5d575_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cf9f4250a2bbeb0b1b07f0193d652a879282f1879f127fa06e4cad2071248011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9f4250a2bbeb0b1b07f0193d652a879282f1879f127fa06e4cad2071248011->enter($__internal_cf9f4250a2bbeb0b1b07f0193d652a879282f1879f127fa06e4cad2071248011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_544cb172a89cf3ee0e3b7e3f67045c7c2a97638c0628bd773a880195dba05e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544cb172a89cf3ee0e3b7e3f67045c7c2a97638c0628bd773a880195dba05e5e->enter($__internal_544cb172a89cf3ee0e3b7e3f67045c7c2a97638c0628bd773a880195dba05e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_544cb172a89cf3ee0e3b7e3f67045c7c2a97638c0628bd773a880195dba05e5e->leave($__internal_544cb172a89cf3ee0e3b7e3f67045c7c2a97638c0628bd773a880195dba05e5e_prof);

        
        $__internal_cf9f4250a2bbeb0b1b07f0193d652a879282f1879f127fa06e4cad2071248011->leave($__internal_cf9f4250a2bbeb0b1b07f0193d652a879282f1879f127fa06e4cad2071248011_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c88db3db04fb72f296be297a61df670e3080d374b9a546e88f0d2e9d6555eb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88db3db04fb72f296be297a61df670e3080d374b9a546e88f0d2e9d6555eb8b->enter($__internal_c88db3db04fb72f296be297a61df670e3080d374b9a546e88f0d2e9d6555eb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3d45db0a301d4ae17a9609c59bc1512deab4450d8ca8d3c14aabd8f70deacc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d45db0a301d4ae17a9609c59bc1512deab4450d8ca8d3c14aabd8f70deacc89->enter($__internal_3d45db0a301d4ae17a9609c59bc1512deab4450d8ca8d3c14aabd8f70deacc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_3d45db0a301d4ae17a9609c59bc1512deab4450d8ca8d3c14aabd8f70deacc89->leave($__internal_3d45db0a301d4ae17a9609c59bc1512deab4450d8ca8d3c14aabd8f70deacc89_prof);

        
        $__internal_c88db3db04fb72f296be297a61df670e3080d374b9a546e88f0d2e9d6555eb8b->leave($__internal_c88db3db04fb72f296be297a61df670e3080d374b9a546e88f0d2e9d6555eb8b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fad85a45ae12d1c9d49c7a349778a9ab0819492de4a63de558f8e3a51ba2bf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad85a45ae12d1c9d49c7a349778a9ab0819492de4a63de558f8e3a51ba2bf1d->enter($__internal_fad85a45ae12d1c9d49c7a349778a9ab0819492de4a63de558f8e3a51ba2bf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d1c346a8a3bb1307da45f7c203ed54238b6268ca7333ea93e0859551667012ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c346a8a3bb1307da45f7c203ed54238b6268ca7333ea93e0859551667012ee->enter($__internal_d1c346a8a3bb1307da45f7c203ed54238b6268ca7333ea93e0859551667012ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_d1c346a8a3bb1307da45f7c203ed54238b6268ca7333ea93e0859551667012ee->leave($__internal_d1c346a8a3bb1307da45f7c203ed54238b6268ca7333ea93e0859551667012ee_prof);

        
        $__internal_fad85a45ae12d1c9d49c7a349778a9ab0819492de4a63de558f8e3a51ba2bf1d->leave($__internal_fad85a45ae12d1c9d49c7a349778a9ab0819492de4a63de558f8e3a51ba2bf1d_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_53ed6efc59873c60b17a409ff47e7f2ba800f54153a6216658eadae1c4072def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ed6efc59873c60b17a409ff47e7f2ba800f54153a6216658eadae1c4072def->enter($__internal_53ed6efc59873c60b17a409ff47e7f2ba800f54153a6216658eadae1c4072def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_006d89cc83a048cb50dcac578b5981b66b529d5b06ec9c774ac991a4aec5f8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006d89cc83a048cb50dcac578b5981b66b529d5b06ec9c774ac991a4aec5f8fc->enter($__internal_006d89cc83a048cb50dcac578b5981b66b529d5b06ec9c774ac991a4aec5f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_006d89cc83a048cb50dcac578b5981b66b529d5b06ec9c774ac991a4aec5f8fc->leave($__internal_006d89cc83a048cb50dcac578b5981b66b529d5b06ec9c774ac991a4aec5f8fc_prof);

        
        $__internal_53ed6efc59873c60b17a409ff47e7f2ba800f54153a6216658eadae1c4072def->leave($__internal_53ed6efc59873c60b17a409ff47e7f2ba800f54153a6216658eadae1c4072def_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_36736f0c9f686121310470a169de0bae661979200aa4c4115ab806d43a0d91c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36736f0c9f686121310470a169de0bae661979200aa4c4115ab806d43a0d91c0->enter($__internal_36736f0c9f686121310470a169de0bae661979200aa4c4115ab806d43a0d91c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_ed20b46e273180507c3d140e503a3ec588ff8fc02c487956784beacc4215f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed20b46e273180507c3d140e503a3ec588ff8fc02c487956784beacc4215f7a9->enter($__internal_ed20b46e273180507c3d140e503a3ec588ff8fc02c487956784beacc4215f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_ed20b46e273180507c3d140e503a3ec588ff8fc02c487956784beacc4215f7a9->leave($__internal_ed20b46e273180507c3d140e503a3ec588ff8fc02c487956784beacc4215f7a9_prof);

        
        $__internal_36736f0c9f686121310470a169de0bae661979200aa4c4115ab806d43a0d91c0->leave($__internal_36736f0c9f686121310470a169de0bae661979200aa4c4115ab806d43a0d91c0_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dc43b645937eb15621c776277230e6cf84b7da3b076c34d5e0c7de2e3ce4b91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc43b645937eb15621c776277230e6cf84b7da3b076c34d5e0c7de2e3ce4b91d->enter($__internal_dc43b645937eb15621c776277230e6cf84b7da3b076c34d5e0c7de2e3ce4b91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ad7c3c2c27f8aacf7f7dd6241772d565f787cb0ff3ca92d1a9a8a9ed3528e353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7c3c2c27f8aacf7f7dd6241772d565f787cb0ff3ca92d1a9a8a9ed3528e353->enter($__internal_ad7c3c2c27f8aacf7f7dd6241772d565f787cb0ff3ca92d1a9a8a9ed3528e353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ad7c3c2c27f8aacf7f7dd6241772d565f787cb0ff3ca92d1a9a8a9ed3528e353->leave($__internal_ad7c3c2c27f8aacf7f7dd6241772d565f787cb0ff3ca92d1a9a8a9ed3528e353_prof);

        
        $__internal_dc43b645937eb15621c776277230e6cf84b7da3b076c34d5e0c7de2e3ce4b91d->leave($__internal_dc43b645937eb15621c776277230e6cf84b7da3b076c34d5e0c7de2e3ce4b91d_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_67301d29507c214a39539c69fb46596bf87acbac7bc5e47108e389a82a9f7491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67301d29507c214a39539c69fb46596bf87acbac7bc5e47108e389a82a9f7491->enter($__internal_67301d29507c214a39539c69fb46596bf87acbac7bc5e47108e389a82a9f7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_bc7024182c1babe3a913bf30da32782deeb7ca4d6648cedba278ecef51a4d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7024182c1babe3a913bf30da32782deeb7ca4d6648cedba278ecef51a4d856->enter($__internal_bc7024182c1babe3a913bf30da32782deeb7ca4d6648cedba278ecef51a4d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_bc7024182c1babe3a913bf30da32782deeb7ca4d6648cedba278ecef51a4d856->leave($__internal_bc7024182c1babe3a913bf30da32782deeb7ca4d6648cedba278ecef51a4d856_prof);

        
        $__internal_67301d29507c214a39539c69fb46596bf87acbac7bc5e47108e389a82a9f7491->leave($__internal_67301d29507c214a39539c69fb46596bf87acbac7bc5e47108e389a82a9f7491_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5264e62bee10078a70bc15886a95dc02bc9fd95657dc50382a5d8d73f65bbfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5264e62bee10078a70bc15886a95dc02bc9fd95657dc50382a5d8d73f65bbfdd->enter($__internal_5264e62bee10078a70bc15886a95dc02bc9fd95657dc50382a5d8d73f65bbfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_863c72aa881c53b6f61c7a27c1da688d8f59a830743d119bb796ba34129d7d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863c72aa881c53b6f61c7a27c1da688d8f59a830743d119bb796ba34129d7d7c->enter($__internal_863c72aa881c53b6f61c7a27c1da688d8f59a830743d119bb796ba34129d7d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_863c72aa881c53b6f61c7a27c1da688d8f59a830743d119bb796ba34129d7d7c->leave($__internal_863c72aa881c53b6f61c7a27c1da688d8f59a830743d119bb796ba34129d7d7c_prof);

        
        $__internal_5264e62bee10078a70bc15886a95dc02bc9fd95657dc50382a5d8d73f65bbfdd->leave($__internal_5264e62bee10078a70bc15886a95dc02bc9fd95657dc50382a5d8d73f65bbfdd_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_163ca49dff3d670506ea1816af5f6557be82cda949da68d404ca0e61883fc0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163ca49dff3d670506ea1816af5f6557be82cda949da68d404ca0e61883fc0b3->enter($__internal_163ca49dff3d670506ea1816af5f6557be82cda949da68d404ca0e61883fc0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_847fb3201349f57b8e76268e02370c13a6c6deed0fd4327f56982c9fda46434f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847fb3201349f57b8e76268e02370c13a6c6deed0fd4327f56982c9fda46434f->enter($__internal_847fb3201349f57b8e76268e02370c13a6c6deed0fd4327f56982c9fda46434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_847fb3201349f57b8e76268e02370c13a6c6deed0fd4327f56982c9fda46434f->leave($__internal_847fb3201349f57b8e76268e02370c13a6c6deed0fd4327f56982c9fda46434f_prof);

        
        $__internal_163ca49dff3d670506ea1816af5f6557be82cda949da68d404ca0e61883fc0b3->leave($__internal_163ca49dff3d670506ea1816af5f6557be82cda949da68d404ca0e61883fc0b3_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_29705ed429444ce9337cedd2a8acdff2caade4202be9eacc40c7367b12dc6e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29705ed429444ce9337cedd2a8acdff2caade4202be9eacc40c7367b12dc6e97->enter($__internal_29705ed429444ce9337cedd2a8acdff2caade4202be9eacc40c7367b12dc6e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7d712a13bbff68f129ec9e9742ea0e8cc4bcef1bbff0d7d77c8212956884239e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d712a13bbff68f129ec9e9742ea0e8cc4bcef1bbff0d7d77c8212956884239e->enter($__internal_7d712a13bbff68f129ec9e9742ea0e8cc4bcef1bbff0d7d77c8212956884239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7d712a13bbff68f129ec9e9742ea0e8cc4bcef1bbff0d7d77c8212956884239e->leave($__internal_7d712a13bbff68f129ec9e9742ea0e8cc4bcef1bbff0d7d77c8212956884239e_prof);

        
        $__internal_29705ed429444ce9337cedd2a8acdff2caade4202be9eacc40c7367b12dc6e97->leave($__internal_29705ed429444ce9337cedd2a8acdff2caade4202be9eacc40c7367b12dc6e97_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8aa909fa84943da01a5f78eb267e64d899be07ac089e825793cb8b3fc5ae4c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa909fa84943da01a5f78eb267e64d899be07ac089e825793cb8b3fc5ae4c7d->enter($__internal_8aa909fa84943da01a5f78eb267e64d899be07ac089e825793cb8b3fc5ae4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_736dfee1646c2c0125b6611fe653903143f0af99a7bf4393106e47b7e76f49ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736dfee1646c2c0125b6611fe653903143f0af99a7bf4393106e47b7e76f49ab->enter($__internal_736dfee1646c2c0125b6611fe653903143f0af99a7bf4393106e47b7e76f49ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_736dfee1646c2c0125b6611fe653903143f0af99a7bf4393106e47b7e76f49ab->leave($__internal_736dfee1646c2c0125b6611fe653903143f0af99a7bf4393106e47b7e76f49ab_prof);

        
        $__internal_8aa909fa84943da01a5f78eb267e64d899be07ac089e825793cb8b3fc5ae4c7d->leave($__internal_8aa909fa84943da01a5f78eb267e64d899be07ac089e825793cb8b3fc5ae4c7d_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_dd85057bb9c946f9b2bc21a26ec048ecfd9e4d063503cef8d7fed075aace56ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd85057bb9c946f9b2bc21a26ec048ecfd9e4d063503cef8d7fed075aace56ef->enter($__internal_dd85057bb9c946f9b2bc21a26ec048ecfd9e4d063503cef8d7fed075aace56ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0c234657902df0d10576ffdb2decbfd28f52530f0d7376bf26cce0b673400e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c234657902df0d10576ffdb2decbfd28f52530f0d7376bf26cce0b673400e36->enter($__internal_0c234657902df0d10576ffdb2decbfd28f52530f0d7376bf26cce0b673400e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0c234657902df0d10576ffdb2decbfd28f52530f0d7376bf26cce0b673400e36->leave($__internal_0c234657902df0d10576ffdb2decbfd28f52530f0d7376bf26cce0b673400e36_prof);

        
        $__internal_dd85057bb9c946f9b2bc21a26ec048ecfd9e4d063503cef8d7fed075aace56ef->leave($__internal_dd85057bb9c946f9b2bc21a26ec048ecfd9e4d063503cef8d7fed075aace56ef_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_025e22e2f11e4b5718d2b880e875e0d8249bb770c4ede29e57c70e0fc4c038df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025e22e2f11e4b5718d2b880e875e0d8249bb770c4ede29e57c70e0fc4c038df->enter($__internal_025e22e2f11e4b5718d2b880e875e0d8249bb770c4ede29e57c70e0fc4c038df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_84a4dd9f3cb8a7836470a18f79222515a023c99e0345f7d214700b91f525ce00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a4dd9f3cb8a7836470a18f79222515a023c99e0345f7d214700b91f525ce00->enter($__internal_84a4dd9f3cb8a7836470a18f79222515a023c99e0345f7d214700b91f525ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_84a4dd9f3cb8a7836470a18f79222515a023c99e0345f7d214700b91f525ce00->leave($__internal_84a4dd9f3cb8a7836470a18f79222515a023c99e0345f7d214700b91f525ce00_prof);

        
        $__internal_025e22e2f11e4b5718d2b880e875e0d8249bb770c4ede29e57c70e0fc4c038df->leave($__internal_025e22e2f11e4b5718d2b880e875e0d8249bb770c4ede29e57c70e0fc4c038df_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_76e2413eddf66506a8478426346a5d4d1c0cb67138fd80ad3a25a85652c84331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e2413eddf66506a8478426346a5d4d1c0cb67138fd80ad3a25a85652c84331->enter($__internal_76e2413eddf66506a8478426346a5d4d1c0cb67138fd80ad3a25a85652c84331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8f4d084d50c6859dda2b1303134cf0e75fcebfb7537e4efee7b09081fc3e09c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4d084d50c6859dda2b1303134cf0e75fcebfb7537e4efee7b09081fc3e09c1->enter($__internal_8f4d084d50c6859dda2b1303134cf0e75fcebfb7537e4efee7b09081fc3e09c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8f4d084d50c6859dda2b1303134cf0e75fcebfb7537e4efee7b09081fc3e09c1->leave($__internal_8f4d084d50c6859dda2b1303134cf0e75fcebfb7537e4efee7b09081fc3e09c1_prof);

        
        $__internal_76e2413eddf66506a8478426346a5d4d1c0cb67138fd80ad3a25a85652c84331->leave($__internal_76e2413eddf66506a8478426346a5d4d1c0cb67138fd80ad3a25a85652c84331_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6013b475de316acc667aa7b6463c880eb9194c6164c6e7b813451c9765149663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6013b475de316acc667aa7b6463c880eb9194c6164c6e7b813451c9765149663->enter($__internal_6013b475de316acc667aa7b6463c880eb9194c6164c6e7b813451c9765149663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_da9a987d78bb01b509453d6fc787475b7091e188a9b533ce7f56bfed77c31c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9a987d78bb01b509453d6fc787475b7091e188a9b533ce7f56bfed77c31c9b->enter($__internal_da9a987d78bb01b509453d6fc787475b7091e188a9b533ce7f56bfed77c31c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_da9a987d78bb01b509453d6fc787475b7091e188a9b533ce7f56bfed77c31c9b->leave($__internal_da9a987d78bb01b509453d6fc787475b7091e188a9b533ce7f56bfed77c31c9b_prof);

        
        $__internal_6013b475de316acc667aa7b6463c880eb9194c6164c6e7b813451c9765149663->leave($__internal_6013b475de316acc667aa7b6463c880eb9194c6164c6e7b813451c9765149663_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_19d824e120e30dc069573c666cbded3d59bd80e623c0c8137ce8280bb076a661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d824e120e30dc069573c666cbded3d59bd80e623c0c8137ce8280bb076a661->enter($__internal_19d824e120e30dc069573c666cbded3d59bd80e623c0c8137ce8280bb076a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b13e4611362bec1ad59a06747542b38397b3c4a659bda35c84e57c2969d54636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13e4611362bec1ad59a06747542b38397b3c4a659bda35c84e57c2969d54636->enter($__internal_b13e4611362bec1ad59a06747542b38397b3c4a659bda35c84e57c2969d54636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b13e4611362bec1ad59a06747542b38397b3c4a659bda35c84e57c2969d54636->leave($__internal_b13e4611362bec1ad59a06747542b38397b3c4a659bda35c84e57c2969d54636_prof);

        
        $__internal_19d824e120e30dc069573c666cbded3d59bd80e623c0c8137ce8280bb076a661->leave($__internal_19d824e120e30dc069573c666cbded3d59bd80e623c0c8137ce8280bb076a661_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a85f69cd549372d32bb973ae968c4ef4c5df9b2984ccd2f9c1955cb87edb1c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85f69cd549372d32bb973ae968c4ef4c5df9b2984ccd2f9c1955cb87edb1c04->enter($__internal_a85f69cd549372d32bb973ae968c4ef4c5df9b2984ccd2f9c1955cb87edb1c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_96183c4cf0c50b45ad69f356e5994635d430319cf980effef0ce5ad3cb259b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96183c4cf0c50b45ad69f356e5994635d430319cf980effef0ce5ad3cb259b0a->enter($__internal_96183c4cf0c50b45ad69f356e5994635d430319cf980effef0ce5ad3cb259b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_96183c4cf0c50b45ad69f356e5994635d430319cf980effef0ce5ad3cb259b0a->leave($__internal_96183c4cf0c50b45ad69f356e5994635d430319cf980effef0ce5ad3cb259b0a_prof);

        
        $__internal_a85f69cd549372d32bb973ae968c4ef4c5df9b2984ccd2f9c1955cb87edb1c04->leave($__internal_a85f69cd549372d32bb973ae968c4ef4c5df9b2984ccd2f9c1955cb87edb1c04_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bb8147ecee0310d747851ba0cac0423f290eed0a54f8a6ec89d879016a363f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8147ecee0310d747851ba0cac0423f290eed0a54f8a6ec89d879016a363f30->enter($__internal_bb8147ecee0310d747851ba0cac0423f290eed0a54f8a6ec89d879016a363f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_de51c2fffd6f4574d477b918e390a3db278594fd095659314a2d36469f8e4a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de51c2fffd6f4574d477b918e390a3db278594fd095659314a2d36469f8e4a86->enter($__internal_de51c2fffd6f4574d477b918e390a3db278594fd095659314a2d36469f8e4a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_de51c2fffd6f4574d477b918e390a3db278594fd095659314a2d36469f8e4a86->leave($__internal_de51c2fffd6f4574d477b918e390a3db278594fd095659314a2d36469f8e4a86_prof);

        
        $__internal_bb8147ecee0310d747851ba0cac0423f290eed0a54f8a6ec89d879016a363f30->leave($__internal_bb8147ecee0310d747851ba0cac0423f290eed0a54f8a6ec89d879016a363f30_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\symfony\\app_finished\\api_upload_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
