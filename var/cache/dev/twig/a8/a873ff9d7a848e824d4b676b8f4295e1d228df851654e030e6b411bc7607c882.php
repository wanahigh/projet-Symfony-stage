<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3e55f33fa5d23c173cda8be074f71c3c1728279b620075187035b9d2f68c1012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e60e10f170e78124f2272e50295be63d26105c21c5889f9548923fc4da7ae802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60e10f170e78124f2272e50295be63d26105c21c5889f9548923fc4da7ae802->enter($__internal_e60e10f170e78124f2272e50295be63d26105c21c5889f9548923fc4da7ae802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_40c377f9fa820cb0a362f71a2f60261651342feca3a0a5d23d29380c28afe746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c377f9fa820cb0a362f71a2f60261651342feca3a0a5d23d29380c28afe746->enter($__internal_40c377f9fa820cb0a362f71a2f60261651342feca3a0a5d23d29380c28afe746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60e10f170e78124f2272e50295be63d26105c21c5889f9548923fc4da7ae802->leave($__internal_e60e10f170e78124f2272e50295be63d26105c21c5889f9548923fc4da7ae802_prof);

        
        $__internal_40c377f9fa820cb0a362f71a2f60261651342feca3a0a5d23d29380c28afe746->leave($__internal_40c377f9fa820cb0a362f71a2f60261651342feca3a0a5d23d29380c28afe746_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b44f99037c77acc9d8ba88d1ee6b89ce01a3a4a89c4e6c89880ead371f66c2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44f99037c77acc9d8ba88d1ee6b89ce01a3a4a89c4e6c89880ead371f66c2c7->enter($__internal_b44f99037c77acc9d8ba88d1ee6b89ce01a3a4a89c4e6c89880ead371f66c2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c2a179766d35df6ce3422f04caf44239685e1c95de09821c1d1e4159f21a99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2a179766d35df6ce3422f04caf44239685e1c95de09821c1d1e4159f21a99d->enter($__internal_0c2a179766d35df6ce3422f04caf44239685e1c95de09821c1d1e4159f21a99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0c2a179766d35df6ce3422f04caf44239685e1c95de09821c1d1e4159f21a99d->leave($__internal_0c2a179766d35df6ce3422f04caf44239685e1c95de09821c1d1e4159f21a99d_prof);

        
        $__internal_b44f99037c77acc9d8ba88d1ee6b89ce01a3a4a89c4e6c89880ead371f66c2c7->leave($__internal_b44f99037c77acc9d8ba88d1ee6b89ce01a3a4a89c4e6c89880ead371f66c2c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
