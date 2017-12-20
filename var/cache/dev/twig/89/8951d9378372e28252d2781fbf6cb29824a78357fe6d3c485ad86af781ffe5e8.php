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
        $__internal_7d1eb066430db2ae3a0b5158da267e67c1791e3ce36c955507c504f84d8b1bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1eb066430db2ae3a0b5158da267e67c1791e3ce36c955507c504f84d8b1bc1->enter($__internal_7d1eb066430db2ae3a0b5158da267e67c1791e3ce36c955507c504f84d8b1bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ad279a406541e23ab6df49e9c7799dbdc4da04d4143bbace6dc94043ec51a1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad279a406541e23ab6df49e9c7799dbdc4da04d4143bbace6dc94043ec51a1fa->enter($__internal_ad279a406541e23ab6df49e9c7799dbdc4da04d4143bbace6dc94043ec51a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7d1eb066430db2ae3a0b5158da267e67c1791e3ce36c955507c504f84d8b1bc1->leave($__internal_7d1eb066430db2ae3a0b5158da267e67c1791e3ce36c955507c504f84d8b1bc1_prof);

        
        $__internal_ad279a406541e23ab6df49e9c7799dbdc4da04d4143bbace6dc94043ec51a1fa->leave($__internal_ad279a406541e23ab6df49e9c7799dbdc4da04d4143bbace6dc94043ec51a1fa_prof);

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
