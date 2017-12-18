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
        $__internal_f18ff90c6a400b707f1d88a590d98c0323babf2a957412d43a698e63d60e72a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18ff90c6a400b707f1d88a590d98c0323babf2a957412d43a698e63d60e72a2->enter($__internal_f18ff90c6a400b707f1d88a590d98c0323babf2a957412d43a698e63d60e72a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_aa31a2da7c11f738ba71b5bea359cc020b396768329c20dc76ca5c8805132515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa31a2da7c11f738ba71b5bea359cc020b396768329c20dc76ca5c8805132515->enter($__internal_aa31a2da7c11f738ba71b5bea359cc020b396768329c20dc76ca5c8805132515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f18ff90c6a400b707f1d88a590d98c0323babf2a957412d43a698e63d60e72a2->leave($__internal_f18ff90c6a400b707f1d88a590d98c0323babf2a957412d43a698e63d60e72a2_prof);

        
        $__internal_aa31a2da7c11f738ba71b5bea359cc020b396768329c20dc76ca5c8805132515->leave($__internal_aa31a2da7c11f738ba71b5bea359cc020b396768329c20dc76ca5c8805132515_prof);

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
