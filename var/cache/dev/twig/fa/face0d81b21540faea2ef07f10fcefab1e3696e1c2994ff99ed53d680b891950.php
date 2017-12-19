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
        $__internal_6f74a7a630126420b2d6d4aca644125f5eae396ba87ffb1096f37ff277ddc77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f74a7a630126420b2d6d4aca644125f5eae396ba87ffb1096f37ff277ddc77d->enter($__internal_6f74a7a630126420b2d6d4aca644125f5eae396ba87ffb1096f37ff277ddc77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_4702ceb279dc4cf7b32870d6a0ccec25ece86b39ccc63a710e2b90672b08ccbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4702ceb279dc4cf7b32870d6a0ccec25ece86b39ccc63a710e2b90672b08ccbc->enter($__internal_4702ceb279dc4cf7b32870d6a0ccec25ece86b39ccc63a710e2b90672b08ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f74a7a630126420b2d6d4aca644125f5eae396ba87ffb1096f37ff277ddc77d->leave($__internal_6f74a7a630126420b2d6d4aca644125f5eae396ba87ffb1096f37ff277ddc77d_prof);

        
        $__internal_4702ceb279dc4cf7b32870d6a0ccec25ece86b39ccc63a710e2b90672b08ccbc->leave($__internal_4702ceb279dc4cf7b32870d6a0ccec25ece86b39ccc63a710e2b90672b08ccbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35e663211572f5e0db53e87560275933e58c8c1d0438f8023407fd0f236586e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e663211572f5e0db53e87560275933e58c8c1d0438f8023407fd0f236586e7->enter($__internal_35e663211572f5e0db53e87560275933e58c8c1d0438f8023407fd0f236586e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_490a98bc24ff75e13ba258f7c6947efb48524801feeea727df6182c828654157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a98bc24ff75e13ba258f7c6947efb48524801feeea727df6182c828654157->enter($__internal_490a98bc24ff75e13ba258f7c6947efb48524801feeea727df6182c828654157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_490a98bc24ff75e13ba258f7c6947efb48524801feeea727df6182c828654157->leave($__internal_490a98bc24ff75e13ba258f7c6947efb48524801feeea727df6182c828654157_prof);

        
        $__internal_35e663211572f5e0db53e87560275933e58c8c1d0438f8023407fd0f236586e7->leave($__internal_35e663211572f5e0db53e87560275933e58c8c1d0438f8023407fd0f236586e7_prof);

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
