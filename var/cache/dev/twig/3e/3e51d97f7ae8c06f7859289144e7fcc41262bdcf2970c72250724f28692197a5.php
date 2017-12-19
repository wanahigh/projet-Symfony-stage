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
        $__internal_4dc8b38c3585e5199a2eade10486484ab07a2e9974d9c6a60c15961591bb0bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc8b38c3585e5199a2eade10486484ab07a2e9974d9c6a60c15961591bb0bd2->enter($__internal_4dc8b38c3585e5199a2eade10486484ab07a2e9974d9c6a60c15961591bb0bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2b83ed4da66e23ebd5b31c72fee4e417fd858b754cab84d8c35438bd14b22244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b83ed4da66e23ebd5b31c72fee4e417fd858b754cab84d8c35438bd14b22244->enter($__internal_2b83ed4da66e23ebd5b31c72fee4e417fd858b754cab84d8c35438bd14b22244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc8b38c3585e5199a2eade10486484ab07a2e9974d9c6a60c15961591bb0bd2->leave($__internal_4dc8b38c3585e5199a2eade10486484ab07a2e9974d9c6a60c15961591bb0bd2_prof);

        
        $__internal_2b83ed4da66e23ebd5b31c72fee4e417fd858b754cab84d8c35438bd14b22244->leave($__internal_2b83ed4da66e23ebd5b31c72fee4e417fd858b754cab84d8c35438bd14b22244_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97a8a17dab3251f321031b0954e0186c8c9a16b3d15fd589736aa7af6e26469c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a8a17dab3251f321031b0954e0186c8c9a16b3d15fd589736aa7af6e26469c->enter($__internal_97a8a17dab3251f321031b0954e0186c8c9a16b3d15fd589736aa7af6e26469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0dd23c5bc7172b6dd39914d08d25020125c1b15765c5caca7d2330ecda3e5cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd23c5bc7172b6dd39914d08d25020125c1b15765c5caca7d2330ecda3e5cdd->enter($__internal_0dd23c5bc7172b6dd39914d08d25020125c1b15765c5caca7d2330ecda3e5cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0dd23c5bc7172b6dd39914d08d25020125c1b15765c5caca7d2330ecda3e5cdd->leave($__internal_0dd23c5bc7172b6dd39914d08d25020125c1b15765c5caca7d2330ecda3e5cdd_prof);

        
        $__internal_97a8a17dab3251f321031b0954e0186c8c9a16b3d15fd589736aa7af6e26469c->leave($__internal_97a8a17dab3251f321031b0954e0186c8c9a16b3d15fd589736aa7af6e26469c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4a1f6b7304450265eb605d4908903aa493ab457d22ddf7a65f69cab8fdbe7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a1f6b7304450265eb605d4908903aa493ab457d22ddf7a65f69cab8fdbe7b2->enter($__internal_d4a1f6b7304450265eb605d4908903aa493ab457d22ddf7a65f69cab8fdbe7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a78086db1532392f5f5f95cecc3c7a9ff62ab9ff8426b36df077cf4bada467cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78086db1532392f5f5f95cecc3c7a9ff62ab9ff8426b36df077cf4bada467cf->enter($__internal_a78086db1532392f5f5f95cecc3c7a9ff62ab9ff8426b36df077cf4bada467cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a78086db1532392f5f5f95cecc3c7a9ff62ab9ff8426b36df077cf4bada467cf->leave($__internal_a78086db1532392f5f5f95cecc3c7a9ff62ab9ff8426b36df077cf4bada467cf_prof);

        
        $__internal_d4a1f6b7304450265eb605d4908903aa493ab457d22ddf7a65f69cab8fdbe7b2->leave($__internal_d4a1f6b7304450265eb605d4908903aa493ab457d22ddf7a65f69cab8fdbe7b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4264a5bb6089e6ba99d1618877fe4577ef6201afdffa9b2636d138fbd8f3b84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4264a5bb6089e6ba99d1618877fe4577ef6201afdffa9b2636d138fbd8f3b84b->enter($__internal_4264a5bb6089e6ba99d1618877fe4577ef6201afdffa9b2636d138fbd8f3b84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a147de039918496bfe1f72d2de64b31da56eca8795527bdf89afbb6fb743b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a147de039918496bfe1f72d2de64b31da56eca8795527bdf89afbb6fb743b6d->enter($__internal_2a147de039918496bfe1f72d2de64b31da56eca8795527bdf89afbb6fb743b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2a147de039918496bfe1f72d2de64b31da56eca8795527bdf89afbb6fb743b6d->leave($__internal_2a147de039918496bfe1f72d2de64b31da56eca8795527bdf89afbb6fb743b6d_prof);

        
        $__internal_4264a5bb6089e6ba99d1618877fe4577ef6201afdffa9b2636d138fbd8f3b84b->leave($__internal_4264a5bb6089e6ba99d1618877fe4577ef6201afdffa9b2636d138fbd8f3b84b_prof);

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
