<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b342591aa99ecb3d871bf9477764f56783dd05b0ca388558d9ad51775b14bab6 extends Twig_Template
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
        $__internal_c0dd2679e1d54ca3d3b7146076939125c34c04172c0621d0428b8e46fa59d79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dd2679e1d54ca3d3b7146076939125c34c04172c0621d0428b8e46fa59d79d->enter($__internal_c0dd2679e1d54ca3d3b7146076939125c34c04172c0621d0428b8e46fa59d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_70ee5d33017df9e568a6fd4f4673fb92264efccfdfbdb536809538356d0a3f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ee5d33017df9e568a6fd4f4673fb92264efccfdfbdb536809538356d0a3f07->enter($__internal_70ee5d33017df9e568a6fd4f4673fb92264efccfdfbdb536809538356d0a3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c0dd2679e1d54ca3d3b7146076939125c34c04172c0621d0428b8e46fa59d79d->leave($__internal_c0dd2679e1d54ca3d3b7146076939125c34c04172c0621d0428b8e46fa59d79d_prof);

        
        $__internal_70ee5d33017df9e568a6fd4f4673fb92264efccfdfbdb536809538356d0a3f07->leave($__internal_70ee5d33017df9e568a6fd4f4673fb92264efccfdfbdb536809538356d0a3f07_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
