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
        $__internal_265ce22ed437a5c98b50686fe23dc99bba1b8365f9998c126fe9c08d18335b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265ce22ed437a5c98b50686fe23dc99bba1b8365f9998c126fe9c08d18335b72->enter($__internal_265ce22ed437a5c98b50686fe23dc99bba1b8365f9998c126fe9c08d18335b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_8052ce83ae58e6b74f47f2a723b8927dfc928aa0da41dbf80010d9d595c9e18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8052ce83ae58e6b74f47f2a723b8927dfc928aa0da41dbf80010d9d595c9e18e->enter($__internal_8052ce83ae58e6b74f47f2a723b8927dfc928aa0da41dbf80010d9d595c9e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265ce22ed437a5c98b50686fe23dc99bba1b8365f9998c126fe9c08d18335b72->leave($__internal_265ce22ed437a5c98b50686fe23dc99bba1b8365f9998c126fe9c08d18335b72_prof);

        
        $__internal_8052ce83ae58e6b74f47f2a723b8927dfc928aa0da41dbf80010d9d595c9e18e->leave($__internal_8052ce83ae58e6b74f47f2a723b8927dfc928aa0da41dbf80010d9d595c9e18e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1c62e9a4000208af0c7e42c09c24ba60d99f1b7f27451c8cc0c9857caf1f93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c62e9a4000208af0c7e42c09c24ba60d99f1b7f27451c8cc0c9857caf1f93a->enter($__internal_e1c62e9a4000208af0c7e42c09c24ba60d99f1b7f27451c8cc0c9857caf1f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a0ac0322cf2e421a1b8bf27da1c8af58c39d37404b47616e1f6427f52e114811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ac0322cf2e421a1b8bf27da1c8af58c39d37404b47616e1f6427f52e114811->enter($__internal_a0ac0322cf2e421a1b8bf27da1c8af58c39d37404b47616e1f6427f52e114811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a0ac0322cf2e421a1b8bf27da1c8af58c39d37404b47616e1f6427f52e114811->leave($__internal_a0ac0322cf2e421a1b8bf27da1c8af58c39d37404b47616e1f6427f52e114811_prof);

        
        $__internal_e1c62e9a4000208af0c7e42c09c24ba60d99f1b7f27451c8cc0c9857caf1f93a->leave($__internal_e1c62e9a4000208af0c7e42c09c24ba60d99f1b7f27451c8cc0c9857caf1f93a_prof);

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
