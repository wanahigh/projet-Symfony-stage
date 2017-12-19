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
        $__internal_3f50a9a4164f40857e3cf6d314ffc2a6b03d720ff2d92363522e0f8b63258a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f50a9a4164f40857e3cf6d314ffc2a6b03d720ff2d92363522e0f8b63258a26->enter($__internal_3f50a9a4164f40857e3cf6d314ffc2a6b03d720ff2d92363522e0f8b63258a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_505330e40d8bd3d783476249a6ef50b8cb1796e6aaab1b54daee5f97b261bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505330e40d8bd3d783476249a6ef50b8cb1796e6aaab1b54daee5f97b261bc19->enter($__internal_505330e40d8bd3d783476249a6ef50b8cb1796e6aaab1b54daee5f97b261bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3f50a9a4164f40857e3cf6d314ffc2a6b03d720ff2d92363522e0f8b63258a26->leave($__internal_3f50a9a4164f40857e3cf6d314ffc2a6b03d720ff2d92363522e0f8b63258a26_prof);

        
        $__internal_505330e40d8bd3d783476249a6ef50b8cb1796e6aaab1b54daee5f97b261bc19->leave($__internal_505330e40d8bd3d783476249a6ef50b8cb1796e6aaab1b54daee5f97b261bc19_prof);

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
