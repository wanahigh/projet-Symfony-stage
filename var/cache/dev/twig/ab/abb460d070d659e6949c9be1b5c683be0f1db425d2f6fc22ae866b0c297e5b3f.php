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
        $__internal_59878d48e9cf984202719a5a1ce6d190dfa9158580a26db2c5fcafb0d632e1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59878d48e9cf984202719a5a1ce6d190dfa9158580a26db2c5fcafb0d632e1cb->enter($__internal_59878d48e9cf984202719a5a1ce6d190dfa9158580a26db2c5fcafb0d632e1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_218a29fdf2ab14d7ef04c4662ddfe2f849ad079311d001d6c63235350f22f992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218a29fdf2ab14d7ef04c4662ddfe2f849ad079311d001d6c63235350f22f992->enter($__internal_218a29fdf2ab14d7ef04c4662ddfe2f849ad079311d001d6c63235350f22f992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_59878d48e9cf984202719a5a1ce6d190dfa9158580a26db2c5fcafb0d632e1cb->leave($__internal_59878d48e9cf984202719a5a1ce6d190dfa9158580a26db2c5fcafb0d632e1cb_prof);

        
        $__internal_218a29fdf2ab14d7ef04c4662ddfe2f849ad079311d001d6c63235350f22f992->leave($__internal_218a29fdf2ab14d7ef04c4662ddfe2f849ad079311d001d6c63235350f22f992_prof);

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
