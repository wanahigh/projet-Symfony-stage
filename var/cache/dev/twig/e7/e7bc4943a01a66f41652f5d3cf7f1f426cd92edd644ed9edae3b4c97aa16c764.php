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
        $__internal_0cc21d9d9f45f811aaca046f8659e9dbb99e121eda314abd9d39d92de5afbe99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc21d9d9f45f811aaca046f8659e9dbb99e121eda314abd9d39d92de5afbe99->enter($__internal_0cc21d9d9f45f811aaca046f8659e9dbb99e121eda314abd9d39d92de5afbe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a2539f7ee5d81665022af6369074a8e95999eb58dc082e4a44245922d443a1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2539f7ee5d81665022af6369074a8e95999eb58dc082e4a44245922d443a1f8->enter($__internal_a2539f7ee5d81665022af6369074a8e95999eb58dc082e4a44245922d443a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0cc21d9d9f45f811aaca046f8659e9dbb99e121eda314abd9d39d92de5afbe99->leave($__internal_0cc21d9d9f45f811aaca046f8659e9dbb99e121eda314abd9d39d92de5afbe99_prof);

        
        $__internal_a2539f7ee5d81665022af6369074a8e95999eb58dc082e4a44245922d443a1f8->leave($__internal_a2539f7ee5d81665022af6369074a8e95999eb58dc082e4a44245922d443a1f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04a863ee790249dfd61744d7ae0b49bf030d04a55f62e84d668d4df9c49afdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a863ee790249dfd61744d7ae0b49bf030d04a55f62e84d668d4df9c49afdd3->enter($__internal_04a863ee790249dfd61744d7ae0b49bf030d04a55f62e84d668d4df9c49afdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4f0f5b2f1574034c01f8b6a8eab50eb2ee810682066b9f4703de132f2a271737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0f5b2f1574034c01f8b6a8eab50eb2ee810682066b9f4703de132f2a271737->enter($__internal_4f0f5b2f1574034c01f8b6a8eab50eb2ee810682066b9f4703de132f2a271737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4f0f5b2f1574034c01f8b6a8eab50eb2ee810682066b9f4703de132f2a271737->leave($__internal_4f0f5b2f1574034c01f8b6a8eab50eb2ee810682066b9f4703de132f2a271737_prof);

        
        $__internal_04a863ee790249dfd61744d7ae0b49bf030d04a55f62e84d668d4df9c49afdd3->leave($__internal_04a863ee790249dfd61744d7ae0b49bf030d04a55f62e84d668d4df9c49afdd3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_50dae9a012b1b04cee86b9ee3776fd118ac1834ed507bc6560931a3b34f2133a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dae9a012b1b04cee86b9ee3776fd118ac1834ed507bc6560931a3b34f2133a->enter($__internal_50dae9a012b1b04cee86b9ee3776fd118ac1834ed507bc6560931a3b34f2133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3ed99d6785eb6387b127ba50cfe565d7e26f82e9edc73f199bb2f28ad170766b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed99d6785eb6387b127ba50cfe565d7e26f82e9edc73f199bb2f28ad170766b->enter($__internal_3ed99d6785eb6387b127ba50cfe565d7e26f82e9edc73f199bb2f28ad170766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_3ed99d6785eb6387b127ba50cfe565d7e26f82e9edc73f199bb2f28ad170766b->leave($__internal_3ed99d6785eb6387b127ba50cfe565d7e26f82e9edc73f199bb2f28ad170766b_prof);

        
        $__internal_50dae9a012b1b04cee86b9ee3776fd118ac1834ed507bc6560931a3b34f2133a->leave($__internal_50dae9a012b1b04cee86b9ee3776fd118ac1834ed507bc6560931a3b34f2133a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_609c4858984c8b0123bbb95d015707ffacd43e142682bd113f5077cfe11bb555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609c4858984c8b0123bbb95d015707ffacd43e142682bd113f5077cfe11bb555->enter($__internal_609c4858984c8b0123bbb95d015707ffacd43e142682bd113f5077cfe11bb555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8870f9b968428722a7d3081b935ff7b799d6b52fa348fcb66e9d52c1e95f1b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8870f9b968428722a7d3081b935ff7b799d6b52fa348fcb66e9d52c1e95f1b92->enter($__internal_8870f9b968428722a7d3081b935ff7b799d6b52fa348fcb66e9d52c1e95f1b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8870f9b968428722a7d3081b935ff7b799d6b52fa348fcb66e9d52c1e95f1b92->leave($__internal_8870f9b968428722a7d3081b935ff7b799d6b52fa348fcb66e9d52c1e95f1b92_prof);

        
        $__internal_609c4858984c8b0123bbb95d015707ffacd43e142682bd113f5077cfe11bb555->leave($__internal_609c4858984c8b0123bbb95d015707ffacd43e142682bd113f5077cfe11bb555_prof);

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
