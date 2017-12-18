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
        $__internal_3a5a555c400156310c14d3babe63063eedb5712e0e5ac8587796d891d671da04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5a555c400156310c14d3babe63063eedb5712e0e5ac8587796d891d671da04->enter($__internal_3a5a555c400156310c14d3babe63063eedb5712e0e5ac8587796d891d671da04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_733528c89e06f90d1d30f54ac3556c6e46adcddc31a53537721c428ee46d30c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733528c89e06f90d1d30f54ac3556c6e46adcddc31a53537721c428ee46d30c8->enter($__internal_733528c89e06f90d1d30f54ac3556c6e46adcddc31a53537721c428ee46d30c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3a5a555c400156310c14d3babe63063eedb5712e0e5ac8587796d891d671da04->leave($__internal_3a5a555c400156310c14d3babe63063eedb5712e0e5ac8587796d891d671da04_prof);

        
        $__internal_733528c89e06f90d1d30f54ac3556c6e46adcddc31a53537721c428ee46d30c8->leave($__internal_733528c89e06f90d1d30f54ac3556c6e46adcddc31a53537721c428ee46d30c8_prof);

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
