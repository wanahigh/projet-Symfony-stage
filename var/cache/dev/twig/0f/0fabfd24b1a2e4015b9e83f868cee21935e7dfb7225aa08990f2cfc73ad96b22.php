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
        $__internal_0b97e6e48e92941d17a2bf0888ff4707135be6441cf81fc6091e72f97ee04e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b97e6e48e92941d17a2bf0888ff4707135be6441cf81fc6091e72f97ee04e1d->enter($__internal_0b97e6e48e92941d17a2bf0888ff4707135be6441cf81fc6091e72f97ee04e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_83cb98cb6a381d7065548b98099741ca06f0b3ab8fd19ca6e59dd672cef47f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cb98cb6a381d7065548b98099741ca06f0b3ab8fd19ca6e59dd672cef47f19->enter($__internal_83cb98cb6a381d7065548b98099741ca06f0b3ab8fd19ca6e59dd672cef47f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b97e6e48e92941d17a2bf0888ff4707135be6441cf81fc6091e72f97ee04e1d->leave($__internal_0b97e6e48e92941d17a2bf0888ff4707135be6441cf81fc6091e72f97ee04e1d_prof);

        
        $__internal_83cb98cb6a381d7065548b98099741ca06f0b3ab8fd19ca6e59dd672cef47f19->leave($__internal_83cb98cb6a381d7065548b98099741ca06f0b3ab8fd19ca6e59dd672cef47f19_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7db9900d0dfa680bb02d87bbf42b521ca6bc05bd2fa81e1f20a2654ee2ad45b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db9900d0dfa680bb02d87bbf42b521ca6bc05bd2fa81e1f20a2654ee2ad45b2->enter($__internal_7db9900d0dfa680bb02d87bbf42b521ca6bc05bd2fa81e1f20a2654ee2ad45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cf39185f455db32a1b364996ca83d8c550ced34461de393ef2551758ad2591ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf39185f455db32a1b364996ca83d8c550ced34461de393ef2551758ad2591ce->enter($__internal_cf39185f455db32a1b364996ca83d8c550ced34461de393ef2551758ad2591ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cf39185f455db32a1b364996ca83d8c550ced34461de393ef2551758ad2591ce->leave($__internal_cf39185f455db32a1b364996ca83d8c550ced34461de393ef2551758ad2591ce_prof);

        
        $__internal_7db9900d0dfa680bb02d87bbf42b521ca6bc05bd2fa81e1f20a2654ee2ad45b2->leave($__internal_7db9900d0dfa680bb02d87bbf42b521ca6bc05bd2fa81e1f20a2654ee2ad45b2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d5579f07fb3f40318c9d9bf87bf7a443a866124cfe025e16349a9dd17416a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5579f07fb3f40318c9d9bf87bf7a443a866124cfe025e16349a9dd17416a36->enter($__internal_5d5579f07fb3f40318c9d9bf87bf7a443a866124cfe025e16349a9dd17416a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25e1723204c23a071b61f20b52209aa8932c214bf5a032850eee4bb4da4f9d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e1723204c23a071b61f20b52209aa8932c214bf5a032850eee4bb4da4f9d1b->enter($__internal_25e1723204c23a071b61f20b52209aa8932c214bf5a032850eee4bb4da4f9d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_25e1723204c23a071b61f20b52209aa8932c214bf5a032850eee4bb4da4f9d1b->leave($__internal_25e1723204c23a071b61f20b52209aa8932c214bf5a032850eee4bb4da4f9d1b_prof);

        
        $__internal_5d5579f07fb3f40318c9d9bf87bf7a443a866124cfe025e16349a9dd17416a36->leave($__internal_5d5579f07fb3f40318c9d9bf87bf7a443a866124cfe025e16349a9dd17416a36_prof);

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
