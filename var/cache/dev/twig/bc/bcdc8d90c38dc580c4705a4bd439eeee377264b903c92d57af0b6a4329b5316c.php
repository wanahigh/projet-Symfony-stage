<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_19e30f9a918ee9ac94204210b002ce44de79f239e7fb32bb3ed31bdcd3f5822f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa5b83892ba2ee970b17b7f81444979eaed802a903148eb85f739e630b781814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5b83892ba2ee970b17b7f81444979eaed802a903148eb85f739e630b781814->enter($__internal_aa5b83892ba2ee970b17b7f81444979eaed802a903148eb85f739e630b781814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_466fcf2b6a5ef3ae37947753e1d574ec679a21aad34fedd3bbe25ecf4a08fce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466fcf2b6a5ef3ae37947753e1d574ec679a21aad34fedd3bbe25ecf4a08fce5->enter($__internal_466fcf2b6a5ef3ae37947753e1d574ec679a21aad34fedd3bbe25ecf4a08fce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5b83892ba2ee970b17b7f81444979eaed802a903148eb85f739e630b781814->leave($__internal_aa5b83892ba2ee970b17b7f81444979eaed802a903148eb85f739e630b781814_prof);

        
        $__internal_466fcf2b6a5ef3ae37947753e1d574ec679a21aad34fedd3bbe25ecf4a08fce5->leave($__internal_466fcf2b6a5ef3ae37947753e1d574ec679a21aad34fedd3bbe25ecf4a08fce5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21a187cbe563ed5c66875951ed77826b94d128710e188a64a9b20417b8069b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a187cbe563ed5c66875951ed77826b94d128710e188a64a9b20417b8069b50->enter($__internal_21a187cbe563ed5c66875951ed77826b94d128710e188a64a9b20417b8069b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a90a2ed52ef5faa7dc115dd9780d6590da66aa2db5cf967983f0cb7951a46a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a90a2ed52ef5faa7dc115dd9780d6590da66aa2db5cf967983f0cb7951a46a7->enter($__internal_3a90a2ed52ef5faa7dc115dd9780d6590da66aa2db5cf967983f0cb7951a46a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_3a90a2ed52ef5faa7dc115dd9780d6590da66aa2db5cf967983f0cb7951a46a7->leave($__internal_3a90a2ed52ef5faa7dc115dd9780d6590da66aa2db5cf967983f0cb7951a46a7_prof);

        
        $__internal_21a187cbe563ed5c66875951ed77826b94d128710e188a64a9b20417b8069b50->leave($__internal_21a187cbe563ed5c66875951ed77826b94d128710e188a64a9b20417b8069b50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
