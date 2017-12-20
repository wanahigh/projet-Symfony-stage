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
        $__internal_e0ced68b100addb9530cd698734c262562852eb42a3f3e28241d476894bde5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ced68b100addb9530cd698734c262562852eb42a3f3e28241d476894bde5fd->enter($__internal_e0ced68b100addb9530cd698734c262562852eb42a3f3e28241d476894bde5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f83b9e38090397c740b7e9cc73c609ed43541ffad143e2201abf0a0b40616ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83b9e38090397c740b7e9cc73c609ed43541ffad143e2201abf0a0b40616ee4->enter($__internal_f83b9e38090397c740b7e9cc73c609ed43541ffad143e2201abf0a0b40616ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ced68b100addb9530cd698734c262562852eb42a3f3e28241d476894bde5fd->leave($__internal_e0ced68b100addb9530cd698734c262562852eb42a3f3e28241d476894bde5fd_prof);

        
        $__internal_f83b9e38090397c740b7e9cc73c609ed43541ffad143e2201abf0a0b40616ee4->leave($__internal_f83b9e38090397c740b7e9cc73c609ed43541ffad143e2201abf0a0b40616ee4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9058654f1eb5fb977b0398ae11e8144bd7f76d6d36c580c46ed938964d890900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9058654f1eb5fb977b0398ae11e8144bd7f76d6d36c580c46ed938964d890900->enter($__internal_9058654f1eb5fb977b0398ae11e8144bd7f76d6d36c580c46ed938964d890900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_975947db13a68599bd4a553ad2ef848e8e26ee05abe8c1a34e2b4671f9834d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975947db13a68599bd4a553ad2ef848e8e26ee05abe8c1a34e2b4671f9834d9b->enter($__internal_975947db13a68599bd4a553ad2ef848e8e26ee05abe8c1a34e2b4671f9834d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_975947db13a68599bd4a553ad2ef848e8e26ee05abe8c1a34e2b4671f9834d9b->leave($__internal_975947db13a68599bd4a553ad2ef848e8e26ee05abe8c1a34e2b4671f9834d9b_prof);

        
        $__internal_9058654f1eb5fb977b0398ae11e8144bd7f76d6d36c580c46ed938964d890900->leave($__internal_9058654f1eb5fb977b0398ae11e8144bd7f76d6d36c580c46ed938964d890900_prof);

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
