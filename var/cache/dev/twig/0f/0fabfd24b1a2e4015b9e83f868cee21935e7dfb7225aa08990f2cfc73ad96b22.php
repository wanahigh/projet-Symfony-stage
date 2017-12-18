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
        $__internal_dd9796a7e7aba7ef541607fd5358ba6ce36ad4a748c3c2683ddc94b897881b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9796a7e7aba7ef541607fd5358ba6ce36ad4a748c3c2683ddc94b897881b2d->enter($__internal_dd9796a7e7aba7ef541607fd5358ba6ce36ad4a748c3c2683ddc94b897881b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5fd34165f59ed109f2ff5167012b45b37f092630e4f1f27e74471046e9335288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd34165f59ed109f2ff5167012b45b37f092630e4f1f27e74471046e9335288->enter($__internal_5fd34165f59ed109f2ff5167012b45b37f092630e4f1f27e74471046e9335288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9796a7e7aba7ef541607fd5358ba6ce36ad4a748c3c2683ddc94b897881b2d->leave($__internal_dd9796a7e7aba7ef541607fd5358ba6ce36ad4a748c3c2683ddc94b897881b2d_prof);

        
        $__internal_5fd34165f59ed109f2ff5167012b45b37f092630e4f1f27e74471046e9335288->leave($__internal_5fd34165f59ed109f2ff5167012b45b37f092630e4f1f27e74471046e9335288_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8d6477c0d060f18918f810d105288c0a7f89d5644f02b3a3c35fa8cc8638fafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6477c0d060f18918f810d105288c0a7f89d5644f02b3a3c35fa8cc8638fafb->enter($__internal_8d6477c0d060f18918f810d105288c0a7f89d5644f02b3a3c35fa8cc8638fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_062f810958d541408509f910bed710c40fcb16ec15a7246707f12cd98bedc131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062f810958d541408509f910bed710c40fcb16ec15a7246707f12cd98bedc131->enter($__internal_062f810958d541408509f910bed710c40fcb16ec15a7246707f12cd98bedc131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_062f810958d541408509f910bed710c40fcb16ec15a7246707f12cd98bedc131->leave($__internal_062f810958d541408509f910bed710c40fcb16ec15a7246707f12cd98bedc131_prof);

        
        $__internal_8d6477c0d060f18918f810d105288c0a7f89d5644f02b3a3c35fa8cc8638fafb->leave($__internal_8d6477c0d060f18918f810d105288c0a7f89d5644f02b3a3c35fa8cc8638fafb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1921cacec555ad4942de2ecca311f9d6340e3152e340cdd53e423cd2f05873af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1921cacec555ad4942de2ecca311f9d6340e3152e340cdd53e423cd2f05873af->enter($__internal_1921cacec555ad4942de2ecca311f9d6340e3152e340cdd53e423cd2f05873af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f51fce06229a8642220f78fa83f5bbb0330a3d1a5b7b55e43ca32f86a16958d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f51fce06229a8642220f78fa83f5bbb0330a3d1a5b7b55e43ca32f86a16958d->enter($__internal_8f51fce06229a8642220f78fa83f5bbb0330a3d1a5b7b55e43ca32f86a16958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8f51fce06229a8642220f78fa83f5bbb0330a3d1a5b7b55e43ca32f86a16958d->leave($__internal_8f51fce06229a8642220f78fa83f5bbb0330a3d1a5b7b55e43ca32f86a16958d_prof);

        
        $__internal_1921cacec555ad4942de2ecca311f9d6340e3152e340cdd53e423cd2f05873af->leave($__internal_1921cacec555ad4942de2ecca311f9d6340e3152e340cdd53e423cd2f05873af_prof);

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
