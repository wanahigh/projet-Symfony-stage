<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3ee525eb4f519d66013c8537c637a6f3515c22e819db2b6e98839e6c1734844b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4df6a9bef79bd1fa269ae5d5db61e8f17dc90d9ab923af5a163cbb3bdf742d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df6a9bef79bd1fa269ae5d5db61e8f17dc90d9ab923af5a163cbb3bdf742d34->enter($__internal_4df6a9bef79bd1fa269ae5d5db61e8f17dc90d9ab923af5a163cbb3bdf742d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2adf60c712bfc619c0b25bbde87b4cedb5b73725d5d50c35ee0c93a44d20e672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adf60c712bfc619c0b25bbde87b4cedb5b73725d5d50c35ee0c93a44d20e672->enter($__internal_2adf60c712bfc619c0b25bbde87b4cedb5b73725d5d50c35ee0c93a44d20e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df6a9bef79bd1fa269ae5d5db61e8f17dc90d9ab923af5a163cbb3bdf742d34->leave($__internal_4df6a9bef79bd1fa269ae5d5db61e8f17dc90d9ab923af5a163cbb3bdf742d34_prof);

        
        $__internal_2adf60c712bfc619c0b25bbde87b4cedb5b73725d5d50c35ee0c93a44d20e672->leave($__internal_2adf60c712bfc619c0b25bbde87b4cedb5b73725d5d50c35ee0c93a44d20e672_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5aace03abf07ba00dbc7670696f30949ad46bbd4287a9bab933e9c7da2fb5d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aace03abf07ba00dbc7670696f30949ad46bbd4287a9bab933e9c7da2fb5d33->enter($__internal_5aace03abf07ba00dbc7670696f30949ad46bbd4287a9bab933e9c7da2fb5d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b0277319e937f7bcfec194914188cfc190d1b23f42c8a9559f1e5bc5d04e59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0277319e937f7bcfec194914188cfc190d1b23f42c8a9559f1e5bc5d04e59e->enter($__internal_3b0277319e937f7bcfec194914188cfc190d1b23f42c8a9559f1e5bc5d04e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3b0277319e937f7bcfec194914188cfc190d1b23f42c8a9559f1e5bc5d04e59e->leave($__internal_3b0277319e937f7bcfec194914188cfc190d1b23f42c8a9559f1e5bc5d04e59e_prof);

        
        $__internal_5aace03abf07ba00dbc7670696f30949ad46bbd4287a9bab933e9c7da2fb5d33->leave($__internal_5aace03abf07ba00dbc7670696f30949ad46bbd4287a9bab933e9c7da2fb5d33_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb0cd1caf106c4c6b7e596dc4b761529e5884177a3147c6e3888b025013cfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb0cd1caf106c4c6b7e596dc4b761529e5884177a3147c6e3888b025013cfd1->enter($__internal_fbb0cd1caf106c4c6b7e596dc4b761529e5884177a3147c6e3888b025013cfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_280dc61f5dbdb26ca88a7ef54833d1b944ead3f35425ae8d9f7cc282b514057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280dc61f5dbdb26ca88a7ef54833d1b944ead3f35425ae8d9f7cc282b514057b->enter($__internal_280dc61f5dbdb26ca88a7ef54833d1b944ead3f35425ae8d9f7cc282b514057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_280dc61f5dbdb26ca88a7ef54833d1b944ead3f35425ae8d9f7cc282b514057b->leave($__internal_280dc61f5dbdb26ca88a7ef54833d1b944ead3f35425ae8d9f7cc282b514057b_prof);

        
        $__internal_fbb0cd1caf106c4c6b7e596dc4b761529e5884177a3147c6e3888b025013cfd1->leave($__internal_fbb0cd1caf106c4c6b7e596dc4b761529e5884177a3147c6e3888b025013cfd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
