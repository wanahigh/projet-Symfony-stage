<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2a6dca5c63f99bb122801f5826466c2d91a1ae63e59943b13502615d6fa6870a extends Twig_Template
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
        $__internal_445bbce4648ae4ff5f2184d506daadf875e59d45a7c0ded0275e4f41f78b4113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445bbce4648ae4ff5f2184d506daadf875e59d45a7c0ded0275e4f41f78b4113->enter($__internal_445bbce4648ae4ff5f2184d506daadf875e59d45a7c0ded0275e4f41f78b4113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_58ca25a22dba1196e069209f528fc7039da1ebdffde1efc71c576b2feca689a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ca25a22dba1196e069209f528fc7039da1ebdffde1efc71c576b2feca689a3->enter($__internal_58ca25a22dba1196e069209f528fc7039da1ebdffde1efc71c576b2feca689a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_445bbce4648ae4ff5f2184d506daadf875e59d45a7c0ded0275e4f41f78b4113->leave($__internal_445bbce4648ae4ff5f2184d506daadf875e59d45a7c0ded0275e4f41f78b4113_prof);

        
        $__internal_58ca25a22dba1196e069209f528fc7039da1ebdffde1efc71c576b2feca689a3->leave($__internal_58ca25a22dba1196e069209f528fc7039da1ebdffde1efc71c576b2feca689a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
