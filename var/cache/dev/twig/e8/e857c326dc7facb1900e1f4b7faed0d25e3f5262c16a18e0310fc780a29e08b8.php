<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_1267633d723e7fb4b2f39240439335dcbecbbcbbffef43f55450b90d62df4731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1267633d723e7fb4b2f39240439335dcbecbbcbbffef43f55450b90d62df4731->enter($__internal_1267633d723e7fb4b2f39240439335dcbecbbcbbffef43f55450b90d62df4731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f7e43f637a229d3304b74125da66e183780f6328e5073dcb68af76a52d09b633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e43f637a229d3304b74125da66e183780f6328e5073dcb68af76a52d09b633->enter($__internal_f7e43f637a229d3304b74125da66e183780f6328e5073dcb68af76a52d09b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1267633d723e7fb4b2f39240439335dcbecbbcbbffef43f55450b90d62df4731->leave($__internal_1267633d723e7fb4b2f39240439335dcbecbbcbbffef43f55450b90d62df4731_prof);

        
        $__internal_f7e43f637a229d3304b74125da66e183780f6328e5073dcb68af76a52d09b633->leave($__internal_f7e43f637a229d3304b74125da66e183780f6328e5073dcb68af76a52d09b633_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2962da508627b0163dd20915b0ddaa233c2214c4da9fbb7d6c989ee1950ae763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2962da508627b0163dd20915b0ddaa233c2214c4da9fbb7d6c989ee1950ae763->enter($__internal_2962da508627b0163dd20915b0ddaa233c2214c4da9fbb7d6c989ee1950ae763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9bcf1feec58ffbaeb775f96643ee1b420dd376ca784ed6f71181a8a950ff2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bcf1feec58ffbaeb775f96643ee1b420dd376ca784ed6f71181a8a950ff2d0->enter($__internal_d9bcf1feec58ffbaeb775f96643ee1b420dd376ca784ed6f71181a8a950ff2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d9bcf1feec58ffbaeb775f96643ee1b420dd376ca784ed6f71181a8a950ff2d0->leave($__internal_d9bcf1feec58ffbaeb775f96643ee1b420dd376ca784ed6f71181a8a950ff2d0_prof);

        
        $__internal_2962da508627b0163dd20915b0ddaa233c2214c4da9fbb7d6c989ee1950ae763->leave($__internal_2962da508627b0163dd20915b0ddaa233c2214c4da9fbb7d6c989ee1950ae763_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efbcf56b1d2314e26b79cb436d5dc54075026f450908726da49ab5650538e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbcf56b1d2314e26b79cb436d5dc54075026f450908726da49ab5650538e4d8->enter($__internal_efbcf56b1d2314e26b79cb436d5dc54075026f450908726da49ab5650538e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10ed35b6b7245b7bbbd51926a2feb98baa2fbadb6926234d79c02560c2dd5557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ed35b6b7245b7bbbd51926a2feb98baa2fbadb6926234d79c02560c2dd5557->enter($__internal_10ed35b6b7245b7bbbd51926a2feb98baa2fbadb6926234d79c02560c2dd5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_10ed35b6b7245b7bbbd51926a2feb98baa2fbadb6926234d79c02560c2dd5557->leave($__internal_10ed35b6b7245b7bbbd51926a2feb98baa2fbadb6926234d79c02560c2dd5557_prof);

        
        $__internal_efbcf56b1d2314e26b79cb436d5dc54075026f450908726da49ab5650538e4d8->leave($__internal_efbcf56b1d2314e26b79cb436d5dc54075026f450908726da49ab5650538e4d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d030620ad279597635d6b155afde8dae0b1d2e2342836d4d28d105bac1d08cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d030620ad279597635d6b155afde8dae0b1d2e2342836d4d28d105bac1d08cd->enter($__internal_1d030620ad279597635d6b155afde8dae0b1d2e2342836d4d28d105bac1d08cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_949619b23252382289bedbd9ca2fa58ca13a7b9fd4cc11d21f292ca518344ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949619b23252382289bedbd9ca2fa58ca13a7b9fd4cc11d21f292ca518344ee5->enter($__internal_949619b23252382289bedbd9ca2fa58ca13a7b9fd4cc11d21f292ca518344ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_949619b23252382289bedbd9ca2fa58ca13a7b9fd4cc11d21f292ca518344ee5->leave($__internal_949619b23252382289bedbd9ca2fa58ca13a7b9fd4cc11d21f292ca518344ee5_prof);

        
        $__internal_1d030620ad279597635d6b155afde8dae0b1d2e2342836d4d28d105bac1d08cd->leave($__internal_1d030620ad279597635d6b155afde8dae0b1d2e2342836d4d28d105bac1d08cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
