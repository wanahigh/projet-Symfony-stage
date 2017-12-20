<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b2f8046f02df92d8a895beafb1e809f4c60a187d20c9a1a62b11c80e8a46182d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ffd2e701e7cbdf6675bce3b91d8327dd54a0f78b2608f8fe89f1f64d775c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ffd2e701e7cbdf6675bce3b91d8327dd54a0f78b2608f8fe89f1f64d775c7b->enter($__internal_59ffd2e701e7cbdf6675bce3b91d8327dd54a0f78b2608f8fe89f1f64d775c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0041a003c6a2011d10ae44380ce051467a16c273277e38587b76ce6b3b82f41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0041a003c6a2011d10ae44380ce051467a16c273277e38587b76ce6b3b82f41b->enter($__internal_0041a003c6a2011d10ae44380ce051467a16c273277e38587b76ce6b3b82f41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ffd2e701e7cbdf6675bce3b91d8327dd54a0f78b2608f8fe89f1f64d775c7b->leave($__internal_59ffd2e701e7cbdf6675bce3b91d8327dd54a0f78b2608f8fe89f1f64d775c7b_prof);

        
        $__internal_0041a003c6a2011d10ae44380ce051467a16c273277e38587b76ce6b3b82f41b->leave($__internal_0041a003c6a2011d10ae44380ce051467a16c273277e38587b76ce6b3b82f41b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9f17ea2a39379321d3cd538930344f2fa3098ac36290a47cd5c282a70361d332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f17ea2a39379321d3cd538930344f2fa3098ac36290a47cd5c282a70361d332->enter($__internal_9f17ea2a39379321d3cd538930344f2fa3098ac36290a47cd5c282a70361d332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6c4a6b2a9076295e17e28c982b2e5eee7b18f861e086ecbbbb7fba15d9c936dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4a6b2a9076295e17e28c982b2e5eee7b18f861e086ecbbbb7fba15d9c936dc->enter($__internal_6c4a6b2a9076295e17e28c982b2e5eee7b18f861e086ecbbbb7fba15d9c936dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6c4a6b2a9076295e17e28c982b2e5eee7b18f861e086ecbbbb7fba15d9c936dc->leave($__internal_6c4a6b2a9076295e17e28c982b2e5eee7b18f861e086ecbbbb7fba15d9c936dc_prof);

        
        $__internal_9f17ea2a39379321d3cd538930344f2fa3098ac36290a47cd5c282a70361d332->leave($__internal_9f17ea2a39379321d3cd538930344f2fa3098ac36290a47cd5c282a70361d332_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29ba85e0df862f75ed648ee8cd8ff39453ef66eef4bc4d41ff05592d56e6ad88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ba85e0df862f75ed648ee8cd8ff39453ef66eef4bc4d41ff05592d56e6ad88->enter($__internal_29ba85e0df862f75ed648ee8cd8ff39453ef66eef4bc4d41ff05592d56e6ad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7caa95f5d689c458d62ab4c6e3555bb1c8dda7dfad579a6d74df229f6682451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7caa95f5d689c458d62ab4c6e3555bb1c8dda7dfad579a6d74df229f6682451->enter($__internal_b7caa95f5d689c458d62ab4c6e3555bb1c8dda7dfad579a6d74df229f6682451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b7caa95f5d689c458d62ab4c6e3555bb1c8dda7dfad579a6d74df229f6682451->leave($__internal_b7caa95f5d689c458d62ab4c6e3555bb1c8dda7dfad579a6d74df229f6682451_prof);

        
        $__internal_29ba85e0df862f75ed648ee8cd8ff39453ef66eef4bc4d41ff05592d56e6ad88->leave($__internal_29ba85e0df862f75ed648ee8cd8ff39453ef66eef4bc4d41ff05592d56e6ad88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
