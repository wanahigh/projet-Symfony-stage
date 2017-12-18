<?php

/* AcmeHomeBundle:Default:index.html.twig */
class __TwigTemplate_9adf39c71ed3d46709bba72bde3e5b371fe19e80dbe732aa528eb000fa259dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56a909510b54858bdb98a20793ee4ff6ea335ccedc46505d0f90386dae07c52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a909510b54858bdb98a20793ee4ff6ea335ccedc46505d0f90386dae07c52a->enter($__internal_56a909510b54858bdb98a20793ee4ff6ea335ccedc46505d0f90386dae07c52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $__internal_707000a9467e2b821d1e1c9af1851da5b03aea42ac226acf2eeebd50531f9faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707000a9467e2b821d1e1c9af1851da5b03aea42ac226acf2eeebd50531f9faa->enter($__internal_707000a9467e2b821d1e1c9af1851da5b03aea42ac226acf2eeebd50531f9faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a909510b54858bdb98a20793ee4ff6ea335ccedc46505d0f90386dae07c52a->leave($__internal_56a909510b54858bdb98a20793ee4ff6ea335ccedc46505d0f90386dae07c52a_prof);

        
        $__internal_707000a9467e2b821d1e1c9af1851da5b03aea42ac226acf2eeebd50531f9faa->leave($__internal_707000a9467e2b821d1e1c9af1851da5b03aea42ac226acf2eeebd50531f9faa_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\"  %}

", "AcmeHomeBundle:Default:index.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/HomeBundle/Resources/views/Default/index.html.twig");
    }
}
