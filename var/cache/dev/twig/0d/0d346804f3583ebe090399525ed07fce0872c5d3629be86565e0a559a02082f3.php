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
        $__internal_4051cb97536197b82db7dcf765f759132335cd55c3f9a1ad01db5b3d60eccdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4051cb97536197b82db7dcf765f759132335cd55c3f9a1ad01db5b3d60eccdd0->enter($__internal_4051cb97536197b82db7dcf765f759132335cd55c3f9a1ad01db5b3d60eccdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_93bc2c2096c285d4352d43a5fa5a42206f5e715fff4251d3ce529fd50b15e8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bc2c2096c285d4352d43a5fa5a42206f5e715fff4251d3ce529fd50b15e8f5->enter($__internal_93bc2c2096c285d4352d43a5fa5a42206f5e715fff4251d3ce529fd50b15e8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_4051cb97536197b82db7dcf765f759132335cd55c3f9a1ad01db5b3d60eccdd0->leave($__internal_4051cb97536197b82db7dcf765f759132335cd55c3f9a1ad01db5b3d60eccdd0_prof);

        
        $__internal_93bc2c2096c285d4352d43a5fa5a42206f5e715fff4251d3ce529fd50b15e8f5->leave($__internal_93bc2c2096c285d4352d43a5fa5a42206f5e715fff4251d3ce529fd50b15e8f5_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4596c8b9e87c393dff8ac437788af92988dd2ef3098506b5e3ae9126ac8cfe1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4596c8b9e87c393dff8ac437788af92988dd2ef3098506b5e3ae9126ac8cfe1b->enter($__internal_4596c8b9e87c393dff8ac437788af92988dd2ef3098506b5e3ae9126ac8cfe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_011f38378d0419f879c06a2db93b147eed5dee369768203ac506eb57ec042b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011f38378d0419f879c06a2db93b147eed5dee369768203ac506eb57ec042b30->enter($__internal_011f38378d0419f879c06a2db93b147eed5dee369768203ac506eb57ec042b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_011f38378d0419f879c06a2db93b147eed5dee369768203ac506eb57ec042b30->leave($__internal_011f38378d0419f879c06a2db93b147eed5dee369768203ac506eb57ec042b30_prof);

        
        $__internal_4596c8b9e87c393dff8ac437788af92988dd2ef3098506b5e3ae9126ac8cfe1b->leave($__internal_4596c8b9e87c393dff8ac437788af92988dd2ef3098506b5e3ae9126ac8cfe1b_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c6224df131a17493ff81ef41f14166824503a840482f78db2abbf1d075590dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6224df131a17493ff81ef41f14166824503a840482f78db2abbf1d075590dff->enter($__internal_c6224df131a17493ff81ef41f14166824503a840482f78db2abbf1d075590dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f3d39eb1d2d3f6ac73bc9e5aea8e1a4eabfc61cc95a54357e8ba69bc999ec4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d39eb1d2d3f6ac73bc9e5aea8e1a4eabfc61cc95a54357e8ba69bc999ec4dc->enter($__internal_f3d39eb1d2d3f6ac73bc9e5aea8e1a4eabfc61cc95a54357e8ba69bc999ec4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_f3d39eb1d2d3f6ac73bc9e5aea8e1a4eabfc61cc95a54357e8ba69bc999ec4dc->leave($__internal_f3d39eb1d2d3f6ac73bc9e5aea8e1a4eabfc61cc95a54357e8ba69bc999ec4dc_prof);

        
        $__internal_c6224df131a17493ff81ef41f14166824503a840482f78db2abbf1d075590dff->leave($__internal_c6224df131a17493ff81ef41f14166824503a840482f78db2abbf1d075590dff_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e522dffc3667932a37790b3c3c0ce9162fdc44b449f14d3620fa88d956a664b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e522dffc3667932a37790b3c3c0ce9162fdc44b449f14d3620fa88d956a664b5->enter($__internal_e522dffc3667932a37790b3c3c0ce9162fdc44b449f14d3620fa88d956a664b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4737fa38c3c6ef418d9cfbc768952bac0c8b1634824c7376487acff62e33f7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4737fa38c3c6ef418d9cfbc768952bac0c8b1634824c7376487acff62e33f7ec->enter($__internal_4737fa38c3c6ef418d9cfbc768952bac0c8b1634824c7376487acff62e33f7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4737fa38c3c6ef418d9cfbc768952bac0c8b1634824c7376487acff62e33f7ec->leave($__internal_4737fa38c3c6ef418d9cfbc768952bac0c8b1634824c7376487acff62e33f7ec_prof);

        
        $__internal_e522dffc3667932a37790b3c3c0ce9162fdc44b449f14d3620fa88d956a664b5->leave($__internal_e522dffc3667932a37790b3c3c0ce9162fdc44b449f14d3620fa88d956a664b5_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_dd5d3a148418a9af1d8fe1901a60f5fc8cfbb2d34f1c275c282bda0086cbee03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5d3a148418a9af1d8fe1901a60f5fc8cfbb2d34f1c275c282bda0086cbee03->enter($__internal_dd5d3a148418a9af1d8fe1901a60f5fc8cfbb2d34f1c275c282bda0086cbee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_bbc8c87a925beadb13e44b71c09eff37444d9a448af7cb23369a852a7b4dffe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc8c87a925beadb13e44b71c09eff37444d9a448af7cb23369a852a7b4dffe9->enter($__internal_bbc8c87a925beadb13e44b71c09eff37444d9a448af7cb23369a852a7b4dffe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_bbc8c87a925beadb13e44b71c09eff37444d9a448af7cb23369a852a7b4dffe9->leave($__internal_bbc8c87a925beadb13e44b71c09eff37444d9a448af7cb23369a852a7b4dffe9_prof);

        
        $__internal_dd5d3a148418a9af1d8fe1901a60f5fc8cfbb2d34f1c275c282bda0086cbee03->leave($__internal_dd5d3a148418a9af1d8fe1901a60f5fc8cfbb2d34f1c275c282bda0086cbee03_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_84b012b007101adf507c35e668fec9319f6142e7a0763c1d4f59717bdcd3880d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b012b007101adf507c35e668fec9319f6142e7a0763c1d4f59717bdcd3880d->enter($__internal_84b012b007101adf507c35e668fec9319f6142e7a0763c1d4f59717bdcd3880d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d6696f42d0bf7e68950d3fd0aa461d32d9ce34ea2005d99a3d9e74a98176078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6696f42d0bf7e68950d3fd0aa461d32d9ce34ea2005d99a3d9e74a98176078e->enter($__internal_d6696f42d0bf7e68950d3fd0aa461d32d9ce34ea2005d99a3d9e74a98176078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_d6696f42d0bf7e68950d3fd0aa461d32d9ce34ea2005d99a3d9e74a98176078e->leave($__internal_d6696f42d0bf7e68950d3fd0aa461d32d9ce34ea2005d99a3d9e74a98176078e_prof);

        
        $__internal_84b012b007101adf507c35e668fec9319f6142e7a0763c1d4f59717bdcd3880d->leave($__internal_84b012b007101adf507c35e668fec9319f6142e7a0763c1d4f59717bdcd3880d_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d1ddb586f44223df7b46f0af18256f796722be7a377516be4800475c32c909ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ddb586f44223df7b46f0af18256f796722be7a377516be4800475c32c909ee->enter($__internal_d1ddb586f44223df7b46f0af18256f796722be7a377516be4800475c32c909ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_44430359b114fe07c858edf33c520332695819f9da9c04bebb1f388b07dfb120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44430359b114fe07c858edf33c520332695819f9da9c04bebb1f388b07dfb120->enter($__internal_44430359b114fe07c858edf33c520332695819f9da9c04bebb1f388b07dfb120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_44430359b114fe07c858edf33c520332695819f9da9c04bebb1f388b07dfb120->leave($__internal_44430359b114fe07c858edf33c520332695819f9da9c04bebb1f388b07dfb120_prof);

        
        $__internal_d1ddb586f44223df7b46f0af18256f796722be7a377516be4800475c32c909ee->leave($__internal_d1ddb586f44223df7b46f0af18256f796722be7a377516be4800475c32c909ee_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5189ab4daea0c64651296ce8fd5360c1d958e4946d2e30608109c37b9bd8c43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5189ab4daea0c64651296ce8fd5360c1d958e4946d2e30608109c37b9bd8c43f->enter($__internal_5189ab4daea0c64651296ce8fd5360c1d958e4946d2e30608109c37b9bd8c43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_97f83686f7b7390923c748ef1d3d25b4e9ede7bba5820aac85c3ccb8bee23c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f83686f7b7390923c748ef1d3d25b4e9ede7bba5820aac85c3ccb8bee23c83->enter($__internal_97f83686f7b7390923c748ef1d3d25b4e9ede7bba5820aac85c3ccb8bee23c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_97f83686f7b7390923c748ef1d3d25b4e9ede7bba5820aac85c3ccb8bee23c83->leave($__internal_97f83686f7b7390923c748ef1d3d25b4e9ede7bba5820aac85c3ccb8bee23c83_prof);

        
        $__internal_5189ab4daea0c64651296ce8fd5360c1d958e4946d2e30608109c37b9bd8c43f->leave($__internal_5189ab4daea0c64651296ce8fd5360c1d958e4946d2e30608109c37b9bd8c43f_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_578efdc653c2994d27ddcf288b9ec36aa78c1db3ed254314525500aa90b129d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578efdc653c2994d27ddcf288b9ec36aa78c1db3ed254314525500aa90b129d1->enter($__internal_578efdc653c2994d27ddcf288b9ec36aa78c1db3ed254314525500aa90b129d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9b08b541267e54e70c16a0f5724805ad0fea0a6c41973aaec15e5ab83f307462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b08b541267e54e70c16a0f5724805ad0fea0a6c41973aaec15e5ab83f307462->enter($__internal_9b08b541267e54e70c16a0f5724805ad0fea0a6c41973aaec15e5ab83f307462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9b08b541267e54e70c16a0f5724805ad0fea0a6c41973aaec15e5ab83f307462->leave($__internal_9b08b541267e54e70c16a0f5724805ad0fea0a6c41973aaec15e5ab83f307462_prof);

        
        $__internal_578efdc653c2994d27ddcf288b9ec36aa78c1db3ed254314525500aa90b129d1->leave($__internal_578efdc653c2994d27ddcf288b9ec36aa78c1db3ed254314525500aa90b129d1_prof);

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
