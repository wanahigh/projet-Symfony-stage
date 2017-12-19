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
        $__internal_dac440a897644f72d9634aad72b72609610c3678f4040fdcb76cfccceedf308e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac440a897644f72d9634aad72b72609610c3678f4040fdcb76cfccceedf308e->enter($__internal_dac440a897644f72d9634aad72b72609610c3678f4040fdcb76cfccceedf308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8d43560690952c18d8e0f2cb6eada3dc7cc3bba8d0aeb94dca2454df16428f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d43560690952c18d8e0f2cb6eada3dc7cc3bba8d0aeb94dca2454df16428f60->enter($__internal_8d43560690952c18d8e0f2cb6eada3dc7cc3bba8d0aeb94dca2454df16428f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dac440a897644f72d9634aad72b72609610c3678f4040fdcb76cfccceedf308e->leave($__internal_dac440a897644f72d9634aad72b72609610c3678f4040fdcb76cfccceedf308e_prof);

        
        $__internal_8d43560690952c18d8e0f2cb6eada3dc7cc3bba8d0aeb94dca2454df16428f60->leave($__internal_8d43560690952c18d8e0f2cb6eada3dc7cc3bba8d0aeb94dca2454df16428f60_prof);

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
