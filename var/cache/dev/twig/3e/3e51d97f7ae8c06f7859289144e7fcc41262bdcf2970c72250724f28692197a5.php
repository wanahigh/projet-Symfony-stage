<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_66d4e9abe3b5547d6f2a8bb5994e1ed897becda10c10363e09e590b2a16607bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d4e9abe3b5547d6f2a8bb5994e1ed897becda10c10363e09e590b2a16607bd->enter($__internal_66d4e9abe3b5547d6f2a8bb5994e1ed897becda10c10363e09e590b2a16607bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9b3714463e55c626eee86274e29c38e321f8c880d9adc9bbbf8fe3b86b872962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3714463e55c626eee86274e29c38e321f8c880d9adc9bbbf8fe3b86b872962->enter($__internal_9b3714463e55c626eee86274e29c38e321f8c880d9adc9bbbf8fe3b86b872962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d4e9abe3b5547d6f2a8bb5994e1ed897becda10c10363e09e590b2a16607bd->leave($__internal_66d4e9abe3b5547d6f2a8bb5994e1ed897becda10c10363e09e590b2a16607bd_prof);

        
        $__internal_9b3714463e55c626eee86274e29c38e321f8c880d9adc9bbbf8fe3b86b872962->leave($__internal_9b3714463e55c626eee86274e29c38e321f8c880d9adc9bbbf8fe3b86b872962_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d4f8d7bc7ef48fbdd312579b1772e9ba11dfbfdf2ea35ac4e4676759e1635d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d4f8d7bc7ef48fbdd312579b1772e9ba11dfbfdf2ea35ac4e4676759e1635d->enter($__internal_a7d4f8d7bc7ef48fbdd312579b1772e9ba11dfbfdf2ea35ac4e4676759e1635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5200a46b09554bbcae4350b70f1753e80312158514662e7cfcbed118d8ebb1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5200a46b09554bbcae4350b70f1753e80312158514662e7cfcbed118d8ebb1cb->enter($__internal_5200a46b09554bbcae4350b70f1753e80312158514662e7cfcbed118d8ebb1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5200a46b09554bbcae4350b70f1753e80312158514662e7cfcbed118d8ebb1cb->leave($__internal_5200a46b09554bbcae4350b70f1753e80312158514662e7cfcbed118d8ebb1cb_prof);

        
        $__internal_a7d4f8d7bc7ef48fbdd312579b1772e9ba11dfbfdf2ea35ac4e4676759e1635d->leave($__internal_a7d4f8d7bc7ef48fbdd312579b1772e9ba11dfbfdf2ea35ac4e4676759e1635d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af95bb8902046b490aa6f1fcab8786d47a991a263f59beb8f2d9e7a18a1abb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af95bb8902046b490aa6f1fcab8786d47a991a263f59beb8f2d9e7a18a1abb86->enter($__internal_af95bb8902046b490aa6f1fcab8786d47a991a263f59beb8f2d9e7a18a1abb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc1eb9bca1e5b1ab06da5586f606eed53d274f2c65e9b482d6999598fe595163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1eb9bca1e5b1ab06da5586f606eed53d274f2c65e9b482d6999598fe595163->enter($__internal_bc1eb9bca1e5b1ab06da5586f606eed53d274f2c65e9b482d6999598fe595163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc1eb9bca1e5b1ab06da5586f606eed53d274f2c65e9b482d6999598fe595163->leave($__internal_bc1eb9bca1e5b1ab06da5586f606eed53d274f2c65e9b482d6999598fe595163_prof);

        
        $__internal_af95bb8902046b490aa6f1fcab8786d47a991a263f59beb8f2d9e7a18a1abb86->leave($__internal_af95bb8902046b490aa6f1fcab8786d47a991a263f59beb8f2d9e7a18a1abb86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07ddd1b861124a351ef6ed4bb7b837b2a905214b377b0f4292e959e45c7fda47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ddd1b861124a351ef6ed4bb7b837b2a905214b377b0f4292e959e45c7fda47->enter($__internal_07ddd1b861124a351ef6ed4bb7b837b2a905214b377b0f4292e959e45c7fda47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e0875d18f749000dc440091692cf38de7f7f4485c41d1767a81cf887b78a7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0875d18f749000dc440091692cf38de7f7f4485c41d1767a81cf887b78a7e6->enter($__internal_1e0875d18f749000dc440091692cf38de7f7f4485c41d1767a81cf887b78a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1e0875d18f749000dc440091692cf38de7f7f4485c41d1767a81cf887b78a7e6->leave($__internal_1e0875d18f749000dc440091692cf38de7f7f4485c41d1767a81cf887b78a7e6_prof);

        
        $__internal_07ddd1b861124a351ef6ed4bb7b837b2a905214b377b0f4292e959e45c7fda47->leave($__internal_07ddd1b861124a351ef6ed4bb7b837b2a905214b377b0f4292e959e45c7fda47_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
