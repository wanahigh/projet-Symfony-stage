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
        $__internal_10225c07ad744d15541f38a06e89d670cf10f7b1ce3ca07d13da66b3829f5e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10225c07ad744d15541f38a06e89d670cf10f7b1ce3ca07d13da66b3829f5e4e->enter($__internal_10225c07ad744d15541f38a06e89d670cf10f7b1ce3ca07d13da66b3829f5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7b78493517e456012d1c82528a2b4927e19cfd3e8909f2b005d1eccace8d48b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b78493517e456012d1c82528a2b4927e19cfd3e8909f2b005d1eccace8d48b9->enter($__internal_7b78493517e456012d1c82528a2b4927e19cfd3e8909f2b005d1eccace8d48b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_10225c07ad744d15541f38a06e89d670cf10f7b1ce3ca07d13da66b3829f5e4e->leave($__internal_10225c07ad744d15541f38a06e89d670cf10f7b1ce3ca07d13da66b3829f5e4e_prof);

        
        $__internal_7b78493517e456012d1c82528a2b4927e19cfd3e8909f2b005d1eccace8d48b9->leave($__internal_7b78493517e456012d1c82528a2b4927e19cfd3e8909f2b005d1eccace8d48b9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6e48b22137f9c2a0c2ce81d0ebbb601ac2a597c181045a809f3edf0f929336a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e48b22137f9c2a0c2ce81d0ebbb601ac2a597c181045a809f3edf0f929336a->enter($__internal_c6e48b22137f9c2a0c2ce81d0ebbb601ac2a597c181045a809f3edf0f929336a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_74e4f3218cd34f5e35eb9587c960d3eeca67253624a2cd29510226c884824c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e4f3218cd34f5e35eb9587c960d3eeca67253624a2cd29510226c884824c02->enter($__internal_74e4f3218cd34f5e35eb9587c960d3eeca67253624a2cd29510226c884824c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_74e4f3218cd34f5e35eb9587c960d3eeca67253624a2cd29510226c884824c02->leave($__internal_74e4f3218cd34f5e35eb9587c960d3eeca67253624a2cd29510226c884824c02_prof);

        
        $__internal_c6e48b22137f9c2a0c2ce81d0ebbb601ac2a597c181045a809f3edf0f929336a->leave($__internal_c6e48b22137f9c2a0c2ce81d0ebbb601ac2a597c181045a809f3edf0f929336a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ea5ff99ba6e202d31c748d4ca967dc50ecb84dff1f3fd8d5da41b1706506f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea5ff99ba6e202d31c748d4ca967dc50ecb84dff1f3fd8d5da41b1706506f87->enter($__internal_8ea5ff99ba6e202d31c748d4ca967dc50ecb84dff1f3fd8d5da41b1706506f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_053327130fe15f5159529f81d5bd79b50481eacf9fa041f7b450cbd52014d63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053327130fe15f5159529f81d5bd79b50481eacf9fa041f7b450cbd52014d63e->enter($__internal_053327130fe15f5159529f81d5bd79b50481eacf9fa041f7b450cbd52014d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_053327130fe15f5159529f81d5bd79b50481eacf9fa041f7b450cbd52014d63e->leave($__internal_053327130fe15f5159529f81d5bd79b50481eacf9fa041f7b450cbd52014d63e_prof);

        
        $__internal_8ea5ff99ba6e202d31c748d4ca967dc50ecb84dff1f3fd8d5da41b1706506f87->leave($__internal_8ea5ff99ba6e202d31c748d4ca967dc50ecb84dff1f3fd8d5da41b1706506f87_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f87b974a41d59dcbcfcbf4a24c1e3a12ba6dd3aec8cca240aa5507f86726edeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87b974a41d59dcbcfcbf4a24c1e3a12ba6dd3aec8cca240aa5507f86726edeb->enter($__internal_f87b974a41d59dcbcfcbf4a24c1e3a12ba6dd3aec8cca240aa5507f86726edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3662517f00fae0fbc5a12fc83cb267f9a31099b03ff99b7050224a4932cb208d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3662517f00fae0fbc5a12fc83cb267f9a31099b03ff99b7050224a4932cb208d->enter($__internal_3662517f00fae0fbc5a12fc83cb267f9a31099b03ff99b7050224a4932cb208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3662517f00fae0fbc5a12fc83cb267f9a31099b03ff99b7050224a4932cb208d->leave($__internal_3662517f00fae0fbc5a12fc83cb267f9a31099b03ff99b7050224a4932cb208d_prof);

        
        $__internal_f87b974a41d59dcbcfcbf4a24c1e3a12ba6dd3aec8cca240aa5507f86726edeb->leave($__internal_f87b974a41d59dcbcfcbf4a24c1e3a12ba6dd3aec8cca240aa5507f86726edeb_prof);

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
