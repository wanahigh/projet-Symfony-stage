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
        $__internal_ef77c056bdcfeefef87ee8fbe41771aa33ffff0940186523f8d2c6785be4b548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef77c056bdcfeefef87ee8fbe41771aa33ffff0940186523f8d2c6785be4b548->enter($__internal_ef77c056bdcfeefef87ee8fbe41771aa33ffff0940186523f8d2c6785be4b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e97256da9b83fffbf98dfc9a63772c5a59e6203ea9eac96a8a43965715850665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97256da9b83fffbf98dfc9a63772c5a59e6203ea9eac96a8a43965715850665->enter($__internal_e97256da9b83fffbf98dfc9a63772c5a59e6203ea9eac96a8a43965715850665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ef77c056bdcfeefef87ee8fbe41771aa33ffff0940186523f8d2c6785be4b548->leave($__internal_ef77c056bdcfeefef87ee8fbe41771aa33ffff0940186523f8d2c6785be4b548_prof);

        
        $__internal_e97256da9b83fffbf98dfc9a63772c5a59e6203ea9eac96a8a43965715850665->leave($__internal_e97256da9b83fffbf98dfc9a63772c5a59e6203ea9eac96a8a43965715850665_prof);

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
