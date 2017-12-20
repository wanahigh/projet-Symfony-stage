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
        $__internal_2d82edf10299be7053c989b191250ee34292a88403a28c05b0c2d924b3b1bb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d82edf10299be7053c989b191250ee34292a88403a28c05b0c2d924b3b1bb2b->enter($__internal_2d82edf10299be7053c989b191250ee34292a88403a28c05b0c2d924b3b1bb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0fc34083ca68de1f2bcb839239fdd4dde21a17018323a010b892fb964ac01df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc34083ca68de1f2bcb839239fdd4dde21a17018323a010b892fb964ac01df8->enter($__internal_0fc34083ca68de1f2bcb839239fdd4dde21a17018323a010b892fb964ac01df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_2d82edf10299be7053c989b191250ee34292a88403a28c05b0c2d924b3b1bb2b->leave($__internal_2d82edf10299be7053c989b191250ee34292a88403a28c05b0c2d924b3b1bb2b_prof);

        
        $__internal_0fc34083ca68de1f2bcb839239fdd4dde21a17018323a010b892fb964ac01df8->leave($__internal_0fc34083ca68de1f2bcb839239fdd4dde21a17018323a010b892fb964ac01df8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_71c6eca78c059692d5df4c91cbded3fa0b1548bc785ffb3753a8d82b0b4d25ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c6eca78c059692d5df4c91cbded3fa0b1548bc785ffb3753a8d82b0b4d25ac->enter($__internal_71c6eca78c059692d5df4c91cbded3fa0b1548bc785ffb3753a8d82b0b4d25ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_41190203e1263cb8a334d6ffc10b167ad0e89e3e062164c71350f21b2713792a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41190203e1263cb8a334d6ffc10b167ad0e89e3e062164c71350f21b2713792a->enter($__internal_41190203e1263cb8a334d6ffc10b167ad0e89e3e062164c71350f21b2713792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_41190203e1263cb8a334d6ffc10b167ad0e89e3e062164c71350f21b2713792a->leave($__internal_41190203e1263cb8a334d6ffc10b167ad0e89e3e062164c71350f21b2713792a_prof);

        
        $__internal_71c6eca78c059692d5df4c91cbded3fa0b1548bc785ffb3753a8d82b0b4d25ac->leave($__internal_71c6eca78c059692d5df4c91cbded3fa0b1548bc785ffb3753a8d82b0b4d25ac_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b26fea60bc0be54ed0ed21398c0dbcf02374f1eb77976c8e8b16646313b1481a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26fea60bc0be54ed0ed21398c0dbcf02374f1eb77976c8e8b16646313b1481a->enter($__internal_b26fea60bc0be54ed0ed21398c0dbcf02374f1eb77976c8e8b16646313b1481a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e280bfdbfb811554fa8f62f9b7937992888c0d6e9295eb5637d286d5c29bb582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e280bfdbfb811554fa8f62f9b7937992888c0d6e9295eb5637d286d5c29bb582->enter($__internal_e280bfdbfb811554fa8f62f9b7937992888c0d6e9295eb5637d286d5c29bb582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_e280bfdbfb811554fa8f62f9b7937992888c0d6e9295eb5637d286d5c29bb582->leave($__internal_e280bfdbfb811554fa8f62f9b7937992888c0d6e9295eb5637d286d5c29bb582_prof);

        
        $__internal_b26fea60bc0be54ed0ed21398c0dbcf02374f1eb77976c8e8b16646313b1481a->leave($__internal_b26fea60bc0be54ed0ed21398c0dbcf02374f1eb77976c8e8b16646313b1481a_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2ffac78d831360274c3819e213d098aa5372ec927d73080808b2e4bce040182d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffac78d831360274c3819e213d098aa5372ec927d73080808b2e4bce040182d->enter($__internal_2ffac78d831360274c3819e213d098aa5372ec927d73080808b2e4bce040182d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b52a269003133eb1bd07e9eb8a72460d3d0a1f68370319fcc8e003b5cb6f8e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52a269003133eb1bd07e9eb8a72460d3d0a1f68370319fcc8e003b5cb6f8e1b->enter($__internal_b52a269003133eb1bd07e9eb8a72460d3d0a1f68370319fcc8e003b5cb6f8e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_b52a269003133eb1bd07e9eb8a72460d3d0a1f68370319fcc8e003b5cb6f8e1b->leave($__internal_b52a269003133eb1bd07e9eb8a72460d3d0a1f68370319fcc8e003b5cb6f8e1b_prof);

        
        $__internal_2ffac78d831360274c3819e213d098aa5372ec927d73080808b2e4bce040182d->leave($__internal_2ffac78d831360274c3819e213d098aa5372ec927d73080808b2e4bce040182d_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e9b0fba17a22f9b0e91fdb29c464862ecda93ae92e40f25a7184e6ca978f234b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b0fba17a22f9b0e91fdb29c464862ecda93ae92e40f25a7184e6ca978f234b->enter($__internal_e9b0fba17a22f9b0e91fdb29c464862ecda93ae92e40f25a7184e6ca978f234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d74aeb0094da826d5cfd986d0d75b582d780c2be9b5d08cc7c441f49f446767e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74aeb0094da826d5cfd986d0d75b582d780c2be9b5d08cc7c441f49f446767e->enter($__internal_d74aeb0094da826d5cfd986d0d75b582d780c2be9b5d08cc7c441f49f446767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d74aeb0094da826d5cfd986d0d75b582d780c2be9b5d08cc7c441f49f446767e->leave($__internal_d74aeb0094da826d5cfd986d0d75b582d780c2be9b5d08cc7c441f49f446767e_prof);

        
        $__internal_e9b0fba17a22f9b0e91fdb29c464862ecda93ae92e40f25a7184e6ca978f234b->leave($__internal_e9b0fba17a22f9b0e91fdb29c464862ecda93ae92e40f25a7184e6ca978f234b_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e10901c61a0856be7417dc6a4135d3fa139f4c91c58a943a3ab81c6f8e769d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10901c61a0856be7417dc6a4135d3fa139f4c91c58a943a3ab81c6f8e769d17->enter($__internal_e10901c61a0856be7417dc6a4135d3fa139f4c91c58a943a3ab81c6f8e769d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8e02f3fc9748f0dc4b0f8353195450654372ca88109466e361587df7e978b1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e02f3fc9748f0dc4b0f8353195450654372ca88109466e361587df7e978b1fd->enter($__internal_8e02f3fc9748f0dc4b0f8353195450654372ca88109466e361587df7e978b1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_8e02f3fc9748f0dc4b0f8353195450654372ca88109466e361587df7e978b1fd->leave($__internal_8e02f3fc9748f0dc4b0f8353195450654372ca88109466e361587df7e978b1fd_prof);

        
        $__internal_e10901c61a0856be7417dc6a4135d3fa139f4c91c58a943a3ab81c6f8e769d17->leave($__internal_e10901c61a0856be7417dc6a4135d3fa139f4c91c58a943a3ab81c6f8e769d17_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fd2bbe193dd914f8b97e88ed480527f74247fcbaa062d4504e516465a47397c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2bbe193dd914f8b97e88ed480527f74247fcbaa062d4504e516465a47397c7->enter($__internal_fd2bbe193dd914f8b97e88ed480527f74247fcbaa062d4504e516465a47397c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b9e2d575cc5acc0defb4f8c1843a7c8804392677f9b220c919b88eecca511f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e2d575cc5acc0defb4f8c1843a7c8804392677f9b220c919b88eecca511f05->enter($__internal_b9e2d575cc5acc0defb4f8c1843a7c8804392677f9b220c919b88eecca511f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_b9e2d575cc5acc0defb4f8c1843a7c8804392677f9b220c919b88eecca511f05->leave($__internal_b9e2d575cc5acc0defb4f8c1843a7c8804392677f9b220c919b88eecca511f05_prof);

        
        $__internal_fd2bbe193dd914f8b97e88ed480527f74247fcbaa062d4504e516465a47397c7->leave($__internal_fd2bbe193dd914f8b97e88ed480527f74247fcbaa062d4504e516465a47397c7_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4ad8babc00e5c3758ae81d3e37e9687a0bb6e717ed4b76c7f6fc3340c62b4c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad8babc00e5c3758ae81d3e37e9687a0bb6e717ed4b76c7f6fc3340c62b4c95->enter($__internal_4ad8babc00e5c3758ae81d3e37e9687a0bb6e717ed4b76c7f6fc3340c62b4c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_921964966a76a024cd97b1d8406dfadaf5b48ab8d19c9f022ab2d2b224880aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921964966a76a024cd97b1d8406dfadaf5b48ab8d19c9f022ab2d2b224880aba->enter($__internal_921964966a76a024cd97b1d8406dfadaf5b48ab8d19c9f022ab2d2b224880aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_921964966a76a024cd97b1d8406dfadaf5b48ab8d19c9f022ab2d2b224880aba->leave($__internal_921964966a76a024cd97b1d8406dfadaf5b48ab8d19c9f022ab2d2b224880aba_prof);

        
        $__internal_4ad8babc00e5c3758ae81d3e37e9687a0bb6e717ed4b76c7f6fc3340c62b4c95->leave($__internal_4ad8babc00e5c3758ae81d3e37e9687a0bb6e717ed4b76c7f6fc3340c62b4c95_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7b14b604bd1f8e9bf2165fe0ebe65ba8390e922f14c1db8de1bf297c3e6405a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b14b604bd1f8e9bf2165fe0ebe65ba8390e922f14c1db8de1bf297c3e6405a8->enter($__internal_7b14b604bd1f8e9bf2165fe0ebe65ba8390e922f14c1db8de1bf297c3e6405a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cf2d497fd46a4ee06fe71c2b1aea78c621920d406b26c15b70d54842249e38cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2d497fd46a4ee06fe71c2b1aea78c621920d406b26c15b70d54842249e38cd->enter($__internal_cf2d497fd46a4ee06fe71c2b1aea78c621920d406b26c15b70d54842249e38cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cf2d497fd46a4ee06fe71c2b1aea78c621920d406b26c15b70d54842249e38cd->leave($__internal_cf2d497fd46a4ee06fe71c2b1aea78c621920d406b26c15b70d54842249e38cd_prof);

        
        $__internal_7b14b604bd1f8e9bf2165fe0ebe65ba8390e922f14c1db8de1bf297c3e6405a8->leave($__internal_7b14b604bd1f8e9bf2165fe0ebe65ba8390e922f14c1db8de1bf297c3e6405a8_prof);

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
