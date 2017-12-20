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
        $__internal_2b1a2fedf96db352c32d5215a4820bc1e6009e248899d093ec87be9c314bca7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1a2fedf96db352c32d5215a4820bc1e6009e248899d093ec87be9c314bca7b->enter($__internal_2b1a2fedf96db352c32d5215a4820bc1e6009e248899d093ec87be9c314bca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_83ca7f0cd8d6e9d4cd966a062a1e2ec299c79a6c7a306c485ca9cc44e3327693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ca7f0cd8d6e9d4cd966a062a1e2ec299c79a6c7a306c485ca9cc44e3327693->enter($__internal_83ca7f0cd8d6e9d4cd966a062a1e2ec299c79a6c7a306c485ca9cc44e3327693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1a2fedf96db352c32d5215a4820bc1e6009e248899d093ec87be9c314bca7b->leave($__internal_2b1a2fedf96db352c32d5215a4820bc1e6009e248899d093ec87be9c314bca7b_prof);

        
        $__internal_83ca7f0cd8d6e9d4cd966a062a1e2ec299c79a6c7a306c485ca9cc44e3327693->leave($__internal_83ca7f0cd8d6e9d4cd966a062a1e2ec299c79a6c7a306c485ca9cc44e3327693_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7723f3739e64496126dc9d74bbdba1faa191c75ce9a5d46c640897d2c3761d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7723f3739e64496126dc9d74bbdba1faa191c75ce9a5d46c640897d2c3761d4->enter($__internal_d7723f3739e64496126dc9d74bbdba1faa191c75ce9a5d46c640897d2c3761d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61adad04e9a63357acf873702c51020f9bdcfa61db1e8558219bc520996b916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61adad04e9a63357acf873702c51020f9bdcfa61db1e8558219bc520996b916e->enter($__internal_61adad04e9a63357acf873702c51020f9bdcfa61db1e8558219bc520996b916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_61adad04e9a63357acf873702c51020f9bdcfa61db1e8558219bc520996b916e->leave($__internal_61adad04e9a63357acf873702c51020f9bdcfa61db1e8558219bc520996b916e_prof);

        
        $__internal_d7723f3739e64496126dc9d74bbdba1faa191c75ce9a5d46c640897d2c3761d4->leave($__internal_d7723f3739e64496126dc9d74bbdba1faa191c75ce9a5d46c640897d2c3761d4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee3c29eda31e8a3745bdbddf399a896d7975830c3e8d716e72e8034e4a18a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee3c29eda31e8a3745bdbddf399a896d7975830c3e8d716e72e8034e4a18a38->enter($__internal_1ee3c29eda31e8a3745bdbddf399a896d7975830c3e8d716e72e8034e4a18a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18026c1114bfab490aa3ac3d670ab579c9e35e67cf281c47bc90eb501ebea545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18026c1114bfab490aa3ac3d670ab579c9e35e67cf281c47bc90eb501ebea545->enter($__internal_18026c1114bfab490aa3ac3d670ab579c9e35e67cf281c47bc90eb501ebea545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18026c1114bfab490aa3ac3d670ab579c9e35e67cf281c47bc90eb501ebea545->leave($__internal_18026c1114bfab490aa3ac3d670ab579c9e35e67cf281c47bc90eb501ebea545_prof);

        
        $__internal_1ee3c29eda31e8a3745bdbddf399a896d7975830c3e8d716e72e8034e4a18a38->leave($__internal_1ee3c29eda31e8a3745bdbddf399a896d7975830c3e8d716e72e8034e4a18a38_prof);

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
