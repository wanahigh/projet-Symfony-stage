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
        $__internal_3648d461d43c5c422b30a43a63d4a59749ab39015dccf6f869ebcc9fe0ae6978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3648d461d43c5c422b30a43a63d4a59749ab39015dccf6f869ebcc9fe0ae6978->enter($__internal_3648d461d43c5c422b30a43a63d4a59749ab39015dccf6f869ebcc9fe0ae6978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_a53fa437faeda6670fdb739e0b760622623cb0d8be31ae5757c2d795e0d508a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53fa437faeda6670fdb739e0b760622623cb0d8be31ae5757c2d795e0d508a2->enter($__internal_a53fa437faeda6670fdb739e0b760622623cb0d8be31ae5757c2d795e0d508a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_3648d461d43c5c422b30a43a63d4a59749ab39015dccf6f869ebcc9fe0ae6978->leave($__internal_3648d461d43c5c422b30a43a63d4a59749ab39015dccf6f869ebcc9fe0ae6978_prof);

        
        $__internal_a53fa437faeda6670fdb739e0b760622623cb0d8be31ae5757c2d795e0d508a2->leave($__internal_a53fa437faeda6670fdb739e0b760622623cb0d8be31ae5757c2d795e0d508a2_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dbff2ee1a289a454a2a20a213e1c7abbce4e7bb4b87328c71e8785a400ffb97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbff2ee1a289a454a2a20a213e1c7abbce4e7bb4b87328c71e8785a400ffb97c->enter($__internal_dbff2ee1a289a454a2a20a213e1c7abbce4e7bb4b87328c71e8785a400ffb97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d0f9b407352a6c8e1faedf4868a63714ad40d91d72e1b285116d76ecf52df1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f9b407352a6c8e1faedf4868a63714ad40d91d72e1b285116d76ecf52df1c5->enter($__internal_d0f9b407352a6c8e1faedf4868a63714ad40d91d72e1b285116d76ecf52df1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_d0f9b407352a6c8e1faedf4868a63714ad40d91d72e1b285116d76ecf52df1c5->leave($__internal_d0f9b407352a6c8e1faedf4868a63714ad40d91d72e1b285116d76ecf52df1c5_prof);

        
        $__internal_dbff2ee1a289a454a2a20a213e1c7abbce4e7bb4b87328c71e8785a400ffb97c->leave($__internal_dbff2ee1a289a454a2a20a213e1c7abbce4e7bb4b87328c71e8785a400ffb97c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c402cd24c930a4721ea403f7ffe104282a0d65dddd1183ae4f0c09f668214ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c402cd24c930a4721ea403f7ffe104282a0d65dddd1183ae4f0c09f668214ba0->enter($__internal_c402cd24c930a4721ea403f7ffe104282a0d65dddd1183ae4f0c09f668214ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3bf4ca9d80bef8320da71543e08a4aebc90207566d6c542efa1991ed1cc20fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf4ca9d80bef8320da71543e08a4aebc90207566d6c542efa1991ed1cc20fea->enter($__internal_3bf4ca9d80bef8320da71543e08a4aebc90207566d6c542efa1991ed1cc20fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_3bf4ca9d80bef8320da71543e08a4aebc90207566d6c542efa1991ed1cc20fea->leave($__internal_3bf4ca9d80bef8320da71543e08a4aebc90207566d6c542efa1991ed1cc20fea_prof);

        
        $__internal_c402cd24c930a4721ea403f7ffe104282a0d65dddd1183ae4f0c09f668214ba0->leave($__internal_c402cd24c930a4721ea403f7ffe104282a0d65dddd1183ae4f0c09f668214ba0_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5984242fdd2b9e4517ac6909b33f0d2615d6c6cc2c365cfcbe7524b5d6117efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5984242fdd2b9e4517ac6909b33f0d2615d6c6cc2c365cfcbe7524b5d6117efd->enter($__internal_5984242fdd2b9e4517ac6909b33f0d2615d6c6cc2c365cfcbe7524b5d6117efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e1e721029290bcaaf42807fa3d573be2a276e818b6521cfe78174ba3d60efba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1e721029290bcaaf42807fa3d573be2a276e818b6521cfe78174ba3d60efba->enter($__internal_1e1e721029290bcaaf42807fa3d573be2a276e818b6521cfe78174ba3d60efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1e1e721029290bcaaf42807fa3d573be2a276e818b6521cfe78174ba3d60efba->leave($__internal_1e1e721029290bcaaf42807fa3d573be2a276e818b6521cfe78174ba3d60efba_prof);

        
        $__internal_5984242fdd2b9e4517ac6909b33f0d2615d6c6cc2c365cfcbe7524b5d6117efd->leave($__internal_5984242fdd2b9e4517ac6909b33f0d2615d6c6cc2c365cfcbe7524b5d6117efd_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_ddd079049725c4a342c96eb2220d99313545462c24284c74dd0b1050cbfd6df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd079049725c4a342c96eb2220d99313545462c24284c74dd0b1050cbfd6df0->enter($__internal_ddd079049725c4a342c96eb2220d99313545462c24284c74dd0b1050cbfd6df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_013f4e3c2920b2b6f6dc55c01b57f5740b2c258778a7782ef14b632cc6d71503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013f4e3c2920b2b6f6dc55c01b57f5740b2c258778a7782ef14b632cc6d71503->enter($__internal_013f4e3c2920b2b6f6dc55c01b57f5740b2c258778a7782ef14b632cc6d71503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_013f4e3c2920b2b6f6dc55c01b57f5740b2c258778a7782ef14b632cc6d71503->leave($__internal_013f4e3c2920b2b6f6dc55c01b57f5740b2c258778a7782ef14b632cc6d71503_prof);

        
        $__internal_ddd079049725c4a342c96eb2220d99313545462c24284c74dd0b1050cbfd6df0->leave($__internal_ddd079049725c4a342c96eb2220d99313545462c24284c74dd0b1050cbfd6df0_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_20e77553af30f5fe769cad28e86dc8be2327bb3fd4247cfa58a7b602354cba93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e77553af30f5fe769cad28e86dc8be2327bb3fd4247cfa58a7b602354cba93->enter($__internal_20e77553af30f5fe769cad28e86dc8be2327bb3fd4247cfa58a7b602354cba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_df2876efcda6b4409bcdb80232932d3efd0d3fccff03a343e5fee7291a1f9e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2876efcda6b4409bcdb80232932d3efd0d3fccff03a343e5fee7291a1f9e21->enter($__internal_df2876efcda6b4409bcdb80232932d3efd0d3fccff03a343e5fee7291a1f9e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_df2876efcda6b4409bcdb80232932d3efd0d3fccff03a343e5fee7291a1f9e21->leave($__internal_df2876efcda6b4409bcdb80232932d3efd0d3fccff03a343e5fee7291a1f9e21_prof);

        
        $__internal_20e77553af30f5fe769cad28e86dc8be2327bb3fd4247cfa58a7b602354cba93->leave($__internal_20e77553af30f5fe769cad28e86dc8be2327bb3fd4247cfa58a7b602354cba93_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a102ed1ac4a27b7dcce36774ac0333d022fa491f6f9a498c8712ac5bccf1f6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a102ed1ac4a27b7dcce36774ac0333d022fa491f6f9a498c8712ac5bccf1f6ae->enter($__internal_a102ed1ac4a27b7dcce36774ac0333d022fa491f6f9a498c8712ac5bccf1f6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8a35bc367f75e253ecfc547d6484c6b04449a656c153deb17a015ab7dd121a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a35bc367f75e253ecfc547d6484c6b04449a656c153deb17a015ab7dd121a6e->enter($__internal_8a35bc367f75e253ecfc547d6484c6b04449a656c153deb17a015ab7dd121a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_8a35bc367f75e253ecfc547d6484c6b04449a656c153deb17a015ab7dd121a6e->leave($__internal_8a35bc367f75e253ecfc547d6484c6b04449a656c153deb17a015ab7dd121a6e_prof);

        
        $__internal_a102ed1ac4a27b7dcce36774ac0333d022fa491f6f9a498c8712ac5bccf1f6ae->leave($__internal_a102ed1ac4a27b7dcce36774ac0333d022fa491f6f9a498c8712ac5bccf1f6ae_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1a74ec7ad9d53d0590b4c2201bab708b58e8bcd527930139129927d0811f4f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a74ec7ad9d53d0590b4c2201bab708b58e8bcd527930139129927d0811f4f90->enter($__internal_1a74ec7ad9d53d0590b4c2201bab708b58e8bcd527930139129927d0811f4f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_72e6881a7cd1b852f3c7da50de3785448d0f9ac5e019d9b100d577f9465ec14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e6881a7cd1b852f3c7da50de3785448d0f9ac5e019d9b100d577f9465ec14a->enter($__internal_72e6881a7cd1b852f3c7da50de3785448d0f9ac5e019d9b100d577f9465ec14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_72e6881a7cd1b852f3c7da50de3785448d0f9ac5e019d9b100d577f9465ec14a->leave($__internal_72e6881a7cd1b852f3c7da50de3785448d0f9ac5e019d9b100d577f9465ec14a_prof);

        
        $__internal_1a74ec7ad9d53d0590b4c2201bab708b58e8bcd527930139129927d0811f4f90->leave($__internal_1a74ec7ad9d53d0590b4c2201bab708b58e8bcd527930139129927d0811f4f90_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_182d369af55f9a01dd6d2b997f583d1d6cb6db1e795232134aecd1df0b60b95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182d369af55f9a01dd6d2b997f583d1d6cb6db1e795232134aecd1df0b60b95f->enter($__internal_182d369af55f9a01dd6d2b997f583d1d6cb6db1e795232134aecd1df0b60b95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4426b1e8507273c9527a679d15262c0d753f859ca14cee09328e4dcdaaa0033a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4426b1e8507273c9527a679d15262c0d753f859ca14cee09328e4dcdaaa0033a->enter($__internal_4426b1e8507273c9527a679d15262c0d753f859ca14cee09328e4dcdaaa0033a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4426b1e8507273c9527a679d15262c0d753f859ca14cee09328e4dcdaaa0033a->leave($__internal_4426b1e8507273c9527a679d15262c0d753f859ca14cee09328e4dcdaaa0033a_prof);

        
        $__internal_182d369af55f9a01dd6d2b997f583d1d6cb6db1e795232134aecd1df0b60b95f->leave($__internal_182d369af55f9a01dd6d2b997f583d1d6cb6db1e795232134aecd1df0b60b95f_prof);

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
