<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9a6b9b5e83a17ca65be4bc43c88d71e9aa829734cfbe026ed92852496f4c4ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_89752ed555eaee95975d5ee4ffe22ad0633bcfa8ea004abf70c834f5b5246794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89752ed555eaee95975d5ee4ffe22ad0633bcfa8ea004abf70c834f5b5246794->enter($__internal_89752ed555eaee95975d5ee4ffe22ad0633bcfa8ea004abf70c834f5b5246794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5b06dd1fb7cec87cfff5331135661c28b693f2df3ff7ea18ddacaee613d1fb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b06dd1fb7cec87cfff5331135661c28b693f2df3ff7ea18ddacaee613d1fb9c->enter($__internal_5b06dd1fb7cec87cfff5331135661c28b693f2df3ff7ea18ddacaee613d1fb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89752ed555eaee95975d5ee4ffe22ad0633bcfa8ea004abf70c834f5b5246794->leave($__internal_89752ed555eaee95975d5ee4ffe22ad0633bcfa8ea004abf70c834f5b5246794_prof);

        
        $__internal_5b06dd1fb7cec87cfff5331135661c28b693f2df3ff7ea18ddacaee613d1fb9c->leave($__internal_5b06dd1fb7cec87cfff5331135661c28b693f2df3ff7ea18ddacaee613d1fb9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad6e45db2cc65002f079b1e6bf8f08a3d3dd9141579eae34d0b149be3827801f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6e45db2cc65002f079b1e6bf8f08a3d3dd9141579eae34d0b149be3827801f->enter($__internal_ad6e45db2cc65002f079b1e6bf8f08a3d3dd9141579eae34d0b149be3827801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab547b998c8f3a7127fddc599f73cf6c1a6070ae41f731cc2cc0279bdf233c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab547b998c8f3a7127fddc599f73cf6c1a6070ae41f731cc2cc0279bdf233c41->enter($__internal_ab547b998c8f3a7127fddc599f73cf6c1a6070ae41f731cc2cc0279bdf233c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ab547b998c8f3a7127fddc599f73cf6c1a6070ae41f731cc2cc0279bdf233c41->leave($__internal_ab547b998c8f3a7127fddc599f73cf6c1a6070ae41f731cc2cc0279bdf233c41_prof);

        
        $__internal_ad6e45db2cc65002f079b1e6bf8f08a3d3dd9141579eae34d0b149be3827801f->leave($__internal_ad6e45db2cc65002f079b1e6bf8f08a3d3dd9141579eae34d0b149be3827801f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
