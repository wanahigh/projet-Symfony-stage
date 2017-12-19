<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d9ec4fbf45c4fa33454caacd09978d4775285446bbe83ee326b4d409c9067741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b32aa3a7fa57b0aefa1ed043b792668b668951427ab1ac5cf9d0222a280d04c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32aa3a7fa57b0aefa1ed043b792668b668951427ab1ac5cf9d0222a280d04c0->enter($__internal_b32aa3a7fa57b0aefa1ed043b792668b668951427ab1ac5cf9d0222a280d04c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6c6f9933ee6f89ba284162a30f55aeac67abef4711ff4860b8981bc44a02de53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6f9933ee6f89ba284162a30f55aeac67abef4711ff4860b8981bc44a02de53->enter($__internal_6c6f9933ee6f89ba284162a30f55aeac67abef4711ff4860b8981bc44a02de53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32aa3a7fa57b0aefa1ed043b792668b668951427ab1ac5cf9d0222a280d04c0->leave($__internal_b32aa3a7fa57b0aefa1ed043b792668b668951427ab1ac5cf9d0222a280d04c0_prof);

        
        $__internal_6c6f9933ee6f89ba284162a30f55aeac67abef4711ff4860b8981bc44a02de53->leave($__internal_6c6f9933ee6f89ba284162a30f55aeac67abef4711ff4860b8981bc44a02de53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0374410127f0613b924ec15be7c78dca45e7393360fb35aaa38827e70f24029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0374410127f0613b924ec15be7c78dca45e7393360fb35aaa38827e70f24029->enter($__internal_f0374410127f0613b924ec15be7c78dca45e7393360fb35aaa38827e70f24029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_57af4796218e2c31797128b4792d5b7471df8e70f498b067186e7acff1ada77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af4796218e2c31797128b4792d5b7471df8e70f498b067186e7acff1ada77a->enter($__internal_57af4796218e2c31797128b4792d5b7471df8e70f498b067186e7acff1ada77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_57af4796218e2c31797128b4792d5b7471df8e70f498b067186e7acff1ada77a->leave($__internal_57af4796218e2c31797128b4792d5b7471df8e70f498b067186e7acff1ada77a_prof);

        
        $__internal_f0374410127f0613b924ec15be7c78dca45e7393360fb35aaa38827e70f24029->leave($__internal_f0374410127f0613b924ec15be7c78dca45e7393360fb35aaa38827e70f24029_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
