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
        $__internal_e7fd924aa59d5b4262c923fbba3d03d7ad942db18c0ab64349368c18d803d272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fd924aa59d5b4262c923fbba3d03d7ad942db18c0ab64349368c18d803d272->enter($__internal_e7fd924aa59d5b4262c923fbba3d03d7ad942db18c0ab64349368c18d803d272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ef8ef058eab4190f0e98406b53a2c706b79e6d19b2ca27936dd27f6f59c1ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef8ef058eab4190f0e98406b53a2c706b79e6d19b2ca27936dd27f6f59c1ced->enter($__internal_9ef8ef058eab4190f0e98406b53a2c706b79e6d19b2ca27936dd27f6f59c1ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7fd924aa59d5b4262c923fbba3d03d7ad942db18c0ab64349368c18d803d272->leave($__internal_e7fd924aa59d5b4262c923fbba3d03d7ad942db18c0ab64349368c18d803d272_prof);

        
        $__internal_9ef8ef058eab4190f0e98406b53a2c706b79e6d19b2ca27936dd27f6f59c1ced->leave($__internal_9ef8ef058eab4190f0e98406b53a2c706b79e6d19b2ca27936dd27f6f59c1ced_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58e0735ebfee7fb7deb45e770e8066a9d111bbf5024125ce7602ee769309a38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e0735ebfee7fb7deb45e770e8066a9d111bbf5024125ce7602ee769309a38d->enter($__internal_58e0735ebfee7fb7deb45e770e8066a9d111bbf5024125ce7602ee769309a38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4907d327c9adb4a91dc1525c1b1123790b1efa9df8a58b4b6c23761f13d8bdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4907d327c9adb4a91dc1525c1b1123790b1efa9df8a58b4b6c23761f13d8bdbb->enter($__internal_4907d327c9adb4a91dc1525c1b1123790b1efa9df8a58b4b6c23761f13d8bdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4907d327c9adb4a91dc1525c1b1123790b1efa9df8a58b4b6c23761f13d8bdbb->leave($__internal_4907d327c9adb4a91dc1525c1b1123790b1efa9df8a58b4b6c23761f13d8bdbb_prof);

        
        $__internal_58e0735ebfee7fb7deb45e770e8066a9d111bbf5024125ce7602ee769309a38d->leave($__internal_58e0735ebfee7fb7deb45e770e8066a9d111bbf5024125ce7602ee769309a38d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1beb5d755e7661fcba33d61d905c4219a17063c0e8addb6b7410f3687df9e622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1beb5d755e7661fcba33d61d905c4219a17063c0e8addb6b7410f3687df9e622->enter($__internal_1beb5d755e7661fcba33d61d905c4219a17063c0e8addb6b7410f3687df9e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ec51a0dbb3c0ce47e26fbaff20d43e409960eefee5650ac53e81b00869e7a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec51a0dbb3c0ce47e26fbaff20d43e409960eefee5650ac53e81b00869e7a5d->enter($__internal_4ec51a0dbb3c0ce47e26fbaff20d43e409960eefee5650ac53e81b00869e7a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ec51a0dbb3c0ce47e26fbaff20d43e409960eefee5650ac53e81b00869e7a5d->leave($__internal_4ec51a0dbb3c0ce47e26fbaff20d43e409960eefee5650ac53e81b00869e7a5d_prof);

        
        $__internal_1beb5d755e7661fcba33d61d905c4219a17063c0e8addb6b7410f3687df9e622->leave($__internal_1beb5d755e7661fcba33d61d905c4219a17063c0e8addb6b7410f3687df9e622_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04622bd23de114d264f879549c50ab838532319cf3f379d315447dafe3c8db0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04622bd23de114d264f879549c50ab838532319cf3f379d315447dafe3c8db0a->enter($__internal_04622bd23de114d264f879549c50ab838532319cf3f379d315447dafe3c8db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_facf7d6cd6710bff2037cf4effe7b72101849ff803856c4b8121e988ff8e1cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facf7d6cd6710bff2037cf4effe7b72101849ff803856c4b8121e988ff8e1cbd->enter($__internal_facf7d6cd6710bff2037cf4effe7b72101849ff803856c4b8121e988ff8e1cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_facf7d6cd6710bff2037cf4effe7b72101849ff803856c4b8121e988ff8e1cbd->leave($__internal_facf7d6cd6710bff2037cf4effe7b72101849ff803856c4b8121e988ff8e1cbd_prof);

        
        $__internal_04622bd23de114d264f879549c50ab838532319cf3f379d315447dafe3c8db0a->leave($__internal_04622bd23de114d264f879549c50ab838532319cf3f379d315447dafe3c8db0a_prof);

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
