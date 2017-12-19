<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30580389b5c7aa14b386ed61dd443937efe4af3739aaf902d640f73372264a55 extends Twig_Template
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
        $__internal_8d5af94051773d6ff12346e041fd0d45c3d3bd194d20cbf97d8be579bcece36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5af94051773d6ff12346e041fd0d45c3d3bd194d20cbf97d8be579bcece36a->enter($__internal_8d5af94051773d6ff12346e041fd0d45c3d3bd194d20cbf97d8be579bcece36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_55189affc3aaa0b19fb7a8dcaa623ca7f45a24fdb8bbda5cdbb85d57b22be150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55189affc3aaa0b19fb7a8dcaa623ca7f45a24fdb8bbda5cdbb85d57b22be150->enter($__internal_55189affc3aaa0b19fb7a8dcaa623ca7f45a24fdb8bbda5cdbb85d57b22be150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8d5af94051773d6ff12346e041fd0d45c3d3bd194d20cbf97d8be579bcece36a->leave($__internal_8d5af94051773d6ff12346e041fd0d45c3d3bd194d20cbf97d8be579bcece36a_prof);

        
        $__internal_55189affc3aaa0b19fb7a8dcaa623ca7f45a24fdb8bbda5cdbb85d57b22be150->leave($__internal_55189affc3aaa0b19fb7a8dcaa623ca7f45a24fdb8bbda5cdbb85d57b22be150_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
