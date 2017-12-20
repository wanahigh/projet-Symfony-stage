<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3e55f33fa5d23c173cda8be074f71c3c1728279b620075187035b9d2f68c1012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fd3db39b09d14056958144de8064432d92d35ed44cf125906d78f5cc4cf35201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3db39b09d14056958144de8064432d92d35ed44cf125906d78f5cc4cf35201->enter($__internal_fd3db39b09d14056958144de8064432d92d35ed44cf125906d78f5cc4cf35201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_63c19b1b6c13e7873455972646401c312a32af776ffc7014864156094d95e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c19b1b6c13e7873455972646401c312a32af776ffc7014864156094d95e7d8->enter($__internal_63c19b1b6c13e7873455972646401c312a32af776ffc7014864156094d95e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3db39b09d14056958144de8064432d92d35ed44cf125906d78f5cc4cf35201->leave($__internal_fd3db39b09d14056958144de8064432d92d35ed44cf125906d78f5cc4cf35201_prof);

        
        $__internal_63c19b1b6c13e7873455972646401c312a32af776ffc7014864156094d95e7d8->leave($__internal_63c19b1b6c13e7873455972646401c312a32af776ffc7014864156094d95e7d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e05b7b69cc7d67391a56472b0b551092558f47a5176cfdf7e356d1187bff2525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05b7b69cc7d67391a56472b0b551092558f47a5176cfdf7e356d1187bff2525->enter($__internal_e05b7b69cc7d67391a56472b0b551092558f47a5176cfdf7e356d1187bff2525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c447901aa0a94f8db0f64e99dc79398e89b31d38969e5b127403b15f594312ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c447901aa0a94f8db0f64e99dc79398e89b31d38969e5b127403b15f594312ed->enter($__internal_c447901aa0a94f8db0f64e99dc79398e89b31d38969e5b127403b15f594312ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c447901aa0a94f8db0f64e99dc79398e89b31d38969e5b127403b15f594312ed->leave($__internal_c447901aa0a94f8db0f64e99dc79398e89b31d38969e5b127403b15f594312ed_prof);

        
        $__internal_e05b7b69cc7d67391a56472b0b551092558f47a5176cfdf7e356d1187bff2525->leave($__internal_e05b7b69cc7d67391a56472b0b551092558f47a5176cfdf7e356d1187bff2525_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
