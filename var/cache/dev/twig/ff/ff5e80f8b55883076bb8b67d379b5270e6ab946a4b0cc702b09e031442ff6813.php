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
        $__internal_a6e01e07637c1249109dd0e966f26fa5a911e799385b99f9e4f528843ad8abae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e01e07637c1249109dd0e966f26fa5a911e799385b99f9e4f528843ad8abae->enter($__internal_a6e01e07637c1249109dd0e966f26fa5a911e799385b99f9e4f528843ad8abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7484f87125871c6c39f0c59ba7b33791c15a202790aebadf8dd943fb004f34a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7484f87125871c6c39f0c59ba7b33791c15a202790aebadf8dd943fb004f34a5->enter($__internal_7484f87125871c6c39f0c59ba7b33791c15a202790aebadf8dd943fb004f34a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e01e07637c1249109dd0e966f26fa5a911e799385b99f9e4f528843ad8abae->leave($__internal_a6e01e07637c1249109dd0e966f26fa5a911e799385b99f9e4f528843ad8abae_prof);

        
        $__internal_7484f87125871c6c39f0c59ba7b33791c15a202790aebadf8dd943fb004f34a5->leave($__internal_7484f87125871c6c39f0c59ba7b33791c15a202790aebadf8dd943fb004f34a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4aa9a8bb6cc11c41118beccafa12e4611e8cad80600a9c8658b719a1350d98ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa9a8bb6cc11c41118beccafa12e4611e8cad80600a9c8658b719a1350d98ed->enter($__internal_4aa9a8bb6cc11c41118beccafa12e4611e8cad80600a9c8658b719a1350d98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc56af72c770fa5ea33a0b39836be86018ddabcfb54a7d10bbc84b3aef799978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc56af72c770fa5ea33a0b39836be86018ddabcfb54a7d10bbc84b3aef799978->enter($__internal_fc56af72c770fa5ea33a0b39836be86018ddabcfb54a7d10bbc84b3aef799978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_fc56af72c770fa5ea33a0b39836be86018ddabcfb54a7d10bbc84b3aef799978->leave($__internal_fc56af72c770fa5ea33a0b39836be86018ddabcfb54a7d10bbc84b3aef799978_prof);

        
        $__internal_4aa9a8bb6cc11c41118beccafa12e4611e8cad80600a9c8658b719a1350d98ed->leave($__internal_4aa9a8bb6cc11c41118beccafa12e4611e8cad80600a9c8658b719a1350d98ed_prof);

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
