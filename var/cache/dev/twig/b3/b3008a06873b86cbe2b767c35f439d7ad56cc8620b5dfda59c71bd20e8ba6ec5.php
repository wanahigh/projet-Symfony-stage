<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c3b43d1aba072198af01ccd2a91fb5771e88544083c5ecab79d8949b63a92f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6353144216f0f698c0e90afa5b32f4c24b0149d8dadd53591990711cf0b26d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6353144216f0f698c0e90afa5b32f4c24b0149d8dadd53591990711cf0b26d99->enter($__internal_6353144216f0f698c0e90afa5b32f4c24b0149d8dadd53591990711cf0b26d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3d93c1999717fb09eafe47543aa9869f4455f03754437e101094616691eeafc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d93c1999717fb09eafe47543aa9869f4455f03754437e101094616691eeafc3->enter($__internal_3d93c1999717fb09eafe47543aa9869f4455f03754437e101094616691eeafc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6353144216f0f698c0e90afa5b32f4c24b0149d8dadd53591990711cf0b26d99->leave($__internal_6353144216f0f698c0e90afa5b32f4c24b0149d8dadd53591990711cf0b26d99_prof);

        
        $__internal_3d93c1999717fb09eafe47543aa9869f4455f03754437e101094616691eeafc3->leave($__internal_3d93c1999717fb09eafe47543aa9869f4455f03754437e101094616691eeafc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6647cfeeceb769dbbb73aaab63370a943f018221f9f908f34e51bace2edbf531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6647cfeeceb769dbbb73aaab63370a943f018221f9f908f34e51bace2edbf531->enter($__internal_6647cfeeceb769dbbb73aaab63370a943f018221f9f908f34e51bace2edbf531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0e02981fc2d431c345cc4c98b358dc6dd95b2006b6d9a8042a18ba1bf4a49d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e02981fc2d431c345cc4c98b358dc6dd95b2006b6d9a8042a18ba1bf4a49d4->enter($__internal_d0e02981fc2d431c345cc4c98b358dc6dd95b2006b6d9a8042a18ba1bf4a49d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d0e02981fc2d431c345cc4c98b358dc6dd95b2006b6d9a8042a18ba1bf4a49d4->leave($__internal_d0e02981fc2d431c345cc4c98b358dc6dd95b2006b6d9a8042a18ba1bf4a49d4_prof);

        
        $__internal_6647cfeeceb769dbbb73aaab63370a943f018221f9f908f34e51bace2edbf531->leave($__internal_6647cfeeceb769dbbb73aaab63370a943f018221f9f908f34e51bace2edbf531_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
