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
        $__internal_bd28dd7e24343b0d189c9d661133d611cebedc24e7585c4f24048dcd9a6faa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd28dd7e24343b0d189c9d661133d611cebedc24e7585c4f24048dcd9a6faa9a->enter($__internal_bd28dd7e24343b0d189c9d661133d611cebedc24e7585c4f24048dcd9a6faa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7ebf7f51e90993a3111b3f31247ceb78bb8d4fa5dda7bffff67fcb185b7f90e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebf7f51e90993a3111b3f31247ceb78bb8d4fa5dda7bffff67fcb185b7f90e0->enter($__internal_7ebf7f51e90993a3111b3f31247ceb78bb8d4fa5dda7bffff67fcb185b7f90e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bd28dd7e24343b0d189c9d661133d611cebedc24e7585c4f24048dcd9a6faa9a->leave($__internal_bd28dd7e24343b0d189c9d661133d611cebedc24e7585c4f24048dcd9a6faa9a_prof);

        
        $__internal_7ebf7f51e90993a3111b3f31247ceb78bb8d4fa5dda7bffff67fcb185b7f90e0->leave($__internal_7ebf7f51e90993a3111b3f31247ceb78bb8d4fa5dda7bffff67fcb185b7f90e0_prof);

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
