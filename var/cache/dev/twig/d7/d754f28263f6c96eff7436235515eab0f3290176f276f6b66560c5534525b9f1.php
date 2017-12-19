<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c1973e6d9e04ccf93950f786764482efdcd5ef93b578534ef5ff02889b9db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c1973e6d9e04ccf93950f786764482efdcd5ef93b578534ef5ff02889b9db5->enter($__internal_34c1973e6d9e04ccf93950f786764482efdcd5ef93b578534ef5ff02889b9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_772f0ffd26d75574575ad2fad2d5a79b3baf6e70fb0ecdd1ce86f3cbd8e8a074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772f0ffd26d75574575ad2fad2d5a79b3baf6e70fb0ecdd1ce86f3cbd8e8a074->enter($__internal_772f0ffd26d75574575ad2fad2d5a79b3baf6e70fb0ecdd1ce86f3cbd8e8a074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c1973e6d9e04ccf93950f786764482efdcd5ef93b578534ef5ff02889b9db5->leave($__internal_34c1973e6d9e04ccf93950f786764482efdcd5ef93b578534ef5ff02889b9db5_prof);

        
        $__internal_772f0ffd26d75574575ad2fad2d5a79b3baf6e70fb0ecdd1ce86f3cbd8e8a074->leave($__internal_772f0ffd26d75574575ad2fad2d5a79b3baf6e70fb0ecdd1ce86f3cbd8e8a074_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e2d1520fefe71c4363bd13e17b181dfaabefb1b0986aef9b8ad01374638c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e2d1520fefe71c4363bd13e17b181dfaabefb1b0986aef9b8ad01374638c16->enter($__internal_b6e2d1520fefe71c4363bd13e17b181dfaabefb1b0986aef9b8ad01374638c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f01d306a6106ec2172fb424effb0f8e4e9b89dc2324c1556b179e2a16bfe5cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01d306a6106ec2172fb424effb0f8e4e9b89dc2324c1556b179e2a16bfe5cc8->enter($__internal_f01d306a6106ec2172fb424effb0f8e4e9b89dc2324c1556b179e2a16bfe5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_f01d306a6106ec2172fb424effb0f8e4e9b89dc2324c1556b179e2a16bfe5cc8->leave($__internal_f01d306a6106ec2172fb424effb0f8e4e9b89dc2324c1556b179e2a16bfe5cc8_prof);

        
        $__internal_b6e2d1520fefe71c4363bd13e17b181dfaabefb1b0986aef9b8ad01374638c16->leave($__internal_b6e2d1520fefe71c4363bd13e17b181dfaabefb1b0986aef9b8ad01374638c16_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9e61af284ac9708567b23753fb57a41b06b462d1da16d3242773e7dd7d3ba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e61af284ac9708567b23753fb57a41b06b462d1da16d3242773e7dd7d3ba75->enter($__internal_a9e61af284ac9708567b23753fb57a41b06b462d1da16d3242773e7dd7d3ba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_840d956deab070892cc0275f8675051dcaadc38983d076a35ae7379bff1b3faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840d956deab070892cc0275f8675051dcaadc38983d076a35ae7379bff1b3faf->enter($__internal_840d956deab070892cc0275f8675051dcaadc38983d076a35ae7379bff1b3faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_840d956deab070892cc0275f8675051dcaadc38983d076a35ae7379bff1b3faf->leave($__internal_840d956deab070892cc0275f8675051dcaadc38983d076a35ae7379bff1b3faf_prof);

        
        $__internal_a9e61af284ac9708567b23753fb57a41b06b462d1da16d3242773e7dd7d3ba75->leave($__internal_a9e61af284ac9708567b23753fb57a41b06b462d1da16d3242773e7dd7d3ba75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
