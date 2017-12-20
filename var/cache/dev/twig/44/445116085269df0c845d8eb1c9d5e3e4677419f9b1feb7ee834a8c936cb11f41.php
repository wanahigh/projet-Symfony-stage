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
        $__internal_84a4b3c4db5f5d83d707214fb4ad65c25427e45d37595d808b8f3e9623213191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a4b3c4db5f5d83d707214fb4ad65c25427e45d37595d808b8f3e9623213191->enter($__internal_84a4b3c4db5f5d83d707214fb4ad65c25427e45d37595d808b8f3e9623213191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2111877ec7dc529d21fad1d35e8be97646c57191a71d3cad7d82f9c66abad17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2111877ec7dc529d21fad1d35e8be97646c57191a71d3cad7d82f9c66abad17e->enter($__internal_2111877ec7dc529d21fad1d35e8be97646c57191a71d3cad7d82f9c66abad17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_84a4b3c4db5f5d83d707214fb4ad65c25427e45d37595d808b8f3e9623213191->leave($__internal_84a4b3c4db5f5d83d707214fb4ad65c25427e45d37595d808b8f3e9623213191_prof);

        
        $__internal_2111877ec7dc529d21fad1d35e8be97646c57191a71d3cad7d82f9c66abad17e->leave($__internal_2111877ec7dc529d21fad1d35e8be97646c57191a71d3cad7d82f9c66abad17e_prof);

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
