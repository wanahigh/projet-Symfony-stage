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
        $__internal_39b76091e8d14d37507b7116f1df300992411ac28ac5015a9c69c4745609c930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b76091e8d14d37507b7116f1df300992411ac28ac5015a9c69c4745609c930->enter($__internal_39b76091e8d14d37507b7116f1df300992411ac28ac5015a9c69c4745609c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_01fbc6368b14f06cdc9747d7aa8e7bca83025114919811014e60ddac1a89788c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fbc6368b14f06cdc9747d7aa8e7bca83025114919811014e60ddac1a89788c->enter($__internal_01fbc6368b14f06cdc9747d7aa8e7bca83025114919811014e60ddac1a89788c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_39b76091e8d14d37507b7116f1df300992411ac28ac5015a9c69c4745609c930->leave($__internal_39b76091e8d14d37507b7116f1df300992411ac28ac5015a9c69c4745609c930_prof);

        
        $__internal_01fbc6368b14f06cdc9747d7aa8e7bca83025114919811014e60ddac1a89788c->leave($__internal_01fbc6368b14f06cdc9747d7aa8e7bca83025114919811014e60ddac1a89788c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1105db2b46a450961a8045e732003d206ad6839ebde1a3cce1cab645f7340b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1105db2b46a450961a8045e732003d206ad6839ebde1a3cce1cab645f7340b12->enter($__internal_1105db2b46a450961a8045e732003d206ad6839ebde1a3cce1cab645f7340b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_48dc2e5b594fcba39bc7190ebaf03f2b5898c7709d88ae766f19a69cbf286064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc2e5b594fcba39bc7190ebaf03f2b5898c7709d88ae766f19a69cbf286064->enter($__internal_48dc2e5b594fcba39bc7190ebaf03f2b5898c7709d88ae766f19a69cbf286064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_48dc2e5b594fcba39bc7190ebaf03f2b5898c7709d88ae766f19a69cbf286064->leave($__internal_48dc2e5b594fcba39bc7190ebaf03f2b5898c7709d88ae766f19a69cbf286064_prof);

        
        $__internal_1105db2b46a450961a8045e732003d206ad6839ebde1a3cce1cab645f7340b12->leave($__internal_1105db2b46a450961a8045e732003d206ad6839ebde1a3cce1cab645f7340b12_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4d83e33e0aa2596d10151c51eb32ba47632dab51ef035f7223d50eeb31454e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d83e33e0aa2596d10151c51eb32ba47632dab51ef035f7223d50eeb31454e19->enter($__internal_4d83e33e0aa2596d10151c51eb32ba47632dab51ef035f7223d50eeb31454e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d05dea501a64e339edf311f5bf7ac494ef7d2b8fe021991059bc5dcf721c999b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05dea501a64e339edf311f5bf7ac494ef7d2b8fe021991059bc5dcf721c999b->enter($__internal_d05dea501a64e339edf311f5bf7ac494ef7d2b8fe021991059bc5dcf721c999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_d05dea501a64e339edf311f5bf7ac494ef7d2b8fe021991059bc5dcf721c999b->leave($__internal_d05dea501a64e339edf311f5bf7ac494ef7d2b8fe021991059bc5dcf721c999b_prof);

        
        $__internal_4d83e33e0aa2596d10151c51eb32ba47632dab51ef035f7223d50eeb31454e19->leave($__internal_4d83e33e0aa2596d10151c51eb32ba47632dab51ef035f7223d50eeb31454e19_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_78ca754285bfda990a72cd3f4d5109c9b57804aa49925d5858d524fa1d061f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ca754285bfda990a72cd3f4d5109c9b57804aa49925d5858d524fa1d061f75->enter($__internal_78ca754285bfda990a72cd3f4d5109c9b57804aa49925d5858d524fa1d061f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6e207badda4f82583e042f6497de5f05fbeaca6ad5cd2fbb8bc820843c5807fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e207badda4f82583e042f6497de5f05fbeaca6ad5cd2fbb8bc820843c5807fb->enter($__internal_6e207badda4f82583e042f6497de5f05fbeaca6ad5cd2fbb8bc820843c5807fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_6e207badda4f82583e042f6497de5f05fbeaca6ad5cd2fbb8bc820843c5807fb->leave($__internal_6e207badda4f82583e042f6497de5f05fbeaca6ad5cd2fbb8bc820843c5807fb_prof);

        
        $__internal_78ca754285bfda990a72cd3f4d5109c9b57804aa49925d5858d524fa1d061f75->leave($__internal_78ca754285bfda990a72cd3f4d5109c9b57804aa49925d5858d524fa1d061f75_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_be5913182413ec5d2a2804c06726628328c2a9cfd2f10723b4ab83726cda599d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5913182413ec5d2a2804c06726628328c2a9cfd2f10723b4ab83726cda599d->enter($__internal_be5913182413ec5d2a2804c06726628328c2a9cfd2f10723b4ab83726cda599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b6667d9342c52853da302e9877775b49093cc5f04207c4c530d1ae036dc86e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6667d9342c52853da302e9877775b49093cc5f04207c4c530d1ae036dc86e04->enter($__internal_b6667d9342c52853da302e9877775b49093cc5f04207c4c530d1ae036dc86e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b6667d9342c52853da302e9877775b49093cc5f04207c4c530d1ae036dc86e04->leave($__internal_b6667d9342c52853da302e9877775b49093cc5f04207c4c530d1ae036dc86e04_prof);

        
        $__internal_be5913182413ec5d2a2804c06726628328c2a9cfd2f10723b4ab83726cda599d->leave($__internal_be5913182413ec5d2a2804c06726628328c2a9cfd2f10723b4ab83726cda599d_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9988ea38b5a857aff43b2c3338824df8a63729d976fd6182b8c5f0e3597153f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9988ea38b5a857aff43b2c3338824df8a63729d976fd6182b8c5f0e3597153f9->enter($__internal_9988ea38b5a857aff43b2c3338824df8a63729d976fd6182b8c5f0e3597153f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_19063d26057930f821eee37114303313d891de8a2404ba81d6efdbf7cb693fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19063d26057930f821eee37114303313d891de8a2404ba81d6efdbf7cb693fdf->enter($__internal_19063d26057930f821eee37114303313d891de8a2404ba81d6efdbf7cb693fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_19063d26057930f821eee37114303313d891de8a2404ba81d6efdbf7cb693fdf->leave($__internal_19063d26057930f821eee37114303313d891de8a2404ba81d6efdbf7cb693fdf_prof);

        
        $__internal_9988ea38b5a857aff43b2c3338824df8a63729d976fd6182b8c5f0e3597153f9->leave($__internal_9988ea38b5a857aff43b2c3338824df8a63729d976fd6182b8c5f0e3597153f9_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_55edee49c0d8a6f3aa44ad9b1b37b601d6736aa7159dd99a22de10b764f76eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55edee49c0d8a6f3aa44ad9b1b37b601d6736aa7159dd99a22de10b764f76eae->enter($__internal_55edee49c0d8a6f3aa44ad9b1b37b601d6736aa7159dd99a22de10b764f76eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7b8a89d0fd2d0313ccab3b1c73129d65f566870e1d4a5ee7badfe27532aecb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8a89d0fd2d0313ccab3b1c73129d65f566870e1d4a5ee7badfe27532aecb5e->enter($__internal_7b8a89d0fd2d0313ccab3b1c73129d65f566870e1d4a5ee7badfe27532aecb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_7b8a89d0fd2d0313ccab3b1c73129d65f566870e1d4a5ee7badfe27532aecb5e->leave($__internal_7b8a89d0fd2d0313ccab3b1c73129d65f566870e1d4a5ee7badfe27532aecb5e_prof);

        
        $__internal_55edee49c0d8a6f3aa44ad9b1b37b601d6736aa7159dd99a22de10b764f76eae->leave($__internal_55edee49c0d8a6f3aa44ad9b1b37b601d6736aa7159dd99a22de10b764f76eae_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c0dc9704e0f50f0238f17d22700322231b60be430532df0047215624a8d76f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dc9704e0f50f0238f17d22700322231b60be430532df0047215624a8d76f6f->enter($__internal_c0dc9704e0f50f0238f17d22700322231b60be430532df0047215624a8d76f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_fbe1bf7060e1398bab1b3d3dffabf2d22027c26a3e77e817b80211b7856aa589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe1bf7060e1398bab1b3d3dffabf2d22027c26a3e77e817b80211b7856aa589->enter($__internal_fbe1bf7060e1398bab1b3d3dffabf2d22027c26a3e77e817b80211b7856aa589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_fbe1bf7060e1398bab1b3d3dffabf2d22027c26a3e77e817b80211b7856aa589->leave($__internal_fbe1bf7060e1398bab1b3d3dffabf2d22027c26a3e77e817b80211b7856aa589_prof);

        
        $__internal_c0dc9704e0f50f0238f17d22700322231b60be430532df0047215624a8d76f6f->leave($__internal_c0dc9704e0f50f0238f17d22700322231b60be430532df0047215624a8d76f6f_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c53e3836879ec85419a6f31a06cdc56b7d5689cca67a06075f17b4b0f9a1db11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53e3836879ec85419a6f31a06cdc56b7d5689cca67a06075f17b4b0f9a1db11->enter($__internal_c53e3836879ec85419a6f31a06cdc56b7d5689cca67a06075f17b4b0f9a1db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1e03ae4d7cfc7e7820b2c7c8445f92bad537903263774446bd5bba56b7820c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e03ae4d7cfc7e7820b2c7c8445f92bad537903263774446bd5bba56b7820c84->enter($__internal_1e03ae4d7cfc7e7820b2c7c8445f92bad537903263774446bd5bba56b7820c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_1e03ae4d7cfc7e7820b2c7c8445f92bad537903263774446bd5bba56b7820c84->leave($__internal_1e03ae4d7cfc7e7820b2c7c8445f92bad537903263774446bd5bba56b7820c84_prof);

        
        $__internal_c53e3836879ec85419a6f31a06cdc56b7d5689cca67a06075f17b4b0f9a1db11->leave($__internal_c53e3836879ec85419a6f31a06cdc56b7d5689cca67a06075f17b4b0f9a1db11_prof);

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
