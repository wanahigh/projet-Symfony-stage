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
        $__internal_35349dc6c207bff8a0d1c405cb8c42a3ebc28a07f9111ea24c981cfbc173a428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35349dc6c207bff8a0d1c405cb8c42a3ebc28a07f9111ea24c981cfbc173a428->enter($__internal_35349dc6c207bff8a0d1c405cb8c42a3ebc28a07f9111ea24c981cfbc173a428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3d384995511757b5e8105b70ec0176aa613ed1386372c7c3c30e6bc7d6ee5914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d384995511757b5e8105b70ec0176aa613ed1386372c7c3c30e6bc7d6ee5914->enter($__internal_3d384995511757b5e8105b70ec0176aa613ed1386372c7c3c30e6bc7d6ee5914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35349dc6c207bff8a0d1c405cb8c42a3ebc28a07f9111ea24c981cfbc173a428->leave($__internal_35349dc6c207bff8a0d1c405cb8c42a3ebc28a07f9111ea24c981cfbc173a428_prof);

        
        $__internal_3d384995511757b5e8105b70ec0176aa613ed1386372c7c3c30e6bc7d6ee5914->leave($__internal_3d384995511757b5e8105b70ec0176aa613ed1386372c7c3c30e6bc7d6ee5914_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d74c2845e7800c26d23b122db3b29d90495818d70923bcb9675246d17b53c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d74c2845e7800c26d23b122db3b29d90495818d70923bcb9675246d17b53c93->enter($__internal_4d74c2845e7800c26d23b122db3b29d90495818d70923bcb9675246d17b53c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4877f2f2ae006634ad40658c33259c49a4201070865d7843187a43510c6b9b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4877f2f2ae006634ad40658c33259c49a4201070865d7843187a43510c6b9b70->enter($__internal_4877f2f2ae006634ad40658c33259c49a4201070865d7843187a43510c6b9b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4877f2f2ae006634ad40658c33259c49a4201070865d7843187a43510c6b9b70->leave($__internal_4877f2f2ae006634ad40658c33259c49a4201070865d7843187a43510c6b9b70_prof);

        
        $__internal_4d74c2845e7800c26d23b122db3b29d90495818d70923bcb9675246d17b53c93->leave($__internal_4d74c2845e7800c26d23b122db3b29d90495818d70923bcb9675246d17b53c93_prof);

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
