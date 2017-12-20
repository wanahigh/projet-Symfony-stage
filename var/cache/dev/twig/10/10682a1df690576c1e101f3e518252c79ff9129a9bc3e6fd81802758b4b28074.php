<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cfa545a5f937852f255a6aabe862531e7bdf4b5b8a1d05363efb8c25c8fd9339 extends Twig_Template
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
        $__internal_67a7a82c487f2a9291e2351ad09168456947950009e30996c485b5477fe66b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a7a82c487f2a9291e2351ad09168456947950009e30996c485b5477fe66b3d->enter($__internal_67a7a82c487f2a9291e2351ad09168456947950009e30996c485b5477fe66b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_61fafe69ba836aa66f30e01fe888f63c5263977b3829724f9cf2878e63ae7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fafe69ba836aa66f30e01fe888f63c5263977b3829724f9cf2878e63ae7b28->enter($__internal_61fafe69ba836aa66f30e01fe888f63c5263977b3829724f9cf2878e63ae7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_67a7a82c487f2a9291e2351ad09168456947950009e30996c485b5477fe66b3d->leave($__internal_67a7a82c487f2a9291e2351ad09168456947950009e30996c485b5477fe66b3d_prof);

        
        $__internal_61fafe69ba836aa66f30e01fe888f63c5263977b3829724f9cf2878e63ae7b28->leave($__internal_61fafe69ba836aa66f30e01fe888f63c5263977b3829724f9cf2878e63ae7b28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
