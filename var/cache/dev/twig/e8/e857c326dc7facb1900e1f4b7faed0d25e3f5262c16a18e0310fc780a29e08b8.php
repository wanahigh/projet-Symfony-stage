<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74007e5c0502782ec9de3fa5899c4665044f49b1cc3b409312178388b4627779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74007e5c0502782ec9de3fa5899c4665044f49b1cc3b409312178388b4627779->enter($__internal_74007e5c0502782ec9de3fa5899c4665044f49b1cc3b409312178388b4627779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_57efcfac69fbdce86dba545a5f8de509fe965ad1917a8d6d1a306672b73d03ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57efcfac69fbdce86dba545a5f8de509fe965ad1917a8d6d1a306672b73d03ef->enter($__internal_57efcfac69fbdce86dba545a5f8de509fe965ad1917a8d6d1a306672b73d03ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74007e5c0502782ec9de3fa5899c4665044f49b1cc3b409312178388b4627779->leave($__internal_74007e5c0502782ec9de3fa5899c4665044f49b1cc3b409312178388b4627779_prof);

        
        $__internal_57efcfac69fbdce86dba545a5f8de509fe965ad1917a8d6d1a306672b73d03ef->leave($__internal_57efcfac69fbdce86dba545a5f8de509fe965ad1917a8d6d1a306672b73d03ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6015885c44a24d63e6f29c41b400fa5a979d7e4b038148ab5bd73b665b86e45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6015885c44a24d63e6f29c41b400fa5a979d7e4b038148ab5bd73b665b86e45c->enter($__internal_6015885c44a24d63e6f29c41b400fa5a979d7e4b038148ab5bd73b665b86e45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa26fbc2c185733e9f7716b073ba05cccc8df910c74d8831b3cc84e6a201f6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa26fbc2c185733e9f7716b073ba05cccc8df910c74d8831b3cc84e6a201f6e5->enter($__internal_aa26fbc2c185733e9f7716b073ba05cccc8df910c74d8831b3cc84e6a201f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa26fbc2c185733e9f7716b073ba05cccc8df910c74d8831b3cc84e6a201f6e5->leave($__internal_aa26fbc2c185733e9f7716b073ba05cccc8df910c74d8831b3cc84e6a201f6e5_prof);

        
        $__internal_6015885c44a24d63e6f29c41b400fa5a979d7e4b038148ab5bd73b665b86e45c->leave($__internal_6015885c44a24d63e6f29c41b400fa5a979d7e4b038148ab5bd73b665b86e45c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff222653c49026f27e530acf899ca5c3e62dca82e2224ee6e2541020d0fabaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff222653c49026f27e530acf899ca5c3e62dca82e2224ee6e2541020d0fabaa4->enter($__internal_ff222653c49026f27e530acf899ca5c3e62dca82e2224ee6e2541020d0fabaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_585e64f6718311e366123f08d43a491d10d6f0bcc7e19eccd44e704185218d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585e64f6718311e366123f08d43a491d10d6f0bcc7e19eccd44e704185218d53->enter($__internal_585e64f6718311e366123f08d43a491d10d6f0bcc7e19eccd44e704185218d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_585e64f6718311e366123f08d43a491d10d6f0bcc7e19eccd44e704185218d53->leave($__internal_585e64f6718311e366123f08d43a491d10d6f0bcc7e19eccd44e704185218d53_prof);

        
        $__internal_ff222653c49026f27e530acf899ca5c3e62dca82e2224ee6e2541020d0fabaa4->leave($__internal_ff222653c49026f27e530acf899ca5c3e62dca82e2224ee6e2541020d0fabaa4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be484977a89768fdb06491f2e54c8897e3b2f9bf2765dc534928e40f3b8fd212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be484977a89768fdb06491f2e54c8897e3b2f9bf2765dc534928e40f3b8fd212->enter($__internal_be484977a89768fdb06491f2e54c8897e3b2f9bf2765dc534928e40f3b8fd212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14f8d47df4e37e04fed4d4b5751ee8e1daef1c8131d488d0759633376dda8aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f8d47df4e37e04fed4d4b5751ee8e1daef1c8131d488d0759633376dda8aca->enter($__internal_14f8d47df4e37e04fed4d4b5751ee8e1daef1c8131d488d0759633376dda8aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_14f8d47df4e37e04fed4d4b5751ee8e1daef1c8131d488d0759633376dda8aca->leave($__internal_14f8d47df4e37e04fed4d4b5751ee8e1daef1c8131d488d0759633376dda8aca_prof);

        
        $__internal_be484977a89768fdb06491f2e54c8897e3b2f9bf2765dc534928e40f3b8fd212->leave($__internal_be484977a89768fdb06491f2e54c8897e3b2f9bf2765dc534928e40f3b8fd212_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
