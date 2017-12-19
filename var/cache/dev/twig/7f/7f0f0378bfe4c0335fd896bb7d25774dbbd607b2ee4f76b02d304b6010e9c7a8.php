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
        $__internal_030dea7eecd05b9eff40e7ab7dbd6c72552d2eef430bc9f57cd356ffba74918c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030dea7eecd05b9eff40e7ab7dbd6c72552d2eef430bc9f57cd356ffba74918c->enter($__internal_030dea7eecd05b9eff40e7ab7dbd6c72552d2eef430bc9f57cd356ffba74918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c4078227b2fcbe61a9a1004c685d22d73558538d148b3e5dedbffd208d7e33ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4078227b2fcbe61a9a1004c685d22d73558538d148b3e5dedbffd208d7e33ab->enter($__internal_c4078227b2fcbe61a9a1004c685d22d73558538d148b3e5dedbffd208d7e33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_030dea7eecd05b9eff40e7ab7dbd6c72552d2eef430bc9f57cd356ffba74918c->leave($__internal_030dea7eecd05b9eff40e7ab7dbd6c72552d2eef430bc9f57cd356ffba74918c_prof);

        
        $__internal_c4078227b2fcbe61a9a1004c685d22d73558538d148b3e5dedbffd208d7e33ab->leave($__internal_c4078227b2fcbe61a9a1004c685d22d73558538d148b3e5dedbffd208d7e33ab_prof);

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
