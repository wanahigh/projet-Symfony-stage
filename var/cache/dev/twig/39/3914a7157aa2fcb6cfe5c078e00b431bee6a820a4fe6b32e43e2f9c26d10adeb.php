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
        $__internal_a5a0341a7236687e5a10b2cea2d12709eab55b460f0df727edee3a63549bf15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a0341a7236687e5a10b2cea2d12709eab55b460f0df727edee3a63549bf15d->enter($__internal_a5a0341a7236687e5a10b2cea2d12709eab55b460f0df727edee3a63549bf15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4aec02770b3b594478300ea60c868398f875ad65f0302b050a27acf9fb46ae11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aec02770b3b594478300ea60c868398f875ad65f0302b050a27acf9fb46ae11->enter($__internal_4aec02770b3b594478300ea60c868398f875ad65f0302b050a27acf9fb46ae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a0341a7236687e5a10b2cea2d12709eab55b460f0df727edee3a63549bf15d->leave($__internal_a5a0341a7236687e5a10b2cea2d12709eab55b460f0df727edee3a63549bf15d_prof);

        
        $__internal_4aec02770b3b594478300ea60c868398f875ad65f0302b050a27acf9fb46ae11->leave($__internal_4aec02770b3b594478300ea60c868398f875ad65f0302b050a27acf9fb46ae11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4c360e346dd72b3dc781d8074ca15943b8ce63763cbfafa971e8f2a13f42129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c360e346dd72b3dc781d8074ca15943b8ce63763cbfafa971e8f2a13f42129->enter($__internal_a4c360e346dd72b3dc781d8074ca15943b8ce63763cbfafa971e8f2a13f42129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_084e0097882b697cc0b4baebd3c3caede562a396dc6d74693c785dcb00aa1535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084e0097882b697cc0b4baebd3c3caede562a396dc6d74693c785dcb00aa1535->enter($__internal_084e0097882b697cc0b4baebd3c3caede562a396dc6d74693c785dcb00aa1535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_084e0097882b697cc0b4baebd3c3caede562a396dc6d74693c785dcb00aa1535->leave($__internal_084e0097882b697cc0b4baebd3c3caede562a396dc6d74693c785dcb00aa1535_prof);

        
        $__internal_a4c360e346dd72b3dc781d8074ca15943b8ce63763cbfafa971e8f2a13f42129->leave($__internal_a4c360e346dd72b3dc781d8074ca15943b8ce63763cbfafa971e8f2a13f42129_prof);

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
