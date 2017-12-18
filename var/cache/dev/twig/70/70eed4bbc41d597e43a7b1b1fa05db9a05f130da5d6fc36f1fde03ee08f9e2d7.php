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
        $__internal_36c04c0f45b68a6c7ad0bf2649a9022bcd0055b71310453a24a6a20fade8215c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c04c0f45b68a6c7ad0bf2649a9022bcd0055b71310453a24a6a20fade8215c->enter($__internal_36c04c0f45b68a6c7ad0bf2649a9022bcd0055b71310453a24a6a20fade8215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6b5a2fbb581335d1f5f56f6b557e93b1c95b0e7928f883211d6216b625a21a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5a2fbb581335d1f5f56f6b557e93b1c95b0e7928f883211d6216b625a21a69->enter($__internal_6b5a2fbb581335d1f5f56f6b557e93b1c95b0e7928f883211d6216b625a21a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_36c04c0f45b68a6c7ad0bf2649a9022bcd0055b71310453a24a6a20fade8215c->leave($__internal_36c04c0f45b68a6c7ad0bf2649a9022bcd0055b71310453a24a6a20fade8215c_prof);

        
        $__internal_6b5a2fbb581335d1f5f56f6b557e93b1c95b0e7928f883211d6216b625a21a69->leave($__internal_6b5a2fbb581335d1f5f56f6b557e93b1c95b0e7928f883211d6216b625a21a69_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9af1af6927e093882630b806710c116d0db1f7ffc3d998776eb0c421d0886906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af1af6927e093882630b806710c116d0db1f7ffc3d998776eb0c421d0886906->enter($__internal_9af1af6927e093882630b806710c116d0db1f7ffc3d998776eb0c421d0886906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_29c2925f1dd30d624de694ddc40621afe2d11eb5befed75b8d4655135030eefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c2925f1dd30d624de694ddc40621afe2d11eb5befed75b8d4655135030eefc->enter($__internal_29c2925f1dd30d624de694ddc40621afe2d11eb5befed75b8d4655135030eefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_29c2925f1dd30d624de694ddc40621afe2d11eb5befed75b8d4655135030eefc->leave($__internal_29c2925f1dd30d624de694ddc40621afe2d11eb5befed75b8d4655135030eefc_prof);

        
        $__internal_9af1af6927e093882630b806710c116d0db1f7ffc3d998776eb0c421d0886906->leave($__internal_9af1af6927e093882630b806710c116d0db1f7ffc3d998776eb0c421d0886906_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1be1aec6fec9f35ce289f18447ac97f74de4522d00aefab7613ff34d89fc79d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be1aec6fec9f35ce289f18447ac97f74de4522d00aefab7613ff34d89fc79d0->enter($__internal_1be1aec6fec9f35ce289f18447ac97f74de4522d00aefab7613ff34d89fc79d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_64c26863c6b7835d8abf81917a1f261dba98e86f22e5e5247aec51364d759f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c26863c6b7835d8abf81917a1f261dba98e86f22e5e5247aec51364d759f35->enter($__internal_64c26863c6b7835d8abf81917a1f261dba98e86f22e5e5247aec51364d759f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_64c26863c6b7835d8abf81917a1f261dba98e86f22e5e5247aec51364d759f35->leave($__internal_64c26863c6b7835d8abf81917a1f261dba98e86f22e5e5247aec51364d759f35_prof);

        
        $__internal_1be1aec6fec9f35ce289f18447ac97f74de4522d00aefab7613ff34d89fc79d0->leave($__internal_1be1aec6fec9f35ce289f18447ac97f74de4522d00aefab7613ff34d89fc79d0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0399f36ca10e5576200b0ce3117a3ea2be4324a55e636f1a9d161e0c7926acd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0399f36ca10e5576200b0ce3117a3ea2be4324a55e636f1a9d161e0c7926acd5->enter($__internal_0399f36ca10e5576200b0ce3117a3ea2be4324a55e636f1a9d161e0c7926acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0994b9c7f8e13b3bf4179fddf545393794b7130183c32bdfc010a3ee62f5c002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0994b9c7f8e13b3bf4179fddf545393794b7130183c32bdfc010a3ee62f5c002->enter($__internal_0994b9c7f8e13b3bf4179fddf545393794b7130183c32bdfc010a3ee62f5c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0994b9c7f8e13b3bf4179fddf545393794b7130183c32bdfc010a3ee62f5c002->leave($__internal_0994b9c7f8e13b3bf4179fddf545393794b7130183c32bdfc010a3ee62f5c002_prof);

        
        $__internal_0399f36ca10e5576200b0ce3117a3ea2be4324a55e636f1a9d161e0c7926acd5->leave($__internal_0399f36ca10e5576200b0ce3117a3ea2be4324a55e636f1a9d161e0c7926acd5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_03a86ebb030803089575f129ef5db1b5a2f58e821f75dca7ed3f72d449425cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a86ebb030803089575f129ef5db1b5a2f58e821f75dca7ed3f72d449425cfe->enter($__internal_03a86ebb030803089575f129ef5db1b5a2f58e821f75dca7ed3f72d449425cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_025915a689b095f49113dfc6d46d3c6514a8e57fe6ce44fb6cf658d48aa4b43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025915a689b095f49113dfc6d46d3c6514a8e57fe6ce44fb6cf658d48aa4b43b->enter($__internal_025915a689b095f49113dfc6d46d3c6514a8e57fe6ce44fb6cf658d48aa4b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_025915a689b095f49113dfc6d46d3c6514a8e57fe6ce44fb6cf658d48aa4b43b->leave($__internal_025915a689b095f49113dfc6d46d3c6514a8e57fe6ce44fb6cf658d48aa4b43b_prof);

        
        $__internal_03a86ebb030803089575f129ef5db1b5a2f58e821f75dca7ed3f72d449425cfe->leave($__internal_03a86ebb030803089575f129ef5db1b5a2f58e821f75dca7ed3f72d449425cfe_prof);

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
