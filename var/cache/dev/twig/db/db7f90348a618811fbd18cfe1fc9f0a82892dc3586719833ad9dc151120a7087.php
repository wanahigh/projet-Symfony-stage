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
        $__internal_116ab15304de268d71447faf374088d7ed07a19c53f684ac5b6b387e1d449e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116ab15304de268d71447faf374088d7ed07a19c53f684ac5b6b387e1d449e5b->enter($__internal_116ab15304de268d71447faf374088d7ed07a19c53f684ac5b6b387e1d449e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e299a143d621d45abd4b892ffb4dffb34b179d40e6255451c06dac486a93b5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e299a143d621d45abd4b892ffb4dffb34b179d40e6255451c06dac486a93b5d5->enter($__internal_e299a143d621d45abd4b892ffb4dffb34b179d40e6255451c06dac486a93b5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_116ab15304de268d71447faf374088d7ed07a19c53f684ac5b6b387e1d449e5b->leave($__internal_116ab15304de268d71447faf374088d7ed07a19c53f684ac5b6b387e1d449e5b_prof);

        
        $__internal_e299a143d621d45abd4b892ffb4dffb34b179d40e6255451c06dac486a93b5d5->leave($__internal_e299a143d621d45abd4b892ffb4dffb34b179d40e6255451c06dac486a93b5d5_prof);

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
