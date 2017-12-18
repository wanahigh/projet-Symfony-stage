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
        $__internal_9b5442c729656dcd0e19f064cc4084adea1319bd98b0bbda1a31c6fcf4503c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5442c729656dcd0e19f064cc4084adea1319bd98b0bbda1a31c6fcf4503c09->enter($__internal_9b5442c729656dcd0e19f064cc4084adea1319bd98b0bbda1a31c6fcf4503c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_41af315009e78e6999e7ee9fa8788cb0b9300549a123cfa5b9b3de5b98b17011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41af315009e78e6999e7ee9fa8788cb0b9300549a123cfa5b9b3de5b98b17011->enter($__internal_41af315009e78e6999e7ee9fa8788cb0b9300549a123cfa5b9b3de5b98b17011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5442c729656dcd0e19f064cc4084adea1319bd98b0bbda1a31c6fcf4503c09->leave($__internal_9b5442c729656dcd0e19f064cc4084adea1319bd98b0bbda1a31c6fcf4503c09_prof);

        
        $__internal_41af315009e78e6999e7ee9fa8788cb0b9300549a123cfa5b9b3de5b98b17011->leave($__internal_41af315009e78e6999e7ee9fa8788cb0b9300549a123cfa5b9b3de5b98b17011_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64be040d71e7ff5c0747b6c74be55fb7818bff845219176227888d3983c1f1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64be040d71e7ff5c0747b6c74be55fb7818bff845219176227888d3983c1f1f0->enter($__internal_64be040d71e7ff5c0747b6c74be55fb7818bff845219176227888d3983c1f1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_903f943606d1ad02f23befc4467502ebee073c3b2be2b2890df785b1c53b188c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f943606d1ad02f23befc4467502ebee073c3b2be2b2890df785b1c53b188c->enter($__internal_903f943606d1ad02f23befc4467502ebee073c3b2be2b2890df785b1c53b188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_903f943606d1ad02f23befc4467502ebee073c3b2be2b2890df785b1c53b188c->leave($__internal_903f943606d1ad02f23befc4467502ebee073c3b2be2b2890df785b1c53b188c_prof);

        
        $__internal_64be040d71e7ff5c0747b6c74be55fb7818bff845219176227888d3983c1f1f0->leave($__internal_64be040d71e7ff5c0747b6c74be55fb7818bff845219176227888d3983c1f1f0_prof);

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
