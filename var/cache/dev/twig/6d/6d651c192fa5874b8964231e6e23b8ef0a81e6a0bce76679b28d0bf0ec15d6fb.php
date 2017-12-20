<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9a6b9b5e83a17ca65be4bc43c88d71e9aa829734cfbe026ed92852496f4c4ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_588904a8d686931d688a3a1838e80ea6b5aceaf6b1380be05b049cca1fb67823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588904a8d686931d688a3a1838e80ea6b5aceaf6b1380be05b049cca1fb67823->enter($__internal_588904a8d686931d688a3a1838e80ea6b5aceaf6b1380be05b049cca1fb67823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_32b00a006dfcde9e078d3827ef3656776cc5a73d614b75000779d93b317d8b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b00a006dfcde9e078d3827ef3656776cc5a73d614b75000779d93b317d8b85->enter($__internal_32b00a006dfcde9e078d3827ef3656776cc5a73d614b75000779d93b317d8b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588904a8d686931d688a3a1838e80ea6b5aceaf6b1380be05b049cca1fb67823->leave($__internal_588904a8d686931d688a3a1838e80ea6b5aceaf6b1380be05b049cca1fb67823_prof);

        
        $__internal_32b00a006dfcde9e078d3827ef3656776cc5a73d614b75000779d93b317d8b85->leave($__internal_32b00a006dfcde9e078d3827ef3656776cc5a73d614b75000779d93b317d8b85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da94b25ecc710399f4f65f2626fcecb17d11c99ec905b979d4afb00de8fb0493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da94b25ecc710399f4f65f2626fcecb17d11c99ec905b979d4afb00de8fb0493->enter($__internal_da94b25ecc710399f4f65f2626fcecb17d11c99ec905b979d4afb00de8fb0493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2441c7e1a37e015e51f22093cdf14090ccad825da4fc98ab9527283d710900df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2441c7e1a37e015e51f22093cdf14090ccad825da4fc98ab9527283d710900df->enter($__internal_2441c7e1a37e015e51f22093cdf14090ccad825da4fc98ab9527283d710900df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2441c7e1a37e015e51f22093cdf14090ccad825da4fc98ab9527283d710900df->leave($__internal_2441c7e1a37e015e51f22093cdf14090ccad825da4fc98ab9527283d710900df_prof);

        
        $__internal_da94b25ecc710399f4f65f2626fcecb17d11c99ec905b979d4afb00de8fb0493->leave($__internal_da94b25ecc710399f4f65f2626fcecb17d11c99ec905b979d4afb00de8fb0493_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
