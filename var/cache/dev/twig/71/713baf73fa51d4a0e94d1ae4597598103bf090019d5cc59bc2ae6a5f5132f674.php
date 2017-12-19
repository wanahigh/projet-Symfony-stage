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
        $__internal_ddd5baa35f20b6f8108ae613c99df59dcfeff86d727275f7440b87e2da6c4855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd5baa35f20b6f8108ae613c99df59dcfeff86d727275f7440b87e2da6c4855->enter($__internal_ddd5baa35f20b6f8108ae613c99df59dcfeff86d727275f7440b87e2da6c4855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_05a58c8b7ec682d33fe42c96ea5de041a84520dc71a83e1d6149d7001885f4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a58c8b7ec682d33fe42c96ea5de041a84520dc71a83e1d6149d7001885f4bc->enter($__internal_05a58c8b7ec682d33fe42c96ea5de041a84520dc71a83e1d6149d7001885f4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ddd5baa35f20b6f8108ae613c99df59dcfeff86d727275f7440b87e2da6c4855->leave($__internal_ddd5baa35f20b6f8108ae613c99df59dcfeff86d727275f7440b87e2da6c4855_prof);

        
        $__internal_05a58c8b7ec682d33fe42c96ea5de041a84520dc71a83e1d6149d7001885f4bc->leave($__internal_05a58c8b7ec682d33fe42c96ea5de041a84520dc71a83e1d6149d7001885f4bc_prof);

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
