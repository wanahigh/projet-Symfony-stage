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
        $__internal_20a625527eb7806f238dc6cf049e7f4031cd108e1131412cdad6e9daf6676b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a625527eb7806f238dc6cf049e7f4031cd108e1131412cdad6e9daf6676b59->enter($__internal_20a625527eb7806f238dc6cf049e7f4031cd108e1131412cdad6e9daf6676b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_db82d0d85f91d56e495dc34cc6b0c49a4011853e0ee76f6458e1f6b0053e013e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db82d0d85f91d56e495dc34cc6b0c49a4011853e0ee76f6458e1f6b0053e013e->enter($__internal_db82d0d85f91d56e495dc34cc6b0c49a4011853e0ee76f6458e1f6b0053e013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_20a625527eb7806f238dc6cf049e7f4031cd108e1131412cdad6e9daf6676b59->leave($__internal_20a625527eb7806f238dc6cf049e7f4031cd108e1131412cdad6e9daf6676b59_prof);

        
        $__internal_db82d0d85f91d56e495dc34cc6b0c49a4011853e0ee76f6458e1f6b0053e013e->leave($__internal_db82d0d85f91d56e495dc34cc6b0c49a4011853e0ee76f6458e1f6b0053e013e_prof);

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
