<?php

/* form_table_layout.html.twig */
class __TwigTemplate_10a4493dad506117f7b6ee32c7c5c604e564beba74578fde90e297251da71f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_086e2ae902745126b50a128461dc7a2bc3d6e65655495ef0a440413a5580779f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086e2ae902745126b50a128461dc7a2bc3d6e65655495ef0a440413a5580779f->enter($__internal_086e2ae902745126b50a128461dc7a2bc3d6e65655495ef0a440413a5580779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_950b80af84688b255ac63e08c4052c4160e1e633d85081ff36c81ebcc9fc049f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950b80af84688b255ac63e08c4052c4160e1e633d85081ff36c81ebcc9fc049f->enter($__internal_950b80af84688b255ac63e08c4052c4160e1e633d85081ff36c81ebcc9fc049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_086e2ae902745126b50a128461dc7a2bc3d6e65655495ef0a440413a5580779f->leave($__internal_086e2ae902745126b50a128461dc7a2bc3d6e65655495ef0a440413a5580779f_prof);

        
        $__internal_950b80af84688b255ac63e08c4052c4160e1e633d85081ff36c81ebcc9fc049f->leave($__internal_950b80af84688b255ac63e08c4052c4160e1e633d85081ff36c81ebcc9fc049f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0431deb8a3068ffd830ca6fdb847eee5b0335a9c99c12e5dfcd7cd55a56939bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0431deb8a3068ffd830ca6fdb847eee5b0335a9c99c12e5dfcd7cd55a56939bf->enter($__internal_0431deb8a3068ffd830ca6fdb847eee5b0335a9c99c12e5dfcd7cd55a56939bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2cbfdd822991bc0127709083ae516acb3b448696e00bfc70728379bd833f1e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbfdd822991bc0127709083ae516acb3b448696e00bfc70728379bd833f1e45->enter($__internal_2cbfdd822991bc0127709083ae516acb3b448696e00bfc70728379bd833f1e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2cbfdd822991bc0127709083ae516acb3b448696e00bfc70728379bd833f1e45->leave($__internal_2cbfdd822991bc0127709083ae516acb3b448696e00bfc70728379bd833f1e45_prof);

        
        $__internal_0431deb8a3068ffd830ca6fdb847eee5b0335a9c99c12e5dfcd7cd55a56939bf->leave($__internal_0431deb8a3068ffd830ca6fdb847eee5b0335a9c99c12e5dfcd7cd55a56939bf_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7bbd4685199c03b2f2ed24ea0097b353c3f2d6f4442efa154a4aa88cfb4e97bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbd4685199c03b2f2ed24ea0097b353c3f2d6f4442efa154a4aa88cfb4e97bd->enter($__internal_7bbd4685199c03b2f2ed24ea0097b353c3f2d6f4442efa154a4aa88cfb4e97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_aa9c94c32f029a756feaed4d2b87116603a23bff011b0b5bc7c85fb7c7d15ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9c94c32f029a756feaed4d2b87116603a23bff011b0b5bc7c85fb7c7d15ca7->enter($__internal_aa9c94c32f029a756feaed4d2b87116603a23bff011b0b5bc7c85fb7c7d15ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_aa9c94c32f029a756feaed4d2b87116603a23bff011b0b5bc7c85fb7c7d15ca7->leave($__internal_aa9c94c32f029a756feaed4d2b87116603a23bff011b0b5bc7c85fb7c7d15ca7_prof);

        
        $__internal_7bbd4685199c03b2f2ed24ea0097b353c3f2d6f4442efa154a4aa88cfb4e97bd->leave($__internal_7bbd4685199c03b2f2ed24ea0097b353c3f2d6f4442efa154a4aa88cfb4e97bd_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_71e5d3d29b0a5212bb900744771364dfea3863114f040b19c3ec386b96ec1e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e5d3d29b0a5212bb900744771364dfea3863114f040b19c3ec386b96ec1e8a->enter($__internal_71e5d3d29b0a5212bb900744771364dfea3863114f040b19c3ec386b96ec1e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4df09fd920b8efe39b9bd9d083535919ab7c5545406c0007bf45c1b3e4c9f37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df09fd920b8efe39b9bd9d083535919ab7c5545406c0007bf45c1b3e4c9f37c->enter($__internal_4df09fd920b8efe39b9bd9d083535919ab7c5545406c0007bf45c1b3e4c9f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4df09fd920b8efe39b9bd9d083535919ab7c5545406c0007bf45c1b3e4c9f37c->leave($__internal_4df09fd920b8efe39b9bd9d083535919ab7c5545406c0007bf45c1b3e4c9f37c_prof);

        
        $__internal_71e5d3d29b0a5212bb900744771364dfea3863114f040b19c3ec386b96ec1e8a->leave($__internal_71e5d3d29b0a5212bb900744771364dfea3863114f040b19c3ec386b96ec1e8a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b6d9a56cedaa1f7b31eb75e68a848943ef3b382884e0e9d52da0d6c5959f03d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d9a56cedaa1f7b31eb75e68a848943ef3b382884e0e9d52da0d6c5959f03d0->enter($__internal_b6d9a56cedaa1f7b31eb75e68a848943ef3b382884e0e9d52da0d6c5959f03d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c275f56b38b6667136c14dfe4d3812deca4cdd13f4b52f7617d38d0f0f4cc15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c275f56b38b6667136c14dfe4d3812deca4cdd13f4b52f7617d38d0f0f4cc15d->enter($__internal_c275f56b38b6667136c14dfe4d3812deca4cdd13f4b52f7617d38d0f0f4cc15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_c275f56b38b6667136c14dfe4d3812deca4cdd13f4b52f7617d38d0f0f4cc15d->leave($__internal_c275f56b38b6667136c14dfe4d3812deca4cdd13f4b52f7617d38d0f0f4cc15d_prof);

        
        $__internal_b6d9a56cedaa1f7b31eb75e68a848943ef3b382884e0e9d52da0d6c5959f03d0->leave($__internal_b6d9a56cedaa1f7b31eb75e68a848943ef3b382884e0e9d52da0d6c5959f03d0_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
