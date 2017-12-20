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
        $__internal_50691d65ee4ac51d0bababce8bad3bc4f0adda4873528bdf9bd5f02f2d1909c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50691d65ee4ac51d0bababce8bad3bc4f0adda4873528bdf9bd5f02f2d1909c3->enter($__internal_50691d65ee4ac51d0bababce8bad3bc4f0adda4873528bdf9bd5f02f2d1909c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_c5bec56f9a5657ddebbc043fe5367005117299f8408bfccc87ab6818d40949ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bec56f9a5657ddebbc043fe5367005117299f8408bfccc87ab6818d40949ea->enter($__internal_c5bec56f9a5657ddebbc043fe5367005117299f8408bfccc87ab6818d40949ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50691d65ee4ac51d0bababce8bad3bc4f0adda4873528bdf9bd5f02f2d1909c3->leave($__internal_50691d65ee4ac51d0bababce8bad3bc4f0adda4873528bdf9bd5f02f2d1909c3_prof);

        
        $__internal_c5bec56f9a5657ddebbc043fe5367005117299f8408bfccc87ab6818d40949ea->leave($__internal_c5bec56f9a5657ddebbc043fe5367005117299f8408bfccc87ab6818d40949ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97920124dbb7ec114ab872a80389c098bc4198771d9a5c9e44fb0338ac7f7419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97920124dbb7ec114ab872a80389c098bc4198771d9a5c9e44fb0338ac7f7419->enter($__internal_97920124dbb7ec114ab872a80389c098bc4198771d9a5c9e44fb0338ac7f7419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fae02126dc60066cac4ee690a105d86a31607cb464f0f7a9945f4a8cb27343f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fae02126dc60066cac4ee690a105d86a31607cb464f0f7a9945f4a8cb27343f->enter($__internal_8fae02126dc60066cac4ee690a105d86a31607cb464f0f7a9945f4a8cb27343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8fae02126dc60066cac4ee690a105d86a31607cb464f0f7a9945f4a8cb27343f->leave($__internal_8fae02126dc60066cac4ee690a105d86a31607cb464f0f7a9945f4a8cb27343f_prof);

        
        $__internal_97920124dbb7ec114ab872a80389c098bc4198771d9a5c9e44fb0338ac7f7419->leave($__internal_97920124dbb7ec114ab872a80389c098bc4198771d9a5c9e44fb0338ac7f7419_prof);

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
