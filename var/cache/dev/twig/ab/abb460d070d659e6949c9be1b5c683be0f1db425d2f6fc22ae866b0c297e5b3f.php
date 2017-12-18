<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_02c22419a1a0f3a59818ef00338f58b3856ed67a57c403d2362d0ed3abe9224e extends Twig_Template
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
        $__internal_5afcebd9e9be3642058d1f89bf54f16d8553ceb89f5f18870b26720386cbe779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afcebd9e9be3642058d1f89bf54f16d8553ceb89f5f18870b26720386cbe779->enter($__internal_5afcebd9e9be3642058d1f89bf54f16d8553ceb89f5f18870b26720386cbe779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_83e770677b90d92f6a8bd5c64af6c667ea352a0b26c6ca6c698dece93ce014b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e770677b90d92f6a8bd5c64af6c667ea352a0b26c6ca6c698dece93ce014b9->enter($__internal_83e770677b90d92f6a8bd5c64af6c667ea352a0b26c6ca6c698dece93ce014b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5afcebd9e9be3642058d1f89bf54f16d8553ceb89f5f18870b26720386cbe779->leave($__internal_5afcebd9e9be3642058d1f89bf54f16d8553ceb89f5f18870b26720386cbe779_prof);

        
        $__internal_83e770677b90d92f6a8bd5c64af6c667ea352a0b26c6ca6c698dece93ce014b9->leave($__internal_83e770677b90d92f6a8bd5c64af6c667ea352a0b26c6ca6c698dece93ce014b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
