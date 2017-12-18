<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_f4d9b187702ec32553ea931f88459c320771e99f017a2295d0131f73ee283f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8de2b6910a0f2dfcfe3782724f48e6a20d167752e116f587d33fd7a7442474d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de2b6910a0f2dfcfe3782724f48e6a20d167752e116f587d33fd7a7442474d7->enter($__internal_8de2b6910a0f2dfcfe3782724f48e6a20d167752e116f587d33fd7a7442474d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_82553fb4306c0fd27f7914e13c7b32ff7f3bff1f6aa4245092763eb4bfac84a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82553fb4306c0fd27f7914e13c7b32ff7f3bff1f6aa4245092763eb4bfac84a3->enter($__internal_82553fb4306c0fd27f7914e13c7b32ff7f3bff1f6aa4245092763eb4bfac84a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_8de2b6910a0f2dfcfe3782724f48e6a20d167752e116f587d33fd7a7442474d7->leave($__internal_8de2b6910a0f2dfcfe3782724f48e6a20d167752e116f587d33fd7a7442474d7_prof);

        
        $__internal_82553fb4306c0fd27f7914e13c7b32ff7f3bff1f6aa4245092763eb4bfac84a3->leave($__internal_82553fb4306c0fd27f7914e13c7b32ff7f3bff1f6aa4245092763eb4bfac84a3_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a39d4f83f21866aa78d7d4e7e4b1c03fecae67921e317738f7014b47f4519a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39d4f83f21866aa78d7d4e7e4b1c03fecae67921e317738f7014b47f4519a82->enter($__internal_a39d4f83f21866aa78d7d4e7e4b1c03fecae67921e317738f7014b47f4519a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c7941fd3d9cbbc1eef0e3c2e66480da32aa07871131a4c7d20bad4bcdae11ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7941fd3d9cbbc1eef0e3c2e66480da32aa07871131a4c7d20bad4bcdae11ca2->enter($__internal_c7941fd3d9cbbc1eef0e3c2e66480da32aa07871131a4c7d20bad4bcdae11ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_c7941fd3d9cbbc1eef0e3c2e66480da32aa07871131a4c7d20bad4bcdae11ca2->leave($__internal_c7941fd3d9cbbc1eef0e3c2e66480da32aa07871131a4c7d20bad4bcdae11ca2_prof);

        
        $__internal_a39d4f83f21866aa78d7d4e7e4b1c03fecae67921e317738f7014b47f4519a82->leave($__internal_a39d4f83f21866aa78d7d4e7e4b1c03fecae67921e317738f7014b47f4519a82_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b7f809efe3c6515e92b138ccf042df512b74346aa402c552a47877abd1c4c4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f809efe3c6515e92b138ccf042df512b74346aa402c552a47877abd1c4c4fe->enter($__internal_b7f809efe3c6515e92b138ccf042df512b74346aa402c552a47877abd1c4c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_27646c3c446fb873fa2a8383bcc47e00f6c66924fa5730c0f778e94da69a3826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27646c3c446fb873fa2a8383bcc47e00f6c66924fa5730c0f778e94da69a3826->enter($__internal_27646c3c446fb873fa2a8383bcc47e00f6c66924fa5730c0f778e94da69a3826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_27646c3c446fb873fa2a8383bcc47e00f6c66924fa5730c0f778e94da69a3826->leave($__internal_27646c3c446fb873fa2a8383bcc47e00f6c66924fa5730c0f778e94da69a3826_prof);

        
        $__internal_b7f809efe3c6515e92b138ccf042df512b74346aa402c552a47877abd1c4c4fe->leave($__internal_b7f809efe3c6515e92b138ccf042df512b74346aa402c552a47877abd1c4c4fe_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ba3daa9b585d0ad59a693987a325a198247c599e7e8e0d27b3dc37a0d14990d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3daa9b585d0ad59a693987a325a198247c599e7e8e0d27b3dc37a0d14990d3->enter($__internal_ba3daa9b585d0ad59a693987a325a198247c599e7e8e0d27b3dc37a0d14990d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_51fb804ea6cea39216f2af8c25524f352a480c9254c9607c91f90f7d5f094e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fb804ea6cea39216f2af8c25524f352a480c9254c9607c91f90f7d5f094e04->enter($__internal_51fb804ea6cea39216f2af8c25524f352a480c9254c9607c91f90f7d5f094e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_51fb804ea6cea39216f2af8c25524f352a480c9254c9607c91f90f7d5f094e04->leave($__internal_51fb804ea6cea39216f2af8c25524f352a480c9254c9607c91f90f7d5f094e04_prof);

        
        $__internal_ba3daa9b585d0ad59a693987a325a198247c599e7e8e0d27b3dc37a0d14990d3->leave($__internal_ba3daa9b585d0ad59a693987a325a198247c599e7e8e0d27b3dc37a0d14990d3_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_201a188709423661d657d2b4fd80ffed1061929b2bd91880acfe69dd84082d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201a188709423661d657d2b4fd80ffed1061929b2bd91880acfe69dd84082d5c->enter($__internal_201a188709423661d657d2b4fd80ffed1061929b2bd91880acfe69dd84082d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_9534e4a1b95e8919b18d8e5f9fcc416be1b88c7c5731c72585f520810532fc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9534e4a1b95e8919b18d8e5f9fcc416be1b88c7c5731c72585f520810532fc80->enter($__internal_9534e4a1b95e8919b18d8e5f9fcc416be1b88c7c5731c72585f520810532fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_9534e4a1b95e8919b18d8e5f9fcc416be1b88c7c5731c72585f520810532fc80->leave($__internal_9534e4a1b95e8919b18d8e5f9fcc416be1b88c7c5731c72585f520810532fc80_prof);

        
        $__internal_201a188709423661d657d2b4fd80ffed1061929b2bd91880acfe69dd84082d5c->leave($__internal_201a188709423661d657d2b4fd80ffed1061929b2bd91880acfe69dd84082d5c_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_6871d3731575b76873e49acf2032c19a952fb3809ef97492f08bedd273d1c171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6871d3731575b76873e49acf2032c19a952fb3809ef97492f08bedd273d1c171->enter($__internal_6871d3731575b76873e49acf2032c19a952fb3809ef97492f08bedd273d1c171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_fb594031025af8cb791d2aa00993e19f1087d8c6ff5957838baf6997858500d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb594031025af8cb791d2aa00993e19f1087d8c6ff5957838baf6997858500d1->enter($__internal_fb594031025af8cb791d2aa00993e19f1087d8c6ff5957838baf6997858500d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_fb594031025af8cb791d2aa00993e19f1087d8c6ff5957838baf6997858500d1->leave($__internal_fb594031025af8cb791d2aa00993e19f1087d8c6ff5957838baf6997858500d1_prof);

        
        $__internal_6871d3731575b76873e49acf2032c19a952fb3809ef97492f08bedd273d1c171->leave($__internal_6871d3731575b76873e49acf2032c19a952fb3809ef97492f08bedd273d1c171_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_136caad6eca880e937f78f628d0ccd40dc2f57335bd444c2d0d623b452063773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136caad6eca880e937f78f628d0ccd40dc2f57335bd444c2d0d623b452063773->enter($__internal_136caad6eca880e937f78f628d0ccd40dc2f57335bd444c2d0d623b452063773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9b3f0ca3b7a23f7653df81991890773db0835e8401d53f88876ae30f7ac75840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3f0ca3b7a23f7653df81991890773db0835e8401d53f88876ae30f7ac75840->enter($__internal_9b3f0ca3b7a23f7653df81991890773db0835e8401d53f88876ae30f7ac75840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_9b3f0ca3b7a23f7653df81991890773db0835e8401d53f88876ae30f7ac75840->leave($__internal_9b3f0ca3b7a23f7653df81991890773db0835e8401d53f88876ae30f7ac75840_prof);

        
        $__internal_136caad6eca880e937f78f628d0ccd40dc2f57335bd444c2d0d623b452063773->leave($__internal_136caad6eca880e937f78f628d0ccd40dc2f57335bd444c2d0d623b452063773_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0a494e38c558ebf59fc2c024862e1a26ab54466e6823c5653e90751d677882cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a494e38c558ebf59fc2c024862e1a26ab54466e6823c5653e90751d677882cf->enter($__internal_0a494e38c558ebf59fc2c024862e1a26ab54466e6823c5653e90751d677882cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b60e2fd08a48fc2e777021085288c0bde033d8ce5a3407c9cc0736bf950afb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e2fd08a48fc2e777021085288c0bde033d8ce5a3407c9cc0736bf950afb25->enter($__internal_b60e2fd08a48fc2e777021085288c0bde033d8ce5a3407c9cc0736bf950afb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_b60e2fd08a48fc2e777021085288c0bde033d8ce5a3407c9cc0736bf950afb25->leave($__internal_b60e2fd08a48fc2e777021085288c0bde033d8ce5a3407c9cc0736bf950afb25_prof);

        
        $__internal_0a494e38c558ebf59fc2c024862e1a26ab54466e6823c5653e90751d677882cf->leave($__internal_0a494e38c558ebf59fc2c024862e1a26ab54466e6823c5653e90751d677882cf_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_00d46582e75978eaa5e27c96ddf0f12853b38668b3e0b8af8a2446cf653add9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d46582e75978eaa5e27c96ddf0f12853b38668b3e0b8af8a2446cf653add9c->enter($__internal_00d46582e75978eaa5e27c96ddf0f12853b38668b3e0b8af8a2446cf653add9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1227b03ad9261d2fd3e4ea0c30bc59ffcb1b777c81dd670b4814617edd943901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1227b03ad9261d2fd3e4ea0c30bc59ffcb1b777c81dd670b4814617edd943901->enter($__internal_1227b03ad9261d2fd3e4ea0c30bc59ffcb1b777c81dd670b4814617edd943901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_1227b03ad9261d2fd3e4ea0c30bc59ffcb1b777c81dd670b4814617edd943901->leave($__internal_1227b03ad9261d2fd3e4ea0c30bc59ffcb1b777c81dd670b4814617edd943901_prof);

        
        $__internal_00d46582e75978eaa5e27c96ddf0f12853b38668b3e0b8af8a2446cf653add9c->leave($__internal_00d46582e75978eaa5e27c96ddf0f12853b38668b3e0b8af8a2446cf653add9c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
