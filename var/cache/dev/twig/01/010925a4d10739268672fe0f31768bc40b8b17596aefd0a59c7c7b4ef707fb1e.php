<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1ccae7cfdc573f9deb144802fc19be6874965706a0d2cdac550ed68bd622b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ccae7cfdc573f9deb144802fc19be6874965706a0d2cdac550ed68bd622b80->enter($__internal_c1ccae7cfdc573f9deb144802fc19be6874965706a0d2cdac550ed68bd622b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f1af45a7bc2d8e0f3e305743d6490f75b5cc5170bd779e93b0f5234bed5c5c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1af45a7bc2d8e0f3e305743d6490f75b5cc5170bd779e93b0f5234bed5c5c80->enter($__internal_f1af45a7bc2d8e0f3e305743d6490f75b5cc5170bd779e93b0f5234bed5c5c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1ccae7cfdc573f9deb144802fc19be6874965706a0d2cdac550ed68bd622b80->leave($__internal_c1ccae7cfdc573f9deb144802fc19be6874965706a0d2cdac550ed68bd622b80_prof);

        
        $__internal_f1af45a7bc2d8e0f3e305743d6490f75b5cc5170bd779e93b0f5234bed5c5c80->leave($__internal_f1af45a7bc2d8e0f3e305743d6490f75b5cc5170bd779e93b0f5234bed5c5c80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8f60dea1dbf66ecd5eff3e806a218e65d313da3269f3820aebf5f7e81b8925f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f60dea1dbf66ecd5eff3e806a218e65d313da3269f3820aebf5f7e81b8925f->enter($__internal_a8f60dea1dbf66ecd5eff3e806a218e65d313da3269f3820aebf5f7e81b8925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41eccdb2c3341115a5d84e04fe0dbb243671bbe170672924ba8159cf0f54036a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41eccdb2c3341115a5d84e04fe0dbb243671bbe170672924ba8159cf0f54036a->enter($__internal_41eccdb2c3341115a5d84e04fe0dbb243671bbe170672924ba8159cf0f54036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_41eccdb2c3341115a5d84e04fe0dbb243671bbe170672924ba8159cf0f54036a->leave($__internal_41eccdb2c3341115a5d84e04fe0dbb243671bbe170672924ba8159cf0f54036a_prof);

        
        $__internal_a8f60dea1dbf66ecd5eff3e806a218e65d313da3269f3820aebf5f7e81b8925f->leave($__internal_a8f60dea1dbf66ecd5eff3e806a218e65d313da3269f3820aebf5f7e81b8925f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
