<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d9ec4fbf45c4fa33454caacd09978d4775285446bbe83ee326b4d409c9067741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_201b4a752450da0a107a94f2af70ba9962348e0c0f59db50383a0d4b41159bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201b4a752450da0a107a94f2af70ba9962348e0c0f59db50383a0d4b41159bba->enter($__internal_201b4a752450da0a107a94f2af70ba9962348e0c0f59db50383a0d4b41159bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_1e6e392a08b2d4f5490f98fee080b2ac459b2764e2e361ba16fb57f731e0a7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6e392a08b2d4f5490f98fee080b2ac459b2764e2e361ba16fb57f731e0a7e1->enter($__internal_1e6e392a08b2d4f5490f98fee080b2ac459b2764e2e361ba16fb57f731e0a7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201b4a752450da0a107a94f2af70ba9962348e0c0f59db50383a0d4b41159bba->leave($__internal_201b4a752450da0a107a94f2af70ba9962348e0c0f59db50383a0d4b41159bba_prof);

        
        $__internal_1e6e392a08b2d4f5490f98fee080b2ac459b2764e2e361ba16fb57f731e0a7e1->leave($__internal_1e6e392a08b2d4f5490f98fee080b2ac459b2764e2e361ba16fb57f731e0a7e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17b5df761ad5a0de30eee60e182c38a919241381b64b4384c8b5485ff7a01962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b5df761ad5a0de30eee60e182c38a919241381b64b4384c8b5485ff7a01962->enter($__internal_17b5df761ad5a0de30eee60e182c38a919241381b64b4384c8b5485ff7a01962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7050710c34a0a31a00ee4da45d57455baf9902f022812da0dbe8b0f25b7a6a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050710c34a0a31a00ee4da45d57455baf9902f022812da0dbe8b0f25b7a6a03->enter($__internal_7050710c34a0a31a00ee4da45d57455baf9902f022812da0dbe8b0f25b7a6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7050710c34a0a31a00ee4da45d57455baf9902f022812da0dbe8b0f25b7a6a03->leave($__internal_7050710c34a0a31a00ee4da45d57455baf9902f022812da0dbe8b0f25b7a6a03_prof);

        
        $__internal_17b5df761ad5a0de30eee60e182c38a919241381b64b4384c8b5485ff7a01962->leave($__internal_17b5df761ad5a0de30eee60e182c38a919241381b64b4384c8b5485ff7a01962_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
