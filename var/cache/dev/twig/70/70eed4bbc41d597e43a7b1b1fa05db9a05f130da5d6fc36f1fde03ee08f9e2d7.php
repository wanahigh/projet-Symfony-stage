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
        $__internal_59a627202a457c4d4392a9466def31e44bf8daecc4abb573a3d7adef117396c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a627202a457c4d4392a9466def31e44bf8daecc4abb573a3d7adef117396c9->enter($__internal_59a627202a457c4d4392a9466def31e44bf8daecc4abb573a3d7adef117396c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_729a41a4aede926b6499c5881217d60d8934853eaa964e333d5b74d7341c7baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729a41a4aede926b6499c5881217d60d8934853eaa964e333d5b74d7341c7baa->enter($__internal_729a41a4aede926b6499c5881217d60d8934853eaa964e333d5b74d7341c7baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_59a627202a457c4d4392a9466def31e44bf8daecc4abb573a3d7adef117396c9->leave($__internal_59a627202a457c4d4392a9466def31e44bf8daecc4abb573a3d7adef117396c9_prof);

        
        $__internal_729a41a4aede926b6499c5881217d60d8934853eaa964e333d5b74d7341c7baa->leave($__internal_729a41a4aede926b6499c5881217d60d8934853eaa964e333d5b74d7341c7baa_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_59b737480f799b9a72978fd8f9ac3a346cf2e8ef15f9ba1da6b2c78abbcb9408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b737480f799b9a72978fd8f9ac3a346cf2e8ef15f9ba1da6b2c78abbcb9408->enter($__internal_59b737480f799b9a72978fd8f9ac3a346cf2e8ef15f9ba1da6b2c78abbcb9408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8ecce5ea94747c55cd3a3f66c3a44859283fea3763856d0977e376f843de8b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecce5ea94747c55cd3a3f66c3a44859283fea3763856d0977e376f843de8b74->enter($__internal_8ecce5ea94747c55cd3a3f66c3a44859283fea3763856d0977e376f843de8b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8ecce5ea94747c55cd3a3f66c3a44859283fea3763856d0977e376f843de8b74->leave($__internal_8ecce5ea94747c55cd3a3f66c3a44859283fea3763856d0977e376f843de8b74_prof);

        
        $__internal_59b737480f799b9a72978fd8f9ac3a346cf2e8ef15f9ba1da6b2c78abbcb9408->leave($__internal_59b737480f799b9a72978fd8f9ac3a346cf2e8ef15f9ba1da6b2c78abbcb9408_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f26da7a157b46ab2b7ced5e9d8accf320c2e6f11fda3dd41f8e33678bb4bc86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26da7a157b46ab2b7ced5e9d8accf320c2e6f11fda3dd41f8e33678bb4bc86f->enter($__internal_f26da7a157b46ab2b7ced5e9d8accf320c2e6f11fda3dd41f8e33678bb4bc86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_57679be682f8bbf8b15a23bfe9a9ab57dbfc19a944ee16a55f201f2ab16bb8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57679be682f8bbf8b15a23bfe9a9ab57dbfc19a944ee16a55f201f2ab16bb8dc->enter($__internal_57679be682f8bbf8b15a23bfe9a9ab57dbfc19a944ee16a55f201f2ab16bb8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_57679be682f8bbf8b15a23bfe9a9ab57dbfc19a944ee16a55f201f2ab16bb8dc->leave($__internal_57679be682f8bbf8b15a23bfe9a9ab57dbfc19a944ee16a55f201f2ab16bb8dc_prof);

        
        $__internal_f26da7a157b46ab2b7ced5e9d8accf320c2e6f11fda3dd41f8e33678bb4bc86f->leave($__internal_f26da7a157b46ab2b7ced5e9d8accf320c2e6f11fda3dd41f8e33678bb4bc86f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9608d9ca07203bcb998080f39dff6f2ef044582320a27db365f5b08dea7e1971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9608d9ca07203bcb998080f39dff6f2ef044582320a27db365f5b08dea7e1971->enter($__internal_9608d9ca07203bcb998080f39dff6f2ef044582320a27db365f5b08dea7e1971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_04d93930884aa702f618c7abcd5cf649bb8ee1b4aafbe04c856af3c7466fdca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d93930884aa702f618c7abcd5cf649bb8ee1b4aafbe04c856af3c7466fdca3->enter($__internal_04d93930884aa702f618c7abcd5cf649bb8ee1b4aafbe04c856af3c7466fdca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_04d93930884aa702f618c7abcd5cf649bb8ee1b4aafbe04c856af3c7466fdca3->leave($__internal_04d93930884aa702f618c7abcd5cf649bb8ee1b4aafbe04c856af3c7466fdca3_prof);

        
        $__internal_9608d9ca07203bcb998080f39dff6f2ef044582320a27db365f5b08dea7e1971->leave($__internal_9608d9ca07203bcb998080f39dff6f2ef044582320a27db365f5b08dea7e1971_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_86f22a882c6ba2586dfd966cfe87a2dfc821761a9b3e6b7d845e8f4e78314218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f22a882c6ba2586dfd966cfe87a2dfc821761a9b3e6b7d845e8f4e78314218->enter($__internal_86f22a882c6ba2586dfd966cfe87a2dfc821761a9b3e6b7d845e8f4e78314218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d21a9ec7efaaf4992b9df14a8ec89cb7af0f1e7f1c9bc4c378a7d62c2f595357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21a9ec7efaaf4992b9df14a8ec89cb7af0f1e7f1c9bc4c378a7d62c2f595357->enter($__internal_d21a9ec7efaaf4992b9df14a8ec89cb7af0f1e7f1c9bc4c378a7d62c2f595357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d21a9ec7efaaf4992b9df14a8ec89cb7af0f1e7f1c9bc4c378a7d62c2f595357->leave($__internal_d21a9ec7efaaf4992b9df14a8ec89cb7af0f1e7f1c9bc4c378a7d62c2f595357_prof);

        
        $__internal_86f22a882c6ba2586dfd966cfe87a2dfc821761a9b3e6b7d845e8f4e78314218->leave($__internal_86f22a882c6ba2586dfd966cfe87a2dfc821761a9b3e6b7d845e8f4e78314218_prof);

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
