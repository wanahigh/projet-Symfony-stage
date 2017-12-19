<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a0f97147cb14d2cbbd6138777e25a3f858365bfc317b359a1e52fa594aa324e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0db26f1ac874b44fa92108656b4af89184382c2b25a5beb53ad21a81af372756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db26f1ac874b44fa92108656b4af89184382c2b25a5beb53ad21a81af372756->enter($__internal_0db26f1ac874b44fa92108656b4af89184382c2b25a5beb53ad21a81af372756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_715eab22eb2ccad781aa64af063cdb1123a1416b15fc749b5018356f824e3295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715eab22eb2ccad781aa64af063cdb1123a1416b15fc749b5018356f824e3295->enter($__internal_715eab22eb2ccad781aa64af063cdb1123a1416b15fc749b5018356f824e3295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db26f1ac874b44fa92108656b4af89184382c2b25a5beb53ad21a81af372756->leave($__internal_0db26f1ac874b44fa92108656b4af89184382c2b25a5beb53ad21a81af372756_prof);

        
        $__internal_715eab22eb2ccad781aa64af063cdb1123a1416b15fc749b5018356f824e3295->leave($__internal_715eab22eb2ccad781aa64af063cdb1123a1416b15fc749b5018356f824e3295_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_437958cf6e6e6dae4884ad41bc8703a43ef954d0f71d7a01cf281ad7d5f12fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437958cf6e6e6dae4884ad41bc8703a43ef954d0f71d7a01cf281ad7d5f12fed->enter($__internal_437958cf6e6e6dae4884ad41bc8703a43ef954d0f71d7a01cf281ad7d5f12fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8026f5ca4544ee484a9c3f15690a21d7748c73b679494b25d70e1a8249542cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8026f5ca4544ee484a9c3f15690a21d7748c73b679494b25d70e1a8249542cfb->enter($__internal_8026f5ca4544ee484a9c3f15690a21d7748c73b679494b25d70e1a8249542cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8026f5ca4544ee484a9c3f15690a21d7748c73b679494b25d70e1a8249542cfb->leave($__internal_8026f5ca4544ee484a9c3f15690a21d7748c73b679494b25d70e1a8249542cfb_prof);

        
        $__internal_437958cf6e6e6dae4884ad41bc8703a43ef954d0f71d7a01cf281ad7d5f12fed->leave($__internal_437958cf6e6e6dae4884ad41bc8703a43ef954d0f71d7a01cf281ad7d5f12fed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
