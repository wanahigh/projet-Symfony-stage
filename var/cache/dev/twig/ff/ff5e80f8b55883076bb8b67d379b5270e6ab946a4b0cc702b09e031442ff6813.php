<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_eb1da0f076682bbcf18314a3665f7a64649a0fa1ec8114c8cd0e8246e96168d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_be52eaaab8fb4c9d50e88e5b6612944e76c0d4d417a8af68550d30a2cdcd4a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be52eaaab8fb4c9d50e88e5b6612944e76c0d4d417a8af68550d30a2cdcd4a8a->enter($__internal_be52eaaab8fb4c9d50e88e5b6612944e76c0d4d417a8af68550d30a2cdcd4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_af74af3483f202d0af5b3ae85e36e18749fc6d43a84b2118b3205c1f4e5c992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af74af3483f202d0af5b3ae85e36e18749fc6d43a84b2118b3205c1f4e5c992a->enter($__internal_af74af3483f202d0af5b3ae85e36e18749fc6d43a84b2118b3205c1f4e5c992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be52eaaab8fb4c9d50e88e5b6612944e76c0d4d417a8af68550d30a2cdcd4a8a->leave($__internal_be52eaaab8fb4c9d50e88e5b6612944e76c0d4d417a8af68550d30a2cdcd4a8a_prof);

        
        $__internal_af74af3483f202d0af5b3ae85e36e18749fc6d43a84b2118b3205c1f4e5c992a->leave($__internal_af74af3483f202d0af5b3ae85e36e18749fc6d43a84b2118b3205c1f4e5c992a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b12e250c779d8c967d014654792fce55e0da4605f911b62b4f1704c746a5c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b12e250c779d8c967d014654792fce55e0da4605f911b62b4f1704c746a5c81->enter($__internal_4b12e250c779d8c967d014654792fce55e0da4605f911b62b4f1704c746a5c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f00aa209ae8381d8ce55b200212a2debcb351143e81666f192fb3823161d931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00aa209ae8381d8ce55b200212a2debcb351143e81666f192fb3823161d931a->enter($__internal_f00aa209ae8381d8ce55b200212a2debcb351143e81666f192fb3823161d931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f00aa209ae8381d8ce55b200212a2debcb351143e81666f192fb3823161d931a->leave($__internal_f00aa209ae8381d8ce55b200212a2debcb351143e81666f192fb3823161d931a_prof);

        
        $__internal_4b12e250c779d8c967d014654792fce55e0da4605f911b62b4f1704c746a5c81->leave($__internal_4b12e250c779d8c967d014654792fce55e0da4605f911b62b4f1704c746a5c81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
