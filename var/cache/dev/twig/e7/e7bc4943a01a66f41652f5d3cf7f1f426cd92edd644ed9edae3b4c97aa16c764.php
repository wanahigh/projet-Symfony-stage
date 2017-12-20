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
        $__internal_c92abbdb6712581f27a7f784b97c306462175cf6622e3a85a5268ab1dd347dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92abbdb6712581f27a7f784b97c306462175cf6622e3a85a5268ab1dd347dee->enter($__internal_c92abbdb6712581f27a7f784b97c306462175cf6622e3a85a5268ab1dd347dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1269785473c7b580a63516840e8aa97d282b0f5911c360a43b904eeb37fb7b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1269785473c7b580a63516840e8aa97d282b0f5911c360a43b904eeb37fb7b56->enter($__internal_1269785473c7b580a63516840e8aa97d282b0f5911c360a43b904eeb37fb7b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c92abbdb6712581f27a7f784b97c306462175cf6622e3a85a5268ab1dd347dee->leave($__internal_c92abbdb6712581f27a7f784b97c306462175cf6622e3a85a5268ab1dd347dee_prof);

        
        $__internal_1269785473c7b580a63516840e8aa97d282b0f5911c360a43b904eeb37fb7b56->leave($__internal_1269785473c7b580a63516840e8aa97d282b0f5911c360a43b904eeb37fb7b56_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e970ce245922748bdb9e10c4d3d98aab9de21b7a8b99df9f20c0492f6d81cea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e970ce245922748bdb9e10c4d3d98aab9de21b7a8b99df9f20c0492f6d81cea2->enter($__internal_e970ce245922748bdb9e10c4d3d98aab9de21b7a8b99df9f20c0492f6d81cea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a02f36d1f2ab9f56ed181269e02424368e48532df08f30fb436941f317b487ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02f36d1f2ab9f56ed181269e02424368e48532df08f30fb436941f317b487ae->enter($__internal_a02f36d1f2ab9f56ed181269e02424368e48532df08f30fb436941f317b487ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_a02f36d1f2ab9f56ed181269e02424368e48532df08f30fb436941f317b487ae->leave($__internal_a02f36d1f2ab9f56ed181269e02424368e48532df08f30fb436941f317b487ae_prof);

        
        $__internal_e970ce245922748bdb9e10c4d3d98aab9de21b7a8b99df9f20c0492f6d81cea2->leave($__internal_e970ce245922748bdb9e10c4d3d98aab9de21b7a8b99df9f20c0492f6d81cea2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2a545f9fe1f3297c9156167a447222ba3ce9837eb8222b4e917422eccc17981f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a545f9fe1f3297c9156167a447222ba3ce9837eb8222b4e917422eccc17981f->enter($__internal_2a545f9fe1f3297c9156167a447222ba3ce9837eb8222b4e917422eccc17981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_16fb1157c80e730e5d5fd2a76daf901dae415bf46c94973ec2a8399a03115639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fb1157c80e730e5d5fd2a76daf901dae415bf46c94973ec2a8399a03115639->enter($__internal_16fb1157c80e730e5d5fd2a76daf901dae415bf46c94973ec2a8399a03115639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_16fb1157c80e730e5d5fd2a76daf901dae415bf46c94973ec2a8399a03115639->leave($__internal_16fb1157c80e730e5d5fd2a76daf901dae415bf46c94973ec2a8399a03115639_prof);

        
        $__internal_2a545f9fe1f3297c9156167a447222ba3ce9837eb8222b4e917422eccc17981f->leave($__internal_2a545f9fe1f3297c9156167a447222ba3ce9837eb8222b4e917422eccc17981f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1110744054507326d070f423653481350527d6fb84a3e8e87b656cc379260f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1110744054507326d070f423653481350527d6fb84a3e8e87b656cc379260f5e->enter($__internal_1110744054507326d070f423653481350527d6fb84a3e8e87b656cc379260f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_59a66a07f33bd960003d048241d41932306430132857922195cbdf4fb65a5638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a66a07f33bd960003d048241d41932306430132857922195cbdf4fb65a5638->enter($__internal_59a66a07f33bd960003d048241d41932306430132857922195cbdf4fb65a5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_59a66a07f33bd960003d048241d41932306430132857922195cbdf4fb65a5638->leave($__internal_59a66a07f33bd960003d048241d41932306430132857922195cbdf4fb65a5638_prof);

        
        $__internal_1110744054507326d070f423653481350527d6fb84a3e8e87b656cc379260f5e->leave($__internal_1110744054507326d070f423653481350527d6fb84a3e8e87b656cc379260f5e_prof);

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
