<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6dce2451199fe404519bed3393b2233fe5acc37d49585df85b8a438ec26c37f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_910a544a5fa32aac9ec9894964c6b6939f61e69d78ff1016aeb8a446727a8e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910a544a5fa32aac9ec9894964c6b6939f61e69d78ff1016aeb8a446727a8e6e->enter($__internal_910a544a5fa32aac9ec9894964c6b6939f61e69d78ff1016aeb8a446727a8e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_11bb05a6061d08c69bab21bad37dec7b71651c00274324cfe9c29a6faf24872b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bb05a6061d08c69bab21bad37dec7b71651c00274324cfe9c29a6faf24872b->enter($__internal_11bb05a6061d08c69bab21bad37dec7b71651c00274324cfe9c29a6faf24872b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910a544a5fa32aac9ec9894964c6b6939f61e69d78ff1016aeb8a446727a8e6e->leave($__internal_910a544a5fa32aac9ec9894964c6b6939f61e69d78ff1016aeb8a446727a8e6e_prof);

        
        $__internal_11bb05a6061d08c69bab21bad37dec7b71651c00274324cfe9c29a6faf24872b->leave($__internal_11bb05a6061d08c69bab21bad37dec7b71651c00274324cfe9c29a6faf24872b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2d5bc84b66e68aec32ccc7986670667344deb7739c92c390f2312f6d79b0882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d5bc84b66e68aec32ccc7986670667344deb7739c92c390f2312f6d79b0882->enter($__internal_b2d5bc84b66e68aec32ccc7986670667344deb7739c92c390f2312f6d79b0882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8f85cd69c73b4f7cb87e0e448a6217542727a9498fe998d12ea66fa430cffbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f85cd69c73b4f7cb87e0e448a6217542727a9498fe998d12ea66fa430cffbc2->enter($__internal_8f85cd69c73b4f7cb87e0e448a6217542727a9498fe998d12ea66fa430cffbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8f85cd69c73b4f7cb87e0e448a6217542727a9498fe998d12ea66fa430cffbc2->leave($__internal_8f85cd69c73b4f7cb87e0e448a6217542727a9498fe998d12ea66fa430cffbc2_prof);

        
        $__internal_b2d5bc84b66e68aec32ccc7986670667344deb7739c92c390f2312f6d79b0882->leave($__internal_b2d5bc84b66e68aec32ccc7986670667344deb7739c92c390f2312f6d79b0882_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
