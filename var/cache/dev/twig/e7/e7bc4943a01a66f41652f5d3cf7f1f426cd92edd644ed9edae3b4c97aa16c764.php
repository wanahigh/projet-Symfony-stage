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
        $__internal_2882f10d6afe11b168fb49ab39eb7f5f646da53e19faa09b4d76e969791f90a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2882f10d6afe11b168fb49ab39eb7f5f646da53e19faa09b4d76e969791f90a2->enter($__internal_2882f10d6afe11b168fb49ab39eb7f5f646da53e19faa09b4d76e969791f90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_c98957b42fb2d2b10b30e4563486c7138f26621f6ec0550522b83416b43b25ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98957b42fb2d2b10b30e4563486c7138f26621f6ec0550522b83416b43b25ea->enter($__internal_c98957b42fb2d2b10b30e4563486c7138f26621f6ec0550522b83416b43b25ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2882f10d6afe11b168fb49ab39eb7f5f646da53e19faa09b4d76e969791f90a2->leave($__internal_2882f10d6afe11b168fb49ab39eb7f5f646da53e19faa09b4d76e969791f90a2_prof);

        
        $__internal_c98957b42fb2d2b10b30e4563486c7138f26621f6ec0550522b83416b43b25ea->leave($__internal_c98957b42fb2d2b10b30e4563486c7138f26621f6ec0550522b83416b43b25ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab6bd94fc8d3eb35c74f20f59a35dfe8406ea0d5a037fd3930b9c05e7fca8702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6bd94fc8d3eb35c74f20f59a35dfe8406ea0d5a037fd3930b9c05e7fca8702->enter($__internal_ab6bd94fc8d3eb35c74f20f59a35dfe8406ea0d5a037fd3930b9c05e7fca8702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_17a97bea0a369100ec35833f2dc0e643eb176f16ea6f9b5efd6a5ce40c6f6be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a97bea0a369100ec35833f2dc0e643eb176f16ea6f9b5efd6a5ce40c6f6be0->enter($__internal_17a97bea0a369100ec35833f2dc0e643eb176f16ea6f9b5efd6a5ce40c6f6be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_17a97bea0a369100ec35833f2dc0e643eb176f16ea6f9b5efd6a5ce40c6f6be0->leave($__internal_17a97bea0a369100ec35833f2dc0e643eb176f16ea6f9b5efd6a5ce40c6f6be0_prof);

        
        $__internal_ab6bd94fc8d3eb35c74f20f59a35dfe8406ea0d5a037fd3930b9c05e7fca8702->leave($__internal_ab6bd94fc8d3eb35c74f20f59a35dfe8406ea0d5a037fd3930b9c05e7fca8702_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae12f9abcbf123d472fc985922b8683adc55325da590c002779c60ab375a5787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae12f9abcbf123d472fc985922b8683adc55325da590c002779c60ab375a5787->enter($__internal_ae12f9abcbf123d472fc985922b8683adc55325da590c002779c60ab375a5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4717db793c442af976492903c5fea1bd14c7c47af5c64aae523dfc735751a716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4717db793c442af976492903c5fea1bd14c7c47af5c64aae523dfc735751a716->enter($__internal_4717db793c442af976492903c5fea1bd14c7c47af5c64aae523dfc735751a716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4717db793c442af976492903c5fea1bd14c7c47af5c64aae523dfc735751a716->leave($__internal_4717db793c442af976492903c5fea1bd14c7c47af5c64aae523dfc735751a716_prof);

        
        $__internal_ae12f9abcbf123d472fc985922b8683adc55325da590c002779c60ab375a5787->leave($__internal_ae12f9abcbf123d472fc985922b8683adc55325da590c002779c60ab375a5787_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_47ce8503295c5e1547d0d48498f5e0bd3f8517710f13a7140cd0bd25397b2893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ce8503295c5e1547d0d48498f5e0bd3f8517710f13a7140cd0bd25397b2893->enter($__internal_47ce8503295c5e1547d0d48498f5e0bd3f8517710f13a7140cd0bd25397b2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_45cc55330ac843e828192de1fa8234b2745079132ce3c3984b83b7046bcc7ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cc55330ac843e828192de1fa8234b2745079132ce3c3984b83b7046bcc7ed5->enter($__internal_45cc55330ac843e828192de1fa8234b2745079132ce3c3984b83b7046bcc7ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_45cc55330ac843e828192de1fa8234b2745079132ce3c3984b83b7046bcc7ed5->leave($__internal_45cc55330ac843e828192de1fa8234b2745079132ce3c3984b83b7046bcc7ed5_prof);

        
        $__internal_47ce8503295c5e1547d0d48498f5e0bd3f8517710f13a7140cd0bd25397b2893->leave($__internal_47ce8503295c5e1547d0d48498f5e0bd3f8517710f13a7140cd0bd25397b2893_prof);

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
