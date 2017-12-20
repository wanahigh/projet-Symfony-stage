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
        $__internal_ffca6c0c87f5b1ed7b6801ae88cd05ab87014cedcba39af0a934322881ac88c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffca6c0c87f5b1ed7b6801ae88cd05ab87014cedcba39af0a934322881ac88c1->enter($__internal_ffca6c0c87f5b1ed7b6801ae88cd05ab87014cedcba39af0a934322881ac88c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_75a1aab7264989eb7e415bf1fcd07331d33f33309848c2d8227f7b0467838d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a1aab7264989eb7e415bf1fcd07331d33f33309848c2d8227f7b0467838d48->enter($__internal_75a1aab7264989eb7e415bf1fcd07331d33f33309848c2d8227f7b0467838d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ffca6c0c87f5b1ed7b6801ae88cd05ab87014cedcba39af0a934322881ac88c1->leave($__internal_ffca6c0c87f5b1ed7b6801ae88cd05ab87014cedcba39af0a934322881ac88c1_prof);

        
        $__internal_75a1aab7264989eb7e415bf1fcd07331d33f33309848c2d8227f7b0467838d48->leave($__internal_75a1aab7264989eb7e415bf1fcd07331d33f33309848c2d8227f7b0467838d48_prof);

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
