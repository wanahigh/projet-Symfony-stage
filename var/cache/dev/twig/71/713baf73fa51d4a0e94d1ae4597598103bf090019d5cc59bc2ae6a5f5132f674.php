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
        $__internal_0d2f0199730363ef84afe7f6e8ad6dbcb0d94b4f3ec64de73970c34617b77bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2f0199730363ef84afe7f6e8ad6dbcb0d94b4f3ec64de73970c34617b77bf5->enter($__internal_0d2f0199730363ef84afe7f6e8ad6dbcb0d94b4f3ec64de73970c34617b77bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c72b990e6a678283bff1edcf27ec9fee6196aef5181299266a428eae0c05cdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72b990e6a678283bff1edcf27ec9fee6196aef5181299266a428eae0c05cdbc->enter($__internal_c72b990e6a678283bff1edcf27ec9fee6196aef5181299266a428eae0c05cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0d2f0199730363ef84afe7f6e8ad6dbcb0d94b4f3ec64de73970c34617b77bf5->leave($__internal_0d2f0199730363ef84afe7f6e8ad6dbcb0d94b4f3ec64de73970c34617b77bf5_prof);

        
        $__internal_c72b990e6a678283bff1edcf27ec9fee6196aef5181299266a428eae0c05cdbc->leave($__internal_c72b990e6a678283bff1edcf27ec9fee6196aef5181299266a428eae0c05cdbc_prof);

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
