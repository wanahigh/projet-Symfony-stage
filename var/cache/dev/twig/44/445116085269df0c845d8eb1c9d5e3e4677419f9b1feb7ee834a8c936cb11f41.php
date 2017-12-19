<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc4a9aeb42171e8566527e4036889ae5fdc4fa6be7c1916557ee7b861d4bd1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb59ab84415abc0ca775ffe4563129f5526017a5e0d428d9b54bc77bed432b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb59ab84415abc0ca775ffe4563129f5526017a5e0d428d9b54bc77bed432b35->enter($__internal_cb59ab84415abc0ca775ffe4563129f5526017a5e0d428d9b54bc77bed432b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7147acd54c00383fa7f82531a54c3dfd7297360cf1ed724d550348a9f7f8ba82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7147acd54c00383fa7f82531a54c3dfd7297360cf1ed724d550348a9f7f8ba82->enter($__internal_7147acd54c00383fa7f82531a54c3dfd7297360cf1ed724d550348a9f7f8ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_cb59ab84415abc0ca775ffe4563129f5526017a5e0d428d9b54bc77bed432b35->leave($__internal_cb59ab84415abc0ca775ffe4563129f5526017a5e0d428d9b54bc77bed432b35_prof);

        
        $__internal_7147acd54c00383fa7f82531a54c3dfd7297360cf1ed724d550348a9f7f8ba82->leave($__internal_7147acd54c00383fa7f82531a54c3dfd7297360cf1ed724d550348a9f7f8ba82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
