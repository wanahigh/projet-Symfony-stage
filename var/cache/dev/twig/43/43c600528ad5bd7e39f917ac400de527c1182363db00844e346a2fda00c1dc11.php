<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_21f90cf27df5ef399fad89b188241747e3c89ea570ee3c045fcad7194100fdd7 extends Twig_Template
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
        $__internal_56769e49b859bf9bd4ba2d1ffd62f36d49e3ec18446c064c6eed65007be3548e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56769e49b859bf9bd4ba2d1ffd62f36d49e3ec18446c064c6eed65007be3548e->enter($__internal_56769e49b859bf9bd4ba2d1ffd62f36d49e3ec18446c064c6eed65007be3548e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_11cad37d0d013a4ff017c69d9a309b8e409097b37e7569050edc87c2109179b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cad37d0d013a4ff017c69d9a309b8e409097b37e7569050edc87c2109179b1->enter($__internal_11cad37d0d013a4ff017c69d9a309b8e409097b37e7569050edc87c2109179b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_56769e49b859bf9bd4ba2d1ffd62f36d49e3ec18446c064c6eed65007be3548e->leave($__internal_56769e49b859bf9bd4ba2d1ffd62f36d49e3ec18446c064c6eed65007be3548e_prof);

        
        $__internal_11cad37d0d013a4ff017c69d9a309b8e409097b37e7569050edc87c2109179b1->leave($__internal_11cad37d0d013a4ff017c69d9a309b8e409097b37e7569050edc87c2109179b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
