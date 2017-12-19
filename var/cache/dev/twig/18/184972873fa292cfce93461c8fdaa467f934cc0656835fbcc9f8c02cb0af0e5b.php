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
        $__internal_b6f2b6a6452c72ec70ee3a09a4c40ef33fd08acc48889e45eb46182164d17653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f2b6a6452c72ec70ee3a09a4c40ef33fd08acc48889e45eb46182164d17653->enter($__internal_b6f2b6a6452c72ec70ee3a09a4c40ef33fd08acc48889e45eb46182164d17653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_596173ea06b4fbb564c5f63c7fd5ce6a6ee7c06bd4c5139a65f986960f3ff0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596173ea06b4fbb564c5f63c7fd5ce6a6ee7c06bd4c5139a65f986960f3ff0f7->enter($__internal_596173ea06b4fbb564c5f63c7fd5ce6a6ee7c06bd4c5139a65f986960f3ff0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b6f2b6a6452c72ec70ee3a09a4c40ef33fd08acc48889e45eb46182164d17653->leave($__internal_b6f2b6a6452c72ec70ee3a09a4c40ef33fd08acc48889e45eb46182164d17653_prof);

        
        $__internal_596173ea06b4fbb564c5f63c7fd5ce6a6ee7c06bd4c5139a65f986960f3ff0f7->leave($__internal_596173ea06b4fbb564c5f63c7fd5ce6a6ee7c06bd4c5139a65f986960f3ff0f7_prof);

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
