<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ce701f261eb8f48a57257bb5818cd161535e22841a87410542836ec840cd508 extends Twig_Template
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
        $__internal_fdf979cc80a3c676bd43b36abb9d77effd4d3ebb29cac91cf7eb0e33206792c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf979cc80a3c676bd43b36abb9d77effd4d3ebb29cac91cf7eb0e33206792c0->enter($__internal_fdf979cc80a3c676bd43b36abb9d77effd4d3ebb29cac91cf7eb0e33206792c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6d1d514542ca0a66dee3ca2532cc1d0274a95c5bde6276e2250716d928af2488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1d514542ca0a66dee3ca2532cc1d0274a95c5bde6276e2250716d928af2488->enter($__internal_6d1d514542ca0a66dee3ca2532cc1d0274a95c5bde6276e2250716d928af2488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fdf979cc80a3c676bd43b36abb9d77effd4d3ebb29cac91cf7eb0e33206792c0->leave($__internal_fdf979cc80a3c676bd43b36abb9d77effd4d3ebb29cac91cf7eb0e33206792c0_prof);

        
        $__internal_6d1d514542ca0a66dee3ca2532cc1d0274a95c5bde6276e2250716d928af2488->leave($__internal_6d1d514542ca0a66dee3ca2532cc1d0274a95c5bde6276e2250716d928af2488_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
