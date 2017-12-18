<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_019eeb3e51a736717b56cc03b97cae99bda11c283ed327f233c7e6c1e3f533f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3ebae302247829e38670f0fb9a865e8b6741c50eab256df64fd1870c153a4453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebae302247829e38670f0fb9a865e8b6741c50eab256df64fd1870c153a4453->enter($__internal_3ebae302247829e38670f0fb9a865e8b6741c50eab256df64fd1870c153a4453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_63cec13ee9c2520ec4789722259193dfd028002ee9abb26b0bbe49cfb354ed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cec13ee9c2520ec4789722259193dfd028002ee9abb26b0bbe49cfb354ed84->enter($__internal_63cec13ee9c2520ec4789722259193dfd028002ee9abb26b0bbe49cfb354ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ebae302247829e38670f0fb9a865e8b6741c50eab256df64fd1870c153a4453->leave($__internal_3ebae302247829e38670f0fb9a865e8b6741c50eab256df64fd1870c153a4453_prof);

        
        $__internal_63cec13ee9c2520ec4789722259193dfd028002ee9abb26b0bbe49cfb354ed84->leave($__internal_63cec13ee9c2520ec4789722259193dfd028002ee9abb26b0bbe49cfb354ed84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff99f7013f6449961b77ab1c1679d2d502bd79c471073d2d13fb1f0300e412f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff99f7013f6449961b77ab1c1679d2d502bd79c471073d2d13fb1f0300e412f7->enter($__internal_ff99f7013f6449961b77ab1c1679d2d502bd79c471073d2d13fb1f0300e412f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f7dcf046408c2aa583e75a76f20889222de81aa6ef09e3666acd59a4bbe899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7dcf046408c2aa583e75a76f20889222de81aa6ef09e3666acd59a4bbe899b->enter($__internal_7f7dcf046408c2aa583e75a76f20889222de81aa6ef09e3666acd59a4bbe899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7f7dcf046408c2aa583e75a76f20889222de81aa6ef09e3666acd59a4bbe899b->leave($__internal_7f7dcf046408c2aa583e75a76f20889222de81aa6ef09e3666acd59a4bbe899b_prof);

        
        $__internal_ff99f7013f6449961b77ab1c1679d2d502bd79c471073d2d13fb1f0300e412f7->leave($__internal_ff99f7013f6449961b77ab1c1679d2d502bd79c471073d2d13fb1f0300e412f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
