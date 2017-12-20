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
        $__internal_ce8297acc4bbd5877bf0aec7fd2b80de9d58ee9471d578f3e50c695ef3d2e0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8297acc4bbd5877bf0aec7fd2b80de9d58ee9471d578f3e50c695ef3d2e0f0->enter($__internal_ce8297acc4bbd5877bf0aec7fd2b80de9d58ee9471d578f3e50c695ef3d2e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_454e3fb6ba16353291b33d927a2f3a1a1d4def12076ce1fb0ededcbc1baf3a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454e3fb6ba16353291b33d927a2f3a1a1d4def12076ce1fb0ededcbc1baf3a55->enter($__internal_454e3fb6ba16353291b33d927a2f3a1a1d4def12076ce1fb0ededcbc1baf3a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8297acc4bbd5877bf0aec7fd2b80de9d58ee9471d578f3e50c695ef3d2e0f0->leave($__internal_ce8297acc4bbd5877bf0aec7fd2b80de9d58ee9471d578f3e50c695ef3d2e0f0_prof);

        
        $__internal_454e3fb6ba16353291b33d927a2f3a1a1d4def12076ce1fb0ededcbc1baf3a55->leave($__internal_454e3fb6ba16353291b33d927a2f3a1a1d4def12076ce1fb0ededcbc1baf3a55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0c98e9da5fdf929c438ecac890cc3414cdc76a7fb1ea7a8fb0435ebd987ea39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c98e9da5fdf929c438ecac890cc3414cdc76a7fb1ea7a8fb0435ebd987ea39->enter($__internal_e0c98e9da5fdf929c438ecac890cc3414cdc76a7fb1ea7a8fb0435ebd987ea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_334746b46528cbe3003c761ec99316c3b22018155597b9f3659d995ee50537de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334746b46528cbe3003c761ec99316c3b22018155597b9f3659d995ee50537de->enter($__internal_334746b46528cbe3003c761ec99316c3b22018155597b9f3659d995ee50537de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_334746b46528cbe3003c761ec99316c3b22018155597b9f3659d995ee50537de->leave($__internal_334746b46528cbe3003c761ec99316c3b22018155597b9f3659d995ee50537de_prof);

        
        $__internal_e0c98e9da5fdf929c438ecac890cc3414cdc76a7fb1ea7a8fb0435ebd987ea39->leave($__internal_e0c98e9da5fdf929c438ecac890cc3414cdc76a7fb1ea7a8fb0435ebd987ea39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b7e84396ab34e0876782675e4904a388e2a5fdd0d83b5750ed0686436b018d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7e84396ab34e0876782675e4904a388e2a5fdd0d83b5750ed0686436b018d6->enter($__internal_0b7e84396ab34e0876782675e4904a388e2a5fdd0d83b5750ed0686436b018d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3878af70697b606fd28d636a7fbb5e40e7c1394e3e4336fdb48563f7880d611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3878af70697b606fd28d636a7fbb5e40e7c1394e3e4336fdb48563f7880d611->enter($__internal_e3878af70697b606fd28d636a7fbb5e40e7c1394e3e4336fdb48563f7880d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3878af70697b606fd28d636a7fbb5e40e7c1394e3e4336fdb48563f7880d611->leave($__internal_e3878af70697b606fd28d636a7fbb5e40e7c1394e3e4336fdb48563f7880d611_prof);

        
        $__internal_0b7e84396ab34e0876782675e4904a388e2a5fdd0d83b5750ed0686436b018d6->leave($__internal_0b7e84396ab34e0876782675e4904a388e2a5fdd0d83b5750ed0686436b018d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b09ec91d92887e7cd2e8f2e6d1f884e39f42a8b322209f49f99b5264858f5475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09ec91d92887e7cd2e8f2e6d1f884e39f42a8b322209f49f99b5264858f5475->enter($__internal_b09ec91d92887e7cd2e8f2e6d1f884e39f42a8b322209f49f99b5264858f5475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_baf0948b6926d7964e21616da6eeb35f292f36d16a1a25689b7914c8c85280ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf0948b6926d7964e21616da6eeb35f292f36d16a1a25689b7914c8c85280ed->enter($__internal_baf0948b6926d7964e21616da6eeb35f292f36d16a1a25689b7914c8c85280ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_baf0948b6926d7964e21616da6eeb35f292f36d16a1a25689b7914c8c85280ed->leave($__internal_baf0948b6926d7964e21616da6eeb35f292f36d16a1a25689b7914c8c85280ed_prof);

        
        $__internal_b09ec91d92887e7cd2e8f2e6d1f884e39f42a8b322209f49f99b5264858f5475->leave($__internal_b09ec91d92887e7cd2e8f2e6d1f884e39f42a8b322209f49f99b5264858f5475_prof);

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
