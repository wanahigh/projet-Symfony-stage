<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_55c88b9f65861744c88b2be7fc5f2edd9b88e5bbdfcf50145ce52f174b8871e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_91e1b451745147b82ed71a914651d82b120a06ac6f59e480bb00167009d322be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e1b451745147b82ed71a914651d82b120a06ac6f59e480bb00167009d322be->enter($__internal_91e1b451745147b82ed71a914651d82b120a06ac6f59e480bb00167009d322be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_f4a405c5484f0b36801b401cd7e71b432cfae1694f8f1f0d03293316bc5a2ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a405c5484f0b36801b401cd7e71b432cfae1694f8f1f0d03293316bc5a2ef9->enter($__internal_f4a405c5484f0b36801b401cd7e71b432cfae1694f8f1f0d03293316bc5a2ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e1b451745147b82ed71a914651d82b120a06ac6f59e480bb00167009d322be->leave($__internal_91e1b451745147b82ed71a914651d82b120a06ac6f59e480bb00167009d322be_prof);

        
        $__internal_f4a405c5484f0b36801b401cd7e71b432cfae1694f8f1f0d03293316bc5a2ef9->leave($__internal_f4a405c5484f0b36801b401cd7e71b432cfae1694f8f1f0d03293316bc5a2ef9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eba4e9caafb79763c3d5951f20b7496d2ef23acb60d5771ade4ef572f406b6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba4e9caafb79763c3d5951f20b7496d2ef23acb60d5771ade4ef572f406b6fb->enter($__internal_eba4e9caafb79763c3d5951f20b7496d2ef23acb60d5771ade4ef572f406b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b230544343a6913a59a4b4ed8e30050d9d9e9c6e57ff0bfecf3ab4debef424aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b230544343a6913a59a4b4ed8e30050d9d9e9c6e57ff0bfecf3ab4debef424aa->enter($__internal_b230544343a6913a59a4b4ed8e30050d9d9e9c6e57ff0bfecf3ab4debef424aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b230544343a6913a59a4b4ed8e30050d9d9e9c6e57ff0bfecf3ab4debef424aa->leave($__internal_b230544343a6913a59a4b4ed8e30050d9d9e9c6e57ff0bfecf3ab4debef424aa_prof);

        
        $__internal_eba4e9caafb79763c3d5951f20b7496d2ef23acb60d5771ade4ef572f406b6fb->leave($__internal_eba4e9caafb79763c3d5951f20b7496d2ef23acb60d5771ade4ef572f406b6fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
