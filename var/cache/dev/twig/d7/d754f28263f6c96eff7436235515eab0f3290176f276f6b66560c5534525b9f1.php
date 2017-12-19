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
        $__internal_7993e39586acd80725b30225de83b27f922c1427d0cbd2a6349b05873331a752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7993e39586acd80725b30225de83b27f922c1427d0cbd2a6349b05873331a752->enter($__internal_7993e39586acd80725b30225de83b27f922c1427d0cbd2a6349b05873331a752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_192118d89f0fc9c0907f99e4605a48c72c96bc2a8f3c5a71b1c2d6b20a5f6ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192118d89f0fc9c0907f99e4605a48c72c96bc2a8f3c5a71b1c2d6b20a5f6ccf->enter($__internal_192118d89f0fc9c0907f99e4605a48c72c96bc2a8f3c5a71b1c2d6b20a5f6ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7993e39586acd80725b30225de83b27f922c1427d0cbd2a6349b05873331a752->leave($__internal_7993e39586acd80725b30225de83b27f922c1427d0cbd2a6349b05873331a752_prof);

        
        $__internal_192118d89f0fc9c0907f99e4605a48c72c96bc2a8f3c5a71b1c2d6b20a5f6ccf->leave($__internal_192118d89f0fc9c0907f99e4605a48c72c96bc2a8f3c5a71b1c2d6b20a5f6ccf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f59bbccbd37bdbab1b59bc52f48bc0b4adee8247e5652a4889cdbbe2719a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f59bbccbd37bdbab1b59bc52f48bc0b4adee8247e5652a4889cdbbe2719a62->enter($__internal_09f59bbccbd37bdbab1b59bc52f48bc0b4adee8247e5652a4889cdbbe2719a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53ab9409d8ce695cf975c49dd14e67765fa7815d8847cf4cda1847d586fcd42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ab9409d8ce695cf975c49dd14e67765fa7815d8847cf4cda1847d586fcd42e->enter($__internal_53ab9409d8ce695cf975c49dd14e67765fa7815d8847cf4cda1847d586fcd42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53ab9409d8ce695cf975c49dd14e67765fa7815d8847cf4cda1847d586fcd42e->leave($__internal_53ab9409d8ce695cf975c49dd14e67765fa7815d8847cf4cda1847d586fcd42e_prof);

        
        $__internal_09f59bbccbd37bdbab1b59bc52f48bc0b4adee8247e5652a4889cdbbe2719a62->leave($__internal_09f59bbccbd37bdbab1b59bc52f48bc0b4adee8247e5652a4889cdbbe2719a62_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d3e19a97c94784f93c0e8214a303ffbb85727f2e04aa7b069b98448a0678878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3e19a97c94784f93c0e8214a303ffbb85727f2e04aa7b069b98448a0678878->enter($__internal_9d3e19a97c94784f93c0e8214a303ffbb85727f2e04aa7b069b98448a0678878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a5d3b4a829daabfd85e3e6e1442cba358cce328321dd3275e930b81b04bc402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5d3b4a829daabfd85e3e6e1442cba358cce328321dd3275e930b81b04bc402->enter($__internal_0a5d3b4a829daabfd85e3e6e1442cba358cce328321dd3275e930b81b04bc402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_0a5d3b4a829daabfd85e3e6e1442cba358cce328321dd3275e930b81b04bc402->leave($__internal_0a5d3b4a829daabfd85e3e6e1442cba358cce328321dd3275e930b81b04bc402_prof);

        
        $__internal_9d3e19a97c94784f93c0e8214a303ffbb85727f2e04aa7b069b98448a0678878->leave($__internal_9d3e19a97c94784f93c0e8214a303ffbb85727f2e04aa7b069b98448a0678878_prof);

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
