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
        $__internal_489e4ae1335a70d21b2015ede97734eb1497b46fe2f561ced65f26a335807444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489e4ae1335a70d21b2015ede97734eb1497b46fe2f561ced65f26a335807444->enter($__internal_489e4ae1335a70d21b2015ede97734eb1497b46fe2f561ced65f26a335807444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_929bfbd6726d49086e487bf5982cc5b4827d74dfd3d0a12b69145e91d43088ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929bfbd6726d49086e487bf5982cc5b4827d74dfd3d0a12b69145e91d43088ce->enter($__internal_929bfbd6726d49086e487bf5982cc5b4827d74dfd3d0a12b69145e91d43088ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489e4ae1335a70d21b2015ede97734eb1497b46fe2f561ced65f26a335807444->leave($__internal_489e4ae1335a70d21b2015ede97734eb1497b46fe2f561ced65f26a335807444_prof);

        
        $__internal_929bfbd6726d49086e487bf5982cc5b4827d74dfd3d0a12b69145e91d43088ce->leave($__internal_929bfbd6726d49086e487bf5982cc5b4827d74dfd3d0a12b69145e91d43088ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab7a8db997cd1f4b20d8345f9302dcba5ea7e1ee4398144c67b05503e21d6bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7a8db997cd1f4b20d8345f9302dcba5ea7e1ee4398144c67b05503e21d6bcf->enter($__internal_ab7a8db997cd1f4b20d8345f9302dcba5ea7e1ee4398144c67b05503e21d6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_01cc117d26b6961e0d7e70d98d7616fb783daf5f22a37a008020581106cd73d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cc117d26b6961e0d7e70d98d7616fb783daf5f22a37a008020581106cd73d7->enter($__internal_01cc117d26b6961e0d7e70d98d7616fb783daf5f22a37a008020581106cd73d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_01cc117d26b6961e0d7e70d98d7616fb783daf5f22a37a008020581106cd73d7->leave($__internal_01cc117d26b6961e0d7e70d98d7616fb783daf5f22a37a008020581106cd73d7_prof);

        
        $__internal_ab7a8db997cd1f4b20d8345f9302dcba5ea7e1ee4398144c67b05503e21d6bcf->leave($__internal_ab7a8db997cd1f4b20d8345f9302dcba5ea7e1ee4398144c67b05503e21d6bcf_prof);

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
