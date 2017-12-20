<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5a2683dbb61205421c6c7d88e2e447fa812cb3382860e27e5e16d3df02c2bd0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
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
        $__internal_1dd2ac9de24213d89f067be1df975cc26c295e71147df88951e17704b6877614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd2ac9de24213d89f067be1df975cc26c295e71147df88951e17704b6877614->enter($__internal_1dd2ac9de24213d89f067be1df975cc26c295e71147df88951e17704b6877614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ed45a166befc6a35b1ff0c228811baf6e5f0493afe495d348b410d3aa4b103b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed45a166befc6a35b1ff0c228811baf6e5f0493afe495d348b410d3aa4b103b2->enter($__internal_ed45a166befc6a35b1ff0c228811baf6e5f0493afe495d348b410d3aa4b103b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1dd2ac9de24213d89f067be1df975cc26c295e71147df88951e17704b6877614->leave($__internal_1dd2ac9de24213d89f067be1df975cc26c295e71147df88951e17704b6877614_prof);

        
        $__internal_ed45a166befc6a35b1ff0c228811baf6e5f0493afe495d348b410d3aa4b103b2->leave($__internal_ed45a166befc6a35b1ff0c228811baf6e5f0493afe495d348b410d3aa4b103b2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7a3c85510acfa0bbeac7e7a1222f1767391b1ce33d591795113341c4f987605b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3c85510acfa0bbeac7e7a1222f1767391b1ce33d591795113341c4f987605b->enter($__internal_7a3c85510acfa0bbeac7e7a1222f1767391b1ce33d591795113341c4f987605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7b7c2f6f4194e8094ed7dbe0b0687e2ed3b9f452dc9c6226f83e44076255e47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7c2f6f4194e8094ed7dbe0b0687e2ed3b9f452dc9c6226f83e44076255e47f->enter($__internal_7b7c2f6f4194e8094ed7dbe0b0687e2ed3b9f452dc9c6226f83e44076255e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7b7c2f6f4194e8094ed7dbe0b0687e2ed3b9f452dc9c6226f83e44076255e47f->leave($__internal_7b7c2f6f4194e8094ed7dbe0b0687e2ed3b9f452dc9c6226f83e44076255e47f_prof);

        
        $__internal_7a3c85510acfa0bbeac7e7a1222f1767391b1ce33d591795113341c4f987605b->leave($__internal_7a3c85510acfa0bbeac7e7a1222f1767391b1ce33d591795113341c4f987605b_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3fa4862c5a319c4ac3b05e5fa626ac81dd7845f70dd97eb9f94da95cb41445a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa4862c5a319c4ac3b05e5fa626ac81dd7845f70dd97eb9f94da95cb41445a1->enter($__internal_3fa4862c5a319c4ac3b05e5fa626ac81dd7845f70dd97eb9f94da95cb41445a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a0880a8ee5f60db4c6e5582970e2da9ffa5905039138ce6982630da183775553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0880a8ee5f60db4c6e5582970e2da9ffa5905039138ce6982630da183775553->enter($__internal_a0880a8ee5f60db4c6e5582970e2da9ffa5905039138ce6982630da183775553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a0880a8ee5f60db4c6e5582970e2da9ffa5905039138ce6982630da183775553->leave($__internal_a0880a8ee5f60db4c6e5582970e2da9ffa5905039138ce6982630da183775553_prof);

        
        $__internal_3fa4862c5a319c4ac3b05e5fa626ac81dd7845f70dd97eb9f94da95cb41445a1->leave($__internal_3fa4862c5a319c4ac3b05e5fa626ac81dd7845f70dd97eb9f94da95cb41445a1_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6178dd347c6787c167d275570ff9c15882f3811bd3912f38499ae8cd7270af5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6178dd347c6787c167d275570ff9c15882f3811bd3912f38499ae8cd7270af5e->enter($__internal_6178dd347c6787c167d275570ff9c15882f3811bd3912f38499ae8cd7270af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a51172246a036f8bc422252ba66dcfb1701ec787ab204577ce79e32bf7d6fe66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51172246a036f8bc422252ba66dcfb1701ec787ab204577ce79e32bf7d6fe66->enter($__internal_a51172246a036f8bc422252ba66dcfb1701ec787ab204577ce79e32bf7d6fe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_a51172246a036f8bc422252ba66dcfb1701ec787ab204577ce79e32bf7d6fe66->leave($__internal_a51172246a036f8bc422252ba66dcfb1701ec787ab204577ce79e32bf7d6fe66_prof);

        
        $__internal_6178dd347c6787c167d275570ff9c15882f3811bd3912f38499ae8cd7270af5e->leave($__internal_6178dd347c6787c167d275570ff9c15882f3811bd3912f38499ae8cd7270af5e_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a83a0ef0e296218bf0cd13a66e071ada648f2fb01d8adca0cfadd892255a33a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83a0ef0e296218bf0cd13a66e071ada648f2fb01d8adca0cfadd892255a33a1->enter($__internal_a83a0ef0e296218bf0cd13a66e071ada648f2fb01d8adca0cfadd892255a33a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cd568a955e08ecd80c7c6e08d19115210563e9ebc157421ec25219fb0efc3114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd568a955e08ecd80c7c6e08d19115210563e9ebc157421ec25219fb0efc3114->enter($__internal_cd568a955e08ecd80c7c6e08d19115210563e9ebc157421ec25219fb0efc3114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_cd568a955e08ecd80c7c6e08d19115210563e9ebc157421ec25219fb0efc3114->leave($__internal_cd568a955e08ecd80c7c6e08d19115210563e9ebc157421ec25219fb0efc3114_prof);

        
        $__internal_a83a0ef0e296218bf0cd13a66e071ada648f2fb01d8adca0cfadd892255a33a1->leave($__internal_a83a0ef0e296218bf0cd13a66e071ada648f2fb01d8adca0cfadd892255a33a1_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2ce8a7c29c5aca53fb5738ee028849f0fc7ed1917f409055bfd87b45e9f5aff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce8a7c29c5aca53fb5738ee028849f0fc7ed1917f409055bfd87b45e9f5aff0->enter($__internal_2ce8a7c29c5aca53fb5738ee028849f0fc7ed1917f409055bfd87b45e9f5aff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_48515ed0bddbc08ce08b926adde896243fa82d8fd3740da578f1da66f4c8c898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48515ed0bddbc08ce08b926adde896243fa82d8fd3740da578f1da66f4c8c898->enter($__internal_48515ed0bddbc08ce08b926adde896243fa82d8fd3740da578f1da66f4c8c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_48515ed0bddbc08ce08b926adde896243fa82d8fd3740da578f1da66f4c8c898->leave($__internal_48515ed0bddbc08ce08b926adde896243fa82d8fd3740da578f1da66f4c8c898_prof);

        
        $__internal_2ce8a7c29c5aca53fb5738ee028849f0fc7ed1917f409055bfd87b45e9f5aff0->leave($__internal_2ce8a7c29c5aca53fb5738ee028849f0fc7ed1917f409055bfd87b45e9f5aff0_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b6e41c9d6314ce2b53ffa07263ea68c4114faf98a2fb4b3f84bffe1e8a50ae77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e41c9d6314ce2b53ffa07263ea68c4114faf98a2fb4b3f84bffe1e8a50ae77->enter($__internal_b6e41c9d6314ce2b53ffa07263ea68c4114faf98a2fb4b3f84bffe1e8a50ae77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2354ecd0d32585ec840bb39227d793a133d46706b437ca22c8835960d059b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2354ecd0d32585ec840bb39227d793a133d46706b437ca22c8835960d059b742->enter($__internal_2354ecd0d32585ec840bb39227d793a133d46706b437ca22c8835960d059b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2354ecd0d32585ec840bb39227d793a133d46706b437ca22c8835960d059b742->leave($__internal_2354ecd0d32585ec840bb39227d793a133d46706b437ca22c8835960d059b742_prof);

        
        $__internal_b6e41c9d6314ce2b53ffa07263ea68c4114faf98a2fb4b3f84bffe1e8a50ae77->leave($__internal_b6e41c9d6314ce2b53ffa07263ea68c4114faf98a2fb4b3f84bffe1e8a50ae77_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2bb65f761b7a311ebe60399832cf2daf28220682bdbd58e12f3f4a767a89f7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb65f761b7a311ebe60399832cf2daf28220682bdbd58e12f3f4a767a89f7cb->enter($__internal_2bb65f761b7a311ebe60399832cf2daf28220682bdbd58e12f3f4a767a89f7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b255279ac0c0a264a912fec4d9e73159b26abbf0b55fabb0ceb17822b236c0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b255279ac0c0a264a912fec4d9e73159b26abbf0b55fabb0ceb17822b236c0c1->enter($__internal_b255279ac0c0a264a912fec4d9e73159b26abbf0b55fabb0ceb17822b236c0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b255279ac0c0a264a912fec4d9e73159b26abbf0b55fabb0ceb17822b236c0c1->leave($__internal_b255279ac0c0a264a912fec4d9e73159b26abbf0b55fabb0ceb17822b236c0c1_prof);

        
        $__internal_2bb65f761b7a311ebe60399832cf2daf28220682bdbd58e12f3f4a767a89f7cb->leave($__internal_2bb65f761b7a311ebe60399832cf2daf28220682bdbd58e12f3f4a767a89f7cb_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_577bb01dcafc10d5b89974922ffa05e3f00c1c847c6101501d2961887ce54c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577bb01dcafc10d5b89974922ffa05e3f00c1c847c6101501d2961887ce54c4f->enter($__internal_577bb01dcafc10d5b89974922ffa05e3f00c1c847c6101501d2961887ce54c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_dd71d14a35899890454b30cc0378b2779998f4f2e58dc61255cde63d10203b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd71d14a35899890454b30cc0378b2779998f4f2e58dc61255cde63d10203b62->enter($__internal_dd71d14a35899890454b30cc0378b2779998f4f2e58dc61255cde63d10203b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dd71d14a35899890454b30cc0378b2779998f4f2e58dc61255cde63d10203b62->leave($__internal_dd71d14a35899890454b30cc0378b2779998f4f2e58dc61255cde63d10203b62_prof);

        
        $__internal_577bb01dcafc10d5b89974922ffa05e3f00c1c847c6101501d2961887ce54c4f->leave($__internal_577bb01dcafc10d5b89974922ffa05e3f00c1c847c6101501d2961887ce54c4f_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ed5743e654dba8ba49fd85688d869cb74591f3755d97d1387e92a951a642cf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5743e654dba8ba49fd85688d869cb74591f3755d97d1387e92a951a642cf15->enter($__internal_ed5743e654dba8ba49fd85688d869cb74591f3755d97d1387e92a951a642cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e62411979266191688f603bd5d20a32e7e55918e743787a57da5d786e8f5e187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62411979266191688f603bd5d20a32e7e55918e743787a57da5d786e8f5e187->enter($__internal_e62411979266191688f603bd5d20a32e7e55918e743787a57da5d786e8f5e187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_e62411979266191688f603bd5d20a32e7e55918e743787a57da5d786e8f5e187->leave($__internal_e62411979266191688f603bd5d20a32e7e55918e743787a57da5d786e8f5e187_prof);

        
        $__internal_ed5743e654dba8ba49fd85688d869cb74591f3755d97d1387e92a951a642cf15->leave($__internal_ed5743e654dba8ba49fd85688d869cb74591f3755d97d1387e92a951a642cf15_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_917230c2c229c9bb0a3eb0f8a4b5e96cd8fe437bfa6c9461667477bca50fc9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917230c2c229c9bb0a3eb0f8a4b5e96cd8fe437bfa6c9461667477bca50fc9bb->enter($__internal_917230c2c229c9bb0a3eb0f8a4b5e96cd8fe437bfa6c9461667477bca50fc9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b568f3ef8e081886516a1e4deabd8c967b970bf316d50c2cdaf2ae6ebffa668c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b568f3ef8e081886516a1e4deabd8c967b970bf316d50c2cdaf2ae6ebffa668c->enter($__internal_b568f3ef8e081886516a1e4deabd8c967b970bf316d50c2cdaf2ae6ebffa668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_b568f3ef8e081886516a1e4deabd8c967b970bf316d50c2cdaf2ae6ebffa668c->leave($__internal_b568f3ef8e081886516a1e4deabd8c967b970bf316d50c2cdaf2ae6ebffa668c_prof);

        
        $__internal_917230c2c229c9bb0a3eb0f8a4b5e96cd8fe437bfa6c9461667477bca50fc9bb->leave($__internal_917230c2c229c9bb0a3eb0f8a4b5e96cd8fe437bfa6c9461667477bca50fc9bb_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2bd68c194ca5de9e37117f62ffa785bff3f5ac8f05ca33511fc347e353320190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd68c194ca5de9e37117f62ffa785bff3f5ac8f05ca33511fc347e353320190->enter($__internal_2bd68c194ca5de9e37117f62ffa785bff3f5ac8f05ca33511fc347e353320190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5384ac1dc4cc346f43a4463d4cc34045c9d5071836d5bd13ba0c75894550d54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5384ac1dc4cc346f43a4463d4cc34045c9d5071836d5bd13ba0c75894550d54c->enter($__internal_5384ac1dc4cc346f43a4463d4cc34045c9d5071836d5bd13ba0c75894550d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_5384ac1dc4cc346f43a4463d4cc34045c9d5071836d5bd13ba0c75894550d54c->leave($__internal_5384ac1dc4cc346f43a4463d4cc34045c9d5071836d5bd13ba0c75894550d54c_prof);

        
        $__internal_2bd68c194ca5de9e37117f62ffa785bff3f5ac8f05ca33511fc347e353320190->leave($__internal_2bd68c194ca5de9e37117f62ffa785bff3f5ac8f05ca33511fc347e353320190_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_eec9899cb97f12dde53fe23e98182bc31009c7066887f3bd944d918f33da55cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec9899cb97f12dde53fe23e98182bc31009c7066887f3bd944d918f33da55cf->enter($__internal_eec9899cb97f12dde53fe23e98182bc31009c7066887f3bd944d918f33da55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a4d929d511fbf1b3a66c189fe08ed0ad37151a4f50960b3fd8b8b7002cf3d0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d929d511fbf1b3a66c189fe08ed0ad37151a4f50960b3fd8b8b7002cf3d0f2->enter($__internal_a4d929d511fbf1b3a66c189fe08ed0ad37151a4f50960b3fd8b8b7002cf3d0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a4d929d511fbf1b3a66c189fe08ed0ad37151a4f50960b3fd8b8b7002cf3d0f2->leave($__internal_a4d929d511fbf1b3a66c189fe08ed0ad37151a4f50960b3fd8b8b7002cf3d0f2_prof);

        
        $__internal_eec9899cb97f12dde53fe23e98182bc31009c7066887f3bd944d918f33da55cf->leave($__internal_eec9899cb97f12dde53fe23e98182bc31009c7066887f3bd944d918f33da55cf_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_aed33d05d78421dfdbab9a92964d0e31a87712dbd908d18aeca9ca0ae4d23865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed33d05d78421dfdbab9a92964d0e31a87712dbd908d18aeca9ca0ae4d23865->enter($__internal_aed33d05d78421dfdbab9a92964d0e31a87712dbd908d18aeca9ca0ae4d23865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_5310b5dea4786a008a6664dec6eb28df8ee0158902791db29ae1b701ce7022b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5310b5dea4786a008a6664dec6eb28df8ee0158902791db29ae1b701ce7022b2->enter($__internal_5310b5dea4786a008a6664dec6eb28df8ee0158902791db29ae1b701ce7022b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5310b5dea4786a008a6664dec6eb28df8ee0158902791db29ae1b701ce7022b2->leave($__internal_5310b5dea4786a008a6664dec6eb28df8ee0158902791db29ae1b701ce7022b2_prof);

        
        $__internal_aed33d05d78421dfdbab9a92964d0e31a87712dbd908d18aeca9ca0ae4d23865->leave($__internal_aed33d05d78421dfdbab9a92964d0e31a87712dbd908d18aeca9ca0ae4d23865_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8add5b2de574cb134e8b386bae1bd3feb53cda41f20e45da60c95caccc7a3a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8add5b2de574cb134e8b386bae1bd3feb53cda41f20e45da60c95caccc7a3a77->enter($__internal_8add5b2de574cb134e8b386bae1bd3feb53cda41f20e45da60c95caccc7a3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a42df1f6ef45a5a670e93a67e3a911192358fe4040a008fd42cd3ef2eb04b5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42df1f6ef45a5a670e93a67e3a911192358fe4040a008fd42cd3ef2eb04b5ee->enter($__internal_a42df1f6ef45a5a670e93a67e3a911192358fe4040a008fd42cd3ef2eb04b5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a42df1f6ef45a5a670e93a67e3a911192358fe4040a008fd42cd3ef2eb04b5ee->leave($__internal_a42df1f6ef45a5a670e93a67e3a911192358fe4040a008fd42cd3ef2eb04b5ee_prof);

        
        $__internal_8add5b2de574cb134e8b386bae1bd3feb53cda41f20e45da60c95caccc7a3a77->leave($__internal_8add5b2de574cb134e8b386bae1bd3feb53cda41f20e45da60c95caccc7a3a77_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_af407d04dc374a765de1263b66f05c1876c4a99ef62c77a63b0a401156c44d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af407d04dc374a765de1263b66f05c1876c4a99ef62c77a63b0a401156c44d01->enter($__internal_af407d04dc374a765de1263b66f05c1876c4a99ef62c77a63b0a401156c44d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4a1ca3f104e7a1c788cb36155392a4df21953771538ccc43f15b042357ac02eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1ca3f104e7a1c788cb36155392a4df21953771538ccc43f15b042357ac02eb->enter($__internal_4a1ca3f104e7a1c788cb36155392a4df21953771538ccc43f15b042357ac02eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4a1ca3f104e7a1c788cb36155392a4df21953771538ccc43f15b042357ac02eb->leave($__internal_4a1ca3f104e7a1c788cb36155392a4df21953771538ccc43f15b042357ac02eb_prof);

        
        $__internal_af407d04dc374a765de1263b66f05c1876c4a99ef62c77a63b0a401156c44d01->leave($__internal_af407d04dc374a765de1263b66f05c1876c4a99ef62c77a63b0a401156c44d01_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_add2af45d0b644e9f57c634aa528d3ce8a36b9f900a7a64e75af800211ff27a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add2af45d0b644e9f57c634aa528d3ce8a36b9f900a7a64e75af800211ff27a0->enter($__internal_add2af45d0b644e9f57c634aa528d3ce8a36b9f900a7a64e75af800211ff27a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4097859d4cd550930ebc3787e79535945115759c259b38e06e9d3c9adc8e6157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4097859d4cd550930ebc3787e79535945115759c259b38e06e9d3c9adc8e6157->enter($__internal_4097859d4cd550930ebc3787e79535945115759c259b38e06e9d3c9adc8e6157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_4097859d4cd550930ebc3787e79535945115759c259b38e06e9d3c9adc8e6157->leave($__internal_4097859d4cd550930ebc3787e79535945115759c259b38e06e9d3c9adc8e6157_prof);

        
        $__internal_add2af45d0b644e9f57c634aa528d3ce8a36b9f900a7a64e75af800211ff27a0->leave($__internal_add2af45d0b644e9f57c634aa528d3ce8a36b9f900a7a64e75af800211ff27a0_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ead8adf2cc20f366f7a5b0aa4f7ff7471f72c6bce7cf6abd374a5858becb4255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead8adf2cc20f366f7a5b0aa4f7ff7471f72c6bce7cf6abd374a5858becb4255->enter($__internal_ead8adf2cc20f366f7a5b0aa4f7ff7471f72c6bce7cf6abd374a5858becb4255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3a7f5c639ff3a97dbb447fa8f3998c8b8d050c300f9032d45e6034ad5249f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7f5c639ff3a97dbb447fa8f3998c8b8d050c300f9032d45e6034ad5249f7e5->enter($__internal_3a7f5c639ff3a97dbb447fa8f3998c8b8d050c300f9032d45e6034ad5249f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_3a7f5c639ff3a97dbb447fa8f3998c8b8d050c300f9032d45e6034ad5249f7e5->leave($__internal_3a7f5c639ff3a97dbb447fa8f3998c8b8d050c300f9032d45e6034ad5249f7e5_prof);

        
        $__internal_ead8adf2cc20f366f7a5b0aa4f7ff7471f72c6bce7cf6abd374a5858becb4255->leave($__internal_ead8adf2cc20f366f7a5b0aa4f7ff7471f72c6bce7cf6abd374a5858becb4255_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3ee278930a6e9583176b3f34d70c9a0235603b90a84bf08ac9de39652a13e67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee278930a6e9583176b3f34d70c9a0235603b90a84bf08ac9de39652a13e67a->enter($__internal_3ee278930a6e9583176b3f34d70c9a0235603b90a84bf08ac9de39652a13e67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_eb6b59530bea971bb63d9a576ac9f146c2b71ec9099a935873a6d6521d8c1fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b59530bea971bb63d9a576ac9f146c2b71ec9099a935873a6d6521d8c1fb2->enter($__internal_eb6b59530bea971bb63d9a576ac9f146c2b71ec9099a935873a6d6521d8c1fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_eb6b59530bea971bb63d9a576ac9f146c2b71ec9099a935873a6d6521d8c1fb2->leave($__internal_eb6b59530bea971bb63d9a576ac9f146c2b71ec9099a935873a6d6521d8c1fb2_prof);

        
        $__internal_3ee278930a6e9583176b3f34d70c9a0235603b90a84bf08ac9de39652a13e67a->leave($__internal_3ee278930a6e9583176b3f34d70c9a0235603b90a84bf08ac9de39652a13e67a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
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

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

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
", "bootstrap_3_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
