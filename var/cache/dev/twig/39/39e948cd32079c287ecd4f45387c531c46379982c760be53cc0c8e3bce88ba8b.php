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
        $__internal_9f9b0b7baf350cc394b4318ada4decfea3a06a45ce36f747eff7ef8d5278240c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9b0b7baf350cc394b4318ada4decfea3a06a45ce36f747eff7ef8d5278240c->enter($__internal_9f9b0b7baf350cc394b4318ada4decfea3a06a45ce36f747eff7ef8d5278240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_fe5e241ef9316880e3eb2560fe2592a05cd37304439ca82ec3316718eaa673cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5e241ef9316880e3eb2560fe2592a05cd37304439ca82ec3316718eaa673cb->enter($__internal_fe5e241ef9316880e3eb2560fe2592a05cd37304439ca82ec3316718eaa673cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_9f9b0b7baf350cc394b4318ada4decfea3a06a45ce36f747eff7ef8d5278240c->leave($__internal_9f9b0b7baf350cc394b4318ada4decfea3a06a45ce36f747eff7ef8d5278240c_prof);

        
        $__internal_fe5e241ef9316880e3eb2560fe2592a05cd37304439ca82ec3316718eaa673cb->leave($__internal_fe5e241ef9316880e3eb2560fe2592a05cd37304439ca82ec3316718eaa673cb_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e9477f60b9858b86c1caba66a3e110a53b00b1fca53da98751dea309d32ad357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9477f60b9858b86c1caba66a3e110a53b00b1fca53da98751dea309d32ad357->enter($__internal_e9477f60b9858b86c1caba66a3e110a53b00b1fca53da98751dea309d32ad357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_1c91a9b053055fd0ed73c5f526bf99d071ff9fe37295eebe4f501f81b8e0ceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c91a9b053055fd0ed73c5f526bf99d071ff9fe37295eebe4f501f81b8e0ceb9->enter($__internal_1c91a9b053055fd0ed73c5f526bf99d071ff9fe37295eebe4f501f81b8e0ceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1c91a9b053055fd0ed73c5f526bf99d071ff9fe37295eebe4f501f81b8e0ceb9->leave($__internal_1c91a9b053055fd0ed73c5f526bf99d071ff9fe37295eebe4f501f81b8e0ceb9_prof);

        
        $__internal_e9477f60b9858b86c1caba66a3e110a53b00b1fca53da98751dea309d32ad357->leave($__internal_e9477f60b9858b86c1caba66a3e110a53b00b1fca53da98751dea309d32ad357_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a52ac5ff4e3ba1685a361ff5a3df0d63c29f54ed933c863d8123c32a08e3a458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52ac5ff4e3ba1685a361ff5a3df0d63c29f54ed933c863d8123c32a08e3a458->enter($__internal_a52ac5ff4e3ba1685a361ff5a3df0d63c29f54ed933c863d8123c32a08e3a458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f80b7f454b10de0240c84693b13118c783445374efdfdfc272e69540e8b2585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80b7f454b10de0240c84693b13118c783445374efdfdfc272e69540e8b2585a->enter($__internal_f80b7f454b10de0240c84693b13118c783445374efdfdfc272e69540e8b2585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f80b7f454b10de0240c84693b13118c783445374efdfdfc272e69540e8b2585a->leave($__internal_f80b7f454b10de0240c84693b13118c783445374efdfdfc272e69540e8b2585a_prof);

        
        $__internal_a52ac5ff4e3ba1685a361ff5a3df0d63c29f54ed933c863d8123c32a08e3a458->leave($__internal_a52ac5ff4e3ba1685a361ff5a3df0d63c29f54ed933c863d8123c32a08e3a458_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_fc0c0be50c57c749c4a22fd04203a559ba1ca8ac71173544dde3cadfd524a928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0c0be50c57c749c4a22fd04203a559ba1ca8ac71173544dde3cadfd524a928->enter($__internal_fc0c0be50c57c749c4a22fd04203a559ba1ca8ac71173544dde3cadfd524a928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_9d70572113fdf2d9478a0cef6f3d67a7190eddfc0bc94048dc3578e856a1980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d70572113fdf2d9478a0cef6f3d67a7190eddfc0bc94048dc3578e856a1980c->enter($__internal_9d70572113fdf2d9478a0cef6f3d67a7190eddfc0bc94048dc3578e856a1980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_9d70572113fdf2d9478a0cef6f3d67a7190eddfc0bc94048dc3578e856a1980c->leave($__internal_9d70572113fdf2d9478a0cef6f3d67a7190eddfc0bc94048dc3578e856a1980c_prof);

        
        $__internal_fc0c0be50c57c749c4a22fd04203a559ba1ca8ac71173544dde3cadfd524a928->leave($__internal_fc0c0be50c57c749c4a22fd04203a559ba1ca8ac71173544dde3cadfd524a928_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d454f5d70699d559ce205fe795384b2d0831c03c9e3328fca28c9fccb9cc38ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d454f5d70699d559ce205fe795384b2d0831c03c9e3328fca28c9fccb9cc38ef->enter($__internal_d454f5d70699d559ce205fe795384b2d0831c03c9e3328fca28c9fccb9cc38ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_44b3efb9ed386da842b435371cba3977577420e5a7f68e809eb190408e500fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b3efb9ed386da842b435371cba3977577420e5a7f68e809eb190408e500fbc->enter($__internal_44b3efb9ed386da842b435371cba3977577420e5a7f68e809eb190408e500fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_44b3efb9ed386da842b435371cba3977577420e5a7f68e809eb190408e500fbc->leave($__internal_44b3efb9ed386da842b435371cba3977577420e5a7f68e809eb190408e500fbc_prof);

        
        $__internal_d454f5d70699d559ce205fe795384b2d0831c03c9e3328fca28c9fccb9cc38ef->leave($__internal_d454f5d70699d559ce205fe795384b2d0831c03c9e3328fca28c9fccb9cc38ef_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d12434c016dd97526cab0037d43bdcaefd12c11a5e845db39f3f3fd9a295bf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12434c016dd97526cab0037d43bdcaefd12c11a5e845db39f3f3fd9a295bf71->enter($__internal_d12434c016dd97526cab0037d43bdcaefd12c11a5e845db39f3f3fd9a295bf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_06f83e6ccb6225cb9412d0a5b1d8fff353eddc6730fba2125e1c02970e345644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f83e6ccb6225cb9412d0a5b1d8fff353eddc6730fba2125e1c02970e345644->enter($__internal_06f83e6ccb6225cb9412d0a5b1d8fff353eddc6730fba2125e1c02970e345644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_06f83e6ccb6225cb9412d0a5b1d8fff353eddc6730fba2125e1c02970e345644->leave($__internal_06f83e6ccb6225cb9412d0a5b1d8fff353eddc6730fba2125e1c02970e345644_prof);

        
        $__internal_d12434c016dd97526cab0037d43bdcaefd12c11a5e845db39f3f3fd9a295bf71->leave($__internal_d12434c016dd97526cab0037d43bdcaefd12c11a5e845db39f3f3fd9a295bf71_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e844f4ade5f02323121f6c08b524c1ba29eac2f2a08b6f39536d2a39ee068539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e844f4ade5f02323121f6c08b524c1ba29eac2f2a08b6f39536d2a39ee068539->enter($__internal_e844f4ade5f02323121f6c08b524c1ba29eac2f2a08b6f39536d2a39ee068539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_e8ea5c30713ea62809605f7902a71706f2df731973217aab07ff386cf6ac1a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ea5c30713ea62809605f7902a71706f2df731973217aab07ff386cf6ac1a43->enter($__internal_e8ea5c30713ea62809605f7902a71706f2df731973217aab07ff386cf6ac1a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_e8ea5c30713ea62809605f7902a71706f2df731973217aab07ff386cf6ac1a43->leave($__internal_e8ea5c30713ea62809605f7902a71706f2df731973217aab07ff386cf6ac1a43_prof);

        
        $__internal_e844f4ade5f02323121f6c08b524c1ba29eac2f2a08b6f39536d2a39ee068539->leave($__internal_e844f4ade5f02323121f6c08b524c1ba29eac2f2a08b6f39536d2a39ee068539_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a54576458a37cc9998902291433dd284bb7a0a5608dbe7bbaa51e9ca04ec59fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54576458a37cc9998902291433dd284bb7a0a5608dbe7bbaa51e9ca04ec59fd->enter($__internal_a54576458a37cc9998902291433dd284bb7a0a5608dbe7bbaa51e9ca04ec59fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e91872960784701c5eb18095d0c4869f19822e9daa1fe9b97555bb9979766bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91872960784701c5eb18095d0c4869f19822e9daa1fe9b97555bb9979766bec->enter($__internal_e91872960784701c5eb18095d0c4869f19822e9daa1fe9b97555bb9979766bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_e91872960784701c5eb18095d0c4869f19822e9daa1fe9b97555bb9979766bec->leave($__internal_e91872960784701c5eb18095d0c4869f19822e9daa1fe9b97555bb9979766bec_prof);

        
        $__internal_a54576458a37cc9998902291433dd284bb7a0a5608dbe7bbaa51e9ca04ec59fd->leave($__internal_a54576458a37cc9998902291433dd284bb7a0a5608dbe7bbaa51e9ca04ec59fd_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b32cfbb779342c423e7f731e3bf3633dcfa17db1ff89575dc8c28657338018d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32cfbb779342c423e7f731e3bf3633dcfa17db1ff89575dc8c28657338018d5->enter($__internal_b32cfbb779342c423e7f731e3bf3633dcfa17db1ff89575dc8c28657338018d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d5f83202adcda64b516359ec2fb978950102cf4f2e169aa15ccd25ac0e67401f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f83202adcda64b516359ec2fb978950102cf4f2e169aa15ccd25ac0e67401f->enter($__internal_d5f83202adcda64b516359ec2fb978950102cf4f2e169aa15ccd25ac0e67401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d5f83202adcda64b516359ec2fb978950102cf4f2e169aa15ccd25ac0e67401f->leave($__internal_d5f83202adcda64b516359ec2fb978950102cf4f2e169aa15ccd25ac0e67401f_prof);

        
        $__internal_b32cfbb779342c423e7f731e3bf3633dcfa17db1ff89575dc8c28657338018d5->leave($__internal_b32cfbb779342c423e7f731e3bf3633dcfa17db1ff89575dc8c28657338018d5_prof);

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
