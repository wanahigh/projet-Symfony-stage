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
        $__internal_7f9fe8bcdbdd14c86524d39beda389f57a2f85575c5b0ecc4c188f6b0e26ea5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9fe8bcdbdd14c86524d39beda389f57a2f85575c5b0ecc4c188f6b0e26ea5d->enter($__internal_7f9fe8bcdbdd14c86524d39beda389f57a2f85575c5b0ecc4c188f6b0e26ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_82ff802b6bbb542760d91012b9d5570a3f24f7901f070e525f19480e9b144890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ff802b6bbb542760d91012b9d5570a3f24f7901f070e525f19480e9b144890->enter($__internal_82ff802b6bbb542760d91012b9d5570a3f24f7901f070e525f19480e9b144890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7f9fe8bcdbdd14c86524d39beda389f57a2f85575c5b0ecc4c188f6b0e26ea5d->leave($__internal_7f9fe8bcdbdd14c86524d39beda389f57a2f85575c5b0ecc4c188f6b0e26ea5d_prof);

        
        $__internal_82ff802b6bbb542760d91012b9d5570a3f24f7901f070e525f19480e9b144890->leave($__internal_82ff802b6bbb542760d91012b9d5570a3f24f7901f070e525f19480e9b144890_prof);

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
