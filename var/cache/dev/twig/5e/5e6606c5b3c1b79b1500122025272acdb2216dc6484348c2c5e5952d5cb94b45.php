<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d9ec4fbf45c4fa33454caacd09978d4775285446bbe83ee326b4d409c9067741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a724af207c77007e01ea3979b44d430c202d4aab19549b4acf29f753a772716e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a724af207c77007e01ea3979b44d430c202d4aab19549b4acf29f753a772716e->enter($__internal_a724af207c77007e01ea3979b44d430c202d4aab19549b4acf29f753a772716e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9e54805c380a9419c7a565cbff5b3c09a9c9e95e13ea4451923d681781656424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e54805c380a9419c7a565cbff5b3c09a9c9e95e13ea4451923d681781656424->enter($__internal_9e54805c380a9419c7a565cbff5b3c09a9c9e95e13ea4451923d681781656424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a724af207c77007e01ea3979b44d430c202d4aab19549b4acf29f753a772716e->leave($__internal_a724af207c77007e01ea3979b44d430c202d4aab19549b4acf29f753a772716e_prof);

        
        $__internal_9e54805c380a9419c7a565cbff5b3c09a9c9e95e13ea4451923d681781656424->leave($__internal_9e54805c380a9419c7a565cbff5b3c09a9c9e95e13ea4451923d681781656424_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0afdd18ddd4a00f5e08068769a6314cadf503bacec40f514416fd883bf6ea74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afdd18ddd4a00f5e08068769a6314cadf503bacec40f514416fd883bf6ea74b->enter($__internal_0afdd18ddd4a00f5e08068769a6314cadf503bacec40f514416fd883bf6ea74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e8e88375f0d265cfa35418ce5592e59fc5a82201b7a4a1594268cb283b8a531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8e88375f0d265cfa35418ce5592e59fc5a82201b7a4a1594268cb283b8a531->enter($__internal_5e8e88375f0d265cfa35418ce5592e59fc5a82201b7a4a1594268cb283b8a531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5e8e88375f0d265cfa35418ce5592e59fc5a82201b7a4a1594268cb283b8a531->leave($__internal_5e8e88375f0d265cfa35418ce5592e59fc5a82201b7a4a1594268cb283b8a531_prof);

        
        $__internal_0afdd18ddd4a00f5e08068769a6314cadf503bacec40f514416fd883bf6ea74b->leave($__internal_0afdd18ddd4a00f5e08068769a6314cadf503bacec40f514416fd883bf6ea74b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
