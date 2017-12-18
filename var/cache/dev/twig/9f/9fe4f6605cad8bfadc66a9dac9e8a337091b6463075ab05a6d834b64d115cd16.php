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
        $__internal_c13384a5ae514abf6d32beb79bac683eae27de72a3100781bfe0bcbd93b52e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13384a5ae514abf6d32beb79bac683eae27de72a3100781bfe0bcbd93b52e3e->enter($__internal_c13384a5ae514abf6d32beb79bac683eae27de72a3100781bfe0bcbd93b52e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f4f832af0e04a547ecd16419af4c1c335e8ea42194519eecb2390d2222cfe07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f832af0e04a547ecd16419af4c1c335e8ea42194519eecb2390d2222cfe07c->enter($__internal_f4f832af0e04a547ecd16419af4c1c335e8ea42194519eecb2390d2222cfe07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_c13384a5ae514abf6d32beb79bac683eae27de72a3100781bfe0bcbd93b52e3e->leave($__internal_c13384a5ae514abf6d32beb79bac683eae27de72a3100781bfe0bcbd93b52e3e_prof);

        
        $__internal_f4f832af0e04a547ecd16419af4c1c335e8ea42194519eecb2390d2222cfe07c->leave($__internal_f4f832af0e04a547ecd16419af4c1c335e8ea42194519eecb2390d2222cfe07c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b5d4d1ba64bb228e2c5bc24155ab72588c0779447fde1ad03b1bb2df2879271a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d4d1ba64bb228e2c5bc24155ab72588c0779447fde1ad03b1bb2df2879271a->enter($__internal_b5d4d1ba64bb228e2c5bc24155ab72588c0779447fde1ad03b1bb2df2879271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_465b70c53bbc0058d2ec44acdc6cc01d17af137042a686bdf9819c6bb2359095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465b70c53bbc0058d2ec44acdc6cc01d17af137042a686bdf9819c6bb2359095->enter($__internal_465b70c53bbc0058d2ec44acdc6cc01d17af137042a686bdf9819c6bb2359095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_465b70c53bbc0058d2ec44acdc6cc01d17af137042a686bdf9819c6bb2359095->leave($__internal_465b70c53bbc0058d2ec44acdc6cc01d17af137042a686bdf9819c6bb2359095_prof);

        
        $__internal_b5d4d1ba64bb228e2c5bc24155ab72588c0779447fde1ad03b1bb2df2879271a->leave($__internal_b5d4d1ba64bb228e2c5bc24155ab72588c0779447fde1ad03b1bb2df2879271a_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a099d09a862c52dff02f6ef3d337fec3631cb959c7919eefbdea62b8ca3de1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a099d09a862c52dff02f6ef3d337fec3631cb959c7919eefbdea62b8ca3de1bb->enter($__internal_a099d09a862c52dff02f6ef3d337fec3631cb959c7919eefbdea62b8ca3de1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_872ecfc21f38d3c82b05b3fc858b43acb879957dbbaa29e413cfdb959100ef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ecfc21f38d3c82b05b3fc858b43acb879957dbbaa29e413cfdb959100ef82->enter($__internal_872ecfc21f38d3c82b05b3fc858b43acb879957dbbaa29e413cfdb959100ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_872ecfc21f38d3c82b05b3fc858b43acb879957dbbaa29e413cfdb959100ef82->leave($__internal_872ecfc21f38d3c82b05b3fc858b43acb879957dbbaa29e413cfdb959100ef82_prof);

        
        $__internal_a099d09a862c52dff02f6ef3d337fec3631cb959c7919eefbdea62b8ca3de1bb->leave($__internal_a099d09a862c52dff02f6ef3d337fec3631cb959c7919eefbdea62b8ca3de1bb_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b1e89688d6330f3472dba06988cbb1c5334a2366fc48d00a0d05e773561af866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e89688d6330f3472dba06988cbb1c5334a2366fc48d00a0d05e773561af866->enter($__internal_b1e89688d6330f3472dba06988cbb1c5334a2366fc48d00a0d05e773561af866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_19a6180096f67f1d512a100dbd1b6ef2ace1494cb4db6c14af34601c5f410d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a6180096f67f1d512a100dbd1b6ef2ace1494cb4db6c14af34601c5f410d8a->enter($__internal_19a6180096f67f1d512a100dbd1b6ef2ace1494cb4db6c14af34601c5f410d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_19a6180096f67f1d512a100dbd1b6ef2ace1494cb4db6c14af34601c5f410d8a->leave($__internal_19a6180096f67f1d512a100dbd1b6ef2ace1494cb4db6c14af34601c5f410d8a_prof);

        
        $__internal_b1e89688d6330f3472dba06988cbb1c5334a2366fc48d00a0d05e773561af866->leave($__internal_b1e89688d6330f3472dba06988cbb1c5334a2366fc48d00a0d05e773561af866_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_735327d59329dccfaa6d9f5ded19c6836b50190c997bbab52210b6170f562998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735327d59329dccfaa6d9f5ded19c6836b50190c997bbab52210b6170f562998->enter($__internal_735327d59329dccfaa6d9f5ded19c6836b50190c997bbab52210b6170f562998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_57eddbf674d435593780219a74f0bb32e353e6913094bd6a681565d7c54ee10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eddbf674d435593780219a74f0bb32e353e6913094bd6a681565d7c54ee10a->enter($__internal_57eddbf674d435593780219a74f0bb32e353e6913094bd6a681565d7c54ee10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_57eddbf674d435593780219a74f0bb32e353e6913094bd6a681565d7c54ee10a->leave($__internal_57eddbf674d435593780219a74f0bb32e353e6913094bd6a681565d7c54ee10a_prof);

        
        $__internal_735327d59329dccfaa6d9f5ded19c6836b50190c997bbab52210b6170f562998->leave($__internal_735327d59329dccfaa6d9f5ded19c6836b50190c997bbab52210b6170f562998_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff724014193bca0dd0756fd65e3956cfa722ec3915e9f97b4c290690c3c1db5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff724014193bca0dd0756fd65e3956cfa722ec3915e9f97b4c290690c3c1db5f->enter($__internal_ff724014193bca0dd0756fd65e3956cfa722ec3915e9f97b4c290690c3c1db5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_af00d52d04d447e4e1941f6ce8ecd73c8e5a35a16201d9081c5bf8af51bf1c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af00d52d04d447e4e1941f6ce8ecd73c8e5a35a16201d9081c5bf8af51bf1c41->enter($__internal_af00d52d04d447e4e1941f6ce8ecd73c8e5a35a16201d9081c5bf8af51bf1c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_af00d52d04d447e4e1941f6ce8ecd73c8e5a35a16201d9081c5bf8af51bf1c41->leave($__internal_af00d52d04d447e4e1941f6ce8ecd73c8e5a35a16201d9081c5bf8af51bf1c41_prof);

        
        $__internal_ff724014193bca0dd0756fd65e3956cfa722ec3915e9f97b4c290690c3c1db5f->leave($__internal_ff724014193bca0dd0756fd65e3956cfa722ec3915e9f97b4c290690c3c1db5f_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a663911c58a099baf1a62a2ab816ee2e2912f19b5477e945e0b7963f9cc96284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a663911c58a099baf1a62a2ab816ee2e2912f19b5477e945e0b7963f9cc96284->enter($__internal_a663911c58a099baf1a62a2ab816ee2e2912f19b5477e945e0b7963f9cc96284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_8da395c6c11b2c2fb91138a716f473a4c83bcaba39101b09e2045b10404b8b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da395c6c11b2c2fb91138a716f473a4c83bcaba39101b09e2045b10404b8b8c->enter($__internal_8da395c6c11b2c2fb91138a716f473a4c83bcaba39101b09e2045b10404b8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8da395c6c11b2c2fb91138a716f473a4c83bcaba39101b09e2045b10404b8b8c->leave($__internal_8da395c6c11b2c2fb91138a716f473a4c83bcaba39101b09e2045b10404b8b8c_prof);

        
        $__internal_a663911c58a099baf1a62a2ab816ee2e2912f19b5477e945e0b7963f9cc96284->leave($__internal_a663911c58a099baf1a62a2ab816ee2e2912f19b5477e945e0b7963f9cc96284_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_1a6be6c15ea9359224c3a2ad943c23899dba2d36e4948c974947297ed4e9ebf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6be6c15ea9359224c3a2ad943c23899dba2d36e4948c974947297ed4e9ebf1->enter($__internal_1a6be6c15ea9359224c3a2ad943c23899dba2d36e4948c974947297ed4e9ebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5b5ab97c69d15cad1264ad1bf953e609327fe63b2123cb3122dfe66313c7ac61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5ab97c69d15cad1264ad1bf953e609327fe63b2123cb3122dfe66313c7ac61->enter($__internal_5b5ab97c69d15cad1264ad1bf953e609327fe63b2123cb3122dfe66313c7ac61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5b5ab97c69d15cad1264ad1bf953e609327fe63b2123cb3122dfe66313c7ac61->leave($__internal_5b5ab97c69d15cad1264ad1bf953e609327fe63b2123cb3122dfe66313c7ac61_prof);

        
        $__internal_1a6be6c15ea9359224c3a2ad943c23899dba2d36e4948c974947297ed4e9ebf1->leave($__internal_1a6be6c15ea9359224c3a2ad943c23899dba2d36e4948c974947297ed4e9ebf1_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8bf1efc1bb5b0445438d0565f3c4570ed3ff644de83374d78ec44171231d42b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf1efc1bb5b0445438d0565f3c4570ed3ff644de83374d78ec44171231d42b5->enter($__internal_8bf1efc1bb5b0445438d0565f3c4570ed3ff644de83374d78ec44171231d42b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d4d6a4308c64fc983d1954d4870e5719f2f35210f3757831a58218ab16b1247d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d6a4308c64fc983d1954d4870e5719f2f35210f3757831a58218ab16b1247d->enter($__internal_d4d6a4308c64fc983d1954d4870e5719f2f35210f3757831a58218ab16b1247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d4d6a4308c64fc983d1954d4870e5719f2f35210f3757831a58218ab16b1247d->leave($__internal_d4d6a4308c64fc983d1954d4870e5719f2f35210f3757831a58218ab16b1247d_prof);

        
        $__internal_8bf1efc1bb5b0445438d0565f3c4570ed3ff644de83374d78ec44171231d42b5->leave($__internal_8bf1efc1bb5b0445438d0565f3c4570ed3ff644de83374d78ec44171231d42b5_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1c8d109ebcafac23dd0b819e1f3e952b7bd78bb4fa4802c14514348bbbd4d0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8d109ebcafac23dd0b819e1f3e952b7bd78bb4fa4802c14514348bbbd4d0f7->enter($__internal_1c8d109ebcafac23dd0b819e1f3e952b7bd78bb4fa4802c14514348bbbd4d0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_21a6cc146370b8b81c1b4662351627699b1d0130f97a5b6cd0fad99bed99d192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a6cc146370b8b81c1b4662351627699b1d0130f97a5b6cd0fad99bed99d192->enter($__internal_21a6cc146370b8b81c1b4662351627699b1d0130f97a5b6cd0fad99bed99d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_21a6cc146370b8b81c1b4662351627699b1d0130f97a5b6cd0fad99bed99d192->leave($__internal_21a6cc146370b8b81c1b4662351627699b1d0130f97a5b6cd0fad99bed99d192_prof);

        
        $__internal_1c8d109ebcafac23dd0b819e1f3e952b7bd78bb4fa4802c14514348bbbd4d0f7->leave($__internal_1c8d109ebcafac23dd0b819e1f3e952b7bd78bb4fa4802c14514348bbbd4d0f7_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8b315c07f40514ca59da42839b7f8aaa7c86162fc390446d43e42541c7d9437b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b315c07f40514ca59da42839b7f8aaa7c86162fc390446d43e42541c7d9437b->enter($__internal_8b315c07f40514ca59da42839b7f8aaa7c86162fc390446d43e42541c7d9437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9ca8bc9797ce9dd616e7e6ec59e90247cab996376f35ae8c48c4ac011f8539d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca8bc9797ce9dd616e7e6ec59e90247cab996376f35ae8c48c4ac011f8539d0->enter($__internal_9ca8bc9797ce9dd616e7e6ec59e90247cab996376f35ae8c48c4ac011f8539d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9ca8bc9797ce9dd616e7e6ec59e90247cab996376f35ae8c48c4ac011f8539d0->leave($__internal_9ca8bc9797ce9dd616e7e6ec59e90247cab996376f35ae8c48c4ac011f8539d0_prof);

        
        $__internal_8b315c07f40514ca59da42839b7f8aaa7c86162fc390446d43e42541c7d9437b->leave($__internal_8b315c07f40514ca59da42839b7f8aaa7c86162fc390446d43e42541c7d9437b_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_28fff04b703aa0d7a3766c78490b392a8c58d9378774fe9f2fbf2053dc26e85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fff04b703aa0d7a3766c78490b392a8c58d9378774fe9f2fbf2053dc26e85d->enter($__internal_28fff04b703aa0d7a3766c78490b392a8c58d9378774fe9f2fbf2053dc26e85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ef633ce0a6ff0217ceff2610e46967d863218a1020ad0fdda37c98446f9c7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef633ce0a6ff0217ceff2610e46967d863218a1020ad0fdda37c98446f9c7e7->enter($__internal_0ef633ce0a6ff0217ceff2610e46967d863218a1020ad0fdda37c98446f9c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_0ef633ce0a6ff0217ceff2610e46967d863218a1020ad0fdda37c98446f9c7e7->leave($__internal_0ef633ce0a6ff0217ceff2610e46967d863218a1020ad0fdda37c98446f9c7e7_prof);

        
        $__internal_28fff04b703aa0d7a3766c78490b392a8c58d9378774fe9f2fbf2053dc26e85d->leave($__internal_28fff04b703aa0d7a3766c78490b392a8c58d9378774fe9f2fbf2053dc26e85d_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_aa55000e7d5ed0d7c0a3c749ebc65428968d82b7e932896803931ca4b18b8bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa55000e7d5ed0d7c0a3c749ebc65428968d82b7e932896803931ca4b18b8bd7->enter($__internal_aa55000e7d5ed0d7c0a3c749ebc65428968d82b7e932896803931ca4b18b8bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f97823dcc2edd98a3347fc67469727bdf34aade65fe6f11e83a06b1ba9e92180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97823dcc2edd98a3347fc67469727bdf34aade65fe6f11e83a06b1ba9e92180->enter($__internal_f97823dcc2edd98a3347fc67469727bdf34aade65fe6f11e83a06b1ba9e92180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f97823dcc2edd98a3347fc67469727bdf34aade65fe6f11e83a06b1ba9e92180->leave($__internal_f97823dcc2edd98a3347fc67469727bdf34aade65fe6f11e83a06b1ba9e92180_prof);

        
        $__internal_aa55000e7d5ed0d7c0a3c749ebc65428968d82b7e932896803931ca4b18b8bd7->leave($__internal_aa55000e7d5ed0d7c0a3c749ebc65428968d82b7e932896803931ca4b18b8bd7_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c04b8c917f09242e72a20af773e48fe41e3cc065bcada0988e057c49b20f2b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04b8c917f09242e72a20af773e48fe41e3cc065bcada0988e057c49b20f2b99->enter($__internal_c04b8c917f09242e72a20af773e48fe41e3cc065bcada0988e057c49b20f2b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ec7502e8297982158af20b82fcea04e0a2144769ca780fd11d3d665c3f3b3245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7502e8297982158af20b82fcea04e0a2144769ca780fd11d3d665c3f3b3245->enter($__internal_ec7502e8297982158af20b82fcea04e0a2144769ca780fd11d3d665c3f3b3245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ec7502e8297982158af20b82fcea04e0a2144769ca780fd11d3d665c3f3b3245->leave($__internal_ec7502e8297982158af20b82fcea04e0a2144769ca780fd11d3d665c3f3b3245_prof);

        
        $__internal_c04b8c917f09242e72a20af773e48fe41e3cc065bcada0988e057c49b20f2b99->leave($__internal_c04b8c917f09242e72a20af773e48fe41e3cc065bcada0988e057c49b20f2b99_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_898321784c36146ba050afb031a30a80216f5f8abc7248e63f460641afaa9ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898321784c36146ba050afb031a30a80216f5f8abc7248e63f460641afaa9ed2->enter($__internal_898321784c36146ba050afb031a30a80216f5f8abc7248e63f460641afaa9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f87fd4d3b43707541b6fd09f3e13d160b0ba02dddcaa89ed0667bbc7b8e3cbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87fd4d3b43707541b6fd09f3e13d160b0ba02dddcaa89ed0667bbc7b8e3cbea->enter($__internal_f87fd4d3b43707541b6fd09f3e13d160b0ba02dddcaa89ed0667bbc7b8e3cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f87fd4d3b43707541b6fd09f3e13d160b0ba02dddcaa89ed0667bbc7b8e3cbea->leave($__internal_f87fd4d3b43707541b6fd09f3e13d160b0ba02dddcaa89ed0667bbc7b8e3cbea_prof);

        
        $__internal_898321784c36146ba050afb031a30a80216f5f8abc7248e63f460641afaa9ed2->leave($__internal_898321784c36146ba050afb031a30a80216f5f8abc7248e63f460641afaa9ed2_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6cd53b8e69f2b56562f08f5921163c8870520e81dd8e84714bd0ba2701c4d0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd53b8e69f2b56562f08f5921163c8870520e81dd8e84714bd0ba2701c4d0cf->enter($__internal_6cd53b8e69f2b56562f08f5921163c8870520e81dd8e84714bd0ba2701c4d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_58c3c4a5406deca7f3aa6eadd96e33036057eb6d5a9ab4ee59f1b879834e2842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c3c4a5406deca7f3aa6eadd96e33036057eb6d5a9ab4ee59f1b879834e2842->enter($__internal_58c3c4a5406deca7f3aa6eadd96e33036057eb6d5a9ab4ee59f1b879834e2842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_58c3c4a5406deca7f3aa6eadd96e33036057eb6d5a9ab4ee59f1b879834e2842->leave($__internal_58c3c4a5406deca7f3aa6eadd96e33036057eb6d5a9ab4ee59f1b879834e2842_prof);

        
        $__internal_6cd53b8e69f2b56562f08f5921163c8870520e81dd8e84714bd0ba2701c4d0cf->leave($__internal_6cd53b8e69f2b56562f08f5921163c8870520e81dd8e84714bd0ba2701c4d0cf_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_398862e767a129e47b3be36cd52c82ed68e03e8198f50597d501e0818fd735f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398862e767a129e47b3be36cd52c82ed68e03e8198f50597d501e0818fd735f2->enter($__internal_398862e767a129e47b3be36cd52c82ed68e03e8198f50597d501e0818fd735f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_00ca92fd6c1e2f03efab977615d135f7bd618bda669bea7fa3cb026c47aabfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ca92fd6c1e2f03efab977615d135f7bd618bda669bea7fa3cb026c47aabfe8->enter($__internal_00ca92fd6c1e2f03efab977615d135f7bd618bda669bea7fa3cb026c47aabfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_00ca92fd6c1e2f03efab977615d135f7bd618bda669bea7fa3cb026c47aabfe8->leave($__internal_00ca92fd6c1e2f03efab977615d135f7bd618bda669bea7fa3cb026c47aabfe8_prof);

        
        $__internal_398862e767a129e47b3be36cd52c82ed68e03e8198f50597d501e0818fd735f2->leave($__internal_398862e767a129e47b3be36cd52c82ed68e03e8198f50597d501e0818fd735f2_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0c0afff0d91ef04db8cf0baeb1f4762efad363731a159feb0b5f9a2bbe0e13a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0afff0d91ef04db8cf0baeb1f4762efad363731a159feb0b5f9a2bbe0e13a2->enter($__internal_0c0afff0d91ef04db8cf0baeb1f4762efad363731a159feb0b5f9a2bbe0e13a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3387aee8ed54844de2b5d8ac6082c9edbb7151ddba7c17b5897ffcf330e13216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3387aee8ed54844de2b5d8ac6082c9edbb7151ddba7c17b5897ffcf330e13216->enter($__internal_3387aee8ed54844de2b5d8ac6082c9edbb7151ddba7c17b5897ffcf330e13216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3387aee8ed54844de2b5d8ac6082c9edbb7151ddba7c17b5897ffcf330e13216->leave($__internal_3387aee8ed54844de2b5d8ac6082c9edbb7151ddba7c17b5897ffcf330e13216_prof);

        
        $__internal_0c0afff0d91ef04db8cf0baeb1f4762efad363731a159feb0b5f9a2bbe0e13a2->leave($__internal_0c0afff0d91ef04db8cf0baeb1f4762efad363731a159feb0b5f9a2bbe0e13a2_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_66c17e69c3db34d671493b076c3a749f58e93b56d9ef45964dbbe4127404d2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c17e69c3db34d671493b076c3a749f58e93b56d9ef45964dbbe4127404d2dd->enter($__internal_66c17e69c3db34d671493b076c3a749f58e93b56d9ef45964dbbe4127404d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9e54d3fdd2f7b0fdebbeea69e6db23d492ac39e47685e44757c3710c82a95dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e54d3fdd2f7b0fdebbeea69e6db23d492ac39e47685e44757c3710c82a95dce->enter($__internal_9e54d3fdd2f7b0fdebbeea69e6db23d492ac39e47685e44757c3710c82a95dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9e54d3fdd2f7b0fdebbeea69e6db23d492ac39e47685e44757c3710c82a95dce->leave($__internal_9e54d3fdd2f7b0fdebbeea69e6db23d492ac39e47685e44757c3710c82a95dce_prof);

        
        $__internal_66c17e69c3db34d671493b076c3a749f58e93b56d9ef45964dbbe4127404d2dd->leave($__internal_66c17e69c3db34d671493b076c3a749f58e93b56d9ef45964dbbe4127404d2dd_prof);

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
