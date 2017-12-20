<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b867d7ccf91f2ca86a31d373e5ef02f9db122ae197c5a0c6e6c446c87f595933 extends Twig_Template
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
        $__internal_65bb05754e7e7baa4451541dfc5382c118fcb06225f2829a632ad04c211dbe85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bb05754e7e7baa4451541dfc5382c118fcb06225f2829a632ad04c211dbe85->enter($__internal_65bb05754e7e7baa4451541dfc5382c118fcb06225f2829a632ad04c211dbe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1dc77a6d9abd010d6b552221c0664e5b9dc289221041585d8c66d206cb2a551e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc77a6d9abd010d6b552221c0664e5b9dc289221041585d8c66d206cb2a551e->enter($__internal_1dc77a6d9abd010d6b552221c0664e5b9dc289221041585d8c66d206cb2a551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_65bb05754e7e7baa4451541dfc5382c118fcb06225f2829a632ad04c211dbe85->leave($__internal_65bb05754e7e7baa4451541dfc5382c118fcb06225f2829a632ad04c211dbe85_prof);

        
        $__internal_1dc77a6d9abd010d6b552221c0664e5b9dc289221041585d8c66d206cb2a551e->leave($__internal_1dc77a6d9abd010d6b552221c0664e5b9dc289221041585d8c66d206cb2a551e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
