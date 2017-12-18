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
        $__internal_95b395983c27a7575e66063ce4c9b5a4df11b35bea6aa3e54e61d3809ad811f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b395983c27a7575e66063ce4c9b5a4df11b35bea6aa3e54e61d3809ad811f9->enter($__internal_95b395983c27a7575e66063ce4c9b5a4df11b35bea6aa3e54e61d3809ad811f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3fbd3e7fa26196b16e254ae8ccf7868f806e2ba2e0fe93d2430f87a41f503f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbd3e7fa26196b16e254ae8ccf7868f806e2ba2e0fe93d2430f87a41f503f1b->enter($__internal_3fbd3e7fa26196b16e254ae8ccf7868f806e2ba2e0fe93d2430f87a41f503f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b395983c27a7575e66063ce4c9b5a4df11b35bea6aa3e54e61d3809ad811f9->leave($__internal_95b395983c27a7575e66063ce4c9b5a4df11b35bea6aa3e54e61d3809ad811f9_prof);

        
        $__internal_3fbd3e7fa26196b16e254ae8ccf7868f806e2ba2e0fe93d2430f87a41f503f1b->leave($__internal_3fbd3e7fa26196b16e254ae8ccf7868f806e2ba2e0fe93d2430f87a41f503f1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38059cf3f182fbe5a734ba39ec9432174fc719ab822cb8974deca1751d25237d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38059cf3f182fbe5a734ba39ec9432174fc719ab822cb8974deca1751d25237d->enter($__internal_38059cf3f182fbe5a734ba39ec9432174fc719ab822cb8974deca1751d25237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_885b9843827ee01875011ef438958110f10787ea93011502edfa977d18e63c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885b9843827ee01875011ef438958110f10787ea93011502edfa977d18e63c00->enter($__internal_885b9843827ee01875011ef438958110f10787ea93011502edfa977d18e63c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_885b9843827ee01875011ef438958110f10787ea93011502edfa977d18e63c00->leave($__internal_885b9843827ee01875011ef438958110f10787ea93011502edfa977d18e63c00_prof);

        
        $__internal_38059cf3f182fbe5a734ba39ec9432174fc719ab822cb8974deca1751d25237d->leave($__internal_38059cf3f182fbe5a734ba39ec9432174fc719ab822cb8974deca1751d25237d_prof);

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
