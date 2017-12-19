<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_019eeb3e51a736717b56cc03b97cae99bda11c283ed327f233c7e6c1e3f533f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2f765290e709a499c837d77147e8853807a921d3bb7bf22188863c9857c531ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f765290e709a499c837d77147e8853807a921d3bb7bf22188863c9857c531ad->enter($__internal_2f765290e709a499c837d77147e8853807a921d3bb7bf22188863c9857c531ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_6e66f007c900afa82d9495da1b5147e54f3c536f313c2a6c527d0cc214647afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e66f007c900afa82d9495da1b5147e54f3c536f313c2a6c527d0cc214647afc->enter($__internal_6e66f007c900afa82d9495da1b5147e54f3c536f313c2a6c527d0cc214647afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f765290e709a499c837d77147e8853807a921d3bb7bf22188863c9857c531ad->leave($__internal_2f765290e709a499c837d77147e8853807a921d3bb7bf22188863c9857c531ad_prof);

        
        $__internal_6e66f007c900afa82d9495da1b5147e54f3c536f313c2a6c527d0cc214647afc->leave($__internal_6e66f007c900afa82d9495da1b5147e54f3c536f313c2a6c527d0cc214647afc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8810e90fbd9ffcaec3520c8f376f314ffcabeadad10b257bf6f3cdfee7213a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8810e90fbd9ffcaec3520c8f376f314ffcabeadad10b257bf6f3cdfee7213a3->enter($__internal_c8810e90fbd9ffcaec3520c8f376f314ffcabeadad10b257bf6f3cdfee7213a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fab5c325634b242819d652dc27020dac8d65dedd54bdd8cfbf02554047724250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab5c325634b242819d652dc27020dac8d65dedd54bdd8cfbf02554047724250->enter($__internal_fab5c325634b242819d652dc27020dac8d65dedd54bdd8cfbf02554047724250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fab5c325634b242819d652dc27020dac8d65dedd54bdd8cfbf02554047724250->leave($__internal_fab5c325634b242819d652dc27020dac8d65dedd54bdd8cfbf02554047724250_prof);

        
        $__internal_c8810e90fbd9ffcaec3520c8f376f314ffcabeadad10b257bf6f3cdfee7213a3->leave($__internal_c8810e90fbd9ffcaec3520c8f376f314ffcabeadad10b257bf6f3cdfee7213a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
