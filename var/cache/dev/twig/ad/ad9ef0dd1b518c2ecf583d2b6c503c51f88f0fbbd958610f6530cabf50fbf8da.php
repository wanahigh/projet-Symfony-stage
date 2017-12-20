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
        $__internal_7d5ad0170cae7eb1c0b436a3d1787aad41b4750007e98812fd4eabb673b91970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5ad0170cae7eb1c0b436a3d1787aad41b4750007e98812fd4eabb673b91970->enter($__internal_7d5ad0170cae7eb1c0b436a3d1787aad41b4750007e98812fd4eabb673b91970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_d5a0ab558783823d66ace16e7ec27b4478d53957a6a4d60f6a83acbd65db4062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a0ab558783823d66ace16e7ec27b4478d53957a6a4d60f6a83acbd65db4062->enter($__internal_d5a0ab558783823d66ace16e7ec27b4478d53957a6a4d60f6a83acbd65db4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5ad0170cae7eb1c0b436a3d1787aad41b4750007e98812fd4eabb673b91970->leave($__internal_7d5ad0170cae7eb1c0b436a3d1787aad41b4750007e98812fd4eabb673b91970_prof);

        
        $__internal_d5a0ab558783823d66ace16e7ec27b4478d53957a6a4d60f6a83acbd65db4062->leave($__internal_d5a0ab558783823d66ace16e7ec27b4478d53957a6a4d60f6a83acbd65db4062_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_caf7bcb063da6aa233031bbc2ace660ece1bb948cb84f603b5919cd112e5b3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf7bcb063da6aa233031bbc2ace660ece1bb948cb84f603b5919cd112e5b3f2->enter($__internal_caf7bcb063da6aa233031bbc2ace660ece1bb948cb84f603b5919cd112e5b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_821c2c0de40f0f36929847556c70e7cbfd68fb411eb6ab7c66ac784a91634d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821c2c0de40f0f36929847556c70e7cbfd68fb411eb6ab7c66ac784a91634d99->enter($__internal_821c2c0de40f0f36929847556c70e7cbfd68fb411eb6ab7c66ac784a91634d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_821c2c0de40f0f36929847556c70e7cbfd68fb411eb6ab7c66ac784a91634d99->leave($__internal_821c2c0de40f0f36929847556c70e7cbfd68fb411eb6ab7c66ac784a91634d99_prof);

        
        $__internal_caf7bcb063da6aa233031bbc2ace660ece1bb948cb84f603b5919cd112e5b3f2->leave($__internal_caf7bcb063da6aa233031bbc2ace660ece1bb948cb84f603b5919cd112e5b3f2_prof);

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
