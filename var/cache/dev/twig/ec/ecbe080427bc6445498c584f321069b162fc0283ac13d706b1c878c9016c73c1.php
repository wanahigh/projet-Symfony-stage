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
        $__internal_7396d69fe683e88c070a44f2668ab1690b31abadd61e8a0aa6793466911bb817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7396d69fe683e88c070a44f2668ab1690b31abadd61e8a0aa6793466911bb817->enter($__internal_7396d69fe683e88c070a44f2668ab1690b31abadd61e8a0aa6793466911bb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f0466801d413e261c9b566f87dec51f2d9954846cfc033ddfa090f40a52a8bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0466801d413e261c9b566f87dec51f2d9954846cfc033ddfa090f40a52a8bdf->enter($__internal_f0466801d413e261c9b566f87dec51f2d9954846cfc033ddfa090f40a52a8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7396d69fe683e88c070a44f2668ab1690b31abadd61e8a0aa6793466911bb817->leave($__internal_7396d69fe683e88c070a44f2668ab1690b31abadd61e8a0aa6793466911bb817_prof);

        
        $__internal_f0466801d413e261c9b566f87dec51f2d9954846cfc033ddfa090f40a52a8bdf->leave($__internal_f0466801d413e261c9b566f87dec51f2d9954846cfc033ddfa090f40a52a8bdf_prof);

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
