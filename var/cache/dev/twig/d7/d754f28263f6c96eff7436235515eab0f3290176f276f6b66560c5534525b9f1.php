<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
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
        $__internal_e7c490c1a5d9a7e89b0ec8fdf7d0d02cb69a6a52841657b35d4984c55266873a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c490c1a5d9a7e89b0ec8fdf7d0d02cb69a6a52841657b35d4984c55266873a->enter($__internal_e7c490c1a5d9a7e89b0ec8fdf7d0d02cb69a6a52841657b35d4984c55266873a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_009b6248a4ee69dffdfe42f05daa647d1b92c110ecb535d773a6d1474947e98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009b6248a4ee69dffdfe42f05daa647d1b92c110ecb535d773a6d1474947e98c->enter($__internal_009b6248a4ee69dffdfe42f05daa647d1b92c110ecb535d773a6d1474947e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c490c1a5d9a7e89b0ec8fdf7d0d02cb69a6a52841657b35d4984c55266873a->leave($__internal_e7c490c1a5d9a7e89b0ec8fdf7d0d02cb69a6a52841657b35d4984c55266873a_prof);

        
        $__internal_009b6248a4ee69dffdfe42f05daa647d1b92c110ecb535d773a6d1474947e98c->leave($__internal_009b6248a4ee69dffdfe42f05daa647d1b92c110ecb535d773a6d1474947e98c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00345b8e7ca1ded7fd7df218820433a225033af6c34b97d7f93f4c64f758ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00345b8e7ca1ded7fd7df218820433a225033af6c34b97d7f93f4c64f758ad0->enter($__internal_a00345b8e7ca1ded7fd7df218820433a225033af6c34b97d7f93f4c64f758ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51ccc1a0cde35ccc5a2210110f04e19fc08ecde9a4722034c7a3a8f62a74289c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ccc1a0cde35ccc5a2210110f04e19fc08ecde9a4722034c7a3a8f62a74289c->enter($__internal_51ccc1a0cde35ccc5a2210110f04e19fc08ecde9a4722034c7a3a8f62a74289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51ccc1a0cde35ccc5a2210110f04e19fc08ecde9a4722034c7a3a8f62a74289c->leave($__internal_51ccc1a0cde35ccc5a2210110f04e19fc08ecde9a4722034c7a3a8f62a74289c_prof);

        
        $__internal_a00345b8e7ca1ded7fd7df218820433a225033af6c34b97d7f93f4c64f758ad0->leave($__internal_a00345b8e7ca1ded7fd7df218820433a225033af6c34b97d7f93f4c64f758ad0_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df52176877a976b77fe7d43d3cc727feb3067aaa4f8ee8cbcd43aebfac92af0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df52176877a976b77fe7d43d3cc727feb3067aaa4f8ee8cbcd43aebfac92af0d->enter($__internal_df52176877a976b77fe7d43d3cc727feb3067aaa4f8ee8cbcd43aebfac92af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7706bc0dd343074989e26d1ef35fc29456c8d7c1aeb5921a861867118599f77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7706bc0dd343074989e26d1ef35fc29456c8d7c1aeb5921a861867118599f77a->enter($__internal_7706bc0dd343074989e26d1ef35fc29456c8d7c1aeb5921a861867118599f77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_7706bc0dd343074989e26d1ef35fc29456c8d7c1aeb5921a861867118599f77a->leave($__internal_7706bc0dd343074989e26d1ef35fc29456c8d7c1aeb5921a861867118599f77a_prof);

        
        $__internal_df52176877a976b77fe7d43d3cc727feb3067aaa4f8ee8cbcd43aebfac92af0d->leave($__internal_df52176877a976b77fe7d43d3cc727feb3067aaa4f8ee8cbcd43aebfac92af0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
