<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ae7737f1e9323df786e530865618857ac2bde043592abba1d1a740ab917afda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae7737f1e9323df786e530865618857ac2bde043592abba1d1a740ab917afda->enter($__internal_5ae7737f1e9323df786e530865618857ac2bde043592abba1d1a740ab917afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_12a78e7f9ccaed20548fd6a54df29681a1fd54d8230fdb9b8cb1488fed0f3c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a78e7f9ccaed20548fd6a54df29681a1fd54d8230fdb9b8cb1488fed0f3c16->enter($__internal_12a78e7f9ccaed20548fd6a54df29681a1fd54d8230fdb9b8cb1488fed0f3c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae7737f1e9323df786e530865618857ac2bde043592abba1d1a740ab917afda->leave($__internal_5ae7737f1e9323df786e530865618857ac2bde043592abba1d1a740ab917afda_prof);

        
        $__internal_12a78e7f9ccaed20548fd6a54df29681a1fd54d8230fdb9b8cb1488fed0f3c16->leave($__internal_12a78e7f9ccaed20548fd6a54df29681a1fd54d8230fdb9b8cb1488fed0f3c16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5b2a471149d5e56cd684459b33f7b1bfc0ed1e863823b9799123dd8d7b925e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b2a471149d5e56cd684459b33f7b1bfc0ed1e863823b9799123dd8d7b925e6->enter($__internal_a5b2a471149d5e56cd684459b33f7b1bfc0ed1e863823b9799123dd8d7b925e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf9047d1f74c9a7550495abea08ba2185684ed2fb4ed318d5b52068142cd6611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9047d1f74c9a7550495abea08ba2185684ed2fb4ed318d5b52068142cd6611->enter($__internal_cf9047d1f74c9a7550495abea08ba2185684ed2fb4ed318d5b52068142cd6611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_cf9047d1f74c9a7550495abea08ba2185684ed2fb4ed318d5b52068142cd6611->leave($__internal_cf9047d1f74c9a7550495abea08ba2185684ed2fb4ed318d5b52068142cd6611_prof);

        
        $__internal_a5b2a471149d5e56cd684459b33f7b1bfc0ed1e863823b9799123dd8d7b925e6->leave($__internal_a5b2a471149d5e56cd684459b33f7b1bfc0ed1e863823b9799123dd8d7b925e6_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17c945023633f1cccc5e39a2b42cc2ba34b20526d268ffc4ef321d86331d3cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c945023633f1cccc5e39a2b42cc2ba34b20526d268ffc4ef321d86331d3cac->enter($__internal_17c945023633f1cccc5e39a2b42cc2ba34b20526d268ffc4ef321d86331d3cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0f9cae6c9f295b24d44db268067900c0b2d74c26a736fa864ad8a51780ce2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f9cae6c9f295b24d44db268067900c0b2d74c26a736fa864ad8a51780ce2a3->enter($__internal_f0f9cae6c9f295b24d44db268067900c0b2d74c26a736fa864ad8a51780ce2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_f0f9cae6c9f295b24d44db268067900c0b2d74c26a736fa864ad8a51780ce2a3->leave($__internal_f0f9cae6c9f295b24d44db268067900c0b2d74c26a736fa864ad8a51780ce2a3_prof);

        
        $__internal_17c945023633f1cccc5e39a2b42cc2ba34b20526d268ffc4ef321d86331d3cac->leave($__internal_17c945023633f1cccc5e39a2b42cc2ba34b20526d268ffc4ef321d86331d3cac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
