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
        $__internal_a6e21c3d12add9f5233abaf0fa6a32e27aedf20c6142ba0f9f618f6fd1bb8759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e21c3d12add9f5233abaf0fa6a32e27aedf20c6142ba0f9f618f6fd1bb8759->enter($__internal_a6e21c3d12add9f5233abaf0fa6a32e27aedf20c6142ba0f9f618f6fd1bb8759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_a0a9f7e67cebce6b54b756b9e6808d0244065471da8c59f7ebff350b6f4ee895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9f7e67cebce6b54b756b9e6808d0244065471da8c59f7ebff350b6f4ee895->enter($__internal_a0a9f7e67cebce6b54b756b9e6808d0244065471da8c59f7ebff350b6f4ee895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_a6e21c3d12add9f5233abaf0fa6a32e27aedf20c6142ba0f9f618f6fd1bb8759->leave($__internal_a6e21c3d12add9f5233abaf0fa6a32e27aedf20c6142ba0f9f618f6fd1bb8759_prof);

        
        $__internal_a0a9f7e67cebce6b54b756b9e6808d0244065471da8c59f7ebff350b6f4ee895->leave($__internal_a0a9f7e67cebce6b54b756b9e6808d0244065471da8c59f7ebff350b6f4ee895_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c3376bccb0369a86f440c777ca76c512647c6263fd2c6788ab07d6fdca451374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3376bccb0369a86f440c777ca76c512647c6263fd2c6788ab07d6fdca451374->enter($__internal_c3376bccb0369a86f440c777ca76c512647c6263fd2c6788ab07d6fdca451374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7650e66cbd6ef440f4eb5fbeddbb2e7b86e1e4079df2e0b788206246c65037a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7650e66cbd6ef440f4eb5fbeddbb2e7b86e1e4079df2e0b788206246c65037a1->enter($__internal_7650e66cbd6ef440f4eb5fbeddbb2e7b86e1e4079df2e0b788206246c65037a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_7650e66cbd6ef440f4eb5fbeddbb2e7b86e1e4079df2e0b788206246c65037a1->leave($__internal_7650e66cbd6ef440f4eb5fbeddbb2e7b86e1e4079df2e0b788206246c65037a1_prof);

        
        $__internal_c3376bccb0369a86f440c777ca76c512647c6263fd2c6788ab07d6fdca451374->leave($__internal_c3376bccb0369a86f440c777ca76c512647c6263fd2c6788ab07d6fdca451374_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7c1a817b2c0ebe9b613583b306782b80d669a1001f622e85ef634228456721e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1a817b2c0ebe9b613583b306782b80d669a1001f622e85ef634228456721e2->enter($__internal_7c1a817b2c0ebe9b613583b306782b80d669a1001f622e85ef634228456721e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c2c6379689aa90bdc0ae27d029b22f3c7bd92a43faf5c51febe448b2d058fd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c6379689aa90bdc0ae27d029b22f3c7bd92a43faf5c51febe448b2d058fd91->enter($__internal_c2c6379689aa90bdc0ae27d029b22f3c7bd92a43faf5c51febe448b2d058fd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_c2c6379689aa90bdc0ae27d029b22f3c7bd92a43faf5c51febe448b2d058fd91->leave($__internal_c2c6379689aa90bdc0ae27d029b22f3c7bd92a43faf5c51febe448b2d058fd91_prof);

        
        $__internal_7c1a817b2c0ebe9b613583b306782b80d669a1001f622e85ef634228456721e2->leave($__internal_7c1a817b2c0ebe9b613583b306782b80d669a1001f622e85ef634228456721e2_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8a7fcc468bbb7f2fabf98d6257782c4e1186c0fd7d9a483af562ef1c068d213c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7fcc468bbb7f2fabf98d6257782c4e1186c0fd7d9a483af562ef1c068d213c->enter($__internal_8a7fcc468bbb7f2fabf98d6257782c4e1186c0fd7d9a483af562ef1c068d213c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_550f45b80810844a36dbe61286040bee6d7345ed1cc53f8739699b3e2d0206c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550f45b80810844a36dbe61286040bee6d7345ed1cc53f8739699b3e2d0206c6->enter($__internal_550f45b80810844a36dbe61286040bee6d7345ed1cc53f8739699b3e2d0206c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_550f45b80810844a36dbe61286040bee6d7345ed1cc53f8739699b3e2d0206c6->leave($__internal_550f45b80810844a36dbe61286040bee6d7345ed1cc53f8739699b3e2d0206c6_prof);

        
        $__internal_8a7fcc468bbb7f2fabf98d6257782c4e1186c0fd7d9a483af562ef1c068d213c->leave($__internal_8a7fcc468bbb7f2fabf98d6257782c4e1186c0fd7d9a483af562ef1c068d213c_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_3d644c42fe932b55a4c3b2d76082e36aef3c90133d9fb757a632192e6324d1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d644c42fe932b55a4c3b2d76082e36aef3c90133d9fb757a632192e6324d1af->enter($__internal_3d644c42fe932b55a4c3b2d76082e36aef3c90133d9fb757a632192e6324d1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_4c704cacbec5ea91cfcc6f004a35b836a14d3b0b6e2ab435d9c41a0f2648292d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c704cacbec5ea91cfcc6f004a35b836a14d3b0b6e2ab435d9c41a0f2648292d->enter($__internal_4c704cacbec5ea91cfcc6f004a35b836a14d3b0b6e2ab435d9c41a0f2648292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_4c704cacbec5ea91cfcc6f004a35b836a14d3b0b6e2ab435d9c41a0f2648292d->leave($__internal_4c704cacbec5ea91cfcc6f004a35b836a14d3b0b6e2ab435d9c41a0f2648292d_prof);

        
        $__internal_3d644c42fe932b55a4c3b2d76082e36aef3c90133d9fb757a632192e6324d1af->leave($__internal_3d644c42fe932b55a4c3b2d76082e36aef3c90133d9fb757a632192e6324d1af_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e2611ee3bc7a0ec022da9cb44630625522921197d26e1f9c90e9f82b74d50c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2611ee3bc7a0ec022da9cb44630625522921197d26e1f9c90e9f82b74d50c03->enter($__internal_e2611ee3bc7a0ec022da9cb44630625522921197d26e1f9c90e9f82b74d50c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_42c01ae9edc7579b024910cd14ae0393c947833a165eba50c18358fd7fdf5748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c01ae9edc7579b024910cd14ae0393c947833a165eba50c18358fd7fdf5748->enter($__internal_42c01ae9edc7579b024910cd14ae0393c947833a165eba50c18358fd7fdf5748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_42c01ae9edc7579b024910cd14ae0393c947833a165eba50c18358fd7fdf5748->leave($__internal_42c01ae9edc7579b024910cd14ae0393c947833a165eba50c18358fd7fdf5748_prof);

        
        $__internal_e2611ee3bc7a0ec022da9cb44630625522921197d26e1f9c90e9f82b74d50c03->leave($__internal_e2611ee3bc7a0ec022da9cb44630625522921197d26e1f9c90e9f82b74d50c03_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ffbeb339d1aaffaa4ed03a32b1d49c44cb7a00553b164e25dee75b710e97c618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbeb339d1aaffaa4ed03a32b1d49c44cb7a00553b164e25dee75b710e97c618->enter($__internal_ffbeb339d1aaffaa4ed03a32b1d49c44cb7a00553b164e25dee75b710e97c618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b0cbebf0e0f33757c4c954ce9eb904b755dc36e291a46ada7162adbcb709b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cbebf0e0f33757c4c954ce9eb904b755dc36e291a46ada7162adbcb709b88f->enter($__internal_b0cbebf0e0f33757c4c954ce9eb904b755dc36e291a46ada7162adbcb709b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_b0cbebf0e0f33757c4c954ce9eb904b755dc36e291a46ada7162adbcb709b88f->leave($__internal_b0cbebf0e0f33757c4c954ce9eb904b755dc36e291a46ada7162adbcb709b88f_prof);

        
        $__internal_ffbeb339d1aaffaa4ed03a32b1d49c44cb7a00553b164e25dee75b710e97c618->leave($__internal_ffbeb339d1aaffaa4ed03a32b1d49c44cb7a00553b164e25dee75b710e97c618_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0bfe778bba4dad862068e7ae29ba3f106ae4741facb7da902b84b47fea548de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfe778bba4dad862068e7ae29ba3f106ae4741facb7da902b84b47fea548de8->enter($__internal_0bfe778bba4dad862068e7ae29ba3f106ae4741facb7da902b84b47fea548de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_33bb5f4b7499e4b24229d5ccfa3b302ba907e42ed729eda05c06c7ae27002811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bb5f4b7499e4b24229d5ccfa3b302ba907e42ed729eda05c06c7ae27002811->enter($__internal_33bb5f4b7499e4b24229d5ccfa3b302ba907e42ed729eda05c06c7ae27002811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_33bb5f4b7499e4b24229d5ccfa3b302ba907e42ed729eda05c06c7ae27002811->leave($__internal_33bb5f4b7499e4b24229d5ccfa3b302ba907e42ed729eda05c06c7ae27002811_prof);

        
        $__internal_0bfe778bba4dad862068e7ae29ba3f106ae4741facb7da902b84b47fea548de8->leave($__internal_0bfe778bba4dad862068e7ae29ba3f106ae4741facb7da902b84b47fea548de8_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bb2d69433f8b2c70baed44d7f5f4fb4d5530ba09f9da88f91f2186bd3a347319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2d69433f8b2c70baed44d7f5f4fb4d5530ba09f9da88f91f2186bd3a347319->enter($__internal_bb2d69433f8b2c70baed44d7f5f4fb4d5530ba09f9da88f91f2186bd3a347319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_888ef8efe9b68ea1a57f79bef9ef160b9a116bcef19f40ab66360260f599691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888ef8efe9b68ea1a57f79bef9ef160b9a116bcef19f40ab66360260f599691b->enter($__internal_888ef8efe9b68ea1a57f79bef9ef160b9a116bcef19f40ab66360260f599691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_888ef8efe9b68ea1a57f79bef9ef160b9a116bcef19f40ab66360260f599691b->leave($__internal_888ef8efe9b68ea1a57f79bef9ef160b9a116bcef19f40ab66360260f599691b_prof);

        
        $__internal_bb2d69433f8b2c70baed44d7f5f4fb4d5530ba09f9da88f91f2186bd3a347319->leave($__internal_bb2d69433f8b2c70baed44d7f5f4fb4d5530ba09f9da88f91f2186bd3a347319_prof);

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
