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
        $__internal_e106e19204b124154c4e9ae96a8404e111f7736f4a4ce0ad2c46657890e192f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e106e19204b124154c4e9ae96a8404e111f7736f4a4ce0ad2c46657890e192f5->enter($__internal_e106e19204b124154c4e9ae96a8404e111f7736f4a4ce0ad2c46657890e192f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b7b761556b904150b0fc45e19fd47928c1b9f7c2164c5c53ba2b322f9903bdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b761556b904150b0fc45e19fd47928c1b9f7c2164c5c53ba2b322f9903bdd1->enter($__internal_b7b761556b904150b0fc45e19fd47928c1b9f7c2164c5c53ba2b322f9903bdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e106e19204b124154c4e9ae96a8404e111f7736f4a4ce0ad2c46657890e192f5->leave($__internal_e106e19204b124154c4e9ae96a8404e111f7736f4a4ce0ad2c46657890e192f5_prof);

        
        $__internal_b7b761556b904150b0fc45e19fd47928c1b9f7c2164c5c53ba2b322f9903bdd1->leave($__internal_b7b761556b904150b0fc45e19fd47928c1b9f7c2164c5c53ba2b322f9903bdd1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04ab569437349bc304c6c104391829278867ba21d1da4677da10056f9040c1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ab569437349bc304c6c104391829278867ba21d1da4677da10056f9040c1ce->enter($__internal_04ab569437349bc304c6c104391829278867ba21d1da4677da10056f9040c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f192d8a992f5e6cca9cfecbf5d6de5022ceb40e9a63aed8d41df765f83207c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f192d8a992f5e6cca9cfecbf5d6de5022ceb40e9a63aed8d41df765f83207c79->enter($__internal_f192d8a992f5e6cca9cfecbf5d6de5022ceb40e9a63aed8d41df765f83207c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f192d8a992f5e6cca9cfecbf5d6de5022ceb40e9a63aed8d41df765f83207c79->leave($__internal_f192d8a992f5e6cca9cfecbf5d6de5022ceb40e9a63aed8d41df765f83207c79_prof);

        
        $__internal_04ab569437349bc304c6c104391829278867ba21d1da4677da10056f9040c1ce->leave($__internal_04ab569437349bc304c6c104391829278867ba21d1da4677da10056f9040c1ce_prof);

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
