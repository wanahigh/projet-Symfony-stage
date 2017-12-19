<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5b84505c50bc3373c20e649942bcc38feda233df8691b7a9847295a99af43c8 extends Twig_Template
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
        $__internal_d17b5a3784b0dc5dc3f7e09a1bf71fec38492b6d2f81d1c3464963396f9b7c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17b5a3784b0dc5dc3f7e09a1bf71fec38492b6d2f81d1c3464963396f9b7c32->enter($__internal_d17b5a3784b0dc5dc3f7e09a1bf71fec38492b6d2f81d1c3464963396f9b7c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c6b92659abbcf1eb0589373373534dcaf04901ff0f1e6009bb79812d1fbdd9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b92659abbcf1eb0589373373534dcaf04901ff0f1e6009bb79812d1fbdd9b8->enter($__internal_c6b92659abbcf1eb0589373373534dcaf04901ff0f1e6009bb79812d1fbdd9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_d17b5a3784b0dc5dc3f7e09a1bf71fec38492b6d2f81d1c3464963396f9b7c32->leave($__internal_d17b5a3784b0dc5dc3f7e09a1bf71fec38492b6d2f81d1c3464963396f9b7c32_prof);

        
        $__internal_c6b92659abbcf1eb0589373373534dcaf04901ff0f1e6009bb79812d1fbdd9b8->leave($__internal_c6b92659abbcf1eb0589373373534dcaf04901ff0f1e6009bb79812d1fbdd9b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
