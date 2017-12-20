<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cd524f8dd836791a8a8b335d54ec10a6029cc436046cb17de2bad48de4a1a3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5c5ede38acd8bcd4d057e2474007b0b63f1877041ebe2a7a911961977a3b643e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5ede38acd8bcd4d057e2474007b0b63f1877041ebe2a7a911961977a3b643e->enter($__internal_5c5ede38acd8bcd4d057e2474007b0b63f1877041ebe2a7a911961977a3b643e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_33ce518dd680639d29668818940e4603d1fd0623c5f6bfb53c41d3926fb0a2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ce518dd680639d29668818940e4603d1fd0623c5f6bfb53c41d3926fb0a2e4->enter($__internal_33ce518dd680639d29668818940e4603d1fd0623c5f6bfb53c41d3926fb0a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5ede38acd8bcd4d057e2474007b0b63f1877041ebe2a7a911961977a3b643e->leave($__internal_5c5ede38acd8bcd4d057e2474007b0b63f1877041ebe2a7a911961977a3b643e_prof);

        
        $__internal_33ce518dd680639d29668818940e4603d1fd0623c5f6bfb53c41d3926fb0a2e4->leave($__internal_33ce518dd680639d29668818940e4603d1fd0623c5f6bfb53c41d3926fb0a2e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_372802399db4937a65ae4455da447eac7b85883da4d024858d01ca6d18c0b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372802399db4937a65ae4455da447eac7b85883da4d024858d01ca6d18c0b977->enter($__internal_372802399db4937a65ae4455da447eac7b85883da4d024858d01ca6d18c0b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08c0a4890992a7ae39c8b7854a789708767f854f9dbe4fe7b5c32cc026828a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c0a4890992a7ae39c8b7854a789708767f854f9dbe4fe7b5c32cc026828a62->enter($__internal_08c0a4890992a7ae39c8b7854a789708767f854f9dbe4fe7b5c32cc026828a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_08c0a4890992a7ae39c8b7854a789708767f854f9dbe4fe7b5c32cc026828a62->leave($__internal_08c0a4890992a7ae39c8b7854a789708767f854f9dbe4fe7b5c32cc026828a62_prof);

        
        $__internal_372802399db4937a65ae4455da447eac7b85883da4d024858d01ca6d18c0b977->leave($__internal_372802399db4937a65ae4455da447eac7b85883da4d024858d01ca6d18c0b977_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
