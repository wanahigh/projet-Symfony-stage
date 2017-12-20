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
        $__internal_f93feb7bdfaaa2afa095caab3c3f77468684d0afa28fc521c7b629be96a6bc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93feb7bdfaaa2afa095caab3c3f77468684d0afa28fc521c7b629be96a6bc15->enter($__internal_f93feb7bdfaaa2afa095caab3c3f77468684d0afa28fc521c7b629be96a6bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3c23dff6931f525e01b13ff5fa55771b2d7347fad48ea7c64e3515a34935b711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c23dff6931f525e01b13ff5fa55771b2d7347fad48ea7c64e3515a34935b711->enter($__internal_3c23dff6931f525e01b13ff5fa55771b2d7347fad48ea7c64e3515a34935b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93feb7bdfaaa2afa095caab3c3f77468684d0afa28fc521c7b629be96a6bc15->leave($__internal_f93feb7bdfaaa2afa095caab3c3f77468684d0afa28fc521c7b629be96a6bc15_prof);

        
        $__internal_3c23dff6931f525e01b13ff5fa55771b2d7347fad48ea7c64e3515a34935b711->leave($__internal_3c23dff6931f525e01b13ff5fa55771b2d7347fad48ea7c64e3515a34935b711_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85fe715014022b13c458c4660325c717cae175790bd30febf1c7e16e4b5341bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fe715014022b13c458c4660325c717cae175790bd30febf1c7e16e4b5341bf->enter($__internal_85fe715014022b13c458c4660325c717cae175790bd30febf1c7e16e4b5341bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_450cc4e4f86a673e6ce967a02d316caadea149b39ef9e8e96ea0a559e9c941a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450cc4e4f86a673e6ce967a02d316caadea149b39ef9e8e96ea0a559e9c941a1->enter($__internal_450cc4e4f86a673e6ce967a02d316caadea149b39ef9e8e96ea0a559e9c941a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_450cc4e4f86a673e6ce967a02d316caadea149b39ef9e8e96ea0a559e9c941a1->leave($__internal_450cc4e4f86a673e6ce967a02d316caadea149b39ef9e8e96ea0a559e9c941a1_prof);

        
        $__internal_85fe715014022b13c458c4660325c717cae175790bd30febf1c7e16e4b5341bf->leave($__internal_85fe715014022b13c458c4660325c717cae175790bd30febf1c7e16e4b5341bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9b00b6e662863d30d3a1095f1c1feb106c41c2525bfd8e74cdf77760c95b7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b00b6e662863d30d3a1095f1c1feb106c41c2525bfd8e74cdf77760c95b7f3->enter($__internal_b9b00b6e662863d30d3a1095f1c1feb106c41c2525bfd8e74cdf77760c95b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5d6493a6dafdd1bb7014642f001f5d9243ca70b70e35e51a4406d0cc58b8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5d6493a6dafdd1bb7014642f001f5d9243ca70b70e35e51a4406d0cc58b8b9->enter($__internal_5b5d6493a6dafdd1bb7014642f001f5d9243ca70b70e35e51a4406d0cc58b8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b5d6493a6dafdd1bb7014642f001f5d9243ca70b70e35e51a4406d0cc58b8b9->leave($__internal_5b5d6493a6dafdd1bb7014642f001f5d9243ca70b70e35e51a4406d0cc58b8b9_prof);

        
        $__internal_b9b00b6e662863d30d3a1095f1c1feb106c41c2525bfd8e74cdf77760c95b7f3->leave($__internal_b9b00b6e662863d30d3a1095f1c1feb106c41c2525bfd8e74cdf77760c95b7f3_prof);

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
