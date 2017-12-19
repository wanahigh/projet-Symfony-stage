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
        $__internal_1a378184e5082bf33cf3b52faeb92e18e07fd54e1aaeead76f17b6477f294894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a378184e5082bf33cf3b52faeb92e18e07fd54e1aaeead76f17b6477f294894->enter($__internal_1a378184e5082bf33cf3b52faeb92e18e07fd54e1aaeead76f17b6477f294894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_bfd908ad6d42ee0219a409d3ae49cdf64fdfd111909caa309d2cc632dade9520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd908ad6d42ee0219a409d3ae49cdf64fdfd111909caa309d2cc632dade9520->enter($__internal_bfd908ad6d42ee0219a409d3ae49cdf64fdfd111909caa309d2cc632dade9520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a378184e5082bf33cf3b52faeb92e18e07fd54e1aaeead76f17b6477f294894->leave($__internal_1a378184e5082bf33cf3b52faeb92e18e07fd54e1aaeead76f17b6477f294894_prof);

        
        $__internal_bfd908ad6d42ee0219a409d3ae49cdf64fdfd111909caa309d2cc632dade9520->leave($__internal_bfd908ad6d42ee0219a409d3ae49cdf64fdfd111909caa309d2cc632dade9520_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_030320a675cb30b3d1aac74a7b104b75b5eacb0292d70e8056cc4e7f47f3487c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030320a675cb30b3d1aac74a7b104b75b5eacb0292d70e8056cc4e7f47f3487c->enter($__internal_030320a675cb30b3d1aac74a7b104b75b5eacb0292d70e8056cc4e7f47f3487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e3a10f31cc9d4d7da04d9aa53a42e5b30fbe2e7778ec9c9296714f220477877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3a10f31cc9d4d7da04d9aa53a42e5b30fbe2e7778ec9c9296714f220477877->enter($__internal_4e3a10f31cc9d4d7da04d9aa53a42e5b30fbe2e7778ec9c9296714f220477877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4e3a10f31cc9d4d7da04d9aa53a42e5b30fbe2e7778ec9c9296714f220477877->leave($__internal_4e3a10f31cc9d4d7da04d9aa53a42e5b30fbe2e7778ec9c9296714f220477877_prof);

        
        $__internal_030320a675cb30b3d1aac74a7b104b75b5eacb0292d70e8056cc4e7f47f3487c->leave($__internal_030320a675cb30b3d1aac74a7b104b75b5eacb0292d70e8056cc4e7f47f3487c_prof);

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
