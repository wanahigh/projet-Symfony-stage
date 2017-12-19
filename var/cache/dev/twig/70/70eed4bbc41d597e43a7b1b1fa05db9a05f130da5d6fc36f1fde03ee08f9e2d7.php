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
        $__internal_f27cc508ab66b17c043a527e9f3452b75d5d147f0cc361a397b1a7f683222dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27cc508ab66b17c043a527e9f3452b75d5d147f0cc361a397b1a7f683222dd2->enter($__internal_f27cc508ab66b17c043a527e9f3452b75d5d147f0cc361a397b1a7f683222dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_494a02ae73f0461184c13b820021f198c9e94b57b5a88d24506412f893980316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494a02ae73f0461184c13b820021f198c9e94b57b5a88d24506412f893980316->enter($__internal_494a02ae73f0461184c13b820021f198c9e94b57b5a88d24506412f893980316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_f27cc508ab66b17c043a527e9f3452b75d5d147f0cc361a397b1a7f683222dd2->leave($__internal_f27cc508ab66b17c043a527e9f3452b75d5d147f0cc361a397b1a7f683222dd2_prof);

        
        $__internal_494a02ae73f0461184c13b820021f198c9e94b57b5a88d24506412f893980316->leave($__internal_494a02ae73f0461184c13b820021f198c9e94b57b5a88d24506412f893980316_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9456c13c66ce6d75ea09c7279b859d6968bf46ecd9b30573675584c48b4e435f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9456c13c66ce6d75ea09c7279b859d6968bf46ecd9b30573675584c48b4e435f->enter($__internal_9456c13c66ce6d75ea09c7279b859d6968bf46ecd9b30573675584c48b4e435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1184bea8c13993181410fc2621fd588fdd5ffe73fd128c9c08ddf4ed4523314c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1184bea8c13993181410fc2621fd588fdd5ffe73fd128c9c08ddf4ed4523314c->enter($__internal_1184bea8c13993181410fc2621fd588fdd5ffe73fd128c9c08ddf4ed4523314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1184bea8c13993181410fc2621fd588fdd5ffe73fd128c9c08ddf4ed4523314c->leave($__internal_1184bea8c13993181410fc2621fd588fdd5ffe73fd128c9c08ddf4ed4523314c_prof);

        
        $__internal_9456c13c66ce6d75ea09c7279b859d6968bf46ecd9b30573675584c48b4e435f->leave($__internal_9456c13c66ce6d75ea09c7279b859d6968bf46ecd9b30573675584c48b4e435f_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cfde2ec5e7de50241957b77b0521bfc7c82d930ab3ffbd1cf47958ed04a5df0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfde2ec5e7de50241957b77b0521bfc7c82d930ab3ffbd1cf47958ed04a5df0b->enter($__internal_cfde2ec5e7de50241957b77b0521bfc7c82d930ab3ffbd1cf47958ed04a5df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_33bdfb9f5b70fefb3924c4e081ddb0dfaf008aa2e2a3f4bc25d4a8b88c155704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bdfb9f5b70fefb3924c4e081ddb0dfaf008aa2e2a3f4bc25d4a8b88c155704->enter($__internal_33bdfb9f5b70fefb3924c4e081ddb0dfaf008aa2e2a3f4bc25d4a8b88c155704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_33bdfb9f5b70fefb3924c4e081ddb0dfaf008aa2e2a3f4bc25d4a8b88c155704->leave($__internal_33bdfb9f5b70fefb3924c4e081ddb0dfaf008aa2e2a3f4bc25d4a8b88c155704_prof);

        
        $__internal_cfde2ec5e7de50241957b77b0521bfc7c82d930ab3ffbd1cf47958ed04a5df0b->leave($__internal_cfde2ec5e7de50241957b77b0521bfc7c82d930ab3ffbd1cf47958ed04a5df0b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_963ffe9e97f4ee1771da417f4eaa0557db6e325db407d3a459f249cc5ab7ef16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963ffe9e97f4ee1771da417f4eaa0557db6e325db407d3a459f249cc5ab7ef16->enter($__internal_963ffe9e97f4ee1771da417f4eaa0557db6e325db407d3a459f249cc5ab7ef16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ed11eceec12f7cce2a6fa5e5f8ff61cf2b83ee43729d9f9ccc8e3da14d81eafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed11eceec12f7cce2a6fa5e5f8ff61cf2b83ee43729d9f9ccc8e3da14d81eafb->enter($__internal_ed11eceec12f7cce2a6fa5e5f8ff61cf2b83ee43729d9f9ccc8e3da14d81eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ed11eceec12f7cce2a6fa5e5f8ff61cf2b83ee43729d9f9ccc8e3da14d81eafb->leave($__internal_ed11eceec12f7cce2a6fa5e5f8ff61cf2b83ee43729d9f9ccc8e3da14d81eafb_prof);

        
        $__internal_963ffe9e97f4ee1771da417f4eaa0557db6e325db407d3a459f249cc5ab7ef16->leave($__internal_963ffe9e97f4ee1771da417f4eaa0557db6e325db407d3a459f249cc5ab7ef16_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_be4ea626f89cb18ebeaef0f91e92ba2e0baa08e83b8904d60a3c77d7ba3ba032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4ea626f89cb18ebeaef0f91e92ba2e0baa08e83b8904d60a3c77d7ba3ba032->enter($__internal_be4ea626f89cb18ebeaef0f91e92ba2e0baa08e83b8904d60a3c77d7ba3ba032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4df4517ed771d470c4e63810253e5eb7d655a347b6873e0dc65f19e8678da7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df4517ed771d470c4e63810253e5eb7d655a347b6873e0dc65f19e8678da7ff->enter($__internal_4df4517ed771d470c4e63810253e5eb7d655a347b6873e0dc65f19e8678da7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_4df4517ed771d470c4e63810253e5eb7d655a347b6873e0dc65f19e8678da7ff->leave($__internal_4df4517ed771d470c4e63810253e5eb7d655a347b6873e0dc65f19e8678da7ff_prof);

        
        $__internal_be4ea626f89cb18ebeaef0f91e92ba2e0baa08e83b8904d60a3c77d7ba3ba032->leave($__internal_be4ea626f89cb18ebeaef0f91e92ba2e0baa08e83b8904d60a3c77d7ba3ba032_prof);

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
