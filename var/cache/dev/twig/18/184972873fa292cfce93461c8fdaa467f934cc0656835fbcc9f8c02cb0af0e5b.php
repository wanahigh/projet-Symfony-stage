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
        $__internal_c68986eb0aec1dbaa0b033ef3fa4a6b11ce16e843e2b6704804818b3e4dbdadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68986eb0aec1dbaa0b033ef3fa4a6b11ce16e843e2b6704804818b3e4dbdadf->enter($__internal_c68986eb0aec1dbaa0b033ef3fa4a6b11ce16e843e2b6704804818b3e4dbdadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b7ae4dfe2ec22a789b5c83d698d66795081b106c77a19c910280465f323779ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ae4dfe2ec22a789b5c83d698d66795081b106c77a19c910280465f323779ce->enter($__internal_b7ae4dfe2ec22a789b5c83d698d66795081b106c77a19c910280465f323779ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c68986eb0aec1dbaa0b033ef3fa4a6b11ce16e843e2b6704804818b3e4dbdadf->leave($__internal_c68986eb0aec1dbaa0b033ef3fa4a6b11ce16e843e2b6704804818b3e4dbdadf_prof);

        
        $__internal_b7ae4dfe2ec22a789b5c83d698d66795081b106c77a19c910280465f323779ce->leave($__internal_b7ae4dfe2ec22a789b5c83d698d66795081b106c77a19c910280465f323779ce_prof);

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
