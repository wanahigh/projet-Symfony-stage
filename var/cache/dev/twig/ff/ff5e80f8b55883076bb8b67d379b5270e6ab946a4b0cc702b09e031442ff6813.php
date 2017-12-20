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
        $__internal_865b08cf4bcafb6be138a89d14f0736e2780b0d7dddc170261607c77e3e37d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865b08cf4bcafb6be138a89d14f0736e2780b0d7dddc170261607c77e3e37d75->enter($__internal_865b08cf4bcafb6be138a89d14f0736e2780b0d7dddc170261607c77e3e37d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_6d4702b2375547bf951c5fd0b3494e29baacfc27b421aef957a15882907f1f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4702b2375547bf951c5fd0b3494e29baacfc27b421aef957a15882907f1f34->enter($__internal_6d4702b2375547bf951c5fd0b3494e29baacfc27b421aef957a15882907f1f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865b08cf4bcafb6be138a89d14f0736e2780b0d7dddc170261607c77e3e37d75->leave($__internal_865b08cf4bcafb6be138a89d14f0736e2780b0d7dddc170261607c77e3e37d75_prof);

        
        $__internal_6d4702b2375547bf951c5fd0b3494e29baacfc27b421aef957a15882907f1f34->leave($__internal_6d4702b2375547bf951c5fd0b3494e29baacfc27b421aef957a15882907f1f34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88ab8b39d5461fba20023c34f48571e95570f73c7ed67422848314e52022f56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ab8b39d5461fba20023c34f48571e95570f73c7ed67422848314e52022f56d->enter($__internal_88ab8b39d5461fba20023c34f48571e95570f73c7ed67422848314e52022f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9cfca31ea7ea033c147bdec8df5eff6a1ab72c4df54511c9b6f1d03211a8ad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfca31ea7ea033c147bdec8df5eff6a1ab72c4df54511c9b6f1d03211a8ad99->enter($__internal_9cfca31ea7ea033c147bdec8df5eff6a1ab72c4df54511c9b6f1d03211a8ad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9cfca31ea7ea033c147bdec8df5eff6a1ab72c4df54511c9b6f1d03211a8ad99->leave($__internal_9cfca31ea7ea033c147bdec8df5eff6a1ab72c4df54511c9b6f1d03211a8ad99_prof);

        
        $__internal_88ab8b39d5461fba20023c34f48571e95570f73c7ed67422848314e52022f56d->leave($__internal_88ab8b39d5461fba20023c34f48571e95570f73c7ed67422848314e52022f56d_prof);

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
