<?php

/* AcmeClusterBundle:Default:index.html.twig */
class __TwigTemplate_aec4e46fed3a25926617b69209402bb444170d74223b3680f108628a02742c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeClusterBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a8959966ba44f7532560654e4fb65b5b25bab5cc24221624bf099674dd3090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a8959966ba44f7532560654e4fb65b5b25bab5cc24221624bf099674dd3090->enter($__internal_14a8959966ba44f7532560654e4fb65b5b25bab5cc24221624bf099674dd3090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeClusterBundle:Default:index.html.twig"));

        $__internal_0ca9da732a9208ef43cef7784b6870ed959886cd99d56464afe6ac2658d799f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca9da732a9208ef43cef7784b6870ed959886cd99d56464afe6ac2658d799f2->enter($__internal_0ca9da732a9208ef43cef7784b6870ed959886cd99d56464afe6ac2658d799f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeClusterBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a8959966ba44f7532560654e4fb65b5b25bab5cc24221624bf099674dd3090->leave($__internal_14a8959966ba44f7532560654e4fb65b5b25bab5cc24221624bf099674dd3090_prof);

        
        $__internal_0ca9da732a9208ef43cef7784b6870ed959886cd99d56464afe6ac2658d799f2->leave($__internal_0ca9da732a9208ef43cef7784b6870ed959886cd99d56464afe6ac2658d799f2_prof);

    }

    public function getTemplateName()
    {
        return "AcmeClusterBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}", "AcmeClusterBundle:Default:index.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/ClusterBundle/Resources/views/Default/index.html.twig");
    }
}
