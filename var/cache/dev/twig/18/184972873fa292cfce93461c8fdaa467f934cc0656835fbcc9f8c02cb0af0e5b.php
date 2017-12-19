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
        $__internal_f98e5149cf3062104ab063fcf5cbcdff2389799a5575ec647bdd55395fc9a0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98e5149cf3062104ab063fcf5cbcdff2389799a5575ec647bdd55395fc9a0f7->enter($__internal_f98e5149cf3062104ab063fcf5cbcdff2389799a5575ec647bdd55395fc9a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6dffacc7f319254a26c9b1b07b4f0710f09fcd5ea950b26665ef9fc210e5b95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dffacc7f319254a26c9b1b07b4f0710f09fcd5ea950b26665ef9fc210e5b95a->enter($__internal_6dffacc7f319254a26c9b1b07b4f0710f09fcd5ea950b26665ef9fc210e5b95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f98e5149cf3062104ab063fcf5cbcdff2389799a5575ec647bdd55395fc9a0f7->leave($__internal_f98e5149cf3062104ab063fcf5cbcdff2389799a5575ec647bdd55395fc9a0f7_prof);

        
        $__internal_6dffacc7f319254a26c9b1b07b4f0710f09fcd5ea950b26665ef9fc210e5b95a->leave($__internal_6dffacc7f319254a26c9b1b07b4f0710f09fcd5ea950b26665ef9fc210e5b95a_prof);

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
