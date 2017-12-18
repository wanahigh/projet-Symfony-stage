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
        $__internal_b06ccb93c29cb816099aa395787cb2e53f3b07f9dfe5536020c3e103dc30f9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06ccb93c29cb816099aa395787cb2e53f3b07f9dfe5536020c3e103dc30f9dc->enter($__internal_b06ccb93c29cb816099aa395787cb2e53f3b07f9dfe5536020c3e103dc30f9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_4e9f91554e27314e8f3720bdff414a0e2e44f0a6b6b4cc9963c3e52d85bec4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9f91554e27314e8f3720bdff414a0e2e44f0a6b6b4cc9963c3e52d85bec4d0->enter($__internal_4e9f91554e27314e8f3720bdff414a0e2e44f0a6b6b4cc9963c3e52d85bec4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06ccb93c29cb816099aa395787cb2e53f3b07f9dfe5536020c3e103dc30f9dc->leave($__internal_b06ccb93c29cb816099aa395787cb2e53f3b07f9dfe5536020c3e103dc30f9dc_prof);

        
        $__internal_4e9f91554e27314e8f3720bdff414a0e2e44f0a6b6b4cc9963c3e52d85bec4d0->leave($__internal_4e9f91554e27314e8f3720bdff414a0e2e44f0a6b6b4cc9963c3e52d85bec4d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93e743c61805e6475b9f4203cec63d4fb81230da10fd6322b81bced86e49cc89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e743c61805e6475b9f4203cec63d4fb81230da10fd6322b81bced86e49cc89->enter($__internal_93e743c61805e6475b9f4203cec63d4fb81230da10fd6322b81bced86e49cc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3982f9dee5afeff8aabeabed63c37e4aa2981ff42dd7faebc17a571207d257a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3982f9dee5afeff8aabeabed63c37e4aa2981ff42dd7faebc17a571207d257a5->enter($__internal_3982f9dee5afeff8aabeabed63c37e4aa2981ff42dd7faebc17a571207d257a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3982f9dee5afeff8aabeabed63c37e4aa2981ff42dd7faebc17a571207d257a5->leave($__internal_3982f9dee5afeff8aabeabed63c37e4aa2981ff42dd7faebc17a571207d257a5_prof);

        
        $__internal_93e743c61805e6475b9f4203cec63d4fb81230da10fd6322b81bced86e49cc89->leave($__internal_93e743c61805e6475b9f4203cec63d4fb81230da10fd6322b81bced86e49cc89_prof);

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
