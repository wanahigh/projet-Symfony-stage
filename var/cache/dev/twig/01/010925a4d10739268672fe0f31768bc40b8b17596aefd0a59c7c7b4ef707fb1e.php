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
        $__internal_0ee0961bba77589a63adff31691e4276192c99a6aa9118310c86d547a7c42a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee0961bba77589a63adff31691e4276192c99a6aa9118310c86d547a7c42a1a->enter($__internal_0ee0961bba77589a63adff31691e4276192c99a6aa9118310c86d547a7c42a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ca7e70ee3ac495a72b0532c5207c75d7e150fbf34fb6afd86d7d17b9b36ca712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7e70ee3ac495a72b0532c5207c75d7e150fbf34fb6afd86d7d17b9b36ca712->enter($__internal_ca7e70ee3ac495a72b0532c5207c75d7e150fbf34fb6afd86d7d17b9b36ca712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee0961bba77589a63adff31691e4276192c99a6aa9118310c86d547a7c42a1a->leave($__internal_0ee0961bba77589a63adff31691e4276192c99a6aa9118310c86d547a7c42a1a_prof);

        
        $__internal_ca7e70ee3ac495a72b0532c5207c75d7e150fbf34fb6afd86d7d17b9b36ca712->leave($__internal_ca7e70ee3ac495a72b0532c5207c75d7e150fbf34fb6afd86d7d17b9b36ca712_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e24cf3846d5c3fe795416ec41ff6275deb8ff95cb19c27d9cef7d26d2671374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e24cf3846d5c3fe795416ec41ff6275deb8ff95cb19c27d9cef7d26d2671374->enter($__internal_7e24cf3846d5c3fe795416ec41ff6275deb8ff95cb19c27d9cef7d26d2671374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0340d84dda7652593497725ac9227dcbda5d4038c1b416e7baea1cc0d530e4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0340d84dda7652593497725ac9227dcbda5d4038c1b416e7baea1cc0d530e4b7->enter($__internal_0340d84dda7652593497725ac9227dcbda5d4038c1b416e7baea1cc0d530e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0340d84dda7652593497725ac9227dcbda5d4038c1b416e7baea1cc0d530e4b7->leave($__internal_0340d84dda7652593497725ac9227dcbda5d4038c1b416e7baea1cc0d530e4b7_prof);

        
        $__internal_7e24cf3846d5c3fe795416ec41ff6275deb8ff95cb19c27d9cef7d26d2671374->leave($__internal_7e24cf3846d5c3fe795416ec41ff6275deb8ff95cb19c27d9cef7d26d2671374_prof);

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
