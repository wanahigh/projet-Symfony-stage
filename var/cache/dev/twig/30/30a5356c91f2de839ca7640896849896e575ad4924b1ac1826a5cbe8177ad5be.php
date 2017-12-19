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
        $__internal_8f18108699c71fb9c89cdd97dbc10ebf45046e44ecfa81f2e4e007deff62a935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f18108699c71fb9c89cdd97dbc10ebf45046e44ecfa81f2e4e007deff62a935->enter($__internal_8f18108699c71fb9c89cdd97dbc10ebf45046e44ecfa81f2e4e007deff62a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9de3c423341bb9185a003af22e3976769e466629020c0c6d10b0e71390f1a2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de3c423341bb9185a003af22e3976769e466629020c0c6d10b0e71390f1a2c7->enter($__internal_9de3c423341bb9185a003af22e3976769e466629020c0c6d10b0e71390f1a2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f18108699c71fb9c89cdd97dbc10ebf45046e44ecfa81f2e4e007deff62a935->leave($__internal_8f18108699c71fb9c89cdd97dbc10ebf45046e44ecfa81f2e4e007deff62a935_prof);

        
        $__internal_9de3c423341bb9185a003af22e3976769e466629020c0c6d10b0e71390f1a2c7->leave($__internal_9de3c423341bb9185a003af22e3976769e466629020c0c6d10b0e71390f1a2c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb066f2b2e7423921669070543a2739209563c74d3f90c5ef69499191868290b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb066f2b2e7423921669070543a2739209563c74d3f90c5ef69499191868290b->enter($__internal_bb066f2b2e7423921669070543a2739209563c74d3f90c5ef69499191868290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a1f12486f6a39cd7fbdd5bfcc0beee256002514f0075470dbfae9a977c8b0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1f12486f6a39cd7fbdd5bfcc0beee256002514f0075470dbfae9a977c8b0e1->enter($__internal_7a1f12486f6a39cd7fbdd5bfcc0beee256002514f0075470dbfae9a977c8b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7a1f12486f6a39cd7fbdd5bfcc0beee256002514f0075470dbfae9a977c8b0e1->leave($__internal_7a1f12486f6a39cd7fbdd5bfcc0beee256002514f0075470dbfae9a977c8b0e1_prof);

        
        $__internal_bb066f2b2e7423921669070543a2739209563c74d3f90c5ef69499191868290b->leave($__internal_bb066f2b2e7423921669070543a2739209563c74d3f90c5ef69499191868290b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1496eb2879e325b9ec825f04202eea925bbd1e778a88c2c511a71545389df4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1496eb2879e325b9ec825f04202eea925bbd1e778a88c2c511a71545389df4c4->enter($__internal_1496eb2879e325b9ec825f04202eea925bbd1e778a88c2c511a71545389df4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e093e0a55342b5783204c1b09b93e13886f0e30dfc48b0e6eecd0e1774cc725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e093e0a55342b5783204c1b09b93e13886f0e30dfc48b0e6eecd0e1774cc725->enter($__internal_4e093e0a55342b5783204c1b09b93e13886f0e30dfc48b0e6eecd0e1774cc725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e093e0a55342b5783204c1b09b93e13886f0e30dfc48b0e6eecd0e1774cc725->leave($__internal_4e093e0a55342b5783204c1b09b93e13886f0e30dfc48b0e6eecd0e1774cc725_prof);

        
        $__internal_1496eb2879e325b9ec825f04202eea925bbd1e778a88c2c511a71545389df4c4->leave($__internal_1496eb2879e325b9ec825f04202eea925bbd1e778a88c2c511a71545389df4c4_prof);

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
