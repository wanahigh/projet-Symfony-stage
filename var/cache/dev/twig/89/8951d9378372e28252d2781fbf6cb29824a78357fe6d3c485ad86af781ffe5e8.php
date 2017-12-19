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
        $__internal_2105b3bb05d4d132021dc399513e9df6d4ac5040fcb285f6007f00ff527d3fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2105b3bb05d4d132021dc399513e9df6d4ac5040fcb285f6007f00ff527d3fb2->enter($__internal_2105b3bb05d4d132021dc399513e9df6d4ac5040fcb285f6007f00ff527d3fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_056644c8bc3513553932ba8633cadb2602b10405f5d5053b5b793766532fb027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056644c8bc3513553932ba8633cadb2602b10405f5d5053b5b793766532fb027->enter($__internal_056644c8bc3513553932ba8633cadb2602b10405f5d5053b5b793766532fb027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2105b3bb05d4d132021dc399513e9df6d4ac5040fcb285f6007f00ff527d3fb2->leave($__internal_2105b3bb05d4d132021dc399513e9df6d4ac5040fcb285f6007f00ff527d3fb2_prof);

        
        $__internal_056644c8bc3513553932ba8633cadb2602b10405f5d5053b5b793766532fb027->leave($__internal_056644c8bc3513553932ba8633cadb2602b10405f5d5053b5b793766532fb027_prof);

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
