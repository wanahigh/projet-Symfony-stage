<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6dce2451199fe404519bed3393b2233fe5acc37d49585df85b8a438ec26c37f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a5cced26b3ad413eaf4752c2f718dc18877f64d2c493ae50c6f81b065ee9beb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cced26b3ad413eaf4752c2f718dc18877f64d2c493ae50c6f81b065ee9beb6->enter($__internal_a5cced26b3ad413eaf4752c2f718dc18877f64d2c493ae50c6f81b065ee9beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e290f521bedf97223d5142fc863e6e6b8cf270d39bbb6350736a4a77b3a30b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e290f521bedf97223d5142fc863e6e6b8cf270d39bbb6350736a4a77b3a30b92->enter($__internal_e290f521bedf97223d5142fc863e6e6b8cf270d39bbb6350736a4a77b3a30b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5cced26b3ad413eaf4752c2f718dc18877f64d2c493ae50c6f81b065ee9beb6->leave($__internal_a5cced26b3ad413eaf4752c2f718dc18877f64d2c493ae50c6f81b065ee9beb6_prof);

        
        $__internal_e290f521bedf97223d5142fc863e6e6b8cf270d39bbb6350736a4a77b3a30b92->leave($__internal_e290f521bedf97223d5142fc863e6e6b8cf270d39bbb6350736a4a77b3a30b92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d728421dbb68c5b32b47e48d51bb22aa6f95163ba7d2b6e213c96296a2992057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d728421dbb68c5b32b47e48d51bb22aa6f95163ba7d2b6e213c96296a2992057->enter($__internal_d728421dbb68c5b32b47e48d51bb22aa6f95163ba7d2b6e213c96296a2992057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f52328caf97fe0c24d3ff094369d5b81f4df3b1888f5c9b48f375a319aa7796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f52328caf97fe0c24d3ff094369d5b81f4df3b1888f5c9b48f375a319aa7796->enter($__internal_1f52328caf97fe0c24d3ff094369d5b81f4df3b1888f5c9b48f375a319aa7796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1f52328caf97fe0c24d3ff094369d5b81f4df3b1888f5c9b48f375a319aa7796->leave($__internal_1f52328caf97fe0c24d3ff094369d5b81f4df3b1888f5c9b48f375a319aa7796_prof);

        
        $__internal_d728421dbb68c5b32b47e48d51bb22aa6f95163ba7d2b6e213c96296a2992057->leave($__internal_d728421dbb68c5b32b47e48d51bb22aa6f95163ba7d2b6e213c96296a2992057_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
