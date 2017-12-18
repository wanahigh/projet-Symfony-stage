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
        $__internal_b3074dea62118bcb96cdc1f9ff360d3defdf364449a20770ba1d4ec3d8a6ab68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3074dea62118bcb96cdc1f9ff360d3defdf364449a20770ba1d4ec3d8a6ab68->enter($__internal_b3074dea62118bcb96cdc1f9ff360d3defdf364449a20770ba1d4ec3d8a6ab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_31091aa34775dc74ea8635b7ebbb3cdabac7e5a8bf94312140dff536964ba306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31091aa34775dc74ea8635b7ebbb3cdabac7e5a8bf94312140dff536964ba306->enter($__internal_31091aa34775dc74ea8635b7ebbb3cdabac7e5a8bf94312140dff536964ba306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b3074dea62118bcb96cdc1f9ff360d3defdf364449a20770ba1d4ec3d8a6ab68->leave($__internal_b3074dea62118bcb96cdc1f9ff360d3defdf364449a20770ba1d4ec3d8a6ab68_prof);

        
        $__internal_31091aa34775dc74ea8635b7ebbb3cdabac7e5a8bf94312140dff536964ba306->leave($__internal_31091aa34775dc74ea8635b7ebbb3cdabac7e5a8bf94312140dff536964ba306_prof);

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
