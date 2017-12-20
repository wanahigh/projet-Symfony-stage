<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bb8f6e47531095d834ae2bb4f1ef89a4124ed411379ac80ed393a84db1b84f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb8f6e47531095d834ae2bb4f1ef89a4124ed411379ac80ed393a84db1b84f2->enter($__internal_1bb8f6e47531095d834ae2bb4f1ef89a4124ed411379ac80ed393a84db1b84f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7a4e2dba0dee633d59ff273317688ee8d8b105b799aca17985850b5bdc47b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4e2dba0dee633d59ff273317688ee8d8b105b799aca17985850b5bdc47b8db->enter($__internal_7a4e2dba0dee633d59ff273317688ee8d8b105b799aca17985850b5bdc47b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb8f6e47531095d834ae2bb4f1ef89a4124ed411379ac80ed393a84db1b84f2->leave($__internal_1bb8f6e47531095d834ae2bb4f1ef89a4124ed411379ac80ed393a84db1b84f2_prof);

        
        $__internal_7a4e2dba0dee633d59ff273317688ee8d8b105b799aca17985850b5bdc47b8db->leave($__internal_7a4e2dba0dee633d59ff273317688ee8d8b105b799aca17985850b5bdc47b8db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54598a8d28882dbf9cca511ae955f27cfa44d4e0f06f49baa0d0887ae0ed957f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54598a8d28882dbf9cca511ae955f27cfa44d4e0f06f49baa0d0887ae0ed957f->enter($__internal_54598a8d28882dbf9cca511ae955f27cfa44d4e0f06f49baa0d0887ae0ed957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67b0c08e4dec634f70e18d810fd103f7fec9b0b2431a49b8a2acb14f843c5ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b0c08e4dec634f70e18d810fd103f7fec9b0b2431a49b8a2acb14f843c5ed5->enter($__internal_67b0c08e4dec634f70e18d810fd103f7fec9b0b2431a49b8a2acb14f843c5ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_67b0c08e4dec634f70e18d810fd103f7fec9b0b2431a49b8a2acb14f843c5ed5->leave($__internal_67b0c08e4dec634f70e18d810fd103f7fec9b0b2431a49b8a2acb14f843c5ed5_prof);

        
        $__internal_54598a8d28882dbf9cca511ae955f27cfa44d4e0f06f49baa0d0887ae0ed957f->leave($__internal_54598a8d28882dbf9cca511ae955f27cfa44d4e0f06f49baa0d0887ae0ed957f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e090a6aca765bbc4e2e6a8e9fc95085f0a4970e7e11d3bb3e82d538638ac38b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e090a6aca765bbc4e2e6a8e9fc95085f0a4970e7e11d3bb3e82d538638ac38b8->enter($__internal_e090a6aca765bbc4e2e6a8e9fc95085f0a4970e7e11d3bb3e82d538638ac38b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e416664458707041c1ac02c03794a304c395ab30d714d4735a97041b83ba6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e416664458707041c1ac02c03794a304c395ab30d714d4735a97041b83ba6eb->enter($__internal_8e416664458707041c1ac02c03794a304c395ab30d714d4735a97041b83ba6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8e416664458707041c1ac02c03794a304c395ab30d714d4735a97041b83ba6eb->leave($__internal_8e416664458707041c1ac02c03794a304c395ab30d714d4735a97041b83ba6eb_prof);

        
        $__internal_e090a6aca765bbc4e2e6a8e9fc95085f0a4970e7e11d3bb3e82d538638ac38b8->leave($__internal_e090a6aca765bbc4e2e6a8e9fc95085f0a4970e7e11d3bb3e82d538638ac38b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c5fd1aa36848e3cd05261f503536c2f5dc11b2e86f8db8be4bcd1554e3357e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5fd1aa36848e3cd05261f503536c2f5dc11b2e86f8db8be4bcd1554e3357e8->enter($__internal_1c5fd1aa36848e3cd05261f503536c2f5dc11b2e86f8db8be4bcd1554e3357e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99d571bc8c0eb06375b67649967fad2593d82dbddd7eada913e12101a8a9d44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d571bc8c0eb06375b67649967fad2593d82dbddd7eada913e12101a8a9d44c->enter($__internal_99d571bc8c0eb06375b67649967fad2593d82dbddd7eada913e12101a8a9d44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_99d571bc8c0eb06375b67649967fad2593d82dbddd7eada913e12101a8a9d44c->leave($__internal_99d571bc8c0eb06375b67649967fad2593d82dbddd7eada913e12101a8a9d44c_prof);

        
        $__internal_1c5fd1aa36848e3cd05261f503536c2f5dc11b2e86f8db8be4bcd1554e3357e8->leave($__internal_1c5fd1aa36848e3cd05261f503536c2f5dc11b2e86f8db8be4bcd1554e3357e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
