<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8704dda94bc552cfae13483e65fef26aaa20a03e24c70f8099d4b08a8623623b extends Twig_Template
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
        $__internal_0be04a86d3b698b738fed764aa9cea6973658e649499737a21db2432dd1e20b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be04a86d3b698b738fed764aa9cea6973658e649499737a21db2432dd1e20b0->enter($__internal_0be04a86d3b698b738fed764aa9cea6973658e649499737a21db2432dd1e20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_262bdac75199b496e783fb98aca21054029bcc03d5250bea7d00d0d823fda53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262bdac75199b496e783fb98aca21054029bcc03d5250bea7d00d0d823fda53d->enter($__internal_262bdac75199b496e783fb98aca21054029bcc03d5250bea7d00d0d823fda53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0be04a86d3b698b738fed764aa9cea6973658e649499737a21db2432dd1e20b0->leave($__internal_0be04a86d3b698b738fed764aa9cea6973658e649499737a21db2432dd1e20b0_prof);

        
        $__internal_262bdac75199b496e783fb98aca21054029bcc03d5250bea7d00d0d823fda53d->leave($__internal_262bdac75199b496e783fb98aca21054029bcc03d5250bea7d00d0d823fda53d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ee2bbbeca58a265abe19e3e9db3810595730f877404ee37b79ddb3def50431d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee2bbbeca58a265abe19e3e9db3810595730f877404ee37b79ddb3def50431d->enter($__internal_7ee2bbbeca58a265abe19e3e9db3810595730f877404ee37b79ddb3def50431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bd925e8a184adb4aaae7c113d05dd6118ab9abfc50891e9d37f8bc17d2c5d3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd925e8a184adb4aaae7c113d05dd6118ab9abfc50891e9d37f8bc17d2c5d3a7->enter($__internal_bd925e8a184adb4aaae7c113d05dd6118ab9abfc50891e9d37f8bc17d2c5d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_bd925e8a184adb4aaae7c113d05dd6118ab9abfc50891e9d37f8bc17d2c5d3a7->leave($__internal_bd925e8a184adb4aaae7c113d05dd6118ab9abfc50891e9d37f8bc17d2c5d3a7_prof);

        
        $__internal_7ee2bbbeca58a265abe19e3e9db3810595730f877404ee37b79ddb3def50431d->leave($__internal_7ee2bbbeca58a265abe19e3e9db3810595730f877404ee37b79ddb3def50431d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_977718bd4eb69128687ab06dab0c3e48a003d481f5a09e3318b66d1a57026d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977718bd4eb69128687ab06dab0c3e48a003d481f5a09e3318b66d1a57026d9b->enter($__internal_977718bd4eb69128687ab06dab0c3e48a003d481f5a09e3318b66d1a57026d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0ce0b603f04617059c049c205001be3e56a84f560bc4d180d31a9b0175b0c445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce0b603f04617059c049c205001be3e56a84f560bc4d180d31a9b0175b0c445->enter($__internal_0ce0b603f04617059c049c205001be3e56a84f560bc4d180d31a9b0175b0c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_0ce0b603f04617059c049c205001be3e56a84f560bc4d180d31a9b0175b0c445->leave($__internal_0ce0b603f04617059c049c205001be3e56a84f560bc4d180d31a9b0175b0c445_prof);

        
        $__internal_977718bd4eb69128687ab06dab0c3e48a003d481f5a09e3318b66d1a57026d9b->leave($__internal_977718bd4eb69128687ab06dab0c3e48a003d481f5a09e3318b66d1a57026d9b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6627007471f7c70ad5165cc230de73bb820c57fe76e4de52ecb9fe8223352f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6627007471f7c70ad5165cc230de73bb820c57fe76e4de52ecb9fe8223352f48->enter($__internal_6627007471f7c70ad5165cc230de73bb820c57fe76e4de52ecb9fe8223352f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_24553d243f43ed6cf9d1a4076ddb818c62c9918a50a4556d2795e24f61541254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24553d243f43ed6cf9d1a4076ddb818c62c9918a50a4556d2795e24f61541254->enter($__internal_24553d243f43ed6cf9d1a4076ddb818c62c9918a50a4556d2795e24f61541254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24553d243f43ed6cf9d1a4076ddb818c62c9918a50a4556d2795e24f61541254->leave($__internal_24553d243f43ed6cf9d1a4076ddb818c62c9918a50a4556d2795e24f61541254_prof);

        
        $__internal_6627007471f7c70ad5165cc230de73bb820c57fe76e4de52ecb9fe8223352f48->leave($__internal_6627007471f7c70ad5165cc230de73bb820c57fe76e4de52ecb9fe8223352f48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
