<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6dce2451199fe404519bed3393b2233fe5acc37d49585df85b8a438ec26c37f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_fb38384bdbe5268069578f62df5ed67134ae68dc174def2731eea5b44c3f48f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb38384bdbe5268069578f62df5ed67134ae68dc174def2731eea5b44c3f48f5->enter($__internal_fb38384bdbe5268069578f62df5ed67134ae68dc174def2731eea5b44c3f48f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_daef1ccb3ef2ea8aa24f085e03b96ab3d419684083ae73c981cb258646bc2345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daef1ccb3ef2ea8aa24f085e03b96ab3d419684083ae73c981cb258646bc2345->enter($__internal_daef1ccb3ef2ea8aa24f085e03b96ab3d419684083ae73c981cb258646bc2345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb38384bdbe5268069578f62df5ed67134ae68dc174def2731eea5b44c3f48f5->leave($__internal_fb38384bdbe5268069578f62df5ed67134ae68dc174def2731eea5b44c3f48f5_prof);

        
        $__internal_daef1ccb3ef2ea8aa24f085e03b96ab3d419684083ae73c981cb258646bc2345->leave($__internal_daef1ccb3ef2ea8aa24f085e03b96ab3d419684083ae73c981cb258646bc2345_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dad1a79be14771191a9fb3debf937bce73af3e8ac4eb359be7bf6e38f59911ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad1a79be14771191a9fb3debf937bce73af3e8ac4eb359be7bf6e38f59911ca->enter($__internal_dad1a79be14771191a9fb3debf937bce73af3e8ac4eb359be7bf6e38f59911ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97e74368c2572a0aec3291135a1b0d7001339f9a746f8f31751adf708b06bd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e74368c2572a0aec3291135a1b0d7001339f9a746f8f31751adf708b06bd50->enter($__internal_97e74368c2572a0aec3291135a1b0d7001339f9a746f8f31751adf708b06bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_97e74368c2572a0aec3291135a1b0d7001339f9a746f8f31751adf708b06bd50->leave($__internal_97e74368c2572a0aec3291135a1b0d7001339f9a746f8f31751adf708b06bd50_prof);

        
        $__internal_dad1a79be14771191a9fb3debf937bce73af3e8ac4eb359be7bf6e38f59911ca->leave($__internal_dad1a79be14771191a9fb3debf937bce73af3e8ac4eb359be7bf6e38f59911ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
