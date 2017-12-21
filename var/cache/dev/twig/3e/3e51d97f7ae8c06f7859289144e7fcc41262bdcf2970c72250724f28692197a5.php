<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d53e4ea2f75312a00756b47e5df092bd2143608c277ab9337e024ea4393f7878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53e4ea2f75312a00756b47e5df092bd2143608c277ab9337e024ea4393f7878->enter($__internal_d53e4ea2f75312a00756b47e5df092bd2143608c277ab9337e024ea4393f7878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd2c0ecfb0199b93033f89ff687b61c6a3c1d89a875de1aee3543ff9d2b20e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2c0ecfb0199b93033f89ff687b61c6a3c1d89a875de1aee3543ff9d2b20e33->enter($__internal_cd2c0ecfb0199b93033f89ff687b61c6a3c1d89a875de1aee3543ff9d2b20e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53e4ea2f75312a00756b47e5df092bd2143608c277ab9337e024ea4393f7878->leave($__internal_d53e4ea2f75312a00756b47e5df092bd2143608c277ab9337e024ea4393f7878_prof);

        
        $__internal_cd2c0ecfb0199b93033f89ff687b61c6a3c1d89a875de1aee3543ff9d2b20e33->leave($__internal_cd2c0ecfb0199b93033f89ff687b61c6a3c1d89a875de1aee3543ff9d2b20e33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea6278595de136d608b482e3b3fa0139c68fc5c80073da00af59599769df0973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6278595de136d608b482e3b3fa0139c68fc5c80073da00af59599769df0973->enter($__internal_ea6278595de136d608b482e3b3fa0139c68fc5c80073da00af59599769df0973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_85488da5cd566773b9a2810045e44accad77c4c49f223c1b4e1b7306da540c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85488da5cd566773b9a2810045e44accad77c4c49f223c1b4e1b7306da540c8d->enter($__internal_85488da5cd566773b9a2810045e44accad77c4c49f223c1b4e1b7306da540c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85488da5cd566773b9a2810045e44accad77c4c49f223c1b4e1b7306da540c8d->leave($__internal_85488da5cd566773b9a2810045e44accad77c4c49f223c1b4e1b7306da540c8d_prof);

        
        $__internal_ea6278595de136d608b482e3b3fa0139c68fc5c80073da00af59599769df0973->leave($__internal_ea6278595de136d608b482e3b3fa0139c68fc5c80073da00af59599769df0973_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_172bc5822180a0474319769a7688d33fe0088522b95c4a559ff9760b03c2cfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172bc5822180a0474319769a7688d33fe0088522b95c4a559ff9760b03c2cfda->enter($__internal_172bc5822180a0474319769a7688d33fe0088522b95c4a559ff9760b03c2cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e69ae104d5edca6a2265766b8afd090c4be24309bc775e6744433f479ef6568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69ae104d5edca6a2265766b8afd090c4be24309bc775e6744433f479ef6568a->enter($__internal_e69ae104d5edca6a2265766b8afd090c4be24309bc775e6744433f479ef6568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e69ae104d5edca6a2265766b8afd090c4be24309bc775e6744433f479ef6568a->leave($__internal_e69ae104d5edca6a2265766b8afd090c4be24309bc775e6744433f479ef6568a_prof);

        
        $__internal_172bc5822180a0474319769a7688d33fe0088522b95c4a559ff9760b03c2cfda->leave($__internal_172bc5822180a0474319769a7688d33fe0088522b95c4a559ff9760b03c2cfda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4b068b62fce96486b70d461d51d1fe3978f2e9eebbaa558da1101d97cfd17a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b068b62fce96486b70d461d51d1fe3978f2e9eebbaa558da1101d97cfd17a1->enter($__internal_f4b068b62fce96486b70d461d51d1fe3978f2e9eebbaa558da1101d97cfd17a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fac10d2d23d05e432ec9c681be6c8bd93d61d3da71682279ddf1e4b6754d638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fac10d2d23d05e432ec9c681be6c8bd93d61d3da71682279ddf1e4b6754d638->enter($__internal_9fac10d2d23d05e432ec9c681be6c8bd93d61d3da71682279ddf1e4b6754d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9fac10d2d23d05e432ec9c681be6c8bd93d61d3da71682279ddf1e4b6754d638->leave($__internal_9fac10d2d23d05e432ec9c681be6c8bd93d61d3da71682279ddf1e4b6754d638_prof);

        
        $__internal_f4b068b62fce96486b70d461d51d1fe3978f2e9eebbaa558da1101d97cfd17a1->leave($__internal_f4b068b62fce96486b70d461d51d1fe3978f2e9eebbaa558da1101d97cfd17a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
