<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc4a9aeb42171e8566527e4036889ae5fdc4fa6be7c1916557ee7b861d4bd1d0 extends Twig_Template
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
        $__internal_6a4b974f9b8a52c3328353d975973a756a8f3ff5c91052d20498d788dfa01498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4b974f9b8a52c3328353d975973a756a8f3ff5c91052d20498d788dfa01498->enter($__internal_6a4b974f9b8a52c3328353d975973a756a8f3ff5c91052d20498d788dfa01498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2a9c2c502524d50628db70d51f18abc64662f44a0f0b8adf593b2bc200927b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9c2c502524d50628db70d51f18abc64662f44a0f0b8adf593b2bc200927b69->enter($__internal_2a9c2c502524d50628db70d51f18abc64662f44a0f0b8adf593b2bc200927b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6a4b974f9b8a52c3328353d975973a756a8f3ff5c91052d20498d788dfa01498->leave($__internal_6a4b974f9b8a52c3328353d975973a756a8f3ff5c91052d20498d788dfa01498_prof);

        
        $__internal_2a9c2c502524d50628db70d51f18abc64662f44a0f0b8adf593b2bc200927b69->leave($__internal_2a9c2c502524d50628db70d51f18abc64662f44a0f0b8adf593b2bc200927b69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
