<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3631b6ad894feb9985b003c593c3e2824a8c7942f07dd07c570fbbad097c2b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d52ca2fa5d4faa2606a4963d9abc70daeafdbb336d6fb579ff38b9c7937575b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52ca2fa5d4faa2606a4963d9abc70daeafdbb336d6fb579ff38b9c7937575b7->enter($__internal_d52ca2fa5d4faa2606a4963d9abc70daeafdbb336d6fb579ff38b9c7937575b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b2828c7dee9a97d303cef183a9b959e3da14a5cc1aa15e3a892ceccc3b37d1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2828c7dee9a97d303cef183a9b959e3da14a5cc1aa15e3a892ceccc3b37d1db->enter($__internal_b2828c7dee9a97d303cef183a9b959e3da14a5cc1aa15e3a892ceccc3b37d1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_d52ca2fa5d4faa2606a4963d9abc70daeafdbb336d6fb579ff38b9c7937575b7->leave($__internal_d52ca2fa5d4faa2606a4963d9abc70daeafdbb336d6fb579ff38b9c7937575b7_prof);

        
        $__internal_b2828c7dee9a97d303cef183a9b959e3da14a5cc1aa15e3a892ceccc3b37d1db->leave($__internal_b2828c7dee9a97d303cef183a9b959e3da14a5cc1aa15e3a892ceccc3b37d1db_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_41161623e4ce9d279d5e21daef966b16b0f2f90bdec3b00cd1ecc5355ab86a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41161623e4ce9d279d5e21daef966b16b0f2f90bdec3b00cd1ecc5355ab86a06->enter($__internal_41161623e4ce9d279d5e21daef966b16b0f2f90bdec3b00cd1ecc5355ab86a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_48174ed26e4dc37a891817003b312fa680f7a3290b00b22e7cb230c9025676f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48174ed26e4dc37a891817003b312fa680f7a3290b00b22e7cb230c9025676f9->enter($__internal_48174ed26e4dc37a891817003b312fa680f7a3290b00b22e7cb230c9025676f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_48174ed26e4dc37a891817003b312fa680f7a3290b00b22e7cb230c9025676f9->leave($__internal_48174ed26e4dc37a891817003b312fa680f7a3290b00b22e7cb230c9025676f9_prof);

        
        $__internal_41161623e4ce9d279d5e21daef966b16b0f2f90bdec3b00cd1ecc5355ab86a06->leave($__internal_41161623e4ce9d279d5e21daef966b16b0f2f90bdec3b00cd1ecc5355ab86a06_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e95e6089c1286a6f65ed13f85d6da77c7bdb6607d3bef82062d87431a09a80d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95e6089c1286a6f65ed13f85d6da77c7bdb6607d3bef82062d87431a09a80d0->enter($__internal_e95e6089c1286a6f65ed13f85d6da77c7bdb6607d3bef82062d87431a09a80d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1ecb53150bdc3b2d5d6aca2f758f7ee435e41fd2b1d46b52ece907f88af95600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecb53150bdc3b2d5d6aca2f758f7ee435e41fd2b1d46b52ece907f88af95600->enter($__internal_1ecb53150bdc3b2d5d6aca2f758f7ee435e41fd2b1d46b52ece907f88af95600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_1ecb53150bdc3b2d5d6aca2f758f7ee435e41fd2b1d46b52ece907f88af95600->leave($__internal_1ecb53150bdc3b2d5d6aca2f758f7ee435e41fd2b1d46b52ece907f88af95600_prof);

        
        $__internal_e95e6089c1286a6f65ed13f85d6da77c7bdb6607d3bef82062d87431a09a80d0->leave($__internal_e95e6089c1286a6f65ed13f85d6da77c7bdb6607d3bef82062d87431a09a80d0_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cc81af637ce1fa97b34d5cdfd39bfa5e8f618322c772f310c7bb325f5b78c2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc81af637ce1fa97b34d5cdfd39bfa5e8f618322c772f310c7bb325f5b78c2f2->enter($__internal_cc81af637ce1fa97b34d5cdfd39bfa5e8f618322c772f310c7bb325f5b78c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f2cf603f275220855044b2615fb2a20ddbc50ee753507ffd94ea4367f65f4f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cf603f275220855044b2615fb2a20ddbc50ee753507ffd94ea4367f65f4f0d->enter($__internal_f2cf603f275220855044b2615fb2a20ddbc50ee753507ffd94ea4367f65f4f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_f2cf603f275220855044b2615fb2a20ddbc50ee753507ffd94ea4367f65f4f0d->leave($__internal_f2cf603f275220855044b2615fb2a20ddbc50ee753507ffd94ea4367f65f4f0d_prof);

        
        $__internal_cc81af637ce1fa97b34d5cdfd39bfa5e8f618322c772f310c7bb325f5b78c2f2->leave($__internal_cc81af637ce1fa97b34d5cdfd39bfa5e8f618322c772f310c7bb325f5b78c2f2_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d7a7077560546526023cb464ff3e3158a80bf0f7b6bf5c134f7d4344b57832cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a7077560546526023cb464ff3e3158a80bf0f7b6bf5c134f7d4344b57832cf->enter($__internal_d7a7077560546526023cb464ff3e3158a80bf0f7b6bf5c134f7d4344b57832cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cab22e68f1f0e0b9b80ca3371d4da1bdd6b9aaeae2da2b00b12f2f74321d6b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab22e68f1f0e0b9b80ca3371d4da1bdd6b9aaeae2da2b00b12f2f74321d6b0e->enter($__internal_cab22e68f1f0e0b9b80ca3371d4da1bdd6b9aaeae2da2b00b12f2f74321d6b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_cab22e68f1f0e0b9b80ca3371d4da1bdd6b9aaeae2da2b00b12f2f74321d6b0e->leave($__internal_cab22e68f1f0e0b9b80ca3371d4da1bdd6b9aaeae2da2b00b12f2f74321d6b0e_prof);

        
        $__internal_d7a7077560546526023cb464ff3e3158a80bf0f7b6bf5c134f7d4344b57832cf->leave($__internal_d7a7077560546526023cb464ff3e3158a80bf0f7b6bf5c134f7d4344b57832cf_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f260a81f8287663be1afb2ac549d05f241b75668803a5ec4e96d37a749b08ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f260a81f8287663be1afb2ac549d05f241b75668803a5ec4e96d37a749b08ffd->enter($__internal_f260a81f8287663be1afb2ac549d05f241b75668803a5ec4e96d37a749b08ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b74988009c40cf8d0faaf21eb24f49be3eee422d48287d1924df80206bd62ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74988009c40cf8d0faaf21eb24f49be3eee422d48287d1924df80206bd62ba0->enter($__internal_b74988009c40cf8d0faaf21eb24f49be3eee422d48287d1924df80206bd62ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_b74988009c40cf8d0faaf21eb24f49be3eee422d48287d1924df80206bd62ba0->leave($__internal_b74988009c40cf8d0faaf21eb24f49be3eee422d48287d1924df80206bd62ba0_prof);

        
        $__internal_f260a81f8287663be1afb2ac549d05f241b75668803a5ec4e96d37a749b08ffd->leave($__internal_f260a81f8287663be1afb2ac549d05f241b75668803a5ec4e96d37a749b08ffd_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_079bd4af5ffc679f9b5c1c7bdc363a5273edcc998728a71dc6eb1236701cca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079bd4af5ffc679f9b5c1c7bdc363a5273edcc998728a71dc6eb1236701cca48->enter($__internal_079bd4af5ffc679f9b5c1c7bdc363a5273edcc998728a71dc6eb1236701cca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_85ff845a9b3cc79e9428b7d9ef1e6a60388459cfdd5e1beeee50bc67868c98d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ff845a9b3cc79e9428b7d9ef1e6a60388459cfdd5e1beeee50bc67868c98d4->enter($__internal_85ff845a9b3cc79e9428b7d9ef1e6a60388459cfdd5e1beeee50bc67868c98d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_85ff845a9b3cc79e9428b7d9ef1e6a60388459cfdd5e1beeee50bc67868c98d4->leave($__internal_85ff845a9b3cc79e9428b7d9ef1e6a60388459cfdd5e1beeee50bc67868c98d4_prof);

        
        $__internal_079bd4af5ffc679f9b5c1c7bdc363a5273edcc998728a71dc6eb1236701cca48->leave($__internal_079bd4af5ffc679f9b5c1c7bdc363a5273edcc998728a71dc6eb1236701cca48_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1453997fdd1991a3f705b6051a625cc0d95be6bb16e3885ddeb56fe6aa39c730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1453997fdd1991a3f705b6051a625cc0d95be6bb16e3885ddeb56fe6aa39c730->enter($__internal_1453997fdd1991a3f705b6051a625cc0d95be6bb16e3885ddeb56fe6aa39c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e9b5a1a5b21a935d71613e12a0ac08a533809015688d561a0863ac76d8eb59ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b5a1a5b21a935d71613e12a0ac08a533809015688d561a0863ac76d8eb59ca->enter($__internal_e9b5a1a5b21a935d71613e12a0ac08a533809015688d561a0863ac76d8eb59ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_e9b5a1a5b21a935d71613e12a0ac08a533809015688d561a0863ac76d8eb59ca->leave($__internal_e9b5a1a5b21a935d71613e12a0ac08a533809015688d561a0863ac76d8eb59ca_prof);

        
        $__internal_1453997fdd1991a3f705b6051a625cc0d95be6bb16e3885ddeb56fe6aa39c730->leave($__internal_1453997fdd1991a3f705b6051a625cc0d95be6bb16e3885ddeb56fe6aa39c730_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4790301f9f2eca7bcfe8ea00366dbf37211954245cf8cdf268524ae282154c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4790301f9f2eca7bcfe8ea00366dbf37211954245cf8cdf268524ae282154c05->enter($__internal_4790301f9f2eca7bcfe8ea00366dbf37211954245cf8cdf268524ae282154c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2670959bcb11159bb7197349a97fc81762a52b8da2e8a240774110567129c068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2670959bcb11159bb7197349a97fc81762a52b8da2e8a240774110567129c068->enter($__internal_2670959bcb11159bb7197349a97fc81762a52b8da2e8a240774110567129c068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_2670959bcb11159bb7197349a97fc81762a52b8da2e8a240774110567129c068->leave($__internal_2670959bcb11159bb7197349a97fc81762a52b8da2e8a240774110567129c068_prof);

        
        $__internal_4790301f9f2eca7bcfe8ea00366dbf37211954245cf8cdf268524ae282154c05->leave($__internal_4790301f9f2eca7bcfe8ea00366dbf37211954245cf8cdf268524ae282154c05_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
