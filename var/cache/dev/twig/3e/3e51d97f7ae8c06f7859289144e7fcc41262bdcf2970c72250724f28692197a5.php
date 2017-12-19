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
        $__internal_876a423347dc53eb8be002528acad5c7973bcb906c027224266c169ca8388ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876a423347dc53eb8be002528acad5c7973bcb906c027224266c169ca8388ce6->enter($__internal_876a423347dc53eb8be002528acad5c7973bcb906c027224266c169ca8388ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_31be5a9ad245d5a7ff8d778b8a2f4a48c21ffb96a93b7926e9cbb2dd4449f973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31be5a9ad245d5a7ff8d778b8a2f4a48c21ffb96a93b7926e9cbb2dd4449f973->enter($__internal_31be5a9ad245d5a7ff8d778b8a2f4a48c21ffb96a93b7926e9cbb2dd4449f973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876a423347dc53eb8be002528acad5c7973bcb906c027224266c169ca8388ce6->leave($__internal_876a423347dc53eb8be002528acad5c7973bcb906c027224266c169ca8388ce6_prof);

        
        $__internal_31be5a9ad245d5a7ff8d778b8a2f4a48c21ffb96a93b7926e9cbb2dd4449f973->leave($__internal_31be5a9ad245d5a7ff8d778b8a2f4a48c21ffb96a93b7926e9cbb2dd4449f973_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b11bf030c85270ffec46cf175ba11d960f3520019ca884bb72a03b157b0f90d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11bf030c85270ffec46cf175ba11d960f3520019ca884bb72a03b157b0f90d3->enter($__internal_b11bf030c85270ffec46cf175ba11d960f3520019ca884bb72a03b157b0f90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba5b844ebb6f2c70fc5518fe4448f807472a5b6bb8430fa7f7c91041656c91fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5b844ebb6f2c70fc5518fe4448f807472a5b6bb8430fa7f7c91041656c91fb->enter($__internal_ba5b844ebb6f2c70fc5518fe4448f807472a5b6bb8430fa7f7c91041656c91fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba5b844ebb6f2c70fc5518fe4448f807472a5b6bb8430fa7f7c91041656c91fb->leave($__internal_ba5b844ebb6f2c70fc5518fe4448f807472a5b6bb8430fa7f7c91041656c91fb_prof);

        
        $__internal_b11bf030c85270ffec46cf175ba11d960f3520019ca884bb72a03b157b0f90d3->leave($__internal_b11bf030c85270ffec46cf175ba11d960f3520019ca884bb72a03b157b0f90d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f3159a0b7392e073da193dc0d17952ad598d24bc3bdc1ff15bbd73b60666118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3159a0b7392e073da193dc0d17952ad598d24bc3bdc1ff15bbd73b60666118->enter($__internal_6f3159a0b7392e073da193dc0d17952ad598d24bc3bdc1ff15bbd73b60666118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b13dadd2a100c51876f3ecbdac1218604e4a62b4215f6b546bdb43ed98b87ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13dadd2a100c51876f3ecbdac1218604e4a62b4215f6b546bdb43ed98b87ef4->enter($__internal_b13dadd2a100c51876f3ecbdac1218604e4a62b4215f6b546bdb43ed98b87ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b13dadd2a100c51876f3ecbdac1218604e4a62b4215f6b546bdb43ed98b87ef4->leave($__internal_b13dadd2a100c51876f3ecbdac1218604e4a62b4215f6b546bdb43ed98b87ef4_prof);

        
        $__internal_6f3159a0b7392e073da193dc0d17952ad598d24bc3bdc1ff15bbd73b60666118->leave($__internal_6f3159a0b7392e073da193dc0d17952ad598d24bc3bdc1ff15bbd73b60666118_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c338b57f78f7fd1fd6706f21c0dd03ab3b1d55582e2007c916f4b779cd4485b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c338b57f78f7fd1fd6706f21c0dd03ab3b1d55582e2007c916f4b779cd4485b->enter($__internal_1c338b57f78f7fd1fd6706f21c0dd03ab3b1d55582e2007c916f4b779cd4485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72139f44fd891864b262a076aae1b971f2a5fb043c24bb14248294d541576471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72139f44fd891864b262a076aae1b971f2a5fb043c24bb14248294d541576471->enter($__internal_72139f44fd891864b262a076aae1b971f2a5fb043c24bb14248294d541576471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_72139f44fd891864b262a076aae1b971f2a5fb043c24bb14248294d541576471->leave($__internal_72139f44fd891864b262a076aae1b971f2a5fb043c24bb14248294d541576471_prof);

        
        $__internal_1c338b57f78f7fd1fd6706f21c0dd03ab3b1d55582e2007c916f4b779cd4485b->leave($__internal_1c338b57f78f7fd1fd6706f21c0dd03ab3b1d55582e2007c916f4b779cd4485b_prof);

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
