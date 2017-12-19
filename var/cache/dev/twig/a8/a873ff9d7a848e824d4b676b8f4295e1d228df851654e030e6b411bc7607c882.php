<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3e55f33fa5d23c173cda8be074f71c3c1728279b620075187035b9d2f68c1012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_aaed74dab4b92a46329daf9e77a43d2f7e2ad62d3a2eeb08aee5a12b81ea7dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaed74dab4b92a46329daf9e77a43d2f7e2ad62d3a2eeb08aee5a12b81ea7dda->enter($__internal_aaed74dab4b92a46329daf9e77a43d2f7e2ad62d3a2eeb08aee5a12b81ea7dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cdc1497adf4afd1fb6b8ef4ceac54b78f52a935a51807c534e2991483a10eb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc1497adf4afd1fb6b8ef4ceac54b78f52a935a51807c534e2991483a10eb39->enter($__internal_cdc1497adf4afd1fb6b8ef4ceac54b78f52a935a51807c534e2991483a10eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaed74dab4b92a46329daf9e77a43d2f7e2ad62d3a2eeb08aee5a12b81ea7dda->leave($__internal_aaed74dab4b92a46329daf9e77a43d2f7e2ad62d3a2eeb08aee5a12b81ea7dda_prof);

        
        $__internal_cdc1497adf4afd1fb6b8ef4ceac54b78f52a935a51807c534e2991483a10eb39->leave($__internal_cdc1497adf4afd1fb6b8ef4ceac54b78f52a935a51807c534e2991483a10eb39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfeef567fbae65bb1c7780c3b8b7b56453f71866851f84086ee43d665373a247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeef567fbae65bb1c7780c3b8b7b56453f71866851f84086ee43d665373a247->enter($__internal_bfeef567fbae65bb1c7780c3b8b7b56453f71866851f84086ee43d665373a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2208854ab81df7b8c396cf4049d123a475260b7d242fa8227d98a3a2bb62f2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2208854ab81df7b8c396cf4049d123a475260b7d242fa8227d98a3a2bb62f2d2->enter($__internal_2208854ab81df7b8c396cf4049d123a475260b7d242fa8227d98a3a2bb62f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2208854ab81df7b8c396cf4049d123a475260b7d242fa8227d98a3a2bb62f2d2->leave($__internal_2208854ab81df7b8c396cf4049d123a475260b7d242fa8227d98a3a2bb62f2d2_prof);

        
        $__internal_bfeef567fbae65bb1c7780c3b8b7b56453f71866851f84086ee43d665373a247->leave($__internal_bfeef567fbae65bb1c7780c3b8b7b56453f71866851f84086ee43d665373a247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
