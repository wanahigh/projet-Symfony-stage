<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e6f3f0f3ec9d017eafd6677baaa3cc06bfd156ad88355c9e2161a81fe1e4c361 extends Twig_Template
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
        $__internal_394c13d0b70b9a0ad48b242e96694995829f50e871f8a55e8c68b9da26e3e9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394c13d0b70b9a0ad48b242e96694995829f50e871f8a55e8c68b9da26e3e9a6->enter($__internal_394c13d0b70b9a0ad48b242e96694995829f50e871f8a55e8c68b9da26e3e9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3bce09d52dd0f6c8f9c0ce7efcfd6abf413949944d14357089a55fbefd7386b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bce09d52dd0f6c8f9c0ce7efcfd6abf413949944d14357089a55fbefd7386b7->enter($__internal_3bce09d52dd0f6c8f9c0ce7efcfd6abf413949944d14357089a55fbefd7386b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_394c13d0b70b9a0ad48b242e96694995829f50e871f8a55e8c68b9da26e3e9a6->leave($__internal_394c13d0b70b9a0ad48b242e96694995829f50e871f8a55e8c68b9da26e3e9a6_prof);

        
        $__internal_3bce09d52dd0f6c8f9c0ce7efcfd6abf413949944d14357089a55fbefd7386b7->leave($__internal_3bce09d52dd0f6c8f9c0ce7efcfd6abf413949944d14357089a55fbefd7386b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
