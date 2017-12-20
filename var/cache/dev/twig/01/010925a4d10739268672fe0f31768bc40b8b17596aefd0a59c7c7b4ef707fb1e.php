<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a9e52fbef6f9ca7e6e65e94e379677dee7058eadadfbd327b55d4e2aad50df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a9e52fbef6f9ca7e6e65e94e379677dee7058eadadfbd327b55d4e2aad50df->enter($__internal_f7a9e52fbef6f9ca7e6e65e94e379677dee7058eadadfbd327b55d4e2aad50df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a7eea75f07875cebffd98396e389b523984fd40e74e1930e91bc7e731463abf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7eea75f07875cebffd98396e389b523984fd40e74e1930e91bc7e731463abf0->enter($__internal_a7eea75f07875cebffd98396e389b523984fd40e74e1930e91bc7e731463abf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a9e52fbef6f9ca7e6e65e94e379677dee7058eadadfbd327b55d4e2aad50df->leave($__internal_f7a9e52fbef6f9ca7e6e65e94e379677dee7058eadadfbd327b55d4e2aad50df_prof);

        
        $__internal_a7eea75f07875cebffd98396e389b523984fd40e74e1930e91bc7e731463abf0->leave($__internal_a7eea75f07875cebffd98396e389b523984fd40e74e1930e91bc7e731463abf0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06fc283ea4ec6f98ccbf367842d091e0bc2525bd479c71c5dfefc5637c98eb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fc283ea4ec6f98ccbf367842d091e0bc2525bd479c71c5dfefc5637c98eb22->enter($__internal_06fc283ea4ec6f98ccbf367842d091e0bc2525bd479c71c5dfefc5637c98eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b987fca123f2404f59d6965033be48e0d52c90ae6bb47d402d5caba7a30d126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b987fca123f2404f59d6965033be48e0d52c90ae6bb47d402d5caba7a30d126->enter($__internal_5b987fca123f2404f59d6965033be48e0d52c90ae6bb47d402d5caba7a30d126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5b987fca123f2404f59d6965033be48e0d52c90ae6bb47d402d5caba7a30d126->leave($__internal_5b987fca123f2404f59d6965033be48e0d52c90ae6bb47d402d5caba7a30d126_prof);

        
        $__internal_06fc283ea4ec6f98ccbf367842d091e0bc2525bd479c71c5dfefc5637c98eb22->leave($__internal_06fc283ea4ec6f98ccbf367842d091e0bc2525bd479c71c5dfefc5637c98eb22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
