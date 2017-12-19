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
        $__internal_f74cdbafc884dee087fc453f7cd401ab7b48d9547b3c1971918783351e55ff53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74cdbafc884dee087fc453f7cd401ab7b48d9547b3c1971918783351e55ff53->enter($__internal_f74cdbafc884dee087fc453f7cd401ab7b48d9547b3c1971918783351e55ff53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_433b060af88f319517145186043fe4a0de81c6fbe27329bd39a033bf0164f44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433b060af88f319517145186043fe4a0de81c6fbe27329bd39a033bf0164f44f->enter($__internal_433b060af88f319517145186043fe4a0de81c6fbe27329bd39a033bf0164f44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74cdbafc884dee087fc453f7cd401ab7b48d9547b3c1971918783351e55ff53->leave($__internal_f74cdbafc884dee087fc453f7cd401ab7b48d9547b3c1971918783351e55ff53_prof);

        
        $__internal_433b060af88f319517145186043fe4a0de81c6fbe27329bd39a033bf0164f44f->leave($__internal_433b060af88f319517145186043fe4a0de81c6fbe27329bd39a033bf0164f44f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d3037acd423e92cd761fd6dee4d7d5ed133ee01da85ea235aa0680f153e0b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3037acd423e92cd761fd6dee4d7d5ed133ee01da85ea235aa0680f153e0b1f->enter($__internal_6d3037acd423e92cd761fd6dee4d7d5ed133ee01da85ea235aa0680f153e0b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a17c5f5f65955c04e3a55eb37c8140073c3b9b7a4b3eb7f154f8c570c7942c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17c5f5f65955c04e3a55eb37c8140073c3b9b7a4b3eb7f154f8c570c7942c71->enter($__internal_a17c5f5f65955c04e3a55eb37c8140073c3b9b7a4b3eb7f154f8c570c7942c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a17c5f5f65955c04e3a55eb37c8140073c3b9b7a4b3eb7f154f8c570c7942c71->leave($__internal_a17c5f5f65955c04e3a55eb37c8140073c3b9b7a4b3eb7f154f8c570c7942c71_prof);

        
        $__internal_6d3037acd423e92cd761fd6dee4d7d5ed133ee01da85ea235aa0680f153e0b1f->leave($__internal_6d3037acd423e92cd761fd6dee4d7d5ed133ee01da85ea235aa0680f153e0b1f_prof);

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
