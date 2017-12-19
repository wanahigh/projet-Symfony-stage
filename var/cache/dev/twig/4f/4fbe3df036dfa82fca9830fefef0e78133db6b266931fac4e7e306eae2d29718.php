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
        $__internal_4a1719d83ecc21aec3034c834107a76c9d45223ced2845800cd4db000889da2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1719d83ecc21aec3034c834107a76c9d45223ced2845800cd4db000889da2f->enter($__internal_4a1719d83ecc21aec3034c834107a76c9d45223ced2845800cd4db000889da2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_fd1eca16b30bf4a7e8bd72d1fe0925f1b10e41774bcc107959a395f9d797da02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1eca16b30bf4a7e8bd72d1fe0925f1b10e41774bcc107959a395f9d797da02->enter($__internal_fd1eca16b30bf4a7e8bd72d1fe0925f1b10e41774bcc107959a395f9d797da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a1719d83ecc21aec3034c834107a76c9d45223ced2845800cd4db000889da2f->leave($__internal_4a1719d83ecc21aec3034c834107a76c9d45223ced2845800cd4db000889da2f_prof);

        
        $__internal_fd1eca16b30bf4a7e8bd72d1fe0925f1b10e41774bcc107959a395f9d797da02->leave($__internal_fd1eca16b30bf4a7e8bd72d1fe0925f1b10e41774bcc107959a395f9d797da02_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d18474f8b237d8cb0f9239c2b4a672e3bb1cb680509a26e7721126a6fffcb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d18474f8b237d8cb0f9239c2b4a672e3bb1cb680509a26e7721126a6fffcb80->enter($__internal_8d18474f8b237d8cb0f9239c2b4a672e3bb1cb680509a26e7721126a6fffcb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_969d1d5d727e2c8d053700de6777664fdb3b47cdd2392818079ae8cccc2dbee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969d1d5d727e2c8d053700de6777664fdb3b47cdd2392818079ae8cccc2dbee6->enter($__internal_969d1d5d727e2c8d053700de6777664fdb3b47cdd2392818079ae8cccc2dbee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_969d1d5d727e2c8d053700de6777664fdb3b47cdd2392818079ae8cccc2dbee6->leave($__internal_969d1d5d727e2c8d053700de6777664fdb3b47cdd2392818079ae8cccc2dbee6_prof);

        
        $__internal_8d18474f8b237d8cb0f9239c2b4a672e3bb1cb680509a26e7721126a6fffcb80->leave($__internal_8d18474f8b237d8cb0f9239c2b4a672e3bb1cb680509a26e7721126a6fffcb80_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b4a0ec80243323de3f42248f293de13f48f5e537514afc94facbedf9fd0a0a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0ec80243323de3f42248f293de13f48f5e537514afc94facbedf9fd0a0a3f->enter($__internal_b4a0ec80243323de3f42248f293de13f48f5e537514afc94facbedf9fd0a0a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a9bc156fe9d6c0dd3a96070bd2d8faa5f0a3f1deea0783c0394223eef319129a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bc156fe9d6c0dd3a96070bd2d8faa5f0a3f1deea0783c0394223eef319129a->enter($__internal_a9bc156fe9d6c0dd3a96070bd2d8faa5f0a3f1deea0783c0394223eef319129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_a9bc156fe9d6c0dd3a96070bd2d8faa5f0a3f1deea0783c0394223eef319129a->leave($__internal_a9bc156fe9d6c0dd3a96070bd2d8faa5f0a3f1deea0783c0394223eef319129a_prof);

        
        $__internal_b4a0ec80243323de3f42248f293de13f48f5e537514afc94facbedf9fd0a0a3f->leave($__internal_b4a0ec80243323de3f42248f293de13f48f5e537514afc94facbedf9fd0a0a3f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9020f56f3ead12828559d46b1e9c49a6b0deddb9a77c0188470f43e078ad000c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9020f56f3ead12828559d46b1e9c49a6b0deddb9a77c0188470f43e078ad000c->enter($__internal_9020f56f3ead12828559d46b1e9c49a6b0deddb9a77c0188470f43e078ad000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9a520b68391563ead36f051c03204ae3d6788d8eb05280a52927342693ef34f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a520b68391563ead36f051c03204ae3d6788d8eb05280a52927342693ef34f1->enter($__internal_9a520b68391563ead36f051c03204ae3d6788d8eb05280a52927342693ef34f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a520b68391563ead36f051c03204ae3d6788d8eb05280a52927342693ef34f1->leave($__internal_9a520b68391563ead36f051c03204ae3d6788d8eb05280a52927342693ef34f1_prof);

        
        $__internal_9020f56f3ead12828559d46b1e9c49a6b0deddb9a77c0188470f43e078ad000c->leave($__internal_9020f56f3ead12828559d46b1e9c49a6b0deddb9a77c0188470f43e078ad000c_prof);

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
