<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9a6b9b5e83a17ca65be4bc43c88d71e9aa829734cfbe026ed92852496f4c4ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ee0d94a614c218bffc417ceb0aa768ecc6bafb4f0360bad7f962f346f2390923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0d94a614c218bffc417ceb0aa768ecc6bafb4f0360bad7f962f346f2390923->enter($__internal_ee0d94a614c218bffc417ceb0aa768ecc6bafb4f0360bad7f962f346f2390923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_6f215bb36a7ec91b687e7d3c32d1118dea3af9cb2517abf3d93d7946636d1de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f215bb36a7ec91b687e7d3c32d1118dea3af9cb2517abf3d93d7946636d1de2->enter($__internal_6f215bb36a7ec91b687e7d3c32d1118dea3af9cb2517abf3d93d7946636d1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0d94a614c218bffc417ceb0aa768ecc6bafb4f0360bad7f962f346f2390923->leave($__internal_ee0d94a614c218bffc417ceb0aa768ecc6bafb4f0360bad7f962f346f2390923_prof);

        
        $__internal_6f215bb36a7ec91b687e7d3c32d1118dea3af9cb2517abf3d93d7946636d1de2->leave($__internal_6f215bb36a7ec91b687e7d3c32d1118dea3af9cb2517abf3d93d7946636d1de2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f390905b0b8347d919ad75f110ba42cb5a8440c85fc4b8a8292a1ad51003e01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f390905b0b8347d919ad75f110ba42cb5a8440c85fc4b8a8292a1ad51003e01f->enter($__internal_f390905b0b8347d919ad75f110ba42cb5a8440c85fc4b8a8292a1ad51003e01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5049231c2c45bbe5516fc2f770ffb572c2f55ef105f23bd9caf672a7d00b2dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5049231c2c45bbe5516fc2f770ffb572c2f55ef105f23bd9caf672a7d00b2dd9->enter($__internal_5049231c2c45bbe5516fc2f770ffb572c2f55ef105f23bd9caf672a7d00b2dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5049231c2c45bbe5516fc2f770ffb572c2f55ef105f23bd9caf672a7d00b2dd9->leave($__internal_5049231c2c45bbe5516fc2f770ffb572c2f55ef105f23bd9caf672a7d00b2dd9_prof);

        
        $__internal_f390905b0b8347d919ad75f110ba42cb5a8440c85fc4b8a8292a1ad51003e01f->leave($__internal_f390905b0b8347d919ad75f110ba42cb5a8440c85fc4b8a8292a1ad51003e01f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
