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
        $__internal_22fe9ea241d089ee3e129844cffe2dd86369b4b4afc09df6853a06936314f6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fe9ea241d089ee3e129844cffe2dd86369b4b4afc09df6853a06936314f6e4->enter($__internal_22fe9ea241d089ee3e129844cffe2dd86369b4b4afc09df6853a06936314f6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f87401a109b76257104e0bb85429a44e50f21cae32232d6fe5b7f8a67cb978aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87401a109b76257104e0bb85429a44e50f21cae32232d6fe5b7f8a67cb978aa->enter($__internal_f87401a109b76257104e0bb85429a44e50f21cae32232d6fe5b7f8a67cb978aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22fe9ea241d089ee3e129844cffe2dd86369b4b4afc09df6853a06936314f6e4->leave($__internal_22fe9ea241d089ee3e129844cffe2dd86369b4b4afc09df6853a06936314f6e4_prof);

        
        $__internal_f87401a109b76257104e0bb85429a44e50f21cae32232d6fe5b7f8a67cb978aa->leave($__internal_f87401a109b76257104e0bb85429a44e50f21cae32232d6fe5b7f8a67cb978aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5772d4a44adbe3f5b644ed5883c9c467d1e1fc4a250a5e32a77658c20114542e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5772d4a44adbe3f5b644ed5883c9c467d1e1fc4a250a5e32a77658c20114542e->enter($__internal_5772d4a44adbe3f5b644ed5883c9c467d1e1fc4a250a5e32a77658c20114542e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41e7ebd7e8a83fb635319060ebbab61edcda574e7f6119c20d5031de4f9d167c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e7ebd7e8a83fb635319060ebbab61edcda574e7f6119c20d5031de4f9d167c->enter($__internal_41e7ebd7e8a83fb635319060ebbab61edcda574e7f6119c20d5031de4f9d167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41e7ebd7e8a83fb635319060ebbab61edcda574e7f6119c20d5031de4f9d167c->leave($__internal_41e7ebd7e8a83fb635319060ebbab61edcda574e7f6119c20d5031de4f9d167c_prof);

        
        $__internal_5772d4a44adbe3f5b644ed5883c9c467d1e1fc4a250a5e32a77658c20114542e->leave($__internal_5772d4a44adbe3f5b644ed5883c9c467d1e1fc4a250a5e32a77658c20114542e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_067583908b04297024d4c9f1d684719a3b196cda2a236228b2eeadb4ed3e459e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067583908b04297024d4c9f1d684719a3b196cda2a236228b2eeadb4ed3e459e->enter($__internal_067583908b04297024d4c9f1d684719a3b196cda2a236228b2eeadb4ed3e459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b1d51f16aae269d6767d4e99a16e71f9ba952f6e77b17bf042fbbc1569cb324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1d51f16aae269d6767d4e99a16e71f9ba952f6e77b17bf042fbbc1569cb324->enter($__internal_3b1d51f16aae269d6767d4e99a16e71f9ba952f6e77b17bf042fbbc1569cb324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b1d51f16aae269d6767d4e99a16e71f9ba952f6e77b17bf042fbbc1569cb324->leave($__internal_3b1d51f16aae269d6767d4e99a16e71f9ba952f6e77b17bf042fbbc1569cb324_prof);

        
        $__internal_067583908b04297024d4c9f1d684719a3b196cda2a236228b2eeadb4ed3e459e->leave($__internal_067583908b04297024d4c9f1d684719a3b196cda2a236228b2eeadb4ed3e459e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_395b098cfac4655851d20b5365721fd0cc0425b4ee29e01c6d34e56140aa7b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395b098cfac4655851d20b5365721fd0cc0425b4ee29e01c6d34e56140aa7b91->enter($__internal_395b098cfac4655851d20b5365721fd0cc0425b4ee29e01c6d34e56140aa7b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69b230dc3f36db6d25b04218b5d2fd0a00fb224c7a33d27e9a86d581644a662c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b230dc3f36db6d25b04218b5d2fd0a00fb224c7a33d27e9a86d581644a662c->enter($__internal_69b230dc3f36db6d25b04218b5d2fd0a00fb224c7a33d27e9a86d581644a662c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_69b230dc3f36db6d25b04218b5d2fd0a00fb224c7a33d27e9a86d581644a662c->leave($__internal_69b230dc3f36db6d25b04218b5d2fd0a00fb224c7a33d27e9a86d581644a662c_prof);

        
        $__internal_395b098cfac4655851d20b5365721fd0cc0425b4ee29e01c6d34e56140aa7b91->leave($__internal_395b098cfac4655851d20b5365721fd0cc0425b4ee29e01c6d34e56140aa7b91_prof);

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
