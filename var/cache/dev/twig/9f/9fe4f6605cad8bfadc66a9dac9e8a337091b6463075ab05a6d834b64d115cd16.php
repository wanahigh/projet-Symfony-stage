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
        $__internal_dc29bf57e1c6818f503dd812d6bd3d595152ba5af5aa8177b04245270f83864b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc29bf57e1c6818f503dd812d6bd3d595152ba5af5aa8177b04245270f83864b->enter($__internal_dc29bf57e1c6818f503dd812d6bd3d595152ba5af5aa8177b04245270f83864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_be01ef82d0d546771ac8e5df773b57054d02ee1e31088622b459a0f181b5168e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be01ef82d0d546771ac8e5df773b57054d02ee1e31088622b459a0f181b5168e->enter($__internal_be01ef82d0d546771ac8e5df773b57054d02ee1e31088622b459a0f181b5168e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_dc29bf57e1c6818f503dd812d6bd3d595152ba5af5aa8177b04245270f83864b->leave($__internal_dc29bf57e1c6818f503dd812d6bd3d595152ba5af5aa8177b04245270f83864b_prof);

        
        $__internal_be01ef82d0d546771ac8e5df773b57054d02ee1e31088622b459a0f181b5168e->leave($__internal_be01ef82d0d546771ac8e5df773b57054d02ee1e31088622b459a0f181b5168e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_88c912659437cdba22c889cf346db232de487e43aa5253dcbb78a7f7e8f05c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c912659437cdba22c889cf346db232de487e43aa5253dcbb78a7f7e8f05c5d->enter($__internal_88c912659437cdba22c889cf346db232de487e43aa5253dcbb78a7f7e8f05c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b9dfca2be0542d79ecc5c88e8a886a4d446f269adcbfeab64f76fe650eff430a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dfca2be0542d79ecc5c88e8a886a4d446f269adcbfeab64f76fe650eff430a->enter($__internal_b9dfca2be0542d79ecc5c88e8a886a4d446f269adcbfeab64f76fe650eff430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b9dfca2be0542d79ecc5c88e8a886a4d446f269adcbfeab64f76fe650eff430a->leave($__internal_b9dfca2be0542d79ecc5c88e8a886a4d446f269adcbfeab64f76fe650eff430a_prof);

        
        $__internal_88c912659437cdba22c889cf346db232de487e43aa5253dcbb78a7f7e8f05c5d->leave($__internal_88c912659437cdba22c889cf346db232de487e43aa5253dcbb78a7f7e8f05c5d_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2bea27278f67a1a5bb6642a905a2e13f7e8cb86147593791bcd14ccae60f0a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bea27278f67a1a5bb6642a905a2e13f7e8cb86147593791bcd14ccae60f0a70->enter($__internal_2bea27278f67a1a5bb6642a905a2e13f7e8cb86147593791bcd14ccae60f0a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_71b612c76f1cb977701aafa5d685314c3eaa8032a472bb0dcf23c89a4b784619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b612c76f1cb977701aafa5d685314c3eaa8032a472bb0dcf23c89a4b784619->enter($__internal_71b612c76f1cb977701aafa5d685314c3eaa8032a472bb0dcf23c89a4b784619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-Default")) : ("btn-Default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_71b612c76f1cb977701aafa5d685314c3eaa8032a472bb0dcf23c89a4b784619->leave($__internal_71b612c76f1cb977701aafa5d685314c3eaa8032a472bb0dcf23c89a4b784619_prof);

        
        $__internal_2bea27278f67a1a5bb6642a905a2e13f7e8cb86147593791bcd14ccae60f0a70->leave($__internal_2bea27278f67a1a5bb6642a905a2e13f7e8cb86147593791bcd14ccae60f0a70_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3afa7aca755f703120fb86bb4eb82b2a0be52597d2be3df645a207dfe7d26045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afa7aca755f703120fb86bb4eb82b2a0be52597d2be3df645a207dfe7d26045->enter($__internal_3afa7aca755f703120fb86bb4eb82b2a0be52597d2be3df645a207dfe7d26045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d377d59504c6cbb1108f887dacc884e371fe93107fd1d2233375433dcbce8e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d377d59504c6cbb1108f887dacc884e371fe93107fd1d2233375433dcbce8e7e->enter($__internal_d377d59504c6cbb1108f887dacc884e371fe93107fd1d2233375433dcbce8e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_d377d59504c6cbb1108f887dacc884e371fe93107fd1d2233375433dcbce8e7e->leave($__internal_d377d59504c6cbb1108f887dacc884e371fe93107fd1d2233375433dcbce8e7e_prof);

        
        $__internal_3afa7aca755f703120fb86bb4eb82b2a0be52597d2be3df645a207dfe7d26045->leave($__internal_3afa7aca755f703120fb86bb4eb82b2a0be52597d2be3df645a207dfe7d26045_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5d5556d388374d7ef21e79e624abecc0b9057a97b769f8f4140010eb96b50b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5556d388374d7ef21e79e624abecc0b9057a97b769f8f4140010eb96b50b61->enter($__internal_5d5556d388374d7ef21e79e624abecc0b9057a97b769f8f4140010eb96b50b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f79953530741150c8e9eb1ff2b7d1e1bfd53e9a4b3d0a66e77d781ddcdc5d339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79953530741150c8e9eb1ff2b7d1e1bfd53e9a4b3d0a66e77d781ddcdc5d339->enter($__internal_f79953530741150c8e9eb1ff2b7d1e1bfd53e9a4b3d0a66e77d781ddcdc5d339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f79953530741150c8e9eb1ff2b7d1e1bfd53e9a4b3d0a66e77d781ddcdc5d339->leave($__internal_f79953530741150c8e9eb1ff2b7d1e1bfd53e9a4b3d0a66e77d781ddcdc5d339_prof);

        
        $__internal_5d5556d388374d7ef21e79e624abecc0b9057a97b769f8f4140010eb96b50b61->leave($__internal_5d5556d388374d7ef21e79e624abecc0b9057a97b769f8f4140010eb96b50b61_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3a4c87e117b4722b2e34cd1a71148a03885e15808def1863799da61dfd739823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4c87e117b4722b2e34cd1a71148a03885e15808def1863799da61dfd739823->enter($__internal_3a4c87e117b4722b2e34cd1a71148a03885e15808def1863799da61dfd739823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_96c4631afc6e3b5b38bbc4fcf13af1231c836012e43769860becbf75bd52fe64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c4631afc6e3b5b38bbc4fcf13af1231c836012e43769860becbf75bd52fe64->enter($__internal_96c4631afc6e3b5b38bbc4fcf13af1231c836012e43769860becbf75bd52fe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_96c4631afc6e3b5b38bbc4fcf13af1231c836012e43769860becbf75bd52fe64->leave($__internal_96c4631afc6e3b5b38bbc4fcf13af1231c836012e43769860becbf75bd52fe64_prof);

        
        $__internal_3a4c87e117b4722b2e34cd1a71148a03885e15808def1863799da61dfd739823->leave($__internal_3a4c87e117b4722b2e34cd1a71148a03885e15808def1863799da61dfd739823_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cceed86b83ad63c0161fb2a0963d2dc4626c5d78ef82b540f103a7cc8d9c1e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cceed86b83ad63c0161fb2a0963d2dc4626c5d78ef82b540f103a7cc8d9c1e0e->enter($__internal_cceed86b83ad63c0161fb2a0963d2dc4626c5d78ef82b540f103a7cc8d9c1e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3f5e72b3ede73619afcd2eb807cf3c9e5e451cb5aa00a8596754a91f9c356a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5e72b3ede73619afcd2eb807cf3c9e5e451cb5aa00a8596754a91f9c356a94->enter($__internal_3f5e72b3ede73619afcd2eb807cf3c9e5e451cb5aa00a8596754a91f9c356a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3f5e72b3ede73619afcd2eb807cf3c9e5e451cb5aa00a8596754a91f9c356a94->leave($__internal_3f5e72b3ede73619afcd2eb807cf3c9e5e451cb5aa00a8596754a91f9c356a94_prof);

        
        $__internal_cceed86b83ad63c0161fb2a0963d2dc4626c5d78ef82b540f103a7cc8d9c1e0e->leave($__internal_cceed86b83ad63c0161fb2a0963d2dc4626c5d78ef82b540f103a7cc8d9c1e0e_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e7c8699d6ce540e003270e312271c3c230b5fe13557ce521372da410266304d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c8699d6ce540e003270e312271c3c230b5fe13557ce521372da410266304d6->enter($__internal_e7c8699d6ce540e003270e312271c3c230b5fe13557ce521372da410266304d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_f1a56f321622a81a38ad9bea47d4fbb8575b8e78d00ecd7718a1637fa87dd627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a56f321622a81a38ad9bea47d4fbb8575b8e78d00ecd7718a1637fa87dd627->enter($__internal_f1a56f321622a81a38ad9bea47d4fbb8575b8e78d00ecd7718a1637fa87dd627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f1a56f321622a81a38ad9bea47d4fbb8575b8e78d00ecd7718a1637fa87dd627->leave($__internal_f1a56f321622a81a38ad9bea47d4fbb8575b8e78d00ecd7718a1637fa87dd627_prof);

        
        $__internal_e7c8699d6ce540e003270e312271c3c230b5fe13557ce521372da410266304d6->leave($__internal_e7c8699d6ce540e003270e312271c3c230b5fe13557ce521372da410266304d6_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ce63e5bef1c1d3a57f36a8558422f153b66b87867e6b9f4d167fba2f4ac4bc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce63e5bef1c1d3a57f36a8558422f153b66b87867e6b9f4d167fba2f4ac4bc4d->enter($__internal_ce63e5bef1c1d3a57f36a8558422f153b66b87867e6b9f4d167fba2f4ac4bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d89199652b60cdfbc1db10a0c20e0e5a75ec01b3964bd4392f87b2514ea81664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89199652b60cdfbc1db10a0c20e0e5a75ec01b3964bd4392f87b2514ea81664->enter($__internal_d89199652b60cdfbc1db10a0c20e0e5a75ec01b3964bd4392f87b2514ea81664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d89199652b60cdfbc1db10a0c20e0e5a75ec01b3964bd4392f87b2514ea81664->leave($__internal_d89199652b60cdfbc1db10a0c20e0e5a75ec01b3964bd4392f87b2514ea81664_prof);

        
        $__internal_ce63e5bef1c1d3a57f36a8558422f153b66b87867e6b9f4d167fba2f4ac4bc4d->leave($__internal_ce63e5bef1c1d3a57f36a8558422f153b66b87867e6b9f4d167fba2f4ac4bc4d_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3c94907b55d8bbcedae4d734a971007db807689000193f7c439e324f22e6eca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c94907b55d8bbcedae4d734a971007db807689000193f7c439e324f22e6eca2->enter($__internal_3c94907b55d8bbcedae4d734a971007db807689000193f7c439e324f22e6eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7441367718481ac6332e9d767b38c87df2d7335de349d644aedbee750a87eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7441367718481ac6332e9d767b38c87df2d7335de349d644aedbee750a87eb6f->enter($__internal_7441367718481ac6332e9d767b38c87df2d7335de349d644aedbee750a87eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_7441367718481ac6332e9d767b38c87df2d7335de349d644aedbee750a87eb6f->leave($__internal_7441367718481ac6332e9d767b38c87df2d7335de349d644aedbee750a87eb6f_prof);

        
        $__internal_3c94907b55d8bbcedae4d734a971007db807689000193f7c439e324f22e6eca2->leave($__internal_3c94907b55d8bbcedae4d734a971007db807689000193f7c439e324f22e6eca2_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d6a17aed175f5f80db3453020b53e1a553070a3c02e78c2c954e47f68752d358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a17aed175f5f80db3453020b53e1a553070a3c02e78c2c954e47f68752d358->enter($__internal_d6a17aed175f5f80db3453020b53e1a553070a3c02e78c2c954e47f68752d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0a37cb19c5fc3c034d495db9563460f9dae2179c2633856de64e4947d9259fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a37cb19c5fc3c034d495db9563460f9dae2179c2633856de64e4947d9259fa6->enter($__internal_0a37cb19c5fc3c034d495db9563460f9dae2179c2633856de64e4947d9259fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0a37cb19c5fc3c034d495db9563460f9dae2179c2633856de64e4947d9259fa6->leave($__internal_0a37cb19c5fc3c034d495db9563460f9dae2179c2633856de64e4947d9259fa6_prof);

        
        $__internal_d6a17aed175f5f80db3453020b53e1a553070a3c02e78c2c954e47f68752d358->leave($__internal_d6a17aed175f5f80db3453020b53e1a553070a3c02e78c2c954e47f68752d358_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d8ea197e79a481f0f324729e25afc18a6ff4c460f8a3c0f576f2f0bf7a85d935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ea197e79a481f0f324729e25afc18a6ff4c460f8a3c0f576f2f0bf7a85d935->enter($__internal_d8ea197e79a481f0f324729e25afc18a6ff4c460f8a3c0f576f2f0bf7a85d935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ce9bb1756ceb4bc8039e35d6e7d9795d56828f04d8bef9335d5246e8ebb5af25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9bb1756ceb4bc8039e35d6e7d9795d56828f04d8bef9335d5246e8ebb5af25->enter($__internal_ce9bb1756ceb4bc8039e35d6e7d9795d56828f04d8bef9335d5246e8ebb5af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_ce9bb1756ceb4bc8039e35d6e7d9795d56828f04d8bef9335d5246e8ebb5af25->leave($__internal_ce9bb1756ceb4bc8039e35d6e7d9795d56828f04d8bef9335d5246e8ebb5af25_prof);

        
        $__internal_d8ea197e79a481f0f324729e25afc18a6ff4c460f8a3c0f576f2f0bf7a85d935->leave($__internal_d8ea197e79a481f0f324729e25afc18a6ff4c460f8a3c0f576f2f0bf7a85d935_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a5866683cb6e1f3b51f4ed830f83753c7ef157303396a9fad69f4396ce88d735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5866683cb6e1f3b51f4ed830f83753c7ef157303396a9fad69f4396ce88d735->enter($__internal_a5866683cb6e1f3b51f4ed830f83753c7ef157303396a9fad69f4396ce88d735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8132b5db512b546d7d6a3129af1108848d9aafb99dff154c1945a63495fa826b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8132b5db512b546d7d6a3129af1108848d9aafb99dff154c1945a63495fa826b->enter($__internal_8132b5db512b546d7d6a3129af1108848d9aafb99dff154c1945a63495fa826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8132b5db512b546d7d6a3129af1108848d9aafb99dff154c1945a63495fa826b->leave($__internal_8132b5db512b546d7d6a3129af1108848d9aafb99dff154c1945a63495fa826b_prof);

        
        $__internal_a5866683cb6e1f3b51f4ed830f83753c7ef157303396a9fad69f4396ce88d735->leave($__internal_a5866683cb6e1f3b51f4ed830f83753c7ef157303396a9fad69f4396ce88d735_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b1e61d0517c3163c2672fae7d4881ffedb571bc77bbde82f853f872b3cb87658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e61d0517c3163c2672fae7d4881ffedb571bc77bbde82f853f872b3cb87658->enter($__internal_b1e61d0517c3163c2672fae7d4881ffedb571bc77bbde82f853f872b3cb87658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cb5cefbee038c301b25ed91506708eb3452b8d00eda3e3227165fe7f888eb40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5cefbee038c301b25ed91506708eb3452b8d00eda3e3227165fe7f888eb40d->enter($__internal_cb5cefbee038c301b25ed91506708eb3452b8d00eda3e3227165fe7f888eb40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cb5cefbee038c301b25ed91506708eb3452b8d00eda3e3227165fe7f888eb40d->leave($__internal_cb5cefbee038c301b25ed91506708eb3452b8d00eda3e3227165fe7f888eb40d_prof);

        
        $__internal_b1e61d0517c3163c2672fae7d4881ffedb571bc77bbde82f853f872b3cb87658->leave($__internal_b1e61d0517c3163c2672fae7d4881ffedb571bc77bbde82f853f872b3cb87658_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_399a8abc1c9a6759e8b495c8f5b3490c8e467cc6a5c71168ea20d596c0308064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399a8abc1c9a6759e8b495c8f5b3490c8e467cc6a5c71168ea20d596c0308064->enter($__internal_399a8abc1c9a6759e8b495c8f5b3490c8e467cc6a5c71168ea20d596c0308064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_60bee81131fb80ed1f8917630f907bcf8ff26dd517916cd29818fb6f90cd2242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bee81131fb80ed1f8917630f907bcf8ff26dd517916cd29818fb6f90cd2242->enter($__internal_60bee81131fb80ed1f8917630f907bcf8ff26dd517916cd29818fb6f90cd2242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_60bee81131fb80ed1f8917630f907bcf8ff26dd517916cd29818fb6f90cd2242->leave($__internal_60bee81131fb80ed1f8917630f907bcf8ff26dd517916cd29818fb6f90cd2242_prof);

        
        $__internal_399a8abc1c9a6759e8b495c8f5b3490c8e467cc6a5c71168ea20d596c0308064->leave($__internal_399a8abc1c9a6759e8b495c8f5b3490c8e467cc6a5c71168ea20d596c0308064_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_37a72138c15601c604f7fb99042dff80ba9086cb9c966e960493dd52b60b9f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a72138c15601c604f7fb99042dff80ba9086cb9c966e960493dd52b60b9f0e->enter($__internal_37a72138c15601c604f7fb99042dff80ba9086cb9c966e960493dd52b60b9f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c9c332a802e92346bcf1f9ef750fdf330c0bfd82cb875cb935df52deb6866c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c332a802e92346bcf1f9ef750fdf330c0bfd82cb875cb935df52deb6866c06->enter($__internal_c9c332a802e92346bcf1f9ef750fdf330c0bfd82cb875cb935df52deb6866c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c9c332a802e92346bcf1f9ef750fdf330c0bfd82cb875cb935df52deb6866c06->leave($__internal_c9c332a802e92346bcf1f9ef750fdf330c0bfd82cb875cb935df52deb6866c06_prof);

        
        $__internal_37a72138c15601c604f7fb99042dff80ba9086cb9c966e960493dd52b60b9f0e->leave($__internal_37a72138c15601c604f7fb99042dff80ba9086cb9c966e960493dd52b60b9f0e_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d462e132411722e7807ac8e4c4b59924f044a816f34867eb5a3922bb432c4548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d462e132411722e7807ac8e4c4b59924f044a816f34867eb5a3922bb432c4548->enter($__internal_d462e132411722e7807ac8e4c4b59924f044a816f34867eb5a3922bb432c4548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2ebacb63d50cfa548b329a8a7f7d29473bed4e048ba229b75701e280e8d3ab3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebacb63d50cfa548b329a8a7f7d29473bed4e048ba229b75701e280e8d3ab3f->enter($__internal_2ebacb63d50cfa548b329a8a7f7d29473bed4e048ba229b75701e280e8d3ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_2ebacb63d50cfa548b329a8a7f7d29473bed4e048ba229b75701e280e8d3ab3f->leave($__internal_2ebacb63d50cfa548b329a8a7f7d29473bed4e048ba229b75701e280e8d3ab3f_prof);

        
        $__internal_d462e132411722e7807ac8e4c4b59924f044a816f34867eb5a3922bb432c4548->leave($__internal_d462e132411722e7807ac8e4c4b59924f044a816f34867eb5a3922bb432c4548_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a3438aa6545a32b73eecb5201f3fa173c414aac1fdfa1f8dfe382d0e28cde36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3438aa6545a32b73eecb5201f3fa173c414aac1fdfa1f8dfe382d0e28cde36f->enter($__internal_a3438aa6545a32b73eecb5201f3fa173c414aac1fdfa1f8dfe382d0e28cde36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1ae9c07f9b424fdd8285af5c09b199d4cf5f5b44ed294e50d8441ce06cab20c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9c07f9b424fdd8285af5c09b199d4cf5f5b44ed294e50d8441ce06cab20c9->enter($__internal_1ae9c07f9b424fdd8285af5c09b199d4cf5f5b44ed294e50d8441ce06cab20c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_1ae9c07f9b424fdd8285af5c09b199d4cf5f5b44ed294e50d8441ce06cab20c9->leave($__internal_1ae9c07f9b424fdd8285af5c09b199d4cf5f5b44ed294e50d8441ce06cab20c9_prof);

        
        $__internal_a3438aa6545a32b73eecb5201f3fa173c414aac1fdfa1f8dfe382d0e28cde36f->leave($__internal_a3438aa6545a32b73eecb5201f3fa173c414aac1fdfa1f8dfe382d0e28cde36f_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cd3140d633f873ae2417ebbe6f99e2b12e4979bb3896bf7b33638469291dafcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3140d633f873ae2417ebbe6f99e2b12e4979bb3896bf7b33638469291dafcf->enter($__internal_cd3140d633f873ae2417ebbe6f99e2b12e4979bb3896bf7b33638469291dafcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_da6a6452010522bc234e9093d17c1bb0a0e4bfa87289e4a1386c407704abfac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6a6452010522bc234e9093d17c1bb0a0e4bfa87289e4a1386c407704abfac6->enter($__internal_da6a6452010522bc234e9093d17c1bb0a0e4bfa87289e4a1386c407704abfac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_da6a6452010522bc234e9093d17c1bb0a0e4bfa87289e4a1386c407704abfac6->leave($__internal_da6a6452010522bc234e9093d17c1bb0a0e4bfa87289e4a1386c407704abfac6_prof);

        
        $__internal_cd3140d633f873ae2417ebbe6f99e2b12e4979bb3896bf7b33638469291dafcf->leave($__internal_cd3140d633f873ae2417ebbe6f99e2b12e4979bb3896bf7b33638469291dafcf_prof);

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
        {%- set attr = attr|merge({class: (attr.class|Default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|Default('btn-Default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|Default(label_attr.class|Default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|Default(label_attr.class|Default('')) -%}
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
    {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|Default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
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
            {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' ' ~ parent_label_class)|trim}) -%}
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
    <div class=\"form-group{% if (not compound or force_error|Default(false)) and not valid %} has-error{% endif %}\">
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
