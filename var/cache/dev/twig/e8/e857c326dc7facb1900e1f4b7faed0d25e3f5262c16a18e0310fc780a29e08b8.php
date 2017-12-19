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
        $__internal_f6e1e832f15346ed1ff5f245824c0679233a02ffec1d02ee0146cf02234665f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e1e832f15346ed1ff5f245824c0679233a02ffec1d02ee0146cf02234665f9->enter($__internal_f6e1e832f15346ed1ff5f245824c0679233a02ffec1d02ee0146cf02234665f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c1c9aad1371cd8fead8215a046780b561db290b5f3d6c2c6a44694eff982f387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c9aad1371cd8fead8215a046780b561db290b5f3d6c2c6a44694eff982f387->enter($__internal_c1c9aad1371cd8fead8215a046780b561db290b5f3d6c2c6a44694eff982f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e1e832f15346ed1ff5f245824c0679233a02ffec1d02ee0146cf02234665f9->leave($__internal_f6e1e832f15346ed1ff5f245824c0679233a02ffec1d02ee0146cf02234665f9_prof);

        
        $__internal_c1c9aad1371cd8fead8215a046780b561db290b5f3d6c2c6a44694eff982f387->leave($__internal_c1c9aad1371cd8fead8215a046780b561db290b5f3d6c2c6a44694eff982f387_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dc5624ad9707a0760c7c16a567113b557d021ec3ce475ec5e2750dd3c3d715e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc5624ad9707a0760c7c16a567113b557d021ec3ce475ec5e2750dd3c3d715e->enter($__internal_6dc5624ad9707a0760c7c16a567113b557d021ec3ce475ec5e2750dd3c3d715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8041cfade8c19f4818a5c113d45e4dae072280d7aff9bcf9a4c10231138b3f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8041cfade8c19f4818a5c113d45e4dae072280d7aff9bcf9a4c10231138b3f76->enter($__internal_8041cfade8c19f4818a5c113d45e4dae072280d7aff9bcf9a4c10231138b3f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8041cfade8c19f4818a5c113d45e4dae072280d7aff9bcf9a4c10231138b3f76->leave($__internal_8041cfade8c19f4818a5c113d45e4dae072280d7aff9bcf9a4c10231138b3f76_prof);

        
        $__internal_6dc5624ad9707a0760c7c16a567113b557d021ec3ce475ec5e2750dd3c3d715e->leave($__internal_6dc5624ad9707a0760c7c16a567113b557d021ec3ce475ec5e2750dd3c3d715e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0352f9dbeca600441d095f9b4127a910cb7cc85dcd55b60db69f0c782ff4ac17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0352f9dbeca600441d095f9b4127a910cb7cc85dcd55b60db69f0c782ff4ac17->enter($__internal_0352f9dbeca600441d095f9b4127a910cb7cc85dcd55b60db69f0c782ff4ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ebb49d8bfe6e24a40c1298505770a6cfdb3eb02f9042db1b2c19e4330d889d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebb49d8bfe6e24a40c1298505770a6cfdb3eb02f9042db1b2c19e4330d889d3->enter($__internal_8ebb49d8bfe6e24a40c1298505770a6cfdb3eb02f9042db1b2c19e4330d889d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8ebb49d8bfe6e24a40c1298505770a6cfdb3eb02f9042db1b2c19e4330d889d3->leave($__internal_8ebb49d8bfe6e24a40c1298505770a6cfdb3eb02f9042db1b2c19e4330d889d3_prof);

        
        $__internal_0352f9dbeca600441d095f9b4127a910cb7cc85dcd55b60db69f0c782ff4ac17->leave($__internal_0352f9dbeca600441d095f9b4127a910cb7cc85dcd55b60db69f0c782ff4ac17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83bd9b9193f44519416607d2b2f0fd1a66c7b480e20cf4ed34db2b4f27d4b602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bd9b9193f44519416607d2b2f0fd1a66c7b480e20cf4ed34db2b4f27d4b602->enter($__internal_83bd9b9193f44519416607d2b2f0fd1a66c7b480e20cf4ed34db2b4f27d4b602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b74b0904ecda2553536e6cecf4e83599e7c72e5f464fb9a2f557bbbce4c7e239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74b0904ecda2553536e6cecf4e83599e7c72e5f464fb9a2f557bbbce4c7e239->enter($__internal_b74b0904ecda2553536e6cecf4e83599e7c72e5f464fb9a2f557bbbce4c7e239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b74b0904ecda2553536e6cecf4e83599e7c72e5f464fb9a2f557bbbce4c7e239->leave($__internal_b74b0904ecda2553536e6cecf4e83599e7c72e5f464fb9a2f557bbbce4c7e239_prof);

        
        $__internal_83bd9b9193f44519416607d2b2f0fd1a66c7b480e20cf4ed34db2b4f27d4b602->leave($__internal_83bd9b9193f44519416607d2b2f0fd1a66c7b480e20cf4ed34db2b4f27d4b602_prof);

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
