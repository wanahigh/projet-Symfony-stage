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
        $__internal_3e9484d677aed23701d176d6ac79bacbe5ac54ea5a6debb00cdd4b909efc8c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9484d677aed23701d176d6ac79bacbe5ac54ea5a6debb00cdd4b909efc8c03->enter($__internal_3e9484d677aed23701d176d6ac79bacbe5ac54ea5a6debb00cdd4b909efc8c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_ba352c9895f1fe0940c15689603c61a8aefbda88711e98bba9007f0a1da00810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba352c9895f1fe0940c15689603c61a8aefbda88711e98bba9007f0a1da00810->enter($__internal_ba352c9895f1fe0940c15689603c61a8aefbda88711e98bba9007f0a1da00810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3e9484d677aed23701d176d6ac79bacbe5ac54ea5a6debb00cdd4b909efc8c03->leave($__internal_3e9484d677aed23701d176d6ac79bacbe5ac54ea5a6debb00cdd4b909efc8c03_prof);

        
        $__internal_ba352c9895f1fe0940c15689603c61a8aefbda88711e98bba9007f0a1da00810->leave($__internal_ba352c9895f1fe0940c15689603c61a8aefbda88711e98bba9007f0a1da00810_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_544371f397847428e1f0551ad1ecebb9bb8767befa2a79e7b61ea7f7cbf8a20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544371f397847428e1f0551ad1ecebb9bb8767befa2a79e7b61ea7f7cbf8a20b->enter($__internal_544371f397847428e1f0551ad1ecebb9bb8767befa2a79e7b61ea7f7cbf8a20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9e9f839a82bb4774a572096f3d6b0810ef2aeded08ba1056935a3357eed7ba02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9f839a82bb4774a572096f3d6b0810ef2aeded08ba1056935a3357eed7ba02->enter($__internal_9e9f839a82bb4774a572096f3d6b0810ef2aeded08ba1056935a3357eed7ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9e9f839a82bb4774a572096f3d6b0810ef2aeded08ba1056935a3357eed7ba02->leave($__internal_9e9f839a82bb4774a572096f3d6b0810ef2aeded08ba1056935a3357eed7ba02_prof);

        
        $__internal_544371f397847428e1f0551ad1ecebb9bb8767befa2a79e7b61ea7f7cbf8a20b->leave($__internal_544371f397847428e1f0551ad1ecebb9bb8767befa2a79e7b61ea7f7cbf8a20b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0312a4791d24eabea1403659be75b385fdc7299b1200800411e5cb481c1ee2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0312a4791d24eabea1403659be75b385fdc7299b1200800411e5cb481c1ee2a3->enter($__internal_0312a4791d24eabea1403659be75b385fdc7299b1200800411e5cb481c1ee2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1c4a91140b56c15962f9a88fa2671c7285a958a897de77b024b7f684421236f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4a91140b56c15962f9a88fa2671c7285a958a897de77b024b7f684421236f9->enter($__internal_1c4a91140b56c15962f9a88fa2671c7285a958a897de77b024b7f684421236f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_1c4a91140b56c15962f9a88fa2671c7285a958a897de77b024b7f684421236f9->leave($__internal_1c4a91140b56c15962f9a88fa2671c7285a958a897de77b024b7f684421236f9_prof);

        
        $__internal_0312a4791d24eabea1403659be75b385fdc7299b1200800411e5cb481c1ee2a3->leave($__internal_0312a4791d24eabea1403659be75b385fdc7299b1200800411e5cb481c1ee2a3_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_86b4723da9cbfe6b1b77a2eb37e3dd3d1e88158bc51f1d1f4b82fdf51a66c263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b4723da9cbfe6b1b77a2eb37e3dd3d1e88158bc51f1d1f4b82fdf51a66c263->enter($__internal_86b4723da9cbfe6b1b77a2eb37e3dd3d1e88158bc51f1d1f4b82fdf51a66c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_629c9972dd475daf899fe81f8ad475661eb1b2ad31a8fd6fd757b4c60cdae33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629c9972dd475daf899fe81f8ad475661eb1b2ad31a8fd6fd757b4c60cdae33a->enter($__internal_629c9972dd475daf899fe81f8ad475661eb1b2ad31a8fd6fd757b4c60cdae33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_629c9972dd475daf899fe81f8ad475661eb1b2ad31a8fd6fd757b4c60cdae33a->leave($__internal_629c9972dd475daf899fe81f8ad475661eb1b2ad31a8fd6fd757b4c60cdae33a_prof);

        
        $__internal_86b4723da9cbfe6b1b77a2eb37e3dd3d1e88158bc51f1d1f4b82fdf51a66c263->leave($__internal_86b4723da9cbfe6b1b77a2eb37e3dd3d1e88158bc51f1d1f4b82fdf51a66c263_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_24d7ba495fd8369ff1d75715e49d7e7e77f9c67e1f2b4fc1d8898a5e5a7426d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d7ba495fd8369ff1d75715e49d7e7e77f9c67e1f2b4fc1d8898a5e5a7426d7->enter($__internal_24d7ba495fd8369ff1d75715e49d7e7e77f9c67e1f2b4fc1d8898a5e5a7426d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_0d54bbb6cddbcf3ea2c50693d862f67296d597567e5a0402778a1e56ef69b5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d54bbb6cddbcf3ea2c50693d862f67296d597567e5a0402778a1e56ef69b5f7->enter($__internal_0d54bbb6cddbcf3ea2c50693d862f67296d597567e5a0402778a1e56ef69b5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_0d54bbb6cddbcf3ea2c50693d862f67296d597567e5a0402778a1e56ef69b5f7->leave($__internal_0d54bbb6cddbcf3ea2c50693d862f67296d597567e5a0402778a1e56ef69b5f7_prof);

        
        $__internal_24d7ba495fd8369ff1d75715e49d7e7e77f9c67e1f2b4fc1d8898a5e5a7426d7->leave($__internal_24d7ba495fd8369ff1d75715e49d7e7e77f9c67e1f2b4fc1d8898a5e5a7426d7_prof);

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
