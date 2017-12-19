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
        $__internal_22b6cc0e74fb62eb99aeedf7f9832b5ee7865f9fe128cd7edcc53f3eed6cbb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b6cc0e74fb62eb99aeedf7f9832b5ee7865f9fe128cd7edcc53f3eed6cbb13->enter($__internal_22b6cc0e74fb62eb99aeedf7f9832b5ee7865f9fe128cd7edcc53f3eed6cbb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_0763c702bc88ab75fdf7ba7ed51a4f0527c042f7646a363dde23a6a7469efb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0763c702bc88ab75fdf7ba7ed51a4f0527c042f7646a363dde23a6a7469efb87->enter($__internal_0763c702bc88ab75fdf7ba7ed51a4f0527c042f7646a363dde23a6a7469efb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b6cc0e74fb62eb99aeedf7f9832b5ee7865f9fe128cd7edcc53f3eed6cbb13->leave($__internal_22b6cc0e74fb62eb99aeedf7f9832b5ee7865f9fe128cd7edcc53f3eed6cbb13_prof);

        
        $__internal_0763c702bc88ab75fdf7ba7ed51a4f0527c042f7646a363dde23a6a7469efb87->leave($__internal_0763c702bc88ab75fdf7ba7ed51a4f0527c042f7646a363dde23a6a7469efb87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ad36771e4a814c5b5e7bf195b15503bbfe67203b5a5ec0c37df610282e805a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad36771e4a814c5b5e7bf195b15503bbfe67203b5a5ec0c37df610282e805a->enter($__internal_18ad36771e4a814c5b5e7bf195b15503bbfe67203b5a5ec0c37df610282e805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad6aaaca261dbfb4b598072a95c7e05029acf915217deb748860361b2b053860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6aaaca261dbfb4b598072a95c7e05029acf915217deb748860361b2b053860->enter($__internal_ad6aaaca261dbfb4b598072a95c7e05029acf915217deb748860361b2b053860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ad6aaaca261dbfb4b598072a95c7e05029acf915217deb748860361b2b053860->leave($__internal_ad6aaaca261dbfb4b598072a95c7e05029acf915217deb748860361b2b053860_prof);

        
        $__internal_18ad36771e4a814c5b5e7bf195b15503bbfe67203b5a5ec0c37df610282e805a->leave($__internal_18ad36771e4a814c5b5e7bf195b15503bbfe67203b5a5ec0c37df610282e805a_prof);

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
