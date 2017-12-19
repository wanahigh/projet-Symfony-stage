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
        $__internal_91e25f14dc5e094844521d38619d887c2cb9e15c80ed39ca979ec1ffb4194ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e25f14dc5e094844521d38619d887c2cb9e15c80ed39ca979ec1ffb4194ef4->enter($__internal_91e25f14dc5e094844521d38619d887c2cb9e15c80ed39ca979ec1ffb4194ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b511f07ce6d4b3019062abc9d1c650346d47b63756964cd6dea1eda717ff44c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b511f07ce6d4b3019062abc9d1c650346d47b63756964cd6dea1eda717ff44c7->enter($__internal_b511f07ce6d4b3019062abc9d1c650346d47b63756964cd6dea1eda717ff44c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e25f14dc5e094844521d38619d887c2cb9e15c80ed39ca979ec1ffb4194ef4->leave($__internal_91e25f14dc5e094844521d38619d887c2cb9e15c80ed39ca979ec1ffb4194ef4_prof);

        
        $__internal_b511f07ce6d4b3019062abc9d1c650346d47b63756964cd6dea1eda717ff44c7->leave($__internal_b511f07ce6d4b3019062abc9d1c650346d47b63756964cd6dea1eda717ff44c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32c6f4871e3469b9eac42f75f59ff40fe5464de2e8212219b5fdac99721a4c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c6f4871e3469b9eac42f75f59ff40fe5464de2e8212219b5fdac99721a4c60->enter($__internal_32c6f4871e3469b9eac42f75f59ff40fe5464de2e8212219b5fdac99721a4c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a7fffeb6b69d74f7dde777bcdbce3620000b8b954f321be57ef00370b830fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7fffeb6b69d74f7dde777bcdbce3620000b8b954f321be57ef00370b830fa8->enter($__internal_3a7fffeb6b69d74f7dde777bcdbce3620000b8b954f321be57ef00370b830fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3a7fffeb6b69d74f7dde777bcdbce3620000b8b954f321be57ef00370b830fa8->leave($__internal_3a7fffeb6b69d74f7dde777bcdbce3620000b8b954f321be57ef00370b830fa8_prof);

        
        $__internal_32c6f4871e3469b9eac42f75f59ff40fe5464de2e8212219b5fdac99721a4c60->leave($__internal_32c6f4871e3469b9eac42f75f59ff40fe5464de2e8212219b5fdac99721a4c60_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca0ee9f0e5388160139541ad81bdae05e3db7bf7d003d13a60c7b9dd19b5a9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0ee9f0e5388160139541ad81bdae05e3db7bf7d003d13a60c7b9dd19b5a9e1->enter($__internal_ca0ee9f0e5388160139541ad81bdae05e3db7bf7d003d13a60c7b9dd19b5a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15ddbf8fda56dc6c2d2b522e3e1d2445dc040b43806c86b751830199c9f1620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ddbf8fda56dc6c2d2b522e3e1d2445dc040b43806c86b751830199c9f1620d->enter($__internal_15ddbf8fda56dc6c2d2b522e3e1d2445dc040b43806c86b751830199c9f1620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_15ddbf8fda56dc6c2d2b522e3e1d2445dc040b43806c86b751830199c9f1620d->leave($__internal_15ddbf8fda56dc6c2d2b522e3e1d2445dc040b43806c86b751830199c9f1620d_prof);

        
        $__internal_ca0ee9f0e5388160139541ad81bdae05e3db7bf7d003d13a60c7b9dd19b5a9e1->leave($__internal_ca0ee9f0e5388160139541ad81bdae05e3db7bf7d003d13a60c7b9dd19b5a9e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cccd5a1f9d88ffe563ab95b33ff6ca04b77e3718976977de6441565c8691933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccd5a1f9d88ffe563ab95b33ff6ca04b77e3718976977de6441565c8691933c->enter($__internal_cccd5a1f9d88ffe563ab95b33ff6ca04b77e3718976977de6441565c8691933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_221fe51c8aaded6d8b4b696147181df9cc9b9598f0573dd2133dd03690a796f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221fe51c8aaded6d8b4b696147181df9cc9b9598f0573dd2133dd03690a796f3->enter($__internal_221fe51c8aaded6d8b4b696147181df9cc9b9598f0573dd2133dd03690a796f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_221fe51c8aaded6d8b4b696147181df9cc9b9598f0573dd2133dd03690a796f3->leave($__internal_221fe51c8aaded6d8b4b696147181df9cc9b9598f0573dd2133dd03690a796f3_prof);

        
        $__internal_cccd5a1f9d88ffe563ab95b33ff6ca04b77e3718976977de6441565c8691933c->leave($__internal_cccd5a1f9d88ffe563ab95b33ff6ca04b77e3718976977de6441565c8691933c_prof);

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
