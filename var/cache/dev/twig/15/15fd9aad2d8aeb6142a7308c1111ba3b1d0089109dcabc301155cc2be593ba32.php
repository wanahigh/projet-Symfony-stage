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
        $__internal_f943c8d34e53800e62eb6ea80e2fea1bfd0745ffae8c7cc804cf77c45fe20ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f943c8d34e53800e62eb6ea80e2fea1bfd0745ffae8c7cc804cf77c45fe20ac0->enter($__internal_f943c8d34e53800e62eb6ea80e2fea1bfd0745ffae8c7cc804cf77c45fe20ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_74b95cff59ba9887c84e321495ae88641ff09241582b5cc59142fbb00a06e2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b95cff59ba9887c84e321495ae88641ff09241582b5cc59142fbb00a06e2eb->enter($__internal_74b95cff59ba9887c84e321495ae88641ff09241582b5cc59142fbb00a06e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f943c8d34e53800e62eb6ea80e2fea1bfd0745ffae8c7cc804cf77c45fe20ac0->leave($__internal_f943c8d34e53800e62eb6ea80e2fea1bfd0745ffae8c7cc804cf77c45fe20ac0_prof);

        
        $__internal_74b95cff59ba9887c84e321495ae88641ff09241582b5cc59142fbb00a06e2eb->leave($__internal_74b95cff59ba9887c84e321495ae88641ff09241582b5cc59142fbb00a06e2eb_prof);

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
