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
        $__internal_567be091811a7d5383afb4ca6e059681ec9cb1ee1b664ce3136494471ed1b388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567be091811a7d5383afb4ca6e059681ec9cb1ee1b664ce3136494471ed1b388->enter($__internal_567be091811a7d5383afb4ca6e059681ec9cb1ee1b664ce3136494471ed1b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_23467055bec743d7f19360822f5e1469283447d733a0ee0923563db17165b9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23467055bec743d7f19360822f5e1469283447d733a0ee0923563db17165b9b9->enter($__internal_23467055bec743d7f19360822f5e1469283447d733a0ee0923563db17165b9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567be091811a7d5383afb4ca6e059681ec9cb1ee1b664ce3136494471ed1b388->leave($__internal_567be091811a7d5383afb4ca6e059681ec9cb1ee1b664ce3136494471ed1b388_prof);

        
        $__internal_23467055bec743d7f19360822f5e1469283447d733a0ee0923563db17165b9b9->leave($__internal_23467055bec743d7f19360822f5e1469283447d733a0ee0923563db17165b9b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67785e884b006f0d6f45e44d82f86083c2ca6878094a4cbb8d559d9f32cb9cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67785e884b006f0d6f45e44d82f86083c2ca6878094a4cbb8d559d9f32cb9cde->enter($__internal_67785e884b006f0d6f45e44d82f86083c2ca6878094a4cbb8d559d9f32cb9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84beb38798dcc51d34a056074d3260d6edeb64eb89e4985dbbacc5e668eed6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84beb38798dcc51d34a056074d3260d6edeb64eb89e4985dbbacc5e668eed6ae->enter($__internal_84beb38798dcc51d34a056074d3260d6edeb64eb89e4985dbbacc5e668eed6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_84beb38798dcc51d34a056074d3260d6edeb64eb89e4985dbbacc5e668eed6ae->leave($__internal_84beb38798dcc51d34a056074d3260d6edeb64eb89e4985dbbacc5e668eed6ae_prof);

        
        $__internal_67785e884b006f0d6f45e44d82f86083c2ca6878094a4cbb8d559d9f32cb9cde->leave($__internal_67785e884b006f0d6f45e44d82f86083c2ca6878094a4cbb8d559d9f32cb9cde_prof);

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
