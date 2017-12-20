<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b31824702f0fbc912e4c3bf7b83737f766085d644d27b86ae447a5570de63b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b31824702f0fbc912e4c3bf7b83737f766085d644d27b86ae447a5570de63b6->enter($__internal_3b31824702f0fbc912e4c3bf7b83737f766085d644d27b86ae447a5570de63b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8bc4be5c95e9d5a9f407703090223a73c572b286c27d7313b77b43e0d7bef3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc4be5c95e9d5a9f407703090223a73c572b286c27d7313b77b43e0d7bef3a0->enter($__internal_8bc4be5c95e9d5a9f407703090223a73c572b286c27d7313b77b43e0d7bef3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b31824702f0fbc912e4c3bf7b83737f766085d644d27b86ae447a5570de63b6->leave($__internal_3b31824702f0fbc912e4c3bf7b83737f766085d644d27b86ae447a5570de63b6_prof);

        
        $__internal_8bc4be5c95e9d5a9f407703090223a73c572b286c27d7313b77b43e0d7bef3a0->leave($__internal_8bc4be5c95e9d5a9f407703090223a73c572b286c27d7313b77b43e0d7bef3a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2be4012ee8bdbcea1c2553713ef0f79d0ff00174970d7dc7da99bb4185784f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be4012ee8bdbcea1c2553713ef0f79d0ff00174970d7dc7da99bb4185784f45->enter($__internal_2be4012ee8bdbcea1c2553713ef0f79d0ff00174970d7dc7da99bb4185784f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82ad3ced5a20bab7bf4dd98d6115c5fca73dc9367571c156f37c6fc3f9eb0f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ad3ced5a20bab7bf4dd98d6115c5fca73dc9367571c156f37c6fc3f9eb0f2a->enter($__internal_82ad3ced5a20bab7bf4dd98d6115c5fca73dc9367571c156f37c6fc3f9eb0f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_82ad3ced5a20bab7bf4dd98d6115c5fca73dc9367571c156f37c6fc3f9eb0f2a->leave($__internal_82ad3ced5a20bab7bf4dd98d6115c5fca73dc9367571c156f37c6fc3f9eb0f2a_prof);

        
        $__internal_2be4012ee8bdbcea1c2553713ef0f79d0ff00174970d7dc7da99bb4185784f45->leave($__internal_2be4012ee8bdbcea1c2553713ef0f79d0ff00174970d7dc7da99bb4185784f45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a64408e259d68c66061c50b52dde2c91874c366c66be663bda5a63d89a30f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a64408e259d68c66061c50b52dde2c91874c366c66be663bda5a63d89a30f7e->enter($__internal_5a64408e259d68c66061c50b52dde2c91874c366c66be663bda5a63d89a30f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_536cb030b4299ad76b2085432eea83125d1feb2a8be4c2913975a69880771788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536cb030b4299ad76b2085432eea83125d1feb2a8be4c2913975a69880771788->enter($__internal_536cb030b4299ad76b2085432eea83125d1feb2a8be4c2913975a69880771788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_536cb030b4299ad76b2085432eea83125d1feb2a8be4c2913975a69880771788->leave($__internal_536cb030b4299ad76b2085432eea83125d1feb2a8be4c2913975a69880771788_prof);

        
        $__internal_5a64408e259d68c66061c50b52dde2c91874c366c66be663bda5a63d89a30f7e->leave($__internal_5a64408e259d68c66061c50b52dde2c91874c366c66be663bda5a63d89a30f7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
