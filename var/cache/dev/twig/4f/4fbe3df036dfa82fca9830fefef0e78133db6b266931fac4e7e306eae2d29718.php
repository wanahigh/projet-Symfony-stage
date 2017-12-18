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
        $__internal_846c212a46d76b861b94c3eebcbcc94d165bd528493f0c5f19d8dd3b60dc1982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846c212a46d76b861b94c3eebcbcc94d165bd528493f0c5f19d8dd3b60dc1982->enter($__internal_846c212a46d76b861b94c3eebcbcc94d165bd528493f0c5f19d8dd3b60dc1982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_a9ee057a3a8917e525b56c0be58296cc4bff8c29c0fe04016e19b966acbb3e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ee057a3a8917e525b56c0be58296cc4bff8c29c0fe04016e19b966acbb3e70->enter($__internal_a9ee057a3a8917e525b56c0be58296cc4bff8c29c0fe04016e19b966acbb3e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_846c212a46d76b861b94c3eebcbcc94d165bd528493f0c5f19d8dd3b60dc1982->leave($__internal_846c212a46d76b861b94c3eebcbcc94d165bd528493f0c5f19d8dd3b60dc1982_prof);

        
        $__internal_a9ee057a3a8917e525b56c0be58296cc4bff8c29c0fe04016e19b966acbb3e70->leave($__internal_a9ee057a3a8917e525b56c0be58296cc4bff8c29c0fe04016e19b966acbb3e70_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ab571fc546dec6875318dc710596943113a49954da5cee70f502e3c8eb7ca9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab571fc546dec6875318dc710596943113a49954da5cee70f502e3c8eb7ca9f->enter($__internal_8ab571fc546dec6875318dc710596943113a49954da5cee70f502e3c8eb7ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_16d429bae731b07f8520f9276812a032ee03f379646bf16f908a3899b450b420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d429bae731b07f8520f9276812a032ee03f379646bf16f908a3899b450b420->enter($__internal_16d429bae731b07f8520f9276812a032ee03f379646bf16f908a3899b450b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_16d429bae731b07f8520f9276812a032ee03f379646bf16f908a3899b450b420->leave($__internal_16d429bae731b07f8520f9276812a032ee03f379646bf16f908a3899b450b420_prof);

        
        $__internal_8ab571fc546dec6875318dc710596943113a49954da5cee70f502e3c8eb7ca9f->leave($__internal_8ab571fc546dec6875318dc710596943113a49954da5cee70f502e3c8eb7ca9f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_06776fe27f23b0dfee3282867945c476cce30e661eb0583836fc9e392fd0c451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06776fe27f23b0dfee3282867945c476cce30e661eb0583836fc9e392fd0c451->enter($__internal_06776fe27f23b0dfee3282867945c476cce30e661eb0583836fc9e392fd0c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9130682d86ea67c7b6e26fad1f1b105451074b711174f3f2f91fab87a29fc6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9130682d86ea67c7b6e26fad1f1b105451074b711174f3f2f91fab87a29fc6fc->enter($__internal_9130682d86ea67c7b6e26fad1f1b105451074b711174f3f2f91fab87a29fc6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9130682d86ea67c7b6e26fad1f1b105451074b711174f3f2f91fab87a29fc6fc->leave($__internal_9130682d86ea67c7b6e26fad1f1b105451074b711174f3f2f91fab87a29fc6fc_prof);

        
        $__internal_06776fe27f23b0dfee3282867945c476cce30e661eb0583836fc9e392fd0c451->leave($__internal_06776fe27f23b0dfee3282867945c476cce30e661eb0583836fc9e392fd0c451_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6cd67a5528c6ce04e3a81886c2107c51b8c2a05bdd2ec81eb036bd34a3fcb6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd67a5528c6ce04e3a81886c2107c51b8c2a05bdd2ec81eb036bd34a3fcb6d0->enter($__internal_6cd67a5528c6ce04e3a81886c2107c51b8c2a05bdd2ec81eb036bd34a3fcb6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c88ca5c8f88148d131a2405e3126eb964039d31f99cea1208252144965921d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88ca5c8f88148d131a2405e3126eb964039d31f99cea1208252144965921d78->enter($__internal_c88ca5c8f88148d131a2405e3126eb964039d31f99cea1208252144965921d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c88ca5c8f88148d131a2405e3126eb964039d31f99cea1208252144965921d78->leave($__internal_c88ca5c8f88148d131a2405e3126eb964039d31f99cea1208252144965921d78_prof);

        
        $__internal_6cd67a5528c6ce04e3a81886c2107c51b8c2a05bdd2ec81eb036bd34a3fcb6d0->leave($__internal_6cd67a5528c6ce04e3a81886c2107c51b8c2a05bdd2ec81eb036bd34a3fcb6d0_prof);

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
