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
        $__internal_6f784ed9305828d336b0d2bfd1bc03789a99568180303c05b19dbe206ca1bf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f784ed9305828d336b0d2bfd1bc03789a99568180303c05b19dbe206ca1bf3e->enter($__internal_6f784ed9305828d336b0d2bfd1bc03789a99568180303c05b19dbe206ca1bf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4fc3c0fda4509789ed451b8d278daef0444c614e299d627aa870baf233c28faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc3c0fda4509789ed451b8d278daef0444c614e299d627aa870baf233c28faf->enter($__internal_4fc3c0fda4509789ed451b8d278daef0444c614e299d627aa870baf233c28faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6f784ed9305828d336b0d2bfd1bc03789a99568180303c05b19dbe206ca1bf3e->leave($__internal_6f784ed9305828d336b0d2bfd1bc03789a99568180303c05b19dbe206ca1bf3e_prof);

        
        $__internal_4fc3c0fda4509789ed451b8d278daef0444c614e299d627aa870baf233c28faf->leave($__internal_4fc3c0fda4509789ed451b8d278daef0444c614e299d627aa870baf233c28faf_prof);

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
