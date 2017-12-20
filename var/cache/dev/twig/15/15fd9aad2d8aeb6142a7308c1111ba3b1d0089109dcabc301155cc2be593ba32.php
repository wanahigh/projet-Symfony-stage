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
        $__internal_04e30f24e49cf220156dcadd4648e0973d308155950a0593f8c7b04bdd8dba26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e30f24e49cf220156dcadd4648e0973d308155950a0593f8c7b04bdd8dba26->enter($__internal_04e30f24e49cf220156dcadd4648e0973d308155950a0593f8c7b04bdd8dba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_99c38d100688811e8dd1a80f5f4c613c2a5c04b054366c7260541d4548ab2d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c38d100688811e8dd1a80f5f4c613c2a5c04b054366c7260541d4548ab2d0e->enter($__internal_99c38d100688811e8dd1a80f5f4c613c2a5c04b054366c7260541d4548ab2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_04e30f24e49cf220156dcadd4648e0973d308155950a0593f8c7b04bdd8dba26->leave($__internal_04e30f24e49cf220156dcadd4648e0973d308155950a0593f8c7b04bdd8dba26_prof);

        
        $__internal_99c38d100688811e8dd1a80f5f4c613c2a5c04b054366c7260541d4548ab2d0e->leave($__internal_99c38d100688811e8dd1a80f5f4c613c2a5c04b054366c7260541d4548ab2d0e_prof);

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
