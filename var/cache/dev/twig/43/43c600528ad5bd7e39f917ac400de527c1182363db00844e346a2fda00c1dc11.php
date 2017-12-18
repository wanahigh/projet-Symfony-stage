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
        $__internal_68128fe7cb7f69b95c337fba2e83b60493a8f86d745cc4f6d5978600be2ae667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68128fe7cb7f69b95c337fba2e83b60493a8f86d745cc4f6d5978600be2ae667->enter($__internal_68128fe7cb7f69b95c337fba2e83b60493a8f86d745cc4f6d5978600be2ae667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_725bf93c9b543e1e50260cdc5b2f8324124027251cfabc1a655404492cab7fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725bf93c9b543e1e50260cdc5b2f8324124027251cfabc1a655404492cab7fa7->enter($__internal_725bf93c9b543e1e50260cdc5b2f8324124027251cfabc1a655404492cab7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_68128fe7cb7f69b95c337fba2e83b60493a8f86d745cc4f6d5978600be2ae667->leave($__internal_68128fe7cb7f69b95c337fba2e83b60493a8f86d745cc4f6d5978600be2ae667_prof);

        
        $__internal_725bf93c9b543e1e50260cdc5b2f8324124027251cfabc1a655404492cab7fa7->leave($__internal_725bf93c9b543e1e50260cdc5b2f8324124027251cfabc1a655404492cab7fa7_prof);

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
