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
        $__internal_7b1e9524315d4da8f0f6e3d47690d06c8908374d0ee461284b0a9a1b1ae23ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1e9524315d4da8f0f6e3d47690d06c8908374d0ee461284b0a9a1b1ae23ee4->enter($__internal_7b1e9524315d4da8f0f6e3d47690d06c8908374d0ee461284b0a9a1b1ae23ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_336d08eee9b6da20e6dcd41db331a6f629b6e3dd979f6ae67fda80473b447654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336d08eee9b6da20e6dcd41db331a6f629b6e3dd979f6ae67fda80473b447654->enter($__internal_336d08eee9b6da20e6dcd41db331a6f629b6e3dd979f6ae67fda80473b447654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_7b1e9524315d4da8f0f6e3d47690d06c8908374d0ee461284b0a9a1b1ae23ee4->leave($__internal_7b1e9524315d4da8f0f6e3d47690d06c8908374d0ee461284b0a9a1b1ae23ee4_prof);

        
        $__internal_336d08eee9b6da20e6dcd41db331a6f629b6e3dd979f6ae67fda80473b447654->leave($__internal_336d08eee9b6da20e6dcd41db331a6f629b6e3dd979f6ae67fda80473b447654_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f3b839d1a38686698680d9babe347c6e67b8f47c2fdcfc69d78bfd1327ab4b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b839d1a38686698680d9babe347c6e67b8f47c2fdcfc69d78bfd1327ab4b63->enter($__internal_f3b839d1a38686698680d9babe347c6e67b8f47c2fdcfc69d78bfd1327ab4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_298e7e694166269c297dcd992c6c2a6bd6d8e7f38eaedd5a80178c4a678c82f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298e7e694166269c297dcd992c6c2a6bd6d8e7f38eaedd5a80178c4a678c82f8->enter($__internal_298e7e694166269c297dcd992c6c2a6bd6d8e7f38eaedd5a80178c4a678c82f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_298e7e694166269c297dcd992c6c2a6bd6d8e7f38eaedd5a80178c4a678c82f8->leave($__internal_298e7e694166269c297dcd992c6c2a6bd6d8e7f38eaedd5a80178c4a678c82f8_prof);

        
        $__internal_f3b839d1a38686698680d9babe347c6e67b8f47c2fdcfc69d78bfd1327ab4b63->leave($__internal_f3b839d1a38686698680d9babe347c6e67b8f47c2fdcfc69d78bfd1327ab4b63_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9492967160b4cc36b992785d774b27a87e4c3ee754d818225e0c12be710a9206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9492967160b4cc36b992785d774b27a87e4c3ee754d818225e0c12be710a9206->enter($__internal_9492967160b4cc36b992785d774b27a87e4c3ee754d818225e0c12be710a9206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f1be26276de26ca13071cde9a16ebe4a6cd8af14c873ea34a18c555a8c76896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1be26276de26ca13071cde9a16ebe4a6cd8af14c873ea34a18c555a8c76896d->enter($__internal_f1be26276de26ca13071cde9a16ebe4a6cd8af14c873ea34a18c555a8c76896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f1be26276de26ca13071cde9a16ebe4a6cd8af14c873ea34a18c555a8c76896d->leave($__internal_f1be26276de26ca13071cde9a16ebe4a6cd8af14c873ea34a18c555a8c76896d_prof);

        
        $__internal_9492967160b4cc36b992785d774b27a87e4c3ee754d818225e0c12be710a9206->leave($__internal_9492967160b4cc36b992785d774b27a87e4c3ee754d818225e0c12be710a9206_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_316a523917a0049fd163463c7094c75dba44ffac4b31ca3767c76767547e18e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316a523917a0049fd163463c7094c75dba44ffac4b31ca3767c76767547e18e3->enter($__internal_316a523917a0049fd163463c7094c75dba44ffac4b31ca3767c76767547e18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1aa7084ae458b59521fe75bdac09fd39f658b7b3985161f3dbceaddc972b8440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa7084ae458b59521fe75bdac09fd39f658b7b3985161f3dbceaddc972b8440->enter($__internal_1aa7084ae458b59521fe75bdac09fd39f658b7b3985161f3dbceaddc972b8440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1aa7084ae458b59521fe75bdac09fd39f658b7b3985161f3dbceaddc972b8440->leave($__internal_1aa7084ae458b59521fe75bdac09fd39f658b7b3985161f3dbceaddc972b8440_prof);

        
        $__internal_316a523917a0049fd163463c7094c75dba44ffac4b31ca3767c76767547e18e3->leave($__internal_316a523917a0049fd163463c7094c75dba44ffac4b31ca3767c76767547e18e3_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7b622d4ba5364224ebb4af4c4e86909da79b96ce5bb68334686650692fad30ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b622d4ba5364224ebb4af4c4e86909da79b96ce5bb68334686650692fad30ac->enter($__internal_7b622d4ba5364224ebb4af4c4e86909da79b96ce5bb68334686650692fad30ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e0a6529c56239c3479b1e6ed81d70841d0c290e3281e9f45788873c87866696a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a6529c56239c3479b1e6ed81d70841d0c290e3281e9f45788873c87866696a->enter($__internal_e0a6529c56239c3479b1e6ed81d70841d0c290e3281e9f45788873c87866696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e0a6529c56239c3479b1e6ed81d70841d0c290e3281e9f45788873c87866696a->leave($__internal_e0a6529c56239c3479b1e6ed81d70841d0c290e3281e9f45788873c87866696a_prof);

        
        $__internal_7b622d4ba5364224ebb4af4c4e86909da79b96ce5bb68334686650692fad30ac->leave($__internal_7b622d4ba5364224ebb4af4c4e86909da79b96ce5bb68334686650692fad30ac_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a935abfff5ab42c499c786e0221558249d5ed921dba435a9e37c4292412cdbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a935abfff5ab42c499c786e0221558249d5ed921dba435a9e37c4292412cdbb7->enter($__internal_a935abfff5ab42c499c786e0221558249d5ed921dba435a9e37c4292412cdbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e4f5252a89f8a63902ddcd9b62bc1ebd678abef3919628254f9d8b68e1c70666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f5252a89f8a63902ddcd9b62bc1ebd678abef3919628254f9d8b68e1c70666->enter($__internal_e4f5252a89f8a63902ddcd9b62bc1ebd678abef3919628254f9d8b68e1c70666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e4f5252a89f8a63902ddcd9b62bc1ebd678abef3919628254f9d8b68e1c70666->leave($__internal_e4f5252a89f8a63902ddcd9b62bc1ebd678abef3919628254f9d8b68e1c70666_prof);

        
        $__internal_a935abfff5ab42c499c786e0221558249d5ed921dba435a9e37c4292412cdbb7->leave($__internal_a935abfff5ab42c499c786e0221558249d5ed921dba435a9e37c4292412cdbb7_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_26697a58290ffda8179d4aaa52064bdbcb2d6ef47a77a113ce2b184453cb4812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26697a58290ffda8179d4aaa52064bdbcb2d6ef47a77a113ce2b184453cb4812->enter($__internal_26697a58290ffda8179d4aaa52064bdbcb2d6ef47a77a113ce2b184453cb4812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_29a1602b153b81003886121ea96639681b42ee59bf81f5480ca3549011eb0bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a1602b153b81003886121ea96639681b42ee59bf81f5480ca3549011eb0bab->enter($__internal_29a1602b153b81003886121ea96639681b42ee59bf81f5480ca3549011eb0bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_29a1602b153b81003886121ea96639681b42ee59bf81f5480ca3549011eb0bab->leave($__internal_29a1602b153b81003886121ea96639681b42ee59bf81f5480ca3549011eb0bab_prof);

        
        $__internal_26697a58290ffda8179d4aaa52064bdbcb2d6ef47a77a113ce2b184453cb4812->leave($__internal_26697a58290ffda8179d4aaa52064bdbcb2d6ef47a77a113ce2b184453cb4812_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4bd9a02c5f1970afd29aeef98cdd872ad106cc2b7d8e381ed4c21cab3d5207a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd9a02c5f1970afd29aeef98cdd872ad106cc2b7d8e381ed4c21cab3d5207a9->enter($__internal_4bd9a02c5f1970afd29aeef98cdd872ad106cc2b7d8e381ed4c21cab3d5207a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0c5bbf2fb0b86216f229762e8c2c1c37551405588594a49ef3903436af231332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5bbf2fb0b86216f229762e8c2c1c37551405588594a49ef3903436af231332->enter($__internal_0c5bbf2fb0b86216f229762e8c2c1c37551405588594a49ef3903436af231332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0c5bbf2fb0b86216f229762e8c2c1c37551405588594a49ef3903436af231332->leave($__internal_0c5bbf2fb0b86216f229762e8c2c1c37551405588594a49ef3903436af231332_prof);

        
        $__internal_4bd9a02c5f1970afd29aeef98cdd872ad106cc2b7d8e381ed4c21cab3d5207a9->leave($__internal_4bd9a02c5f1970afd29aeef98cdd872ad106cc2b7d8e381ed4c21cab3d5207a9_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_acc50094086ea3b2a14a1937b82fc45e08ef955654362c9d5680db45b3374cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc50094086ea3b2a14a1937b82fc45e08ef955654362c9d5680db45b3374cb5->enter($__internal_acc50094086ea3b2a14a1937b82fc45e08ef955654362c9d5680db45b3374cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_01f068ca93db19f234bfd07c5e2b0397bf8e3a18ae190d890548a750bb6ae692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f068ca93db19f234bfd07c5e2b0397bf8e3a18ae190d890548a750bb6ae692->enter($__internal_01f068ca93db19f234bfd07c5e2b0397bf8e3a18ae190d890548a750bb6ae692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_01f068ca93db19f234bfd07c5e2b0397bf8e3a18ae190d890548a750bb6ae692->leave($__internal_01f068ca93db19f234bfd07c5e2b0397bf8e3a18ae190d890548a750bb6ae692_prof);

        
        $__internal_acc50094086ea3b2a14a1937b82fc45e08ef955654362c9d5680db45b3374cb5->leave($__internal_acc50094086ea3b2a14a1937b82fc45e08ef955654362c9d5680db45b3374cb5_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0c2c1bb857bcaa3544a762bea04a838f5faa32ac9e2a47312e964bce47126ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2c1bb857bcaa3544a762bea04a838f5faa32ac9e2a47312e964bce47126ab1->enter($__internal_0c2c1bb857bcaa3544a762bea04a838f5faa32ac9e2a47312e964bce47126ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b4ae0962f515ecd095a156aa3e11e5d6e436bc0e58b5a36f503cf686eeffc5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ae0962f515ecd095a156aa3e11e5d6e436bc0e58b5a36f503cf686eeffc5d4->enter($__internal_b4ae0962f515ecd095a156aa3e11e5d6e436bc0e58b5a36f503cf686eeffc5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_b4ae0962f515ecd095a156aa3e11e5d6e436bc0e58b5a36f503cf686eeffc5d4->leave($__internal_b4ae0962f515ecd095a156aa3e11e5d6e436bc0e58b5a36f503cf686eeffc5d4_prof);

        
        $__internal_0c2c1bb857bcaa3544a762bea04a838f5faa32ac9e2a47312e964bce47126ab1->leave($__internal_0c2c1bb857bcaa3544a762bea04a838f5faa32ac9e2a47312e964bce47126ab1_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9f7728ed834d5f053e9d6b0ac77f146d6cb9431b6d21cade2a786186412045bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7728ed834d5f053e9d6b0ac77f146d6cb9431b6d21cade2a786186412045bb->enter($__internal_9f7728ed834d5f053e9d6b0ac77f146d6cb9431b6d21cade2a786186412045bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_41771abfc9d2f4fc26817d9753ee07990888a84933227d592515386e2af67515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41771abfc9d2f4fc26817d9753ee07990888a84933227d592515386e2af67515->enter($__internal_41771abfc9d2f4fc26817d9753ee07990888a84933227d592515386e2af67515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_41771abfc9d2f4fc26817d9753ee07990888a84933227d592515386e2af67515->leave($__internal_41771abfc9d2f4fc26817d9753ee07990888a84933227d592515386e2af67515_prof);

        
        $__internal_9f7728ed834d5f053e9d6b0ac77f146d6cb9431b6d21cade2a786186412045bb->leave($__internal_9f7728ed834d5f053e9d6b0ac77f146d6cb9431b6d21cade2a786186412045bb_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_20f39dd917f46619c9facedf926464ab4f244e837a8fe50d54a3c20eabdec346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f39dd917f46619c9facedf926464ab4f244e837a8fe50d54a3c20eabdec346->enter($__internal_20f39dd917f46619c9facedf926464ab4f244e837a8fe50d54a3c20eabdec346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f8090c8692426ebccc9ffd38297304fb44448f69b8a98cc48d73b8bebeb96859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8090c8692426ebccc9ffd38297304fb44448f69b8a98cc48d73b8bebeb96859->enter($__internal_f8090c8692426ebccc9ffd38297304fb44448f69b8a98cc48d73b8bebeb96859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_f8090c8692426ebccc9ffd38297304fb44448f69b8a98cc48d73b8bebeb96859->leave($__internal_f8090c8692426ebccc9ffd38297304fb44448f69b8a98cc48d73b8bebeb96859_prof);

        
        $__internal_20f39dd917f46619c9facedf926464ab4f244e837a8fe50d54a3c20eabdec346->leave($__internal_20f39dd917f46619c9facedf926464ab4f244e837a8fe50d54a3c20eabdec346_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_432f945002884f3a84b5dd3f7bb2bf41506f7ed97d19e783aed4b1b2b099a364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432f945002884f3a84b5dd3f7bb2bf41506f7ed97d19e783aed4b1b2b099a364->enter($__internal_432f945002884f3a84b5dd3f7bb2bf41506f7ed97d19e783aed4b1b2b099a364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_db52259b4dd6740c16ff400b7d09fae80385c842a0085005d4736d8c33c799aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db52259b4dd6740c16ff400b7d09fae80385c842a0085005d4736d8c33c799aa->enter($__internal_db52259b4dd6740c16ff400b7d09fae80385c842a0085005d4736d8c33c799aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_db52259b4dd6740c16ff400b7d09fae80385c842a0085005d4736d8c33c799aa->leave($__internal_db52259b4dd6740c16ff400b7d09fae80385c842a0085005d4736d8c33c799aa_prof);

        
        $__internal_432f945002884f3a84b5dd3f7bb2bf41506f7ed97d19e783aed4b1b2b099a364->leave($__internal_432f945002884f3a84b5dd3f7bb2bf41506f7ed97d19e783aed4b1b2b099a364_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c095a48a8284c7846aab6c13d95ddba13b14abbd6815eb0c4b3c83268e00ab5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c095a48a8284c7846aab6c13d95ddba13b14abbd6815eb0c4b3c83268e00ab5d->enter($__internal_c095a48a8284c7846aab6c13d95ddba13b14abbd6815eb0c4b3c83268e00ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c310a6fc391b42fa89648db713fb95933d5d7bcef96e6837ad55dcaa9ee26a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c310a6fc391b42fa89648db713fb95933d5d7bcef96e6837ad55dcaa9ee26a8f->enter($__internal_c310a6fc391b42fa89648db713fb95933d5d7bcef96e6837ad55dcaa9ee26a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c310a6fc391b42fa89648db713fb95933d5d7bcef96e6837ad55dcaa9ee26a8f->leave($__internal_c310a6fc391b42fa89648db713fb95933d5d7bcef96e6837ad55dcaa9ee26a8f_prof);

        
        $__internal_c095a48a8284c7846aab6c13d95ddba13b14abbd6815eb0c4b3c83268e00ab5d->leave($__internal_c095a48a8284c7846aab6c13d95ddba13b14abbd6815eb0c4b3c83268e00ab5d_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ab65029a3076c214eb2064738cc87d19932c2fd7675697f2f21d1b3174ab3685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab65029a3076c214eb2064738cc87d19932c2fd7675697f2f21d1b3174ab3685->enter($__internal_ab65029a3076c214eb2064738cc87d19932c2fd7675697f2f21d1b3174ab3685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6fd91817e1cff8331cc6d1224544df0fb121026b7bd512e162a39dfbbebd5c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd91817e1cff8331cc6d1224544df0fb121026b7bd512e162a39dfbbebd5c76->enter($__internal_6fd91817e1cff8331cc6d1224544df0fb121026b7bd512e162a39dfbbebd5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6fd91817e1cff8331cc6d1224544df0fb121026b7bd512e162a39dfbbebd5c76->leave($__internal_6fd91817e1cff8331cc6d1224544df0fb121026b7bd512e162a39dfbbebd5c76_prof);

        
        $__internal_ab65029a3076c214eb2064738cc87d19932c2fd7675697f2f21d1b3174ab3685->leave($__internal_ab65029a3076c214eb2064738cc87d19932c2fd7675697f2f21d1b3174ab3685_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8d43b80dff5de6021dbf94187b0366a535ba2a03491c8b5ef4fdfb236bc51e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d43b80dff5de6021dbf94187b0366a535ba2a03491c8b5ef4fdfb236bc51e5b->enter($__internal_8d43b80dff5de6021dbf94187b0366a535ba2a03491c8b5ef4fdfb236bc51e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_54209c5067d5b14c2760994c20fc5921c5eaf710fb496499363d0c9648a8bbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54209c5067d5b14c2760994c20fc5921c5eaf710fb496499363d0c9648a8bbea->enter($__internal_54209c5067d5b14c2760994c20fc5921c5eaf710fb496499363d0c9648a8bbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54209c5067d5b14c2760994c20fc5921c5eaf710fb496499363d0c9648a8bbea->leave($__internal_54209c5067d5b14c2760994c20fc5921c5eaf710fb496499363d0c9648a8bbea_prof);

        
        $__internal_8d43b80dff5de6021dbf94187b0366a535ba2a03491c8b5ef4fdfb236bc51e5b->leave($__internal_8d43b80dff5de6021dbf94187b0366a535ba2a03491c8b5ef4fdfb236bc51e5b_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6a793248fad0df7c1d3efbce48c61a7f451539b84e1b22f58d632df459eaa79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a793248fad0df7c1d3efbce48c61a7f451539b84e1b22f58d632df459eaa79c->enter($__internal_6a793248fad0df7c1d3efbce48c61a7f451539b84e1b22f58d632df459eaa79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_57b5b137d5adf9ff6fa16a1179e042f63ab77f3cca055b3a2af4d04f93472028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b5b137d5adf9ff6fa16a1179e042f63ab77f3cca055b3a2af4d04f93472028->enter($__internal_57b5b137d5adf9ff6fa16a1179e042f63ab77f3cca055b3a2af4d04f93472028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_57b5b137d5adf9ff6fa16a1179e042f63ab77f3cca055b3a2af4d04f93472028->leave($__internal_57b5b137d5adf9ff6fa16a1179e042f63ab77f3cca055b3a2af4d04f93472028_prof);

        
        $__internal_6a793248fad0df7c1d3efbce48c61a7f451539b84e1b22f58d632df459eaa79c->leave($__internal_6a793248fad0df7c1d3efbce48c61a7f451539b84e1b22f58d632df459eaa79c_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_322d2d5f89dacd34b10734887f6b3babb6e6a31fa6e693faff6f56a45201a76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322d2d5f89dacd34b10734887f6b3babb6e6a31fa6e693faff6f56a45201a76d->enter($__internal_322d2d5f89dacd34b10734887f6b3babb6e6a31fa6e693faff6f56a45201a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9788e5b0113b976c281006e5a7d6c838ded3595db4861b29271713e6bcaedf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9788e5b0113b976c281006e5a7d6c838ded3595db4861b29271713e6bcaedf26->enter($__internal_9788e5b0113b976c281006e5a7d6c838ded3595db4861b29271713e6bcaedf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_9788e5b0113b976c281006e5a7d6c838ded3595db4861b29271713e6bcaedf26->leave($__internal_9788e5b0113b976c281006e5a7d6c838ded3595db4861b29271713e6bcaedf26_prof);

        
        $__internal_322d2d5f89dacd34b10734887f6b3babb6e6a31fa6e693faff6f56a45201a76d->leave($__internal_322d2d5f89dacd34b10734887f6b3babb6e6a31fa6e693faff6f56a45201a76d_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4ad5010ab186254b318bd5cb2bd7fc8596854c6adcdaf323bdd8c47e55046970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad5010ab186254b318bd5cb2bd7fc8596854c6adcdaf323bdd8c47e55046970->enter($__internal_4ad5010ab186254b318bd5cb2bd7fc8596854c6adcdaf323bdd8c47e55046970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_934b9f357c969d1cb10360d8ac509bbf140316fd07e461b457baf946e2686e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934b9f357c969d1cb10360d8ac509bbf140316fd07e461b457baf946e2686e55->enter($__internal_934b9f357c969d1cb10360d8ac509bbf140316fd07e461b457baf946e2686e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_934b9f357c969d1cb10360d8ac509bbf140316fd07e461b457baf946e2686e55->leave($__internal_934b9f357c969d1cb10360d8ac509bbf140316fd07e461b457baf946e2686e55_prof);

        
        $__internal_4ad5010ab186254b318bd5cb2bd7fc8596854c6adcdaf323bdd8c47e55046970->leave($__internal_4ad5010ab186254b318bd5cb2bd7fc8596854c6adcdaf323bdd8c47e55046970_prof);

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
