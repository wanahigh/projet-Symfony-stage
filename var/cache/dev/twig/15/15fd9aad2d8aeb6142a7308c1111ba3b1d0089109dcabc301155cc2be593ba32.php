<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9466e417e249a318888b58122bf20acec49cfb00615723c50ad6f136d987ab60 extends Twig_Template
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
        $__internal_a7d3033949aab44fcda474af44fffe734bf0e610280e6817837aaa2c196fa18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d3033949aab44fcda474af44fffe734bf0e610280e6817837aaa2c196fa18e->enter($__internal_a7d3033949aab44fcda474af44fffe734bf0e610280e6817837aaa2c196fa18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_57977832315b1ef7b6f01ee21de90b47d16f8d809685f8361163403138b264c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57977832315b1ef7b6f01ee21de90b47d16f8d809685f8361163403138b264c0->enter($__internal_57977832315b1ef7b6f01ee21de90b47d16f8d809685f8361163403138b264c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a7d3033949aab44fcda474af44fffe734bf0e610280e6817837aaa2c196fa18e->leave($__internal_a7d3033949aab44fcda474af44fffe734bf0e610280e6817837aaa2c196fa18e_prof);

        
        $__internal_57977832315b1ef7b6f01ee21de90b47d16f8d809685f8361163403138b264c0->leave($__internal_57977832315b1ef7b6f01ee21de90b47d16f8d809685f8361163403138b264c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
