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
        $__internal_3b4b5727a4b6c040e4e3c38b331e7821d658b0cf1a2619d040b8e3f148d971c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4b5727a4b6c040e4e3c38b331e7821d658b0cf1a2619d040b8e3f148d971c3->enter($__internal_3b4b5727a4b6c040e4e3c38b331e7821d658b0cf1a2619d040b8e3f148d971c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6d5a63d153936d876691cadcd8d9805051f7b436ab3207c357665e32f32d6d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5a63d153936d876691cadcd8d9805051f7b436ab3207c357665e32f32d6d0e->enter($__internal_6d5a63d153936d876691cadcd8d9805051f7b436ab3207c357665e32f32d6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3b4b5727a4b6c040e4e3c38b331e7821d658b0cf1a2619d040b8e3f148d971c3->leave($__internal_3b4b5727a4b6c040e4e3c38b331e7821d658b0cf1a2619d040b8e3f148d971c3_prof);

        
        $__internal_6d5a63d153936d876691cadcd8d9805051f7b436ab3207c357665e32f32d6d0e->leave($__internal_6d5a63d153936d876691cadcd8d9805051f7b436ab3207c357665e32f32d6d0e_prof);

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
