<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_05450941f98bb6dbb7d6ce947b4162f00e75911fd9cf999b04869711d6e0f61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05450941f98bb6dbb7d6ce947b4162f00e75911fd9cf999b04869711d6e0f61f->enter($__internal_05450941f98bb6dbb7d6ce947b4162f00e75911fd9cf999b04869711d6e0f61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_02c46d93451b0aa140037fd4498a6c0ba05b2bd69f03ffc3513ed61445d367cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c46d93451b0aa140037fd4498a6c0ba05b2bd69f03ffc3513ed61445d367cd->enter($__internal_02c46d93451b0aa140037fd4498a6c0ba05b2bd69f03ffc3513ed61445d367cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05450941f98bb6dbb7d6ce947b4162f00e75911fd9cf999b04869711d6e0f61f->leave($__internal_05450941f98bb6dbb7d6ce947b4162f00e75911fd9cf999b04869711d6e0f61f_prof);

        
        $__internal_02c46d93451b0aa140037fd4498a6c0ba05b2bd69f03ffc3513ed61445d367cd->leave($__internal_02c46d93451b0aa140037fd4498a6c0ba05b2bd69f03ffc3513ed61445d367cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b3aacffa0ec02ea8d99649b963955860bb213ec8162cc82575b4eda65248dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3aacffa0ec02ea8d99649b963955860bb213ec8162cc82575b4eda65248dc5->enter($__internal_4b3aacffa0ec02ea8d99649b963955860bb213ec8162cc82575b4eda65248dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_129b95032b0adac6324e183b499672855fd45a05568c9a1cb06c449e1c6220dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129b95032b0adac6324e183b499672855fd45a05568c9a1cb06c449e1c6220dc->enter($__internal_129b95032b0adac6324e183b499672855fd45a05568c9a1cb06c449e1c6220dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_129b95032b0adac6324e183b499672855fd45a05568c9a1cb06c449e1c6220dc->leave($__internal_129b95032b0adac6324e183b499672855fd45a05568c9a1cb06c449e1c6220dc_prof);

        
        $__internal_4b3aacffa0ec02ea8d99649b963955860bb213ec8162cc82575b4eda65248dc5->leave($__internal_4b3aacffa0ec02ea8d99649b963955860bb213ec8162cc82575b4eda65248dc5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
