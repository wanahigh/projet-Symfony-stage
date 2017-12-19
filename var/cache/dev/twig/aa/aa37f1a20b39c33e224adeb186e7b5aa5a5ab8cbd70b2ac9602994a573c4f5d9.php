<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fda484434dcbd297f396af250d5eca64ea508bdc204290dd81fa0bfd2c51a207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7297b3492b5dabed4b3135bfaa7c9678c815f9541c87a70e9fb562819ccb58fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7297b3492b5dabed4b3135bfaa7c9678c815f9541c87a70e9fb562819ccb58fb->enter($__internal_7297b3492b5dabed4b3135bfaa7c9678c815f9541c87a70e9fb562819ccb58fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8f2b60bafe0955c52297a0d851c0a9bac5013f9082e4b15aecb7136e9cfaa1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2b60bafe0955c52297a0d851c0a9bac5013f9082e4b15aecb7136e9cfaa1b8->enter($__internal_8f2b60bafe0955c52297a0d851c0a9bac5013f9082e4b15aecb7136e9cfaa1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7297b3492b5dabed4b3135bfaa7c9678c815f9541c87a70e9fb562819ccb58fb->leave($__internal_7297b3492b5dabed4b3135bfaa7c9678c815f9541c87a70e9fb562819ccb58fb_prof);

        
        $__internal_8f2b60bafe0955c52297a0d851c0a9bac5013f9082e4b15aecb7136e9cfaa1b8->leave($__internal_8f2b60bafe0955c52297a0d851c0a9bac5013f9082e4b15aecb7136e9cfaa1b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f5339478424bd1d61bbbf073e59703632ad6525a6df06f610675053d7713fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5339478424bd1d61bbbf073e59703632ad6525a6df06f610675053d7713fb5->enter($__internal_3f5339478424bd1d61bbbf073e59703632ad6525a6df06f610675053d7713fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52589e527028a5bd723db3bcf6beb9f60912b19b7dab2dd0e94fb070e143bbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52589e527028a5bd723db3bcf6beb9f60912b19b7dab2dd0e94fb070e143bbe5->enter($__internal_52589e527028a5bd723db3bcf6beb9f60912b19b7dab2dd0e94fb070e143bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_52589e527028a5bd723db3bcf6beb9f60912b19b7dab2dd0e94fb070e143bbe5->leave($__internal_52589e527028a5bd723db3bcf6beb9f60912b19b7dab2dd0e94fb070e143bbe5_prof);

        
        $__internal_3f5339478424bd1d61bbbf073e59703632ad6525a6df06f610675053d7713fb5->leave($__internal_3f5339478424bd1d61bbbf073e59703632ad6525a6df06f610675053d7713fb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
