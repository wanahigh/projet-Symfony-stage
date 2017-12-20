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
        $__internal_83de0e5b997f6344bdfb07f5f7b87bf517bdc979cb7183fdef8e756ec1f06ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83de0e5b997f6344bdfb07f5f7b87bf517bdc979cb7183fdef8e756ec1f06ade->enter($__internal_83de0e5b997f6344bdfb07f5f7b87bf517bdc979cb7183fdef8e756ec1f06ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7d713f403a5a591327caa8e92345bd756d6227fc90ffff24573c3cae76349d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d713f403a5a591327caa8e92345bd756d6227fc90ffff24573c3cae76349d5e->enter($__internal_7d713f403a5a591327caa8e92345bd756d6227fc90ffff24573c3cae76349d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_83de0e5b997f6344bdfb07f5f7b87bf517bdc979cb7183fdef8e756ec1f06ade->leave($__internal_83de0e5b997f6344bdfb07f5f7b87bf517bdc979cb7183fdef8e756ec1f06ade_prof);

        
        $__internal_7d713f403a5a591327caa8e92345bd756d6227fc90ffff24573c3cae76349d5e->leave($__internal_7d713f403a5a591327caa8e92345bd756d6227fc90ffff24573c3cae76349d5e_prof);

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
