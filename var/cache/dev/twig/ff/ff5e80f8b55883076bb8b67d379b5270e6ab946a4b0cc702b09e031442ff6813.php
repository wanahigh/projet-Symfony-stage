<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_eb1da0f076682bbcf18314a3665f7a64649a0fa1ec8114c8cd0e8246e96168d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_71fbb8eaae5d53d002682ddb03742d5a5b79bf61749179c82851fc421a9fbc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fbb8eaae5d53d002682ddb03742d5a5b79bf61749179c82851fc421a9fbc67->enter($__internal_71fbb8eaae5d53d002682ddb03742d5a5b79bf61749179c82851fc421a9fbc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c5b2bf718b018aa3a6b5e5097d19e07e8584ac7adf8598560d7608b11e4b6bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b2bf718b018aa3a6b5e5097d19e07e8584ac7adf8598560d7608b11e4b6bf9->enter($__internal_c5b2bf718b018aa3a6b5e5097d19e07e8584ac7adf8598560d7608b11e4b6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fbb8eaae5d53d002682ddb03742d5a5b79bf61749179c82851fc421a9fbc67->leave($__internal_71fbb8eaae5d53d002682ddb03742d5a5b79bf61749179c82851fc421a9fbc67_prof);

        
        $__internal_c5b2bf718b018aa3a6b5e5097d19e07e8584ac7adf8598560d7608b11e4b6bf9->leave($__internal_c5b2bf718b018aa3a6b5e5097d19e07e8584ac7adf8598560d7608b11e4b6bf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e7853de054f5ea0ba8bab8e6ea62a822788d5bab052b0880c1fc624ac8de1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7853de054f5ea0ba8bab8e6ea62a822788d5bab052b0880c1fc624ac8de1bf->enter($__internal_3e7853de054f5ea0ba8bab8e6ea62a822788d5bab052b0880c1fc624ac8de1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9eab7aa37b80b6520b88cea8dc4d88bf77b3f2790d03d0f4299fd1e329f5e2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eab7aa37b80b6520b88cea8dc4d88bf77b3f2790d03d0f4299fd1e329f5e2f5->enter($__internal_9eab7aa37b80b6520b88cea8dc4d88bf77b3f2790d03d0f4299fd1e329f5e2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9eab7aa37b80b6520b88cea8dc4d88bf77b3f2790d03d0f4299fd1e329f5e2f5->leave($__internal_9eab7aa37b80b6520b88cea8dc4d88bf77b3f2790d03d0f4299fd1e329f5e2f5_prof);

        
        $__internal_3e7853de054f5ea0ba8bab8e6ea62a822788d5bab052b0880c1fc624ac8de1bf->leave($__internal_3e7853de054f5ea0ba8bab8e6ea62a822788d5bab052b0880c1fc624ac8de1bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
