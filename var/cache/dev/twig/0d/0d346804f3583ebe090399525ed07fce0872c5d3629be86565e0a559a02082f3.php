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
        $__internal_356dd074d3053279054b5ae4b58eddde59b069967fa99f316aea18277a1a941b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356dd074d3053279054b5ae4b58eddde59b069967fa99f316aea18277a1a941b->enter($__internal_356dd074d3053279054b5ae4b58eddde59b069967fa99f316aea18277a1a941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_276240e091399274008df8c87800cf39175ecd3e186b46a0cb314d17b1f8d4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276240e091399274008df8c87800cf39175ecd3e186b46a0cb314d17b1f8d4f4->enter($__internal_276240e091399274008df8c87800cf39175ecd3e186b46a0cb314d17b1f8d4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_356dd074d3053279054b5ae4b58eddde59b069967fa99f316aea18277a1a941b->leave($__internal_356dd074d3053279054b5ae4b58eddde59b069967fa99f316aea18277a1a941b_prof);

        
        $__internal_276240e091399274008df8c87800cf39175ecd3e186b46a0cb314d17b1f8d4f4->leave($__internal_276240e091399274008df8c87800cf39175ecd3e186b46a0cb314d17b1f8d4f4_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a61b13c58354ceda3acd4a3bbf1726407fd21c8e5625bc6b6c2c88bce24e5863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61b13c58354ceda3acd4a3bbf1726407fd21c8e5625bc6b6c2c88bce24e5863->enter($__internal_a61b13c58354ceda3acd4a3bbf1726407fd21c8e5625bc6b6c2c88bce24e5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_48936654b5e6efd28d464dc4646baf8ab59f32df1eb11266ce405f518d236672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48936654b5e6efd28d464dc4646baf8ab59f32df1eb11266ce405f518d236672->enter($__internal_48936654b5e6efd28d464dc4646baf8ab59f32df1eb11266ce405f518d236672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_48936654b5e6efd28d464dc4646baf8ab59f32df1eb11266ce405f518d236672->leave($__internal_48936654b5e6efd28d464dc4646baf8ab59f32df1eb11266ce405f518d236672_prof);

        
        $__internal_a61b13c58354ceda3acd4a3bbf1726407fd21c8e5625bc6b6c2c88bce24e5863->leave($__internal_a61b13c58354ceda3acd4a3bbf1726407fd21c8e5625bc6b6c2c88bce24e5863_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_81de9a3d5f84931f1642f0af8b9472d234fcddad532b4e888e591a4ac3da2dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81de9a3d5f84931f1642f0af8b9472d234fcddad532b4e888e591a4ac3da2dba->enter($__internal_81de9a3d5f84931f1642f0af8b9472d234fcddad532b4e888e591a4ac3da2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_284cb9205a97be9e6c90e15fde6c8467ad637aef44f5cdbef386469c22610e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284cb9205a97be9e6c90e15fde6c8467ad637aef44f5cdbef386469c22610e7d->enter($__internal_284cb9205a97be9e6c90e15fde6c8467ad637aef44f5cdbef386469c22610e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_284cb9205a97be9e6c90e15fde6c8467ad637aef44f5cdbef386469c22610e7d->leave($__internal_284cb9205a97be9e6c90e15fde6c8467ad637aef44f5cdbef386469c22610e7d_prof);

        
        $__internal_81de9a3d5f84931f1642f0af8b9472d234fcddad532b4e888e591a4ac3da2dba->leave($__internal_81de9a3d5f84931f1642f0af8b9472d234fcddad532b4e888e591a4ac3da2dba_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ada2907eebcba5c15acb31bb0222497df9d2392194aaf4b9440ea444836e7163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada2907eebcba5c15acb31bb0222497df9d2392194aaf4b9440ea444836e7163->enter($__internal_ada2907eebcba5c15acb31bb0222497df9d2392194aaf4b9440ea444836e7163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f2882f65eb26a9b830897f0544c895903058baa37ab7643c51ceedff5777a948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2882f65eb26a9b830897f0544c895903058baa37ab7643c51ceedff5777a948->enter($__internal_f2882f65eb26a9b830897f0544c895903058baa37ab7643c51ceedff5777a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f2882f65eb26a9b830897f0544c895903058baa37ab7643c51ceedff5777a948->leave($__internal_f2882f65eb26a9b830897f0544c895903058baa37ab7643c51ceedff5777a948_prof);

        
        $__internal_ada2907eebcba5c15acb31bb0222497df9d2392194aaf4b9440ea444836e7163->leave($__internal_ada2907eebcba5c15acb31bb0222497df9d2392194aaf4b9440ea444836e7163_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_17850de8a4a6e256a5654aa710b2429b6a25c3eed1af7ffd725cb21769548f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17850de8a4a6e256a5654aa710b2429b6a25c3eed1af7ffd725cb21769548f76->enter($__internal_17850de8a4a6e256a5654aa710b2429b6a25c3eed1af7ffd725cb21769548f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_5ec12baeb436a034f482b72af7c0072e1cd543322c744ce7be68b382cfa7259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec12baeb436a034f482b72af7c0072e1cd543322c744ce7be68b382cfa7259f->enter($__internal_5ec12baeb436a034f482b72af7c0072e1cd543322c744ce7be68b382cfa7259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_5ec12baeb436a034f482b72af7c0072e1cd543322c744ce7be68b382cfa7259f->leave($__internal_5ec12baeb436a034f482b72af7c0072e1cd543322c744ce7be68b382cfa7259f_prof);

        
        $__internal_17850de8a4a6e256a5654aa710b2429b6a25c3eed1af7ffd725cb21769548f76->leave($__internal_17850de8a4a6e256a5654aa710b2429b6a25c3eed1af7ffd725cb21769548f76_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_70fa29a3eaa3b01b261dc48502ecf57edb162be525e94868a80b33e049bdd5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fa29a3eaa3b01b261dc48502ecf57edb162be525e94868a80b33e049bdd5a1->enter($__internal_70fa29a3eaa3b01b261dc48502ecf57edb162be525e94868a80b33e049bdd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4518d08b31d592af2f0bdebb330710ed181d288222a12f652e81d25d48d5cd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4518d08b31d592af2f0bdebb330710ed181d288222a12f652e81d25d48d5cd0e->enter($__internal_4518d08b31d592af2f0bdebb330710ed181d288222a12f652e81d25d48d5cd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_4518d08b31d592af2f0bdebb330710ed181d288222a12f652e81d25d48d5cd0e->leave($__internal_4518d08b31d592af2f0bdebb330710ed181d288222a12f652e81d25d48d5cd0e_prof);

        
        $__internal_70fa29a3eaa3b01b261dc48502ecf57edb162be525e94868a80b33e049bdd5a1->leave($__internal_70fa29a3eaa3b01b261dc48502ecf57edb162be525e94868a80b33e049bdd5a1_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d741f765a888a0982ece2494c8bfa2e2e6816a2d81a0110e9b07d68f63644aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d741f765a888a0982ece2494c8bfa2e2e6816a2d81a0110e9b07d68f63644aab->enter($__internal_d741f765a888a0982ece2494c8bfa2e2e6816a2d81a0110e9b07d68f63644aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4cce58590e56e5fdd3dc847f7d1403da80ede513af342ea3a0eca0c67cbf8215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cce58590e56e5fdd3dc847f7d1403da80ede513af342ea3a0eca0c67cbf8215->enter($__internal_4cce58590e56e5fdd3dc847f7d1403da80ede513af342ea3a0eca0c67cbf8215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_4cce58590e56e5fdd3dc847f7d1403da80ede513af342ea3a0eca0c67cbf8215->leave($__internal_4cce58590e56e5fdd3dc847f7d1403da80ede513af342ea3a0eca0c67cbf8215_prof);

        
        $__internal_d741f765a888a0982ece2494c8bfa2e2e6816a2d81a0110e9b07d68f63644aab->leave($__internal_d741f765a888a0982ece2494c8bfa2e2e6816a2d81a0110e9b07d68f63644aab_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_372aca9be146f67b435bee088d0870f55830eb1a7de12e9fa2debd429ddab3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372aca9be146f67b435bee088d0870f55830eb1a7de12e9fa2debd429ddab3c1->enter($__internal_372aca9be146f67b435bee088d0870f55830eb1a7de12e9fa2debd429ddab3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7efd978d483080b09d56030f9eaaf3a45d694735845bd361b9fd6888eb61e656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efd978d483080b09d56030f9eaaf3a45d694735845bd361b9fd6888eb61e656->enter($__internal_7efd978d483080b09d56030f9eaaf3a45d694735845bd361b9fd6888eb61e656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_7efd978d483080b09d56030f9eaaf3a45d694735845bd361b9fd6888eb61e656->leave($__internal_7efd978d483080b09d56030f9eaaf3a45d694735845bd361b9fd6888eb61e656_prof);

        
        $__internal_372aca9be146f67b435bee088d0870f55830eb1a7de12e9fa2debd429ddab3c1->leave($__internal_372aca9be146f67b435bee088d0870f55830eb1a7de12e9fa2debd429ddab3c1_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_711b7a23cffa9cef6553b05cdea23ee1cc81e9fa2f38816d6fcc0bd4a6b128e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711b7a23cffa9cef6553b05cdea23ee1cc81e9fa2f38816d6fcc0bd4a6b128e8->enter($__internal_711b7a23cffa9cef6553b05cdea23ee1cc81e9fa2f38816d6fcc0bd4a6b128e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f81ddc60fc99a199e449346336b6159d22949825edfe197569d9e8ccc1320dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81ddc60fc99a199e449346336b6159d22949825edfe197569d9e8ccc1320dd1->enter($__internal_f81ddc60fc99a199e449346336b6159d22949825edfe197569d9e8ccc1320dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f81ddc60fc99a199e449346336b6159d22949825edfe197569d9e8ccc1320dd1->leave($__internal_f81ddc60fc99a199e449346336b6159d22949825edfe197569d9e8ccc1320dd1_prof);

        
        $__internal_711b7a23cffa9cef6553b05cdea23ee1cc81e9fa2f38816d6fcc0bd4a6b128e8->leave($__internal_711b7a23cffa9cef6553b05cdea23ee1cc81e9fa2f38816d6fcc0bd4a6b128e8_prof);

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
