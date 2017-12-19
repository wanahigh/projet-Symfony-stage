<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_42121de5013618ac4288a4f506fd0959801e4833d3ad79d0a95ece3577ea66c9 extends Twig_Template
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
        $__internal_4c31bc7b57d3e0b0ba18bcd543b9a9dad614fc2e4c0aa51117cf078d0a290a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c31bc7b57d3e0b0ba18bcd543b9a9dad614fc2e4c0aa51117cf078d0a290a2e->enter($__internal_4c31bc7b57d3e0b0ba18bcd543b9a9dad614fc2e4c0aa51117cf078d0a290a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ba4679e0a81819536726345db96c07519645252bc1ec44c4efa429b94c7dcb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4679e0a81819536726345db96c07519645252bc1ec44c4efa429b94c7dcb7d->enter($__internal_ba4679e0a81819536726345db96c07519645252bc1ec44c4efa429b94c7dcb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_4c31bc7b57d3e0b0ba18bcd543b9a9dad614fc2e4c0aa51117cf078d0a290a2e->leave($__internal_4c31bc7b57d3e0b0ba18bcd543b9a9dad614fc2e4c0aa51117cf078d0a290a2e_prof);

        
        $__internal_ba4679e0a81819536726345db96c07519645252bc1ec44c4efa429b94c7dcb7d->leave($__internal_ba4679e0a81819536726345db96c07519645252bc1ec44c4efa429b94c7dcb7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
