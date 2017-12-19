<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fda484434dcbd297f396af250d5eca64ea508bdc204290dd81fa0bfd2c51a207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_dc2606f86109a5a022a50e1c56ead588108152e1d47cad5e358400ca85113623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2606f86109a5a022a50e1c56ead588108152e1d47cad5e358400ca85113623->enter($__internal_dc2606f86109a5a022a50e1c56ead588108152e1d47cad5e358400ca85113623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3534bc7eae9d77e5aae8b66113c612811b966801da1d912203f4334f0ed9a4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3534bc7eae9d77e5aae8b66113c612811b966801da1d912203f4334f0ed9a4d7->enter($__internal_3534bc7eae9d77e5aae8b66113c612811b966801da1d912203f4334f0ed9a4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2606f86109a5a022a50e1c56ead588108152e1d47cad5e358400ca85113623->leave($__internal_dc2606f86109a5a022a50e1c56ead588108152e1d47cad5e358400ca85113623_prof);

        
        $__internal_3534bc7eae9d77e5aae8b66113c612811b966801da1d912203f4334f0ed9a4d7->leave($__internal_3534bc7eae9d77e5aae8b66113c612811b966801da1d912203f4334f0ed9a4d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c880b0794a42d75eb1163519e77b5f4b6638f136127c5fc4a3727422cf00d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c880b0794a42d75eb1163519e77b5f4b6638f136127c5fc4a3727422cf00d1d->enter($__internal_0c880b0794a42d75eb1163519e77b5f4b6638f136127c5fc4a3727422cf00d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2d237a8548f8fe84cd84c44a4911ebc8c9bfdc6b9ceb0fbe558ab8727ea0c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d237a8548f8fe84cd84c44a4911ebc8c9bfdc6b9ceb0fbe558ab8727ea0c4c->enter($__internal_a2d237a8548f8fe84cd84c44a4911ebc8c9bfdc6b9ceb0fbe558ab8727ea0c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a2d237a8548f8fe84cd84c44a4911ebc8c9bfdc6b9ceb0fbe558ab8727ea0c4c->leave($__internal_a2d237a8548f8fe84cd84c44a4911ebc8c9bfdc6b9ceb0fbe558ab8727ea0c4c_prof);

        
        $__internal_0c880b0794a42d75eb1163519e77b5f4b6638f136127c5fc4a3727422cf00d1d->leave($__internal_0c880b0794a42d75eb1163519e77b5f4b6638f136127c5fc4a3727422cf00d1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
