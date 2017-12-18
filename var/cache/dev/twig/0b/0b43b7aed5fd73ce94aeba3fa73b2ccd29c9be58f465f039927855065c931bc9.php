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
        $__internal_42c5482436b7568338b8c0234c57d2a1724244f22e65fb0d24720b24b89b55e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c5482436b7568338b8c0234c57d2a1724244f22e65fb0d24720b24b89b55e6->enter($__internal_42c5482436b7568338b8c0234c57d2a1724244f22e65fb0d24720b24b89b55e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_08b9af249a178bdb11c46571314f8e76f0a878d8b833f0b3cec9a4e5a413958b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b9af249a178bdb11c46571314f8e76f0a878d8b833f0b3cec9a4e5a413958b->enter($__internal_08b9af249a178bdb11c46571314f8e76f0a878d8b833f0b3cec9a4e5a413958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_42c5482436b7568338b8c0234c57d2a1724244f22e65fb0d24720b24b89b55e6->leave($__internal_42c5482436b7568338b8c0234c57d2a1724244f22e65fb0d24720b24b89b55e6_prof);

        
        $__internal_08b9af249a178bdb11c46571314f8e76f0a878d8b833f0b3cec9a4e5a413958b->leave($__internal_08b9af249a178bdb11c46571314f8e76f0a878d8b833f0b3cec9a4e5a413958b_prof);

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
