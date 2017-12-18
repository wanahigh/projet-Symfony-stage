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
        $__internal_8c9d688e7bfc7e483efb925d82a81c36d2de28af4fd0b8c5ab602a1535edb86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9d688e7bfc7e483efb925d82a81c36d2de28af4fd0b8c5ab602a1535edb86e->enter($__internal_8c9d688e7bfc7e483efb925d82a81c36d2de28af4fd0b8c5ab602a1535edb86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e17227befa7fdf37440d3c031304e79049368c4a5ef4ee7cc1edafeae2b3ed8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17227befa7fdf37440d3c031304e79049368c4a5ef4ee7cc1edafeae2b3ed8b->enter($__internal_e17227befa7fdf37440d3c031304e79049368c4a5ef4ee7cc1edafeae2b3ed8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9d688e7bfc7e483efb925d82a81c36d2de28af4fd0b8c5ab602a1535edb86e->leave($__internal_8c9d688e7bfc7e483efb925d82a81c36d2de28af4fd0b8c5ab602a1535edb86e_prof);

        
        $__internal_e17227befa7fdf37440d3c031304e79049368c4a5ef4ee7cc1edafeae2b3ed8b->leave($__internal_e17227befa7fdf37440d3c031304e79049368c4a5ef4ee7cc1edafeae2b3ed8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fac53eb3242016aed840cbdd23df77e81506795e7757ff903e6079b4506cd6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac53eb3242016aed840cbdd23df77e81506795e7757ff903e6079b4506cd6b6->enter($__internal_fac53eb3242016aed840cbdd23df77e81506795e7757ff903e6079b4506cd6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20e402f2dea3613269fb065eb21f0c457edfb517e1741dbe49715ec7a28e52da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e402f2dea3613269fb065eb21f0c457edfb517e1741dbe49715ec7a28e52da->enter($__internal_20e402f2dea3613269fb065eb21f0c457edfb517e1741dbe49715ec7a28e52da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_20e402f2dea3613269fb065eb21f0c457edfb517e1741dbe49715ec7a28e52da->leave($__internal_20e402f2dea3613269fb065eb21f0c457edfb517e1741dbe49715ec7a28e52da_prof);

        
        $__internal_fac53eb3242016aed840cbdd23df77e81506795e7757ff903e6079b4506cd6b6->leave($__internal_fac53eb3242016aed840cbdd23df77e81506795e7757ff903e6079b4506cd6b6_prof);

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
