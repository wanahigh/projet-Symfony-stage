<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30580389b5c7aa14b386ed61dd443937efe4af3739aaf902d640f73372264a55 extends Twig_Template
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
        $__internal_f2f49950551767a9ad2c4ed3ee497a8b44f2ef0b14a172bcdd789c7ab147aed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f49950551767a9ad2c4ed3ee497a8b44f2ef0b14a172bcdd789c7ab147aed0->enter($__internal_f2f49950551767a9ad2c4ed3ee497a8b44f2ef0b14a172bcdd789c7ab147aed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c4e41aefbad86b4bd0f226571e7b5d6c839648bb1802e0b45580672819ddab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e41aefbad86b4bd0f226571e7b5d6c839648bb1802e0b45580672819ddab7f->enter($__internal_c4e41aefbad86b4bd0f226571e7b5d6c839648bb1802e0b45580672819ddab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f2f49950551767a9ad2c4ed3ee497a8b44f2ef0b14a172bcdd789c7ab147aed0->leave($__internal_f2f49950551767a9ad2c4ed3ee497a8b44f2ef0b14a172bcdd789c7ab147aed0_prof);

        
        $__internal_c4e41aefbad86b4bd0f226571e7b5d6c839648bb1802e0b45580672819ddab7f->leave($__internal_c4e41aefbad86b4bd0f226571e7b5d6c839648bb1802e0b45580672819ddab7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
