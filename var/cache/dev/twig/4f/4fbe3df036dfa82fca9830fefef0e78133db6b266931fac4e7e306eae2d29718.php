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
        $__internal_319d8bd02a376d214415929f564bd911d5cde91d5f9785e18e3e0688c615c975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319d8bd02a376d214415929f564bd911d5cde91d5f9785e18e3e0688c615c975->enter($__internal_319d8bd02a376d214415929f564bd911d5cde91d5f9785e18e3e0688c615c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_cf671a87bf34796c25dc7012e4a760daf69ef8759dc0f0d622b1342513636f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf671a87bf34796c25dc7012e4a760daf69ef8759dc0f0d622b1342513636f18->enter($__internal_cf671a87bf34796c25dc7012e4a760daf69ef8759dc0f0d622b1342513636f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_319d8bd02a376d214415929f564bd911d5cde91d5f9785e18e3e0688c615c975->leave($__internal_319d8bd02a376d214415929f564bd911d5cde91d5f9785e18e3e0688c615c975_prof);

        
        $__internal_cf671a87bf34796c25dc7012e4a760daf69ef8759dc0f0d622b1342513636f18->leave($__internal_cf671a87bf34796c25dc7012e4a760daf69ef8759dc0f0d622b1342513636f18_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b8a55af84e1f9c023acec746c48c6ff9991abdc98cc92982fbd102b99389ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8a55af84e1f9c023acec746c48c6ff9991abdc98cc92982fbd102b99389ad5->enter($__internal_8b8a55af84e1f9c023acec746c48c6ff9991abdc98cc92982fbd102b99389ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a2bb41fd87ad4a9361acc694e90f54ccb5d27592aca9408da4ee4e677d0e4371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bb41fd87ad4a9361acc694e90f54ccb5d27592aca9408da4ee4e677d0e4371->enter($__internal_a2bb41fd87ad4a9361acc694e90f54ccb5d27592aca9408da4ee4e677d0e4371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a2bb41fd87ad4a9361acc694e90f54ccb5d27592aca9408da4ee4e677d0e4371->leave($__internal_a2bb41fd87ad4a9361acc694e90f54ccb5d27592aca9408da4ee4e677d0e4371_prof);

        
        $__internal_8b8a55af84e1f9c023acec746c48c6ff9991abdc98cc92982fbd102b99389ad5->leave($__internal_8b8a55af84e1f9c023acec746c48c6ff9991abdc98cc92982fbd102b99389ad5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_948d25fd492977426935f98cd6a0aaec79df5446a8a0e90b1bbc9b8befc14b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948d25fd492977426935f98cd6a0aaec79df5446a8a0e90b1bbc9b8befc14b48->enter($__internal_948d25fd492977426935f98cd6a0aaec79df5446a8a0e90b1bbc9b8befc14b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9f1ae57e92f4dd2a946a30e1d2ea905e288579163ae16c9cac8068dcf4fef903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1ae57e92f4dd2a946a30e1d2ea905e288579163ae16c9cac8068dcf4fef903->enter($__internal_9f1ae57e92f4dd2a946a30e1d2ea905e288579163ae16c9cac8068dcf4fef903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9f1ae57e92f4dd2a946a30e1d2ea905e288579163ae16c9cac8068dcf4fef903->leave($__internal_9f1ae57e92f4dd2a946a30e1d2ea905e288579163ae16c9cac8068dcf4fef903_prof);

        
        $__internal_948d25fd492977426935f98cd6a0aaec79df5446a8a0e90b1bbc9b8befc14b48->leave($__internal_948d25fd492977426935f98cd6a0aaec79df5446a8a0e90b1bbc9b8befc14b48_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9013e8b24aad81fdd9845deb72fa48720882728d2ec554fc58118b4303017c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9013e8b24aad81fdd9845deb72fa48720882728d2ec554fc58118b4303017c86->enter($__internal_9013e8b24aad81fdd9845deb72fa48720882728d2ec554fc58118b4303017c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ebf1d40fe642e362286a28d0f628c3574a951f5352032e7e36dabd777c45c9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf1d40fe642e362286a28d0f628c3574a951f5352032e7e36dabd777c45c9ba->enter($__internal_ebf1d40fe642e362286a28d0f628c3574a951f5352032e7e36dabd777c45c9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ebf1d40fe642e362286a28d0f628c3574a951f5352032e7e36dabd777c45c9ba->leave($__internal_ebf1d40fe642e362286a28d0f628c3574a951f5352032e7e36dabd777c45c9ba_prof);

        
        $__internal_9013e8b24aad81fdd9845deb72fa48720882728d2ec554fc58118b4303017c86->leave($__internal_9013e8b24aad81fdd9845deb72fa48720882728d2ec554fc58118b4303017c86_prof);

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
