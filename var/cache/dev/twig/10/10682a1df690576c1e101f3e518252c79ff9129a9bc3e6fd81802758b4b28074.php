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
        $__internal_aa7e094d14462efbaa89d212fd3fa5d7c4f84e3e433447ba2bab48fa15557058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7e094d14462efbaa89d212fd3fa5d7c4f84e3e433447ba2bab48fa15557058->enter($__internal_aa7e094d14462efbaa89d212fd3fa5d7c4f84e3e433447ba2bab48fa15557058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c22a6f0f473212851bfca769eceef0b43897819225d6793a7c561f3fa9c1efb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22a6f0f473212851bfca769eceef0b43897819225d6793a7c561f3fa9c1efb0->enter($__internal_c22a6f0f473212851bfca769eceef0b43897819225d6793a7c561f3fa9c1efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_aa7e094d14462efbaa89d212fd3fa5d7c4f84e3e433447ba2bab48fa15557058->leave($__internal_aa7e094d14462efbaa89d212fd3fa5d7c4f84e3e433447ba2bab48fa15557058_prof);

        
        $__internal_c22a6f0f473212851bfca769eceef0b43897819225d6793a7c561f3fa9c1efb0->leave($__internal_c22a6f0f473212851bfca769eceef0b43897819225d6793a7c561f3fa9c1efb0_prof);

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
