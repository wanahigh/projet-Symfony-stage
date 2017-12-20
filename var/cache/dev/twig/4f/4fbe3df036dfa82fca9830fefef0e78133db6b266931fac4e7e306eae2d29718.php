<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a10d14648a1189aebb292d2a7ae6246880eff71f9a605ef3e4451642a468f08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_416b54d2f6ebb93e2b82abd9e9b04bbf823b7d90dedf39af8f3df94f15821d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416b54d2f6ebb93e2b82abd9e9b04bbf823b7d90dedf39af8f3df94f15821d97->enter($__internal_416b54d2f6ebb93e2b82abd9e9b04bbf823b7d90dedf39af8f3df94f15821d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c35ff7c04e43357a755a2552b2c3717840726cd1962ce0750bd90ee99dd83466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35ff7c04e43357a755a2552b2c3717840726cd1962ce0750bd90ee99dd83466->enter($__internal_c35ff7c04e43357a755a2552b2c3717840726cd1962ce0750bd90ee99dd83466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_416b54d2f6ebb93e2b82abd9e9b04bbf823b7d90dedf39af8f3df94f15821d97->leave($__internal_416b54d2f6ebb93e2b82abd9e9b04bbf823b7d90dedf39af8f3df94f15821d97_prof);

        
        $__internal_c35ff7c04e43357a755a2552b2c3717840726cd1962ce0750bd90ee99dd83466->leave($__internal_c35ff7c04e43357a755a2552b2c3717840726cd1962ce0750bd90ee99dd83466_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_22d8ab6f0415b94dbacb73afbea8849d30238157b127452b0f39538e8fc0c8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d8ab6f0415b94dbacb73afbea8849d30238157b127452b0f39538e8fc0c8f4->enter($__internal_22d8ab6f0415b94dbacb73afbea8849d30238157b127452b0f39538e8fc0c8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a685b7960c384e0d6a4474c930428d3b8c88445fea7c2c32392ca9e79af301e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a685b7960c384e0d6a4474c930428d3b8c88445fea7c2c32392ca9e79af301e6->enter($__internal_a685b7960c384e0d6a4474c930428d3b8c88445fea7c2c32392ca9e79af301e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a685b7960c384e0d6a4474c930428d3b8c88445fea7c2c32392ca9e79af301e6->leave($__internal_a685b7960c384e0d6a4474c930428d3b8c88445fea7c2c32392ca9e79af301e6_prof);

        
        $__internal_22d8ab6f0415b94dbacb73afbea8849d30238157b127452b0f39538e8fc0c8f4->leave($__internal_22d8ab6f0415b94dbacb73afbea8849d30238157b127452b0f39538e8fc0c8f4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02b6720286556674b3d17c92d77ed4c033eae021d1c5debe2fa9ba095d49f043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b6720286556674b3d17c92d77ed4c033eae021d1c5debe2fa9ba095d49f043->enter($__internal_02b6720286556674b3d17c92d77ed4c033eae021d1c5debe2fa9ba095d49f043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_be82a403f90cf5eeca49182b31b96d37377b3da7ac22d07b8dd2d02d62a9ccc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be82a403f90cf5eeca49182b31b96d37377b3da7ac22d07b8dd2d02d62a9ccc7->enter($__internal_be82a403f90cf5eeca49182b31b96d37377b3da7ac22d07b8dd2d02d62a9ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_be82a403f90cf5eeca49182b31b96d37377b3da7ac22d07b8dd2d02d62a9ccc7->leave($__internal_be82a403f90cf5eeca49182b31b96d37377b3da7ac22d07b8dd2d02d62a9ccc7_prof);

        
        $__internal_02b6720286556674b3d17c92d77ed4c033eae021d1c5debe2fa9ba095d49f043->leave($__internal_02b6720286556674b3d17c92d77ed4c033eae021d1c5debe2fa9ba095d49f043_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_db0a1689b94bf0528797f9675d0922c6c83b52966fa98287cb0f67e4b25c47d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a1689b94bf0528797f9675d0922c6c83b52966fa98287cb0f67e4b25c47d9->enter($__internal_db0a1689b94bf0528797f9675d0922c6c83b52966fa98287cb0f67e4b25c47d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_597606f1d997ff3fdb87ddb3a816325d3a5fe3bce4437498e1225844599a7847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597606f1d997ff3fdb87ddb3a816325d3a5fe3bce4437498e1225844599a7847->enter($__internal_597606f1d997ff3fdb87ddb3a816325d3a5fe3bce4437498e1225844599a7847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_597606f1d997ff3fdb87ddb3a816325d3a5fe3bce4437498e1225844599a7847->leave($__internal_597606f1d997ff3fdb87ddb3a816325d3a5fe3bce4437498e1225844599a7847_prof);

        
        $__internal_db0a1689b94bf0528797f9675d0922c6c83b52966fa98287cb0f67e4b25c47d9->leave($__internal_db0a1689b94bf0528797f9675d0922c6c83b52966fa98287cb0f67e4b25c47d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
