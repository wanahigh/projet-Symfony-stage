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
        $__internal_9bfcf88bd3050269d7f23c8360e1ca69893b6d7154b1d7585cd72259238702dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfcf88bd3050269d7f23c8360e1ca69893b6d7154b1d7585cd72259238702dc->enter($__internal_9bfcf88bd3050269d7f23c8360e1ca69893b6d7154b1d7585cd72259238702dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ba48fcda72cda3d8b94e351af99ce3088b476f33733a7ad121429cd332d7262c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba48fcda72cda3d8b94e351af99ce3088b476f33733a7ad121429cd332d7262c->enter($__internal_ba48fcda72cda3d8b94e351af99ce3088b476f33733a7ad121429cd332d7262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfcf88bd3050269d7f23c8360e1ca69893b6d7154b1d7585cd72259238702dc->leave($__internal_9bfcf88bd3050269d7f23c8360e1ca69893b6d7154b1d7585cd72259238702dc_prof);

        
        $__internal_ba48fcda72cda3d8b94e351af99ce3088b476f33733a7ad121429cd332d7262c->leave($__internal_ba48fcda72cda3d8b94e351af99ce3088b476f33733a7ad121429cd332d7262c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bb857ebbb4c86e7c38e4365adf437a84e5e577ac6ca44470f1d94b5925f9156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb857ebbb4c86e7c38e4365adf437a84e5e577ac6ca44470f1d94b5925f9156->enter($__internal_3bb857ebbb4c86e7c38e4365adf437a84e5e577ac6ca44470f1d94b5925f9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c636c3dae0a7dc86434c5eaddfc93e0c79a7fdca8868ad1dfeb3f2864ef78030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c636c3dae0a7dc86434c5eaddfc93e0c79a7fdca8868ad1dfeb3f2864ef78030->enter($__internal_c636c3dae0a7dc86434c5eaddfc93e0c79a7fdca8868ad1dfeb3f2864ef78030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c636c3dae0a7dc86434c5eaddfc93e0c79a7fdca8868ad1dfeb3f2864ef78030->leave($__internal_c636c3dae0a7dc86434c5eaddfc93e0c79a7fdca8868ad1dfeb3f2864ef78030_prof);

        
        $__internal_3bb857ebbb4c86e7c38e4365adf437a84e5e577ac6ca44470f1d94b5925f9156->leave($__internal_3bb857ebbb4c86e7c38e4365adf437a84e5e577ac6ca44470f1d94b5925f9156_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_43871f799265e7fda82c394aac2563b9b0cfecc35eddb42421ac50f8b4b63d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43871f799265e7fda82c394aac2563b9b0cfecc35eddb42421ac50f8b4b63d7f->enter($__internal_43871f799265e7fda82c394aac2563b9b0cfecc35eddb42421ac50f8b4b63d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b1504b05743e3b092f08b78c5eaae8b93ddd93d8666153a0c0f4db7f5d50fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1504b05743e3b092f08b78c5eaae8b93ddd93d8666153a0c0f4db7f5d50fb7->enter($__internal_3b1504b05743e3b092f08b78c5eaae8b93ddd93d8666153a0c0f4db7f5d50fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b1504b05743e3b092f08b78c5eaae8b93ddd93d8666153a0c0f4db7f5d50fb7->leave($__internal_3b1504b05743e3b092f08b78c5eaae8b93ddd93d8666153a0c0f4db7f5d50fb7_prof);

        
        $__internal_43871f799265e7fda82c394aac2563b9b0cfecc35eddb42421ac50f8b4b63d7f->leave($__internal_43871f799265e7fda82c394aac2563b9b0cfecc35eddb42421ac50f8b4b63d7f_prof);

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
