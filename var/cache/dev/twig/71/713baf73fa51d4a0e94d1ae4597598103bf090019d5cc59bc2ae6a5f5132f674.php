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
        $__internal_f6fffbeda648cc9385499978108ec0672bcab57b9ed23c0383d774f7feb0efd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fffbeda648cc9385499978108ec0672bcab57b9ed23c0383d774f7feb0efd9->enter($__internal_f6fffbeda648cc9385499978108ec0672bcab57b9ed23c0383d774f7feb0efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c38ed037ff417e5347c66ee18f975fdb0cb4e23aafe8522c7df41c8cad9eb7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38ed037ff417e5347c66ee18f975fdb0cb4e23aafe8522c7df41c8cad9eb7ae->enter($__internal_c38ed037ff417e5347c66ee18f975fdb0cb4e23aafe8522c7df41c8cad9eb7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f6fffbeda648cc9385499978108ec0672bcab57b9ed23c0383d774f7feb0efd9->leave($__internal_f6fffbeda648cc9385499978108ec0672bcab57b9ed23c0383d774f7feb0efd9_prof);

        
        $__internal_c38ed037ff417e5347c66ee18f975fdb0cb4e23aafe8522c7df41c8cad9eb7ae->leave($__internal_c38ed037ff417e5347c66ee18f975fdb0cb4e23aafe8522c7df41c8cad9eb7ae_prof);

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
