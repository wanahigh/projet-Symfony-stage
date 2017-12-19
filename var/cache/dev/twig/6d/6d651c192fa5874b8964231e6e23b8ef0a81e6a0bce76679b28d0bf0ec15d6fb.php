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
        $__internal_d2410eaef9955a7dfad0233d1b3af5ad726f11df4bafb8bb6c707b708f614ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2410eaef9955a7dfad0233d1b3af5ad726f11df4bafb8bb6c707b708f614ac5->enter($__internal_d2410eaef9955a7dfad0233d1b3af5ad726f11df4bafb8bb6c707b708f614ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_cc3148a0c16d586da9f9d1b74513bec163e84835ab5bfcf6280ac924538d8bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3148a0c16d586da9f9d1b74513bec163e84835ab5bfcf6280ac924538d8bf3->enter($__internal_cc3148a0c16d586da9f9d1b74513bec163e84835ab5bfcf6280ac924538d8bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2410eaef9955a7dfad0233d1b3af5ad726f11df4bafb8bb6c707b708f614ac5->leave($__internal_d2410eaef9955a7dfad0233d1b3af5ad726f11df4bafb8bb6c707b708f614ac5_prof);

        
        $__internal_cc3148a0c16d586da9f9d1b74513bec163e84835ab5bfcf6280ac924538d8bf3->leave($__internal_cc3148a0c16d586da9f9d1b74513bec163e84835ab5bfcf6280ac924538d8bf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bf8386d47bad4501d3bac4bacba1628432e006506f266b780449bda7548e78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf8386d47bad4501d3bac4bacba1628432e006506f266b780449bda7548e78b->enter($__internal_2bf8386d47bad4501d3bac4bacba1628432e006506f266b780449bda7548e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75f6f9ae75e65c1bf9e18f6118635e22cfa43661bce66a910f525d9073936de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f6f9ae75e65c1bf9e18f6118635e22cfa43661bce66a910f525d9073936de3->enter($__internal_75f6f9ae75e65c1bf9e18f6118635e22cfa43661bce66a910f525d9073936de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_75f6f9ae75e65c1bf9e18f6118635e22cfa43661bce66a910f525d9073936de3->leave($__internal_75f6f9ae75e65c1bf9e18f6118635e22cfa43661bce66a910f525d9073936de3_prof);

        
        $__internal_2bf8386d47bad4501d3bac4bacba1628432e006506f266b780449bda7548e78b->leave($__internal_2bf8386d47bad4501d3bac4bacba1628432e006506f266b780449bda7548e78b_prof);

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
