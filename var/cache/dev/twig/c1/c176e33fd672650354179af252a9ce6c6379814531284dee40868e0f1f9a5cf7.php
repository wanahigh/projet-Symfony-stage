<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_55c88b9f65861744c88b2be7fc5f2edd9b88e5bbdfcf50145ce52f174b8871e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c14259d288df85f01eadb25fa0028e952f355c3c681afd1701b5665e6093fddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14259d288df85f01eadb25fa0028e952f355c3c681afd1701b5665e6093fddc->enter($__internal_c14259d288df85f01eadb25fa0028e952f355c3c681afd1701b5665e6093fddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_fc41235527e1ef47262697b7aa42fd8a5f04d2b7f0acfc734a44441d5a6826b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc41235527e1ef47262697b7aa42fd8a5f04d2b7f0acfc734a44441d5a6826b3->enter($__internal_fc41235527e1ef47262697b7aa42fd8a5f04d2b7f0acfc734a44441d5a6826b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14259d288df85f01eadb25fa0028e952f355c3c681afd1701b5665e6093fddc->leave($__internal_c14259d288df85f01eadb25fa0028e952f355c3c681afd1701b5665e6093fddc_prof);

        
        $__internal_fc41235527e1ef47262697b7aa42fd8a5f04d2b7f0acfc734a44441d5a6826b3->leave($__internal_fc41235527e1ef47262697b7aa42fd8a5f04d2b7f0acfc734a44441d5a6826b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b65a5ef8ef4e0ebd31da94a129a5ead71b2c1ad3117c68010c82c831934a455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b65a5ef8ef4e0ebd31da94a129a5ead71b2c1ad3117c68010c82c831934a455->enter($__internal_4b65a5ef8ef4e0ebd31da94a129a5ead71b2c1ad3117c68010c82c831934a455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc46683771a99a158a36a8e5dab3e9425e1c053ded4038f6ba8af73ac139ac33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc46683771a99a158a36a8e5dab3e9425e1c053ded4038f6ba8af73ac139ac33->enter($__internal_fc46683771a99a158a36a8e5dab3e9425e1c053ded4038f6ba8af73ac139ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fc46683771a99a158a36a8e5dab3e9425e1c053ded4038f6ba8af73ac139ac33->leave($__internal_fc46683771a99a158a36a8e5dab3e9425e1c053ded4038f6ba8af73ac139ac33_prof);

        
        $__internal_4b65a5ef8ef4e0ebd31da94a129a5ead71b2c1ad3117c68010c82c831934a455->leave($__internal_4b65a5ef8ef4e0ebd31da94a129a5ead71b2c1ad3117c68010c82c831934a455_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
