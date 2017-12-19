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
        $__internal_464eb6103b2476c6e30de2f9f68274a5cb183e4ac1efaab1a416685e23055cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464eb6103b2476c6e30de2f9f68274a5cb183e4ac1efaab1a416685e23055cca->enter($__internal_464eb6103b2476c6e30de2f9f68274a5cb183e4ac1efaab1a416685e23055cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_938e386006ebf88f27ecd4c6463097a130822e15d4a6c85ededbeda4d59d4213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938e386006ebf88f27ecd4c6463097a130822e15d4a6c85ededbeda4d59d4213->enter($__internal_938e386006ebf88f27ecd4c6463097a130822e15d4a6c85ededbeda4d59d4213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_464eb6103b2476c6e30de2f9f68274a5cb183e4ac1efaab1a416685e23055cca->leave($__internal_464eb6103b2476c6e30de2f9f68274a5cb183e4ac1efaab1a416685e23055cca_prof);

        
        $__internal_938e386006ebf88f27ecd4c6463097a130822e15d4a6c85ededbeda4d59d4213->leave($__internal_938e386006ebf88f27ecd4c6463097a130822e15d4a6c85ededbeda4d59d4213_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0f61c8a8048ed9da1748cbef54669f16d69e58bea8cf9b5e136780556b216aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f61c8a8048ed9da1748cbef54669f16d69e58bea8cf9b5e136780556b216aaa->enter($__internal_0f61c8a8048ed9da1748cbef54669f16d69e58bea8cf9b5e136780556b216aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_acf1879a5036ffc05e6cbd5d771c1d2e4495b9e8bfb428491ec459d7b4b58b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf1879a5036ffc05e6cbd5d771c1d2e4495b9e8bfb428491ec459d7b4b58b31->enter($__internal_acf1879a5036ffc05e6cbd5d771c1d2e4495b9e8bfb428491ec459d7b4b58b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_acf1879a5036ffc05e6cbd5d771c1d2e4495b9e8bfb428491ec459d7b4b58b31->leave($__internal_acf1879a5036ffc05e6cbd5d771c1d2e4495b9e8bfb428491ec459d7b4b58b31_prof);

        
        $__internal_0f61c8a8048ed9da1748cbef54669f16d69e58bea8cf9b5e136780556b216aaa->leave($__internal_0f61c8a8048ed9da1748cbef54669f16d69e58bea8cf9b5e136780556b216aaa_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0f6187b29d2c1421ad21c94405f7cb05d213a26b878b7aefb47ca5d1d57e2dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6187b29d2c1421ad21c94405f7cb05d213a26b878b7aefb47ca5d1d57e2dba->enter($__internal_0f6187b29d2c1421ad21c94405f7cb05d213a26b878b7aefb47ca5d1d57e2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_fa5cfcf86e623708d3b66c5c90222abeddd61ba55b4b095f9dbb5f475ce8405e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5cfcf86e623708d3b66c5c90222abeddd61ba55b4b095f9dbb5f475ce8405e->enter($__internal_fa5cfcf86e623708d3b66c5c90222abeddd61ba55b4b095f9dbb5f475ce8405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_fa5cfcf86e623708d3b66c5c90222abeddd61ba55b4b095f9dbb5f475ce8405e->leave($__internal_fa5cfcf86e623708d3b66c5c90222abeddd61ba55b4b095f9dbb5f475ce8405e_prof);

        
        $__internal_0f6187b29d2c1421ad21c94405f7cb05d213a26b878b7aefb47ca5d1d57e2dba->leave($__internal_0f6187b29d2c1421ad21c94405f7cb05d213a26b878b7aefb47ca5d1d57e2dba_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_36549aebde20218570da56601a7195e1e9d3a8b39e5596894eea8ce8fa49e2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36549aebde20218570da56601a7195e1e9d3a8b39e5596894eea8ce8fa49e2b6->enter($__internal_36549aebde20218570da56601a7195e1e9d3a8b39e5596894eea8ce8fa49e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3f33f64b21faf662b51066cae0d701d1f3af7a945124f3f3fce2c5ec9b285095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f33f64b21faf662b51066cae0d701d1f3af7a945124f3f3fce2c5ec9b285095->enter($__internal_3f33f64b21faf662b51066cae0d701d1f3af7a945124f3f3fce2c5ec9b285095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3f33f64b21faf662b51066cae0d701d1f3af7a945124f3f3fce2c5ec9b285095->leave($__internal_3f33f64b21faf662b51066cae0d701d1f3af7a945124f3f3fce2c5ec9b285095_prof);

        
        $__internal_36549aebde20218570da56601a7195e1e9d3a8b39e5596894eea8ce8fa49e2b6->leave($__internal_36549aebde20218570da56601a7195e1e9d3a8b39e5596894eea8ce8fa49e2b6_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_bcb7365f00144cfec49ab9329dfa897ab5a3d1051027bc2bbf87965fdd7053f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb7365f00144cfec49ab9329dfa897ab5a3d1051027bc2bbf87965fdd7053f8->enter($__internal_bcb7365f00144cfec49ab9329dfa897ab5a3d1051027bc2bbf87965fdd7053f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_42690ddf9447d631c5e70d14e6e4ff8710313da9392f3cf70dfbaaa15d211349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42690ddf9447d631c5e70d14e6e4ff8710313da9392f3cf70dfbaaa15d211349->enter($__internal_42690ddf9447d631c5e70d14e6e4ff8710313da9392f3cf70dfbaaa15d211349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_42690ddf9447d631c5e70d14e6e4ff8710313da9392f3cf70dfbaaa15d211349->leave($__internal_42690ddf9447d631c5e70d14e6e4ff8710313da9392f3cf70dfbaaa15d211349_prof);

        
        $__internal_bcb7365f00144cfec49ab9329dfa897ab5a3d1051027bc2bbf87965fdd7053f8->leave($__internal_bcb7365f00144cfec49ab9329dfa897ab5a3d1051027bc2bbf87965fdd7053f8_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4cf32b8963b5a3a2c15364ddf79d4d824293ed26de7c1a0a1c90e51db2100027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf32b8963b5a3a2c15364ddf79d4d824293ed26de7c1a0a1c90e51db2100027->enter($__internal_4cf32b8963b5a3a2c15364ddf79d4d824293ed26de7c1a0a1c90e51db2100027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_87962db2049d8abc4c75bcfc2ecd55f873aff937c2c1355671bae3573e7c5ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87962db2049d8abc4c75bcfc2ecd55f873aff937c2c1355671bae3573e7c5ca3->enter($__internal_87962db2049d8abc4c75bcfc2ecd55f873aff937c2c1355671bae3573e7c5ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_87962db2049d8abc4c75bcfc2ecd55f873aff937c2c1355671bae3573e7c5ca3->leave($__internal_87962db2049d8abc4c75bcfc2ecd55f873aff937c2c1355671bae3573e7c5ca3_prof);

        
        $__internal_4cf32b8963b5a3a2c15364ddf79d4d824293ed26de7c1a0a1c90e51db2100027->leave($__internal_4cf32b8963b5a3a2c15364ddf79d4d824293ed26de7c1a0a1c90e51db2100027_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_11bb61c6c6fbfce728b1eb4651a303ad4ebbb2ae9a43fcf57ea9e147630f57b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bb61c6c6fbfce728b1eb4651a303ad4ebbb2ae9a43fcf57ea9e147630f57b6->enter($__internal_11bb61c6c6fbfce728b1eb4651a303ad4ebbb2ae9a43fcf57ea9e147630f57b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_18f09b538de9b37ee0aacaced3c47a243a0b20c5a99d64597000beb387dee0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f09b538de9b37ee0aacaced3c47a243a0b20c5a99d64597000beb387dee0ef->enter($__internal_18f09b538de9b37ee0aacaced3c47a243a0b20c5a99d64597000beb387dee0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_18f09b538de9b37ee0aacaced3c47a243a0b20c5a99d64597000beb387dee0ef->leave($__internal_18f09b538de9b37ee0aacaced3c47a243a0b20c5a99d64597000beb387dee0ef_prof);

        
        $__internal_11bb61c6c6fbfce728b1eb4651a303ad4ebbb2ae9a43fcf57ea9e147630f57b6->leave($__internal_11bb61c6c6fbfce728b1eb4651a303ad4ebbb2ae9a43fcf57ea9e147630f57b6_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e60c619bd127e2c471b4d40d04c566fedcdd21473b9b587d396dff735637423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60c619bd127e2c471b4d40d04c566fedcdd21473b9b587d396dff735637423e->enter($__internal_e60c619bd127e2c471b4d40d04c566fedcdd21473b9b587d396dff735637423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_603d7313d28e6885bf15492c25ce817b05a19986f0e5d55eff21be611acbd52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603d7313d28e6885bf15492c25ce817b05a19986f0e5d55eff21be611acbd52e->enter($__internal_603d7313d28e6885bf15492c25ce817b05a19986f0e5d55eff21be611acbd52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_603d7313d28e6885bf15492c25ce817b05a19986f0e5d55eff21be611acbd52e->leave($__internal_603d7313d28e6885bf15492c25ce817b05a19986f0e5d55eff21be611acbd52e_prof);

        
        $__internal_e60c619bd127e2c471b4d40d04c566fedcdd21473b9b587d396dff735637423e->leave($__internal_e60c619bd127e2c471b4d40d04c566fedcdd21473b9b587d396dff735637423e_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fa4bf8e20d0110a831b4c320d47d5124e897b8fcd29c9d2983021cd4fa906c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4bf8e20d0110a831b4c320d47d5124e897b8fcd29c9d2983021cd4fa906c0c->enter($__internal_fa4bf8e20d0110a831b4c320d47d5124e897b8fcd29c9d2983021cd4fa906c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9115af8ef0f005b4cf7c3327668fd7f9d0eaf825822b5bdaee90f3b813cf188f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9115af8ef0f005b4cf7c3327668fd7f9d0eaf825822b5bdaee90f3b813cf188f->enter($__internal_9115af8ef0f005b4cf7c3327668fd7f9d0eaf825822b5bdaee90f3b813cf188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9115af8ef0f005b4cf7c3327668fd7f9d0eaf825822b5bdaee90f3b813cf188f->leave($__internal_9115af8ef0f005b4cf7c3327668fd7f9d0eaf825822b5bdaee90f3b813cf188f_prof);

        
        $__internal_fa4bf8e20d0110a831b4c320d47d5124e897b8fcd29c9d2983021cd4fa906c0c->leave($__internal_fa4bf8e20d0110a831b4c320d47d5124e897b8fcd29c9d2983021cd4fa906c0c_prof);

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
            {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
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
        <div class=\"form-group row{% if (not compound or force_error|Default(false)) and not valid %} is-invalid{% endif %}\">
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
        <div class=\"row{% if (not compound or force_error|Default(false)) and not valid %} is-invalid{% endif %}\">
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
