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
        $__internal_12844c4b2b15e57fc01ecc87c4f20fcfd4fa2442d441181c1ab0ed066593afca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12844c4b2b15e57fc01ecc87c4f20fcfd4fa2442d441181c1ab0ed066593afca->enter($__internal_12844c4b2b15e57fc01ecc87c4f20fcfd4fa2442d441181c1ab0ed066593afca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d61daf4497aaa97b5256979d2203011848d8bed6dab1bc2a5a9e442f5a320f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61daf4497aaa97b5256979d2203011848d8bed6dab1bc2a5a9e442f5a320f81->enter($__internal_d61daf4497aaa97b5256979d2203011848d8bed6dab1bc2a5a9e442f5a320f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_12844c4b2b15e57fc01ecc87c4f20fcfd4fa2442d441181c1ab0ed066593afca->leave($__internal_12844c4b2b15e57fc01ecc87c4f20fcfd4fa2442d441181c1ab0ed066593afca_prof);

        
        $__internal_d61daf4497aaa97b5256979d2203011848d8bed6dab1bc2a5a9e442f5a320f81->leave($__internal_d61daf4497aaa97b5256979d2203011848d8bed6dab1bc2a5a9e442f5a320f81_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9effa85eb0594664137ea7c3d3c5b76fc0605b917aea21f74febe2bbfe33b314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9effa85eb0594664137ea7c3d3c5b76fc0605b917aea21f74febe2bbfe33b314->enter($__internal_9effa85eb0594664137ea7c3d3c5b76fc0605b917aea21f74febe2bbfe33b314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_28bb8f77ca9c300292a7091f7bfe37fbeab7812b649a1b3cbede2a94fb495922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bb8f77ca9c300292a7091f7bfe37fbeab7812b649a1b3cbede2a94fb495922->enter($__internal_28bb8f77ca9c300292a7091f7bfe37fbeab7812b649a1b3cbede2a94fb495922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_28bb8f77ca9c300292a7091f7bfe37fbeab7812b649a1b3cbede2a94fb495922->leave($__internal_28bb8f77ca9c300292a7091f7bfe37fbeab7812b649a1b3cbede2a94fb495922_prof);

        
        $__internal_9effa85eb0594664137ea7c3d3c5b76fc0605b917aea21f74febe2bbfe33b314->leave($__internal_9effa85eb0594664137ea7c3d3c5b76fc0605b917aea21f74febe2bbfe33b314_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9f7ff2761d97fa518cc98688a06a0ca4a0c266ea43afc9af3afecd199329ad23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7ff2761d97fa518cc98688a06a0ca4a0c266ea43afc9af3afecd199329ad23->enter($__internal_9f7ff2761d97fa518cc98688a06a0ca4a0c266ea43afc9af3afecd199329ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cae893847b6495919e751aa71c8e69954cb3ebe99868b91a7e3cf6ad8cc15e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae893847b6495919e751aa71c8e69954cb3ebe99868b91a7e3cf6ad8cc15e74->enter($__internal_cae893847b6495919e751aa71c8e69954cb3ebe99868b91a7e3cf6ad8cc15e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_cae893847b6495919e751aa71c8e69954cb3ebe99868b91a7e3cf6ad8cc15e74->leave($__internal_cae893847b6495919e751aa71c8e69954cb3ebe99868b91a7e3cf6ad8cc15e74_prof);

        
        $__internal_9f7ff2761d97fa518cc98688a06a0ca4a0c266ea43afc9af3afecd199329ad23->leave($__internal_9f7ff2761d97fa518cc98688a06a0ca4a0c266ea43afc9af3afecd199329ad23_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8db91eec20debb5d62fa2af2dc8cecc8195e1f8ded674ee72d99c3435c0f0cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db91eec20debb5d62fa2af2dc8cecc8195e1f8ded674ee72d99c3435c0f0cb4->enter($__internal_8db91eec20debb5d62fa2af2dc8cecc8195e1f8ded674ee72d99c3435c0f0cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_a6a81a1d88a3224dfcd605b20f9e95401e2ed104f00de667a5197f62851235e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a81a1d88a3224dfcd605b20f9e95401e2ed104f00de667a5197f62851235e8->enter($__internal_a6a81a1d88a3224dfcd605b20f9e95401e2ed104f00de667a5197f62851235e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_a6a81a1d88a3224dfcd605b20f9e95401e2ed104f00de667a5197f62851235e8->leave($__internal_a6a81a1d88a3224dfcd605b20f9e95401e2ed104f00de667a5197f62851235e8_prof);

        
        $__internal_8db91eec20debb5d62fa2af2dc8cecc8195e1f8ded674ee72d99c3435c0f0cb4->leave($__internal_8db91eec20debb5d62fa2af2dc8cecc8195e1f8ded674ee72d99c3435c0f0cb4_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d5b109243d126049948331a2f95a80045925ec3be245625b6f52444ad5e53c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b109243d126049948331a2f95a80045925ec3be245625b6f52444ad5e53c87->enter($__internal_d5b109243d126049948331a2f95a80045925ec3be245625b6f52444ad5e53c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c5d2ceedc7d5d3fa5a4ce183c71ef53060643c9a821f1e8d24001051a4f528aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d2ceedc7d5d3fa5a4ce183c71ef53060643c9a821f1e8d24001051a4f528aa->enter($__internal_c5d2ceedc7d5d3fa5a4ce183c71ef53060643c9a821f1e8d24001051a4f528aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_c5d2ceedc7d5d3fa5a4ce183c71ef53060643c9a821f1e8d24001051a4f528aa->leave($__internal_c5d2ceedc7d5d3fa5a4ce183c71ef53060643c9a821f1e8d24001051a4f528aa_prof);

        
        $__internal_d5b109243d126049948331a2f95a80045925ec3be245625b6f52444ad5e53c87->leave($__internal_d5b109243d126049948331a2f95a80045925ec3be245625b6f52444ad5e53c87_prof);

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
