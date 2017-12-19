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
        $__internal_ddf4ab643d1540c89a3d6d9c6e5b008dc0536a289e0ee425f8e08f4ea81f5d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf4ab643d1540c89a3d6d9c6e5b008dc0536a289e0ee425f8e08f4ea81f5d77->enter($__internal_ddf4ab643d1540c89a3d6d9c6e5b008dc0536a289e0ee425f8e08f4ea81f5d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_83ff2ddcdbd0dea2a04157c932a89bd6737b262e6ed0a387051341d91bb398de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ff2ddcdbd0dea2a04157c932a89bd6737b262e6ed0a387051341d91bb398de->enter($__internal_83ff2ddcdbd0dea2a04157c932a89bd6737b262e6ed0a387051341d91bb398de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_ddf4ab643d1540c89a3d6d9c6e5b008dc0536a289e0ee425f8e08f4ea81f5d77->leave($__internal_ddf4ab643d1540c89a3d6d9c6e5b008dc0536a289e0ee425f8e08f4ea81f5d77_prof);

        
        $__internal_83ff2ddcdbd0dea2a04157c932a89bd6737b262e6ed0a387051341d91bb398de->leave($__internal_83ff2ddcdbd0dea2a04157c932a89bd6737b262e6ed0a387051341d91bb398de_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_69306efbe9f24ff653faa80f17a99c4c961064941203c4ff59de6bac343921ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69306efbe9f24ff653faa80f17a99c4c961064941203c4ff59de6bac343921ac->enter($__internal_69306efbe9f24ff653faa80f17a99c4c961064941203c4ff59de6bac343921ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_27bfd6342b5e8f1f830c7d7d5943aec1667308b04373b1c1d4728efb28ceae54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bfd6342b5e8f1f830c7d7d5943aec1667308b04373b1c1d4728efb28ceae54->enter($__internal_27bfd6342b5e8f1f830c7d7d5943aec1667308b04373b1c1d4728efb28ceae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_27bfd6342b5e8f1f830c7d7d5943aec1667308b04373b1c1d4728efb28ceae54->leave($__internal_27bfd6342b5e8f1f830c7d7d5943aec1667308b04373b1c1d4728efb28ceae54_prof);

        
        $__internal_69306efbe9f24ff653faa80f17a99c4c961064941203c4ff59de6bac343921ac->leave($__internal_69306efbe9f24ff653faa80f17a99c4c961064941203c4ff59de6bac343921ac_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_13d4f7a7f98810b401f43ea9655fc078513b503b16537a3108671ddf632f6a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d4f7a7f98810b401f43ea9655fc078513b503b16537a3108671ddf632f6a0e->enter($__internal_13d4f7a7f98810b401f43ea9655fc078513b503b16537a3108671ddf632f6a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f1c3a882ad66ce1ada8fc726aa2f4fdf656887dfc513dde018aeb9fe7a363a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c3a882ad66ce1ada8fc726aa2f4fdf656887dfc513dde018aeb9fe7a363a55->enter($__internal_f1c3a882ad66ce1ada8fc726aa2f4fdf656887dfc513dde018aeb9fe7a363a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f1c3a882ad66ce1ada8fc726aa2f4fdf656887dfc513dde018aeb9fe7a363a55->leave($__internal_f1c3a882ad66ce1ada8fc726aa2f4fdf656887dfc513dde018aeb9fe7a363a55_prof);

        
        $__internal_13d4f7a7f98810b401f43ea9655fc078513b503b16537a3108671ddf632f6a0e->leave($__internal_13d4f7a7f98810b401f43ea9655fc078513b503b16537a3108671ddf632f6a0e_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d776f7079b1e0b46513e31d5d147d7f2bd81b4868c7f3c4457c49585cab7c1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d776f7079b1e0b46513e31d5d147d7f2bd81b4868c7f3c4457c49585cab7c1b5->enter($__internal_d776f7079b1e0b46513e31d5d147d7f2bd81b4868c7f3c4457c49585cab7c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ffba987589945a81eef28ea4502d6f7f3eaac4a30708ecf051888b46b77dc271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffba987589945a81eef28ea4502d6f7f3eaac4a30708ecf051888b46b77dc271->enter($__internal_ffba987589945a81eef28ea4502d6f7f3eaac4a30708ecf051888b46b77dc271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ffba987589945a81eef28ea4502d6f7f3eaac4a30708ecf051888b46b77dc271->leave($__internal_ffba987589945a81eef28ea4502d6f7f3eaac4a30708ecf051888b46b77dc271_prof);

        
        $__internal_d776f7079b1e0b46513e31d5d147d7f2bd81b4868c7f3c4457c49585cab7c1b5->leave($__internal_d776f7079b1e0b46513e31d5d147d7f2bd81b4868c7f3c4457c49585cab7c1b5_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3c7d8c59b098c418196ef7797d0dbd43d24fbb03fe909263aceca883134ff6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7d8c59b098c418196ef7797d0dbd43d24fbb03fe909263aceca883134ff6c5->enter($__internal_3c7d8c59b098c418196ef7797d0dbd43d24fbb03fe909263aceca883134ff6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fd86d593350020866bfdd6e9c66b0404039ad4e653fa8fca09a565e3b56061aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd86d593350020866bfdd6e9c66b0404039ad4e653fa8fca09a565e3b56061aa->enter($__internal_fd86d593350020866bfdd6e9c66b0404039ad4e653fa8fca09a565e3b56061aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fd86d593350020866bfdd6e9c66b0404039ad4e653fa8fca09a565e3b56061aa->leave($__internal_fd86d593350020866bfdd6e9c66b0404039ad4e653fa8fca09a565e3b56061aa_prof);

        
        $__internal_3c7d8c59b098c418196ef7797d0dbd43d24fbb03fe909263aceca883134ff6c5->leave($__internal_3c7d8c59b098c418196ef7797d0dbd43d24fbb03fe909263aceca883134ff6c5_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9c4060c19d5c8524dcc6e03f0fed25068b5f082f8c61dc244805595a9a2d1da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4060c19d5c8524dcc6e03f0fed25068b5f082f8c61dc244805595a9a2d1da0->enter($__internal_9c4060c19d5c8524dcc6e03f0fed25068b5f082f8c61dc244805595a9a2d1da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_fd5b4907002ee574cdc00002bd0fda727c890774281ef70b7cfb84c4adbaa063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5b4907002ee574cdc00002bd0fda727c890774281ef70b7cfb84c4adbaa063->enter($__internal_fd5b4907002ee574cdc00002bd0fda727c890774281ef70b7cfb84c4adbaa063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_fd5b4907002ee574cdc00002bd0fda727c890774281ef70b7cfb84c4adbaa063->leave($__internal_fd5b4907002ee574cdc00002bd0fda727c890774281ef70b7cfb84c4adbaa063_prof);

        
        $__internal_9c4060c19d5c8524dcc6e03f0fed25068b5f082f8c61dc244805595a9a2d1da0->leave($__internal_9c4060c19d5c8524dcc6e03f0fed25068b5f082f8c61dc244805595a9a2d1da0_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a2ff252d9e930abe2c8e7de0c5d2d4329ff1a86da3681ee3a2b089f0f2d2fb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ff252d9e930abe2c8e7de0c5d2d4329ff1a86da3681ee3a2b089f0f2d2fb9c->enter($__internal_a2ff252d9e930abe2c8e7de0c5d2d4329ff1a86da3681ee3a2b089f0f2d2fb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_dd2439dd64ad63f8450e3b9151753747d9b69466c64baa1e39e30c9e63dd0492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2439dd64ad63f8450e3b9151753747d9b69466c64baa1e39e30c9e63dd0492->enter($__internal_dd2439dd64ad63f8450e3b9151753747d9b69466c64baa1e39e30c9e63dd0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_dd2439dd64ad63f8450e3b9151753747d9b69466c64baa1e39e30c9e63dd0492->leave($__internal_dd2439dd64ad63f8450e3b9151753747d9b69466c64baa1e39e30c9e63dd0492_prof);

        
        $__internal_a2ff252d9e930abe2c8e7de0c5d2d4329ff1a86da3681ee3a2b089f0f2d2fb9c->leave($__internal_a2ff252d9e930abe2c8e7de0c5d2d4329ff1a86da3681ee3a2b089f0f2d2fb9c_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_92cf886981523e6116da3d694b5a28e4f2e3e5be8c8edb8f798c9e86de59a65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cf886981523e6116da3d694b5a28e4f2e3e5be8c8edb8f798c9e86de59a65e->enter($__internal_92cf886981523e6116da3d694b5a28e4f2e3e5be8c8edb8f798c9e86de59a65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9c7d2f2834a914f3a6ea912d4fe42cd2a117a23f9d108d1c089eda2e0d65c1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7d2f2834a914f3a6ea912d4fe42cd2a117a23f9d108d1c089eda2e0d65c1e5->enter($__internal_9c7d2f2834a914f3a6ea912d4fe42cd2a117a23f9d108d1c089eda2e0d65c1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_9c7d2f2834a914f3a6ea912d4fe42cd2a117a23f9d108d1c089eda2e0d65c1e5->leave($__internal_9c7d2f2834a914f3a6ea912d4fe42cd2a117a23f9d108d1c089eda2e0d65c1e5_prof);

        
        $__internal_92cf886981523e6116da3d694b5a28e4f2e3e5be8c8edb8f798c9e86de59a65e->leave($__internal_92cf886981523e6116da3d694b5a28e4f2e3e5be8c8edb8f798c9e86de59a65e_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5e8fde93750553c1f51ffce01513801e96526dee940f57d2fb5db942a92faca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8fde93750553c1f51ffce01513801e96526dee940f57d2fb5db942a92faca0->enter($__internal_5e8fde93750553c1f51ffce01513801e96526dee940f57d2fb5db942a92faca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b9cd656adbf6bacd27dd90b12b7e937756fd09fa1ff8205d080e329880d484c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cd656adbf6bacd27dd90b12b7e937756fd09fa1ff8205d080e329880d484c4->enter($__internal_b9cd656adbf6bacd27dd90b12b7e937756fd09fa1ff8205d080e329880d484c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b9cd656adbf6bacd27dd90b12b7e937756fd09fa1ff8205d080e329880d484c4->leave($__internal_b9cd656adbf6bacd27dd90b12b7e937756fd09fa1ff8205d080e329880d484c4_prof);

        
        $__internal_5e8fde93750553c1f51ffce01513801e96526dee940f57d2fb5db942a92faca0->leave($__internal_5e8fde93750553c1f51ffce01513801e96526dee940f57d2fb5db942a92faca0_prof);

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
    {% set attr = attr|merge({class: (attr.class|Default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|Default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|Default(false)) and not valid %} has-error{% endif %}\">
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
