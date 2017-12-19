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
        $__internal_6f8d19f404d3fa06f535daca1810408fd49fefb2666f04fc5b2cf9d02a30ab06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8d19f404d3fa06f535daca1810408fd49fefb2666f04fc5b2cf9d02a30ab06->enter($__internal_6f8d19f404d3fa06f535daca1810408fd49fefb2666f04fc5b2cf9d02a30ab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_b6367a12cf7f4624392ca9b216f1a84a25d12d9f3ac3e4fda8b95dd76224151a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6367a12cf7f4624392ca9b216f1a84a25d12d9f3ac3e4fda8b95dd76224151a->enter($__internal_b6367a12cf7f4624392ca9b216f1a84a25d12d9f3ac3e4fda8b95dd76224151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f8d19f404d3fa06f535daca1810408fd49fefb2666f04fc5b2cf9d02a30ab06->leave($__internal_6f8d19f404d3fa06f535daca1810408fd49fefb2666f04fc5b2cf9d02a30ab06_prof);

        
        $__internal_b6367a12cf7f4624392ca9b216f1a84a25d12d9f3ac3e4fda8b95dd76224151a->leave($__internal_b6367a12cf7f4624392ca9b216f1a84a25d12d9f3ac3e4fda8b95dd76224151a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe53ce00b1c7a01e8d97d283340e52f28990f6eb1fec062f7d0b6e6c376b8948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe53ce00b1c7a01e8d97d283340e52f28990f6eb1fec062f7d0b6e6c376b8948->enter($__internal_fe53ce00b1c7a01e8d97d283340e52f28990f6eb1fec062f7d0b6e6c376b8948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_47d05d186f40fab93a835210055154477b2dfc1f7ad9cbf4ebf4ae78a5698e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d05d186f40fab93a835210055154477b2dfc1f7ad9cbf4ebf4ae78a5698e15->enter($__internal_47d05d186f40fab93a835210055154477b2dfc1f7ad9cbf4ebf4ae78a5698e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_47d05d186f40fab93a835210055154477b2dfc1f7ad9cbf4ebf4ae78a5698e15->leave($__internal_47d05d186f40fab93a835210055154477b2dfc1f7ad9cbf4ebf4ae78a5698e15_prof);

        
        $__internal_fe53ce00b1c7a01e8d97d283340e52f28990f6eb1fec062f7d0b6e6c376b8948->leave($__internal_fe53ce00b1c7a01e8d97d283340e52f28990f6eb1fec062f7d0b6e6c376b8948_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_68f67ed4fd9aff9b53fb3905ca3316801b61f3f61d95488e05e47db7fa5f80dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f67ed4fd9aff9b53fb3905ca3316801b61f3f61d95488e05e47db7fa5f80dd->enter($__internal_68f67ed4fd9aff9b53fb3905ca3316801b61f3f61d95488e05e47db7fa5f80dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6b23e2a3020f50c9a7bee814eada56c24a9129e7ea2d0dc0b942c060a228d404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b23e2a3020f50c9a7bee814eada56c24a9129e7ea2d0dc0b942c060a228d404->enter($__internal_6b23e2a3020f50c9a7bee814eada56c24a9129e7ea2d0dc0b942c060a228d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6b23e2a3020f50c9a7bee814eada56c24a9129e7ea2d0dc0b942c060a228d404->leave($__internal_6b23e2a3020f50c9a7bee814eada56c24a9129e7ea2d0dc0b942c060a228d404_prof);

        
        $__internal_68f67ed4fd9aff9b53fb3905ca3316801b61f3f61d95488e05e47db7fa5f80dd->leave($__internal_68f67ed4fd9aff9b53fb3905ca3316801b61f3f61d95488e05e47db7fa5f80dd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_235007ca4f304ebe9ef97dc2a0e0f5af7c07486c4a3d71903e9f6fa389a603af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235007ca4f304ebe9ef97dc2a0e0f5af7c07486c4a3d71903e9f6fa389a603af->enter($__internal_235007ca4f304ebe9ef97dc2a0e0f5af7c07486c4a3d71903e9f6fa389a603af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8472e11c9d98af79fc48baa4fd41a316bb740b1cf696805e46f14cba0e7797df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8472e11c9d98af79fc48baa4fd41a316bb740b1cf696805e46f14cba0e7797df->enter($__internal_8472e11c9d98af79fc48baa4fd41a316bb740b1cf696805e46f14cba0e7797df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8472e11c9d98af79fc48baa4fd41a316bb740b1cf696805e46f14cba0e7797df->leave($__internal_8472e11c9d98af79fc48baa4fd41a316bb740b1cf696805e46f14cba0e7797df_prof);

        
        $__internal_235007ca4f304ebe9ef97dc2a0e0f5af7c07486c4a3d71903e9f6fa389a603af->leave($__internal_235007ca4f304ebe9ef97dc2a0e0f5af7c07486c4a3d71903e9f6fa389a603af_prof);

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
