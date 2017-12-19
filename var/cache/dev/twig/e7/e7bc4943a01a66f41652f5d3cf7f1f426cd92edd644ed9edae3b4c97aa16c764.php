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
        $__internal_3da03ac9e54e241bc713943522f8903df2c711b3bbf558b5aad199476e5bc0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da03ac9e54e241bc713943522f8903df2c711b3bbf558b5aad199476e5bc0fe->enter($__internal_3da03ac9e54e241bc713943522f8903df2c711b3bbf558b5aad199476e5bc0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_dec76e0b5742cd9fd6bdc049506246408eb06b6af1cf2477824fa8a5611b05d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec76e0b5742cd9fd6bdc049506246408eb06b6af1cf2477824fa8a5611b05d2->enter($__internal_dec76e0b5742cd9fd6bdc049506246408eb06b6af1cf2477824fa8a5611b05d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3da03ac9e54e241bc713943522f8903df2c711b3bbf558b5aad199476e5bc0fe->leave($__internal_3da03ac9e54e241bc713943522f8903df2c711b3bbf558b5aad199476e5bc0fe_prof);

        
        $__internal_dec76e0b5742cd9fd6bdc049506246408eb06b6af1cf2477824fa8a5611b05d2->leave($__internal_dec76e0b5742cd9fd6bdc049506246408eb06b6af1cf2477824fa8a5611b05d2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_968b875e6792298f51861e801cdae79e326b57e33a4a367b1ff435148410661b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968b875e6792298f51861e801cdae79e326b57e33a4a367b1ff435148410661b->enter($__internal_968b875e6792298f51861e801cdae79e326b57e33a4a367b1ff435148410661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_88494a2f912677aff8a373dd422a1cf5f804424b2df9ac182d60712a8fd7b907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88494a2f912677aff8a373dd422a1cf5f804424b2df9ac182d60712a8fd7b907->enter($__internal_88494a2f912677aff8a373dd422a1cf5f804424b2df9ac182d60712a8fd7b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_88494a2f912677aff8a373dd422a1cf5f804424b2df9ac182d60712a8fd7b907->leave($__internal_88494a2f912677aff8a373dd422a1cf5f804424b2df9ac182d60712a8fd7b907_prof);

        
        $__internal_968b875e6792298f51861e801cdae79e326b57e33a4a367b1ff435148410661b->leave($__internal_968b875e6792298f51861e801cdae79e326b57e33a4a367b1ff435148410661b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_97b9ddc9f23c78ec466663f9fa3f641fd77c3cc5c3d015a4ace1777f08db4a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b9ddc9f23c78ec466663f9fa3f641fd77c3cc5c3d015a4ace1777f08db4a1e->enter($__internal_97b9ddc9f23c78ec466663f9fa3f641fd77c3cc5c3d015a4ace1777f08db4a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4ad8134a62ee685aebf2fc098f5788b96194e9cbe32c78a0cdc30858337ac366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8134a62ee685aebf2fc098f5788b96194e9cbe32c78a0cdc30858337ac366->enter($__internal_4ad8134a62ee685aebf2fc098f5788b96194e9cbe32c78a0cdc30858337ac366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4ad8134a62ee685aebf2fc098f5788b96194e9cbe32c78a0cdc30858337ac366->leave($__internal_4ad8134a62ee685aebf2fc098f5788b96194e9cbe32c78a0cdc30858337ac366_prof);

        
        $__internal_97b9ddc9f23c78ec466663f9fa3f641fd77c3cc5c3d015a4ace1777f08db4a1e->leave($__internal_97b9ddc9f23c78ec466663f9fa3f641fd77c3cc5c3d015a4ace1777f08db4a1e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_da11dd25d59337a09570c1accc381ca0389b996ee5154ee9aabe4c098f910919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da11dd25d59337a09570c1accc381ca0389b996ee5154ee9aabe4c098f910919->enter($__internal_da11dd25d59337a09570c1accc381ca0389b996ee5154ee9aabe4c098f910919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_717b26012f9fa992e9a4bcfa11b1613ba4da50c4bfae2de024f570e897eb97a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717b26012f9fa992e9a4bcfa11b1613ba4da50c4bfae2de024f570e897eb97a0->enter($__internal_717b26012f9fa992e9a4bcfa11b1613ba4da50c4bfae2de024f570e897eb97a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_717b26012f9fa992e9a4bcfa11b1613ba4da50c4bfae2de024f570e897eb97a0->leave($__internal_717b26012f9fa992e9a4bcfa11b1613ba4da50c4bfae2de024f570e897eb97a0_prof);

        
        $__internal_da11dd25d59337a09570c1accc381ca0389b996ee5154ee9aabe4c098f910919->leave($__internal_da11dd25d59337a09570c1accc381ca0389b996ee5154ee9aabe4c098f910919_prof);

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
