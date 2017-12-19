<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ce701f261eb8f48a57257bb5818cd161535e22841a87410542836ec840cd508 extends Twig_Template
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
        $__internal_e71b9583a704dae1bec1b79f1711d7b978389f84bd4ac405fed73a137d71665b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71b9583a704dae1bec1b79f1711d7b978389f84bd4ac405fed73a137d71665b->enter($__internal_e71b9583a704dae1bec1b79f1711d7b978389f84bd4ac405fed73a137d71665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7b6747d61c8922c1515eb8c74fcac1f23c8f5e474e2ff9558f3ddb47747987b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6747d61c8922c1515eb8c74fcac1f23c8f5e474e2ff9558f3ddb47747987b0->enter($__internal_7b6747d61c8922c1515eb8c74fcac1f23c8f5e474e2ff9558f3ddb47747987b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e71b9583a704dae1bec1b79f1711d7b978389f84bd4ac405fed73a137d71665b->leave($__internal_e71b9583a704dae1bec1b79f1711d7b978389f84bd4ac405fed73a137d71665b_prof);

        
        $__internal_7b6747d61c8922c1515eb8c74fcac1f23c8f5e474e2ff9558f3ddb47747987b0->leave($__internal_7b6747d61c8922c1515eb8c74fcac1f23c8f5e474e2ff9558f3ddb47747987b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
