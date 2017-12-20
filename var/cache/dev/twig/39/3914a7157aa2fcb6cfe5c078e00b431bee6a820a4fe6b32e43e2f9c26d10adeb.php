<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a5bd4b684f136a382d6b8ff9bc7b351e18542d5bb0be2b56f64c3bc80cc3a08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7654e69024cc5a1f3e793211ab0a2daaeb4316f572ab7245fb9eaa66406dafd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7654e69024cc5a1f3e793211ab0a2daaeb4316f572ab7245fb9eaa66406dafd2->enter($__internal_7654e69024cc5a1f3e793211ab0a2daaeb4316f572ab7245fb9eaa66406dafd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_2b932350e8cc81e52b13038ba585d3881310c85d85cb2523235209924f420f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b932350e8cc81e52b13038ba585d3881310c85d85cb2523235209924f420f3c->enter($__internal_2b932350e8cc81e52b13038ba585d3881310c85d85cb2523235209924f420f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7654e69024cc5a1f3e793211ab0a2daaeb4316f572ab7245fb9eaa66406dafd2->leave($__internal_7654e69024cc5a1f3e793211ab0a2daaeb4316f572ab7245fb9eaa66406dafd2_prof);

        
        $__internal_2b932350e8cc81e52b13038ba585d3881310c85d85cb2523235209924f420f3c->leave($__internal_2b932350e8cc81e52b13038ba585d3881310c85d85cb2523235209924f420f3c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40a6a7e9250cae7215796f011d1e8f01f13b5f1e550b685471c3df7a77392527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a6a7e9250cae7215796f011d1e8f01f13b5f1e550b685471c3df7a77392527->enter($__internal_40a6a7e9250cae7215796f011d1e8f01f13b5f1e550b685471c3df7a77392527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2970dd0b3bd991314ab7341b7f6f44eb2b2adfad186ba691b2ebce2e1b3b0e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2970dd0b3bd991314ab7341b7f6f44eb2b2adfad186ba691b2ebce2e1b3b0e9e->enter($__internal_2970dd0b3bd991314ab7341b7f6f44eb2b2adfad186ba691b2ebce2e1b3b0e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2970dd0b3bd991314ab7341b7f6f44eb2b2adfad186ba691b2ebce2e1b3b0e9e->leave($__internal_2970dd0b3bd991314ab7341b7f6f44eb2b2adfad186ba691b2ebce2e1b3b0e9e_prof);

        
        $__internal_40a6a7e9250cae7215796f011d1e8f01f13b5f1e550b685471c3df7a77392527->leave($__internal_40a6a7e9250cae7215796f011d1e8f01f13b5f1e550b685471c3df7a77392527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
