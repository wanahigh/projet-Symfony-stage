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
        $__internal_da53cf7e011c94be235a27c6f80bfa6ad57207565c138d9624e382ff23e4fbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da53cf7e011c94be235a27c6f80bfa6ad57207565c138d9624e382ff23e4fbfc->enter($__internal_da53cf7e011c94be235a27c6f80bfa6ad57207565c138d9624e382ff23e4fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6e2e769f18fca1e9f0701847c00cd9509a95ced306fbba43ca7f2a28d8bec525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2e769f18fca1e9f0701847c00cd9509a95ced306fbba43ca7f2a28d8bec525->enter($__internal_6e2e769f18fca1e9f0701847c00cd9509a95ced306fbba43ca7f2a28d8bec525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_da53cf7e011c94be235a27c6f80bfa6ad57207565c138d9624e382ff23e4fbfc->leave($__internal_da53cf7e011c94be235a27c6f80bfa6ad57207565c138d9624e382ff23e4fbfc_prof);

        
        $__internal_6e2e769f18fca1e9f0701847c00cd9509a95ced306fbba43ca7f2a28d8bec525->leave($__internal_6e2e769f18fca1e9f0701847c00cd9509a95ced306fbba43ca7f2a28d8bec525_prof);

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
