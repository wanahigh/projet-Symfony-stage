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
        $__internal_9545fa5a5f6df3a8e7f7e483b9a1bbc24b8e4d109049db8665a60863e6795885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9545fa5a5f6df3a8e7f7e483b9a1bbc24b8e4d109049db8665a60863e6795885->enter($__internal_9545fa5a5f6df3a8e7f7e483b9a1bbc24b8e4d109049db8665a60863e6795885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e43793618a11cd87f399910feb06bc09ffbe97a98481ba8735143890898b9717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43793618a11cd87f399910feb06bc09ffbe97a98481ba8735143890898b9717->enter($__internal_e43793618a11cd87f399910feb06bc09ffbe97a98481ba8735143890898b9717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_9545fa5a5f6df3a8e7f7e483b9a1bbc24b8e4d109049db8665a60863e6795885->leave($__internal_9545fa5a5f6df3a8e7f7e483b9a1bbc24b8e4d109049db8665a60863e6795885_prof);

        
        $__internal_e43793618a11cd87f399910feb06bc09ffbe97a98481ba8735143890898b9717->leave($__internal_e43793618a11cd87f399910feb06bc09ffbe97a98481ba8735143890898b9717_prof);

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
