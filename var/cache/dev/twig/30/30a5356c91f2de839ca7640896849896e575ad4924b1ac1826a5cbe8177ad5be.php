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
        $__internal_bee601b470f3990ebdaa1cf65e52e077340ac5f1b5e63ceacbf679ceb31fd984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee601b470f3990ebdaa1cf65e52e077340ac5f1b5e63ceacbf679ceb31fd984->enter($__internal_bee601b470f3990ebdaa1cf65e52e077340ac5f1b5e63ceacbf679ceb31fd984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b7709f9069ddce9a93e63888f7788fa2c656c1aa102cdc520c6715859ac9a29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7709f9069ddce9a93e63888f7788fa2c656c1aa102cdc520c6715859ac9a29b->enter($__internal_b7709f9069ddce9a93e63888f7788fa2c656c1aa102cdc520c6715859ac9a29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee601b470f3990ebdaa1cf65e52e077340ac5f1b5e63ceacbf679ceb31fd984->leave($__internal_bee601b470f3990ebdaa1cf65e52e077340ac5f1b5e63ceacbf679ceb31fd984_prof);

        
        $__internal_b7709f9069ddce9a93e63888f7788fa2c656c1aa102cdc520c6715859ac9a29b->leave($__internal_b7709f9069ddce9a93e63888f7788fa2c656c1aa102cdc520c6715859ac9a29b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76876351cc9f7a8794905d42d29416720f16057147168da5d045607e318d0036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76876351cc9f7a8794905d42d29416720f16057147168da5d045607e318d0036->enter($__internal_76876351cc9f7a8794905d42d29416720f16057147168da5d045607e318d0036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffa037031be1d34139ea7f35083bd0918d1faa4aa6f5608b1850535abaf0bb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa037031be1d34139ea7f35083bd0918d1faa4aa6f5608b1850535abaf0bb0a->enter($__internal_ffa037031be1d34139ea7f35083bd0918d1faa4aa6f5608b1850535abaf0bb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ffa037031be1d34139ea7f35083bd0918d1faa4aa6f5608b1850535abaf0bb0a->leave($__internal_ffa037031be1d34139ea7f35083bd0918d1faa4aa6f5608b1850535abaf0bb0a_prof);

        
        $__internal_76876351cc9f7a8794905d42d29416720f16057147168da5d045607e318d0036->leave($__internal_76876351cc9f7a8794905d42d29416720f16057147168da5d045607e318d0036_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e331aea3d2a429e0fbad98100d65a2cc31465e8166fe044004eb71243b28161c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e331aea3d2a429e0fbad98100d65a2cc31465e8166fe044004eb71243b28161c->enter($__internal_e331aea3d2a429e0fbad98100d65a2cc31465e8166fe044004eb71243b28161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fc12de95a71e739edc7fc6a01818ebc1185e2057254a4a86323be4369b2e064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc12de95a71e739edc7fc6a01818ebc1185e2057254a4a86323be4369b2e064->enter($__internal_3fc12de95a71e739edc7fc6a01818ebc1185e2057254a4a86323be4369b2e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fc12de95a71e739edc7fc6a01818ebc1185e2057254a4a86323be4369b2e064->leave($__internal_3fc12de95a71e739edc7fc6a01818ebc1185e2057254a4a86323be4369b2e064_prof);

        
        $__internal_e331aea3d2a429e0fbad98100d65a2cc31465e8166fe044004eb71243b28161c->leave($__internal_e331aea3d2a429e0fbad98100d65a2cc31465e8166fe044004eb71243b28161c_prof);

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
