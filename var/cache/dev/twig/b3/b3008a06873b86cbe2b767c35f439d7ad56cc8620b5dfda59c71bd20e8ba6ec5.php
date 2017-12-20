<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c3b43d1aba072198af01ccd2a91fb5771e88544083c5ecab79d8949b63a92f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c06a0f23620b609cf6109caa754b5a3e16bfdcd9276c542fa98d87ffb34baea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06a0f23620b609cf6109caa754b5a3e16bfdcd9276c542fa98d87ffb34baea3->enter($__internal_c06a0f23620b609cf6109caa754b5a3e16bfdcd9276c542fa98d87ffb34baea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6fa97cc29a7b8868bc2aa9741335b23dda16ac69a69ea804e8a8ae8410ea6a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa97cc29a7b8868bc2aa9741335b23dda16ac69a69ea804e8a8ae8410ea6a6c->enter($__internal_6fa97cc29a7b8868bc2aa9741335b23dda16ac69a69ea804e8a8ae8410ea6a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06a0f23620b609cf6109caa754b5a3e16bfdcd9276c542fa98d87ffb34baea3->leave($__internal_c06a0f23620b609cf6109caa754b5a3e16bfdcd9276c542fa98d87ffb34baea3_prof);

        
        $__internal_6fa97cc29a7b8868bc2aa9741335b23dda16ac69a69ea804e8a8ae8410ea6a6c->leave($__internal_6fa97cc29a7b8868bc2aa9741335b23dda16ac69a69ea804e8a8ae8410ea6a6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e30c98b9fdde400e16f26b3b9d2c402dbd9fa3a0dbb92fb767d586708aac6ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30c98b9fdde400e16f26b3b9d2c402dbd9fa3a0dbb92fb767d586708aac6ae6->enter($__internal_e30c98b9fdde400e16f26b3b9d2c402dbd9fa3a0dbb92fb767d586708aac6ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abaaa4963f7724cf165b2155269f7cc66e8f4d96cc6204f4c2b14489e54cc9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaaa4963f7724cf165b2155269f7cc66e8f4d96cc6204f4c2b14489e54cc9ed->enter($__internal_abaaa4963f7724cf165b2155269f7cc66e8f4d96cc6204f4c2b14489e54cc9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_abaaa4963f7724cf165b2155269f7cc66e8f4d96cc6204f4c2b14489e54cc9ed->leave($__internal_abaaa4963f7724cf165b2155269f7cc66e8f4d96cc6204f4c2b14489e54cc9ed_prof);

        
        $__internal_e30c98b9fdde400e16f26b3b9d2c402dbd9fa3a0dbb92fb767d586708aac6ae6->leave($__internal_e30c98b9fdde400e16f26b3b9d2c402dbd9fa3a0dbb92fb767d586708aac6ae6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
