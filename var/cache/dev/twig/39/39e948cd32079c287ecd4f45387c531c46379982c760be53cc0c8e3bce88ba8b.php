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
        $__internal_08124235525d253227bbb4e087b44ba93dc9cce26fc72b79d2587b74bf4ccd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08124235525d253227bbb4e087b44ba93dc9cce26fc72b79d2587b74bf4ccd07->enter($__internal_08124235525d253227bbb4e087b44ba93dc9cce26fc72b79d2587b74bf4ccd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_189067810651e0e1fe867cfcaca0b5ac62506a4168a49eeb8fb380f5fe5ad0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189067810651e0e1fe867cfcaca0b5ac62506a4168a49eeb8fb380f5fe5ad0cd->enter($__internal_189067810651e0e1fe867cfcaca0b5ac62506a4168a49eeb8fb380f5fe5ad0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_08124235525d253227bbb4e087b44ba93dc9cce26fc72b79d2587b74bf4ccd07->leave($__internal_08124235525d253227bbb4e087b44ba93dc9cce26fc72b79d2587b74bf4ccd07_prof);

        
        $__internal_189067810651e0e1fe867cfcaca0b5ac62506a4168a49eeb8fb380f5fe5ad0cd->leave($__internal_189067810651e0e1fe867cfcaca0b5ac62506a4168a49eeb8fb380f5fe5ad0cd_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2cbff92287184628f82da66d8edbdca1805cc507ebfab6694a44d964dd86ade2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbff92287184628f82da66d8edbdca1805cc507ebfab6694a44d964dd86ade2->enter($__internal_2cbff92287184628f82da66d8edbdca1805cc507ebfab6694a44d964dd86ade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4576821982c1ad39da1cf5252acae5e41e9ca0c52b9589093c4d9daa9fc79009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4576821982c1ad39da1cf5252acae5e41e9ca0c52b9589093c4d9daa9fc79009->enter($__internal_4576821982c1ad39da1cf5252acae5e41e9ca0c52b9589093c4d9daa9fc79009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_4576821982c1ad39da1cf5252acae5e41e9ca0c52b9589093c4d9daa9fc79009->leave($__internal_4576821982c1ad39da1cf5252acae5e41e9ca0c52b9589093c4d9daa9fc79009_prof);

        
        $__internal_2cbff92287184628f82da66d8edbdca1805cc507ebfab6694a44d964dd86ade2->leave($__internal_2cbff92287184628f82da66d8edbdca1805cc507ebfab6694a44d964dd86ade2_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e7057f2e6ea1b1a4908b33ea78912631c8c77d31b304faa8f71e2d317010d0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7057f2e6ea1b1a4908b33ea78912631c8c77d31b304faa8f71e2d317010d0e3->enter($__internal_e7057f2e6ea1b1a4908b33ea78912631c8c77d31b304faa8f71e2d317010d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_be3a09720417ffced3d792de5d05520823119ee766daf89dbd53f114d9cea029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3a09720417ffced3d792de5d05520823119ee766daf89dbd53f114d9cea029->enter($__internal_be3a09720417ffced3d792de5d05520823119ee766daf89dbd53f114d9cea029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_be3a09720417ffced3d792de5d05520823119ee766daf89dbd53f114d9cea029->leave($__internal_be3a09720417ffced3d792de5d05520823119ee766daf89dbd53f114d9cea029_prof);

        
        $__internal_e7057f2e6ea1b1a4908b33ea78912631c8c77d31b304faa8f71e2d317010d0e3->leave($__internal_e7057f2e6ea1b1a4908b33ea78912631c8c77d31b304faa8f71e2d317010d0e3_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f5d86b6220fc5ef99542d7af463f7f75e771a6a17ec5496a47aa8d118ca8f03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d86b6220fc5ef99542d7af463f7f75e771a6a17ec5496a47aa8d118ca8f03d->enter($__internal_f5d86b6220fc5ef99542d7af463f7f75e771a6a17ec5496a47aa8d118ca8f03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_971d5d7c0333c10dc9a1aafc36ee5b7da66da86c62bc45a431360efd84e7873a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971d5d7c0333c10dc9a1aafc36ee5b7da66da86c62bc45a431360efd84e7873a->enter($__internal_971d5d7c0333c10dc9a1aafc36ee5b7da66da86c62bc45a431360efd84e7873a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_971d5d7c0333c10dc9a1aafc36ee5b7da66da86c62bc45a431360efd84e7873a->leave($__internal_971d5d7c0333c10dc9a1aafc36ee5b7da66da86c62bc45a431360efd84e7873a_prof);

        
        $__internal_f5d86b6220fc5ef99542d7af463f7f75e771a6a17ec5496a47aa8d118ca8f03d->leave($__internal_f5d86b6220fc5ef99542d7af463f7f75e771a6a17ec5496a47aa8d118ca8f03d_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_53e5114f1d5a2ce4c5d6ee0852dbb278a462309cd2c6b7042fe02ad24b1938e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e5114f1d5a2ce4c5d6ee0852dbb278a462309cd2c6b7042fe02ad24b1938e5->enter($__internal_53e5114f1d5a2ce4c5d6ee0852dbb278a462309cd2c6b7042fe02ad24b1938e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_41bd6d800c28c7333376bf49fe93faf7c6fc1310d547ee1d1f8f9bb9add2061b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bd6d800c28c7333376bf49fe93faf7c6fc1310d547ee1d1f8f9bb9add2061b->enter($__internal_41bd6d800c28c7333376bf49fe93faf7c6fc1310d547ee1d1f8f9bb9add2061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_41bd6d800c28c7333376bf49fe93faf7c6fc1310d547ee1d1f8f9bb9add2061b->leave($__internal_41bd6d800c28c7333376bf49fe93faf7c6fc1310d547ee1d1f8f9bb9add2061b_prof);

        
        $__internal_53e5114f1d5a2ce4c5d6ee0852dbb278a462309cd2c6b7042fe02ad24b1938e5->leave($__internal_53e5114f1d5a2ce4c5d6ee0852dbb278a462309cd2c6b7042fe02ad24b1938e5_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2b3bbd6a5bbd7fe3a24ecaab89403dd7975a279b2a50c5fea7cc3e5288684e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3bbd6a5bbd7fe3a24ecaab89403dd7975a279b2a50c5fea7cc3e5288684e25->enter($__internal_2b3bbd6a5bbd7fe3a24ecaab89403dd7975a279b2a50c5fea7cc3e5288684e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2ade2402005933c5e42b07661168150cd40ecf1f0dfcd4cca4e1cbf74a5ca046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ade2402005933c5e42b07661168150cd40ecf1f0dfcd4cca4e1cbf74a5ca046->enter($__internal_2ade2402005933c5e42b07661168150cd40ecf1f0dfcd4cca4e1cbf74a5ca046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2ade2402005933c5e42b07661168150cd40ecf1f0dfcd4cca4e1cbf74a5ca046->leave($__internal_2ade2402005933c5e42b07661168150cd40ecf1f0dfcd4cca4e1cbf74a5ca046_prof);

        
        $__internal_2b3bbd6a5bbd7fe3a24ecaab89403dd7975a279b2a50c5fea7cc3e5288684e25->leave($__internal_2b3bbd6a5bbd7fe3a24ecaab89403dd7975a279b2a50c5fea7cc3e5288684e25_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ed4e56274a109d28f410e2d6d2c9afdd2185f90fddf8373ce5892a48d6e512b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4e56274a109d28f410e2d6d2c9afdd2185f90fddf8373ce5892a48d6e512b1->enter($__internal_ed4e56274a109d28f410e2d6d2c9afdd2185f90fddf8373ce5892a48d6e512b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f95c1838451a77efe4e24ec998211e1bfaa5855479cdc707e813c9cfae5c7568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95c1838451a77efe4e24ec998211e1bfaa5855479cdc707e813c9cfae5c7568->enter($__internal_f95c1838451a77efe4e24ec998211e1bfaa5855479cdc707e813c9cfae5c7568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f95c1838451a77efe4e24ec998211e1bfaa5855479cdc707e813c9cfae5c7568->leave($__internal_f95c1838451a77efe4e24ec998211e1bfaa5855479cdc707e813c9cfae5c7568_prof);

        
        $__internal_ed4e56274a109d28f410e2d6d2c9afdd2185f90fddf8373ce5892a48d6e512b1->leave($__internal_ed4e56274a109d28f410e2d6d2c9afdd2185f90fddf8373ce5892a48d6e512b1_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f090c351abdcb58ac533c6a807e7f511c57847de4e9eaa0249a6ec6c4bd2b42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f090c351abdcb58ac533c6a807e7f511c57847de4e9eaa0249a6ec6c4bd2b42f->enter($__internal_f090c351abdcb58ac533c6a807e7f511c57847de4e9eaa0249a6ec6c4bd2b42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_97b53ff1bbeffc58e33ad3c2a4862adb0eafbd2d609414ded43807ecbbf791a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b53ff1bbeffc58e33ad3c2a4862adb0eafbd2d609414ded43807ecbbf791a1->enter($__internal_97b53ff1bbeffc58e33ad3c2a4862adb0eafbd2d609414ded43807ecbbf791a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_97b53ff1bbeffc58e33ad3c2a4862adb0eafbd2d609414ded43807ecbbf791a1->leave($__internal_97b53ff1bbeffc58e33ad3c2a4862adb0eafbd2d609414ded43807ecbbf791a1_prof);

        
        $__internal_f090c351abdcb58ac533c6a807e7f511c57847de4e9eaa0249a6ec6c4bd2b42f->leave($__internal_f090c351abdcb58ac533c6a807e7f511c57847de4e9eaa0249a6ec6c4bd2b42f_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_17670be97174fc5830a0a33a55e0b5b047796157ae6212435b4ee31d83d2e8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17670be97174fc5830a0a33a55e0b5b047796157ae6212435b4ee31d83d2e8e5->enter($__internal_17670be97174fc5830a0a33a55e0b5b047796157ae6212435b4ee31d83d2e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_958fd11d3158e06815a40f1eb81d3c76c6b01b6940f32df2cbe4d850d08df61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958fd11d3158e06815a40f1eb81d3c76c6b01b6940f32df2cbe4d850d08df61b->enter($__internal_958fd11d3158e06815a40f1eb81d3c76c6b01b6940f32df2cbe4d850d08df61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_958fd11d3158e06815a40f1eb81d3c76c6b01b6940f32df2cbe4d850d08df61b->leave($__internal_958fd11d3158e06815a40f1eb81d3c76c6b01b6940f32df2cbe4d850d08df61b_prof);

        
        $__internal_17670be97174fc5830a0a33a55e0b5b047796157ae6212435b4ee31d83d2e8e5->leave($__internal_17670be97174fc5830a0a33a55e0b5b047796157ae6212435b4ee31d83d2e8e5_prof);

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
