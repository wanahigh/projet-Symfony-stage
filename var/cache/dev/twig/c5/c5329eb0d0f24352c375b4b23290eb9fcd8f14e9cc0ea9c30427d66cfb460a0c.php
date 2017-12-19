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
        $__internal_7186fd3ffaf37f3af92bf475aa7b6f6e2fa0139db896265c8f5445ec168ff14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7186fd3ffaf37f3af92bf475aa7b6f6e2fa0139db896265c8f5445ec168ff14c->enter($__internal_7186fd3ffaf37f3af92bf475aa7b6f6e2fa0139db896265c8f5445ec168ff14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeClusterBundle:Default:index.html.twig"));

        $__internal_2b081baaec6b9ed89e8b0829b276494abb8075ca49bf9a94f3b724469a417338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b081baaec6b9ed89e8b0829b276494abb8075ca49bf9a94f3b724469a417338->enter($__internal_2b081baaec6b9ed89e8b0829b276494abb8075ca49bf9a94f3b724469a417338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeClusterBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7186fd3ffaf37f3af92bf475aa7b6f6e2fa0139db896265c8f5445ec168ff14c->leave($__internal_7186fd3ffaf37f3af92bf475aa7b6f6e2fa0139db896265c8f5445ec168ff14c_prof);

        
        $__internal_2b081baaec6b9ed89e8b0829b276494abb8075ca49bf9a94f3b724469a417338->leave($__internal_2b081baaec6b9ed89e8b0829b276494abb8075ca49bf9a94f3b724469a417338_prof);

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
