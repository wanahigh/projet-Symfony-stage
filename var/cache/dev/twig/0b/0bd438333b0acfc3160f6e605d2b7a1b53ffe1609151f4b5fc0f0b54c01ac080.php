<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30580389b5c7aa14b386ed61dd443937efe4af3739aaf902d640f73372264a55 extends Twig_Template
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
        $__internal_578730515710db1cf95f8ce3d8dad5ac4e6cf81dd6e0b37b344623f5521b3f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578730515710db1cf95f8ce3d8dad5ac4e6cf81dd6e0b37b344623f5521b3f62->enter($__internal_578730515710db1cf95f8ce3d8dad5ac4e6cf81dd6e0b37b344623f5521b3f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_363a06cb5d31dd3938c0864ab62c87808ff0c682e35beefab9c78d01fd3bae47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363a06cb5d31dd3938c0864ab62c87808ff0c682e35beefab9c78d01fd3bae47->enter($__internal_363a06cb5d31dd3938c0864ab62c87808ff0c682e35beefab9c78d01fd3bae47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_578730515710db1cf95f8ce3d8dad5ac4e6cf81dd6e0b37b344623f5521b3f62->leave($__internal_578730515710db1cf95f8ce3d8dad5ac4e6cf81dd6e0b37b344623f5521b3f62_prof);

        
        $__internal_363a06cb5d31dd3938c0864ab62c87808ff0c682e35beefab9c78d01fd3bae47->leave($__internal_363a06cb5d31dd3938c0864ab62c87808ff0c682e35beefab9c78d01fd3bae47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
