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
        $__internal_dea61de984a8f258f1f6a20e633c81b6b0a545e328b70dde11c2495ba661e053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea61de984a8f258f1f6a20e633c81b6b0a545e328b70dde11c2495ba661e053->enter($__internal_dea61de984a8f258f1f6a20e633c81b6b0a545e328b70dde11c2495ba661e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6e13446d7728ba1dd891d1009a9ad27c556e052c497a2753864f7f2a9f7f389b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e13446d7728ba1dd891d1009a9ad27c556e052c497a2753864f7f2a9f7f389b->enter($__internal_6e13446d7728ba1dd891d1009a9ad27c556e052c497a2753864f7f2a9f7f389b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_dea61de984a8f258f1f6a20e633c81b6b0a545e328b70dde11c2495ba661e053->leave($__internal_dea61de984a8f258f1f6a20e633c81b6b0a545e328b70dde11c2495ba661e053_prof);

        
        $__internal_6e13446d7728ba1dd891d1009a9ad27c556e052c497a2753864f7f2a9f7f389b->leave($__internal_6e13446d7728ba1dd891d1009a9ad27c556e052c497a2753864f7f2a9f7f389b_prof);

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
